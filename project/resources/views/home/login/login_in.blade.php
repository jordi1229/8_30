﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>凡客诚品 - 会员登录</title>
    <link href="/login_in_static/css/login.css" rel="stylesheet" type="text/css" />
    <link href="/login_in_static/css/footer.css" rel="stylesheet" type="text/css" />
    <link href="/login_in_static/css/css.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="https://ssl.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" language="javascript" src="/login_in_static/js/js.js"></script>
    <script type="text/javascript" language="javascript" src="/login_in_static/js/script.js"></script>
    <script type="text/javascript" language="javascript" src="/login_in_static/js/login.js"></script>
    <meta name="keywords" content="凡客诚品 - 会员登录," />
    <meta name="description" content="凡客诚品 - 会员登录" /></head>
  
  <body>
    <center>
      <div id="Head" align="left">
        <a class="logo" href=""></a>
        <p>
          <a href="" target="_blank">帮助</a></p>
      </div>
    </center>
    <div class="wrapper">
      <div style="width: 100%; height: 25px; position: relative;">
        <h3 style="font-size: 22px; color: #979797; font-weight: bolder; text-align: left;
        height: 25px; line-height: 25px; float: right; margin: 0 100px 0 0; width: 400px;
        position: relative;">凡客 Vancl 登录
          <span style="font-size: 14px; font-weight: normal; position: absolute;
          right: 0px; bottom: 0px;">没有账户免费
            <a id="gotoRseg" href="/login_in/create" style="color: #b42025;
            margin: 0px;">注册</a>
          </span>
        </h3>
      </div>
      <div class="login">
        <div class="tag">
          <ul id="tags">
            <li class="on" style="width:100%;">普通登录</li>
            
          </ul>
        </div>
        <!--tag-->
        <div id="shows">
          <div class="user_infor">
            <div id="vanclLoginError" class="tips">用户名或者密码错误!</div>
            <div id="_uname" class="newtxt">
              <label>请输入用户名</label>
              <input id="vanclUserName" name="vanclUserName" type="text" value="" /></div>
            <div id="vanclUserNameError" class="tips">用户名不能为空!</div>
            <div id="_upwd" class="newtxt">
              <label>请输入密码</label>
              <input id="vanclPassword" name="vanclPassword" type="password" class="inputtextcolor" value="" /></div>
            <div id="vanclPasswordError" class="tips">密码不能为空!</div>
            <p id='pValidate' style="display:none" class="newtxt">
              <label style="color: #acacac">验证码</label>
              <input maxlength="6" style="width: 155px; height: 48px; border: 0 none;
              text-indent: 10px;" id="calculatevalidate" name="calcultatevalidate" type="text" class="inputtextcolor" value="" />
              

              <a style="cursor: pointer; float: right; line-height: 18px;" href="javascript:void(0)">看不清?换一张</a></p>
            <div id="validateError" style="display: none" class="tips">验证码不能为空!</div>
            <div class="bt">
              <span id="userThaw" style="display:none;">
                <a class="forget" href="ThawUser.aspx">账户解冻</a></span>
              <a class="forget" href="https://login.vancl.com/login/GetPwdStep1.aspx">找回密码</a>
              <div class="clear"></div>
              <a id="vanclLogin" class="log" href="#">登 录</a></div>
          </div>
          
          <!-- 横线 -->
          <div class="lines"></div>
          <div class="glup">
            <span class="blank10"></span>
            <h2 class="hezuo">使用合作网站账号登录凡客</h2>
            <span class="blank10"></span>
            <p class="qkimg">
              <a href="/login/wxlogin.aspx?http%3A%2F%2Fwww.vancl.com%2F" id="a_wxlogin" class="weixin"></a>
              <a class="xiaomi" onclick="openUrl('xiaomi')" href="javascript:void(0)"></a>
              <a href="javascript:void(0)" onclick="openUrl('alipay')" class="zhifubao"></a>
              <a class="qq" href="javascript:void(0)" onclick="openUrl('qq')"></a>
              <a class="qihu360" href="javascript:void(0)" onclick="openUrl('qihoo360')"></a>
              <a class="weibo" href="javascript:void(0)" onclick="openUrl('sinaweibo')"></a>
              <div class="clear"></div>
              <div class="blank10"></div>
            </p>
          </div>
          <!--tishi--></div>
        <!--user_infor-->
        <div class="user_infor" style="display: none">
          <div id="vjiaLoginError" class="tips">用户名或者密码错误!</div>
          <p>
            <label>用户名：</label>
            <input id="PartnerUserName" name="PartnerUserName" type="text" value="820880ea2fc14ee1b6633c8b55de0bec" /></p>
          <div id="vjiaUserNameError" class="tips">用户名不能为空!</div>
          <p>
            <label>密 码：</label>
            <input id="PartnerPassword" name="PartnerPassword" type="password" class="inputtextcolor" value="" /></p>
          <div id="vjiaPasswordError" class="tips">密码不能为空!</div>
          <p id='pVjiaValidate' style="display:none">
            <label>验证码：</label>
            <input maxlength="6" style="width: 65px;" id="vjiacalculatevalidate" name="vjiacalcultatevalidate" type="text" class="inputtextcolor" value="" />
            
          </p>
          <div id="vjiaValidateError" style="display: none" class="tips">验证码不能为空!</div>
          <div class="bt">
            <a id="vjiaLogin" class="log" href="#">登 录</a>
            <a class="forget" href="wangji">忘记密码啦？</a></div>
          <div class="tishi">
            <span>提示：</span>使用V+账户登录后系统会自动为您注册一个与V+帐户相关联的VANCL帐户。帐户关联后您可共享V+的会员积分和累积消费金额。</div></div>
      </div>
      <div class="advert">
        <img src="/login_in_static/picture/login120412_newlogo.jpg" id="_advertImage" style="width: 465px; display: none" />
        <img src="/login_in_static/picture/login120412_newlogo.jpg" style="width: 465px" /></div>
      <!--shows-->
      <div style="clear: both;"></div>
    </div>
    <center>
      <div id="bottom" align="center">
        <div id="bottoms">
          <p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
          <div id="footerArea">
            <div class="subFooter">
              <a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a>
              <span class="costumeOrg"></span>
              <a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a>
              <a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a>
            </div>
          </div>
        </div>
      </div>
    </center>
    <!--Bottom End-->
    <script type="text/javascript">function openUrl(type) {
        var curUrl = document.URL.toLowerCase();
        if (curUrl.indexOf('https://') != -1) {
          openwindow("https://api-login.vancl.com/redirect/" + type + "?callbackurl=https://login.vancl.com/login/ReceiveCallback.aspx", "siteWin", "950", "850");
        } else {
          openwindow("http://api-login.vancl.com/redirect/" + type + "?callbackurl=http://login.vancl.com/login/ReceiveCallback.aspx", "siteWin", "950", "850");
        }
      }
      function openwindow(url, name, iWidth, iHeight) {
        var url; //转向网页的地址;
        var name; //网页名称，可为空;
        var iWidth; //弹出窗口的宽度;
        var iHeight; //弹出窗口的高度;
        var iTop = (window.screen.availHeight - 30 - iHeight) / 2; //获得窗口的垂直位置;
        var iLeft = (window.screen.availWidth - 10 - iWidth) / 2; //获得窗口的水平位置;
        window.open(url, name, 'height=' + iHeight + ',innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',z-look=yes,toolbar=no, menubar=no, scrollbars=no, resizable=no ,alwaysRaised=yes, location=no, status=no');
      }</script>
    <script type="text/javascript">/*函数在这里*/
      function scroll(a, b, c, d, e) {
        var EACH = function(o, fn) {
          for (var i = 0; i < o.length; i++) {
            fn.call(o[i], i, o)
          }
        }
        var GF = function(o, t) {
          var s = o.getElementsByTagName(t),
          R = [];
          EACH(s,
          function(i, v) {
            s[i].parentNode == o && R.push(s[i]);
          });
          return R;
        }
        var G = function(x, y) {
          return GF(document.getElementById(x), y);
        }
        var T = G(a, b),
        S = G(c, d);
        _show(0);
        EACH(T,
        function(i, o) {
          T[i].onclick = (function(n) {
            return function() {
              _show(n);
            }
          })(i);
        });
        function _show(n) {
          EACH(T,
          function(i, o) {
            S[i].style.display = "none";
            T[i].className = ""
          });
          T[n].className = e;
          S[n].style.display = "block";
        }
      }
      /*用法在这里*/
      /*绑定id为tags里的li为标签, id为shows里的div为展示层, hov为标签选中时的样式*/
      scroll("tags", "li", "shows", "div", "on");

      function hoverinput(id) {
        var jqobj = $("#" + id);
        //            $(jqobj).hover(function () {
        //                var _value = $(this).find("input").val();
        //                $(this).find("input").focus();
        //                if (_value == "") {
        //                    $(this).find("label").css({ "z-index": "8" });
        //                    $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
        //                }
        //            }, function () {
        //                var _value = $(this).find("input").val();
        //                if (_value != "") {
        //                    $(this).find("input").removeClass("hoverinput");
        //                } else {
        //                    $(this).find("label").css({ "z-index": "10" });
        //                }
        //                $(this).find("input").blur();
        //            });
        setTimeout(function() {
          if ($(jqobj).find("input").val() != "") {
            $(jqobj).find("label").css({
              "z-index": "8"
            });
            $(jqobj).find("input").removeClass("hoverinput");
          }
        },
        1000);

        $(jqobj).bind("click",
        function() {
          var _value = $(this).find("input").val();
          $(this).find("input").focus();
          if (_value == "") {
            $(this).find("label").css({
              "z-index": "8"
            });
            $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
          }
        });

        $(jqobj).find("input").focus(function() {
          var _value = $(this).val();
          if (_value == "") {
            $(this).parent().find("label").css({
              "z-index": "8"
            });
            $(this).parent().find("input").removeClass("hoverinput").addClass("hoverinput");
          }
        });

        $(jqobj).find("input").blur(function() {
          var _value = $(this).val();
          if (_value != "") {
            $(this).removeClass("hoverinput");
          } else {
            $(this).parent().find("label").css({
              "z-index": "10"
            });
          }
          //$(this).blur();
        });

        $(jqobj).find("input").keyup(function() {
          var _value = $(this).val();
          if (_value != "") {
            $(this).removeClass("hoverinput");
          }
        });

        $(jqobj).find("input").keydown(function() {
          var _value = $(this).val();
          if (_value != "") {
            $(this).removeClass("hoverinput");
          }
        });

        setTimeout(function() {
          $("input").blur();
        },
        '500');
      }

      $(document).ready(function() {
        hoverinput("_uname", "Email/手机号");
        hoverinput("_upwd");
        hoverinput("pValidate");
        hoverinput("_quickmobile");
        hoverinput("_quickmobilecode");
        hoverinput("_quickcode");

        //            setTimeout(function () {
        //                $("input").blur();
        //            },'500');
      });

      //        window.onload = function () {
      //            $("input").blur();
      //        }
      </script>
    <script src="/login_in_static/js/quicklogin.js"></script>
  </body>

</html>