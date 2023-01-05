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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information returned by `PrometheusZoneItem`
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method integer getZoneState() Obtain AZ status. Valid values: `0`(Unavailable), `1` (Available).
 * @method void setZoneState(integer $ZoneState) Set AZ status. Valid values: `0`(Unavailable), `1` (Available).
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getZoneName() Obtain AZ name
 * @method void setZoneName(string $ZoneName) Set AZ name
 */
class PrometheusZoneItem extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var integer AZ status. Valid values: `0`(Unavailable), `1` (Available).
     */
    public $ZoneState;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string AZ name
     */
    public $ZoneName;

    /**
     * @param string $Zone AZ
     * @param integer $ZoneId AZ ID
     * @param integer $ZoneState AZ status. Valid values: `0`(Unavailable), `1` (Available).
     * @param integer $RegionId Region ID
     * @param string $ZoneName AZ name
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
