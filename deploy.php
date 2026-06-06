<?php
// Ganti path ini sesuai dengan lokasi folder repository kamu di cPanel
$repo_dir = '/home/vbax9396/public_html/vbat-ponsel-duplicate';

// Pindah direktori dan eksekusi pull dari branch main/master
$output = shell_exec("cd {$repo_dir} && git pull origin main 2>&1");

echo "<pre>$output</pre>";
?>