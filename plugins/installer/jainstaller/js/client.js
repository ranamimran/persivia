Joomla=window.Joomla||{};
Joomla.installfromja = function(install_url, name) {
	if ('' == install_url) {
		alert("This extension cannot be installed via the web. Please visit the developer's website to purchase/download.");
		return false;
	}
	jQuery('#install_url').val(install_url);
    Joomla.submitbutton4();
	return true;
}