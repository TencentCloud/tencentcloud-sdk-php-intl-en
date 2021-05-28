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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region entity object
 *
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method string getAreaName() Obtain Area name
 * @method void setAreaName(string $AreaName) Set Area name
 * @method string getRegionCode() Obtain Region code
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setRegionCode(string $RegionCode) Set Region code
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getRegionCodeV3() Obtain Region code (v3)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setRegionCodeV3(string $RegionCodeV3) Set Region code (v3)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getSupport() Obtain NONE: no special models are supported by default.\nCVM: the CVM type is supported.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSupport(string $Support) Set NONE: no special models are supported by default.\nCVM: the CVM type is supported.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getIpv6() Obtain Whether IPv6 is supported. `0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setIpv6(integer $Ipv6) Set Whether IPv6 is supported. `0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getMultiZone() Obtain Whether cross-AZ clusters are supported.`0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setMultiZone(integer $MultiZone) Set Whether cross-AZ clusters are supported.`0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class Region extends AbstractModel
{
    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var string Area name
     */
    public $AreaName;

    /**
     * @var string Region code
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $RegionCode;

    /**
     * @var string Region code (v3)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $RegionCodeV3;

    /**
     * @var string NONE: no special models are supported by default.\nCVM: the CVM type is supported.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Support;

    /**
     * @var integer Whether IPv6 is supported. `0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Ipv6;

    /**
     * @var integer Whether cross-AZ clusters are supported.`0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $MultiZone;

    /**
     * @param integer $RegionId Region ID
     * @param string $RegionName Region name
     * @param string $AreaName Area name
     * @param string $RegionCode Region code
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $RegionCodeV3 Region code (v3)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $Support NONE: no special models are supported by default.\nCVM: the CVM type is supported.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $Ipv6 Whether IPv6 is supported. `0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $MultiZone Whether cross-AZ clusters are supported.`0` indicates no, and `1` indicates yes.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionCodeV3",$param) and $param["RegionCodeV3"] !== null) {
            $this->RegionCodeV3 = $param["RegionCodeV3"];
        }

        if (array_key_exists("Support",$param) and $param["Support"] !== null) {
            $this->Support = $param["Support"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("MultiZone",$param) and $param["MultiZone"] !== null) {
            $this->MultiZone = $param["MultiZone"];
        }
    }
}
