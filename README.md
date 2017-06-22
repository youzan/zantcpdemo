# ZanTcpDemo
zan php tcp server demo

# 如何使用

1. 安装 [*zan扩展*](https://github.com/youzan/zan)，编译参数：
`./configure --enable-async-redis --enable-sockets --enable-openssl` 
2. 安装[composer](curl -sS https://getcomposer.org/installer | php)
3. 在根目录下执行composer update
4. 配置php.ini
```ini
zanphp.RUN_MODE = test
zanphp.DEBUG = true
```
5. 启动tcp server
`php bin/nova`

# 如何提供nova服务供[http-demo](https://github.com/youzan/zanhttpdemo)调用

详情参见 [**NOVA示例教程**](http://zanphpdoc.zanphp.io/nova/nova_service.html)

1. 编写nova服务thrift文件
2. 生成nova存根代码, 发布到仓库
3. tcp(nova服务端)项目 与 http(nova客户端)项目 composer.json 分别添加 nova存根代码 依赖
4. tcp(nova服务端)项目 实现 nova 服务接口, 配置发布服务 
5. http(nova客户端)项目 配置直接tcp-server，通过 nova 存根代码调用nova服务

**相关文档**

- [NOVA协议](http://zanphpdoc.zanphp.io/nova/protocol.html)
- [Thrift IDL 语法](http://zanphpdoc.zanphp.io/nova/IDL_syntax.html)
- [Zan Thrift IDL 设计规范](http://zanphpdoc.zanphp.io/nova/IDL_spec.html)
- [zan thrift 代码生成工具](http://zanphpdoc.zanphp.io/nova/zan_thrift.html)