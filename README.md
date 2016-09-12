specs:
capitalize first letter of a word:
  input: capitalize
  output: capitalize;
capitalize the first letter of every word in a string:
  input: the little mermaid
  output: The Little Mermaid
prepositions and articles do not get capitalized unless they are at the end:
  input: and, the, on, in, etc.
  output: and, the, on, in, etc.
words beginning with Mc have first and third letter capitalized:
  ex: mcminnemins
  output: McMinnemins
special words for apple products have the second letter capitalized
  input: iphone, ipad, etc
  output: iPhone, iPad, etc
