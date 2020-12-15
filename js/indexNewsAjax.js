//存储数据
let dataItem={}

//请求菜单列表数据
$.ajax({
    
    url:"./data/newsCategory.php",//请求的url地址
    
    dataType:"json",//返回的格式为json
    
    async:true,//请求是否异步，默认为异步，这也是ajax的重要特性
    
    cache:false,//是否读取缓存
    
    timeout:5000,//设置请求超时时间
    
    data:JSON.stringify({ module:'news' }),//json请求头时参数需要转换成json字符串形式传送JSON.stringify()
    
    headers:{ 'Content-Type':"application/json;charset=utf-8" },//请求头数据类型
    
    type:"POST",//请求方式
    
    //请求成功时的处理********************************************************
    success:function(req){
        let tagMenu=document.getElementsByClassName('tab-menu')[0];
        let data=req.data;
        let menuHtml='';
        data.forEach((item,index)=>{
            let className=''
            if(index===0){ className='current'; }
            //自定义data-request标识
            menuHtml+=`<a data-type="${item.type}" href="javascript:void(0);" onclick="loadNewsData({_this:this,id:${item.id},index:${index}})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`
        })
        //生成菜单
        tagMenu.innerHTML=menuHtml;
        //初始化第一个分类的数据
        loadNewsData({_this:tagMenu.children[0],id:data[0].id,index:0})
    },
    // 请求超时时的处理
    error:function(){

    }
});
//菜单列表的点击事件
function loadNewsData(params){
    //获取data-type标识
    let categoryType=params._this.getAttribute('data-type');
    //获取内容区域
    let tabContentWrap=document.getElementById('tab-content-wrap');
    
    //清除高亮
    let aItem=document.getElementsByClassName('tab-menu')[0].children;
    for(var i=0;i<aItem.length;i++){ aItem[i].className='' };
    //设置当前高亮
    params._this.className='current'
    //判断数据是否已经存储在本地
    let data=dataItem[categoryType]
    if(data){
        tabContent(data,tabContentWrap);
        return false;
    }
    //请求数据
    $.ajax({
            
        url:"./data/indexNews.php",//请求的url地址

        dataType:"json", //返回的格式为json
        
        async:true,//请求是否异步，默认为异步，这也是ajax的重要特性
        
        cache:false,//是否读取缓存

        timeout:5000, //设置请求超时时间
        
        data:JSON.stringify({ categoryId:params.id }),//json请求头时参数需要转换成json字符串形式传送JSON.stringify()
        
        headers:{ 'Content-Type':"application/json;charset=utf-8" },//请求头数据类型
        
        type:"POST",//请求方式
        
        //请求成功时的处理********************************************************
        success:function(req){
            let data=req.data;
            tabContent(data,tabContentWrap);
            //存储数据
            dataItem[categoryType]=req.data
        },
        // 请求超时时的处理
        error:function(){
    
        }
    });
    
}

function tabContent(data,tabContentWrap){
    let itemHtml=`<div class="row-container gutter-15 padding-top-73 padding-bottom-102"><div class="row-wrap">`;
    data.forEach(item => {
        //字符串分割，以空格分隔
        let time=item.time.split(' ');
        itemHtml +=`<div class="col-item-3">
                        <div class="item">
                            <div class="img-cover" style="background-image:url(${item.imgUrl});">
                                <img src="../images/blank/indexNews.png" alt="${item.title}" width="100%">
                            </div>
                            <div class="figure-content padding-top-24">
                                <h4 class="title">${item.title}</h4>
                                <time datatime="${item.time}" pubtime="${time[0]}">${time[0]}</time>
                                <i class="line"></i>
                                <p class="dec">${item.dec}</p>
                                <a href="" class="more">
                                    查看更多
                                    <i class="iconfont icon-jiantou"></i>
                                </a>
                            </div>
                        </div>
                    </div>`
    });
    itemHtml+=`</div></div>`;
    tabContentWrap.innerHTML=itemHtml;
}