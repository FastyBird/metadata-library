<?php declare(strict_types = 1);

/**
 * DeviceMappedPropertyEntity.php
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
 * Device mapped property entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IDeviceMappedPropertyEntity extends IMappedPropertyEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getDevice(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface|null
	 */
	public function getParent(): ?Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface[]
	 */
	public function getChildren(): array;

}