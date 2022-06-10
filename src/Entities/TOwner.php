<?php declare(strict_types = 1);

/**
 * TOwner.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.58.0
 *
 * @date           05.06.22
 */

namespace FastyBird\Metadata\Entities;

use Ramsey\Uuid;

/**
 * Entity owner trait
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
trait TOwner
{

	/** @var Uuid\UuidInterface|null */
	protected ?Uuid\UuidInterface $owner;

	/**
	 * @return Uuid\UuidInterface|null
	 */
	public function getOwner(): ?Uuid\UuidInterface
	{
		return $this->owner;
	}

}