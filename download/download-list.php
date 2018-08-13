<?php
  function getDownloadList($group) {
    $result = array();
    if ($group = 'editor' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.3';
      $stb_date = '2017-10-22';
      $dev_ver = '0.2.0';
      $dev_date = '2018-08-12';

      $variants['stb'][0]['name'] = 'Windows Installer';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'exe';
      $variants['stb'][0]['file'] = 'deltahex-editor-'.$stb_ver.'-win32.exe';
      $variants['stb'][1]['name'] = 'ZIP';
      $variants['stb'][1]['ver'] = $stb_ver;
      $variants['stb'][1]['date'] = $stb_date;
      $variants['stb'][1]['icon'] = 'zip';
      $variants['stb'][1]['file'] = 'deltahex-editor-'.$stb_ver.'.zip';
      $variants['stb'][2]['name'] = 'Debian Package';
      $variants['stb'][2]['ver'] = $stb_ver;
      $variants['stb'][2]['date'] = $stb_date;
      $variants['stb'][2]['icon'] = 'debian';
      $variants['stb'][2]['file'] = 'deltahex-editor_'.$stb_ver.'_all.deb';
      $variants['stb'][3]['name'] = 'Linux RPM Package';
      $variants['stb'][3]['ver'] = $stb_ver;
      $variants['stb'][3]['date'] = $stb_date;
      $variants['stb'][3]['icon'] = 'rpm';
      $variants['stb'][3]['file'] = 'deltahex-editor-'.$stb_ver.'.noarch.rpm';

      $variants['dev'][0]['name'] = 'Windows Installer';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'exe';
      $variants['dev'][0]['file'] = 'bined-editor-'.$dev_ver.'-SNAPSHOT-win32.exe';
      $variants['dev'][1]['name'] = 'ZIP';
      $variants['dev'][1]['ver'] = $dev_ver;
      $variants['dev'][1]['date'] = $dev_date;
      $variants['dev'][1]['icon'] = 'zip';
      $variants['dev'][1]['file'] = 'bined-editor-'.$dev_ver.'-SNAPSHOT.zip';

      $result['editor'] = $variants;
    }

    if ($group = 'basic-editor' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.3';
      $stb_date = '2017-10-22';
      $dev_ver = '0.2.0';
      $dev_date = '2018-06-28';

      $variants['stb'][0]['name'] = 'Basic Editor';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'jar';
      $variants['stb'][0]['file'] = 'deltahex-editor-basic-'.$stb_ver.'.jar';

      $variants['dev'][0]['name'] = 'Basic Editor';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'bined-editor-basic-'.$dev_ver.'-SNAPSHOT.jar';

      $result['basic-editor'] = $variants;
    }

    if ($group = 'android' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.0';
      $stb_date = '2018-06-12';
      $dev_ver = '';
      $dev_date = '';

      $variants['dev'][0]['name'] = 'Android App';
      $variants['dev'][0]['ver'] = $stb_ver;
      $variants['dev'][0]['date'] = $stb_date;
      $variants['dev'][0]['icon'] = 'android';
      $variants['dev'][0]['file'] = 'bined-android-'.$stb_ver.'-SNAPSHOT.apk';

      $result['android'] = $variants;
    }

    if ($group = 'library' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.3';
      $stb_date = '2017-10-22';
      $dev_ver = '0.2.0';
      $dev_date = '2018-08-12';

      $variants['stb'][0]['name'] = 'Library';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'zip';
      $variants['stb'][0]['file'] = 'deltahex-java-'.$stb_ver.'.zip';

      $variants['dev'][0]['name'] = 'Library';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'zip';
      $variants['dev'][0]['file'] = 'bined-lib-java-'.$dev_ver.'-SNAPSHOT.zip';

      $result['library'] = $variants;
    }

    if ($group = 'netbeans-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.7';
      $stb_date = '2017-10-10';
      $dev_ver = '0.1.8';
      $dev_date = '2017-10-11';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'netbeans';
      $variants['stb'][0]['file'] = 'org-exbin-deltahex-netbeans-'.$stb_ver.'.nbm';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'netbeans';
      $variants['dev'][0]['file'] = 'org-exbin-deltahex-netbeans.nbm';

      $result['netbeans-plugin'] = $variants;
    }

    if ($group = 'intellij-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.6.1';
      $stb_date = '2018-03-07';
      $dev_ver = '0.1.7';
      $dev_date = '2018-06-15';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'jar';
      $variants['stb'][0]['file'] = 'deltahex-intellij-plugin-'.$stb_ver.'.jar';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'deltahex-intellij-plugin.jar';

      $result['intellij-plugin'] = $variants;
    }

    if ($group = 'jdeveloper-extension' || is_null($group)) {
      $variants = array();
      $stb_ver = '';
      $stb_date = '';
      $dev_ver = '0.1.0';
      $dev_date = '2018-03-11';

      $variants['dev'][0]['name'] = 'Extension';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'org.exbin.deltahex.jdeveloper.jar';

      $result['jdeveloper-extension'] = $variants;
    }

    return $result;
  }
 ?>