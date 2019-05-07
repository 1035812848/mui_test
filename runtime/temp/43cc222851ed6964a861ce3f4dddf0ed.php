<?php /*a:1:{s:74:"D:\PhpStorm2018.2.2Projects\mui\tp\application\index\view\index\index.html";i:1557240370;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <link href="/static/mui-master/examples/hello-mui/css/mui.min.css" rel="stylesheet" />
    <link href="/static/mui-master/examples/hello-mui/css/mui.indexedlist.css" rel="stylesheet" />
    <style>
        html,
        body {
            height: 100%;
            overflow: hidden;
        }
        .mui-bar {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        #done.mui-disabled{
            color: gray;
        }
    </style>
</head>

<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">选择用户</h1>
    <a id='done' class="mui-btn mui-btn-link mui-pull-right mui-btn-blue mui-disabled">完成</a>
</header>
<div class="mui-content">
    <div id='list' class="mui-indexed-list">
        <div class="mui-indexed-list-search mui-input-row mui-search">
            <input type="search" class="mui-input-clear mui-indexed-list-search-input" placeholder="搜索用户">
        </div>
        <div class="mui-indexed-list-bar">
            <a>A</a>
            <a>B</a>
            <a>C</a>
            <a>D</a>
            <a>E</a>
            <a>F</a>
            <a>G</a>
            <a>H</a>
            <a>I</a>
            <a>J</a>
            <a>K</a>
            <a>L</a>
            <a>M</a>
            <a>N</a>
            <a>O</a>
            <a>P</a>
            <a>Q</a>
            <a>R</a>
            <a>S</a>
            <a>T</a>
            <a>U</a>
            <a>V</a>
            <a>W</a>
            <a>X</a>
            <a>Y</a>
            <a>Z</a>
        </div>
        <div class="mui-indexed-list-alert"></div>
        <div class="mui-indexed-list-inner">
            <div class="mui-indexed-list-empty-alert">没有数据</div>
            <ul class="mui-table-view">
                <?php if(is_array($users) || $users instanceof \think\Collection || $users instanceof \think\Paginator): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?>
                    <!--注意：$i是从1开始，所以减2-->
                    <?php if($i === 1 || $users[$i-2]['fC'] != $u['fC']): ?>
                    <li data-group="<?php echo htmlentities($u['fC']); ?>" class="mui-table-view-divider mui-indexed-list-group"><?php echo htmlentities($u['fC']); ?></li>
                    <?php endif; ?>
                    <li class="mui-table-view-cell mui-indexed-list-item mui-checkbox mui-left">
                        <input type="checkbox" /><?php echo htmlentities($u['xm']); ?>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<script src="/static/mui-master/examples/hello-mui/js/mui.min.js"></script>
<script src="/static/mui-master/examples/hello-mui/js/mui.indexedlist.js"></script>
<!--<script src="/public/static/mui-master/examples/hello-mui/js/mui.grouplist.testdata.js"></script>-->
<script type="text/javascript" charset="utf-8">
    mui.init();
    mui.ready(function() {
        var header = document.querySelector('header.mui-bar');
        var list = document.getElementById('list');
        var done = document.getElementById('done');
        //calc hieght
        list.style.height = (document.body.offsetHeight - header.offsetHeight) + 'px';
        //create
        window.indexedList = new mui.IndexedList(list);
        //done event
        done.addEventListener('tap', function() {
            var checkboxArray = [].slice.call(list.querySelectorAll('input[type="checkbox"]'));
            var checkedValues = [];
            checkboxArray.forEach(function(box) {
                if (box.checked) {
                    checkedValues.push(box.parentNode.innerText);
                }
            });
            if (checkedValues.length > 0) {
                mui.alert('你选择了: ' + checkedValues);
            } else {
                mui.alert('你没选择任何机场');
            }
        }, false);
        mui('.mui-indexed-list-inner').on('change', 'input', function() {
            var count = list.querySelectorAll('input[type="checkbox"]:checked').length;
            var value = count ? "完成(" + count + ")" : "完成";
            done.innerHTML = value;
            if (count) {
                if (done.classList.contains("mui-disabled")) {
                    done.classList.remove("mui-disabled");
                }
            } else {
                if (!done.classList.contains("mui-disabled")) {
                    done.classList.add("mui-disabled");
                }
            }
        });
    });
</script>
</body>

</html>