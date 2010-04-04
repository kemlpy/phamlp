<?php
/* SVN FILE: $Id$ */
/**
 * Peserve Filter for {@link Haml http://haml-lang.com/} class file.
 * @author			Chris Yates <chris.l.yates@gmail.com>
 * @copyright		Copyright &copy; 2010 PBM Web Development
 * @license			http://phamlp.googlecode.com/files/license.txt
 * @package			PHamlP
 * @subpackage	Haml.filters
 */

/**
 * Peserve Filter for {@link Haml http://haml-lang.com/} class.
 * Does not parse the filtered text. This is useful for large blocks of text
 * without HTML tags when lines are not to be parsed.
 * @package			PHamlP
 * @subpackage	Haml.filters
 */
class HamlPlainFilter extends HamlBaseFilter {
	/**
	 * Run the filter
	 * @param string text to filter
	 * @return string filtered text
	 */
	public function run($text) {
	  return str_replace("\n", '&#x000a',
	  	preg_replace(HamlParser::MATCH_INTERPOLATION, '<?php echo \1; ?>', $text)
	  ) . "\n";
	}
}