<?php declare(strict_types = 1);

/**
 * PluginOriginType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           08.01.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;
use FastyBird\Metadata;

/**
 * Modules origins types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class PluginOriginType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const ORIGIN_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const ORIGIN_PLUGIN_STORAGE_COUCHDB = Metadata\Constants::PLUGIN_STORAGE_COUCHDB;
	public const ORIGIN_PLUGIN_EXCHANGE_RABBITMQ = Metadata\Constants::PLUGIN_EXCHANGE_RABBITMQ;
	public const ORIGIN_PLUGIN_EXCHANGE_REDISDB = Metadata\Constants::PLUGIN_EXCHANGE_REDISDB;
	public const ORIGIN_PLUGIN_STORAGE_REDISDB = Metadata\Constants::PLUGIN_STORAGE_REDISDB;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
