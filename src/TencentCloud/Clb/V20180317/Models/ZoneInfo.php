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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AZ information
 *
 * @method integer getZoneId() Obtain Unique ID of the AZ in numeric form, such as 100001
 * @method void setZoneId(integer $ZoneId) Set Unique ID of the AZ in numeric form, such as 100001
 * @method string getZone() Obtain Unique ID of the AZ in string format, such as ap-guangzhou-1
 * @method void setZone(string $Zone) Set Unique ID of the AZ in string format, such as ap-guangzhou-1
 * @method string getZoneName() Obtain AZ name, such as Guangzhou 1
 * @method void setZoneName(string $ZoneName) Set AZ name, such as Guangzhou 1
 * @method string getZoneRegion() Obtain Specifies the region of the availability zone, for example: ap-guangzhou.
 * @method void setZoneRegion(string $ZoneRegion) Set Specifies the region of the availability zone, for example: ap-guangzhou.
 * @method boolean getLocalZone() Obtain Indicates whether the AZ is a LocalZone az, for example: false.
 * @method void setLocalZone(boolean $LocalZone) Set Indicates whether the AZ is a LocalZone az, for example: false.
 * @method boolean getEdgeZone() Obtain Indicates whether the AZ is an EdgeZone az, for example: false.
 * @method void setEdgeZone(boolean $EdgeZone) Set Indicates whether the AZ is an EdgeZone az, for example: false.
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var integer Unique ID of the AZ in numeric form, such as 100001
     */
    public $ZoneId;

    /**
     * @var string Unique ID of the AZ in string format, such as ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string AZ name, such as Guangzhou 1
     */
    public $ZoneName;

    /**
     * @var string Specifies the region of the availability zone, for example: ap-guangzhou.
     */
    public $ZoneRegion;

    /**
     * @var boolean Indicates whether the AZ is a LocalZone az, for example: false.
     */
    public $LocalZone;

    /**
     * @var boolean Indicates whether the AZ is an EdgeZone az, for example: false.
     */
    public $EdgeZone;

    /**
     * @param integer $ZoneId Unique ID of the AZ in numeric form, such as 100001
     * @param string $Zone Unique ID of the AZ in string format, such as ap-guangzhou-1
     * @param string $ZoneName AZ name, such as Guangzhou 1
     * @param string $ZoneRegion Specifies the region of the availability zone, for example: ap-guangzhou.
     * @param boolean $LocalZone Indicates whether the AZ is a LocalZone az, for example: false.
     * @param boolean $EdgeZone Indicates whether the AZ is an EdgeZone az, for example: false.
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

        if (array_key_exists("ZoneRegion",$param) and $param["ZoneRegion"] !== null) {
            $this->ZoneRegion = $param["ZoneRegion"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }

        if (array_key_exists("EdgeZone",$param) and $param["EdgeZone"] !== null) {
            $this->EdgeZone = $param["EdgeZone"];
        }
    }
}
