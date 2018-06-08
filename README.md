[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

This is a custom Wordpress Theme for Portshowlio 2018 website.

It was based on a starter theme called `_s`, or `underscores`. 

Contributors to this theme: Anna Atiagina, Erik Fadiman, Ivanna Mikityuk, Bill Obasi.

If you want to use this theme for a reference, here is what we were working on:

1. We used Portshowlio-master theme as a starte point. You can download it here:
https://github.com/seviglius/portshowlio-starter

2. We used Scout-App to process SCSS and MAMP for local development.

3. There is a separate theme for a Splash page: https://github.com/Atiagina/portshowlio18-splash
But we ended up using this theme (Portshowlio18) for both Splash page and actual Portshowlio website.

File front-page-splash.php was initially called front-page.php and was our front page while we were working on the rest of the website in the background. After we finished with the website, I renamed front-page.php to front-page-splash.php to make our actual home page work when we were ready.

4. I was using only some of the .scss files, so if you want to check what we customized, look at the following:

/sass/layout/_grid.scss  for the masonry grid on the home page (works, students and product grid on event)
/sass/layout/_home.scss for everything else on the home page that was not part of the masonry grid
/sass/layout/_single-student.scss for everything on the student page
/sass/layout/_footer.scss for the footer
/sass/navigation/_navigation.scss for all menus
/sass/typography for typography 
/sass/variables/_color.scss for color variables

I haven't touched any other files from sass folder comparing to the master theme.

All JavaScript code is mainly stored in template-home.php at the bottom of the page. Even if you will be using masonry again, I recommend starting over on your function for Filter, it is very specific to website structure.
Some of the JavaScript is also stored in single-student.php at the bottom of the page (JS related to single-student page).

/images/ folder was created by the bodymovin plugin, but I think you don't need it.
/img/ folder was created for test purposes.

Good luck!
