        var input = document.getElementById('search-text')
        var oUl = document.getElementById('ul')
        input.onkeyup = function () {
            var value = this.value;
            var oScript = document.createElement('script');
            oScript.src = 'https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su?wd=' + value + '&cb=aa'
            // 核心在这里，
            // 1.实时获取参数 value
            // 2.cb=返回值的处理函数（aa）
            document.body.appendChild(oScript)
        }
        function aa(data) {
            oUl.style.display = 'block';
            var list = data.s;
            var str = '';
            if (list.length > 0 && document.getElementById("search-text").getAttribute("placeholder")=='百度一下') {
                list.forEach(function (ele, index) {
                    str += '<li class="wei"><a class="a" href ="https://www.baidu.com/s?wd=' + ele + '"><nobr>' + ele + '</nobr></li>';
                })
                oUl.innerHTML = str;
            } else {
                oUl.style.display = 'none';
            }
        }