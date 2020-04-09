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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Versioning - array of regions
 *
 * @method string getRegion() Obtain Region name, such as "ap-beijing"
 * @method void setRegion(string $Region) Set Region name, such as "ap-beijing"
 * @method string getRegionName() Obtain Region name, such as "bj"
 * @method void setRegionName(string $RegionName) Set Region name, such as "bj"
 * @method string getRegionStatus() Obtain Region availability. If a region has at least one AZ where resources are purchasable, this value will be `AVAILABLE`; otherwise, it will be `UNAVAILABLE`
 * @method void setRegionStatus(string $RegionStatus) Set Region availability. If a region has at least one AZ where resources are purchasable, this value will be `AVAILABLE`; otherwise, it will be `UNAVAILABLE`
 * @method array getZones() Obtain Array of AZs
 * @method void setZones(array $Zones) Set Array of AZs
 * @method string getRegionCnName() Obtain Region name, such as "Guangzhou"
 * @method void setRegionCnName(string $RegionCnName) Set Region name, such as "Guangzhou"
 */
class AvailableRegion extends AbstractModel
{
    /**
     * @var string Region name, such as "ap-beijing"
     */
    public $Region;

    /**
     * @var string Region name, such as "bj"
     */
    public $RegionName;

    /**
     * @var string Region availability. If a region has at least one AZ where resources are purchasable, this value will be `AVAILABLE`; otherwise, it will be `UNAVAILABLE`
     */
    public $RegionStatus;

    /**
     * @var array Array of AZs
     */
    public $Zones;

    /**
     * @var string Region name, such as "Guangzhou"
     */
    public $RegionCnName;

    /**
     * @param string $Region Region name, such as "ap-beijing"
     * @param string $RegionName Region name, such as "bj"
     * @param string $RegionStatus Region availability. If a region has at least one AZ where resources are purchasable, this value will be `AVAILABLE`; otherwise, it will be `UNAVAILABLE`
     * @param array $Zones Array of AZs
     * @param string $RegionCnName Region name, such as "Guangzhou"
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

        if (array_key_exists("RegionStatus",$param) and $param["RegionStatus"] !== null) {
            $this->RegionStatus = $param["RegionStatus"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new AvailableZone();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }

        if (array_key_exists("RegionCnName",$param) and $param["RegionCnName"] !== null) {
            $this->RegionCnName = $param["RegionCnName"];
        }
    }
}
