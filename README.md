## Development

Requires Sass to build use build-sass.bat to build all scss-files to main.css:
 - install gem: http://rubyinstaller.org/
 - `gem install sass`
 
 `sass -v` to see if it's working
 
 style/sass/Settings.scss contain variables used to control site style.


## How to use it
### Changing a value in style/sass/settings.scss

1. Make a change in Settings.scss
2. Make sure `build-sass.bat` was running, or start it now (will build on start and then listen for changes)
3. Publish the compiled main.css


### How it works

 - Most of the styling, appearance, of the site can be controled from previously mentioned settings.scss, which is then compiled to main.css.
 - This is a SPA where clicking the menu buttons will request a page with the same name as the button text (2D will request 2D.php) and render its content in the DOM element with class "content".
 - the 2D, 3D and GAMES.php file are based on the same code, but uses different directories which is specified in the top of the file. This variable maps to which folder it should get it contents from (`game-art/YOUR_FOLDER/*/*`). Correct naming of these files would be: 

/game-art/
```
  - - {Folder name of choice} // Maps to a variable in 2D, 3D, GAMES.php
   - - - {Order}_{Game name} // displayed as title, use 01, 02, .. if >10
    - - - - {Order}_{Image name}.[jpg, jpeg, gif, png] // images to be displayed, in which order. Use 01, 02 if >10
    - - - - ...^
    - - - - desc.txt // description to be displayed along with game group.
```
