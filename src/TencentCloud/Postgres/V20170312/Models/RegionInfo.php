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
 * Region information such as number and status
 *
 * @method string getRegion() Obtain Region abbreviation
 * @method void setRegion(string $Region) Set Region abbreviation
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method integer getRegionId() Obtain Region number
 * @method void setRegionId(integer $RegionId) Set Region number
 * @method string getRegionState() Obtain Availability status. UNAVAILABLE: unavailable, AVAILABLE: available
 * @method void setRegionState(string $RegionState) Set Availability status. UNAVAILABLE: unavailable, AVAILABLE: available
 * @method integer getSupportInternational() Obtain Whether the resource can be purchased in this region. Valid values: `0` (no), `1` (yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSupportInternational(integer $SupportInternational) Set Whether the resource can be purchased in this region. Valid values: `0` (no), `1` (yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region abbreviation
     */
    public $Region;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var integer Region number
     */
    public $RegionId;

    /**
     * @var string Availability status. UNAVAILABLE: unavailable, AVAILABLE: available
     */
    public $RegionState;

    /**
     * @var integer Whether the resource can be purchased in this region. Valid values: `0` (no), `1` (yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SupportInternational;

    /**
     * @param string $Region Region abbreviation
     * @param string $RegionName Region name
     * @param integer $RegionId Region number
     * @param string $RegionState Availability status. UNAVAILABLE: unavailable, AVAILABLE: available
     * @param integer $SupportInternational Whether the resource can be purchased in this region. Valid values: `0` (no), `1` (yes).
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("SupportInternational",$param) and $param["SupportInternational"] !== null) {
            $this->SupportInternational = $param["SupportInternational"];
        }
    }
}
