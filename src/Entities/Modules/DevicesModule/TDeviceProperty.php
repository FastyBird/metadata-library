<?php declare(strict_types = 1);

/**
 * TDeviceProperty.php
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
 * Device property trait
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
trait TDeviceProperty
{

	/** @var Uuid\UuidInterface */
	protected Uuid\UuidInterface $device;

	/** @var Uuid\UuidInterface|null */
	protected ?Uuid\UuidInterface $parent;

	/** @var Uuid\UuidInterface[] */
	protected array $children;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
	}

	/**
	 * @return Uuid\UuidInterface|null
	 */
	public function getParent(): ?Uuid\UuidInterface
	{
		return $this->parent;
	}

	/**
	 * @return Uuid\UuidInterface[]
	 */
	public function getChildren(): array
	{
		return $this->children;
	}

}
