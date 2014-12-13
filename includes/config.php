<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 12/12/14
 * Time: 22:00
 */

$host       = getenv('IP');
$user       = 'alexandresousa';
$pass       = '';
$base       = 'biit';

$db = new mysqli($host,$user,$pass,$base);
