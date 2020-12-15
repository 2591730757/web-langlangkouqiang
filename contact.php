<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 网页名称 -->
    <title>朗朗口腔</title>
    <!-- 网页搜索显示的描述 -->
    <meta name="description" content="朗朗口腔">
    <!-- 网页搜索的关键字，必填项 -->
    <meta name="keywords" content="朗朗口腔">
    <!-- 浏览器渲染兼容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <!-- 网页图标 -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <!-- 链接css样式 -->
    <!-- 重置样式 -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- 公共样式 -->
    <link rel="stylesheet" href="./css/common.css">
    <!-- 主体样式 -->
    <link rel="stylesheet" href="./css/main.css">
    <!-- font图标css -->
    <link rel="stylesheet" href="./font/iconfont.css">
    <!-- 百度地图 -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=YzH9UDFDzqGNQhq5jFXseaa47i21hMi9"></script>
</head>
<body>
    <!-- 通过php将头部引用进来 -->
    <?php include('header.php')?>
    <!-- 面包屑 -->
    <?php include('crumbs.php')?>
    <div class="container">
        <!--百度地图容器-->
        <div class="baidu-map" id="map"></div>
        <div class="content-wrap">
            <div class="info">
                <h4 class="title">朗朗医疗投资有限公司</h4>
                <span>集团总部招商热线:</span>
                <a class="telphone" href="tel:0755-56566573">0755-56566573</a>
                <p>
                    <strong>地址</strong><br/>
                    深圳商山区（科技园）高新南一道3号富诚大厦三楼
                </p>
                <p>
                    <strong>联系人:</strong>
                    王经理
                </p>
                <p>
                    <strong>邮箱</strong><br/>
                    wanghb@langlangdentalcom
                </p>
                <p>
                    <strong>网址</strong><br/>
                    www.langlangdental.com
                </p>
            </div>
            <div class="message-form">
                <p class="title">合赢未来 · 共创伟业 Win-win cooperation for bright future</p>
                <form action="">
                    <div class="row-container gutter-16">
                        <div class="row-wrap">
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input id="name" type="text" placeholder="姓名">
                                </div>
                            </div>
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input id="mobile" type="text" placeholder="手机号">
                                </div>
                            </div>
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input id="email" type="email" placeholder="邮箱">
                                </div>
                            </div>
                            <div class="col-item-12">
                                <div class="input-item">
                                    <textarea id="text" placeholder="内容" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input id="code" type="text" placeholder="验证码">
                                </div>
                            </div>
                            <div class="col-item-4">
                                <img src="./images/message-code.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="checkForm()">提交</button>
                </form>
            </div>
        </div>
    </div>
    <!-- 招募 -->
    <div class="jobs-banner">
        <h4 class="title">加入我们</h4>
        <p>尽揽天下英才 共展宏图伟业</p>
        <span>opportunity seldom joins us</span>
    </div>
    
    <div class="container">
        <div class="jobs-list" id="jobsList">
            <section class="show">
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先。<br/>
                    任职资格：<br/>
                    1.财务，会计专业，持有会计证；<br/>
                    2.具有一年以上工作经验；<br/>
                    3.熟悉操作财务软件，Excel,Word,ERP等办公软件；<br/>
                    4.工作认真，态度端正；<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617(梁小姐)</a></span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>

            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先。<br/>
                    任职资格：<br/>
                    1.财务，会计专业，持有会计证；<br/>
                    2.具有一年以上工作经验；<br/>
                    3.熟悉操作财务软件，Excel,Word,ERP等办公软件；<br/>
                    4.工作认真，态度端正；<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617(梁小姐)</a></span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>

            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地点：<strong>深圳</strong></span>
                    <span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br/>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先。<br/>
                    任职资格：<br/>
                    1.财务，会计专业，持有会计证；<br/>
                    2.具有一年以上工作经验；<br/>
                    3.熟悉操作财务软件，Excel,Word,ERP等办公软件；<br/>
                    4.工作认真，态度端正；<br/>
                    职能类别：会计 财务助理/文员<br/>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span>
                        <span>手机：<a href="tel:186-6582-2617">186-6582-2617(梁小姐)</a></span>
                        <span>座机：<a href="tel:0755-86566573">0755-86566573转6019</a></span>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- 页码 -->
    <div class="pagination shop-module padding-top-100">
        <a href="javascript:void(0)">1</a>
        <span>2</span>
        <a href="javascript:void(0)">3</a>
        <a href="javascript:void(0)">4</a>
        <a href="javascript:void(0)">5</a>
        <a href="javascript:void(0)">6</a>
    </div>
    <!-- 通过php将尾部引用进来 -->
    <?php include('footer.php')?>
    <!-- 联系我们提交按钮交互 -->
    <script>
        function checkForm(){
            let name=document.getElementById('name');
            let mobile=document.getElementById('mobile');
            let email=document.getElementById('email');
            let text=document.getElementById('text');
            let code=document.getElementById('code');
            if(!name.value){
                alert('姓名不能为空！')
                return false
            }
            if(!mobile.value){
                alert('手机号不能为空！')
                return false
            }
            if(!(/^1[34578]\d{9}$/.test(mobile.value))){
                alert('手机号格式不正确！')
                return false
            }
            if(!email.value){
                alert('邮箱地址不能为空！')
                return false
            }
            if(!text.value){
                alert('内容不能为空！')
                return false
            }
            if(!code.value){
                alert('验证码不能为空！')
                return false
            }
        }
    </script>
    <!-- 招聘信息 -->
    <script>
        //jobs内容隐藏显示
        //事件注册=事件委托
        let jobsList=document.getElementById('jobsList');
        jobsList.addEventListener('click',function(e){
            let target=e.target;
            let targetType=target.getAttribute('data-type');
            let targetName=target.tagName.toLowerCase();
            let hasClassName='';
            if(targetType=='mark'&&targetName=='div'){
                hasClassName=target.parentNode.parentNode.className
                if(hasClassName){
                    target.parentNode.parentNode.className=''
                }else{
                    target.parentNode.parentNode.className='show'
                }
            }
        })
    </script>
    <!-- 百度地图 -->
    <script>
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物
        }
        function createMap(){ 
            map = new BMap.Map("map"); 
            map.centerAndZoom(new BMap.Point(113.961083,22.544545),19);
        }
        function setMapEvent(){
            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.enableDragging();
            map.enableDoubleClickZoom()
        }
        function addClickHandler(target,window){
            target.addEventListener("click",function(){
            target.openInfoWindow(window);
            });
        }
        function addMapOverlay(){
            var markers = [
                {content:"电话：<br/>地址：",title:"富诚科技大厦",imageOffset: {width:0,height:3},position:{lat:22.544353,lng:113.960966}}
            ];
            for(var index = 0; index < markers.length; index++ ){
                var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                    imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                })});
                var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                var opts = {
                    width: 200,
                    title: markers[index].title,
                    enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                marker.setLabel(label);
                addClickHandler(marker,infoWindow);
                map.addOverlay(marker);
            };
        }
        //向地图添加控件
        function addMapControl(){
            var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
            map.addControl(scaleControl);
            var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(navControl);
            var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
            map.addControl(overviewControl);
        }
        var map;
        initMap();
    </script>
</body>
</html>