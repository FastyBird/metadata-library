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
Sets of enums for Triggers Module
"""

# Python base dependencies
from enum import Enum, unique

# Library libs
from fb_metadata.enum import ExtendedEnum


@unique
class TriggerType(ExtendedEnum, Enum):
    """
    Trigger type

    @package        FastyBird:Metadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """

    MANUAL: str = "manual"
    AUTOMATIC: str = "automatic"


@unique
class ActionType(ExtendedEnum, Enum):
    """
    Trigger action type

    @package        FastyBird:Metadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """

    DEVICE_PROPERTY: str = "device-property"
    CHANNEL_PROPERTY: str = "channel-property"


@unique
class ConditionType(ExtendedEnum, Enum):
    """
    Trigger condition type

    @package        FastyBird:Metadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """

    DEVICE_PROPERTY: str = "device-property"
    CHANNEL_PROPERTY: str = "channel-property"
    TIME: str = "time"
    DATE: str = "date"


@unique
class NotificationType(ExtendedEnum, Enum):
    """
    Trigger notification type

    @package        FastyBird:Metadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """

    EMAIL: str = "email"
    SMS: str = "sms"


@unique
class ConditionOperator(ExtendedEnum, Enum):
    """
    Condition operator

    @package        FastyBird:Metadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """

    EQUAL: str = "eq"
    ABOVE: str = "above"
    BELOW: str = "below"
