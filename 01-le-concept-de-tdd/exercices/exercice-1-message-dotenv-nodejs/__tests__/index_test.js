let Message = require("../src/Message.js");

test('Assert message is in default french', () => {
    const message = new Message();
    expect(message.get()).toBe('Bonjour tout le monde!');
});

test('Assert message is in english', () => {
    const message = new Message();

    message.setLang('en');
    expect(message.get()).toBe('Hello World!');
});

test('Assert array size is 1', () => {
    const message = new Message();

    message.add(1);
    expect(message.getArray().length).toBe(1);
});

