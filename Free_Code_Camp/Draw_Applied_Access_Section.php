<?php

   function GenerateAALesson1($pdf) {
       $pdf->AddLessonTitle("Add a Text Alternative to Images for Visually Impaired Accessibility");
	   $pdf->AddLessonText("It's likely that you've seen an alt attribute on an img tag in other challenges. Alt text describes the content of the image and provides a text-alternative for it. This helps in cases where the image fails to load or can't be seen by a user. It's also used by search engines to understand what an image contains to include it in search results. Here's an example:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<img src='importantLogo.jpeg' alt='Company logo'>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("People with visual impairments rely on screen readers to convert web content to an audio interface. They won't get information if it's only presented visually. For images, screen readers can access the alt attribute and read its contents to deliver key information.");
	   $pdf->AddLessonText("Good alt text provides the reader a brief description of the image. You should always include an alt attribute on your image. Per HTML5 specification, this is now considered mandatory.");
	   $pdf->AddLessonText("Camper Cat happens to be both a coding ninja and an actual ninja, who is building a website to share his knowledge. The profile picture he wants to use shows his skills and should be appreciated by all site visitors. Add an alt attribute in the img tag, that explains Camper Cat is doing karate. (The image src doesn't link to an actual file, so you should see the alt text in the display.)");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<img src='doingKarateWow.jpeg' alt='Camper Cat doing KARATE!!!'>");
   }
 
   function GenerateAALesson2($pdf) {
       $pdf->AddLessonTitle("Know When Alt Text Should be Left Blank");
	   $pdf->AddLessonText("In the last challenge, you learned that including an alt attribute when using img tags is mandatory. However, sometimes images are grouped with a caption already describing them, or are used for decoration only. In these cases alt text may seem redundant or unnecessary.");
	   $pdf->AddLessonText("In situations when an image is already explained with text content, or does not add meaning to a page, the img still needs an alt attribute, but it can be set to an empty string. Here's an example:");

	   $pdf->DrawCodeArea("1");
	   $pdf->AddLessonCode("<img src='visualDecoration.jpeg' alt=''>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Background images usually fall under the 'decorative' label as well. However, they are typically applied with CSS rules, and therefore not part of the markup screen readers process.");
	   $pdf->AddLessonText("Note: For images with a caption, you may still want to include alt text, since it helps search engines catalog the content of the image.");
	   $pdf->AddLessonText("Camper Cat has coded a skeleton page for the blog part of his website. He's planning to add a visual break between his two articles with a decorative image of a samurai sword. Add an alt attribute to the img tag and set it to an empty string. (Note that the image src doesn't link to an actual file - don't worry that there are no swords showing in the display.)");

	   $pdf->DrawCodeArea("12");
	   $pdf->AddLessonCode("<h1>Deep Thoughts with Master Camper Cat</h1>");
	   $pdf->AddLessonCode("<article>");
	   $pdf->AddLessonCode("  <h2>Defeating your Foe: the Red Dot is Ours!</h2>");
	   $pdf->AddLessonCode("  <p>To Come...</p>");
	   $pdf->AddLessonCode("</article>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("<img src='samuraiSwords.jpeg' alt=''>");
	   $pdf->AddLessonCode("");
       $pdf->AddLessonCode("<article>");
	   $pdf->AddLessonCode("  <h2>Is Chuck Norris a Cat Person?</h2>");
	   $pdf->AddLessonCode("  <p>To Come...</p>");
	   $pdf->AddLessonCode("</article>");
   }
 
   function GenerateAALesson3($pdf) {
       $pdf->AddLessonTitle("Use Headings to Show Hierarchical Relationships of Content");
	   $pdf->AddLessonText("Headings (h1 through h6 elements) are workhorse tags that help provide structure and labeling to your content. Screen readers can be set to read only the headings on a page so the user gets a summary. This means it is important for the heading tags in your markup to have semantic meaning and relate to each other, not be picked merely for their size values.");
	   $pdf->AddLessonText("Semantic meaning means that the tag you use around content indicates the type of information it contains.");
	   $pdf->AddLessonText("If you were writing a paper with an introduction, a body, and a conclusion, it wouldn't make much sense to put the conclusion as a subsection of the body in your outline. It should be its own section. Similarly, the heading tags in a webpage need to go in order and indicate the hierarchical relationships of your content.");
	   $pdf->AddLessonText("Headings with equal (or higher) rank start new implied sections, headings with lower rank start subsections of the previous one.");
	   $pdf->AddLessonText("As an example, a page with an h2 element followed by several subsections labeled with h4 tags would confuse a screen reader user. With six choices, it's tempting to use a tag because it looks better in a browser, but you can use CSS to edit the relative sizing.");
	   $pdf->AddLessonText("One final point, each page should always have one (and only one) h1 element, which is the main subject of your content. This and the other headings are used in part by search engines to understand the topic of the page.");
	   $pdf->AddLessonText("Camper Cat wants a page on his site dedicated to becoming a ninja. Help him fix the headings so his markup gives semantic meaning to the content, and shows the proper parent-child relationships of his sections. Change all the h5 tags to the proper heading level to indicate they are subsections of the h2 ones. Use h3 tags for the purpose.");

	   $pdf->DrawCodeArea("14");
	   $pdf->AddLessonCode("<h1>How to Become a Ninja</h1>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <h2>Learn the Art of Moving Stealthily</h2>");
	   $pdf->AddLessonCode("  <h3>How to Hide in Plain Sight</h3>");
	   $pdf->AddLessonCode("  <h3>How to Climb a Wall</h3>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <h2>Learn the Art of Battle</h2>");
	   $pdf->AddLessonCode("  <h3>How to Strengthen your Body</h3>");
	   $pdf->AddLessonCode("  <h3>How to Fight like a Ninja</h3>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <h2>Learn the Art of Living with Honor</h2>");
	   $pdf->AddLessonCode("  <h3>How to Breathe Properly</h3>");
	   $pdf->AddLessonCode("  <h3>How to Simplify your Life</h3>");
	   $pdf->AddLessonCode("</main>");
   }
 
   function GenerateAALesson4($pdf) {
       $pdf->AddLessonTitle("Jump Straight to the Content Using the main Element");
	   $pdf->AddLessonText("HTML5 introduced a number of new elements that give developers more options while also incorporating accessibility features. These tags include main, header, footer, nav, article, and section, among others.");
	   $pdf->AddLessonText("By default, a browser renders these elements similarly to the humble div. However, using them where appropriate gives additional meaning in your markup. The tag name alone can indicate the type of information it contains, which adds semantic meaning to that content. Assistive technologies can access this information to provide better page summary or navigation options to their users.");
	   $pdf->AddLessonText("The main element is used to wrap (you guessed it) the main content, and there should be only one per page. It's meant to surround the information that's related to the central topic of your page. It's not meant to include items that repeat across pages, like navigation links or banners.");
	   $pdf->AddLessonText("The main tag also has an embedded landmark feature that assistive technology can use to quickly navigate to the main content. If you've ever seen a 'Jump to Main Content' link at the top of a page, using a main tag automatically gives assistive devices that functionality.");
	   $pdf->AddLessonText("Camper Cat has some big ideas for his ninja weapons page. Help him set up his markup by adding opening and closing main tags between the header and footer (covered in other challenges). Keep the main tags empty for now.");

	   $pdf->DrawCodeArea("6");
	   $pdf->AddLessonCode("<header>");
	   $pdf->AddLessonCode("  <h1>Weapons of the Ninja</h1>");
	   $pdf->AddLessonCode("</header>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("</main>");
	   $pdf->AddLessonCode("<footer></footer>");
   }
 
   function GenerateAALesson5($pdf) {
       $pdf->AddLessonTitle("Wrap Content in the article Element");
	   $pdf->AddLessonText("article is another one of the new HTML5 elements that adds semantic meaning to your markup. article is a sectioning element, and is used to wrap independent, self-contained content. The tag works well with blog entries, forum posts, or news articles.");
	   $pdf->AddLessonText("Determining whether content can stand alone is usually a judgement call, but there are a couple simple tests you can use. Ask yourself if you removed all surrounding context, would that content still make sense? Similarly for text, would the content hold up if it were in an RSS feed?");
	   $pdf->AddLessonText("Remember that folks using assistive technologies rely on organized, semantically meaningful markup to better understand your work.");
	   $pdf->AddLessonText("Note about section and div");
	   $pdf->AddLessonText("The section element is also new with HTML5, and has a slightly different semantic meaning than article. An article is for standalone content, and a section is for grouping thematically related content. They can be used within each other, as needed. For example, if a book is the article, then each chapter is a section. When there's no relationship between groups of content, then use a div.");

	   $pdf->DrawCodeArea("3");
	   $pdf->AddLessonCode("<div> - groups content");
	   $pdf->AddLessonCode("<section> - groups related content");
	   $pdf->AddLessonCode("<article> - groups independent, self-contained content");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Camper Cat used article tags to wrap the posts on his blog page, but he forgot to use them around the top one. Change the div tag to use an article tag instead.");

	   $pdf->DrawCodeArea(21);
	   $pdf->AddLessonCode("<h1>Deep Thoughts with Master Camper Cat</h1>");
	   $pdf->AddLessonCode("<main>");
	   $pdf->AddLessonCode("  <article>");
	   $pdf->AddLessonCode("    <h2>The Garfield Files: Lasagna as Training Fuel?</h2>");
	   $pdf->AddLessonCode("    <p>The internet is littered with varying opinions on nutritional paradigms, from catnip paleo to hairball cleanses. But let's turn our attention to an often overlooked fitness fuel, and examine the protein-carb-NOM trifecta that is lasagna...</p>");
	   $pdf->AddLessonCode("  </article>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <img src='samuraiSwords.jpeg' alt=''>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <article>");
	   $pdf->AddLessonCode("    <h2>Defeating your Foe: the Red Dot is Ours!</h2>");
	   $pdf->AddLessonCode("    <p>Felines the world over have been waging war on the most persistent of foes. This red nemesis combines both cunning stealth and lightening speed. But chin up, fellow fighters, our time for victory may soon be near...</p>");
	   $pdf->AddLessonCode("  </article>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <img src='samuraiSwords.jpeg' alt=''>");

       $pdf->AddLessonTitle("Wrap Content in the article Element (Cont'd)");
	   $pdf->DrawCodeArea(9);
	   $pdf->AddLessonCode("  <article>");
	   $pdf->AddLessonCode("    <h2>Is Chuck Norris a Cat Person?</h2>");
	   $pdf->AddLessonCode("    <p>Chuck Norris is widely regarded as the premier martial artist on the planet, and it's a complete coincidence anyone who disagrees with this fact mysteriously disappears soon after. But the real question is, is he a cat person?...</p>");
	   $pdf->AddLessonCode("  </article>");
	   $pdf->AddLessonCode("</main>");
   }
 
   function GenerateAALesson6($pdf) {
       $pdf->AddLessonTitle("Make Screen Reader Navigation Easier with the header Landmark");
	   $pdf->AddLessonText("The next HTML5 element that adds semantic meaning and improves accessibility is the header tag. It's used to wrap introductory information or navigation links for its parent tag and works well around content that's repeated at the top on multiple pages.");
	   $pdf->AddLessonText("header shares the embedded landmark feature you saw with main, allowing assistive technologies to quickly navigate to that content.");
	   $pdf->AddLessonText("Note: The header is meant for use in the body tag of your HTML document. This is different than the head element, which contains the page's title, meta information, etc.");
	   $pdf->AddLessonText("Camper Cat is writing some great articles about ninja training, and wants to add a page for them to his site. Change the top div that currently contains the h1 to a header tag instead.");

	   $pdf->DrawCodeArea(31);
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Training with Camper Cat</h1>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <main>");
	   $pdf->AddLessonCode("    <section id='stealth'>");
	   $pdf->AddLessonCode("      <h2>Stealth &amp; Agility Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Climb foliage quickly using a minimum spanning tree approach</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>No training is NP-complete without parkour</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='combat'>");
	   $pdf->AddLessonCode("      <h2>Combat Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Dispatch multiple enemies with multithreaded tactics</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Goodbye world: 5 proven ways to knock out an opponent</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='weapons'>");
	   $pdf->AddLessonCode("      <h2>Weapons Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Swords: the best tool to literally divide and conquer</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Breadth-first or depth-first in multi-weapon training?</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("  </main>");
	   $pdf->AddLessonCode("</body>");
	   $pdf->AddLessonCode("");
   }
 
   function GenerateAALesson7($pdf) {
       $pdf->AddLessonTitle("Make Screen Reader Navigation Easier with the nav Landmark");
	   $pdf->AddLessonText("The nav element is another HTML5 item with the embedded landmark feature for easy screen reader navigation. This tag is meant to wrap around the main navigation links in your page.");
	   $pdf->AddLessonText("If there are repeated site links at the bottom of the page, it isn't necessary to markup those with a nav tag as well. Using a footer (covered in the next challenge) is sufficient.");
	   $pdf->AddLessonText("Camper Cat included navigation links at the top of his training page, but wrapped them in a div. Change the div to a nav tag to improve the accessibility on his page.");

	   $pdf->DrawCodeArea(37);
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Training with Camper Cat</h1>");
	   $pdf->AddLessonCode("    <nav>");
	   $pdf->AddLessonCode("      <ul>");
	   $pdf->AddLessonCode("        <li><a href='#stealth'>Stealth &amp; Agility</a></li>");
	   $pdf->AddLessonCode("        <li><a href='#combat'>Combat</a></li>");
	   $pdf->AddLessonCode("        <li><a href='#weapons'>Weapons</a></li>");
	   $pdf->AddLessonCode("      </ul>");
	   $pdf->AddLessonCode("    </nav>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <main>");
	   $pdf->AddLessonCode("    <section id='stealth'>");
	   $pdf->AddLessonCode("      <h2>Stealth &amp; Agility Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Climb foliage quickly using a minimum spanning tree approach</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>No training is NP-complete without parkour</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='combat'>");
	   $pdf->AddLessonCode("      <h2>Combat Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Dispatch multiple enemies with multithreaded tactics</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Goodbye world: 5 proven ways to knock out an opponent</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='weapons'>");
	   $pdf->AddLessonCode("      <h2>Weapons Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Swords: the best tool to literally divide and conquer</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Breadth-first or depth-first in multi-weapon training?</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("  </main>");
       $pdf->AddLessonCode("</body>");
   }
 
   function GenerateAALesson8($pdf) {
       $pdf->AddLessonTitle("Make Screen Reader Navigation Easier with the footer Landmark");
	   $pdf->AddLessonText("Similar to header and nav, the footer element has a built-in landmark feature that allows assistive devices to quickly navigate to it. It's primarily used to contain copyright information or links to related documents that usually sit at the bottom of a page.");
	   $pdf->AddLessonText("Camper Cat's training page is making good progress. Change the div he used to wrap his copyright information at the bottom of the page to a footer element.");

	   $pdf->DrawCodeArea(38);
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Training with Camper Cat</h1>");
	   $pdf->AddLessonCode("    <nav>");
	   $pdf->AddLessonCode("      <ul>");
	   $pdf->AddLessonCode("        <li><a href='#stealth'>Stealth &amp; Agility</a></li>");
	   $pdf->AddLessonCode("        <li><a href='#combat'>Combat</a></li>");
	   $pdf->AddLessonCode("        <li><a href='#weapons'>Weapons</a></li>");
	   $pdf->AddLessonCode("      </ul>");
	   $pdf->AddLessonCode("    </nav>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <main>");
	   $pdf->AddLessonCode("    <section id='stealth'>");
	   $pdf->AddLessonCode("      <h2>Stealth &amp; Agility Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Climb foliage quickly using a minimum spanning tree approach</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>No training is NP-complete without parkour</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='combat'>");
	   $pdf->AddLessonCode("      <h2>Combat Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Dispatch multiple enemies with multithreaded tactics</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Goodbye world: 5 proven ways to knock out an opponent</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='weapons'>");
	   $pdf->AddLessonCode("      <h2>Weapons Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Swords: the best tool to literally divide and conquer</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Breadth-first or depth-first in multi-weapon training?</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("  </main>");
	   $pdf->AddLessonCode("  <footer>&copy; 2018 Camper Cat</footer>");
       $pdf->AddLessonCode("</body>");
   }
 
   function GenerateAALesson9($pdf) {
       $pdf->AddLessonTitle("Improve Accessibility of Audio Content with the audio Element");
	   $pdf->AddLessonText("HTML5's audio element gives semantic meaning when it wraps sound or audio stream content in your markup. Audio content also needs a text alternative to be accessible to people who are deaf or hard of hearing. This can be done with nearby text on the page or a link to a transcript.");
	   $pdf->AddLessonText("The audio tag supports the controls attribute. This shows the browser default play, pause, and other controls, and supports keyboard functionality. This is a boolean attribute, meaning it doesn't need a value, its presence on the tag turns the setting on.");
	   $pdf->AddLessonText("Here's an example:");

	   $pdf->DrawCodeArea(4);
	   $pdf->AddLessonCode("<audio id='meowClip' controls>");
	   $pdf->AddLessonCode("  <source src='audio/meow.mp3' type='audio/mpeg' />");
	   $pdf->AddLessonCode("  <source src='audio/meow.ogg' type='audio/ogg' />");
	   $pdf->AddLessonCode("</audio>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Note: Multimedia content usually has both visual and auditory components. It needs synchronized captions and a transcript so users with visual and/or auditory impairments can access it. Generally, a web developer is not responsible for creating the captions or transcript, but needs to know to include them.");
	   $pdf->AddLessonText("Time to take a break from Camper Cat and meet fellow camper Zersiax (@zersiax), a champion of accessibility and a screen reader user. To hear a clip of his screen reader in action, add an audio element after the p. Include the controls attribute. Then place a source tag inside the audio tags with the src attribute set to 'https://s3.amazonaws.com/freecodecamp/screen-reader.mp3' and type attribute set to 'audio/mpeg'.");
	   $pdf->AddLessonText("Note: The audio clip may sound fast and be difficult to understand, but that is a normal speed for screen reader users.");

	   $pdf->DrawCodeArea(12);
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Real Coding Ninjas</h1>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("  <main>");
	   $pdf->AddLessonCode("    <p>A sound clip of Zersiax's screen reader in action.</p>");
	   $pdf->AddLessonCode("<audio id='meowClip' controls>");
	   $pdf->AddLessonCode("  <source src='https://s3.amazonaws.com/freecodecamp/screen-reader.mp3' type='audio/mpeg' />");
	   $pdf->AddLessonCode("</audio>");
	   $pdf->AddLessonCode("  </main>");
	   $pdf->AddLessonCode("</body>");
   }
 
   function GenerateAALesson10($pdf) {
       $pdf->AddLessonTitle("Improve Chart Accessibility with the figure Element");
	   $pdf->AddLessonText("HTML5 introduced the figure element, along with the related figcaption. Used together, these items wrap a visual representation (like an image, diagram, or chart) along with its caption. This gives a two-fold accessibility boost by both semantically grouping related content, and providing a text alternative that explains the figure.");
	   $pdf->AddLessonText("For data visualizations like charts, the caption can be used to briefly note the trends or conclusions for users with visual impairments. Another challenge covers how to move a table version of the chart's data off-screen (using CSS) for screen reader users.");
	   $pdf->AddLessonText("Here's an example - note that the figcaption goes inside the figure tags and can be combined with other elements:");

	   $pdf->DrawCodeArea(8);
	   $pdf->AddLessonCode("<figure>");
	   $pdf->AddLessonCode("  <img src='roundhouseDestruction.jpeg' alt='Photo of Camper Cat executing a roundhouse kick'>");
	   $pdf->AddLessonCode("  <br>");
	   $pdf->AddLessonCode("  <figcaption>");
	   $pdf->AddLessonCode("    Master Camper Cat demonstrates proper form of a roundhouse kick.");
	   $pdf->AddLessonCode("  </figcaption>");
	   $pdf->AddLessonCode("</figure>");

	   $pdf->AddLessonText("");
	   $pdf->AddLessonText("Camper Cat is hard at work creating a stacked bar chart showing the amount of time per week to spend training in stealth, combat, and weapons. Help him structure his page better by changing the div tag he used to a figure tag, and the p tag that surrounds the caption to a figcaption tag.");

	   $pdf->DrawCodeArea(28);
	   $pdf->AddLessonCode("<body>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <header>");
	   $pdf->AddLessonCode("    <h1>Training with Camper Cat</h1>");
	   $pdf->AddLessonCode("    <nav>");
	   $pdf->AddLessonCode("      <ul>");
	   $pdf->AddLessonCode("        <li><a href='#stealth'>Stealth &amp; Agility</a></li>");
	   $pdf->AddLessonCode("        <li><a href='#combat'>Combat</a></li>");
	   $pdf->AddLessonCode("        <li><a href='#weapons'>Weapons</a></li>");
	   $pdf->AddLessonCode("      </ul>");
	   $pdf->AddLessonCode("    </nav>");
	   $pdf->AddLessonCode("  </header>");
	   $pdf->AddLessonCode("");
	   $pdf->AddLessonCode("  <main>");
	   $pdf->AddLessonCode("    <section>");
	   $pdf->AddLessonCode("      <figure>");
	   $pdf->AddLessonCode("        <br>");
	   $pdf->AddLessonCode("        <figcaption>Breakdown per week of time to spend training in stealth, combat, and weapons.</figcaption>");
	   $pdf->AddLessonCode("      </figure>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='stealth'>");
	   $pdf->AddLessonCode("      <h2>Stealth &amp; Agility Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Climb foliage quickly using a minimum spanning tree approach</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>No training is NP-complete without parkour</h3></article>");
	   $pdf->AddLessonCode("    </section>");

       $pdf->AddLessonTitle("Improve Chart Accessibility with the figure Element");
	   $pdf->DrawCodeArea(18);
	   $pdf->AddLessonCode("    <section id='combat'>");
	   $pdf->AddLessonCode("      <h2>Combat Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Dispatch multiple enemies with multithreaded tactics</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Goodbye world: 5 proven ways to knock out an opponent</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("    <section id='weapons'>");
	   $pdf->AddLessonCode("      <h2>Weapons Training</h2>");
	   $pdf->AddLessonCode("      <article><h3>Swords: the best tool to literally divide and conquer</h3></article>");
	   $pdf->AddLessonCode("      <article><h3>Breadth-first or depth-first in multi-weapon training?</h3></article>");
	   $pdf->AddLessonCode("    </section>");
	   $pdf->AddLessonCode("  </main>");
	   $pdf->AddLessonCode("  <footer>&copy; 2018 Camper Cat</footer>");
       $pdf->AddLessonCode("</body>");

   }
 
 function GenerateAppliedAccessManual($pdf) {
	   $pdf->AddSubject("Introduction to the Applied Accessibility Challenges");
	   GenerateAALesson1($pdf);
	   GenerateAALesson2($pdf);
	   GenerateAALesson3($pdf);
	   GenerateAALesson4($pdf);
	   GenerateAALesson5($pdf);
	   GenerateAALesson6($pdf);
	   GenerateAALesson7($pdf);
	   GenerateAALesson8($pdf);
	   GenerateAALesson9($pdf);
	   GenerateAALesson10($pdf);
   }

?>