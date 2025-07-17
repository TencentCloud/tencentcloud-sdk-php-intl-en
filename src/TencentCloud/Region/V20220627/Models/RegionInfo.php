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
namespace TencentCloud\Region\V20220627\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getRegion() Obtain Region name, such as ap-guangzhou.
 * @method void setRegion(string $Region) Set Region name, such as ap-guangzhou.
 * @method string getRegionName() Obtain Region description, for example, South China (Guangzhou).
 * @method void setRegionName(string $RegionName) Set Region description, for example, South China (Guangzhou).
 * @method string getRegionState() Obtain Whether the region is in an available state.
 * @method void setRegionState(string $RegionState) Set Whether the region is in an available state.
 * @method integer getRegionTypeMC() Obtain Console type. defaults to null when called via api.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionTypeMC(integer $RegionTypeMC) Set Console type. defaults to null when called via api.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocationMC() Obtain Region for different languages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocationMC(string $LocationMC) Set Region for different languages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionNameMC() Obtain Region description on console display.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionNameMC(string $RegionNameMC) Set Region description on console display.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionIdMC() Obtain 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionIdMC(string $RegionIdMC) Set 1
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region name, such as ap-guangzhou.
     */
    public $Region;

    /**
     * @var string Region description, for example, South China (Guangzhou).
     */
    public $RegionName;

    /**
     * @var string Whether the region is in an available state.
     */
    public $RegionState;

    /**
     * @var integer Console type. defaults to null when called via api.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionTypeMC;

    /**
     * @var string Region for different languages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocationMC;

    /**
     * @var string Region description on console display.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionNameMC;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionIdMC;

    /**
     * @param string $Region Region name, such as ap-guangzhou.
     * @param string $RegionName Region description, for example, South China (Guangzhou).
     * @param string $RegionState Whether the region is in an available state.
     * @param integer $RegionTypeMC Console type. defaults to null when called via api.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LocationMC Region for different languages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionNameMC Region description on console display.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionIdMC 1
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("RegionTypeMC",$param) and $param["RegionTypeMC"] !== null) {
            $this->RegionTypeMC = $param["RegionTypeMC"];
        }

        if (array_key_exists("LocationMC",$param) and $param["LocationMC"] !== null) {
            $this->LocationMC = $param["LocationMC"];
        }

        if (array_key_exists("RegionNameMC",$param) and $param["RegionNameMC"] !== null) {
            $this->RegionNameMC = $param["RegionNameMC"];
        }

        if (array_key_exists("RegionIdMC",$param) and $param["RegionIdMC"] !== null) {
            $this->RegionIdMC = $param["RegionIdMC"];
        }
    }
}
