
CREATE TABLE IF NOT EXISTS `message` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `content` varchar(255) NOT NULL COMMENT '留言内容',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='留言表';

