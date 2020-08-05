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
 * ModifyDDoSPolicy request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method array getDropOptions() Obtain Protocol disablement, which must be entered, and the array length must be 1
 * @method void setDropOptions(array $DropOptions) Set Protocol disablement, which must be entered, and the array length must be 1
 * @method array getPortLimits() Obtain Port disablement. If no ports are to be disabled, enter an empty array
 * @method void setPortLimits(array $PortLimits) Set Port disablement. If no ports are to be disabled, enter an empty array
 * @method array getIpAllowDenys() Obtain IP blocklist/allowlist. Enter an empty array if there is no IP blocklist/allowlist
 * @method void setIpAllowDenys(array $IpAllowDenys) Set IP blocklist/allowlist. Enter an empty array if there is no IP blocklist/allowlist
 * @method array getPacketFilters() Obtain Packet filter. Enter an empty array if there are no packets to filter
 * @method void setPacketFilters(array $PacketFilters) Set Packet filter. Enter an empty array if there are no packets to filter
 * @method array getWaterPrint() Obtain Watermarking policy parameter. Enter an empty array if the watermarking feature is not enabled. At most one watermarking policy can be passed in (that is, the size of the array cannot exceed 1)
 * @method void setWaterPrint(array $WaterPrint) Set Watermarking policy parameter. Enter an empty array if the watermarking feature is not enabled. At most one watermarking policy can be passed in (that is, the size of the array cannot exceed 1)
 */
class ModifyDDoSPolicyRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @var array Protocol disablement, which must be entered, and the array length must be 1
     */
    public $DropOptions;

    /**
     * @var array Port disablement. If no ports are to be disabled, enter an empty array
     */
    public $PortLimits;

    /**
     * @var array IP blocklist/allowlist. Enter an empty array if there is no IP blocklist/allowlist
     */
    public $IpAllowDenys;

    /**
     * @var array Packet filter. Enter an empty array if there are no packets to filter
     */
    public $PacketFilters;

    /**
     * @var array Watermarking policy parameter. Enter an empty array if the watermarking feature is not enabled. At most one watermarking policy can be passed in (that is, the size of the array cannot exceed 1)
     */
    public $WaterPrint;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     * @param string $PolicyId Policy ID
     * @param array $DropOptions Protocol disablement, which must be entered, and the array length must be 1
     * @param array $PortLimits Port disablement. If no ports are to be disabled, enter an empty array
     * @param array $IpAllowDenys IP blocklist/allowlist. Enter an empty array if there is no IP blocklist/allowlist
     * @param array $PacketFilters Packet filter. Enter an empty array if there are no packets to filter
     * @param array $WaterPrint Watermarking policy parameter. Enter an empty array if the watermarking feature is not enabled. At most one watermarking policy can be passed in (that is, the size of the array cannot exceed 1)
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("DropOptions",$param) and $param["DropOptions"] !== null) {
            $this->DropOptions = [];
            foreach ($param["DropOptions"] as $key => $value){
                $obj = new DDoSPolicyDropOption();
                $obj->deserialize($value);
                array_push($this->DropOptions, $obj);
            }
        }

        if (array_key_exists("PortLimits",$param) and $param["PortLimits"] !== null) {
            $this->PortLimits = [];
            foreach ($param["PortLimits"] as $key => $value){
                $obj = new DDoSPolicyPortLimit();
                $obj->deserialize($value);
                array_push($this->PortLimits, $obj);
            }
        }

        if (array_key_exists("IpAllowDenys",$param) and $param["IpAllowDenys"] !== null) {
            $this->IpAllowDenys = [];
            foreach ($param["IpAllowDenys"] as $key => $value){
                $obj = new IpBlackWhite();
                $obj->deserialize($value);
                array_push($this->IpAllowDenys, $obj);
            }
        }

        if (array_key_exists("PacketFilters",$param) and $param["PacketFilters"] !== null) {
            $this->PacketFilters = [];
            foreach ($param["PacketFilters"] as $key => $value){
                $obj = new DDoSPolicyPacketFilter();
                $obj->deserialize($value);
                array_push($this->PacketFilters, $obj);
            }
        }

        if (array_key_exists("WaterPrint",$param) and $param["WaterPrint"] !== null) {
            $this->WaterPrint = [];
            foreach ($param["WaterPrint"] as $key => $value){
                $obj = new WaterPrintPolicy();
                $obj->deserialize($value);
                array_push($this->WaterPrint, $obj);
            }
        }
    }
}
