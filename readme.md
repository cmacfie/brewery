# Christoffer MacFie's coding test

## Short motivation for design choices
When doing this test, I've had to make some choices. 

I've chosen to go for longer variable names, and written the methods longer than sometimes necessary
to increase the readability of the code, rather than have short variable names and one-liners.

I've also chosen to divide the code into lots of smaller files, rather than keep things in big files.
This is to make it more scalable, as well as giving the opportunity for people to work in parallel on the code
without as many merging conflicts. This had lead to some files being very small.
This is however by design.

I also chose to use no external libraries or frameworks, to make sure nothing fails because
of dependencies.

The function files uses camelCase, which is what I usually use. The CSS-files uses dashes instead, since this is a normal standard for CSS-files instead of camelCase.

## Installing

The project can found on `https://github.com/cmacfie/brewery`

The project is built on PHP 7.1.1.

I used XAMPP for this project. Place the project-folder `brewery` in the xampp-folder.
For me the path is `C:\xampp\htdocs\ ` and then power up Apache-module.

The website can then be viewed on `127.0.0.1/brewery`.
