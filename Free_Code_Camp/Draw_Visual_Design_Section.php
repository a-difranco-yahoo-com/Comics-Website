<?php

   function GenerateAVDLesson1($pdf) {
       $pdf->AddLessonTitle("Create Visual Balance Using the text-align Property");
	   $pdf->AddLessonText("This section of the curriculum focuses on Applied Visual Design. The first group of challenges build on the given card layout to show a number of core principles.");
	   $pdf->AddLessonText("Text is often a large part of web content. CSS has several options for how to align it with the text-align property.");
	   $pdf->AddLessonText("text-align: justify; causes all lines of text except the last line to meet the left and right edges of the line box.");
	   $pdf->AddLessonText("text-align: center; centers the text");
	   $pdf->AddLessonText("text-align: right; right-aligns the text");
	   $pdf->AddLessonText("And text-align: left; (the default) left-aligns the text.");
	   $pdf->AddLessonText("Align the h4 tag's text, which says 'Google', to the center. Then justify the paragraph tag which contains information about how Google was founded.");

	   $pdf->DrawCodeArea("36");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    margin-right: 20px;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4>Google</h4>");
	   $pdf->AddLessonCode("      <p>Google was founded by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University.</p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }
   
   function GenerateAVDLesson2($pdf) {
       $pdf->AddLessonTitle("Adjust the Width of an Element Using the width Property");
	   $pdf->AddLessonText("You can specify the width of an element using the width property in CSS. Values can be given in relative length units (such as em), absolute length units (such as px), or as a percentage of its containing parent element. Here's an example that changes the width of an image to 220px:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("img {");
	   $pdf->AddLessonCode("  width: 220px;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Add a width property to the entire card and set it to an absolute value of 245px. Use the fullCard class to select the element.");

	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    margin-right: 20px;");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4>Google</h4>");
	   $pdf->AddLessonCode("      <p>Google was founded by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University.</p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson3($pdf) {
       $pdf->AddLessonTitle("Adjust the Height of an Element Using the height Property");
	   $pdf->AddLessonText("You can specify the height of an element using the height property in CSS, similar to the width property. Here's an example that changes the height of an image to 20px:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("img {");
	   $pdf->AddLessonCode("  height: 20px;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Add a height property to the h4 tag and set it to 25px.");
	   $pdf->AddLessonText("Note: You may need to be at 100% zoom to pass the test on this challenge.");

	   $pdf->DrawCodeArea("39");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    margin-right: 20px;");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4>Google</h4>");
	   $pdf->AddLessonCode("      <p>Google was founded by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University.</p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson4($pdf) {
       $pdf->AddLessonTitle("Use the strong Tag to Make Text Bold");
	   $pdf->AddLessonText("To make text bold, you can use the strong tag. This is often used to draw attention to text and symbolize that it is important. With the strong tag, the browser applies the CSS of font-weight: bold; to the element.");
	   $pdf->AddLessonText("Wrap a strong tag around 'Stanford University' inside the p tag (do not include the period).");

	   $pdf->DrawCodeArea("39");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4>Google</h4>");
	   $pdf->AddLessonCode("      <p>Google was founded by Larry Page and Sergey Brin while they were Ph.D. students at <strong>Stanford University</strong>.</p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson5($pdf) {
       $pdf->AddLessonTitle("Use the u Tag to Underline Text");
	   $pdf->AddLessonText("To underline text, you can use the u tag. This is often used to signify that a section of text is important, or something to remember. With the u tag, the browser applies the CSS of text-decoration: underline; to the element.");
	   $pdf->AddLessonText("Wrap the u tag only around the text 'Ph.D. students'.");
	   $pdf->AddLessonText("Note: Try to avoid using the u tag when it could be confused for a link. Anchor tags also have a default underlined formatting.");


	   $pdf->DrawCodeArea("42");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4>Google</h4>");
	   $pdf->AddLessonCode("      <p>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson6($pdf) {
       $pdf->AddLessonTitle("Use the em Tag to Italicize Text");
	   $pdf->AddLessonText("To emphasize text, you can use the em tag. This displays text as italicized, as the browser applies the CSS of font-style: italic; to the element.");
	   $pdf->AddLessonText("Wrap an em tag around the contents of the paragraph tag to give it emphasis.");


	   $pdf->DrawCodeArea("43");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4>Google</h4>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson7($pdf) {
       $pdf->AddLessonTitle("Use the s Tag to Strikethrough Text");
	   $pdf->AddLessonText("To strikethrough text, which is when a horizontal line cuts across the characters, you can use the s tag. It shows that a section of text is no longer valid. With the s tag, the browser applies the CSS of text-decoration: line-through; to the element.");
	   $pdf->AddLessonText("Wrap the s tag around 'Google' inside the h4 tag and then add the word Alphabet beside it, which should not have the strikethrough formatting.");


	   $pdf->DrawCodeArea("43");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><s>Google</s>Alphabet</h4>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson8($pdf) {
       $pdf->AddLessonTitle("Create a Horizontal Line Using the hr Element");
	   $pdf->AddLessonText("You can use the hr tag to add a horizontal line across the width of its containing element. This can be used to define a change in topic or to visually separate groups of content.");
	   $pdf->AddLessonText("Add an hr tag underneath the h4 which contains the card title.");
	   $pdf->AddLessonText("Note: In HTML, hr is a self-closing tag, and therefore doesn't need a separate closing tag.");

	   $pdf->DrawCodeArea("44");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><s>Google</s>Alphabet</h4>");
	   $pdf->AddLessonCode("      <hr>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson9($pdf) {
       $pdf->AddLessonTitle("Adjust the background-color Property of Text");
	   $pdf->AddLessonText("Instead of adjusting your overall background or the color of the text to make the foreground easily readable, you can add a background-color to the element holding the text you want to emphasize. This challenge uses rgba() instead of hex codes or normal rgb().");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("rgba stands for:");
	   $pdf->AddLessonCode("  r = red");
	   $pdf->AddLessonCode("  g = green");
	   $pdf->AddLessonCode("  b = blue");
	   $pdf->AddLessonCode("  a = alpha/level of opacity");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("The RGB values can range from 0 to 255. The alpha value can range from 1, which is fully opaque or a solid color, to 0, which is fully transparent or clear. rgba() is great to use in this case, as it allows you to adjust the opacity. This means you don't have to completely block out the background.");
	   $pdf->AddLessonText("You'll use background-color: rgba(45, 45, 45, 0.1) for this challenge. It produces a dark gray color that is nearly transparent given the low opacity value of 0.1.");
	   $pdf->AddLessonText("To make the text stand out more, adjust the background-color of the h4 element to the given rgba() value.");
	   $pdf->AddLessonText("Also for the h4, remove the height property and add padding of 10px.");

	   $pdf->DrawCodeArea("27");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    background-color: rgba(45, 45, 45, 0.1);");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   
       $pdf->AddLessonTitle("Adjust the background-color Property of Text (Cont'd)");
	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><s>Google</s>Alphabet</h4>");
	   $pdf->AddLessonCode("      <hr>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson10($pdf) {
       $pdf->AddLessonTitle("Adjust the Size of a Header Versus a Paragraph Tag");
	   $pdf->AddLessonText("The font size of header tags (h1 through h6) should generally be larger than the font size of paragraph tags. This makes it easier for the user to visually understand the layout and level of importance of everything on the page. You use the font-size property to adjust the size of the text in an element.");
	   $pdf->AddLessonText("To make the heading significantly larger than the paragraph, change the font-size of the h4 tag to 27 pixels.");

	   $pdf->DrawCodeArea("28");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    background-color: rgba(45, 45, 45, 0.1);");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("    font-size: 27px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   
       $pdf->AddLessonTitle("Adjust the background-color Property of Text (Cont'd)");
	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><s>Google</s>Alphabet</h4>");
	   $pdf->AddLessonCode("      <hr>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson11($pdf) {
       $pdf->AddLessonTitle("Add a box-shadow to a Card-like Element");
	   $pdf->AddLessonText("The box-shadow property applies one or more shadows to an element.");
	   $pdf->AddLessonText("The box-shadow property takes values for");
	   $pdf->AddLessonBullet("offset-x (how far to push the shadow horizontally from the element),");
	   $pdf->AddLessonBullet("offset-y (how far to push the shadow vertically from the element),");
	   $pdf->AddLessonBullet("blur-radius,");
	   $pdf->AddLessonBullet("spread-radius and");
	   $pdf->AddLessonBullet("color, in that order.");
	   $pdf->AddLessonText("The blur-radius and spread-radius values are optional.");
	   $pdf->AddLessonText("Multiple box-shadows can be created by using commas to separate properties of each box-shadow element.");
	   $pdf->AddLessonText("Here's an example of the CSS to create multiple shadows with some blur, at mostly-transparent black colors:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("The element now has an id of thumbnail. With this selector, use the example CSS values above to place a box-shadow on the card.");

	   $pdf->DrawCodeArea("31");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    background-color: rgba(45, 45, 45, 0.1);");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("    font-size: 27px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  #thumbnail {");
	   $pdf->AddLessonCode("    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);");
	   $pdf->AddLessonCode("  }");
	   
       $pdf->AddLessonTitle("Add a box-shadow to a Card-like Element (Cont'd)");
	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard' id='thumbnail'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><Alphabet</h4>");
	   $pdf->AddLessonCode("      <hr>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson12($pdf) {
       $pdf->AddLessonTitle("Decrease the Opacity of an Element");
	   $pdf->AddLessonText("The opacity property in CSS is used to adjust the opacity, or conversely, the transparency for an item.");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("A value of 1 is opaque, which isn't transparent at all.");
	   $pdf->AddLessonCode("A value of 0.5 is half see-through.");
	   $pdf->AddLessonCode("A value of 0 is completely transparent.");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("The value given will apply to the entire element, whether that's an image with some transparency, or the foreground and background colors for a block of text.");
	   $pdf->AddLessonText("Set the opacity of the anchor tags to 0.7 using links class to select them.");

	   $pdf->DrawCodeArea("31");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    background-color: rgba(45, 45, 45, 0.1);");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("    font-size: 27px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("    opacity: 0.7;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  #thumbnail {");
	   $pdf->AddLessonCode("    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   
       $pdf->AddLessonTitle("Decrease the Opacity of an Element (Cont'd)");
	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard' id='thumbnail'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><Alphabet</h4>");
	   $pdf->AddLessonCode("      <hr>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson13($pdf) {
       $pdf->AddLessonTitle("Use the text-transform Property to Make Text Uppercase");
	   $pdf->AddLessonText("The text-transform property in CSS is used to change the appearance of text. It's a convenient way to make sure text on a webpage appears consistently, without having to change the text content of the actual HTML elements.");
	   $pdf->AddLessonText("The following table shows how the different text-transformvalues change the example text 'Transform me'.");

	   $pdf->DrawCodeArea("7");
	   $pdf->AddLessonCode("Value       Result");
	   $pdf->AddLessonCode("lowercase   'transform me'");
	   $pdf->AddLessonCode("uppercase   'TRANSFORM ME'");
	   $pdf->AddLessonCode("capitalize  'Transform Me'");
	   $pdf->AddLessonCode("initial     Use the default value");
	   $pdf->AddLessonCode("inherit     Use the text-transform value from the parent element");
	   $pdf->AddLessonCode("none        Default: Use the original text");


	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Transform the text of the h4 to be uppercase using the text-transform property.");

	   $pdf->DrawCodeArea("32");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("    text-align: center; ");
	   $pdf->AddLessonCode("    background-color: rgba(45, 45, 45, 0.1);");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("    font-size: 27px;");
	   $pdf->AddLessonCode("    text-transform: uppercase;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    text-align: justify;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .links {");
	   $pdf->AddLessonCode("    text-align: left; ");
	   $pdf->AddLessonCode("    color: black;");
	   $pdf->AddLessonCode("    opacity: 0.7;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  #thumbnail {");
	   $pdf->AddLessonCode("    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fullCard {");
	   $pdf->AddLessonCode("    width: 245px;");
	   $pdf->AddLessonCode("    border: 1px solid #ccc;");
	   $pdf->AddLessonCode("    border-radius: 5px;");
	   $pdf->AddLessonCode("    margin: 10px 5px;");
	   $pdf->AddLessonCode("    padding: 4px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardContent {");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cardText {");
	   $pdf->AddLessonCode("    margin-bottom: 30px;");
	   $pdf->AddLessonCode("  }");
	   
       $pdf->AddLessonTitle("Use the text-transform Property to Make Text Uppercase (Cont'd)");
	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='fullCard' id='thumbnail'>");
	   $pdf->AddLessonCode("  <div class='cardContent'>");
	   $pdf->AddLessonCode("    <div class='cardText'>");
	   $pdf->AddLessonCode("      <h4><Alphabet</h4>");
	   $pdf->AddLessonCode("      <hr>");
	   $pdf->AddLessonCode("      <p><em>Google was founded by Larry Page and Sergey Brin while they were <u>Ph.D. students</u> at <strong>Stanford University</strong>.</em></p>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("    <div class='cardLinks'>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Larry_Page' target='_blank' class='links'>Larry Page</a>");
	   $pdf->AddLessonCode("      <a href='https://en.wikipedia.org/wiki/Sergey_Brin' target='_blank' class='links'>Sergey Brin</a>");
	   $pdf->AddLessonCode("    </div>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateAVDLesson14($pdf) {
       $pdf->AddLessonTitle("Set the font-size for Multiple Heading Elements");
	   $pdf->AddLessonText("The font-size property is used to specify how large the text is in a given element. This rule can be used for multiple elements to create visual consistency of text on a page. In this challenge, you'll set the values for all h1 through h6 tags to balance the heading sizes.");

	   $pdf->AddLessonBullet("Set the font-size of the h1 tag to 68px.");
	   $pdf->AddLessonBullet("Set the font-size of the h2 tag to 52px.");
	   $pdf->AddLessonBullet("Set the font-size of the h3 tag to 40px.");
	   $pdf->AddLessonBullet("Set the font-size of the h4 tag to 32px.");
	   $pdf->AddLessonBullet("Set the font-size of the h5 tag to 21px.");
	   $pdf->AddLessonBullet("Set the font-size of the h6 tag to 14px.");
	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("14");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h1 { font-size: 68px;}");
	   $pdf->AddLessonCode("  h2 { font-size: 52px;}");
	   $pdf->AddLessonCode("  h3 { font-size: 40px;}");
	   $pdf->AddLessonCode("  h4 { font-size: 32px;}");
	   $pdf->AddLessonCode("  h5 { font-size: 21px;}");
	   $pdf->AddLessonCode("  h6 { font-size: 14px;}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1>This is h1 text</h1>");
	   $pdf->AddLessonCode("<h2>This is h2 text</h2>");
	   $pdf->AddLessonCode("<h3>This is h3 text</h3>");
	   $pdf->AddLessonCode("<h4>This is h4 text</h4>");
	   $pdf->AddLessonCode("<h5>This is h5 text</h5>");
	   $pdf->AddLessonCode("<h6>This is h6 text</h6>");
   }

   function GenerateAVDLesson15($pdf) {
       $pdf->AddLessonTitle("Set the font-weight for Multiple Heading Elements");
	   $pdf->AddLessonText("You set the font-size of each heading tag in the last challenge, here you'll adjust the font-weight.");
	   $pdf->AddLessonText("The font-weight property sets how thick or thin characters are in a section of text.");

	   $pdf->AddLessonBullet("Set the font-weight of the h1 tag to 800.");
	   $pdf->AddLessonBullet("Set the font-weight of the h2 tag to 600.");
	   $pdf->AddLessonBullet("Set the font-weight of the h3 tag to 500.");
	   $pdf->AddLessonBullet("Set the font-weight of the h4 tag to 400.");
	   $pdf->AddLessonBullet("Set the font-weight of the h5 tag to 300.");
	   $pdf->AddLessonBullet("Set the font-weight of the h6 tag to 200.");
	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("32");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h1 {");
	   $pdf->AddLessonCode("     font-size:   68px;}");
	   $pdf->AddLessonCode("     font-weight: 800;}");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("     font-size:   52px;}");
	   $pdf->AddLessonCode("     font-weight: 600;}");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h3 {");
	   $pdf->AddLessonCode("     font-size:   40px;}");
	   $pdf->AddLessonCode("     font-weight: 500;}");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h4 {");
	   $pdf->AddLessonCode("     font-size:   32px;}");
	   $pdf->AddLessonCode("     font-weight: 400;}");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h5 {");
	   $pdf->AddLessonCode("     font-size:   21px;}");
	   $pdf->AddLessonCode("     font-weight: 300;}");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h6 {");
	   $pdf->AddLessonCode("     font-size:   14px;}");
	   $pdf->AddLessonCode("     font-weight: 200;}");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1>This is h1 text</h1>");
	   $pdf->AddLessonCode("<h2>This is h2 text</h2>");
	   $pdf->AddLessonCode("<h3>This is h3 text</h3>");
	   $pdf->AddLessonCode("<h4>This is h4 text</h4>");
	   $pdf->AddLessonCode("<h5>This is h5 text</h5>");
	   $pdf->AddLessonCode("<h6>This is h6 text</h6>");
   }

   function GenerateAVDLesson16($pdf) {
       $pdf->AddLessonTitle("Set the font-size of Paragraph Text");
	   $pdf->AddLessonText("The font-size property in CSS is not limited to headings, it can be applied to any element containing text.");
	   $pdf->AddLessonText("Change the value of the font-size property for the paragraph to 16px to make it more visible.");

	   $pdf->DrawCodeArea("12");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<p>");
	   $pdf->AddLessonCode("  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.");
	   $pdf->AddLessonCode("</p>");
   }

   function GenerateAVDLesson17($pdf) {
       $pdf->AddLessonTitle("Set the line-height of Paragraphs");
	   $pdf->AddLessonText("CSS offers the line-height property to change the height of each line in a block of text. As the name suggests, it changes the amount of vertical space that each line of text gets.");
	   $pdf->AddLessonText("Add a line-height property to the p tag and set it to 25px.");

	   $pdf->DrawCodeArea("13");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    line-height: 25px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<p>");
	   $pdf->AddLessonCode("  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.");
	   $pdf->AddLessonCode("</p>");
   }

   function GenerateAVDLesson18($pdf) {
       $pdf->AddLessonTitle("Adjust the Hover State of an Anchor Tag");
	   $pdf->AddLessonText("This challenge will touch on the usage of pseudo-classes. A pseudo-class is a keyword that can be added to selectors, in order to select a specific state of the element.");
	   $pdf->AddLessonText("For example, the styling of an anchor tag can be changed for its hover state using the :hover pseudo-class selector. Here's the CSS to change the color of the anchor tag to red during its hover state:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("a:hover {");
	   $pdf->AddLessonCode("  color: red;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("The code editor has a CSS rule to style all a tags black. Add a rule so that when the user hovers over the a tag, the color is blue.");

	   $pdf->DrawCodeArea("10");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  a {");
	   $pdf->AddLessonCode("    color: #000;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("a:hover {");
	   $pdf->AddLessonCode("  color: blue;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<a href='http://freecatphotoapp.com/' target='_blank'>CatPhotoApp</a>");
   }

   function GenerateAVDLesson19($pdf) {
       $pdf->AddLessonTitle("Change an Element's Relative Position");
	   $pdf->AddLessonText("CSS treats each HTML element as its own box, which is usually referred to as the CSS Box Model. Block-level items automatically start on a new line (think headings, paragraphs, and divs) while inline items sit within surrounding content (like images or spans). The default layout of elements in this way is called the normal flow of a document, but CSS offers the position property to override it.");
	   $pdf->AddLessonText("When the position of an element is set to relative, it allows you to specify how CSS should move it relative to its current position in the normal flow of the page. It pairs with the CSS offset properties of left or right, and top or bottom. These say how many pixels, percentages, or ems to move the item away from where it is normally positioned. The following example moves the paragraph 10 pixels away from the bottom:");

	   $pdf->DrawCodeArea("4");
	   $pdf->AddLessonCode("p {");
	   $pdf->AddLessonCode("  position: relative;");
	   $pdf->AddLessonCode("  bottom: 10px;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Changing an element's position to relative does not remove it from the normal flow - other elements around it still behave as if that item were in its default position. Note: Positioning gives you a lot of flexibility and power over the visual layout of a page. It's good to remember that no matter the position of elements, the underlying HTML markup should be organized and make sense when read from top to bottom. This is how users with visual impairments (who rely on assistive devices like screen readers) access your content.");
	   $pdf->AddLessonText("Change the position of the h2 to relative, and use a CSS offset to move it 15 pixels away from the top of where it sits in the normal flow. Notice there is no impact on the positions of the surrounding h1 and p elements.");

	   $pdf->DrawCodeArea("11");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("  position: relative;");
	   $pdf->AddLessonCode("  top: 15px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("  <h1>On Being Well-Positioned</h1>");
	   $pdf->AddLessonCode("  <h2>Move me!</h2>");
	   $pdf->AddLessonCode("  <p>I still think the h2 is where it normally sits.</p>");
	   $pdf->AddLessonCode("</body>");
}

   function GenerateAVDLesson20($pdf) {
       $pdf->AddLessonTitle("Move a Relatively Positioned Element with CSS Offsets");
	   $pdf->AddLessonText("The CSS offsets of top or bottom, and left or right tell the browser how far to offset an item relative to where it would sit in the normal flow of the document. You're offsetting an element away from a given spot, which moves the element away from the referenced side (effectively, the opposite direction). As you saw in the last challenge, using the top offset moved the h2 downwards. Likewise, using a left offset moves an item to the right.");
	   $pdf->AddLessonText("Use CSS offsets to move the h2 15 pixels to the right and 10 pixels up.");


	   $pdf->DrawCodeArea("12");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    position: relative;");
	   $pdf->AddLessonCode("    left:     15px;");
	   $pdf->AddLessonCode("    bottom:   10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("  <h1>On Being Well-Positioned</h1>");
	   $pdf->AddLessonCode("  <h2>Move me!</h2>");
	   $pdf->AddLessonCode("  <p>I still think the h2 is where it normally sits.</p>");
	   $pdf->AddLessonCode("</body>");
}

   function GenerateAVDLesson21($pdf) {
       $pdf->AddLessonTitle("Lock an Element to its Parent with Absolute Positioning");
	   $pdf->AddLessonText("The next option for the CSS position property is absolute, which locks the element in place relative to its parent container. Unlike the relative position, this removes the element from the normal flow of the document, so surrounding items ignore it. The CSS offset properties (top or bottom and left or right) are used to adjust the position.");
	   $pdf->AddLessonText("One nuance with absolute positioning is that it will be locked relative to its closest positioned ancestor. If you forget to add a position rule to the parent item, (this is typically done using position: relative;), the browser will keep looking up the chain and ultimately default to the body tag.");
	   $pdf->AddLessonText("Lock the #searchbar element to the top-right of its section parent by declaring its position as absolute. Give it top and right offsets of 50 pixels each.");

	   $pdf->DrawCodeArea("20");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  #searchbar {");
	   $pdf->AddLessonCode("    position: absolute;");
	   $pdf->AddLessonCode("    top:      50px;");
	   $pdf->AddLessonCode("    right:    50px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  section {");
	   $pdf->AddLessonCode("    position: relative;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("  <h1>Welcome!</h1>");
	   $pdf->AddLessonCode("  <section>");
	   $pdf->AddLessonCode("    <form id='searchbar'>");
	   $pdf->AddLessonCode("      <label for='search'>Search:</label>");
	   $pdf->AddLessonCode("      <input type='search' id='search' name='search'>");
	   $pdf->AddLessonCode("      <input type='submit' name='submit' value='Go!'>");
	   $pdf->AddLessonCode("    </form>");
	   $pdf->AddLessonCode("  </section>");
	   $pdf->AddLessonCode("</body>");
}

    function GenerateAVDLesson22($pdf) {
       $pdf->AddLessonTitle("Lock an Element to the Browser Window with Fixed Positioning");
	   $pdf->AddLessonText("The next layout scheme that CSS offers is the fixed position, which is a type of absolute positioning that locks an element relative to the browser window. Similar to absolute positioning, it's used with the CSS offset properties and also removes the element from the normal flow of the document. Other items no longer 'realize' where it is positioned, which may require some layout adjustments elsewhere.");
	   $pdf->AddLessonText("One key difference between the fixed and absolute positions is that an element with a fixed position won't move when the user scrolls.");
	   $pdf->AddLessonText("The navigation bar in the code is labeled with an id of navbar. Change its position to fixed, and offset it 0 pixels from the top and 0 pixels from the left. After you have added the code, scroll the preview window to see how the navigation stays in place.");

 	   $pdf->DrawCodeArea("35");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  body {");
	   $pdf->AddLessonCode("    min-height: 150vh;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  #navbar {");
	   $pdf->AddLessonCode("    position: fixed;");
	   $pdf->AddLessonCode("    top: 0px;");
	   $pdf->AddLessonCode("     left: 0px;");
	   $pdf->AddLessonCode("    width: 100%;");
	   $pdf->AddLessonCode("    background-color: #767676;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  nav ul {");
	   $pdf->AddLessonCode("    margin: 0px;");
	   $pdf->AddLessonCode("    padding: 5px 0px 5px 30px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  nav li {");
	   $pdf->AddLessonCode("    display: inline;");
	   $pdf->AddLessonCode("    margin-right: 20px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  a {");
	   $pdf->AddLessonCode("    text-decoration: none;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Welcome!</h1>");
	   $pdf->AddLessonCode("    <nav id='navbar'>");
	   $pdf->AddLessonCode("      <ul>");
	   $pdf->AddLessonCode("        <li><a href=''>Home</a></li>");
	   $pdf->AddLessonCode("        <li><a href=''>Contact</a></li>");
	   $pdf->AddLessonCode("      </ul>");
	   $pdf->AddLessonCode("    </nav>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("  <p>I shift up when the #navbar is fixed to the browser window.</p>");
	   $pdf->AddLessonCode("</body>");
}

    function GenerateAVDLesson23($pdf) {
       $pdf->AddLessonTitle("Push Elements Left or Right with the float Property");
	   $pdf->AddLessonText("The next positioning tool does not actually use position, but sets the float property of an element. Floating elements are removed from the normal flow of a document and pushed to either the left or right of their containing parent element. It's commonly used with the width property to specify how much horizontal space the floated element requires.");
	   $pdf->AddLessonText("The given markup would work well as a two-column layout, with the section and aside elements next to each other. Give the #left item a float of left and the #right item a float of right.");

 	   $pdf->DrawCodeArea("29");
	   $pdf->AddLessonCode("<head>");
	   $pdf->AddLessonCode("  <style>");
	   $pdf->AddLessonCode("    #left {");
	   $pdf->AddLessonCode("      float: left;");
	   $pdf->AddLessonCode("      width: 50%;");
	   $pdf->AddLessonCode("    }");
	   $pdf->AddLessonCode("    #right {");
	   $pdf->AddLessonCode("      float: right;");
	   $pdf->AddLessonCode("      width: 40%;");
	   $pdf->AddLessonCode("    }");
	   $pdf->AddLessonCode("    aside, section {");
	   $pdf->AddLessonCode("      padding: 2px;");
	   $pdf->AddLessonCode("      background-color: #ccc;");
	   $pdf->AddLessonCode("    }");
	   $pdf->AddLessonCode("  </style>");
	   $pdf->AddLessonCode("</head>");
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Welcome!</h1>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("  <section id='left'>");
	   $pdf->AddLessonCode("    <h2>Content</h2>");
	   $pdf->AddLessonCode("    <p>Good stuff</p>");
	   $pdf->AddLessonCode("  </section>");
	   $pdf->AddLessonCode("  <aside id='right'>");
	   $pdf->AddLessonCode("    <h2>Sidebar</h2>");
	   $pdf->AddLessonCode("    <p>Links</p>");
	   $pdf->AddLessonCode("  </aside>");
	   $pdf->AddLessonCode("</body>");
}

    function GenerateAVDLesson24($pdf) {
       $pdf->AddLessonTitle("Change the Position of Overlapping Elements with the z-index Property");
	   $pdf->AddLessonText("When elements are positioned to overlap (i.e. using position: absolute | relative | fixed | sticky), the element coming later in the HTML markup will, by default, appear on the top of the other elements. However, the z-index property can specify the order of how elements are stacked on top of one another. It must be an integer (i.e. a whole number and not a decimal), and higher values for the z-index property of an element move it higher in the stack than those with lower values.");
	   $pdf->AddLessonText("Add a z-index property to the element with the class name of first (the red rectangle) and set it to a value of 2 so it covers the other element (blue rectangle).");

 	   $pdf->DrawCodeArea("21");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  div {");
	   $pdf->AddLessonCode("    width: 60%;");
	   $pdf->AddLessonCode("    height: 200px;");
	   $pdf->AddLessonCode("    margin-top: 20px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .first {");
	   $pdf->AddLessonCode("    background-color: red;");
	   $pdf->AddLessonCode("    position: absolute;");
	   $pdf->AddLessonCode("    z-index: 2;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .second {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    position: absolute;");
	   $pdf->AddLessonCode("    left: 40px;");
	   $pdf->AddLessonCode("    top: 50px;");
	   $pdf->AddLessonCode("    z-index: 1;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='first'></div>");
	   $pdf->AddLessonCode("<div class='second'></div>");
}

    function GenerateAVDLesson25($pdf) {
       $pdf->AddLessonTitle("Center an Element Horizontally Using the margin Property");
	   $pdf->AddLessonText("Another positioning technique is to center a block element horizontally. One way to do this is to set its margin to a value of auto.");
	   $pdf->AddLessonText("This method works for images, too. Images are inline elements by default, but can be changed to block elements when you set the display property to block.");
	   $pdf->AddLessonText("Center the div on the page by adding a margin property with a value of auto.");

 	   $pdf->DrawCodeArea("9");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  div {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    height: 100px;");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("    margin: auto;");    
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div></div>");
}

    function GenerateAVDLesson26($pdf) {
       $pdf->AddLessonTitle("Learn about Complementary Colors");
	   $pdf->AddLessonText("Color theory and its impact on design is a deep topic and only the basics are covered in the following challenges. On a website, color can draw attention to content, evoke emotions, or create visual harmony. Using different combinations of colors can really change the look of a website, and a lot of thought can go into picking a color palette that works with your content.");
	   $pdf->AddLessonText("The color wheel is a useful tool to visualize how colors relate to each other - it's a circle where similar hues are neighbors and different hues are farther apart. When two colors are opposite each other on the wheel, they are called complementary colors. They have the characteristic that if they are combined, they 'cancel' each other out and create a gray color. However, when placed side-by-side, these colors appear more vibrant and produce a strong visual contrast.");
	   $pdf->AddLessonText("Some examples of complementary colors with their hex codes are:");

 	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("red (#FF0000) and cyan (#00FFFF)");
	   $pdf->AddLessonCode("green (#00FF00) and magenta (#FF00FF)");
	   $pdf->AddLessonCode("blue (#0000FF) and yellow (#FFFF00)");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("This is different than the outdated RYB color model that many of us were taught in school, which has different primary and complementary colors. Modern color theory uses the additive RGB model (like on a computer screen) and the subtractive CMY(K) model (like in printing). Read here for more information on this complex subject.");
	   $pdf->AddLessonText("There are many color picking tools available online that have an option to find the complement of a color.");
	   $pdf->AddLessonText("Note: For all color challenges: Using color can be a powerful way to add visual interest to a page. However, color alone should not be used as the only way to convey important information because users with visual impairments may not understand that content. This issue will be covered in more detail in the Applied Accessibility challenges.");
	   $pdf->AddLessonText("Change the background-color property of the blue and yellow classes to their respective colors. Notice how the colors look different next to each other than they do compared against the white background.");

 	   $pdf->DrawCodeArea("18");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  body {");
	   $pdf->AddLessonCode("    background-color: #FFFFFF;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .blue {");
	   $pdf->AddLessonCode("    background-color: #0000FF;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .yellow {");
	   $pdf->AddLessonCode("    background-color: #FFFF00;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  div {");
	   $pdf->AddLessonCode("    display: inline-block;");
	   $pdf->AddLessonCode("    height: 100px;");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<div class='blue'></div>");
	   $pdf->AddLessonCode("<div class='yellow'></div>");
}

    function GenerateAVDLesson27($pdf) {
       $pdf->AddLessonTitle("Learn about Tertiary Colors");
	   $pdf->AddLessonText("Computer monitors and device screens create different colors by combining amounts of red, green, and blue light. This is known as the RGB additive color model in modern color theory. Red (R), green (G), and blue (B) are called primary colors. Mixing two primary colors creates the secondary colors cyan (G + B), magenta (R + B) and yellow (R + G). You saw these colors in the Complementary Colors challenge. These secondary colors happen to be the complement to the primary color not used in their creation, and are opposite to that primary color on the color wheel. For example, magenta is made with red and blue, and is the complement to green.");
	   $pdf->AddLessonText("Tertiary colors are the result of combining a primary color with one of its secondary color neighbors. For example, within the RGB color model, red (primary) and yellow (secondary) make orange (tertiary). This adds six more colors to a simple color wheel for a total of twelve.");
	   $pdf->AddLessonText("There are various methods of selecting different colors that result in a harmonious combination in design. One example that can use tertiary colors is called the split-complementary color scheme. This scheme starts with a base color, then pairs it with the two colors that are adjacent to its complement. The three colors provide strong visual contrast in a design, but are more subtle than using two complementary colors.");
	   $pdf->AddLessonText("Here are three colors created using the split-complement scheme:");

 	   $pdf->DrawCodeArea("4");
	   $pdf->AddLessonCode("Color     Hex Code");
	   $pdf->AddLessonCode("orange    #FF7F00");
	   $pdf->AddLessonCode("cyan      #00FFFF");
	   $pdf->AddLessonCode("raspberry #FF007F");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Change the background-color property of the orange, cyan, and raspberry classes to their respective colors. Make sure to use the hex codes and not the color names.");

 	   $pdf->DrawCodeArea("23");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  body {");
	   $pdf->AddLessonCode("    background-color: #FFFFFF;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .orange {");
	   $pdf->AddLessonCode("    background-color: #FF7F00;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cyan {");
	   $pdf->AddLessonCode("    background-color: #00FFFF;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .raspberry {");
	   $pdf->AddLessonCode("    background-color: #FF007F;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  div {");
	   $pdf->AddLessonCode("    height: 100px;");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("    margin-bottom: 5px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<div class='orange'></div>");
	   $pdf->AddLessonCode("<div class='cyan'></div>");
	   $pdf->AddLessonCode("<div class='raspberry'></div>");
}

    function GenerateAVDLesson28($pdf) {
       $pdf->AddLessonTitle("Adjust the Color of Various Elements to Complementary Colors");
	   $pdf->AddLessonText("The Complementary Colors challenge showed that opposite colors on the color wheel can make each other appear more vibrant when placed side-by-side. However, the strong visual contrast can be jarring if it's overused on a website, and can sometimes make text harder to read if it's placed on a complementary-colored background. In practice, one of the colors is usually dominant and the complement is used to bring visual attention to certain content on the page.");
	   $pdf->AddLessonText("This page will use a shade of teal (#09A7A1) as the dominant color, and its orange (#FF790E) complement to visually highlight the sign-up buttons. Change the background-color of both the header and footer from black to the teal color. Then change the h2 text color to teal as well. Finally, change the background-color of the button to the orange color.");

 	   $pdf->DrawCodeArea("46");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  body {");
	   $pdf->AddLessonCode("    background-color: white;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  header {");
	   $pdf->AddLessonCode("    background-color: #09A7A1;");
	   $pdf->AddLessonCode("    color: white;");
	   $pdf->AddLessonCode("    padding: 0.25em;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    color: #09A7A1;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  button {");
	   $pdf->AddLessonCode("    background-color: #FF790E;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  footer {");
	   $pdf->AddLessonCode("    background-color: #09A7A1;");
	   $pdf->AddLessonCode("    color: white;");
	   $pdf->AddLessonCode("    padding: 0.5em;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<header>");
	   $pdf->AddLessonCode("  <h1>Cooking with FCC!</h1>");
	   $pdf->AddLessonCode("</header>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <article>");
	   $pdf->AddLessonCode("    <h2>Machine Learning in the Kitchen</h2>");
	   $pdf->AddLessonCode("    <p>Join this two day workshop that walks through how to implement cutting-edge snack-getting algorithms with a command line interface. Coding usually involves writing exact instructions, but sometimes you need your computer to execute flexible commands, like <code>fetch Pringles</code>.</p>");
	   $pdf->AddLessonCode("    <button>Sign Up</button>");
	   $pdf->AddLessonCode("  </article>");
	   $pdf->AddLessonCode("  <article>");
	   $pdf->AddLessonCode("    <h2>Bisection Vegetable Chopping</h2>");
	   $pdf->AddLessonCode("    <p>This week-long retreat will level-up your coding ninja skills to actual ninja skills. No longer is the humble bisection search limited to sorted arrays or coding interview questions, applying its concepts in the kitchen will have you chopping carrots in O(log n) time before you know it.</p>");
	   $pdf->AddLessonCode("    <button>Sign Up</button>");
	   $pdf->AddLessonCode("  </article>");
	   $pdf->AddLessonCode("</main>");
	   $pdf->AddLessonCode("<br>");
	   $pdf->AddLessonCode("<footer>&copy; 2018 FCC Kitchen</footer>");
}

   function GenerateVisualDesignManual($pdf) {
	   $pdf->AddSubject("Introduction to the Applied Visual Design Challenges");
	   GenerateAVDLesson1($pdf);
	   GenerateAVDLesson2($pdf);
	   GenerateAVDLesson3($pdf);
	   GenerateAVDLesson4($pdf);
	   GenerateAVDLesson5($pdf);
	   GenerateAVDLesson6($pdf);
	   GenerateAVDLesson7($pdf);
	   GenerateAVDLesson8($pdf);
	   GenerateAVDLesson9($pdf);
	   GenerateAVDLesson10($pdf);
	   GenerateAVDLesson11($pdf);
	   GenerateAVDLesson12($pdf);
	   GenerateAVDLesson13($pdf);
	   GenerateAVDLesson14($pdf);
	   GenerateAVDLesson15($pdf);
	   GenerateAVDLesson16($pdf);
	   GenerateAVDLesson17($pdf);
	   GenerateAVDLesson18($pdf);
	   GenerateAVDLesson19($pdf);
	   GenerateAVDLesson20($pdf);
	   GenerateAVDLesson21($pdf);
	   GenerateAVDLesson22($pdf);
	   GenerateAVDLesson23($pdf);
	   GenerateAVDLesson24($pdf);
	   GenerateAVDLesson25($pdf);
	   GenerateAVDLesson26($pdf);
	   GenerateAVDLesson27($pdf);
	   GenerateAVDLesson28($pdf);
   }

?>