function goToUrl(selObj, goToLocation) {
     eval("document.location.href = '" + goToLocation + selObj.options[selObj.selectedIndex].value + "'");
 }