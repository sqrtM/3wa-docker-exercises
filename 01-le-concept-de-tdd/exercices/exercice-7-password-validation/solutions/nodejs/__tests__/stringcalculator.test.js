
const StringCalculator = require('../src/stringcalculator');

test('Empty string should return 0', () => {
  expect(StringCalculator.add("")).toBe(0);
});

test('Single number should return the number', () => {
  expect(StringCalculator.add("5")).toBe(5);
});

test('Two numbers separated by a comma and newline should return their sum', () => {
  expect(StringCalculator.add("2,3\n5")).toBe(10);
});

test('Numbers separated by newline should return their sum', () => {
  expect(StringCalculator.add("2\n3")).toBe(5);
});

test('Support different delimiters', () => {
  expect(StringCalculator.add("//;\n2;3")).toBe(5);
});
