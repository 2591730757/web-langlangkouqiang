//幻灯片*******************************************************************************

//获取滚动范围的对象
let slideWrap=document.getElementById('slide-wrap');

// 获取滚动的对象[div]
let slideContent=slideWrap.getElementsByClassName('slide-content')[0];

//获取图片对象[li li li]
let liItem=slideContent.getElementsByTagName('li');

//获取分页的按钮对象(小白点)
let aItem=slideWrap.getElementsByClassName('slide-nav')[0].getElementsByTagName('a');

//prey、next按钮
let preyButton=slideWrap.getElementsByClassName('slide-prey')[0];
let nextButton=slideWrap.getElementsByClassName('slide-next')[0];

//获取可视区宽度||兼容IE
let viewWidth=document.documentElement.clientWidth||document.body.clientWidth;

//当前索引
let currentIndex=0;

//滚动开关标记
let flag=false;

//延迟定时器标记
let flagTimer=null;

//自动播放定时器
let autoTimer=null;

//设置滚动对象的宽度
slideContent.style.width=viewWidth*liItem.length+'px';

//设置图片对象的宽度
for(let i=0;i<liItem.length;i++){
    liItem[i].style.width=viewWidth+'px';
}

//分页按钮的点击事件
for(let i=0;i<aItem.length;i++){
    aItem[i].onclick=function(){
        currentIndex=i;
        slide(i);
    }
}

//鼠标悬停清除自动播放
slideWrap.onmouseenter=function(){ clearInterval(autoTimer); }

//鼠标移出执行自动播放
slideWrap.onmouseleave=function(){ autoPlay(); }

//自动播放幻灯片
autoPlay();
function autoPlay(){
    //定时执行next()跳转
    autoTimer=setInterval(function(){
        next();
    },6000)
}

//prey、next按钮的点击事件
preyButton.onclick=function(){
    if(flag){ return false; }
    flag=true;
    currentIndex--;
    if(currentIndex<0){ currentIndex=aItem.length-1; }
    slide(currentIndex);
}
nextButton.onclick=function(){
    if(flag){ return false; }
    flag=true;
    next();
}
function next(){
    currentIndex++;
    if(currentIndex==aItem.length){ currentIndex=0; }
    slide(currentIndex);
}

//分页按钮高光切换
function toogleHigh(){
    for(let j=0;j<aItem.length;j++){
        aItem[j].className='';
    }
    aItem[currentIndex].className='current';
}

//滚动方法
function slide(index){
    let left=index*viewWidth;
    slideContent.style.left=-left+'px';
    //开启定时器
    //时间为图片滚动过渡效果时间
    flagTimer=setTimeout(function(){
        flag=false;
        clearTimeout(flagTimer);
    },1000);
    toogleHigh();
}
