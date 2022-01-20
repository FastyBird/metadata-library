<?php declare(strict_types = 1);

/**
 * RoutingKeyType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.7.4
 *
 * @date           05.10.21
 */

namespace FastyBird\Metadata\Types;

use Consistence;
use FastyBird\Metadata;

/**
 * Routing keys types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class RoutingKeyType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const ROUTE_CONNECTOR_ACTION = Metadata\Constants::MESSAGE_BUS_CONNECTOR_ACTION_ROUTING_KEY;
	public const ROUTE_DEVICE_ACTION = Metadata\Constants::MESSAGE_BUS_DEVICE_ACTION_ROUTING_KEY;
	public const ROUTE_DEVICE_PROPERTY_ACTION = Metadata\Constants::MESSAGE_BUS_DEVICE_PROPERTY_ACTION_ROUTING_KEY;
	public const ROUTE_DEVICE_CONFIGURATION_ACTION = Metadata\Constants::MESSAGE_BUS_DEVICE_CONFIGURATION_ACTION_ROUTING_KEY;
	public const ROUTE_CHANNEL_ACTION = Metadata\Constants::MESSAGE_BUS_CHANNEL_ACTION_ROUTING_KEY;
	public const ROUTE_CHANNEL_PROPERTY_ACTION = Metadata\Constants::MESSAGE_BUS_CHANNEL_PROPERTY_ACTION_ROUTING_KEY;
	public const ROUTE_CHANNEL_CONFIGURATION_ACTION = Metadata\Constants::MESSAGE_BUS_CHANNEL_CONFIGURATION_ACTION_ROUTING_KEY;
	public const ROUTE_TRIGGER_ACTION = Metadata\Constants::MESSAGE_BUS_TRIGGER_ACTION_ROUTING_KEY;

	public const ROUTE_MODULE_MESSAGE = Metadata\Constants::MESSAGE_BUS_MODULE_MESSAGE_ROUTING_KEY;
	public const ROUTE_PLUGIN_MESSAGE = Metadata\Constants::MESSAGE_BUS_PLUGIN_MESSAGE_ROUTING_KEY;
	public const ROUTE_CONNECTOR_MESSAGE = Metadata\Constants::MESSAGE_BUS_CONNECTOR_MESSAGE_ROUTING_KEY;

	public const ROUTE_ACCOUNTS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_ACCOUNTS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_ACCOUNTS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_ACCOUNTS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_ACCOUNTS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_ACCOUNTS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_ACCOUNTS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_EMAILS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_EMAILS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_EMAILS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_EMAILS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_EMAILS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_EMAILS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_EMAILS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_EMAILS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_IDENTITIES_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_IDENTITIES_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_IDENTITIES_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_IDENTITIES_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_IDENTITIES_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_IDENTITIES_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_IDENTITIES_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_IDENTITIES_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_ROLES_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_ROLES_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_ROLES_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_ROLES_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_ROLES_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_ROLES_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_ROLES_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_ROLES_DELETED_ENTITY_ROUTING_KEY;

	public const ROUTE_DEVICES_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_DEVICES_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_PROPERTY_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_DEVICES_PROPERTY_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_PROPERTY_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_PROPERTY_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_PROPERTY_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONFIGURATION_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONFIGURATION_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONFIGURATION_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONFIGURATION_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONFIGURATION_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONTROL_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONTROL_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONTROL_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONTROL_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONTROL_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONTROL_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_DEVICES_CONTROL_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_DEVICES_CONTROL_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_CHANNELS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_CHANNELS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_PROPERTY_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_PROPERTY_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_PROPERTY_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_PROPERTY_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONFIGURATION_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONFIGURATION_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONFIGURATION_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONFIGURATION_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONFIGURATION_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONTROL_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONTROL_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONTROL_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONTROL_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONTROL_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONTROL_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CHANNELS_CONTROL_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_CHANNELS_CONTROL_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_CONTROL_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_CONTROL_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_CONTROL_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_CONTROL_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_CONTROL_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_CONTROL_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_CONNECTORS_CONTROL_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_CONNECTORS_CONTROL_DELETED_ENTITY_ROUTING_KEY;

	public const ROUTE_TRIGGERS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONTROL_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONTROL_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONTROL_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONTROL_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONTROL_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONTROL_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONTROL_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONTROL_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ACTIONS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_ACTIONS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ACTIONS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ACTIONS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_ACTIONS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_NOTIFICATIONS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_NOTIFICATIONS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_NOTIFICATIONS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_NOTIFICATIONS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONDITIONS_ENTITY_REPORTED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONDITIONS_REPORTED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONDITIONS_ENTITY_CREATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONDITIONS_ENTITY_UPDATED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY;
	public const ROUTE_TRIGGERS_CONDITIONS_ENTITY_DELETED = Metadata\Constants::MESSAGE_BUS_TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
