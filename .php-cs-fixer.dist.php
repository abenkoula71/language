<?php
/*
 * This file is part of The Framework Language Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Framework\CodingStandard\Config;
use Framework\CodingStandard\Finder;

return (new Config())->setFinder(
	Finder::create()->in(__DIR__)
)->replaceRules([
	'non_printable_character' => false,
])->setDefaultHeaderComment('The Framework Language Library');
