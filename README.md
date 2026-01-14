
# PHP Force Directory Deleter

This simple PHP script is designed to forcefully delete directories and files that are stubborn or have permission issues, especially the `.git` folder on shared hosting or local environments.

## Why this exists?
Sometimes, `.git` folders or system-generated files set themselves to "Read-only" or have strict ownership permissions. Standard deletion via FTP or File Manager might fail. This script recursively changes file permissions (`chmod 0777`) before attempting to unlink them.

## How to use

 1. Download `force-delete.php`.
 2. Place the script in the parent directory of the folder you want to delete.
 3. Open the script and edit the `$target_dir` variable:  
		 `$target_dir = 'your_folder_name_here';`
 4. Run the script by visiting it in your browser: yourdomain.com/force-delete.php.
 5. **IMPORTANT**: Delete this script immediately after use for security reasons.
