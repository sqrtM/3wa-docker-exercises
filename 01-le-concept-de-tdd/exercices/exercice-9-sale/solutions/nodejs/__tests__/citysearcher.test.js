
const CitySearcher = require('../src/citysearcher');

describe('Search Cities', () => {
  const allCities = ['Paris', 'Budapest', 'Skopje', 'Rotterdam', 'Valence', 'Vancouver',
    'Amsterdam', 'Vienne', 'Sydney', 'New York City', 'Londres',
    'Bangkok', 'Hong Kong', 'Dubaï', 'Rome', 'Istanbul'];

  it('should return empty array for query less than 2 characters', () => {
    expect(CitySearcher.search('')).toEqual([]);
    expect(CitySearcher.search('a')).toEqual([]);
  });

  it('should return cities starting with the exact query (case-insensitive)', () => {
    expect(CitySearcher.search('va')).toEqual(['Valence', 'Vancouver']);
    expect(CitySearcher.search('LON')).toEqual(['Londres']);
  });

  it('should return city with partial name match (case-insensitive)', () => {
    expect(CitySearcher.search('ap')).toEqual(['Budapest']);
    expect(CitySearcher.search('van')).toEqual(['Vancouver']);
  });

  it('should return all cities for "*" query', () => {
    expect(CitySearcher.search('*')).toEqual(allCities);
  });
});
