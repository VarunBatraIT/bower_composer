bower_composer
==============

Bootstrapping PHP project

Composer + Bower + Wiredep (Grunt Task)

Idea is to update js/css files using bower and add them automatically in view. I am using yml config file to have basic configuration which is parsed using Symfony YAML component.

npm install
composer install
That would be all since this runs "bower install" and "grunt wiredep" automatically.

You can explicitly run "bower install" which will automatically run "grunt wiredep" but if used "bower uninstall", "grunt wiredep" need to be run manually. Currently bower uninstall hooks are not supported so not added.
