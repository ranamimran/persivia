<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Installer.jainstaller
 *
 * @copyright   Copyright (C) 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

/**
 * Support for the "Install from JoomlArt Repository" tab
 *
 * @package     Joomla.Plugin
 * @subpackage  System.jainstaller
 * @since       3.2
 */
class PlgInstallerJainstaller extends JPlugin
{
	public $appsBaseUrl = 'http://update.joomlart.com/service/';

	private $_installfrom = null;
	
	public function onInstallerViewBeforeFirstTab()
	{
		$app = JFactory::getApplication();
 
		$lang = JFactory::getLanguage();
		$lang->load('plg_installer_jainstaller', JPATH_ADMINISTRATOR);
	}
	
	public function onInstallerViewAfterLastTab()
	{
		$this->getChanges();

		$installfrom = $this->getInstallFrom();
		$installfromon = $installfrom ? 1 : 0;

		$document = JFactory::getDocument();

		JHtml::_('behavior.core');
		$document->addScript(JURI::root(true) . '/plugins/installer/jainstaller/js/client.js?jversion=' . JVERSION);
	}

	private function getInstallFrom()
	{
		if (is_null($this->_installfrom))
		{
			$app = JFactory::getApplication();
			$installfrom = base64_decode($app->input->get('installfrom', '', 'base64'));
	
			$field = new SimpleXMLElement('<field></field>');
			$rule = new JFormRuleUrl;
			if ($rule->test($field, $installfrom) && preg_match('/\.xml\s*$/', $installfrom)) {
				jimport('joomla.updater.update');
				$update = new JUpdate;
				$update->loadFromXML($installfrom);
				$package_url = trim($update->get('downloadurl', false)->_data);
				if ($package_url) {
					$installfrom = $package_url;
				}
			}
			$this->_installfrom = $installfrom;
		}
		return $this->_installfrom;
	}
	
	private function getChanges()
	{
		$installfrom = $this->getInstallFrom();
		$installfromon = $installfrom ? 1 : 0;

		$allowedTypes = $this->params->get('allowed_types', array('sample_package'));

		$xml = simplexml_load_string(file_get_contents($this->appsBaseUrl.'tracking/list.xml'));

		echo JHtml::_('bootstrap.addTab', 'myTab', 'joomlart', JText::_('PLG_INSTALLER_TAB_LABEL', true));
		?>
		<div id="ja-container" class="tab-pane">
			<legend><?php echo JText::_('PLG_INSTALLER_HEADER'); ?></legend>
			<div class="alert alert-block alert-dismissable">
				<?php echo JText::_('PLG_INSTALLER_USERGUIDE'); ?>
			</div>
			<table class="table table-striped" id="articleList">
				<thead>
				<tr>
					<th>
						<?php echo JText::_('COM_INSTALLER_HEADING_NAME'); ?>
					</th>
					<th>
						<?php echo JText::_('COM_INSTALLER_HEADING_TYPE'); ?>
					</th>
					<th width="10%">
						<?php echo JText::_('COM_INSTALLER_HEADING_FOLDER'); ?>
					</th>
					<th width="10%">
						<?php echo JText::_('JVERSION'); ?>
					</th>
					<th width="10%">
						<?php echo JText::_('PLG_INSTALLER_HEADING_INSTALL'); ?>
					</th>
				</tr>
				</thead>
				<tbody>
				<?php if($xml): ?>
					<?php $i = 0; ?>
					<?php foreach($xml->extension as $extension): ?>
						<?php
						//check
						$type = (string) $extension->attributes()->type;
						if(!in_array($type, $allowedTypes)) continue;
						$i++;
						//info
						$name = (string) $extension->attributes()->name;
						$element = (string) $extension->attributes()->element;
						$version = (string) $extension->attributes()->version;

						if(in_array($type, array('component', 'module', 'plugin', 'template'))) {
							$sType = $type.'_16';
						} else {
							$sType = $type;
						}
						$downloadUrl = sprintf($this->appsBaseUrl.'download.php?element=%s&version=%s&type=%s&coreVersion=j16', $element, $version, $sType);
						?>
						<tr class="row<?php echo $i % 2; ?>" >
							<td >
								<?php echo $name; ?>
							</td>
							<td class="hidden-phone">
								<?php echo ucwords(str_replace('_', ' ', $type)); ?>
							</td>
							<td class="hidden-phone">
								<?php echo @$extension->attributes()->folder != '' ? $extension->attributes()->folder : JText::_('COM_INSTALLER_TYPE_NONAPPLICABLE'); ?>
							</td>
							<td class="hidden-phone">
								<?php echo $version; ?>
							</td>
							<td class="center">
								<a onclick="return Joomla.installfromja('<?php echo $downloadUrl; ?>', '<?php echo htmlspecialchars($name); ?>')" href="#" class="install btn btn-success">
									<span class="icon-checkmark"></span> <?php echo JText::_('PLG_INSTALLER_BTN_INSTALL'); ?>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
				</tbody>
			</table>
		</div>

		<?php
		echo JHtml::_('bootstrap.endTab');

	}
}
