<?php declare(strict_types = 1);

/**
 * PluginSourceType.php
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
 * Plugins sources types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class PluginSourceType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const SOURCE_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_SOURCE;
	public const SOURCE_PLUGIN_STORAGE_COUCHDB = Metadata\Constants::PLUGIN_STORAGE_COUCHDB_SOURCE;
	public const SOURCE_PLUGIN_EXCHANGE_RABBITMQ = Metadata\Constants::PLUGIN_EXCHANGE_RABBITMQ_SOURCE;
	public const SOURCE_PLUGIN_EXCHANGE_REDISDB = Metadata\Constants::PLUGIN_EXCHANGE_REDISDB_SOURCE;
	public const SOURCE_PLUGIN_STORAGE_REDISDB = Metadata\Constants::PLUGIN_STORAGE_REDISDB_SOURCE;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}