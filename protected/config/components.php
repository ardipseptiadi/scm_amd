<?php

return array(
  'clientScript' => array(
      // 'class' => 'system.docotel.cms.components.compressor.PackageCompressor',
      'coreScriptPosition' => CClientScript::POS_END, // == POS_END
      // set compression and combined only to FALSE when in development stage
      // 'combineOnly' => FALSE,
      // 'enableCompression' => FALSE,
      'scriptMap' => array(
          'jquery.js' => FALSE,
          'jquery.min.js' => FALSE,
          'jquery-ui.js' => FALSE,
          'jquery-ui.min.js' => FALSE,
          // 'jquery.ba-bbq.js' => FALSE,
      ),
      'packages' => array(
          'jquery' => array(
            'baseUrl'=>'js',
            'js'=>array('jquery-1.8.3.min.js'),
            'coreScriptPosition'=>CClientScript::POS_END
          ),
          'avocado-js' => array(
              'basePath' => 'webroot.themes.avocadopanel.assets',
              'js' => array(
                  'js/charts/excanvas.min.js',
                  'js/charts/jquery.flot.js',
                  'js/jquery.jpanelmenu.min.js',
                  'js/jquery.cookie.js',
                  'js/avocado-custom-predom.js',
                  // 'js/jquery-1.9.1.min.js',
                  'datepicker/js/bootstrap-datepicker.min.js',

              ),
              // 'depends' => array('jquery'),
          ),
          'avocado-bottom-js' => array(
              'basePath' => 'webroot.themes.avocadopanel.assets',
              'js' => array(
                  'js/jquery.hotkeys.js',
                  'js/calendar/fullcalendar.min.js',
                  'js/jquery-ui-1.10.2.custom.min.js',
                  'js/jquery.pajinate.js',
                  'js/jquery.prism.min.js',
                  'js/jquery.dataTables.min.js',
                  'js/charts/jquery.flot.time.js',
                  'js/charts/jquery.flot.pie.js',
                  'js/charts/jquery.flot.resize.js',
                  'js/bootstrap/bootstrap.min.js',
                  'js/bootstrap/bootstrap-wysiwyg.js',
                  'js/bootstrap/bootstrap-typeahead.js',
                  'js/jquery.easing.min.js',
                  'js/jquery.chosen.min.js',
                  'js/avocado-custom.js',

              ),
              // 'depends' => array('jquery'),
          ),
          'avocado-css' => array(
              'basePath' => 'webroot.themes.avocadopanel.assets',
              'css' => array(
                  'css/chosen.css',
                  'css/bootstrap.min.css',
                  'css/theme/avocado.css',
                  'css/prism.css',
                  'css/fullcalendar.css',
                  'css/bootstrap-responsive.css',
                  'datepicker/css/bootstrap-datepicker3.css',

              ),
          ),
          'login-js' => array(
              // requires write permission for this directory
              'basePath' => 'webroot.themes.bucketadmin.assets',
              'css' => array(
                  'js/jquery.js',
                  'js/jqr.js',
                  'js/jui.js',
                  'library/bs3/js/bootstrap.min.js',
              ),
          ),
          'login-css' => array(
              // requires write permission for this directory
              'basePath' => 'webroot.themes.bucketadmin.assets',
              'css' => array(
                  'library/bs3/css/bootstrap.min.css',
                  'css/bootstrap-reset.css',
                  // 'library/font-awesome/css/font-awesome.css',
                  'css/style.css',
                  'css/style-responsive.css',
              ),
          ),
      ),
  ),
);
