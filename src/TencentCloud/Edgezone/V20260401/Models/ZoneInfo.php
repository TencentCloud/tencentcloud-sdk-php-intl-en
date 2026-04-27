<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cross-regional AZ information after aggregating.
 *
 * @method integer getZoneId() Obtain AZ ID.
 * @method void setZoneId(integer $ZoneId) Set AZ ID.
 * @method string getZone() Obtain Availability zone code.
 * @method void setZone(string $Zone) Set Availability zone code.
 * @method string getZoneName() Obtain Chinese Name of Availability Zone.
 * @method void setZoneName(string $ZoneName) Set Chinese Name of Availability Zone.
 * @method string getZoneNameEn() Obtain Availability zone English name.
 * @method void setZoneNameEn(string $ZoneNameEn) Set Availability zone English name.
 * @method string getRegion() Obtain Region code.
 * @method void setRegion(string $Region) Set Region code.
 * @method string getLocation() Obtain Area code
 * @method void setLocation(string $Location) Set Area code
 * @method string getLocationName() Obtain Zone Name
 * @method void setLocationName(string $LocationName) Set Zone Name
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var integer AZ ID.
     */
    public $ZoneId;

    /**
     * @var string Availability zone code.
     */
    public $Zone;

    /**
     * @var string Chinese Name of Availability Zone.
     */
    public $ZoneName;

    /**
     * @var string Availability zone English name.
     */
    public $ZoneNameEn;

    /**
     * @var string Region code.
     */
    public $Region;

    /**
     * @var string Area code
     */
    public $Location;

    /**
     * @var string Zone Name
     */
    public $LocationName;

    /**
     * @param integer $ZoneId AZ ID.
     * @param string $Zone Availability zone code.
     * @param string $ZoneName Chinese Name of Availability Zone.
     * @param string $ZoneNameEn Availability zone English name.
     * @param string $Region Region code.
     * @param string $Location Area code
     * @param string $LocationName Zone Name
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneNameEn",$param) and $param["ZoneNameEn"] !== null) {
            $this->ZoneNameEn = $param["ZoneNameEn"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("LocationName",$param) and $param["LocationName"] !== null) {
            $this->LocationName = $param["LocationName"];
        }
    }
}
