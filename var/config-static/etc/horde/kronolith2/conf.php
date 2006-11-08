<?php
/* CONFIG START. DO NOT CHANGE ANYTHING IN OR AFTER THIS LINE. */
// $Horde: kronolith/config/conf.xml,v 1.18 2006/02/08 12:12:00 jan Exp $
$conf['calendar']['params']['table'] = 'kronolith_events';
$conf['calendar']['params']['driverconfig'] = 'horde';
$conf['calendar']['driver'] = 'sql';
$conf['storage']['default_domain'] = '';
$conf['storage']['params']['table'] = 'kronolith_storage';
$conf['storage']['params']['driverconfig'] = 'horde';
$conf['storage']['driver'] = 'sql';
$conf['metadata']['keywords'] = false;
$conf['reminder']['server_name'] = '';
$conf['reminder']['from_addr'] = '';
$conf['autoshare']['shareperms'] = 'none';
$conf['menu']['print'] = true;
$conf['menu']['import_export'] = true;
$conf['menu']['apps'] = array();
/* CONFIG END. DO NOT CHANGE ANYTHING IN OR BEFORE THIS LINE. */
