<?php declare(strict_types = 1);

/**
 * ActionChannelPropertyEntityFactory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Entities\Actions;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use FastyBird\Metadata\Types;

/**
 * Channel property action entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionChannelPropertyEntityFactory extends Entities\EntityFactory
{

	/** @var Loaders\SchemaLoader */
	private Loaders\SchemaLoader $loader;

	/** @var Schemas\Validator */
	private Schemas\Validator $validator;

	public function __construct(
		Loaders\SchemaLoader $loader,
		Schemas\Validator $validator
	) {
		$this->loader = $loader;
		$this->validator = $validator;
	}

	/**
	 * @param string $data
	 *
	 * @return IActionChannelPropertyEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data): IActionChannelPropertyEntity
	{
		$schema = $this->loader->loadByRoutingKey(Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ACTION));

		$validated = $this->validator->validate($data, $schema);

		$entity = $this->build(ActionChannelPropertyEntity::class, $validated);

		if ($entity instanceof ActionChannelPropertyEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}