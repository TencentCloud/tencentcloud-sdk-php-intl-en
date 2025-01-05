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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getRegionCode() Obtain Region encoding
 * @method void setRegionCode(string $RegionCode) Set Region encoding
 * @method string getCnName() Obtain Region name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCnName(string $CnName) Set Region name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnName() Obtain English name of the region
 * @method void setEnName(string $EnName) Set English name of the region
 * @method integer getRegionId() Obtain Region ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAvailableZoneNum() Obtain Number of AZs

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableZoneNum(integer $AvailableZoneNum) Set Number of AZs

Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region encoding
     */
    public $RegionCode;

    /**
     * @var string Region name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CnName;

    /**
     * @var string English name of the region
     */
    public $EnName;

    /**
     * @var integer Region ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Number of AZs

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableZoneNum;

    /**
     * @param string $RegionCode Region encoding
     * @param string $CnName Region name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnName English name of the region
     * @param integer $RegionId Region ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AvailableZoneNum Number of AZs

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
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("AvailableZoneNum",$param) and $param["AvailableZoneNum"] !== null) {
            $this->AvailableZoneNum = $param["AvailableZoneNum"];
        }
    }
}
