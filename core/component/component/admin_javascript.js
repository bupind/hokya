/*
 *
 * - eska Javascript
 *
 * - File : admin_javascript.js
 * - Version : 1.0
 * - Author : odak
 * - License : MIT License
 *
 *
 * Ini adalah file utama javascript eska yang memuat semua javascript di komponen.
 * This is a main javascript file from eska which contains all javascript in component.
 *
*/

$(document).ready(function() {
	$('#table-component').buildtable('route.php?mod=component&act=datatable');
});
