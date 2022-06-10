<?php declare(strict_types = 1);

/**
 * EmailNotificationEntity.php
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

/**
 * Email notification entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class EmailNotificationEntity extends NotificationEntity implements IEmailNotificationEntity
{

	/** @var string */
	private string $email;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		string $email,
		?string $owner = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $owner);

		$this->email = $email;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'email' => $this->getEmail(),
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