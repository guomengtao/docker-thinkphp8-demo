# Docker ThinkPHP 留言板

基于 Docker + ThinkPHP 8.0 + MySQL 8.0 构建的留言板系统。

## 技术栈

- Docker
- Nginx
- ThinkPHP 8.0
- MySQL 8.0

## 目录说明

docker-demo3/
├── docker-compose.yml    # Docker 服务编排配置
├── Dockerfile           # Web 服务镜像构建文件
├── nginx/              # Nginx 配置目录
│   └── default.conf   # Nginx 站点配置
└── src/               # 源代码目录
    └── tp8/          # ThinkPHP 项目目录
        ├── app/     # 应用目录
        ├── config/  # 配置文件
        ├── public/  # 公共资源
        └── view/    # 视图文件

## 功能特点

- 留言发布
- 留言列表展示
- Docker 容器化部署
- MySQL 数据持久化

## 作者

guomengtao 

一个使用 Docker + ThinkPHP + MySQL 构建的简单留言板系统。

## 功能特点

- 使用 Docker Compose 管理容器
- ThinkPHP 8.0 框架
- MySQL 8.0 数据库
- 简洁的用户界面

## 快速开始

1. 克隆项目： 