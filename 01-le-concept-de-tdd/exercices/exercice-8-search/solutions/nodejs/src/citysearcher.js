
class CitySearcher {
  static search(searchText) {
      let cityDatabase = [
        "Paris", "Budapest", "Skopje", "Rotterdam", "Valence", "Vancouver",
        "Amsterdam", "Vienne", "Sydney", "New York City", "Londres", "Bangkok",
        "Hong Kong", "Dubaï", "Rome", "Istanbul"
    ]

      // Exigence 1
      if (searchText.length < 2 && searchText !== '*') {
          return [];
      }

      // Exigence 2, 3, 4, 5
      searchText = searchText.toLowerCase();
      const matchingCities = [];

      cityDatabase.forEach(city => {
          const lowercaseCity = city.toLowerCase();

          if (searchText === '*' || lowercaseCity.startsWith(searchText) || lowercaseCity.includes(searchText)) {
              matchingCities.push(city);
          }
      });

      return matchingCities;
    }
  }
  
  module.exports = CitySearcher;
