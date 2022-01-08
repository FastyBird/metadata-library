<?php declare(strict_types = 1);

/**
 * TriggerActionTypeType.php
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
 * Trigger action type
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class TriggerActionTypeType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const TYPE_DEVICE_PROPERTY = 'device-property';
	public const TYPE_CHANNEL_PROPERTY = 'channel-property';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}