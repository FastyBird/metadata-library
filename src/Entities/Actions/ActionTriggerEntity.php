<?php declare(strict_types = 1);

/**
 * ActionTriggerEntity.php
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

use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Trigger action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionTriggerEntity implements IActionTriggerEntity
{

	/** @var Types\TriggerActionType */
	private Types\TriggerActionType $action;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $trigger;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $control;

	/** @var string|int|float|bool|null */
	private $expectedValue;

	/**
	 * @param string $action
	 * @param string $trigger
	 * @param string $control
	 * @param string|int|float|bool|null $expectedValue
	 */
	public function __construct(
		string $action,
		string $trigger,
		string $control,
		$expectedValue = null
	) {
		$this->action = Types\TriggerActionType::get($action);

		$this->trigger = Uuid\Uuid::fromString($trigger);
		$this->control = Uuid\Uuid::fromString($control);

		$this->expectedValue = $expectedValue;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAction(): Types\TriggerActionType
	{
		return $this->action;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getTrigger(): Uuid\UuidInterface
	{
		return $this->trigger;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getControl(): Uuid\UuidInterface
	{
		return $this->control;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getExpectedValue()
	{
		return $this->expectedValue;
	}

}
