<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   local_feedback
 * @copyright 2021, Farhan Karmali <farhan6318@gmail.com>, Guy Thomas <brudinie@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if (!$plugin) {
    $plugin = new stdClass();
}

$plugin->version = 2021022500;
$plugin->requires = 2014051200;
$plugin->component = 'local_feedback';
$plugin->maturity = MATURITY_BETA;
$plugin->release = '1.0';
$plugin->dependencies = [
        'webservice_restful' => 2018102100,
];