<?php
$target_dir = 'your_folder_name_here'; 


function delete_directory($dirname) {
    if (is_dir($dirname)) {
        $dir_handle = opendir($dirname);
        if (!$dir_handle) return false;

        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                $path = $dirname . "/" . $file;
                // by DProvat
                if (!is_dir($path)) {
                    chmod($path, 0777); 
                    unlink($path);
                } else {
                    delete_directory($path);
                }
            }
        }
        closedir($dir_handle);
        chmod($dirname, 0777);
        return rmdir($dirname);
    }
    return false;
}

if (delete_directory($target_dir)) {
    echo "Folder '$target_dir' ebong er bhetorer sob file safely delete hoyeche.";
} else {
    echo "Error: Folder delete kora jayni. Path thik ache ki na check korun.";
}
?>
