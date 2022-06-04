<?php declare(strict_types = 1);

/**
 * InvalidStateException.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Exceptions
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Exceptions;

use RuntimeException;

class InvalidStateException extends RuntimeException implements IException
{

}
