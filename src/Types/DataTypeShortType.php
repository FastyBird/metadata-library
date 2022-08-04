<?php declare(strict_types = 1);

/**
 * DataTypeShortType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.71.0
 *
 * @date           04.08.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Device or channel property data types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DataTypeShortType extends Consistence\Enum\Enum
{

	/**
	 * Define data types
	 */
	public const DATA_TYPE_CHAR = 'i8';
	public const DATA_TYPE_UCHAR = 'u8';
	public const DATA_TYPE_SHORT = 'i16';
	public const DATA_TYPE_USHORT = 'u16';
	public const DATA_TYPE_INT = 'i32';
	public const DATA_TYPE_UINT = 'u32';
	public const DATA_TYPE_FLOAT = 'f';
	public const DATA_TYPE_BOOLEAN = 'b';
	public const DATA_TYPE_STRING = 's';
	public const DATA_TYPE_ENUM = 'e';
	public const DATA_TYPE_DATE = 'd';
	public const DATA_TYPE_TIME = 't';
	public const DATA_TYPE_DATETIME = 'dt';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

	/**
	 * @return bool
	 */
	public function isInteger(): bool
	{
		return self::equalsValue(self::DATA_TYPE_CHAR)
			|| self::equalsValue(self::DATA_TYPE_UCHAR)
			|| self::equalsValue(self::DATA_TYPE_SHORT)
			|| self::equalsValue(self::DATA_TYPE_USHORT)
			|| self::equalsValue(self::DATA_TYPE_INT)
			|| self::equalsValue(self::DATA_TYPE_UINT);
	}

}
