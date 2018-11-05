

var curShowDiv = ""; //当前显示的层
var curDivWidth = 0; //当前层的宽度
var curDivHeight = 0; //当前层的高度
var common = {
    setPosition: function (divName, divWidth, divHeigth) {
        //函数说明：设置divName对象位置
        var bw = $(window).width();
        var bh = $(window).height();
        var st = $(document).scrollTop();
        var objw = divWidth;
        var objh = divHeigth;
        objw = (bw - objw) / 2;
        objw = objw < 0 ? 0 : objw;
        objh = (bh - objh) / 2;
        objh = objh < 0 ? 0 : objh;
        $("#" + divName).css("left", objw + "px");
        $("#" + divName).css("top", (objh + st) + "px");
        //设置滤镜宽高
        var totalw = $(document.body).width();
        var totalh = $(document).height();
        //        var totalw = window.screen.availWidth;
        //        var totalh = window.screen.availHeight;

        $("#divBacking").css("width", totalw + "px");
        $("#divBacking").css("height", totalh + "px");

        curShowDiv = divName;
        curDivWidth = divWidth;
        curDivHeight = divHeigth;
    },
    setIframe: function (width, height, src) {
        //函数说明:设置iframe的宽，高，链接路径
        $("#divframe").css("width", width + "px");
        $("#divframe").css("height", height + "px");
        $("#iframe").css("width", width + "px");
        $("#iframe").css("height", height + "px");
        $("#iframe").attr("src", src);
    },

    showWin: function () {
        //函数说明：打开显示层
        if ($.browser.msie && $.browser.version == "6.0") {
            $("#divBacking").show();
            $("#divframe").show();
        } else {
            $("#divBacking").fadeIn(500);
            $("#divframe").fadeIn(500);
        }
    },
    showWin2: function (id) {
        //函数说明：打开显示层
        if ($.browser.msie && $.browser.version == "6.0") {
            $("#divBacking").show();
            $("#divKuang").show();
            $("#" + id).show();
        } else {
            $("#divBacking").fadeIn(500);
            $("#divKuang").fadeIn(500);
            $("#" + id).show();
        }
    },
    closeWin2: function (id) {
        //函数说明：关闭当前显示的层
        if ($.browser.msie && $.browser.version == "6.0") {
            $("#" + id).hide();
            $("#divKuang").hide();
            $("#divBacking").hide();
        } else {
            $("#divKuang").fadeOut(1000);
            $("#" + id).hide();
            $("#divBacking").fadeOut(1000);
        }
    },
    closeWin: function () {
        //函数说明：关闭当前显示的层
        if ($.browser.msie && $.browser.version == "6.0") {
            $("#divframe").hide();
            $("#divBacking").hide();
        } else {
            $("#divframe").fadeOut(500);
            $("#divBacking").fadeOut(500);
        }
        $("#iframe").attr("src", "");
        this.setPosition("divframe", "0", "0");
        this.setIframe("0", "0", "#");
    },
    showWin1: function () {
        //函数说明：打开显示层
        if ($.browser.msie && $.browser.version == "6.0") {
            $("#sp").hide();
            $("#divBacking").show();
            $("#divframe").show();
        } else {
            $("#sp").hide();
            $("#divBacking").fadeIn(1000);
            $("#divframe").fadeIn(1000);
        }
    },
    closeWin1: function () {
        //函数说明：关闭当前显示的层
        if ($.browser.msie && $.browser.version == "6.0") {
            $("#sp").show();
            $("#divframe").hide();
            $("#divBacking").hide();
        } else {
            $("#sp").show();
            $("#divframe").fadeOut(1000);
            $("#divBacking").fadeOut(1000);
        }
        this.setPosition("divframe", "0", "0");
        this.setIframe("0", "0", "#");
    }
};
