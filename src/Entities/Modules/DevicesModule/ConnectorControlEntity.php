<?php declare(strict_types = 1);

/**
 * ConnectorControlEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           02.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use Ramsey\Uuid;

/**
 * Connector control entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ConnectorControlEntity extends ControlEntity implements IConnectorControlEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $connector;

	public function __construct(
		string $id,
		string $connector,
		string $name,
		?string $owner = null
	) {
		parent::__construct($id, $name, $owner);

		$this->connector = Uuid\Uuid::fromString($connector);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getConnector(): Uuid\UuidInterface
	{
		return $this->connector;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'connector' => $this->getConnector(),
		]);
	}

	/**
	 * @return Array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}