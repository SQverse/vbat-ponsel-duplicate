<?php
// Ganti dengan Repository Path kamu yang ada di cPanel
$repo_dir = '/home/vbax9396/repositories/vbat-ponsel-duplicate-2';

// Menjalankan git pull secara otomatis
$output = shell_exec("cd {$repo_dir} && git pull origin main 2>&1");
echo "<pre>$output</pre>";
?>