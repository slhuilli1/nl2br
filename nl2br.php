<?php
	defined('_JEXEC') or die('Access deny');

	class plgContentNl2br extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){				
			$article->text = nl2br($article->text);
		}	
	}
?>
