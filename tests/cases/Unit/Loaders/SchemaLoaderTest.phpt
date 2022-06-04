<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\Metadata;
use FastyBird\Metadata\Loaders;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';
require_once __DIR__ . '/../BaseTestCase.php';

/**
 * @testCase
 */
final class SchemaLoaderTest extends BaseTestCase
{

	public function testValidateValidInput(): void
	{
		$loader = new Loaders\SchemaLoader();

		$result = $loader->loadByRoutingKey(Metadata\Types\RoutingKeyType::get(Metadata\Types\RoutingKeyType::ROUTE_DEVICE_ENTITY_CREATED));

		Assert::true($result !== null);
	}

}

$test_case = new SchemaLoaderTest();
$test_case->run();
