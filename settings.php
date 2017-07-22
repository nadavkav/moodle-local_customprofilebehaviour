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

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // New settings page.
    $page = new admin_settingpage('local_customprofilebehaviour',
        get_string('pluginname', 'local_customprofilebehaviour', null, true));
    if ($ADMIN->fulltree) {
        // Create insert icons with links widget.
        $setting = new admin_setting_configtextarea('local_customprofilebehaviour/customprofilecss',
            get_string('setting_customprofilecss', 'local_customprofilebehaviour', null, true),
            get_string('setting_customprofilecss_desc', 'local_customprofilebehaviour', null, true), '', PARAM_RAW);
        $page->add($setting);
    }
    // Add settings page to the appearance settings category.
    $ADMIN->add('appearance', $page);
}
