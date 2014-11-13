#云计算大赛一期工程
##目标：
完成影视明星识别基本功能。即上传一张只有一个演员的截图，给出演员的信息.
##分工与计划：
这两天先把三个网站的教程看一下，熟悉一下基本流程。
face++:http://www.faceplusplus.com.cn/uc_home/
thinkphp:http://www.thinkphp.cn/document/index.html
七牛服务器:http://developer.qiniu.com/docs/v6/sdk/php-sdk.html
今天会把系统的整个架构搭建出来，到时候进行分工。
#创建数据库用户
##用户名:legendcloud  密码:legend ,通过以下方式创建
##1.命令行下登陆root用户,然后依次输入以下指令
##2.insert into mysql.user(Host,User,Password) values("localhost","legendcloud",password("legend"));
##3.flush privileges;
##4.grant all privileges on facecloud.* to legendcloud@localhost identified by 'legend';
##5.flush privileges;
