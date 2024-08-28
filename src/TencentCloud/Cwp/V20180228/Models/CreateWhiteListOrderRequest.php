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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWhiteListOrder request structure.
 *
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 * @method integer getLicenseNum() Obtain Number of authorizations (The minimum value is 1, and the maximum value is 99999.)
 * @method void setLicenseNum(integer $LicenseNum) Set Number of authorizations (The minimum value is 1, and the maximum value is 99999.)
 * @method integer getDeadline() Obtain Expiration time (The minimum value is 1.)
 * @method void setDeadline(integer $Deadline) Set Expiration time (The minimum value is 1.)
 * @method string getRuleName() Obtain Rule name, big asset center: asset_center
 * @method void setRuleName(string $RuleName) Set Rule name, big asset center: asset_center
 * @method integer getSourceType() Obtain Order type. 1: trial; 2: free; 3: experience; 4: free SSL certificate gift; 5: free CVM
 * @method void setSourceType(integer $SourceType) Set Order type. 1: trial; 2: free; 3: experience; 4: free SSL certificate gift; 5: free CVM
 * @method integer getRegionId() Obtain Region: 1 Guangzhou; 9 Singapore. The default is 1. Do not select 9 unless necessary.
 * @method void setRegionId(integer $RegionId) Set Region: 1 Guangzhou; 9 Singapore. The default is 1. Do not select 9 unless necessary.
 * @method string getExtraParam() Obtain Additional parameters; JSON string, including ResourceId and LicenseType.
 * @method void setExtraParam(string $ExtraParam) Set Additional parameters; JSON string, including ResourceId and LicenseType.
 */
class CreateWhiteListOrderRequest extends AbstractModel
{
    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @var integer Number of authorizations (The minimum value is 1, and the maximum value is 99999.)
     */
    public $LicenseNum;

    /**
     * @var integer Expiration time (The minimum value is 1.)
     */
    public $Deadline;

    /**
     * @var string Rule name, big asset center: asset_center
     */
    public $RuleName;

    /**
     * @var integer Order type. 1: trial; 2: free; 3: experience; 4: free SSL certificate gift; 5: free CVM
     */
    public $SourceType;

    /**
     * @var integer Region: 1 Guangzhou; 9 Singapore. The default is 1. Do not select 9 unless necessary.
     */
    public $RegionId;

    /**
     * @var string Additional parameters; JSON string, including ResourceId and LicenseType.
     */
    public $ExtraParam;

    /**
     * @param integer $LicenseType Authorization type
     * @param integer $LicenseNum Number of authorizations (The minimum value is 1, and the maximum value is 99999.)
     * @param integer $Deadline Expiration time (The minimum value is 1.)
     * @param string $RuleName Rule name, big asset center: asset_center
     * @param integer $SourceType Order type. 1: trial; 2: free; 3: experience; 4: free SSL certificate gift; 5: free CVM
     * @param integer $RegionId Region: 1 Guangzhou; 9 Singapore. The default is 1. Do not select 9 unless necessary.
     * @param string $ExtraParam Additional parameters; JSON string, including ResourceId and LicenseType.
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
        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }
    }
}
