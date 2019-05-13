<?php
  function getDownloadList($group) {
    $result = array();
    if ($group = 'editor' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.3';
      $stb_date = '2017-10-22';
      $dev_ver = '0.2.0';
      $dev_date = '2019-03-24';

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
      $variants['dev'][0]['date'] = '2019-03-01';
      $variants['dev'][0]['icon'] = 'exe';
      $variants['dev'][0]['file'] = 'bined-'.$dev_ver.'-SNAPSHOT-win32.exe';
      $variants['dev'][1]['name'] = 'ZIP';
      $variants['dev'][1]['ver'] = $dev_ver;
      $variants['dev'][1]['date'] = $dev_date;
      $variants['dev'][1]['icon'] = 'zip';
      $variants['dev'][1]['file'] = 'bined-'.$dev_ver.'-SNAPSHOT.zip';
      $variants['dev'][2]['name'] = 'Debian Package';
      $variants['dev'][2]['ver'] = $dev_ver;
      $variants['dev'][2]['date'] = $dev_date;
      $variants['dev'][2]['icon'] = 'debian';
      $variants['dev'][2]['file'] = 'bined_'.$dev_ver.'-0_all.deb';
      $variants['dev'][3]['name'] = 'Linux RPM Package';
      $variants['dev'][3]['ver'] = $dev_ver;
      $variants['dev'][3]['date'] = $dev_date;
      $variants['dev'][3]['icon'] = 'rpm';
      $variants['dev'][3]['file'] = 'bined-'.$dev_ver.'-0.noarch.rpm';

      $result['editor'] = $variants;
    }

    if ($group = 'basic-editor' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.1.3';
      $stb_date = '2017-10-22';
      $dev_ver = '0.2.0';
      $dev_date = '2018-12-05';

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
      $dev_date = '2019-04-20';

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
      $stb_ver = '0.2.0';
      $stb_date = '2019-04-13';
      $dev_ver = '0.2.1';
      $dev_date = '2019-04-15';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'netbeans';
      $variants['stb'][0]['file'] = 'org-exbin-bined-netbeans-'.$stb_ver.'.nbm';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'netbeans';
      $variants['dev'][0]['file'] = 'org-exbin-bined-netbeans.nbm';

      $result['netbeans-plugin'] = $variants;
    }

    if ($group = 'intellij-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.0';
      $stb_date = '2019-04-13';
      $dev_ver = '0.2.1';
      $dev_date = '2019-05-06';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'zip';
      $variants['stb'][0]['file'] = 'bined-intellij-plugin-'.$stb_ver.'.zip';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'zip';
      $variants['dev'][0]['file'] = 'bined-intellij-plugin.zip';

      $result['intellij-plugin'] = $variants;
    }

    if ($group = 'jdeveloper-extension' || is_null($group)) {
      $variants = array();
      $stb_ver = '';
      $stb_date = '';
      $dev_ver = '0.2.0';
      $dev_date = '2018-11-07';

      $variants['dev'][0]['name'] = 'Extension';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'org.exbin.bined.jdeveloper.jar';

      $result['jdeveloper-extension'] = $variants;
    }

    if ($group = 'bluej-extension' || is_null($group)) {
      $variants = array();
      $stb_ver = '';
      $stb_date = '';
      $dev_ver = '0.2.0';
      $dev_date = '2019-05-12';

      $variants['dev'][0]['name'] = 'Extension';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'bined-bluej-extension-0.2.0-SNAPSHOT.jar';

      $result['bluej-extension'] = $variants;
    }

    return $result;
  }
 ?>