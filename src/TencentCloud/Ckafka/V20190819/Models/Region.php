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
 * @method string getRegionCode() Obtain Region code.
 * @method void setRegionCode(string $RegionCode) Set Region code.
 * @method string getRegionCodeV3() Obtain Region code (V3 version).
 * @method void setRegionCodeV3(string $RegionCodeV3) Set Region code (V3 version).
 * @method string getSupport() Obtain Specifies the default value does not support any special type instance type.
 * @method void setSupport(string $Support) Set Specifies the default value does not support any special type instance type.
 * @method integer getIpv6() Obtain Whether ipv6 is supported. 0: indicates no support. 1: indicates support.
 * @method void setIpv6(integer $Ipv6) Set Whether ipv6 is supported. 0: indicates no support. 1: indicates support.
 * @method integer getMultiZone() Obtain Whether cross-az is supported. valid values: 0 (unsupported), 1 (supported).
 * @method void setMultiZone(integer $MultiZone) Set Whether cross-az is supported. valid values: 0 (unsupported), 1 (supported).
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
     * @var string Region code.
     */
    public $RegionCode;

    /**
     * @var string Region code (V3 version).
     */
    public $RegionCodeV3;

    /**
     * @var string Specifies the default value does not support any special type instance type.
     */
    public $Support;

    /**
     * @var integer Whether ipv6 is supported. 0: indicates no support. 1: indicates support.
     */
    public $Ipv6;

    /**
     * @var integer Whether cross-az is supported. valid values: 0 (unsupported), 1 (supported).
     */
    public $MultiZone;

    /**
     * @param integer $RegionId Region ID
     * @param string $RegionName Region name
     * @param string $AreaName Area name
     * @param string $RegionCode Region code.
     * @param string $RegionCodeV3 Region code (V3 version).
     * @param string $Support Specifies the default value does not support any special type instance type.
     * @param integer $Ipv6 Whether ipv6 is supported. 0: indicates no support. 1: indicates support.
     * @param integer $MultiZone Whether cross-az is supported. valid values: 0 (unsupported), 1 (supported).
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
