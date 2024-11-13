FROM php:8.1-fpm

# 安装必要的 PHP 扩展
RUN docker-php-ext-install pdo_mysql

# 安装 nginx
RUN apt-get update && apt-get install -y nginx

# 复制 nginx 配置
COPY nginx.conf /etc/nginx/conf.d/default.conf

# 启动脚本
COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]
