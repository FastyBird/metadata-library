<?php declare(strict_types = 1);

/**
 * AccountStateType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.1.0
 *
 * @date           30.03.20
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Account state type
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class AccountStateType extends Consistence\Enum\Enum
{

	/**
	 * Define states
	 */
	public const STATE_ACTIVE = 'active';
	public const STATE_BLOCKED = 'blocked';
	public const STATE_DELETED = 'deleted';
	public const STATE_NOT_ACTIVATED = 'not_activated';
	public const STATE_APPROVAL_WAITING = 'approval_waiting';

	/**
	 * List of allowed states
	 *
	 * @var string[]
	 */
	public static array $allowedStates = [
		self::STATE_ACTIVE,
		self::STATE_BLOCKED,
		self::STATE_DELETED,
	];

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
