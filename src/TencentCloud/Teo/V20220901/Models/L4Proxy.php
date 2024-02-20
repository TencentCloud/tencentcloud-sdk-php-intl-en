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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer 4 proxy instance.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyId() Obtain Layer 4 proxy instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer 4 proxy instance ID.
 * @method string getProxyName() Obtain Layer 4 proxy instance name.
 * @method void setProxyName(string $ProxyName) Set Layer 4 proxy instance name.
 * @method string getArea() Obtain Acceleration zone of the Layer 4 proxy instance.<li>mainland: Availability zone in the Chinese mainland;</li><li>overseas: Global availability zone (excluding the Chinese mainland);</li><li>global: Global availability zone.</li>	
 * @method void setArea(string $Area) Set Acceleration zone of the Layer 4 proxy instance.<li>mainland: Availability zone in the Chinese mainland;</li><li>overseas: Global availability zone (excluding the Chinese mainland);</li><li>global: Global availability zone.</li>	
 * @method string getCname() Obtain Access via CNAME.
 * @method void setCname(string $Cname) Set Access via CNAME.
 * @method array getIps() Obtain After the fixed IP address is enabled, this value will return the corresponding access IP address; if it is not enabled, this value will be empty.
 * @method void setIps(array $Ips) Set After the fixed IP address is enabled, this value will return the corresponding access IP address; if it is not enabled, this value will be empty.
 * @method string getStatus() Obtain Status of the Layer 4 proxy instance.<li>online: Enabled;</li>
<li>offline: Disabled;</li>
<li>progress: Deploying;</li>	
<li>stopping: Disabling;</li>
<li>banned: Blocked;</li>
<li>fail: Failed to deploy or disable.</li>	
 * @method void setStatus(string $Status) Set Status of the Layer 4 proxy instance.<li>online: Enabled;</li>
<li>offline: Disabled;</li>
<li>progress: Deploying;</li>	
<li>stopping: Disabling;</li>
<li>banned: Blocked;</li>
<li>fail: Failed to deploy or disable.</li>	
 * @method string getIpv6() Obtain Specifies whether to enable IPv6 access.<li>on: Enable;</li> <li>off: Disable.</li>
 * @method void setIpv6(string $Ipv6) Set Specifies whether to enable IPv6 access.<li>on: Enable;</li> <li>off: Disable.</li>
 * @method string getStaticIp() Obtain Specifies whether to enable the fixed IP address.<li>on: Enable;</li> <li>off: Disable.</li>
 * @method void setStaticIp(string $StaticIp) Set Specifies whether to enable the fixed IP address.<li>on: Enable;</li> <li>off: Disable.</li>
 * @method string getAccelerateMainland() Obtain Specifies whether to enable network optimization in the Chinese mainland.<li>on: Enable</li> <li>off: Disable</li>
 * @method void setAccelerateMainland(string $AccelerateMainland) Set Specifies whether to enable network optimization in the Chinese mainland.<li>on: Enable</li> <li>off: Disable</li>
 * @method DDosProtectionConfig getDDosProtectionConfig() Obtain Security protection configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDDosProtectionConfig(DDosProtectionConfig $DDosProtectionConfig) Set Security protection configuration.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getL4ProxyRuleCount() Obtain Number of forwarding rules under the Layer 4 proxy instance.
 * @method void setL4ProxyRuleCount(integer $L4ProxyRuleCount) Set Number of forwarding rules under the Layer 4 proxy instance.
 * @method string getUpdateTime() Obtain Latest modification time.
 * @method void setUpdateTime(string $UpdateTime) Set Latest modification time.
 */
class L4Proxy extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Layer 4 proxy instance ID.
     */
    public $ProxyId;

    /**
     * @var string Layer 4 proxy instance name.
     */
    public $ProxyName;

    /**
     * @var string Acceleration zone of the Layer 4 proxy instance.<li>mainland: Availability zone in the Chinese mainland;</li><li>overseas: Global availability zone (excluding the Chinese mainland);</li><li>global: Global availability zone.</li>	
     */
    public $Area;

    /**
     * @var string Access via CNAME.
     */
    public $Cname;

    /**
     * @var array After the fixed IP address is enabled, this value will return the corresponding access IP address; if it is not enabled, this value will be empty.
     */
    public $Ips;

    /**
     * @var string Status of the Layer 4 proxy instance.<li>online: Enabled;</li>
<li>offline: Disabled;</li>
<li>progress: Deploying;</li>	
<li>stopping: Disabling;</li>
<li>banned: Blocked;</li>
<li>fail: Failed to deploy or disable.</li>	
     */
    public $Status;

    /**
     * @var string Specifies whether to enable IPv6 access.<li>on: Enable;</li> <li>off: Disable.</li>
     */
    public $Ipv6;

    /**
     * @var string Specifies whether to enable the fixed IP address.<li>on: Enable;</li> <li>off: Disable.</li>
     */
    public $StaticIp;

    /**
     * @var string Specifies whether to enable network optimization in the Chinese mainland.<li>on: Enable</li> <li>off: Disable</li>
     */
    public $AccelerateMainland;

    /**
     * @var DDosProtectionConfig Security protection configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DDosProtectionConfig;

    /**
     * @var integer Number of forwarding rules under the Layer 4 proxy instance.
     */
    public $L4ProxyRuleCount;

    /**
     * @var string Latest modification time.
     */
    public $UpdateTime;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyId Layer 4 proxy instance ID.
     * @param string $ProxyName Layer 4 proxy instance name.
     * @param string $Area Acceleration zone of the Layer 4 proxy instance.<li>mainland: Availability zone in the Chinese mainland;</li><li>overseas: Global availability zone (excluding the Chinese mainland);</li><li>global: Global availability zone.</li>	
     * @param string $Cname Access via CNAME.
     * @param array $Ips After the fixed IP address is enabled, this value will return the corresponding access IP address; if it is not enabled, this value will be empty.
     * @param string $Status Status of the Layer 4 proxy instance.<li>online: Enabled;</li>
<li>offline: Disabled;</li>
<li>progress: Deploying;</li>	
<li>stopping: Disabling;</li>
<li>banned: Blocked;</li>
<li>fail: Failed to deploy or disable.</li>	
     * @param string $Ipv6 Specifies whether to enable IPv6 access.<li>on: Enable;</li> <li>off: Disable.</li>
     * @param string $StaticIp Specifies whether to enable the fixed IP address.<li>on: Enable;</li> <li>off: Disable.</li>
     * @param string $AccelerateMainland Specifies whether to enable network optimization in the Chinese mainland.<li>on: Enable</li> <li>off: Disable</li>
     * @param DDosProtectionConfig $DDosProtectionConfig Security protection configuration.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $L4ProxyRuleCount Number of forwarding rules under the Layer 4 proxy instance.
     * @param string $UpdateTime Latest modification time.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("StaticIp",$param) and $param["StaticIp"] !== null) {
            $this->StaticIp = $param["StaticIp"];
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = $param["AccelerateMainland"];
        }

        if (array_key_exists("DDosProtectionConfig",$param) and $param["DDosProtectionConfig"] !== null) {
            $this->DDosProtectionConfig = new DDosProtectionConfig();
            $this->DDosProtectionConfig->deserialize($param["DDosProtectionConfig"]);
        }

        if (array_key_exists("L4ProxyRuleCount",$param) and $param["L4ProxyRuleCount"] !== null) {
            $this->L4ProxyRuleCount = $param["L4ProxyRuleCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
