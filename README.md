# Docker-LNMP
一个简单的Docker-LNMP环境搭建项目</br>
✅ 默认配置：nginx:1.18、php:7.4fpm、mysql:5.7

## 搭建

- 下载docker-compose.yml配置

```bash
git clone https://github.com/Lucklike-z/Docker-LNMP.git
```

- 修改配置文件

```bash
vim docker-compose.yml
8000:80  #web容器的80端口映射到主机8000
```

![image-20250512200602171](https://lkdenote.oss-cn-chengdu.aliyuncs.com/note/image-20250512200602171.png)

- 构建项目

```bash
docker-compose up -d
```

![image-20250512201022619](https://lkdenote.oss-cn-chengdu.aliyuncs.com/note/image-20250512201022619.png)
## 管理
- 管理容器，在目录下运行即可管理，注意不能使用down，否则数据将抹除

```bash
docker-compose stop # 关闭
docker-compose start  # 启动
docker-compose restart # 重启
```

## 配置

- 修改php配置或者添加php扩展

```bash
docker-compose exec php bash   # 进入到php容器中
docker-php-ext-install mysqli  # 安装mysqli扩展
docker-php-ext-enable mysqli   #启动mysqli扩展
```
- 删除扩展
```bash
/usr/local/etc/php/conf.d/  # 配置文件路径，直接删除扩展就行了
rm -rf /usr/local/etc/php/conf.d/docker-php-ext-mysqli.ini  # 删除mysqli扩展
```

## 验证

- 访问http://主机/mysql.php验证是否配置成功

## 启动问题
<a href="https://github.com/Lucklike-z/Docker-LNMP/issues">docker-compose up -d启动报错</a>
