<?php
/**
 * WPИ-XM Server Stack
 * Copyright © 2010 - 2016 Jens-André Koch <jakoch@web.de>
 * http://wpn-xm.org/
 *
 * This source file is subject to the terms of the MIT license.
 * For full copyright and license information, view the bundled LICENSE file.
 */

/**
 * WPИ-XM Server Stack - Download Filenames
 * ----------------------------------------
 *
 * The array defines the relationship between
 * a "component" in the software registry (array key)
 * and it's "filename" in the downloads directory.
 * The filename is used by the installation wizards.
 */
return array(
    'adminer'               => 'adminer.php', // ! php file
    'apache-benchmark'      => 'ab.zip',
    'closure-compiler'      => 'closure-compiler.zip',
    'composer'              => 'composer.phar', // ! phar file
    'conemu'                => 'conemu.7z',
    'elasticsearch'         => 'elasticsearch.zip',
    'gogs-x86'              => 'gogitservice.zip',
    'gogs-x64'              => 'gogitservice.zip',
    'heidisql'              => 'heidisql.zip',
    'imagick'               => 'imagick.zip',
    'imagick-x64'           => 'imagick.zip',
    'mariadb'               => 'mariadb.zip',
    'mariadb-x64'           => 'mariadb.zip',
    'memadmin'              => 'memadmin.zip',
    'memcached'             => 'memcached.zip',
    'memcached-x64'         => 'memcached.zip',
    'mongodb'               => 'mongodb.zip',
    'mongodb-x64'           => 'mongodb.zip',
    'msysgit'               => 'msysgit.exe', // ! 7zip sfx - exe file
    'msysgit-x64'           => 'msysgit.exe', // ! 7zip sfx - exe file
    'nginx'                 => 'nginx.zip',
    'node'                  => 'node.exe', // ! exe file
    'node-x64'              => 'node.exe', // ! exe file
    'nodenpm'               => 'nodenpm.zip',
    'notepadplusplus-x64'   => 'notepadplusplus.zip',
    'notepadplusplus-x86'   => 'notepadplusplus.zip',
    'openssl'               => 'openssl.zip',
    'openssl-x64'           => 'openssl.zip',
    'osquery'               => 'osquery.msi',
    'pear'                  => 'go-pear.phar', // ! phar file
    'phantomjs'             => 'phantomjs.zip',
    'php'                   => 'php.zip',
    'php-cs-fixer'          => 'php-cs-fixer.phar', // ! phar file
    'php-qa'                => 'php.zip',
    'php-qa-x64'            => 'php.zip',
    'php-x64'               => 'php.zip',
    'phpext_amqp'           => 'phpext_amqp.zip',
    'phpext_apc'            => 'phpext_apc.zip',
    'phpext_apcu'           => 'phpext_apcu.zip',
    'phpext_event'          => 'phpext_event.zip',
    'phpext_geoip'          => 'phpext_geoip.zip',
    'phpext_ice'            => 'phpext_ice.zip',
    'phpext_igbinary'       => 'phpext_igbinary.zip',
    'phpext_imagick'        => 'phpext_imagick.zip',
    'phpext_ioncube'        => 'phpext_ioncube.zip',
    'phpext_jsond'          => 'phpext_jsond.zip',
    'phpext_lzf'            => 'phpext_lzf.zip',
    'phpext_mailparse'      => 'phpext_mailparse.zip',
    'phpext_memcache'       => 'phpext_memcache.zip', // without D
    'phpext_mongodb'        => 'phpext_mongodb.zip',
    'phpext_msgpack'        => 'phpext_msgpack.zip',
    'phpext_oauth'          => 'phpext_oauth.zip',
    'phpext_oci8'           => 'phpext_oci8.zip',
    'phpext_phalcon'        => 'phpext_phalcon.zip',
    'phpext_rar'            => 'phpext_rar.zip',    
    'phpext_redis'          => 'phpext_redis.zip',
    'phpext_runkit'         => 'phpext_runkit.zip',
    'phpext_solr'           => 'phpext_solr.zip',
    'phpext_sphinx'         => 'phpext_sphinx.zip',
    'phpext_stats'          => 'phpext_stats.zip',
    'phpext_stomp'          => 'phpext_stomp.zip',
    'phpext_timezonedb'     => 'phpext_timezonedb.zip',
    'phpext_trader'         => 'phpext_trader.zip',
    'phpext_uploadprogress' => 'phpext_uploadprogress.zip',
    'phpext_uprofiler'      => 'phpext_uprofiler.zip',
    'phpext_varnish'        => 'phpext_varnish.zip',
    'phpext_wincache'       => 'phpext_wincache.zip',
    'phpext_xdebug'         => 'phpext_xdebug.zip',
    'phpext_xhprof'         => 'phpext_xhprof.zip',
    'phpext_yaf'            => 'phpext_yaf.zip',
    'phpext_zip'            => 'phpext_zip.zip',
    'phpext_zmq'            => 'phpext_zmq.zip',
    'phpmemcachedadmin'     => 'phpmemcachedadmin.zip',
    'phpmyadmin'            => 'phpmyadmin.zip',
    'pickle'                => 'pickle.phar',
    'postgresql'            => 'postgresql.zip',
    'postgresql-x64'        => 'postgresql.zip',
    'qcachegrind-x64'       => 'qcachegrind.zip',
    'qcachegrind-x86'       => 'qcachegrind.zip',
    'rabbitmq'              => 'rabbitmq.zip',
    'rclone-x86'            => 'rclone.zip',
    'rclone-x64'            => 'rclone.zip',
    'redis-x64'             => 'redis.zip',
    'redisdesktopmanager'   => 'redisdesktopmanager.exe',
    'rockmongo'             => 'rockmongo.zip',
    'robo3t'                => 'robo3t.zip',
    'sendmail'              => 'sendmail.zip',
    'sphinx'                => 'sphinx.zip',
    'sphinx-x64'            => 'sphinx.zip',
    'uprofiler'             => 'uprofiler.zip',
    'varnish'               => 'varnish.zip',
    // vcredist_x86.exe (do not delete this comment, its for easier comparison with the .iss file)
    'webgrind'              => 'webgrind.zip',
    'wincachegrind'         => 'wincachegrind.zip',
    'wpnxm-scp'             => 'wpnxm-scp.zip',
    'wpnxm-scp-x64'         => 'wpnxm-scp.zip',
    'wpnxm-benchmark'       => 'wpnxm-benchmark.zip',
    'xhprof'                => 'xhprof.zip',
    'yuicompressor'         => 'yuicompressor.jar', // ! jar file
    'zealdocs'              => 'zealdocs.7z'
);
