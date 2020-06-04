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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicCCThreshold request structure.
 *
 * @method string getBasicIp() Obtain Queried IP address, such as 1.1.1.1
 * @method void setBasicIp(string $BasicIp) Set Queried IP address, such as 1.1.1.1
 * @method string getBasicRegion() Obtain IP region. Valid values: region abbreviations such as gz, bj, sh, and hk
 * @method void setBasicRegion(string $BasicRegion) Set IP region. Valid values: region abbreviations such as gz, bj, sh, and hk
 * @method string getBasicBizType() Obtain Zone type. Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
 * @method void setBasicBizType(string $BasicBizType) Set Zone type. Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
 * @method string getBasicDeviceType() Obtain Device type. Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
 * @method void setBasicDeviceType(string $BasicDeviceType) Set Device type. Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
 * @method string getBasicIpInstance() Obtain IPInstance Nat gateway, which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
 * @method void setBasicIpInstance(string $BasicIpInstance) Set IPInstance Nat gateway, which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
 * @method integer getBasicIspCode() Obtain ISP line, which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
 * @method void setBasicIspCode(integer $BasicIspCode) Set ISP line, which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
 */
class DescribeBasicCCThresholdRequest extends AbstractModel
{
    /**
     * @var string Queried IP address, such as 1.1.1.1
     */
    public $BasicIp;

    /**
     * @var string IP region. Valid values: region abbreviations such as gz, bj, sh, and hk
     */
    public $BasicRegion;

    /**
     * @var string Zone type. Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
     */
    public $BasicBizType;

    /**
     * @var string Device type. Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
     */
    public $BasicDeviceType;

    /**
     * @var string IPInstance Nat gateway, which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
     */
    public $BasicIpInstance;

    /**
     * @var integer ISP line, which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
     */
    public $BasicIspCode;

    /**
     * @param string $BasicIp Queried IP address, such as 1.1.1.1
     * @param string $BasicRegion IP region. Valid values: region abbreviations such as gz, bj, sh, and hk
     * @param string $BasicBizType Zone type. Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
     * @param string $BasicDeviceType Device type. Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
     * @param string $BasicIpInstance IPInstance Nat gateway, which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
     * @param integer $BasicIspCode ISP line, which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
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
        if (array_key_exists("BasicIp",$param) and $param["BasicIp"] !== null) {
            $this->BasicIp = $param["BasicIp"];
        }

        if (array_key_exists("BasicRegion",$param) and $param["BasicRegion"] !== null) {
            $this->BasicRegion = $param["BasicRegion"];
        }

        if (array_key_exists("BasicBizType",$param) and $param["BasicBizType"] !== null) {
            $this->BasicBizType = $param["BasicBizType"];
        }

        if (array_key_exists("BasicDeviceType",$param) and $param["BasicDeviceType"] !== null) {
            $this->BasicDeviceType = $param["BasicDeviceType"];
        }

        if (array_key_exists("BasicIpInstance",$param) and $param["BasicIpInstance"] !== null) {
            $this->BasicIpInstance = $param["BasicIpInstance"];
        }

        if (array_key_exists("BasicIspCode",$param) and $param["BasicIspCode"] !== null) {
            $this->BasicIspCode = $param["BasicIspCode"];
        }
    }
}
