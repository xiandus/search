! function() {
    function g() {
        h(), i(), j(), k(),z(),zi()
    }

    function zi() {
    	if (document.getElementById("search-text").getAttribute("placeholder")=='影视搜索') {
        var a = document.querySelector('input[name="type"][onclick="' + bq() + '"]');
        a && (a.checked = !0, l(a))
    }    		
    	}
    function z() {
        return document.querySelector('input[name="type"]:checked').getAttribute("onclick")
    }
    function h() {
        d.checked = s()
    }

    function i() {
        var a = document.querySelector('input[name="type"][value="' + p() + '"]');
        a && (a.checked = !0, l(a))
    }

    function j() {
        v(u())
    }

    function k() {
        w(t())
    }

    function l(a) {
        for (var b = 0; b < e.length; b++) e[b].classList.remove("s-current");
        a.parentNode.parentNode.parentNode.classList.add("s-current")
    }

    function m(a, b) {
        window.localStorage.setItem("superSearch" + a, b)
    }

    function n(a) {
        return window.localStorage.getItem("superSearch" + a)
    }

    function o(a) {
        f = a.target, v(u()), w(a.target.value), m("type", a.target.value), c.focus(), l(a.target)
    }

    function p() {
        var b = n("type");
        return b || a[0].value
    }

    function q(a) {
        m("newWindow", a.target.checked ? 1 : -1), x(a.target.checked)
    }

    function r(a) {
        return a.preventDefault(), "" == c.value ? (c.focus(), !1) : (w(t() + c.value), x(s()), s() ? window.open(b.action, +new Date) : location.href = b.action, void 0)
    }

    function s() {
        var a = n("newWindow");
        return a ? 1 == a : !0
    }

    function t() {
        return document.querySelector('input[name="type"]:checked').value
    }

    function u() {
        return document.querySelector('input[name="type"]:checked').getAttribute("data-placeholder")
    }


    function v(a) {
        c.setAttribute("placeholder", a)
    }

    function w(a) {
        b.action = a
    }

    function x(a) {
        a ? b.target = "_blank" : b.removeAttribute("target")
    }
    var y, a = document.querySelectorAll('input[name="type"]'),
        b = document.querySelector("#super-search-fm"),
        c = document.querySelector("#search-text"),
        d = document.querySelector("#set-search-blank"),
        e = document.querySelectorAll(".search-group"),
        f = a[0];
    for (g(), y = 0; y < a.length; y++) a[y].addEventListener("change", o);
    d.addEventListener("change", q), b.addEventListener("submit", r)
}();
	function bq(){
		document.getElementById('super-search-fm').style.display = 'none';
		document.getElementById('yy').style.display = 'block';
	}
		function bw(){
		document.getElementById('super-search-fm').style.display = 'block';
		document.getElementById('yy').style.display = 'none';
	}