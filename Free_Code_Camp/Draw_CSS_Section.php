<?php

   function GenerateCSSLesson1($pdf) {
       $pdf->AddLessonTitle("Change the Color of Text");
	   $pdf->AddLessonText("Now let's change the color of some of our text.");
	   $pdf->AddLessonText("We can do this by changing the style of your h2 element.");
	   $pdf->AddLessonText("The property that is responsible for the color of an element's text is the color style property.");
	   $pdf->AddLessonText("Here's how you would set your h2 element's text color to blue:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<h2 style='color: blue;'>CatPhotoApp</h2>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Note that it is a good practice to end inline style declarations with a ; .");
	   $pdf->AddLessonText("Change your h2 element's style so that its text color is red.");

	   $pdf->DrawCodeArea("35");
	   $pdf->AddLessonCode("<h2 style='color: red;'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }
   
   function GenerateCSSLesson2($pdf) {
       $pdf->AddLessonTitle("Use CSS Selectors to Style Elements");
	   $pdf->AddLessonText("With CSS, there are hundreds of CSS properties that you can use to change the way an element looks on your page.");
	   $pdf->AddLessonText("When you entered <h2 style='color: red;'>CatPhotoApp</h2>, you were styling that individual h2 element with inline CSS, which stands for Cascading Style Sheets.");
	   $pdf->AddLessonText("That's one way to specify the style of an element, but there's a better way to apply CSS.");
	   $pdf->AddLessonText("At the top of your code, create a style block like this:");

	   $pdf->DrawCodeArea("2");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("</style>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Inside that style block, you can create a CSS selector for all h2 elements. For example, if you wanted all h2 elements to be red, you would add a style rule that looks like this:");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Note that it's important to have both opening and closing curly braces ({ and }) around each element's style rule(s). You also need to make sure that your element's style definition is between the opening and closing style tags. Finally, be sure to add a semicolon to the end of each of your element's style rules.");
	   $pdf->AddLessonText("Delete your h2 element's style attribute, and instead create a CSS style block. Add the necessary CSS to turn all h2 elements blue.");

       $pdf->AddLessonTitle("Use CSS Selectors to Style Elements (Cont'd)");
	   $pdf->DrawCodeArea("42");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    color: blue;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }
	   
   function GenerateCSSLesson3($pdf) {
       $pdf->AddLessonTitle("Use a CSS Class to Style an Element");
	   $pdf->AddLessonText("Classes are reusable styles that can be added to HTML elements.");
	   $pdf->AddLessonText("Here's an example CSS class declaration:");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .blue-text {");
	   $pdf->AddLessonCode("    color: blue;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("You can see that we've created a CSS class called blue-text within the <style> tag. You can apply a class to an HTML element like this: <h2 class='blue-text'>CatPhotoApp</h2> Note that in your CSS style element, class names start with a period. In your HTML elements' class attribute, the class name does not include the period.");
	   $pdf->AddLessonText("Inside your style element, change the h2 selector to .red-text and update the color's value from blue to red.");
	   $pdf->AddLessonText("Give your h2 element the class attribute with a value of 'red-text'.");

       $pdf->AddLessonTitle("Use a CSS Class to Style an Element (Cont'd)");
	   $pdf->DrawCodeArea("42");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson4($pdf) {
       $pdf->AddLessonTitle("Style Multiple Elements with a CSS Class");
	   $pdf->AddLessonText("Classes allow you to use the same CSS styles on multiple HTML elements. You can see this by applying your red-text class to the first p element.");

	   $pdf->DrawCodeArea("42");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson5($pdf) {
       $pdf->AddLessonTitle("Change the Font Size of an Element");
	   $pdf->AddLessonText("Font size is controlled by the font-size CSS property, like this:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("h1 {");
	   $pdf->AddLessonCode("  font-size: 30px;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Inside the same <style> tag that contains your red-text class, create an entry for p elements and set the font-size to 16 pixels (16px).");

	   $pdf->DrawCodeArea("46");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson6($pdf) {
       $pdf->AddLessonTitle("Set the Font Family of an Element");
	   $pdf->AddLessonText("You can set which font an element should use, by using the font-family property.");
	   $pdf->AddLessonText("For example, if you wanted to set your h2 element's font to sans-serif, you would use the following CSS:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("h2 {");
	   $pdf->AddLessonCode("  font-family: sans-serif;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Make all of your p elements use the monospace font.");

	   $pdf->DrawCodeArea("47");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson7($pdf) {
       $pdf->AddLessonTitle("Import a Google Font");
	   $pdf->AddLessonText("In addition to specifying common fonts that are found on most operating systems, we can also specify non-standard, custom web fonts for use on our website. There are many sources for web fonts on the Internet. For this example we will focus on the Google Fonts library.");
	   $pdf->AddLessonText("Google Fonts is a free library of web fonts that you can use in your CSS by referencing the font's URL.");
	   $pdf->AddLessonText("So, let's go ahead and import and apply a Google font (note that if Google is blocked in your country, you will need to skip this challenge).");
	   $pdf->AddLessonText("To import a Google Font, you can copy the font(s) URL from the Google Fonts library and then paste it in your HTML. For this challenge, we'll import the Lobster font. To do this, copy the following code snippet and paste it into the top of your code editor (before the opening style element):");

	   $pdf->DrawCodeArea("2");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Now you can use the Lobster font in your CSS by using Lobster as the FAMILY_NAME as in the following example:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("font-family: FAMILY_NAME, GENERIC_NAME;.");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("The GENERIC_NAME is optional, and is a fallback font in case the other specified font is not available. This is covered in the next challenge.");
	   $pdf->AddLessonText("Family names are case-sensitive and need to be wrapped in quotes if there is a space in the name. For example, you need quotes to use the 'Open Sans' font, but not to use the Lobster font.");
	   $pdf->AddLessonText("Create a font-family CSS rule that uses the Lobster font, and ensure that it will be applied to your h2 element.");

       $pdf->AddLessonTitle("Import a Google Font (Cont'd)");
	   $pdf->DrawCodeArea("52");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson8($pdf) {
       $pdf->AddLessonTitle("Specify How Fonts Should Degrade");
	   $pdf->AddLessonText("There are several default fonts that are available in all browsers. These generic font families include monospace, serif and sans-serif");
	   $pdf->AddLessonText("When one font isn't available, you can tell the browser to 'degrade' to another font.");
	   $pdf->AddLessonText("For example, if you wanted an element to use the Helvetica font, but degrade to the sans-serif font when Helvetica isn't available, you will specify it as follows:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("p {");
	   $pdf->AddLessonCode("  font-family: Helvetica, sans-serif;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Generic font family names are not case-sensitive. Also, they do not need quotes because they are CSS keywords.");
	   $pdf->AddLessonText("To begin, apply the monospace font to the h2 element, so that it now has two fonts - Lobster and monospace.");
	   $pdf->AddLessonText("In the last challenge, you imported the Lobster font using the link tag. Now comment out that import of the Lobster font (using the HTML comments you learned before) from Google Fonts so that it isn't available anymore. Notice how your h2 element degrades to the monospace font.");
	   $pdf->AddLessonText("Note: If you have the Lobster font installed on your computer, you won't see the degradation because your browser is able to find the font.");

       $pdf->AddLessonTitle("Specify How Fonts Should Degrade (Cont'd)");
	   $pdf->DrawCodeArea("52");
	   $pdf->AddLessonCode("<!-- <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> -->");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson9($pdf) {
       $pdf->AddLessonTitle("Size Your Images");
	   $pdf->AddLessonText("CSS has a property called width that controls an element's width. Just like with fonts, we'll use px (pixels) to specify the image's width.");
	   $pdf->AddLessonText("For example, if we wanted to create a CSS class called larger-image that gave HTML elements a width of 500 pixels, we'd use:");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .larger-image {");
	   $pdf->AddLessonCode("    width: 500px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Create a class called smaller-image and use it to resize the image so that it's only 100 pixels wide.");
	   $pdf->AddLessonText("Note: Due to browser implementation differences, you may need to be at 100% zoom to pass the tests on this challenge.");

       $pdf->AddLessonTitle("Size Your Images (Cont'd)");
	   $pdf->DrawCodeArea("56");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson10($pdf) {
       $pdf->AddLessonTitle("Add Borders Around Your Elements");
	   $pdf->AddLessonText("CSS borders have properties like style, color and width.");
	   $pdf->AddLessonText("For example, if we wanted to create a red, 5 pixel border around an HTML element, we could use this class:");


	   $pdf->DrawCodeArea("7");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .thin-red-border {");
	   $pdf->AddLessonCode("    border-color: red;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Create a class called thick-green-border. This class should add a 10px, solid, green border around an HTML element. Apply the class to your cat photo.");
	   $pdf->AddLessonText("Remember that you can apply multiple classes to an element using its class attribute, by separating each class name with a space. For example:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<img class='class1 class'>");

       $pdf->AddLessonTitle("Add Borders Around Your Elements (Cont'd)");
	   $pdf->DrawCodeArea("62");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson11($pdf) {
       $pdf->AddLessonTitle("Add Rounded Corners with border-radius");
	   $pdf->AddLessonText("Your cat photo currently has sharp corners. We can round out those corners with a CSS property called border-radius.");
	   $pdf->AddLessonText("You can specify a border-radius with pixels. Give your cat photo a border-radius of 10px.");
	   $pdf->AddLessonText("Note: This challenge allows for multiple possible solutions. For example, you may add border-radius to either the .thick-green-border class or the .smaller-image class.");

	   $pdf->DrawCodeArea("23");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-radius: 10px;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");

       $pdf->AddLessonTitle("Add Rounded Corners with border-radius (Cont'd)");
	   $pdf->DrawCodeArea("39");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson12($pdf) {
       $pdf->AddLessonTitle("Make Circular Images with a border-radius");
	   $pdf->AddLessonText("In addition to pixels, you can also specify the border-radius using a percentage.");
	   $pdf->AddLessonText("Give your cat photo a border-radius of 50%.");

	   $pdf->DrawCodeArea("24");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-radius: 50%;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   
       $pdf->AddLessonTitle("Make Circular Images with a border-radius (Cont'd)");
	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson13($pdf) {
       $pdf->AddLessonTitle("Give a Background Color to a div Element");
	   $pdf->AddLessonText("You can set an element's background color with the background-color property.");
	   $pdf->AddLessonText("For example, if you wanted an element's background color to be green, you'd put this within your style element:");


	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode(".green-background {");
	   $pdf->AddLessonCode("  background-color: green;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Create a class called silver-background with the background-color of silver. Assign this class to your div element.");

	   $pdf->DrawCodeArea("26");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-radius: 50%;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .silver-background {");
	   $pdf->AddLessonCode("    background-color: silver;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");

       $pdf->AddLessonTitle("Give a Background Color to a div Element (Cont'd)");
	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div class='silver-background'>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson14($pdf) {
       $pdf->AddLessonTitle("Set the id of an Element");
	   $pdf->AddLessonText("In addition to classes, each HTML element can also have an id attribute.");
	   $pdf->AddLessonText("There are several benefits to using id attributes: You can use an id to style a single element and later you'll learn that you can use them to select and modify specific elements with JavaScript.");
	   $pdf->AddLessonText("id attributes should be unique. Browsers won't enforce this, but it is a widely agreed upon best practice. So please don't give more than one element the same id attribute.");
	   $pdf->AddLessonText("Here's an example of how you give your h2 element the id of cat-photo-app:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<h2 id='cat-photo-app'>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Give your form element the id cat-photo-form.");

	   $pdf->DrawCodeArea("26");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-radius: 50%;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .silver-background {");
	   $pdf->AddLessonCode("    background-color: silver;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");

       $pdf->AddLessonTitle("Set the id of an Element (Cont'd)");
	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div class='silver-background'>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo' id='cat-photo-form'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson15($pdf) {
       $pdf->AddLessonTitle("Use an id Attribute to Style an Element");
	   $pdf->AddLessonText("One cool thing about id attributes is that, like classes, you can style them using CSS.");
	   $pdf->AddLessonText("However, an id is not reusable and should only be applied to one element. An id also has a higher specificity (importance) than a class so if both are applied to the same element and have conflicting styles, the styles of the id will be applied.");
	   $pdf->AddLessonText("Here's an example of how you can take your element with the id attribute of cat-photo-element and give it the background color of green. In your style element:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("#cat-photo-element {");
	   $pdf->AddLessonCode("  background-color: green;");
	   $pdf->AddLessonCode("}");
	   
	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Note that inside your style element, you always reference classes by putting a . in front of their names. You always reference ids by putting a # in front of their names.");
	   $pdf->AddLessonText("Try giving your form, which now has the id attribute of cat-photo-form, a green background.");


	   $pdf->DrawCodeArea("29");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-radius: 50%;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .silver-background {");
	   $pdf->AddLessonCode("    background-color: silver;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("#cat-photo-form {");
	   $pdf->AddLessonCode("  background-color: green;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");

       $pdf->AddLessonTitle("Use an id Attribute to Style an Element (Cont'd)");
	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div class='silver-background'>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo' id='cat-photo-form'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson16($pdf) {
       $pdf->AddLessonTitle("Adjust the Padding of an Element");
	   $pdf->AddLessonText("Now let's put our Cat Photo App away for a little while and learn more about styling HTML.");
	   $pdf->AddLessonText("You may have already noticed this, but all HTML elements are essentially little rectangles.");
	   $pdf->AddLessonText("Three important properties control the space that surrounds each HTML element: padding, margin, and border.");
	   $pdf->AddLessonText("An element's padding controls the amount of space between the element's content and its border.");
	   $pdf->AddLessonText("Here, we can see that the blue box and the red box are nested within the yellow box. Note that the red box has more padding than the blue box.");
	   $pdf->AddLessonText("When you increase the blue box's padding, it will increase the distance (padding) between the text and the border around it.");
	   $pdf->AddLessonText("Change the padding of your blue box to match that of your red box.");

	   $pdf->DrawCodeArea("36");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson17($pdf) {
       $pdf->AddLessonTitle("Adjust the Margin of an Element");
	   $pdf->AddLessonText("An element's margin controls the amount of space between an element's border and surrounding elements.");
	   $pdf->AddLessonText("Here, we can see that the blue box and the red box are nested within the yellow box. Note that the red box has a bigger margin than the blue box, making it appear smaller.");
	   $pdf->AddLessonText("When you increase the blue box's margin, it will increase the distance between its border and surrounding elements.");
	   $pdf->AddLessonText("Change the margin of the blue box to match that of the red box.");

	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px;");
	   $pdf->AddLessonCode("    margin: 20px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px;");
	   $pdf->AddLessonCode("    margin: 20px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson18($pdf) {
       $pdf->AddLessonTitle("Add a Negative Margin to an Element");
	   $pdf->AddLessonText("An element's margin controls the amount of space between an element's border and surrounding elements.");
	   $pdf->AddLessonText("If you set an element's margin to a negative value, the element will grow larger.");
	   $pdf->AddLessonText("Try to set the margin to a negative value like the one for the red box.");
	   $pdf->AddLessonText("Change the margin of the blue box to -15px, so it fills the entire horizontal width of the yellow box around it.");

	   $pdf->DrawCodeArea("37");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px;");
	   $pdf->AddLessonCode("    margin: -15px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px;");
	   $pdf->AddLessonCode("    margin: -15px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson19($pdf) {
       $pdf->AddLessonTitle("Add Different Padding to Each Side of an Element");
	   $pdf->AddLessonText("Sometimes you will want to customize an element so that it has different amounts of padding on each of its sides.");
	   $pdf->AddLessonText("CSS allows you to control the padding of all four individual sides of an element with the padding-top, padding-right, padding-bottom, and padding-left properties.");
	   $pdf->AddLessonText("Give the blue box a padding of 40px on its top and left side, but only 20px on its bottom and right side.");

	   $pdf->DrawCodeArea("42");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding-top: 40px;");
	   $pdf->AddLessonCode("    padding-right: 20px;");
	   $pdf->AddLessonCode("    padding-bottom: 20px;");
	   $pdf->AddLessonCode("    padding-left: 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding-top: 40px;");
	   $pdf->AddLessonCode("    padding-right: 20px;");
	   $pdf->AddLessonCode("    padding-bottom: 20px;");
	   $pdf->AddLessonCode("    padding-left: 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson20($pdf) {
       $pdf->AddLessonTitle("Add Different Margins to Each Side of an Element");
	   $pdf->AddLessonText("Sometimes you will want to customize an element so that it has a different margin on each of its sides.");
	   $pdf->AddLessonText("CSS allows you to control the margin of all four individual sides of an element with the margin-top, margin-right, margin-bottom, and margin-left properties.");
	   $pdf->AddLessonText("Give the blue box a margin of 40px on its top and left side, but only 20px on its bottom and right side.");

	   $pdf->DrawCodeArea("42");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 10px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    margin-top: 40px;");
	   $pdf->AddLessonCode("    margin-right: 20px;");
	   $pdf->AddLessonCode("    margin-bottom: 20px;");
	   $pdf->AddLessonCode("    margin-left: 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    margin-top: 40px;");
	   $pdf->AddLessonCode("    margin-right: 20px;");
	   $pdf->AddLessonCode("    margin-bottom: 20px;");
	   $pdf->AddLessonCode("    margin-left: 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson21($pdf) {
       $pdf->AddLessonTitle("Use Clockwise Notation to Specify the Padding of an Element");
	   $pdf->AddLessonText("Instead of specifying an element's padding-top, padding-right, padding-bottom, and padding-left properties individually, you can specify them all in one line, like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("padding: 10px 20px 10px 20px;");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("These four values work like a clock: top, right, bottom, left, and will produce the exact same result as using the side-specific padding instructions.");
	   $pdf->AddLessonText("Use Clockwise Notation to give the '.blue-box' class a padding of 40px on its top and left side, but only 20px on its bottom and right side.");

	   $pdf->DrawCodeArea("36");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    padding: 40px 20px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson22($pdf) {
       $pdf->AddLessonTitle("Use Clockwise Notation to Specify the Margin of an Element");
	   $pdf->AddLessonText("Let's try this again, but with margin this time.");
	   $pdf->AddLessonText("Instead of specifying an element's margin-top, margin-right, margin-bottom, and margin-left properties individually, you can specify them all in one line, like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("margin: 10px 20px 10px 20px;");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("These four values work like a clock: top, right, bottom, left, and will produce the exact same result as using the side-specific margin instructions.");
	   $pdf->AddLessonText("Use Clockwise Notation to give the element with the blue-box class a margin of 40px on its top and left side, but only 20px on its bottom and right side.");

	   $pdf->DrawCodeArea("36");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: crimson;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    margin: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .blue-box {");
	   $pdf->AddLessonCode("    background-color: blue;");
	   $pdf->AddLessonCode("    color: #fff;");
	   $pdf->AddLessonCode("    margin: 40px 20px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box blue-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson23($pdf) {
       $pdf->AddLessonTitle("Use Attribute Selectors to Style Elements");
	   $pdf->AddLessonText("You have been adding id or class attributes to elements that you wish to specifically style. These are known as ID and class selectors. There are other CSS Selectors you can use to select custom groups of elements to style.");
	   $pdf->AddLessonText("Let's bring out CatPhotoApp again to practice using CSS Selectors.");
	   $pdf->AddLessonText("For this challenge, you will use the [attr=value] attribute selector to style the checkboxes in CatPhotoApp. This selector matches and styles elements with a specific attribute value. For example, the below code changes the margins of all elements with the attribute type and a corresponding value of radio:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("[type='radio'] {");
	   $pdf->AddLessonCode("  margin: 20px 0px 20px 0px;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Using the type attribute selector, try to give the checkboxes in CatPhotoApp a top margin of 10px and a bottom margin of 15px.");

	   $pdf->DrawCodeArea("35");
	   $pdf->AddLessonCode("<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: red;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  h2 {");
	   $pdf->AddLessonCode("    font-family: Lobster, monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  p {");
	   $pdf->AddLessonCode("    font-size: 16px;");
	   $pdf->AddLessonCode("    font-family: monospace;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .thick-green-border {");
	   $pdf->AddLessonCode("    border-color: green;");
	   $pdf->AddLessonCode("    border-width: 10px;");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-radius: 50%;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .smaller-image {");
	   $pdf->AddLessonCode("    width: 100px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .silver-background {");
	   $pdf->AddLessonCode("    background-color: silver;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("[type='checkbox'] {");
	   $pdf->AddLessonCode("  margin: 10px 0px 15px 0px;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");

       $pdf->AddLessonTitle("Use Attribute Selectors to Style Elements (Cont'd)");
	   $pdf->DrawCodeArea("38");
	   $pdf->AddLessonCode("<h2 class='red-text'>CatPhotoApp</h2>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <p class='red-text'>Click here to view more <a href='#'>cat photos</a>.</p>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <a href='#'><img class='smaller-image thick-green-border' src='https://bit.ly/fcc-relaxing-cat' alt='A cute orange cat lying on its back.'></a>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <div class='silver-background'>");
	   $pdf->AddLessonCode("    <p>Things cats love:</p>");
	   $pdf->AddLessonCode("    <ul>");
	   $pdf->AddLessonCode("      <li>cat nip</li>");
	   $pdf->AddLessonCode("      <li>laser pointers</li>");
	   $pdf->AddLessonCode("      <li>lasagna</li>");
	   $pdf->AddLessonCode("    </ul>");
	   $pdf->AddLessonCode("    <p>Top 3 things cats hate:</p>");
	   $pdf->AddLessonCode("    <ol>");
	   $pdf->AddLessonCode("      <li>flea treatment</li>");
	   $pdf->AddLessonCode("      <li>thunder</li>");
	   $pdf->AddLessonCode("      <li>other cats</li>");
	   $pdf->AddLessonCode("    </ol>");
	   $pdf->AddLessonCode("  </div>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <form action='/submit-cat-photo' id='cat-photo-form'>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor' checked> Indoor</label>");
	   $pdf->AddLessonCode("    <label><input type='radio' name='indoor-outdoor'> Outdoor</label><br>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality' checked> Loving</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Lazy</label>");
	   $pdf->AddLessonCode("    <label><input type='checkbox' name='personality'> Energetic</label><br>");
	   $pdf->AddLessonCode("    <input type='text' placeholder='cat photo URL' required>");
	   $pdf->AddLessonCode("    <button type='submit'>Submit</button>");
	   $pdf->AddLessonCode("  </form>");
	   $pdf->AddLessonCode("</main>");
   }

   function GenerateCSSLesson24($pdf) {
       $pdf->AddLessonTitle("Understand Absolute versus Relative Units");
	   $pdf->AddLessonText("The last several challenges all set an element's margin or padding with pixels (px). Pixels are a type of length unit, which is what tells the browser how to size or space an item. In addition to px, CSS has a number of different length unit options that you can use.");
	   $pdf->AddLessonText("The two main types of length units are absolute and relative. Absolute units tie to physical units of length. For example, in and mm refer to inches and millimeters, respectively. Absolute length units approximate the actual measurement on a screen, but there are some differences depending on a screen's resolution.");
	   $pdf->AddLessonText("Relative units, such as em or rem, are relative to another length value. For example, em is based on the size of an element's font. If you use it to set the font-size property itself, it's relative to the parent's font-size.");
	   $pdf->AddLessonText("Note: There are several relative unit options that are tied to the size of the viewport. They are covered in the Responsive Web Design Principles section.");
	   $pdf->AddLessonText("Add a padding property to the element with class red-box and set it to 1.5em.");

	   $pdf->DrawCodeArea("36");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .injected-text {");
	   $pdf->AddLessonCode("    margin-bottom: -25px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .box {");
	   $pdf->AddLessonCode("    border-style: solid;");
	   $pdf->AddLessonCode("    border-color: black;");
	   $pdf->AddLessonCode("    border-width: 5px;");
	   $pdf->AddLessonCode("    text-align: center;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .yellow-box {");
	   $pdf->AddLessonCode("    background-color: yellow;");
	   $pdf->AddLessonCode("    padding: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .red-box {");
	   $pdf->AddLessonCode("    background-color: red;");
	   $pdf->AddLessonCode("    margin: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("    padding: 1.5em;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  .green-box {");
	   $pdf->AddLessonCode("    background-color: green;");
	   $pdf->AddLessonCode("    margin: 20px 40px 20px 40px;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h5 class='injected-text'>margin</h5>");
	   $pdf->AddLessonCode("<div class='box yellow-box'>");
	   $pdf->AddLessonCode("  <h5 class='box red-box'>padding</h5>");
	   $pdf->AddLessonCode("  <h5 class='box green-box'>padding</h5>");
	   $pdf->AddLessonCode("</div>");
   }

   function GenerateCSSLesson25($pdf) {
       $pdf->AddLessonTitle("Style the HTML Body Element");
	   $pdf->AddLessonText("Now let's start fresh and talk about CSS inheritance.");
	   $pdf->AddLessonText("Every HTML page has a body element.");
	   $pdf->AddLessonText("We can prove that the body element exists here by giving it a background-color of black.");
	   $pdf->AddLessonText("We can do this by adding the following to our style element:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
   }

   function GenerateCSSLesson26($pdf) {
       $pdf->AddLessonTitle("Inherit Styles from the Body Element");
	   $pdf->AddLessonText("Now we've proven that every HTML page has a body element, and that its body element can also be styled with CSS.");
	   $pdf->AddLessonText("Remember, you can style your body element just like any other HTML element, and all your other elements will inherit your body element's styles.");
	   $pdf->AddLessonText("First, create a h1 element with the text Hello World");
	   $pdf->AddLessonText("Then, let's give all elements on your page the color of green by adding color: green; to your body element's style declaration.");
	   $pdf->AddLessonText("Finally, give your body element the font-family of monospace by adding font-family: monospace; to your body element's style declaration.");

	   $pdf->DrawCodeArea("8");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("  color: green;");
	   $pdf->AddLessonCode("  font-family: monospace;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1>Hello World</h1>");
   }

   function GenerateCSSLesson27($pdf) {
       $pdf->AddLessonTitle("Prioritize One Style Over Another");
	   $pdf->AddLessonText("Sometimes your HTML elements will receive multiple styles that conflict with one another.");
	   $pdf->AddLessonText("For example, your h1 element can't be both green and pink at the same time.");
	   $pdf->AddLessonText("Let's see what happens when we create a class that makes text pink, then apply it to an element. Will our class override the body element's color: green; CSS property?");
	   $pdf->AddLessonText("Create a CSS class called pink-text that gives an element the color pink.");
	   $pdf->AddLessonText("Give your h1 element the class of pink-text.");

	   $pdf->DrawCodeArea("11");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("  color: green;");
	   $pdf->AddLessonCode("  font-family: monospace;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".pink-text{");
	   $pdf->AddLessonCode("  color: pink;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1 class='pink-text'>Hello World</h1>");
   }

   function GenerateCSSLesson28($pdf) {
       $pdf->AddLessonTitle("Override Styles in Subsequent CSS");
	   $pdf->AddLessonText("Our 'pink-text' class overrode our body element's CSS declaration!");
	   $pdf->AddLessonText("We just proved that our classes will override the body element's CSS. So the next logical question is, what can we do to override our pink-text class?");
	   $pdf->AddLessonText("Create an additional CSS class called blue-text that gives an element the color blue. Make sure it's below your pink-text class declaration.");
	   $pdf->AddLessonText("Apply the blue-text class to your h1 element in addition to your pink-text class, and let's see which one wins.");
	   $pdf->AddLessonText("Applying multiple class attributes to a HTML element is done with a space between them like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("class='class1 class2'");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Note: It doesn't matter which order the classes are listed in the HTML element.");
	   $pdf->AddLessonText("However, the order of the class declarations in the <style> section is what is important. The second declaration will always take precedence over the first. Because .blue-text is declared second, it overrides the attributes of .pink-text");

	   $pdf->DrawCodeArea("14");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("  color: green;");
	   $pdf->AddLessonCode("  font-family: monospace;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".pink-text{");
	   $pdf->AddLessonCode("  color: pink;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".blue-text{");
	   $pdf->AddLessonCode("  color: blue;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1 class='blue-text pink-text'>Hello World</h1>");
   }

   function GenerateCSSLesson29($pdf) {
       $pdf->AddLessonTitle("Override Class Declarations by Styling ID Attributes");
	   $pdf->AddLessonText("We just proved that browsers read CSS from top to bottom in order of their declaration. That means that, in the event of a conflict, the browser will use whichever CSS declaration came last. Notice that if we even had put blue-text before pink-text in our h1 element's classes, it would still look at the declaration order and not the order of their use!");
	   $pdf->AddLessonText("But we're not done yet. There are other ways that you can override CSS. Do you remember id attributes?");
	   $pdf->AddLessonText("Let's override your pink-text and blue-text classes, and make your h1 element orange, by giving the h1 element an id and then styling that id.");
	   $pdf->AddLessonText("Give your h1 element the id attribute of orange-text. Remember, id styles look like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<h1 id='orange-text'>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Leave the blue-text and pink-text classes on your h1 element.");
	   $pdf->AddLessonText("Create a CSS declaration for your orange-text id in your style element. Here's an example of what this looks like:");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("#brown-text {");
	   $pdf->AddLessonCode("  color: brown;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Note: It doesn't matter whether you declare this CSS above or below pink-text class, since id attribute will always take precedence.");

	   $pdf->DrawCodeArea("17");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("  color: green;");
	   $pdf->AddLessonCode("  font-family: monospace;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".pink-text{");
	   $pdf->AddLessonCode("  color: pink;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".blue-text{");
	   $pdf->AddLessonCode("  color: blue;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("#orange-text{");
	   $pdf->AddLessonCode("  color: orange;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1 id='orange-text' class='blue-text pink-text'>Hello World</h1>");
   }

   function GenerateCSSLesson30($pdf) {
       $pdf->AddLessonTitle("Override Class Declarations with Inline Styles");
	   $pdf->AddLessonText("So we've proven that id declarations override class declarations, regardless of where they are declared in your style element CSS.");
	   $pdf->AddLessonText("There are other ways that you can override CSS. Do you remember inline styles?");
	   $pdf->AddLessonText("Use an inline style to try to make our h1 element white. Remember, in line styles look like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<h1 style='color: green;'>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Leave the blue-text and pink-text classes on your h1 element.");

	   $pdf->DrawCodeArea("18");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("  color: green;");
	   $pdf->AddLessonCode("  font-family: monospace;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".pink-text{");
	   $pdf->AddLessonCode("  color: pink;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".blue-text{");
	   $pdf->AddLessonCode("  color: blue;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("#orange-text{");
	   $pdf->AddLessonCode("  color: orange;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1 id='orange-text' class='blue-text pink-text' style='color: white;'>Hello World</h1>");
   }

   function GenerateCSSLesson31($pdf) {
       $pdf->AddLessonTitle("Override All Other Styles by using Important");
	   $pdf->AddLessonText("Yay! We just proved that inline styles will override all the CSS declarations in your style element.");
	   $pdf->AddLessonText("But wait. There's one last way to override CSS. This is the most powerful method of all. But before we do it, let's talk about why you would ever want to override CSS.");
	   $pdf->AddLessonText("In many situations, you will use CSS libraries. These may accidentally override your own CSS. So when you absolutely need to be sure that an element has specific CSS, you can use !important");
	   $pdf->AddLessonText("Let's go all the way back to our pink-text class declaration. Remember that our pink-text class was overridden by subsequent class declarations, id declarations, and inline styles.");
	   $pdf->AddLessonText("Let's add the keyword !important to your pink-text element's color declaration to make 100% sure that your h1 element will be pink.");
	   $pdf->AddLessonText("An example of how to do this is:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("color: red !important;");

	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("18");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: black;");
	   $pdf->AddLessonCode("  color: green;");
	   $pdf->AddLessonCode("  font-family: monospace;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".pink-text{");
	   $pdf->AddLessonCode("  color: pink; !important");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode(".blue-text{");
	   $pdf->AddLessonCode("  color: blue;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("#orange-text{");
	   $pdf->AddLessonCode("  color: orange;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1 id='orange-text' class='blue-text pink-text' style='color: white;'>Hello World</h1>");
   }

   function GenerateCSSLesson32($pdf) {
       $pdf->AddLessonTitle("Use Hex Code for Specific Colors");
	   $pdf->AddLessonText("Did you know there are other ways to represent colors in CSS? One of these ways is called hexadecimal code, or hex code for short.");
	   $pdf->AddLessonText("We usually use decimals, or base 10 numbers, which use the symbols 0 to 9 for each digit. Hexadecimals (or hex) are base 16 numbers. This means it uses sixteen distinct symbols. Like decimals, the symbols 0-9 represent the values zero to nine. Then A,B,C,D,E,F represent the values ten to fifteen. Altogether, 0 to F can represent a digit in hexadecimal, giving us 16 total possible values. You can find more information about hexadecimal numbers here.");
	   $pdf->AddLessonText("In CSS, we can use 6 hexadecimal digits to represent colors, two each for the red (R), green (G), and blue (B) components. For example, #000000 is black and is also the lowest possible value. You can find more information about the RGB color system here.");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  color: #000000;");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Replace the word black in our body element's background-color with its hex code representation, #000000.");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: #000000;");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
   }

   function GenerateCSSLesson33($pdf) {
       $pdf->AddLessonTitle("Use Hex Code to Mix Colors");
	   $pdf->AddLessonText("To review, hex codes use 6 hexadecimal digits to represent colors, two each for red (R), green (G), and blue (B) components.");
	   $pdf->AddLessonText("From these three pure colors (red, green, and blue), we can vary the amounts of each to create over 16 million other colors!");
	   $pdf->AddLessonText("For example, orange is pure red, mixed with some green, and no blue. In hex code, this translates to being #FFA500.");
	   $pdf->AddLessonText("The digit 0 is the lowest number in hex code, and represents a complete absence of color.");
	   $pdf->AddLessonText("The digit F is the highest number in hex code, and represents the maximum possible brightness.");
	   $pdf->AddLessonText("Replace the color words in our style element with their correct hex codes.");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("Color        Hex Code");
	   $pdf->AddLessonCode("Dodger Blue  #1E90FF");
	   $pdf->AddLessonCode("Green        #00FF00");
	   $pdf->AddLessonCode("Orange       #FFA500");
	   $pdf->AddLessonCode("Red          #FF0000");

	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: #FF0000;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .green-text {");
	   $pdf->AddLessonCode("    color: #00FF00;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .dodger-blue-text {");
	   $pdf->AddLessonCode("    color: #1E90FF;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .orange-text {");
	   $pdf->AddLessonCode("    color: #FFA500;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h1 class='red-text'>I am red!</h1>");
	   $pdf->AddLessonCode("<h1 class='green-text'>I am green!</h1>");
	   $pdf->AddLessonCode("<h1 class='dodger-blue-text'>I am dodger blue!</h1>");
	   $pdf->AddLessonCode("<h1 class='orange-text'>I am orange!</h1>");
   }

   function GenerateCSSLesson34($pdf) {
       $pdf->AddLessonTitle("Use Abbreviated Hex Code");
	   $pdf->AddLessonText("Many people feel overwhelmed by the possibilities of more than 16 million colors. And it's difficult to remember hex code. Fortunately, you can shorten it.");
	   $pdf->AddLessonText("For example, red's hex code #FF0000 can be shortened to #F00. This shortened form gives one digit for red, one digit for green, and one digit for blue.");
	   $pdf->AddLessonText("This reduces the total number of possible colors to around 4,000. But browsers will interpret #FF0000 and #F00 as exactly the same color.");
	   $pdf->AddLessonText("Go ahead, try using the abbreviated hex codes to color the correct elements.");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("Color    Short Hex Code");
	   $pdf->AddLessonCode("Cyan     #0FF");
	   $pdf->AddLessonCode("Green    #0F0");
	   $pdf->AddLessonCode("Red      #F00");
	   $pdf->AddLessonCode("Fuchsia  #F0F");

	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("19");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: #F00;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .fuchsia-text {");
	   $pdf->AddLessonCode("    color: #F0F;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .cyan-text {");
	   $pdf->AddLessonCode("    color: #0FF;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .green-text {");
	   $pdf->AddLessonCode("    color: #0F0;");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<h1 class='red-text'>I am red!</h1>");
	   $pdf->AddLessonCode("<h1 class='fuchsia-text'>I am fuchsia!</h1>");
	   $pdf->AddLessonCode("<h1 class='cyan-text'>I am cyan!</h1>");
	   $pdf->AddLessonCode("<h1 class='green-text'>I am green!</h1>");
   }

   function GenerateCSSLesson35($pdf) {
       $pdf->AddLessonTitle("Use RGB values to Color Elements");
	   $pdf->AddLessonText("Another way you can represent colors in CSS is by using RGB values.");
	   $pdf->AddLessonText("The RGB value for black looks like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("rgb(0, 0, 0)");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("The RGB value for white looks like this:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("rgb(255, 255, 255)");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Instead of using six hexadecimal digits like you do with hex code, with RGB you specify the brightness of each color with a number between 0 and 255.");
	   $pdf->AddLessonText("If you do the math, the two digits for one color equal 16 times 16, which gives us 256 total values. So RGB, which starts counting from zero, has the exact same number of possible values as hex code.");
	   $pdf->AddLessonText("Here's an example of how you'd change the body background to orange using its RGB code.");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: rgb(255, 165, 0);");
	   $pdf->AddLessonCode("}");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Let's replace the hex code in our body element's background color with the RGB value for black: rgb(0, 0, 0)");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("body {");
	   $pdf->AddLessonCode("  background-color: rgb(0, 0, 0);");
	   $pdf->AddLessonCode("}");
	   $pdf->AddLessonCode("</style>");
   }

   function GenerateCSSLesson36($pdf) {
       $pdf->AddLessonTitle("Use RGB to Mix Colors");
	   $pdf->AddLessonText("Just like with hex code, you can mix colors in RGB by using combinations of different values.");
	   $pdf->AddLessonText("Replace the hex codes in our style element with their correct RGB values.");

	   $pdf->DrawCodeArea("5");
	   $pdf->AddLessonCode("Color   RGB");
	   $pdf->AddLessonCode("Blue    rgb(0, 0, 255)");
	   $pdf->AddLessonCode("Red     rgb(255, 0, 0)");
	   $pdf->AddLessonCode("Orchid  rgb(218, 112, 214)");
	   $pdf->AddLessonCode("Sienna  rgb(160, 82, 45)");

	   $pdf->AddLessonText("");

	   $pdf->DrawCodeArea("18");
	   $pdf->AddLessonCode("<style>");
	   $pdf->AddLessonCode("  .red-text {");
	   $pdf->AddLessonCode("    color: rgb(255, 0, 0);");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .orchid-text {");
	   $pdf->AddLessonCode("    color: rgb(218, 112, 214);");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .sienna-text {");
	   $pdf->AddLessonCode("    color: rgb(160, 82, 45);");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("  .blue-text {");
	   $pdf->AddLessonCode("    color: rgb(0, 0, 255);");
	   $pdf->AddLessonCode("  }");
	   $pdf->AddLessonCode("</style>");
	   $pdf->AddLessonCode("<h1 class='red-text'>I am red!</h1>");
	   $pdf->AddLessonCode("<h1 class='orchid-text'>I am orchid!</h1>");
	   $pdf->AddLessonCode("<h1 class='sienna-text'>I am sienna!</h1>");
	   $pdf->AddLessonCode("<h1 class='blue-text'>I am blue!</h1>");
   }



   function GenerateCSSManual($pdf) {
	   $pdf->AddSubject("Introduction to Basic CSS");
	   GenerateCSSLesson1($pdf);
	   GenerateCSSLesson2($pdf);
	   GenerateCSSLesson3($pdf);
	   GenerateCSSLesson4($pdf);
	   GenerateCSSLesson5($pdf);
	   GenerateCSSLesson6($pdf);
	   GenerateCSSLesson7($pdf);
	   GenerateCSSLesson8($pdf);
	   GenerateCSSLesson9($pdf);
	   GenerateCSSLesson10($pdf);
	   GenerateCSSLesson11($pdf);
	   GenerateCSSLesson12($pdf);
	   GenerateCSSLesson13($pdf);
	   GenerateCSSLesson14($pdf);
	   GenerateCSSLesson15($pdf);
	   GenerateCSSLesson16($pdf);
	   GenerateCSSLesson17($pdf);
	   GenerateCSSLesson18($pdf);
	   GenerateCSSLesson19($pdf);
	   GenerateCSSLesson20($pdf);
	   GenerateCSSLesson21($pdf);
	   GenerateCSSLesson22($pdf);
	   GenerateCSSLesson23($pdf);
	   GenerateCSSLesson24($pdf);
	   GenerateCSSLesson25($pdf);
	   GenerateCSSLesson26($pdf);
	   GenerateCSSLesson27($pdf);
	   GenerateCSSLesson28($pdf);
	   GenerateCSSLesson29($pdf);
	   GenerateCSSLesson30($pdf);
	   GenerateCSSLesson31($pdf);
	   GenerateCSSLesson32($pdf);
	   GenerateCSSLesson33($pdf);
	   GenerateCSSLesson34($pdf);
	   GenerateCSSLesson35($pdf);
	   GenerateCSSLesson36($pdf);
   }

?>