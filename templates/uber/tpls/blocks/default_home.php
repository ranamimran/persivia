<?php
/**
 * ------------------------------------------------------------------------
 * Uber Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('home')) : ?>
<!-- HOME POSITION -->
<div id="t3-section" class="test wrap sections-wrap <?php $this->_c('home') ?>">
	<div class=" col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<jdoc:include type="modules" name="position-13" style="T3Xhtml" />
	</div>
	<div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<jdoc:include type="modules" name="position-14" style="T3Xhtml" />
	</div>
	<div class=" col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<jdoc:include type="modules" name="position-15" style="T3Xhtml" />
	</div>
</div>
<!-- //HOME POSITION -->
<?php endif ?>