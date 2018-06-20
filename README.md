微信公众号练习

                   修改配置说明

1. 修改根域名

    $config['base_url'] = ''; 

2. 去掉index  
    
    $config['index_page'] = '';  
 需要修改 HTACCESS
    <IfModule mod_rewrite.c>
	Options +FollowSymlinks -Multiviews
	RewriteEngine on

	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule ^(.*)$ index.php [L,E=PATH_INFO:$1]
	</IfModule>

3. 变更视图文件目录	
    
    $view_folder = 'views';

 4. 配置日志等级
 
    $config['log_threshold'] = 4;   
    $config['log_path'] = 'logs/'; 日志路径
    