<?php
defined('_JEXEC') or die;

?>
<div class="ultimaspublicaciones<?php echo $moduleclass_sfx ?>">
  	<table class="table-striped">
  	  <thead>
  	  	<tr>
  	  	  <td><?php echo JText::_('MOD_ULTIMASPUBLICACIONES_TITULO');?></td>
  	  	  <td><?php echo JText::_('MOD_ULTIMASPUBLICACIONES_REVISTA')?></td>
  	  	  <td></td>
  	  	</tr>
  	  </thead>
  	  <tbody>
  	      <?php foreach ($list as $item) : ?>
  	       <tr>
  	         <td><?php echo $item->title; ?></td>
  	         <td><?php echo $item->source; ?></td>
  	         <td>
  	           <a class="button" href="<?php echo $item->link; ?>" target="_blank"><?php echo JText::_('MOD_ULTIMASPUBLICACIONES_LINK_BUTTON')?></a>
  	         </td>
  	       </tr>
  	       <?php endforeach;?>
  	  </tbody>
  	  <tfoot>
  	  
  	  </tfoot>
  	</table>
</div>