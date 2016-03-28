namespace * com.youzan.novaTcpDemo.service

include '../entity/Demo.thrift'

service DemoService {
    string echoBack(1:string name),
    Demo.Demo hello(1:string name)
}
