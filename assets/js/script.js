/* Toggle 
---------------- */
Array.from(document.querySelectorAll('.toggleClass > .toggle')).forEach(function(e){
  e.addEventListener('click', function() {
    if(e.parentNode.classList.contains('active')){
      e.parentNode.classList.remove('active');
      return false;
    }else {
      var orthers = document.querySelectorAll('.toggleClass');
      Array.prototype.forEach.call(orthers, function (orther) {
        orther.classList.remove('active');
      }); 
      e.parentNode.classList.toggle('active');
      return false;
    } 
  }, false);
});

// LAZYLOAD
/*-----------------------------------------------------------------*/
"use strict";
var BJLL_options = BJLL_options || {},
	BJLL = {
			_ticking: !1,
			check: function() {
					if (!BJLL._ticking) {
							BJLL._ticking = !0, void 0 === BJLL.threshold && (void 0 !== BJLL_options.threshold ? BJLL.threshold = parseInt(BJLL_options.threshold) : BJLL.threshold = 200);
							var e = document.documentElement.clientHeight || body.clientHeight,
									t = !1,
									n = document.getElementsByClassName("lazy-hidden");
							[].forEach.call(n, function(n, a, i) {
									var s = n.getBoundingClientRect();
									e - s.top + BJLL.threshold > 0 && (BJLL.show(n), t = !0)
							}), BJLL._ticking = !1, t && BJLL.check()
					}
			},
			show: function(e) {
					e.className = e.className.replace(/(?:^|\s)lazy-hidden(?!\S)/g, ""), e.addEventListener("load", function() {
							e.className += " lazy-loaded", BJLL.customEvent(e, "lazyloaded");
							// followequal();  
					}, !1);
					var t = e.getAttribute("data-lazy-type");
					e.className += " loaded";
					if ("image" == t) null != e.getAttribute("data-lazy-srcset") && e.setAttribute("srcset", e.getAttribute("data-lazy-srcset")), null != e.getAttribute("data-lazy-sizes") && e.setAttribute("sizes", e.getAttribute("data-lazy-sizes")), e.setAttribute("src", e.getAttribute("data-lazy-src"));

					else if ("bg" == t) {
							var n = e.getAttribute("data-lazy-src");
							e.style.backgroundImage = 'url(' + n + ')';
							e.className += ' lazy-loaded';
							// followequal();  
					}
					else if ("iframe" == t) {
							var n = e.getAttribute("data-lazy-src"),
									a = document.createElement("div");
							a.innerHTML = n;
							var i = a.firstChild;
							e.parentNode.replaceChild(i, e);
							// followequal();  
					}
			},
			customEvent: function(e, t) {
					var n;
					document.createEvent ? (n = document.createEvent("HTMLEvents")).initEvent(t, !0, !0) : (n = document.createEventObject()).eventType = t, n.eventName = t, document.createEvent ? e.dispatchEvent(n) : e.fireEvent("on" + n.eventType, n)
			}
	};
window.addEventListener("load", BJLL.check, !1), window.addEventListener("scroll", BJLL.check, !1), window.addEventListener("resize", BJLL.check, !1), document.getElementsByTagName("body").item(0).addEventListener("post-load", BJLL.check, !1);
