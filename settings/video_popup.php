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
 * Version details
 *
 * @package    theme_adaptable
 * @author     Yevhen Matasar <matasar.ei@gmail.com>
 * @copyright  Borys Grinchenko Kyiv University, 2020
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @global admin_root $ADMIN
 * @global object $asettings
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $page = new admin_settingpage('theme_adaptable_generic', get_string('videopopup', 'theme_adaptable'));

    $page->add(new admin_setting_heading('theme_adaptable_generic', get_string('videopopupheading', 'theme_adaptable'),
        format_text(get_string('videopopupdescription', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/videopopupenabled';
    $title = get_string('videopopupenabled', 'theme_adaptable');
    $description = get_string('videopopupenableddesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $page->add($setting);

    $name = 'theme_adaptable/videopopuptime';
    $title = get_string('videopopuptime', 'theme_adaptable');
    $description = get_string('videopopuptimedesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $page->add($setting);

    $name = 'theme_adaptable/videopopupurl';
    $title = get_string('videopopupurl', 'theme_adaptable');
    $description = get_string('videopopupurldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $page->add($setting);

    $asettings->add($page);
}
