1、备份数据库时报错：
修改php配置文件php.ini，把display_errors设置为off就可以解决

2、安装报错：
Parse error: syntax error, unexpected end of file in C:\xampp\htdocs\upload\class\functions.php on line 1351
修改php配置文件php.ini，把short_open_tag 设置为On就可以解决
