<?php

use PHPUnit\Framework\TestCase;

use App\{User, ModelPrepare};
use Symfony\Component\Yaml\Parser;

#[Attributes\CoversClass(User::class)]
#[Attributes\CoversClass(Model::class)]
#[Attributes\CoversClass(ModelPrepare::class)]
class UserPrepareTest extends TestCase
{
  protected \PDO $pdo;
  protected $model;

  public function setUp(): void
  {
    $this->pdo = new \PDO('sqlite::memory:');
    $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    $this->pdo->exec(
      "CREATE TABLE IF NOT EXISTS user
          (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username VARCHAR( 225 ),
            createdAt DATETIME
          )
      "
    );

    $this->model = new ModelPrepare($this->pdo);

    $yaml = new Parser();
    $users = $yaml->parse(file_get_contents(__DIR__ . '/_data/seed.yml'))['users'];

    $this->model->hydrate($users);
  }

  public function testSeedsCreate()
  {
    $this->assertEquals(11, count($this->model->all()));
  }

  public function testInsertSave()
  {
    $user = new User;
    $user->username = "Phil";
    $this->model->save($user);

    $this->assertEquals(12, count($this->model->all()));
  }

  public function testUpdateSave()
  {
    $user = new User;
    $user->username = "Galois";
    $user->id = 1;

    $this->model->update($user);

    $userUpdate = $this->model->find(1);

    $this->assertEquals($userUpdate->username, "Galois");
  }

  public function testDelete()
  {
    $this->model->delete(1);

    $this->assertFalse($this->model->find(1)); // PDO retourne false si il n'y a pas de données
  }
}
