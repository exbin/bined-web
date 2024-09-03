<?php
  function getDownloadList($group) {
    $result = array();
    if ($group == 'editor' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.3';
      $stb_date = '2024-01-06';
      $dev_ver = '0.3.0';
      $dev_date = '2024-07-09';
      $dev_ver_inst = $dev_ver;
      $dev_date_inst = '2024-07-09';

      $variants['stb'][0]['name'] = 'Windows Installer';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'exe';
      $variants['stb'][0]['file'] = 'bined-'.$stb_ver.'-win32.exe';
      $variants['stb'][1]['name'] = 'MacOS Installer';
      $variants['stb'][1]['ver'] = $stb_ver;
      $variants['stb'][1]['date'] = $stb_date;
      $variants['stb'][1]['icon'] = 'dmg';
      $variants['stb'][1]['file'] = 'bined-'.$stb_ver.'.dmg';
      $variants['stb'][2]['name'] = 'ZIP';
      $variants['stb'][2]['ver'] = $stb_ver;
      $variants['stb'][2]['date'] = $stb_date;
      $variants['stb'][2]['icon'] = 'zip';
      $variants['stb'][2]['file'] = 'bined-'.$stb_ver.'.zip';
      $variants['stb'][3]['name'] = 'Debian Package';
      $variants['stb'][3]['ver'] = $stb_ver;
      $variants['stb'][3]['date'] = $stb_date;
      $variants['stb'][3]['icon'] = 'debian';
      $variants['stb'][3]['file'] = 'bined_'.$stb_ver.'-1_all.deb';
      $variants['stb'][4]['name'] = 'Linux RPM Package';
      $variants['stb'][4]['ver'] = $stb_ver;
      $variants['stb'][4]['date'] = $stb_date;
      $variants['stb'][4]['icon'] = 'rpm';
      $variants['stb'][4]['file'] = 'bined-'.$stb_ver.'-1.noarch.rpm';

      $variants['dev'][0]['name'] = 'Windows Installer';
      $variants['dev'][0]['ver'] = $dev_ver_inst;
      $variants['dev'][0]['date'] = $dev_date_inst;
      $variants['dev'][0]['icon'] = 'exe';
      $variants['dev'][0]['file'] = 'bined-'.$dev_ver_inst.'-SNAPSHOT-win32.exe';
      $variants['dev'][1]['name'] = 'MacOS Installer';
      $variants['dev'][1]['ver'] = $dev_ver_inst;
      $variants['dev'][1]['date'] = $dev_date_inst;
      $variants['dev'][1]['icon'] = 'dmg';
      $variants['dev'][1]['file'] = 'bined-'.$dev_ver_inst.'-SNAPSHOT.dmg';
      $variants['dev'][2]['name'] = 'ZIP';
      $variants['dev'][2]['ver'] = $dev_ver;
      $variants['dev'][2]['date'] = $dev_date;
      $variants['dev'][2]['icon'] = 'zip';
      $variants['dev'][2]['file'] = 'bined-'.$dev_ver.'-SNAPSHOT.zip';
      $variants['dev'][3]['name'] = 'Debian Package';
      $variants['dev'][3]['ver'] = $dev_ver;
      $variants['dev'][3]['date'] = $dev_date;
      $variants['dev'][3]['icon'] = 'debian';
      $variants['dev'][3]['file'] = 'bined_'.$dev_ver.'-0_all.deb';
      $variants['dev'][4]['name'] = 'Linux RPM Package';
      $variants['dev'][4]['ver'] = $dev_ver;
      $variants['dev'][4]['date'] ='2024-08-16'; //$dev_date;
      $variants['dev'][4]['icon'] = 'rpm';
      $variants['dev'][4]['file'] = 'bined-'.$dev_ver.'-0.noarch.rpm';

      $result['editor'] = $variants;
    }

    if ($group == 'basic-editor' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.1';
      $stb_date = '2023-12-30';
      $dev_ver = '0.2.0';
      $dev_date = '2019-09-26';

      $variants['stb'][0]['name'] = 'Basic Editor';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'jar';
      $variants['stb'][0]['file'] = 'bined-editor-basic-'.$stb_ver.'.jar';

      $variants['dev'][0]['name'] = 'Basic Editor';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'bined-editor-basic-'.$dev_ver.'-SNAPSHOT.jar';

      $result['basic-editor'] = $variants;
    }

    if ($group == 'android' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.0';
      $stb_date = '2024-09-01';
      $dev_ver = '0.2.1';
      $dev_date = '2024-09-02';

      $variants['stb'][0]['name'] = 'Android App';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'android';
      $variants['stb'][0]['file'] = 'bined-android-'.$stb_ver.'.apk';

      $variants['dev'][0]['name'] = 'Android App';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'android';
      $variants['dev'][0]['file'] = 'bined-android-'.$dev_ver.'-SNAPSHOT.apk';

      $result['android'] = $variants;
    }

    if ($group == 'library' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.1';
      $stb_date = '2023-12-30';
      $dev_ver = '0.2.1';
      $dev_date = '2023-11-25';

      $variants['stb'][0]['name'] = 'Library';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'zip';
      $variants['stb'][0]['file'] = 'bined-lib-java-'.$stb_ver.'.zip';

      $variants['dev'][0]['name'] = 'Library';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'zip';
      $variants['dev'][0]['file'] = 'bined-lib-java-'.$dev_ver.'-SNAPSHOT.zip';

      $result['library'] = $variants;
    }

    if ($group == 'netbeans-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.6';
      $stb_date = '2024-05-12';
      $dev_ver = '0.2.6';
      $dev_date = '2024-05-08';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['prefix'] = 'ide ';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'netbeans';
      $variants['stb'][0]['file'] = 'org-exbin-bined-netbeans-'.$stb_ver.'.nbm';

      $variants['stb'][1]['name'] = 'Plugin';
      $variants['stb'][1]['prefix'] = 'platform ';
      $variants['stb'][1]['ver'] = $stb_ver;
      $variants['stb'][1]['date'] = $stb_date;
      $variants['stb'][1]['icon'] = 'netbeans';
      $variants['stb'][1]['file'] = 'org-exbin-bined-netbeans-platform-'.$stb_ver.'.nbm';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['prefix'] = 'ide ';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'netbeans';
      $variants['dev'][0]['file'] = 'org-exbin-bined-netbeans.nbm';

      $variants['repository_title'] = 'NetBeans Plugins Portal';
      $variants['repository_url'] = 'https://plugins.netbeans.apache.org/catalogue/?id=59';

      $result['netbeans-plugin'] = $variants;
    }

    if ($group == 'intellij-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.10.1';
      $stb_date = '2024-04-13';
      $dev_ver = '0.2.10.1';
      $dev_date = '2024-04-12';

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

      $variants['repository_title'] = 'JetBrains Marketplace';
      $variants['repository_url'] = 'https://plugins.jetbrains.com/plugin/9339';

      $result['intellij-plugin'] = $variants;
    }

    if ($group == 'eclipse-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.2';
      $stb_date = '2024-06-24';
      $dev_ver = '0.2.2';
      $dev_date = '2024-06-22';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'jar';
      $variants['stb'][0]['file'] = 'org.exbin.bined.eclipse_'.$stb_ver.'.jar';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'org.exbin.bined.eclipse_'.$dev_ver.'.snapshot.jar';

      $variants['repository_title'] = 'Eclipse Marketplace';
      $variants['repository_url'] = 'https://marketplace.eclipse.org/content/bined-binaryhex-editor';

      $result['eclipse-plugin'] = $variants;
    }

    if ($group == 'jdeveloper-extension' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.0.1';
      $stb_date = '2019-08-15';
      $dev_ver = '0.2.0';
      $dev_date = '2019-08-08';

      $variants['stb'][0]['name'] = 'Extension';
      $variants['stb'][0]['prefix'] = '12c ';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'jar';
      $variants['stb'][0]['file'] = 'org.exbin.bined.jdeveloper-'.$stb_ver.'.jar';

      $variants['stb'][1]['name'] = 'Extension';
      $variants['stb'][1]['prefix'] = '11g ';
      $variants['stb'][1]['ver'] = $stb_ver;
      $variants['stb'][1]['date'] = $stb_date;
      $variants['stb'][1]['icon'] = 'jar';
      $variants['stb'][1]['file'] = 'org.exbin.bined.jdeveloper-11g-'.$stb_ver.'.jar';

      $variants['dev'][0]['name'] = 'Extension';
      $variants['dev'][0]['prefix'] = '12c ';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'org.exbin.bined.jdeveloper.jar';

      $result['jdeveloper-extension'] = $variants;
    }

    if ($group == 'bluej-extension' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.1';
      $stb_date = '2022-08-20';
      $dev_ver = '0.2.1';
      $dev_date = '2019-10-26';

      $variants['stb'][0]['name'] = 'Extension';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'jar';
      $variants['stb'][0]['file'] = 'bined-bluej-extension-'.$stb_ver.'.jar';

      $variants['dev'][0]['name'] = 'Extension';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'jar';
      $variants['dev'][0]['file'] = 'bined-bluej-extension-'.$dev_ver.'-SNAPSHOT.jar';

      $result['bluej-extension'] = $variants;
    }

    if ($group == 'jedit-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.1.2';
      $stb_date = '2024-02-24';
      $dev_ver = '0.2.1';
      $dev_date = '2024-01-14';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'zip';
      $variants['stb'][0]['file'] = 'bined-jedit-plugin-'.$stb_ver.'.zip';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'zip';
      $variants['dev'][0]['file'] = 'bined-jedit-plugin-'.$dev_ver.'-SNAPSHOT.zip';

      $variants['repository_title'] = 'jEdit Plugins';
      $variants['repository_url'] = 'http://plugins.jedit.org/plugins/?BinEd';

      $result['jedit-plugin'] = $variants;
    }

    if ($group == 'autopsy-plugin' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.0';
      $stb_date = '2023-03-08';
      $dev_ver = '0.2.0';
      $dev_date = '2023-03-07';

      $variants['stb'][0]['name'] = 'Plugin';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'netbeans';
      $variants['stb'][0]['file'] = 'org-exbin-bined-autopsy-'.$stb_ver.'.nbm';

      $variants['dev'][0]['name'] = 'Plugin';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'netbeans';
      $variants['dev'][0]['file'] = 'org-exbin-bined-autopsy.nbm';

      $variants['repository_title'] = 'Autopsy Add-on Modules';
      $variants['repository_url'] = 'https://github.com/sleuthkit/autopsy_addon_modules/tree/master/ContentViewerModules/BinEd_Binary_Viewer';

      $result['autopsy-plugin'] = $variants;
    }

    if ($group == 'ghidra-extension' || is_null($group)) {
      $variants = array();
      $stb_ver = '0.2.0';
      $stb_date = '2024-01-19';
      $dev_ver = '0.2.0';
      $dev_date = '2024-01-18';

      $variants['stb'][0]['name'] = 'Extension';
      $variants['stb'][0]['ver'] = $stb_ver;
      $variants['stb'][0]['date'] = $stb_date;
      $variants['stb'][0]['icon'] = 'zip';
      $variants['stb'][0]['file'] = 'bined-ghidra-extension-'.$stb_ver.'.zip';

      $variants['dev'][0]['name'] = 'Extension';
      $variants['dev'][0]['ver'] = $dev_ver;
      $variants['dev'][0]['date'] = $dev_date;
      $variants['dev'][0]['icon'] = 'zip';
      $variants['dev'][0]['file'] = 'bined-ghidra-extension-'.$dev_ver.'-SNAPSHOT.zip';

      $result['ghidra-extension'] = $variants;
    }

    return $result;
  }
 ?>