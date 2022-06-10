<?php declare(strict_types = 1);

/**
 * ChannelStaticPropertyEntity.php
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

use Nette\Utils;
use Ramsey\Uuid;

/**
 * Channel static property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ChannelStaticPropertyEntity extends StaticPropertyEntity implements IChannelStaticPropertyEntity
{

	use TChannelProperty;

	/**
	 * @param string $id
	 * @param string $type
	 * @param string $identifier
	 * @param string|null $name
	 * @param bool $settable
	 * @param bool $queryable
	 * @param string $dataType
	 * @param string|null $unit
	 * @param Array<string>|Array<Array<string|null>>|Array<int|null>|Array<float|null>|null $format
	 * @param string|int|float|null $invalid
	 * @param int|null $numberOfDecimals
	 * @param string|int|float|bool|null $value
	 * @param string|int|float|bool|null $default
	 * @param string $channel
	 * @param string|null $parent
	 * @param Array<int, string>|Utils\ArrayHash $children
	 * @param string|null $owner
	 */
	public function __construct(
		string $id,
		string $type,
		string $identifier,
		?string $name,
		bool $settable,
		bool $queryable,
		string $dataType,
		?string $unit,
		?array $format,
		$invalid,
		?int $numberOfDecimals,
		$value,
		$default,
		string $channel,
		?string $parent = null,
		$children = [],
		?string $owner = null
	) {
		parent::__construct($id, $type, $identifier, $name, $settable, $queryable, $dataType, $unit, $format, $invalid, $numberOfDecimals, $value, $default, $owner);

		$this->channel = Uuid\Uuid::fromString($channel);
		$this->parent = $parent !== null ? Uuid\Uuid::fromString($parent) : null;
		$this->children = array_map(function (string $item): Uuid\UuidInterface {
			return Uuid\Uuid::fromString($item);
		}, (array) $children);
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'channel'  => $this->getChannel()->toString(),
			'parent'   => $this->getParent() !== null ? $this->getParent()->toString() : null,
			'children' => array_map(function (Uuid\UuidInterface $child): string {
				return $child->toString();
			}, $this->getChildren()),
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