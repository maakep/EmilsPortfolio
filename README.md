## Development

Requires Sass to build use build-sass.bat to build all scss-files to main.css:
 - install gem: http://rubyinstaller.org/
 - `gem install sass`
 
 `sass -v` to see if it's working
 
 style/sass/Settings.scss contain variables used to control site style.


## How to use it
### Changing a value in Settings.scss

1. Make a change in Settings.scss
2. Make sure `build-sass.bat` was running, or start it now (will build on start and then listen for changes)
3. Publish the compiled main.css
