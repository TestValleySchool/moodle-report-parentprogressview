<?php
/*
Parent Progress View, a module for Moodle to allow the viewing of documents and pupil data by authorised parents.
    Copyright (C) 2016-17 Test Valley School.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License,
    or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/**
 * The report_parentprogressview report viewed event.
 *
 * @package report_parentprogressview
 * @author Test Valley School
 */

namespace report_parentprogressview\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The report_parentprogressview report viewed class. Note that in this context, report refers to accessing the page at all, not an individual document.
 *
 * @package report_parentprogressview
 */

class report_viewed extends \core\event\base {

	/**
	 * Initialize some basic event data
	 *
	 * @return void
	 */
	protected function init() {
		$this->data['crud'] = 'r';
		$this->data['edulevel'] = self::LEVEL_OTHER;
		$this->context = \context_system::instance();
	}

	/**
	 * Return localised event name
	 *
	 * @return string
	 */

	public static function get_name() {
		return get_string('eventreportviewed', 'report_parentprogressview');
	}

	/**
	 * Returns description of the event.
	 * 
	 * @return string
	 */

	 public function get_description() {
		return sprintf(get_string('eventreportvieweddescription', 'report_parentprogressview'), $this->userid);
	 }

	 /**
	  * Returns the URL to the report module.
	  *
	  * @return \moodle_url
	  */

	 public function get_url() {
		return new \moodle_url('/report/parentprogressview/index.php');
	 }

	 public static function get_other_mapping() {
		return false;
	 }



};

