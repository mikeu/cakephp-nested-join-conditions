# CakePHP Application Skeleton demonstrating error thrown by nested join conditions

This application was written to demonstrate the situation described in [CakePHP issue #10531](https://github.com/cakephp/cakephp/issues/10531).

## Installation

1. Clone the repo,
```bash
git clone git@github.com:mikeu/cakephp-nested-join-conditions.git
```
2. Enter the directory and install its dependencies
```bash
cd cakephp-nested-join-conditions && composer install
```
3. Edit `config/app.php` to supply a valid database connection (the issue was encountered using PostgreSQL 9.4).
4. Create the database tables,
```bash
bin/cake migrations migrate
```
5. Start the CakePHP development server,
```bash
bin/cake server -p 8765
```
6. Attempt to view the posts visible to members of group 1, by visiting `http://localhost:8765/posts`.
