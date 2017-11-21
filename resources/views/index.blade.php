@extends('app')
@section('title', '首页')
@section('carousel')
@section('content')
<div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最新文章</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">热门文章</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">电子书下载</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">购买纸质旧书</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p>
                        <span><i class="glyphicon glyphicon-user"></i>&nbsp;小鸽</span>
                        <span> &nbsp;/&nbsp; </span>
                        <span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span>
                        <span> &nbsp;/&nbsp; </span>
                        <span><i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span>
                    </p>
                    <p class="synopsis">
                        数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!
                        see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
                        see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
                    </p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/https.png" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">
                        数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!
                        see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
                        see? 提取文本和属性只需要像jquery那样获取即可, 这里获取了两个内容, title标签和a标签, 这样就不用再写那么多正则了. 数据采集变得非常的easy!!!
                    </p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/zhizu.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>    
            <div class="row new-article">
                <div class="col-md-4">
                    <img src="/imgs/laravel.jpg" class="img-rounded">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">不一样的数据采集</a></h2>
                    <p><span><i class="glyphicon glyphicon-calendar"></i>&nbsp;2017-04-12</span><span> &nbsp;/&nbsp; </span><span> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;php</span></p>
                    <p class="synopsis">数据采集对于一个程序员来说应该是一个非常常见的功能,但是像jquery一样的操作返回的html,估计你没有体验过. come on!!</p>
                </div>
            </div>
            <hr>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
            <div class="row e-book">
                <div class="col-md-4">
                    <img src="//img11.360buyimg.com/n1/jfs/t4387/13/3609456811/30176/e818e490/58ff9806Nbd3b48a9.jpg" class="img-rounded" alt="PHP设计模式-简夏莳光">
                </div>
                <div class="col-md-8">
                    <h2>
                        <a href="#">PHP 设计模式</a>
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p>出版社： 中国电力出版社</p>
                            <p>ISBN：9787512352728</p>
                            <p>版次：1</p>
                        </div>
                        <div class="col-md-4">
                            <p>外文名称：Learning PHP ...</p>
                            <p>出版时间：2014-02-01</p>
                            <p>正文语种：中文</p>
                        </div>
                        <div class="col-md-4">
                            <p>出版时间：2014-02-01</p>
                            <p>作者：张春博、张凯、邓全泉</p>
                            <p>
                                <a href="#" class="btn btn-default">下载</a>
                                <a href="#" class="btn btn-default">在线阅读</a>
                            </p>
                        </div>
                    </div>
                    <h2>内容简介</h2>
                    <hr>
                    <p>
                        通过学习如何在代码中使用设计模式，可以更高效地构建服务器端应用，在这个过程中，你的php编程水平也将逐步提高。本书利用大量浅显易懂的例子告诉你如何应用多种面向对象模式，并展示了这些模式在一些成熟的实际项目中的具体应用。需要学习这些可重用的模式如何帮助你解决复杂的问题，如何组织面向对象代码，以及只改变一些小部分来完成整个大项目的修改。利用你手上的这本《learningphp设计模式》，将了解如何采用一种更精巧的编程风格，这将大大减少开发时间。
                    </p>
                </div>
            </div>
            <hr>
            <div class="row e-book">
                <div class="col-md-4">
                    <img src="//img11.360buyimg.com/n1/jfs/t1912/312/2154851930/104708/d5295cd3/56f63c22Nbb294bc0.jpg" class="img-rounded" alt="PHP经典实例-简夏莳光">
                </div>
                <div class="col-md-8">
                    <h2>
                        <a href="#">PHP 经典实例</a>
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p>出版社： 中国电力出版社</p>
                            <p>ISBN：9787512352728</p>
                            <p>版次：1</p>
                        </div>
                        <div class="col-md-4">
                            <p>外文名称：Learning PHP ...</p>
                            <p>出版时间：2014-02-01</p>
                            <p>正文语种：中文</p>
                        </div>
                        <div class="col-md-4">
                            <p>出版时间：2014-02-01</p>
                            <p>作者：张春博、张凯、邓全泉</p>
                            <p>
                                <a href="#" class="btn btn-default">下载</a>
                                <a href="#" class="btn btn-default">在线阅读</a>
                            </p>
                        </div>
                    </div>
                    <h2>内容简介</h2>
                    <hr>
                    <p>
                        想要掌握PHP编程技术？或者想要学习如何完成一个特定的任务？那么一定要先看看《PHP经典实例（第3版）》。本书介绍了专门为PHP 5.4和5.5修订的350个经典技巧，并提供了丰富的示例代码。特别是对生成动态Web内容的解决方案做了全面更新，从使用基本数据类型到查询数据库，从调用RESTful API到测试和保护网站安全都有涵盖。
                    　　各个技巧都提供了示例代码，可以免费使用，另外还讨论了如何解决问题以及这些解决方案为什么可行。不论你是经验丰富的PHP程序员     ，还是刚从其他语言转到PHP，本书都是一个理想的实用资源。
                    　　《PHP经典实例（第3版）》提供的技巧包括：
                    　　基本数据类型：字符串、数字、数组和日期时间。
                    　　程序构建模块：变量、函数、类和对象。
                    　　Web编程：cookie、表单、会话和认证。
                    　　使用PDO、SQLite和其他扩展访问数据库。
                    　　RESTful API客户端和服务器，包括HTTP、XML和OAuth。
                    　　重要概念：email、正则表达式和图形创建。
                    　　设计健壮的应用：安全和加密、错误处理、调试和测试，以及性能调优。
                    　　文件、目录和PHP的命令行接口。
                    　　库和包管理器，如Composer和PECL。
                    </p>
                </div>
            </div>
            <hr>
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">
            <div class="row e-book">
                <div class="col-md-4">
                    <img src="//img11.360buyimg.com/n1/jfs/t4387/13/3609456811/30176/e818e490/58ff9806Nbd3b48a9.jpg" class="img-rounded" alt="PHP设计模式-简夏莳光">
                </div>
                <div class="col-md-8">
                    <h2>
                        <a href="#">PHP 设计模式 <span class="price">￥10</span></a>
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p>出版社： 中国电力出版社</p>
                            <p>ISBN：9787512352728</p>
                            <p>版次：1</p>
                        </div>
                        <div class="col-md-4">
                            <p>外文名称：Learning PHP ...</p>
                            <p>出版时间：2014-02-01</p>
                            <p>正文语种：中文</p>
                        </div>
                        <div class="col-md-4">
                            <p>作者：张春博、张凯、邓全泉</p>
                            <p>售价：10元（邮费到付）</p>
                            <p>
                                <a href="#" class="btn btn-default">购买</a>
                            </p>
                        </div>
                    </div>
                    <h2>内容简介</h2>
                    <hr>
                    <p>
                        通过学习如何在代码中使用设计模式，可以更高效地构建服务器端应用，在这个过程中，你的php编程水平也将逐步提高。本书利用大量浅显易懂的例子告诉你如何应用多种面向对象模式，并展示了这些模式在一些成熟的实际项目中的具体应用。需要学习这些可重用的模式如何帮助你解决复杂的问题，如何组织面向对象代码，以及只改变一些小部分来完成整个大项目的修改。利用你手上的这本《learningphp设计模式》，将了解如何采用一种更精巧的编程风格，这将大大减少开发时间。
                    </p>
                </div>
            </div>
            <hr>
            <div class="row e-book">
                <div class="col-md-4">
                    <img src="//img11.360buyimg.com/n1/jfs/t1912/312/2154851930/104708/d5295cd3/56f63c22Nbb294bc0.jpg" class="img-rounded" alt="PHP经典实例-简夏莳光">
                </div>
                <div class="col-md-8">
                    <h2>
                        <a href="#">PHP 经典实例 <span class="price">￥10</span></a>
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p>出版社： 中国电力出版社</p>
                            <p>ISBN：9787512352728</p>
                            <p>版次：1</p>
                        </div>
                        <div class="col-md-4">
                            <p>外文名称：Learning PHP ...</p>
                            <p>出版时间：2014-02-01</p>
                            <p>正文语种：中文</p>
                        </div>
                        <div class="col-md-4">
                            <p>作者：张春博、张凯、邓全泉</p>
                            <p>售价：10元（邮费到付）</p>
                            <p>
                                <a href="#" class="btn btn-default">购买</a>
                            </p>
                        </div>
                    </div>
                    <h2>内容简介</h2>
                    <hr>
                    <p>
                        想要掌握PHP编程技术？或者想要学习如何完成一个特定的任务？那么一定要先看看《PHP经典实例（第3版）》。本书介绍了专门为PHP 5.4和5.5修订的350个经典技巧，并提供了丰富的示例代码。特别是对生成动态Web内容的解决方案做了全面更新，从使用基本数据类型到查询数据库，从调用RESTful API到测试和保护网站安全都有涵盖。
                    　　各个技巧都提供了示例代码，可以免费使用，另外还讨论了如何解决问题以及这些解决方案为什么可行。不论你是经验丰富的PHP程序员     ，还是刚从其他语言转到PHP，本书都是一个理想的实用资源。
                    　　《PHP经典实例（第3版）》提供的技巧包括：
                    　　基本数据类型：字符串、数字、数组和日期时间。
                    　　程序构建模块：变量、函数、类和对象。
                    　　Web编程：cookie、表单、会话和认证。
                    　　使用PDO、SQLite和其他扩展访问数据库。
                    　　RESTful API客户端和服务器，包括HTTP、XML和OAuth。
                    　　重要概念：email、正则表达式和图形创建。
                    　　设计健壮的应用：安全和加密、错误处理、调试和测试，以及性能调优。
                    　　文件、目录和PHP的命令行接口。
                    　　库和包管理器，如Composer和PECL。
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection