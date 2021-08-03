#!/usr/bin/python3

#     Copyright 2021. FastyBird s.r.o.
#
#     Licensed under the Apache License, Version 2.0 (the "License");
#     you may not use this file except in compliance with the License.
#     You may obtain a copy of the License at
#
#         http://www.apache.org/licenses/LICENSE-2.0
#
#     Unless required by applicable law or agreed to in writing, software
#     distributed under the License is distributed on an "AS IS" BASIS,
#     WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#     See the License for the specific language governing permissions and
#     limitations under the License.

"""
Sets of enums for application data exchange routing
"""

# Library dependencies
from enum import Enum, unique


@unique
class RoutingKey(Enum):
    """
    Data exchange routing key

    @package        FastyBird:ModulesMetadata!
    @module         routing

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """

    # Accounts
    ACCOUNTS_ENTITY_CREATED = "fb.bus.entity.created.account"
    ACCOUNTS_ENTITY_UPDATED = "fb.bus.entity.updated.account"
    ACCOUNTS_ENTITY_DELETED = "fb.bus.entity.deleted.account"

    # Emails
    EMAILS_ENTITY_CREATED = "fb.bus.entity.created.email"
    EMAILS_ENTITY_UPDATED = "fb.bus.entity.updated.email"
    EMAILS_ENTITY_DELETED = "fb.bus.entity.deleted.email"

    # Identities
    IDENTITIES_ENTITY_CREATED = "fb.bus.entity.created.identity"
    IDENTITIES_ENTITY_UPDATED = "fb.bus.entity.updated.identity"
    IDENTITIES_ENTITY_DELETED = "fb.bus.entity.deleted.identity"

    # Devices
    DEVICES_ENTITY_CREATED: str = "fb.bus.entity.created.device"
    DEVICES_ENTITY_UPDATED: str = "fb.bus.entity.updated.device"
    DEVICES_ENTITY_DELETED: str = "fb.bus.entity.deleted.device"

    DEVICES_CONTROLS_ROUTING_KEY: str = "fb.bus.control.device"

    # Devices properties
    DEVICES_PROPERTY_ENTITY_CREATED: str = "fb.bus.entity.created.device.property"
    DEVICES_PROPERTY_ENTITY_UPDATED: str = "fb.bus.entity.updated.device.property"
    DEVICES_PROPERTY_ENTITY_DELETED: str = "fb.bus.entity.deleted.device.property"

    DEVICES_PROPERTIES_DATA_ROUTING_KEY: str = "fb.bus.data.device.property"

    # Devices configuration
    DEVICES_CONFIGURATION_ENTITY_CREATED: str = "fb.bus.entity.created.device.configuration"
    DEVICES_CONFIGURATION_ENTITY_UPDATED: str = "fb.bus.entity.updated.device.configuration"
    DEVICES_CONFIGURATION_ENTITY_DELETED: str = "fb.bus.entity.deleted.device.configuration"

    DEVICES_CONFIGURATION_DATA_ROUTING_KEY: str = "fb.bus.data.device.configuration"

    # Devices connectors
    DEVICES_CONNECTOR_ENTITY_CREATED = "fb.bus.entity.created.device.connector"
    DEVICES_CONNECTOR_ENTITY_UPDATED = "fb.bus.entity.updated.device.connector"
    DEVICES_CONNECTOR_ENTITY_DELETED = "fb.bus.entity.deleted.device.connector"

    # Channels
    CHANNELS_ENTITY_CREATED: str = "fb.bus.entity.created.channel"
    CHANNELS_ENTITY_UPDATED: str = "fb.bus.entity.updated.channel"
    CHANNELS_ENTITY_DELETED: str = "fb.bus.entity.deleted.channel"

    CHANNELS_CONTROLS_ROUTING_KEY: str = "fb.bus.control.channel"

    # Channels properties
    CHANNELS_PROPERTY_ENTITY_CREATED: str = "fb.bus.entity.created.channel.property"
    CHANNELS_PROPERTY_ENTITY_UPDATED: str = "fb.bus.entity.updated.channel.property"
    CHANNELS_PROPERTY_ENTITY_DELETED: str = "fb.bus.entity.deleted.channel.property"

    CHANNELS_PROPERTIES_DATA_ROUTING_KEY: str = "fb.bus.data.channel.property"

    # Channels configuration
    CHANNELS_CONFIGURATION_ENTITY_CREATED: str = "fb.bus.entity.created.channel.configuration"
    CHANNELS_CONFIGURATION_ENTITY_UPDATED: str = "fb.bus.entity.updated.channel.configuration"
    CHANNELS_CONFIGURATION_ENTITY_DELETED: str = "fb.bus.entity.deleted.channel.configuration"

    CHANNELS_CONFIGURATION_DATA_ROUTING_KEY: str = "fb.bus.data.channel.configuration"

    # Connectors
    CONNECTOR_ENTITY_CREATED = "fb.bus.entity.created.connector"
    CONNECTOR_ENTITY_UPDATED = "fb.bus.entity.updated.connector"
    CONNECTOR_ENTITY_DELETED = "fb.bus.entity.deleted.connector"

    CONNECTOR_CONTROLS_ROUTING_KEY = "fb.bus.control.connector"

    # Triggers
    TRIGGERS_ENTITY_CREATED = "fb.bus.entity.created.trigger"
    TRIGGERS_ENTITY_UPDATED = "fb.bus.entity.updated.trigger"
    TRIGGERS_ENTITY_DELETED = "fb.bus.entity.deleted.trigger"

    TRIGGER_CONTROLS_ROUTING_KEY = "fb.bus.control.trigger"

    # Triggers actions
    TRIGGERS_ACTIONS_ENTITY_CREATED = "fb.bus.entity.created.trigger.action"
    TRIGGERS_ACTIONS_ENTITY_UPDATED = "fb.bus.entity.updated.trigger.action"
    TRIGGERS_ACTIONS_ENTITY_DELETED = "fb.bus.entity.deleted.trigger.action"

    # Triggers notifications
    TRIGGERS_NOTIFICATIONS_ENTITY_CREATED = "fb.bus.entity.created.trigger.notification"
    TRIGGERS_NOTIFICATIONS_ENTITY_UPDATED = "fb.bus.entity.updated.trigger.notification"
    TRIGGERS_NOTIFICATIONS_ENTITY_DELETED = "fb.bus.entity.deleted.trigger.notification"

    # Triggers conditions
    TRIGGERS_CONDITIONS_ENTITY_CREATED = "fb.bus.entity.created.trigger.condition"
    TRIGGERS_CONDITIONS_ENTITY_UPDATED = "fb.bus.entity.updated.trigger.condition"
    TRIGGERS_CONDITIONS_ENTITY_DELETED = "fb.bus.entity.deleted.trigger.condition"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member
