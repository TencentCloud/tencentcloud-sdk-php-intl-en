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
 * Advanced DDoS policy
 *
 * @method array getResources() Obtain Resource bound to policy
 * @method void setResources(array $Resources) Set Resource bound to policy
 * @method DDoSPolicyDropOption getDropOptions() Obtain Disabled protocol
 * @method void setDropOptions(DDoSPolicyDropOption $DropOptions) Set Disabled protocol
 * @method array getPortLimits() Obtain Disabled port
 * @method void setPortLimits(array $PortLimits) Set Disabled port
 * @method array getPacketFilters() Obtain Packet filter
 * @method void setPacketFilters(array $PacketFilters) Set Packet filter
 * @method array getIpBlackWhiteLists() Obtain IP blocklist/allowlist
 * @method void setIpBlackWhiteLists(array $IpBlackWhiteLists) Set IP blocklist/allowlist
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getCreateTime() Obtain Policy creation time
 * @method void setCreateTime(string $CreateTime) Set Policy creation time
 * @method array getWaterPrint() Obtain Watermarking policy parameter. There can be only one policy. If there are no policies, the array is empty
 * @method void setWaterPrint(array $WaterPrint) Set Watermarking policy parameter. There can be only one policy. If there are no policies, the array is empty
 * @method array getWaterKey() Obtain Watermark key. There can be up to two keys. If there are no policies, the array is empty
 * @method void setWaterKey(array $WaterKey) Set Watermark key. There can be up to two keys. If there are no policies, the array is empty
 * @method array getBoundResources() Obtain Resource instance bound to policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBoundResources(array $BoundResources) Set Resource instance bound to policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSceneId() Obtain Policy scenario
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSceneId(string $SceneId) Set Policy scenario
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DDosPolicy extends AbstractModel
{
    /**
     * @var array Resource bound to policy
     */
    public $Resources;

    /**
     * @var DDoSPolicyDropOption Disabled protocol
     */
    public $DropOptions;

    /**
     * @var array Disabled port
     */
    public $PortLimits;

    /**
     * @var array Packet filter
     */
    public $PacketFilters;

    /**
     * @var array IP blocklist/allowlist
     */
    public $IpBlackWhiteLists;

    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string Policy creation time
     */
    public $CreateTime;

    /**
     * @var array Watermarking policy parameter. There can be only one policy. If there are no policies, the array is empty
     */
    public $WaterPrint;

    /**
     * @var array Watermark key. There can be up to two keys. If there are no policies, the array is empty
     */
    public $WaterKey;

    /**
     * @var array Resource instance bound to policy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BoundResources;

    /**
     * @var string Policy scenario
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SceneId;

    /**
     * @param array $Resources Resource bound to policy
     * @param DDoSPolicyDropOption $DropOptions Disabled protocol
     * @param array $PortLimits Disabled port
     * @param array $PacketFilters Packet filter
     * @param array $IpBlackWhiteLists IP blocklist/allowlist
     * @param string $PolicyId Policy ID
     * @param string $PolicyName Policy name
     * @param string $CreateTime Policy creation time
     * @param array $WaterPrint Watermarking policy parameter. There can be only one policy. If there are no policies, the array is empty
     * @param array $WaterKey Watermark key. There can be up to two keys. If there are no policies, the array is empty
     * @param array $BoundResources Resource instance bound to policy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SceneId Policy scenario
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceIp();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("DropOptions",$param) and $param["DropOptions"] !== null) {
            $this->DropOptions = new DDoSPolicyDropOption();
            $this->DropOptions->deserialize($param["DropOptions"]);
        }

        if (array_key_exists("PortLimits",$param) and $param["PortLimits"] !== null) {
            $this->PortLimits = [];
            foreach ($param["PortLimits"] as $key => $value){
                $obj = new DDoSPolicyPortLimit();
                $obj->deserialize($value);
                array_push($this->PortLimits, $obj);
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

        if (array_key_exists("IpBlackWhiteLists",$param) and $param["IpBlackWhiteLists"] !== null) {
            $this->IpBlackWhiteLists = [];
            foreach ($param["IpBlackWhiteLists"] as $key => $value){
                $obj = new IpBlackWhite();
                $obj->deserialize($value);
                array_push($this->IpBlackWhiteLists, $obj);
            }
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("WaterPrint",$param) and $param["WaterPrint"] !== null) {
            $this->WaterPrint = [];
            foreach ($param["WaterPrint"] as $key => $value){
                $obj = new WaterPrintPolicy();
                $obj->deserialize($value);
                array_push($this->WaterPrint, $obj);
            }
        }

        if (array_key_exists("WaterKey",$param) and $param["WaterKey"] !== null) {
            $this->WaterKey = [];
            foreach ($param["WaterKey"] as $key => $value){
                $obj = new WaterPrintKey();
                $obj->deserialize($value);
                array_push($this->WaterKey, $obj);
            }
        }

        if (array_key_exists("BoundResources",$param) and $param["BoundResources"] !== null) {
            $this->BoundResources = $param["BoundResources"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }
    }
}
