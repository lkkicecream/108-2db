//重新整理
var resizeId;
var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};
addEvent(window, "resize", function(event) {
    var screen = window.innerWidth;
    if(screen >= 769){
        clearTimeout(resizeId);
        resizeId = setTimeout(checkWidth, 500); //當停止螢幕拖拉才執行
    }
});
function checkWidth() {
  var windowsize = window.innerWidth;//取得螢幕寬度
  location.reload(); //重新整理刷新網頁
}
//header FIXED效果
var cbpAnimatedHeader = (function() {


    var docElem = document.documentElement,
        header = document.getElementById( 'header-fixed' ),
        didScroll = false,
        changeHeaderOn = 20;

    function init() {
        addEvent(window, "scroll", function(event) {
            if( !didScroll ) {
                didScroll = true;
                scrollPage();
            }
        });
    }

    function scrollPage() {
        var sy = scrollY();
        if ( sy >= changeHeaderOn ) {
            classie.add( header, 'header-fixed-close' );
        }
        else {
            classie.remove( header, 'header-fixed-close' );
        }
        didScroll = false;
    }

    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }

    init();

})();
//MENU打開
document.getElementById("header-navigation-border").addEventListener('click', function(){
    toggleClass(document.getElementById("header-navigation-box"),'open');
    toggleClass(document.getElementById("header-navigation-border"),'out');
})
document.getElementById("header-navigation-mask").addEventListener('click', function(){
    toggleClass(document.getElementById("header-navigation-box"),'open');
    toggleClass(document.getElementById("header-navigation-border"),'out');
})

// JS toggleClass
function toggleClass(element, className) {
    var arrayClass = element.className.split(" ");
    var index = arrayClass.indexOf(className);

    if (index === -1) {
        if (element.className !== "") {
            element.className += ' '
        }
        element.className += className;
    } else {
        arrayClass.splice(index, 1);
        element.className = "";
        for (var i = 0; i < arrayClass.length; i++) {
            element.className += arrayClass[i];
            if (i < arrayClass.length - 1) {
                element.className += " ";
            }
        }
    }
}
// setAttributes 多個設定
function setAttributes(el, attrs) {
  for(var key in attrs) {
    el.setAttribute(key, attrs[key]);
  }
}
//淡入效果(含淡入到指定透明度)
var iBase = {
    Id: function(name) {
        return document.getElementById(name);
    },
    SetOpacity: function(ev, v) {
        ev.filters ? ev.style.filter = 'alpha(opacity=' + v + ')' : ev.style.opacity = v / 100;
    }
}
function fadeIn(elem, speed, opacity){
    speed = speed || 20;
    opacity = opacity || 100;
    elem.style.display = 'block';
    iBase.SetOpacity(elem, 0);
    var val = 0;
    (function(){
        iBase.SetOpacity(elem, val);
        val += 1;
        if (val <= opacity) {
            setTimeout(arguments.callee, speed);
        }
    })();
}

//淡出效果(含淡出到指定透明度)
function fadeOut(elem, speed, opacity){
    speed = speed || 20;
    opacity = opacity || 0;
    var val = 100;
    (function(){
        iBase.SetOpacity(elem, val);
        val -= 1;
        if (val >= opacity) {
            setTimeout(arguments.callee, speed);
        }else if (val < 0) {
            elem.style.display = 'none';
        }
    })();
}
var index_animation = new Array();
for (var i = 1; i <= 12; i++) {
    index_animation.push('index-animation'+i);
}
function getRandom(minNum, maxNum) {    //取得 minNum(最小值) ~ maxNum(最大值) 之間的亂數
    return Math.floor( Math.random() * (maxNum - minNum + 1) ) + minNum;
}
function getRandomArray(minNum, maxNum, n) {    //隨機產生不重覆的n個數字
    var rdmArray = [n];     //儲存產生的陣列

    for(var i=0; i<n; i++) {
        var rdm = 0;        //暫存的亂數

        do {
            var exist = false;          //此亂數是否已存在
            rdm = getRandom(minNum, maxNum);    //取得亂數

            //檢查亂數是否存在於陣列中，若存在則繼續回圈
            if(rdmArray.indexOf(rdm) != -1) exist = true;

        } while (exist);    //產生沒出現過的亂數時離開迴圈

        rdmArray[i] = rdm;
    }
    return rdmArray;
}

function getTop(clsName){
    var obj = document.getElementsByClassName(clsName)[0];
    return obj.getBoundingClientRect().top;
}

function getDom(clsName){
    var obj=document.getElementsByClassName(clsName)[0];
    return obj;
}
//點擊率
function click_rate($id,$table) {
    var click_ajax = new XMLHttpRequest();
    click_ajax.open("POST", $f_path+$table+"/click.php");
    var data = "id=" + $id;
    click_ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    click_ajax.send(data);
}
//滑動效果
function menu_scrollTo($type){
    if($type==null)
        $type = 0;
    if($type==2){
        document.getElementById('header-navigation-box').className = "header-navigation-box";
        document.getElementById('header-navigation-border').className = "header-menu-rwd-btn-border";
        document.querySelector('.index-contact-hover').scrollIntoView({block: 'start',behavior: 'smooth' });
    }
    else if($type==1){
        document.querySelector('.index-works-hover').scrollIntoView({block: 'start',behavior: 'smooth'});
    }
    else{
        document.querySelector('.index-banner-box').scrollIntoView({block: 'start',behavior: 'smooth'});
    }
}
//IE專屬font
WebFont.load({
    google: {
      families: ['Teko']
    }
});