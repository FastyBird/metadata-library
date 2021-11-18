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
Extended enum type
"""

# Library dependencies
from enum import Enum, unique


@unique
class ExtendedEnum(Enum):
    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)