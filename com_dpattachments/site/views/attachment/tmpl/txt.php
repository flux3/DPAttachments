<?php
/**
 * @package    DPAttachments
 * @author     Digital Peak http://www.digital-peak.com
 * @copyright  Copyright (C) 2012 - 2015 Digital Peak. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
defined('_JEXEC') or die();

$input = JFactory::getApplication()->input;

$content = JFile::read(DPAttachmentsCore::getPath($this->item->path, $this->item->context));

if ($input->get('tmpl') != 'component')
{
    ?>
<div class="page-header">
	<h2><?php echo $this->escape($this->item->title); ?></h2>
</div>
<?php
}

echo nl2br(htmlentities($content));
