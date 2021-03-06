<?php
	/**
	 * Generic HTML 5 <INPUT> field.
	 * 
	 * This is a generic input field view which is called by many other field views
	 * in order to reduce code repetition. 
	 * 
	 * @package core
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2012
	 * @link http://platform.barcamptransparency.org/
	 */

	
	
	// Define possible fields and their defaults, a boolean FALSE means don't show if not present
	$fields_and_defaults = array(
		'type' => 'text',
		'name' => false,
		'id'   => false,
		'autocomplete' => false,
		'autofocus' => false,
		'checked' => false,
		'disabled' => false,
		'min' => false,
		'max' => false,
		'step' => false,
		'maxlength' => false,
		'multiple' => false,
		'pattern' => false,
		'readonly' => false,
		'required' => false,
		'src' => false,
		'spellcheck' => false,
		//'placeholder' => false,
		'accept' => false,
	
		'onclick' => false,
		'onfocus' => false,
		'onblur' => false,
	);
	 
	// We always want a unique ID
	global $input_id;
	if (!$vars['id']) {
		$input_id ++;
		$vars['id'] = $vars['name'] . "_$input_id";
	}
	
?>
<input
	<?php
		foreach ($fields_and_defaults as $field => $default)
		{
			if (isset($vars[$field]))
			{
				if ($vars[$field]===true)
					echo "$field ";
				else
					echo "$field=\"{$vars[$field]}\" ";
			}
			else
			{
				if ($default!==false)
				{
					if ($default===true)
						echo "$field ";
					else
						echo "$field=\"$default\" ";		
				}
			}
		}
	?>
	class="input <?php echo isset($vars['class']) ? $vars['class'] : 'input-' . (isset($vars['type']) ? $vars['type'] : 'text'); ?>"
	<?php if ($vars['placeholder']) { ?>placeholder="<?php echo htmlentities($vars['placeholder'], ENT_QUOTES, 'UTF-8'); ?>" <?php } // Placeholder is a special case ?>
	<?php if ($vars['alt']) { ?>alt="<?php echo htmlentities($vars['alt'], ENT_QUOTES, 'UTF-8'); ?>" <?php } // Alt is a special case ?>
	value="<?php echo htmlentities($vars['value'], ENT_QUOTES, 'UTF-8'); ?>"
/> 