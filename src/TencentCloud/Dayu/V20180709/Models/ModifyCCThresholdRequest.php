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
 * ModifyCCThreshold request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate, `basic`: Anti-DDoS Basic
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate, `basic`: Anti-DDoS Basic
 * @method integer getThreshold() Obtain CC protection threshold. Valid values: (0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
If `Business` is Anti-DDoS Advanced or Anti-DDoS Ultimate, its maximum CC protection threshold is subject to the base protection bandwidth in the following way:
  Base bandwidth: maximum CC protection threshold
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
 * @method void setThreshold(integer $Threshold) Set CC protection threshold. Valid values: (0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
If `Business` is Anti-DDoS Advanced or Anti-DDoS Ultimate, its maximum CC protection threshold is subject to the base protection bandwidth in the following way:
  Base bandwidth: maximum CC protection threshold
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getProtocol() Obtain CC protection type, which is optional. Valid values: [http (HTTP CC protection), https (HTTPS CC protection)]; if this field is left empty, HTTPS CC protection will be used by default; if `https` is entered, the `RuleId` field is required;
 * @method void setProtocol(string $Protocol) Set CC protection type, which is optional. Valid values: [http (HTTP CC protection), https (HTTPS CC protection)]; if this field is left empty, HTTPS CC protection will be used by default; if `https` is entered, the `RuleId` field is required;
 * @method string getRuleId() Obtain HTTPS layer-7 forwarding rule ID (which is optional and can be obtained from the layer-7 forwarding rule API);
Required if `Protocol` is `https`;
 * @method void setRuleId(string $RuleId) Set HTTPS layer-7 forwarding rule ID (which is optional and can be obtained from the layer-7 forwarding rule API);
Required if `Protocol` is `https`;
 * @method string getBasicIp() Obtain Queried IP address (only provided by Anti-DDoS Basic), such as 1.1.1.1
 * @method void setBasicIp(string $BasicIp) Set Queried IP address (only provided by Anti-DDoS Basic), such as 1.1.1.1
 * @method string getBasicRegion() Obtain IP region (only provided for Anti-DDoS Basic). Valid values: region abbreviations such as gz, bj, sh, and hk
 * @method void setBasicRegion(string $BasicRegion) Set IP region (only provided for Anti-DDoS Basic). Valid values: region abbreviations such as gz, bj, sh, and hk
 * @method string getBasicBizType() Obtain Zone type (only provided for Anti-DDoS Basic). Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
 * @method void setBasicBizType(string $BasicBizType) Set Zone type (only provided for Anti-DDoS Basic). Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
 * @method string getBasicDeviceType() Obtain Device type (only provided for Anti-DDoS Basic). Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
 * @method void setBasicDeviceType(string $BasicDeviceType) Set Device type (only provided for Anti-DDoS Basic). Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
 * @method string getBasicIpInstance() Obtain IPInstance Nat gateway (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
 * @method void setBasicIpInstance(string $BasicIpInstance) Set IPInstance Nat gateway (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
 * @method integer getBasicIspCode() Obtain ISP line (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
 * @method void setBasicIspCode(integer $BasicIspCode) Set ISP line (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
 * @method string getDomain() Obtain This optional field must be specified when HTTPS protocol is used.
 * @method void setDomain(string $Domain) Set This optional field must be specified when HTTPS protocol is used.
 */
class ModifyCCThresholdRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate, `basic`: Anti-DDoS Basic
     */
    public $Business;

    /**
     * @var integer CC protection threshold. Valid values: (0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
If `Business` is Anti-DDoS Advanced or Anti-DDoS Ultimate, its maximum CC protection threshold is subject to the base protection bandwidth in the following way:
  Base bandwidth: maximum CC protection threshold
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
     */
    public $Threshold;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string CC protection type, which is optional. Valid values: [http (HTTP CC protection), https (HTTPS CC protection)]; if this field is left empty, HTTPS CC protection will be used by default; if `https` is entered, the `RuleId` field is required;
     */
    public $Protocol;

    /**
     * @var string HTTPS layer-7 forwarding rule ID (which is optional and can be obtained from the layer-7 forwarding rule API);
Required if `Protocol` is `https`;
     */
    public $RuleId;

    /**
     * @var string Queried IP address (only provided by Anti-DDoS Basic), such as 1.1.1.1
     */
    public $BasicIp;

    /**
     * @var string IP region (only provided for Anti-DDoS Basic). Valid values: region abbreviations such as gz, bj, sh, and hk
     */
    public $BasicRegion;

    /**
     * @var string Zone type (only provided for Anti-DDoS Basic). Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
     */
    public $BasicBizType;

    /**
     * @var string Device type (only provided for Anti-DDoS Basic). Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
     */
    public $BasicDeviceType;

    /**
     * @var string IPInstance Nat gateway (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
     */
    public $BasicIpInstance;

    /**
     * @var integer ISP line (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
     */
    public $BasicIspCode;

    /**
     * @var string This optional field must be specified when HTTPS protocol is used.
     */
    public $Domain;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate, `basic`: Anti-DDoS Basic
     * @param integer $Threshold CC protection threshold. Valid values: (0 100 150 240 350 480 550 700 850 1000 1500 2000 3000 5000 10000 20000);
If `Business` is Anti-DDoS Advanced or Anti-DDoS Ultimate, its maximum CC protection threshold is subject to the base protection bandwidth in the following way:
  Base bandwidth: maximum CC protection threshold
  10:  20000,
  20:  40000,
  30:  70000,
  40:  100000,
  50:  150000,
  60:  200000,
  80:  250000,
  100: 300000,
     * @param string $Id Anti-DDoS instance ID
     * @param string $Protocol CC protection type, which is optional. Valid values: [http (HTTP CC protection), https (HTTPS CC protection)]; if this field is left empty, HTTPS CC protection will be used by default; if `https` is entered, the `RuleId` field is required;
     * @param string $RuleId HTTPS layer-7 forwarding rule ID (which is optional and can be obtained from the layer-7 forwarding rule API);
Required if `Protocol` is `https`;
     * @param string $BasicIp Queried IP address (only provided by Anti-DDoS Basic), such as 1.1.1.1
     * @param string $BasicRegion IP region (only provided for Anti-DDoS Basic). Valid values: region abbreviations such as gz, bj, sh, and hk
     * @param string $BasicBizType Zone type (only provided for Anti-DDoS Basic). Valid values: public (public cloud zone), bm (BM zone), nat (NAT server zone), channel (internet channel).
     * @param string $BasicDeviceType Device type (only provided for Anti-DDoS Basic). Valid values: cvm (CVM), clb (public CLB), lb (BM CLB), nat (NAT server), channel (internet channel).
     * @param string $BasicIpInstance IPInstance Nat gateway (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter is required, which can be obtained through the NAT resource query API)
     * @param integer $BasicIspCode ISP line (only provided for Anti-DDoS Basic), which is optional. (If the device type to be queried is a NAT server, this parameter should be 5)
     * @param string $Domain This optional field must be specified when HTTPS protocol is used.
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
