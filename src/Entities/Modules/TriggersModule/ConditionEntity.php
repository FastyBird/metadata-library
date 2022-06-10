<?php declare(strict_types = 1);

/**
 * ConditionEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Condition entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class ConditionEntity implements IConditionEntity, Entities\IOwner
{

	use Entities\TOwner;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $trigger;

	/** @var Types\TriggerConditionTypeType */
	private Types\TriggerConditionTypeType $type;

	/** @var bool */
	private bool $enabled;

	/** @var bool|null */
	private ?bool $fulfilled;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		?bool $isFulfilled = null,
		?string $owner = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->trigger = Uuid\Uuid::fromString($trigger);
		$this->type = Types\TriggerConditionTypeType::get($type);
		$this->enabled = $enabled;
		$this->fulfilled = $isFulfilled;
		$this->owner = $owner !== null ? Uuid\Uuid::fromString($owner) : null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getId(): Uuid\UuidInterface
	{
		return $this->id;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getTrigger(): Uuid\UuidInterface
	{
		return $this->trigger;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getType(): Types\TriggerConditionTypeType
	{
		return $this->type;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isEnabled(): bool
	{
		return $this->enabled;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isFulfilled(): ?bool
	{
		return $this->fulfilled;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'           => $this->getId()->toString(),
			'trigger'      => $this->getTrigger()->toString(),
			'type'         => $this->getType()->getValue(),
			'enabled'      => $this->isEnabled(),
			'is_fulfilled' => $this->isFulfilled(),
			'owner'        => $this->getOwner() !== null ? $this->getOwner()->toString() : null,
		];
	}

}