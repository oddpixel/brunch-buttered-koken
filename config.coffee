exports.config =
  
  paths:
    public: 'plugin'
  
  files:
    javascripts:
      defaultExtension: 'js'
      joinTo:
        'js/plugin.js': /^(app|vendor|bower_components)/
      order:
        after: [
        ]
         
    stylesheets:
      defaultExtension: 'less'
      joinTo: 
        'css/plugin.css': /^(app|vendor)/
