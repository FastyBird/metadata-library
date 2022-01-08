<?php declare(strict_types = 1);

/**
 * TriggerTypeType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Entities
 * @since          0.22.0
 *
 * @date           08.01.22
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Trigger type
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class TriggerTypeType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const TYPE_AUTOMATIC = 'automatic';
	public const TYPE_MANUAL = 'manual';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}