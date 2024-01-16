
class StringCalculator {
    static add(numbers) {
      if (numbers === "") {
        return 0;
      }
  
      let delimiterRegex = /[,\n]/;
      let nums = numbers;
  
      if (numbers.startsWith("//")) {
        const customDelimiter = numbers[2];
        delimiterRegex = new RegExp(customDelimiter);
        nums = numbers.substring(4);
      }
  
      const numberArray = nums.split(delimiterRegex);
      const sum = numberArray.reduce((acc, num) => acc + parseInt(num), 0);
  
      return sum;
    }
  }
  
  module.exports = StringCalculator;
