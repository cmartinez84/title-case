<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowolf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowolf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }
        function test_makeTitleCase_prepositions()
        {
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "catcher in the rye";

          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          $this->assertEquals("Catcher in the Rye", $result);
        }
        function test_TitleCaseGenerator_mc()
        {
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "mcdonalds";

          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          $this->assertEquals("McDonalds", $result);
        }
        function test_TitleCaseGenerator_apple()
        {
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "iphone";

          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          $this->assertEquals("iPhone", $result);
        }
    }

?>
