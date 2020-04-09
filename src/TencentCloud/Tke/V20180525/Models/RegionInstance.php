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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getRegionName() Obtain Region name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionName(string $RegionName) Set Region name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Region ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Region status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Region status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFeatureGates() Obtain Status of region-related features (return all attributes in JSON format)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFeatureGates(string $FeatureGates) Set Status of region-related features (return all attributes in JSON format)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain Region abbreviation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Region abbreviation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Whitelisted location
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Whitelisted location
Note: this field may return null, indicating that no valid values can be obtained.
 */
class RegionInstance extends AbstractModel
{
    /**
     * @var string Region name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionName;

    /**
     * @var integer Region ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var string Region status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Status of region-related features (return all attributes in JSON format)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FeatureGates;

    /**
     * @var string Region abbreviation
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var string Whitelisted location
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $RegionName Region name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Region ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Region status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FeatureGates Status of region-related features (return all attributes in JSON format)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Alias Region abbreviation
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Whitelisted location
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FeatureGates",$param) and $param["FeatureGates"] !== null) {
            $this->FeatureGates = $param["FeatureGates"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
