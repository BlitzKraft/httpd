function toggle_visibility(id) {
	var e = document.getElementById(id);
	if(e.style.display == 'inline-block')
		e.style.display = 'none';
	else
		e.style.display = 'inline-block';
	};

var pjs = Processing.getInstanceById("sketch");
pjs.setbg("#FF0000");	


var tabLinks = new Array();
var contentDivs = new Array();

function init() {
	var tabListItems = document.getElementById('tabs').childNodes;
	for (var i = 0; i < tabListItems.length; i++) {
		if (tabListItems[i].nodeName == "A") {
			var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
			var id = getHash( tabLink.getAttribute('href'));
			tabLinks[id] = tabLink;
			contentDivs[id] = document.getElementById(id);
		}
	}

	var i = 0;

	for ( var id in tabLinks) {
		tabLinks[id].onclick = showTab;
		if (i == 0) tabLinks[id].className = 'selected';
		i ++;
	}

	var i = 0;
	for ( var id in contentDivs ) {
		if (i != 0) contentDivs[id].className = 'tabContent hide';
		i ++;
	}
}

function showTab() {
	var selectedId = getHash(this.getAttribute('href'));
	console.log(selectedId);
	for (var id in contentDivs ) {
		if (id == selectedId ) {
			tabLinks[id].className = 'selected';
			contentDivs[id].className = 'tabContent';
		}
		else {
			tabLinks[id].className = '';
			contentDivs[id].className = 'tabContent hide';
		}
	}

	return false;
}

function getHash() {
	var hashPos = url.lastIndexOf('#');
	return url.substring(hashPos + 1);
}

