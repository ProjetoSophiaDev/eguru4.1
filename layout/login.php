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
 * A login page layout for the boost theme.
 *
 * @package     theme_eguru
 * @copyright   2015 LMSACE Dev Team,lmsace.com
 * @author      LMSACE Dev Team
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once(dirname(__FILE__) .'/includes/themedata.php');

$bodyattributes = $OUTPUT->body_attributes();
echo "Servidores e alunos da UTFPR podem autenticar no SOPHIA com o login e senha do Portal do aluno e Sistemas internos.";
$templatecontext += [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes,
];

echo $OUTPUT->render_from_template('theme_eguru/login', $templatecontext);
