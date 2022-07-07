<?php declare(strict_types = 1);

/**
 * IDynamicPropertyEntity.php
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

/**
 * Dynamic property entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IDynamicPropertyEntity extends IPropertyEntity
{

	/**
	 * @return bool|float|int|string|null
	 */
	public function getActualValue(): float|bool|int|string|null;

	/**
	 * @return bool|float|int|string|null
	 */
	public function getPreviousValue(): float|bool|int|string|null;

	/**
	 * @return bool|float|int|string|null
	 */
	public function getExpectedValue(): float|bool|int|string|null;

	/**
	 * @return bool|string|null
	 */
	public function getPending(): bool|string|null;

	/**
	 * @return bool|null
	 */
	public function isPending(): ?bool;

	/**
	 * @return bool|null
	 */
	public function isValid(): ?bool;

}
