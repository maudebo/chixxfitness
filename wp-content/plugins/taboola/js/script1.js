window._taboola = window._taboola || [];
_taboola.push({{{PAGE_TYPE}}:'auto'});
_taboola.push({listenTo:'render',handler:function(p){TRC.modDebug.logMessageToServer(2,"wordpress-integ");}});
!function (e, f, u) {
	e.async = 1;
  e.src = u;
  f.parentNode.insertBefore(e, f);
}(document.createElement('script'), document.getElementsByTagName('script')[0], '//cdn.taboola.com/libtrc/{{PUBLISHER_ID}}/loader.js');
