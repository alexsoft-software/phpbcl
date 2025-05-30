<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 *************************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                              *
 * @ASCOOS-VERSION     : 24.0.0                                                      *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                           *
 * @ASCOOS-SITE        : www.ascoos.com                                              *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL-F.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.               *
 *************************************************************************************
 *
 * @package            : ASCOOS CMS - phpBCL
 * @subpackage         : Example array_find_key Function
 * @source             : /phpBCL/test/84_array_find_key.php
 * @version            : 1.1.3
 * @created            : 2024-10-04 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 * 
 * @since 5.6.40
 */



require_once("../autoload.php");

function is_even($value)
{
    return $value % 2 === 0;
}

function is_key_numeric($value, $key) 
{
    return is_numeric($key);
}

// Since PHP >= 5.6
echo array_find_key(['foo' => 1, 'bar' => 2, 'baz' => 3], 'is_even').'<br>'; // "bar"
echo array_find_key(['a' => 'foo', 2 => 'bar'], 'is_key_numeric').'<br>'; // "2"
/*
// Since PHP >= 7.4
if (version_compare(PHP_VERSION, '7.4.0', '>=')) { 
    array_find_key(['foo' => 1, 'bar' => 2, 'baz' => 3], fn($value) => $value % 2 === 0); // "bar"
}
*/
?>