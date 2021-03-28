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
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Non é posíbel crear a base de datos.</p>
<p>A base de datos especificada non existe e o usuario indicado non ten permiso para crear a base de datos.</p>
<p>O administrador do sitio debería verificar a configuración da base de datos.</p>';
$string['cannotcreatelangdir'] = 'Non é posíbel crear o directorio de idioma';
$string['cannotcreatetempdir'] = 'Non é posíbel crear un directorio temporal';
$string['cannotdownloadcomponents'] = 'Non foi posíbel descargar compoñentes';
$string['cannotdownloadzipfile'] = 'Non foi posíbel descargar o ficheiro ZIP';
$string['cannotfindcomponent'] = 'Non foi posíbel atopar o compoñente';
$string['cannotsavemd5file'] = 'Non é posíbel gardar o ficheiro md5';
$string['cannotsavezipfile'] = 'Non é posíbel gardar o ficheiro ZIP';
$string['cannotunzipfile'] = 'Non é posíbel descomprimir o ficheiro';
$string['componentisuptodate'] = 'O compoñente está actualizado';
$string['dmlexceptiononinstall'] = '<p>Produciuse un erro na base de datos [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'A comprobación do ficheiro descargado non foi satisfactoria';
$string['invalidmd5'] = 'md5 non válido';
$string['missingrequiredfield'] = 'Falta algún campo obrigatorio';
$string['remotedownloaderror'] = '<p>Fallo a descarga do compoñente cara o seu servidor. Recomendase encarecidamente que verifiqoe os axustes do proxy, extensión PHP cURL.</p>
<p>Debe descargar o ficheiro <a href="{$a->url}">{$a->url}</a> manualmente, copialo en «{$a->dest}» no seu servidor e descomprimilo alí.</p>';
$string['wrongdestpath'] = 'Camiño de destino errado.';
$string['wrongsourcebase'] = 'URL da fonte errado.';
$string['wrongzipfilename'] = 'Nome de ficheiro ZIP errado.';
