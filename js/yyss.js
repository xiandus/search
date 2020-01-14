		var kos = document.getElementById("kos");
		var kol = document.getElementById("kol");
		var kob = document.getElementById("kob");



	//监听输入框的keuup事件，
		kos.onkeyup = function() {
			if (this.value) {
				show(kol);
				// 动态创建script标签，使用百度提供的接口，将查询字符串编码后，写到src当中
				var s = document.createElement('script');
				s.src = 'https://s.video.qq.com/smartbox?callback=fn&plat=2&ver=0&num=5&otype=json&query=' + encodeURI(this.value.trim());
				// 插入到文档后获取jsonp格式的数据，然后调用callback函数，将data数据以参数的形式传入
				document.body.appendChild(s);
			} else {
				hide(kol);
			}
		}

		//点击li标签后把输入框的信息填入到文本框
		kol.onclick = function(e) {
			var e = e || window.event;
			var target = e.target || e.srcElement;
			if (target.nodeName == "LI") {
				kos.value = target.innerHTML;
				$('#kob').click();
			}
			hide(kol)
		}


		//点击百度一下按钮跳转到相应的页面
		$('#kob').click(function() {
			if (($("input[id='kos']").val()) == "") {
				alert("请输入关键字");
			} else {
				$.ajax({
					type: "get",
					url: "./api.php",
					dataType: "json",
					data: "do=get&v=" + $("input[id='kos']").val(),
					async: true,
					success: function(res) {
						if (res.status == 200) {
							res = res.res;
							lihtml = "";
							$.each(res, function(index, value) {

								lihtml = lihtml + '<li class="wei"><a class="a" href=javascript:play(' + value["url"] + ',"' + value["title"] + '")>' + value["title"] + '</a></li>';
							});

							$("ul[id='kol']").html(lihtml);
							show(kol);
						} else {
							alert(res.res);
						}

					},
					error: function(a) {
						alert("失败,请检查关键字。");
					}
				});
			}

		});

		function play(id, title) {
			$.ajax({
				type: "get",
				url: "./api.php",
				dataType: "json",
				data: "do=play&v=" + id + "&title=" + title,
				async: true,
				success: function(res) {
					if (res.status == 200) {
						res = res.res;
						lihtml = "";
						$.each(res, function(index, value) {

							lihtml = lihtml + '<li class="wei"><a class="a" target="_blank" href="' + value['url'] + '">' + value['title'] + '</a></li>';
							$("ul[id='kol']").html(lihtml);
							show(kol);
						});
					} else {
						alert(res.res);
					}
				},
				error: function(a) {
					alert("失败，请检查关键字。");
				}
			})
		}

		function fn(data) {
			var lihtml = "";
			//这时候遍历查询到的信息，放到li标签当中
			data.item.forEach(function(item, index) {
				lihtml = lihtml + '<div class="wei" cursor="pointer"><li class="a">' + item['word'] + '</li></div>';
			});
			$("ul[id='kol']").html(lihtml);
			show(kol);

			// 获取到数据后，把脚本删除
			var s = document.querySelectorAll('script');
			for (var i = 1, len = s.length; i < len; i++) {
				document.body.removeChild(s[i]);
			}
		}

		function hide(obj) {
			obj.style.display = "none"
		}

		function show(obj) {
			obj.style.display = "block"
		}