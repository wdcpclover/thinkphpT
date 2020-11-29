# ThinkPHP安装

## composer安装

## Composer 加速

在创建项目之前，我们先在虚拟机中运行以下命令来实现 [Composer 安装加速](https://learnku.com/composer/wikis/30594) ：

```
$ composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
```

## 创建 thinkphpT 项目

下面让我们来使用 Composer 创建一个名为 thinkphpT 的应用，后面我们将基于这个应用做更多的功能完善：

```
$ cd ~/Code
$ composer create-project topthink/think thinkphpT 
```

## PHPstudy设置

### Apache：

```
<IfModule mod_rewrite.c>
  Options +FollowSymlinks -Multiviews
  RewriteEngine On

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
</IfModule>
```

Ngingx 

```
server {
        listen        80;
        server_name  www.edu.com;
        root   "D:/phpstudy_pro/WWW/thinkphpT";
        location / {
            index index.php index.html error/index.html;
            if (!-e $request_filename) {
         			rewrite  ^(.*)$  /index.php?s=/$1  last;
         			break;
         		}
        }
        location ~ \.php(.*)$ {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_split_path_info  ^((?U).+\.php)(/?.+)$;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            fastcgi_param  PATH_INFO  $fastcgi_path_info;
            fastcgi_param  PATH_TRANSLATED  $document_root$fastcgi_path_info;
            include        fastcgi_params;
        }
}

```

## 用PHPstudy创建网站

新建网站创建数据库

## 配置.env文件

在项目根目录下建立.env文件

```
APP_DEBUG = false

[APP]
HOST=www.edu.com
DEFAULT_TIMEZONE = Asia/Shanghai

[DATABASE]
TYPE = mysql
HOSTNAME = 127.0.0.1
DATABASE = edu
USERNAME = edu
PASSWORD = 123456
HOSTPORT = 3306
CHARSET = utf8
DEBUG = true
PREFIX = qing_

[LANG]
default_lang = zh-cn

```

## 导入已经建好的数据库

mysql.sql

## 配置多应用模式

```
composer require topthink/think-multi-app
```

