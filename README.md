#  PHP Recursive Directory Deleter

This project is a simple yet powerful PHP utility created by **Ashikur Rahman Provat**. It is designed to safely and recursively delete a folder along with all its files and sub-folders.

### Clean up your server directories with a single execution.
The PHP Recursive Directory Deleter handles nested structures and automatically manages file permissions (`chmod`) to ensure smooth deletion.
For more tools and web development services, visit **[arprovat.com](https://arprovat.com)**.

## Authors

![Logo](https://arprovat.com/assets/img/favicon.ico)
**[@DProvat](https://github.com/Provat-14)**

## Features

- **Recursive Deletion:** Deletes everything inside a directory, including nested sub-folders.
- **Auto Permission:** Automatically sets `chmod 0777` to files and folders before deletion.
- **Safe Handling:** Checks if the path is a valid directory before proceeding.
- **Lightweight:** Pure PHP logic without any external dependencies.

## Tech Stack

**Server:** PHP (opendir, readdir, unlink, rmdir)

## How to Run

- You must have a PHP-supported server (e.g., Laragon, XAMPP, or Linux Server).
- Create a `force-delete.php` file and paste the script.
- Set your target folder name at the top of the script:

```php
$target_dir = 'your_folder_name_here';
```
- Run the script via browser or terminal:
```
php force-delete.php
```
## ⚠️ Disclaimer

This tool is permanent and **cannot be undone**. Once a directory is deleted, the data is gone forever. Please double-check the `$target_dir` path before running the script.

## Contributing

Contributions are welcome! If you'd like to add a GUI or extra safety features, feel free to fork the repository and submit a pull request.

## Contact

![Logo](https://arprovat.com/assets/img/favicon.ico)
If you encounter any issues or have suggestions for improvement, please [open an issue](https://github.com/Provat-14/force-php-folder-remover/issues/new) on GitHub.
