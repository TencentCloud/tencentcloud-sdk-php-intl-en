<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AZ information such as number and status
 *
 * @method string getZone() Obtain AZ abbreviation
 * @method void setZone(string $Zone) Set AZ abbreviation
 * @method string getZoneName() Obtain AZ name
 * @method void setZoneName(string $ZoneName) Set AZ name
 * @method integer getZoneId() Obtain AZ number
 * @method void setZoneId(integer $ZoneId) Set AZ number
 * @method string getZoneState() Obtain Availability status. Valid values:
`UNAVAILABLE`.
`AVAILABLE`.
`SELLOUT`.
`SUPPORTMODIFYONLY` (supports configuration adjustment).
 * @method void setZoneState(string $ZoneState) Set Availability status. Valid values:
`UNAVAILABLE`.
`AVAILABLE`.
`SELLOUT`.
`SUPPORTMODIFYONLY` (supports configuration adjustment).
 * @method integer getZoneSupportIpv6() Obtain Whether the AZ supports IPv6 address access
 * @method void setZoneSupportIpv6(integer $ZoneSupportIpv6) Set Whether the AZ supports IPv6 address access
 * @method array getStandbyZoneSet() Obtain AZs that can be used as standby when this AZ is primary
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStandbyZoneSet(array $StandbyZoneSet) Set AZs that can be used as standby when this AZ is primary
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string AZ abbreviation
     */
    public $Zone;

    /**
     * @var string AZ name
     */
    public $ZoneName;

    /**
     * @var integer AZ number
     */
    public $ZoneId;

    /**
     * @var string Availability status. Valid values:
`UNAVAILABLE`.
`AVAILABLE`.
`SELLOUT`.
`SUPPORTMODIFYONLY` (supports configuration adjustment).
     */
    public $ZoneState;

    /**
     * @var integer Whether the AZ supports IPv6 address access
     */
    public $ZoneSupportIpv6;

    /**
     * @var array AZs that can be used as standby when this AZ is primary
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StandbyZoneSet;

    /**
     * @param string $Zone AZ abbreviation
     * @param string $ZoneName AZ name
     * @param integer $ZoneId AZ number
     * @param string $ZoneState Availability status. Valid values:
`UNAVAILABLE`.
`AVAILABLE`.
`SELLOUT`.
`SUPPORTMODIFYONLY` (supports configuration adjustment).
     * @param integer $ZoneSupportIpv6 Whether the AZ supports IPv6 address access
     * @param array $StandbyZoneSet AZs that can be used as standby when this AZ is primary
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }

        if (array_key_exists("ZoneSupportIpv6",$param) and $param["ZoneSupportIpv6"] !== null) {
            $this->ZoneSupportIpv6 = $param["ZoneSupportIpv6"];
        }

        if (array_key_exists("StandbyZoneSet",$param) and $param["StandbyZoneSet"] !== null) {
            $this->StandbyZoneSet = $param["StandbyZoneSet"];
        }
    }
}
