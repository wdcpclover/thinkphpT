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
	listen 80;
	server_name  all.bjed.com;
	root   "F:\www\asdata";
	location / {
		index  index.html index.htm index.php;
		#autoindex  on;

		# 新增内容开始
		if (!-e $request_filename) {
			rewrite  ^(.*)$  /index.php?s=/$1  last;
			break;
		}
		# 新增内容结束
	}
}
```

