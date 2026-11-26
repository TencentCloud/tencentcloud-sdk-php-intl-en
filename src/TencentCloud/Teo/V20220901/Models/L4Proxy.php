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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * L4 proxy instance.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyId() Obtain Layer 4 Proxy Instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer 4 Proxy Instance ID.
 * @method string getProxyName() Obtain Name of the L4 proxy instance.
 * @method void setProxyName(string $ProxyName) Set Name of the L4 proxy instance.
 * @method string getArea() Obtain Acceleration zone of the Layer 4 proxy instance. 
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland);</li>
 <li>global: global availability zone.</li>	
 * @method void setArea(string $Area) Set Acceleration zone of the Layer 4 proxy instance. 
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland);</li>
 <li>global: global availability zone.</li>	
 * @method string getCname() Obtain Access via CNAME.
 * @method void setCname(string $Cname) Set Access via CNAME.
 * @method array getIps() Obtain After fixed IP address is enabled, this value returns the corresponding access IP address. If not enabled, this value is empty.
 * @method void setIps(array $Ips) Set After fixed IP address is enabled, this value returns the corresponding access IP address. If not enabled, this value is empty.
 * @method string getStatus() Obtain Status of the Layer 4 proxy instance.
<li>online: enabled;</li>
<li>offline: Disabled;</li>
<li>progress: deploying;</li>	
<li>stopping: disabling;</li>
<li>`banned`: The name server is banned.</li>
<li>fail: deployment or disabling failed.</li>	
 * @method void setStatus(string $Status) Set Status of the Layer 4 proxy instance.
<li>online: enabled;</li>
<li>offline: Disabled;</li>
<li>progress: deploying;</li>	
<li>stopping: disabling;</li>
<li>`banned`: The name server is banned.</li>
<li>fail: deployment or disabling failed.</li>	
 * @method string getIpv6() Obtain Specifies whether to enable IPv6 access. 
<li>`on`: Enable;</li> 
<li>off: Disable.</li>
 * @method void setIpv6(string $Ipv6) Set Specifies whether to enable IPv6 access. 
<li>`on`: Enable;</li> 
<li>off: Disable.</li>
 * @method string getStaticIp() Obtain Specifies whether to enable the fixed IP address.
<li>`on`: Enable;</li> <li>`off`: Disable.</li>
 * @method void setStaticIp(string $StaticIp) Set Specifies whether to enable the fixed IP address.
<li>`on`: Enable;</li> <li>`off`: Disable.</li>
 * @method string getAccelerateMainland() Obtain Specifies whether to enable network optimization in the Chinese mainland.
<li>on: Enable.</li> <li>off: Disable.</li>
 * @method void setAccelerateMainland(string $AccelerateMainland) Set Specifies whether to enable network optimization in the Chinese mainland.
<li>on: Enable.</li> <li>off: Disable.</li>
 * @method DDosProtectionConfig getDDosProtectionConfig() Obtain Security protection configuration.
This field is deprecated.
 * @method void setDDosProtectionConfig(DDosProtectionConfig $DDosProtectionConfig) Set Security protection configuration.
This field is deprecated.
 * @method integer getL4ProxyRuleCount() Obtain Number of forwarding rules under the layer 4 proxy instance.
 * @method void setL4ProxyRuleCount(integer $L4ProxyRuleCount) Set Number of forwarding rules under the layer 4 proxy instance.
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
     * @var string Layer 4 Proxy Instance ID.
     */
    public $ProxyId;

    /**
     * @var string Name of the L4 proxy instance.
     */
    public $ProxyName;

    /**
     * @var string Acceleration zone of the Layer 4 proxy instance. 
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland);</li>
 <li>global: global availability zone.</li>	
     */
    public $Area;

    /**
     * @var string Access via CNAME.
     */
    public $Cname;

    /**
     * @var array After fixed IP address is enabled, this value returns the corresponding access IP address. If not enabled, this value is empty.
     */
    public $Ips;

    /**
     * @var string Status of the Layer 4 proxy instance.
<li>online: enabled;</li>
<li>offline: Disabled;</li>
<li>progress: deploying;</li>	
<li>stopping: disabling;</li>
<li>`banned`: The name server is banned.</li>
<li>fail: deployment or disabling failed.</li>	
     */
    public $Status;

    /**
     * @var string Specifies whether to enable IPv6 access. 
<li>`on`: Enable;</li> 
<li>off: Disable.</li>
     */
    public $Ipv6;

    /**
     * @var string Specifies whether to enable the fixed IP address.
<li>`on`: Enable;</li> <li>`off`: Disable.</li>
     */
    public $StaticIp;

    /**
     * @var string Specifies whether to enable network optimization in the Chinese mainland.
<li>on: Enable.</li> <li>off: Disable.</li>
     */
    public $AccelerateMainland;

    /**
     * @var DDosProtectionConfig Security protection configuration.
This field is deprecated.
     * @deprecated
     */
    public $DDosProtectionConfig;

    /**
     * @var integer Number of forwarding rules under the layer 4 proxy instance.
     */
    public $L4ProxyRuleCount;

    /**
     * @var string Latest modification time.
     */
    public $UpdateTime;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyId Layer 4 Proxy Instance ID.
     * @param string $ProxyName Name of the L4 proxy instance.
     * @param string $Area Acceleration zone of the Layer 4 proxy instance. 
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland);</li>
 <li>global: global availability zone.</li>	
     * @param string $Cname Access via CNAME.
     * @param array $Ips After fixed IP address is enabled, this value returns the corresponding access IP address. If not enabled, this value is empty.
     * @param string $Status Status of the Layer 4 proxy instance.
<li>online: enabled;</li>
<li>offline: Disabled;</li>
<li>progress: deploying;</li>	
<li>stopping: disabling;</li>
<li>`banned`: The name server is banned.</li>
<li>fail: deployment or disabling failed.</li>	
     * @param string $Ipv6 Specifies whether to enable IPv6 access. 
<li>`on`: Enable;</li> 
<li>off: Disable.</li>
     * @param string $StaticIp Specifies whether to enable the fixed IP address.
<li>`on`: Enable;</li> <li>`off`: Disable.</li>
     * @param string $AccelerateMainland Specifies whether to enable network optimization in the Chinese mainland.
<li>on: Enable.</li> <li>off: Disable.</li>
     * @param DDosProtectionConfig $DDosProtectionConfig Security protection configuration.
This field is deprecated.
     * @param integer $L4ProxyRuleCount Number of forwarding rules under the layer 4 proxy instance.
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
