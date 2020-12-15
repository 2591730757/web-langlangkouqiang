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
    <!-- swiper插件css -->
    <link rel="stylesheet" href="./swiper/swiper-bundle.min.css">
</head>
<body>
    <!-- 通过php将头部引用进来 -->
    <?php include('header.php')?>

    <!-- 幻灯片 start -->
    <div id="slide-wrap">
        <div class="slide-content">
            <ul class="clearfix">
                <li><img src="./images/shouye.jpg"></li>
                <li><img src="./images/shouye.jpg"></li>
                <li><img src="./images/shouye.jpg"></li>
            </ul>
        </div>
        <ul class="slide-nav">
            <!-- javascript:void(0)用于设置超链接不跳转 -->
            <!-- current高亮当前项 -->
            <a href="javascript:void(0);" class="current"></a>
            <a href="javascript:void(0);"></a>
            <a href="javascript:void(0);"></a>
        </ul>
        <span class="slide-prey"><i class="iconfont icon-left"></i></span>
        <span class="slide-next"><i class="iconfont icon-right"></i></span>
    </div>
    <!-- 幻灯片 end -->

    <!-- 交互式数据内容区 start -->
    <div class="container">
        <!-- 朗朗口腔 start -->
        <section>
            <!-- 头部标题 -->
            <header>
                <div class="main-column padding-top-90 padding-bottom-70">
                    <h3>朗朗口腔</h3>
                    <p>
                        呵护牙齿健康&nbsp;创造美好未来
                        <span></span>
                        care&nbsp;for&nbsp;teeth&nbsp;to&nbsp;create&nbsp;a&nbsp;better&nbsp;futuer
                    </p>
                </div>
            </header>
            <div class="info-list">
                <div id="infoListWrap"><!-- 数据区 --></div>
                <a href="" class="more-link">查看更多</a>
            </div>
        </section>
        <!-- 朗朗口腔 end -->

        <!-- 朗朗公益 start -->
        <section class="welfare">
            <header>
                <div class="main-column padding-top-53 padding-bottom-53">
                    <h3>朗朗公益</h3>
                    <p>
                        呵护牙齿健康&nbsp;创造美好未来
                        <span></span>
                        care&nbsp;for&nbsp;teeth&nbsp;to&nbsp;create&nbsp;a&nbsp;better&nbsp;futuer
                    </p>
                </div>
            </header>
            <div class="welfare-wrap" id="welfareWrap"><!-- 数据区 --></div>
        </section>
        <!-- 朗朗公益 end -->
    </div>
    <!-- 交互式数据内容区 end -->

    <!-- 医生模块 start -->
    <section class="docter">
        <header class="hide">
            <div>
                <h3>朗朗医生</h3>
                <p>
                    呵护牙齿健康&nbsp;创造美好未来
                    <span></span>
                    care&nbsp;for&nbsp;teeth&nbsp;to&nbsp;create&nbsp;a&nbsp;better&nbsp;futuer
                </p>
            </div>
        </header>
        <div class="container">
            <!-- Swiper -->
            <!-- 可视区 -->
            <div class="swiper-container">
                <!-- 滚动区 -->
                <div class="swiper-wrapper">
                    <!-- 子项 -->
                    <div class="swiper-slide">
                        <div class="docter-slide-item clearfix docter-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="./images/doctor.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔学学士，曾就职于高端私人齿科工作室,从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目，香港大学牙周学习研究项目。技术上最求完美，坚持”微创无痛治疗“原则，深受患者的信赖！</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 子项 -->
                    <div class="swiper-slide">
                        <div class="docter-slide-item clearfix docter-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="./images/doctor.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔学学士，曾就职于高端私人齿科工作室,从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目，香港大学牙周学习研究项目。技术上最求完美，坚持”微创无痛治疗“原则，深受患者的信赖！</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 子项 -->
                    <div class="swiper-slide">
                        <div class="docter-slide-item clearfix docter-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="./images/doctor.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔学学士，曾就职于高端私人齿科工作室,从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目，香港大学牙周学习研究项目。技术上最求完美，坚持”微创无痛治疗“原则，深受患者的信赖！</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <!-- 小黑点 -->
            <div class="p-r"><div class="swiper-pagination doctor-swiper-pagination"></div></div>
        </div>
    </section>
    <!-- 医生模块 end -->

    <!-- 资讯动态 start -->
    <div class="container">
        <section>
            <header>
                <div class="main-column padding-top-90 padding-bottom-40">
                    <h3>资讯动态</h3>
                    <p>
                        呵护牙齿健康&nbsp;创造美好未来
                        <span></span>
                        care&nbsp;for&nbsp;teeth&nbsp;to&nbsp;create&nbsp;a&nbsp;better&nbsp;futuer
                    </p>
                </div>
            </header>
            <ul class="tab-menu"><!-- 菜单列表 --></ul>
            <div id="tab-content-wrap"><!-- 内容列表 --></div>
            
        </section>
    </div>
    <!-- 资讯动态 end -->

    <!-- 通过php将尾部引用进来 -->
    <?php include('footer.php')?>


    





    <script src="./js/banner.js"></script>
    <script src="./js/common.js"></script>
    <!-- jquery库/框架 -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!-- swiper插件js -->
    <script src="./swiper/swiper-bundle.min.js"></script>
    <script src="./swiper/doctorSwiper.js"></script>
    <!-- 新闻模块 -->
    <script src="./js/indexNewsAjax.js"></script>
    <!-- 朗朗口腔 start -->
    <script>
        //以对象形式传参
        //加载提示以函数形式实现
        loadingMsg({
            id:'infoListWrap',
            message:'加载中',
            icon:'<div class="loading-icon"><i class="iconfont icon-jiazai-tianchong"></i></div>'
        });

        $.ajax({
            //请求的url地址
            url:"./data/index.php",
            //返回的格式为json
            dataType:"json",
            //请求是否异步，默认为异步，这也是ajax的重要特性
            async:true,
            //是否读取缓存
            cache:false,
            //参数值
            data:{
                categoryId:123456
            },
            //请求方式
            type:"POST",
            //请求前的处理
            beforeSend:function(){

            },
            //请求成功时的处理********************************************************
            success:function(req){
                let infoListWrap=document.getElementById('infoListWrap');
                //判断数据是否为空
                if(!req.data||req.data===0){
                    loadingMsg({
                        id:'infoListWrap',
                        message:'加载失败',
                        icon:''
                    });
                    return false;
                }
                //处理数据
                //定义内容标签字符串
                let ul='<ul>';
                //循环遍历每个数据
                req.data.forEach(item=>{
                    //a连接跳转并携带id
                    ul+=`
                <figure>
                    <a href="newsDetail.php?id=${item.id}">
                        <img src="${item.imgUrl}" alt="${item.title}">
                        <figcaption>${item.title}</figcaption>
                        <p>${item.dec}</p>
                    </a>
                </figure>`;
                });
                ul+='</ul>';
                //请求成功后，处理试图DOM渲染
                //替换标签内容
                infoListWrap.innerHTML=ul;
            },
            //请求完成时的处理
            complete:function(){

            },
            //请求出错时的处理
            error:function(){

            }
        });



        $.ajax({
            //请求的url地址
            url:"./data/index.php",
            //返回的格式为json
            dataType:"json",
            //请求是否异步，默认为异步，这也是ajax的重要特性
            async:true,
            //是否读取缓存
            cache:false,
            //参数值
            data:{
                module:'welfare',
                categoryId:10000
            },
            //请求方式
            type:"POST",
            //请求前的处理
            beforeSend:function(){

            },
            //请求成功时的处理********************************************************
            success:function(req){
                let data=req.data
                let html=''
                let welfareWrap=document.getElementById('welfareWrap')
                //处理第一个数据列
                html+=`<div class="row">
                        <div class="content-flex">
                            <div class="content-flex-big">
                                <img src="${data[0].imgUrl}" alt="${data[0].title}">
                            </div>
                            <div class="content-flex-small" style="background-color:#${data[0].bgColor}">
                                <div class="content-dec">
                                    <h4 class="title">${data[0].title}</h4>
                                    <time datetime="${data[0].date}" pubdate="${data[0].date}">${data[0].date}</time>
                                    <i class="line"></i>
                                    <a href="" class="more">
                                        查看更多
                                        <i class="iconfont icon-jiantou"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>`
                    //循环处理另外两个数据列
                    req.data.forEach((item,index)=>{
                        if(index!=0){
                            html+=`<div class="row">
                                    <div class="content-flex">
                                        <div class="content-flex-big ${item.color}" style="background-color:#${item.bgColor}">
                                            <div class="content-dec">
                                                <h4 class="title">${item.title}</h4>
                                                <time datetime="${item.date}" pubdate="${item.date}">${item.date}</time>
                                                <i class="line"></i>
                                                <p class="dec">${item.dec}</p>
                                                <a href="" class="more">
                                                    查看更多
                                                    <i class="iconfont icon-jiantou"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-flex-small">
                                            <img src="${item.imgUrl}" alt="${item.title}">
                                        </div>
                                    </div>
                                </div>`
                        }
                    })
                welfareWrap.innerHTML=html
            },
            //请求完成时的处理
            complete:function(){

            },
            //请求出错时的处理
            error:function(){

            }
        });
    </script>
    <!-- 朗朗口腔 end -->
</body>
</html>