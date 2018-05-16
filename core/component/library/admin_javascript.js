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
 * Ini adalah file utama javascript eska yang memuat semua javascript di pustaka.
 * This is a main javascript file from eska which contains all javascript in library.
 *
*/

$(document).ready(function() {
	$('#table-library').buildtable('route.php?mod=library&act=datatable');
});
