<?php

class LessionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lessions')->delete();

        DB::table('lessions')->insert(array(
            'title'=>'The Concept Of Responsive Web Design',
            'description' => 'Ethan Marcotte wrote an introductory article about the approach, “Responsive Web Design,” for A List Apart. It stems from the notion of responsive architectural design, whereby a room or space automatically adjusts to the number and flow of people within it: Transplant this discipline onto Web design, and we have a similar yet whole new idea. Why should we create a custom Web design for each group of users; after all, architects don’t design a building for each group size and type that passes through it? Like responsive architecture, Web design should automatically adjust. It shouldn’t require countless custom-made solutions for each new category of users. Obviously, we can’t use motion sensors and robotics to accomplish this the way a building would. Responsive Web design requires a more abstract way of thinking. However, some ideas are already being practiced: fluid layouts, media queries and scripts that can reformat Web pages and mark-up effortlessly (or automatically).',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Adjusting Screen Resolution',
            'description' => 'With more devices come varying screen resolutions, definitions and orientations. New devices with new screen sizes are being developed every day, and each of these devices may be able to handle variations in size, functionality and even color. Some are in landscape, others in portrait, still others even completely square. As we know from the rising popularity of the iPhone, iPad and advanced smartphones, many new devices are able to switch from portrait to landscape at the user’s whim. How is one to design for these situations? In addition to designing for both landscape and portrait (and enabling those orientations to possibly switch in an instant upon page load), we must consider the hundreds of different screen sizes. Yes, it is possible to group them into major categories, design for each of them, and make each design as flexible as necessary. ',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'PART OF THE SOLUTION: FLEXIBLE EVERYTHING',
            'description' => 'A few years ago, when flexible layouts were almost a “luxury” for websites, the only things that were flexible in a design were the layout columns (structural elements) and the text. Images could easily break layouts, and even flexible structural elements broke a layout’s form when pushed enough. Flexible designs weren’t really that flexible; they could give or take a few hundred pixels, but they often couldn’t adjust from a large computer screen to a netbook.Now we can make things more flexible. Images can be automatically adjusted, and we have workarounds so that layouts never break (although they may become squished and illegible in the process). While it’s not a complete fix, the solution gives us far more options. It’s perfect for devices that switch from portrait orientation to landscape in an instant or for when users switch from a large computer screen to an iPad.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Flexible Images',
            'description' => 'One major problem that needs to be solved with responsive Web design is working with images. There are a number of techniques to resize images proportionately, and many are easily done. The most popular option, noted in Ethan Marcotte’s article on fluid images but first experimented with by Richard Rutter, is to use CSS’s max-width for an easy fix.As long as no other width-based image styles override this rule, every image will load in its original size, unless the viewing area becomes narrower than the image’s original width. The maximum width of the image is set to 100% of the screen or browser width, so when that 100% becomes narrower, so does the image. Essentially, as Jason Grigsby noted, “The idea behind fluid images is that you deliver images at the maximum size they will be used at. You don’t declare the height and width in your code, but instead let the browser resize the images as needed while using CSS to guide their relative size”. It’s a great and simple technique to resize images beautifully.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'FILAMENT GROUP’S RESPONSIVE IMAGES',
            'description' => 'This technique, presented by the Filament Group, takes this issue into consideration and not only resizes images proportionately, but shrinks image resolution on smaller devices, so very large images don’t waste space unnecessarily on small screens. Check out the demo page here. This technique requires a few files, all of which are available on Github. First, a JavaScript file (rwd-images.js), the .htaccess file and an image file (rwd.gif). Then, we can use just a bit of HTML to reference both the larger and smaller resolution images: first, the small image, with an .r prefix to clarify that it should be responsive, and then a reference to the bigger image using data-fullsrc. The data-fullsrc is a custom HTML5 attribute, defined in the files linked to above. For any screen that is wider than 480 pixels, the larger-resolution image (largeRes.jpg) will load; smaller screens wouldn’t need to load the bigger image, and so the smaller image (smallRes.jpg) will load. The JavaScript file inserts a base element that allows the page to separate responsive images from others and redirects them as necessary. When the page loads, all files are rewritten to their original forms, and only the large or small images are loaded as necessary. With other techniques, all higher-resolution images would have had to be downloaded, even if the larger versions would never be used. Particularly for websites with a lot of images, this technique can be a great saver of bandwidth and loading time. This technique is fully supported in modern browsers, such as IE8+, Safari, Chrome and Opera, as well as mobile devices that use these same browsers (iPad, iPhone, etc.). Older browsers and Firefox degrade nicely and still resize as one would expect of a responsive image, except that both resolutions are downloaded together, so the end benefit of saving space with this technique is void.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'STOP IPHONE SIMULATOR IMAGE RESIZING',
            'description' => 'One nice thing about the iPhone and iPod Touch is that Web designs automatically rescale to fit the tiny screen. A full-sized design, unless specified otherwise, would just shrink proportionally for the tiny browser, with no need for scrolling or a mobile version. Then, the user could easily zoom in and out as necessary. There was, however, one issue this simulator created. When responsive Web design took off, many noticed that images were still changing proportionally with the page even if they were specifically made for (or could otherwise fit) the tiny screen. This in turn scaled down text and other elements.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Custom Layout Structure',
            'description' => 'For extreme size changes, we may want to change the layout altogether, either through a separate style sheet or, more efficiently, through a CSS media query. This does not have to be troublesome; most of the styles can remain the same, while specific style sheets can inherit these styles and move elements around with floats, widths, heights and so on. For example, we could have one main style sheet (which would also be the default) that would define all of the main structural elements, such as #wrapper, #content, #sidebar, #nav, along with colors, backgrounds and typography. Default flexible widths and floats could also be defined.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Semantic Markup and Page Layout',
            'description' => 'There’s a great story about a university who, when building their campus, didn’t create any walking paths. They just planted grass and waited.A year later, the grass was all worn out where people walked most frequently. So that’s where the university paved the actual sidewalks.It makes perfect sense! The sidewalks were exactly where people actually walked.',
            'course_id'=> 2 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Drawing in HTML5 using the Canvas element',
            'description' => 'Another new element in HTML5 is the < canvas> tag. It’s just what it sounds like——a blank surface for drawing. You need to use JavaScript to manipulate and draw on the canvas. You may want to give your canvas element an id attribute so you can programmatically access it from your JavaScript code (or if you’re using jQuery and it’s the only canvas on the page, you could access it using $(‘canvas’) without needing to name it). First, I create the actual canvas and give it an ID of “myCanvas”. If this code were viewed in a browser that doesn’t support the HTML5 canvas element, it would display “Your browser does not support the canvas tag” instead of drawing the flag. Next, I have a script. Remember, the canvas tag is only a container for graphics; you must use JavaScript to actually draw and render graphics on it. First, I grab a reference to the canvas using the “myCanvas” ID, and then get the canvas’s context which provides methods/properties for drawing and manipulating graphics on the canvas. I specified “2d” to use a 2-dimensional context to draw on the page.',
            'course_id'=> 2 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Quick Comparison of Canvas vs. SVG',
            'description' => 'Scalable Vector Graphics (SVG) is an earlier standard for drawing in a browser window. With the release of HTML5’s canvas, many people are wondering how they compare. In my eyes, the biggest difference is that canvas uses immediate mode rendering and SVG uses retained mode rendering. This means that canvas directly causes rendering of the graphics to the display. In my code above, once the flag is drawn, it is forgotten by the system and no state is retained. Making a change would require a complete redraw. In contrast, SVG retains a complete model of the objects to be rendered. To make a change, you could simply change (for example) the position of the rectangle, and the browser would determine how to re-render it. This is less work for the developer, but also more heavyweight to maintain a model. The ability to style SVG via CSS in addition to JavaScript is worth calling out as another consideration. A canvas may be manipulated through JavaScript only.',
            'course_id'=> 2 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Audio and Video Support',
            'description' => 'One of the big features that is new in HTML5 is the ability to support playing audio and videos. Prior to HTML5, you needed a plug-in like Silverlight or Flash for this functionality. In HTML5, you can embed audio and video using the new audio and video tags. From a coding perspective, the audio and video elements are very simple to use. (I’ll give you a more in-depth look at their attributes below.) The audio and video elements are also supported in all major browsers (the latest versions of Internet Explorer, Firefox, Chrome, Opera, and Safari). However, the tricky part is that you need codecs to play audio and video, and different browsers support different codecs. (For a wonderful in-depth explanation of video containers and codecs, read http://diveintohtml5.org/video.html.). Fortunately, this isn’t a show-stopper. The support for audio and video was implemented in a brilliant way, where there is support to try several different file formats (the browser will try each and then drop down to the next one if it can’t play it). For example: With this code, the browser will first try to play the laughter.mp3 file. If it does not have the right codecs to play it, it will next try to play the laughter.ogg file. If the audio element is not recognized at all by the browser, it will display the text “Your browser does not support the audio element” where the audio control should be.',
            'course_id'=> 2 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Video',
            'description' => 'Now, let’s examine the video element. As we discussed above, the video element has support for multiple sources, which it will try in order and then fall down to the next option. Like audio, video has a controls attribute. Here is a screenshot of the video controls in Internet Explorer:',
            'course_id'=> 2 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Why Study JavaScript?',
            'description' => 'JavaScript is one of the 3 languages all web developers must learn: HTML to define the content of web pages. CSS to specify the layout of web pages. JavaScript to program the behavior of web pages. This tutorial is about JavaScript, and how JavaScript works with HTML and CSS.',
            'course_id'=> 3 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Why Study JavaScript?',
            'description' => 'JavaScript is one of the 3 languages all web developers must learn: HTML to define the content of web pages. CSS to specify the layout of web pages. JavaScript to program the behavior of web pages. This tutorial is about JavaScript, and how JavaScript works with HTML and CSS.',
            'course_id'=> 3 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'Learning Speed',
            'description' => 'In this tutorial, the learning speed is your choice. Everything is up to you. If you are struggling, take a break, or reread the material. Always make sure you understand the "Try-it-Yourself" examples and exercises.',
            'course_id'=> 3 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('lessions')->insert(array(
            'title'=>'JavaScript References',
            'description' => 'W3Schools maintains a complete JavaScript reference, including all HTML DOM, and browser objects. The reference contains examples for all objects, properties, and methods, and is continuously updated according to the latest web standards.',
            'course_id'=> 3 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));


    }

}