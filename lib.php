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
 * Plugin administration pages are defined here.
 *
 * @package     local_customprofilebehaviour
 * @category    admin
 * @copyright   2017 Nadav Kavalerchik
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function local_customprofilebehaviour_before_http_headers() {
    global $PAGE, $USER, $OUTPUT;

    // Fetch plugin system config settings.
    $config = get_config('local_customprofilebehaviour');
    $style = '';
    if (isset($config->customprofilecss)) {
        $style = $config->customprofilecss;
    }

    // Only using custom profile fields names that starts with "cpf_"
    if (!empty($USER->profile)) {
        foreach ($USER->profile as $class => $value) {
            if (strpos($class,'cpf') == 0 and $value == 1) {
                // Remove 'cpf' prefix ?
                //$bodyclass = substr($class, 3);
                $PAGE->add_body_class($class);
            }
        }
    }

    // Hardcoded styles - disabled.
    //$PAGE->requires->css('/local/customprofilebehaviour/styles.css');
    echo html_writer::nonempty_tag('style', $style );

}