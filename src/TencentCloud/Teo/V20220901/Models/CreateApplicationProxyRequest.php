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
 * CreateApplicationProxy request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getProxyName() Obtain Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
 * @method void setProxyName(string $ProxyName) Set Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
 * @method string getPlatType() Obtain The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
 * @method void setPlatType(string $PlatType) Set The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
 * @method integer getSecurityType() Obtain Whether to enable security protection. Values:
<li>`0`: Disable security protection.</li>
<li>`1`: Enable security protection.</li>
 * @method void setSecurityType(integer $SecurityType) Set Whether to enable security protection. Values:
<li>`0`: Disable security protection.</li>
<li>`1`: Enable security protection.</li>
 * @method integer getAccelerateType() Obtain Whether to enable acceleration. Values:
<li>`0`: Disable acceleration.</li>
<li>`1`: Enable acceleration.</li>
 * @method void setAccelerateType(integer $AccelerateType) Set Whether to enable acceleration. Values:
<li>`0`: Disable acceleration.</li>
<li>`1`: Enable acceleration.</li>
 * @method string getProxyType() Obtain Layer 4 proxy mode, with value: <li>instance: instance mode.</li>If not specified, the default value instance will be used.
 * @method void setProxyType(string $ProxyType) Set Layer 4 proxy mode, with value: <li>instance: instance mode.</li>If not specified, the default value instance will be used.
 * @method integer getSessionPersistTime() Obtain The session persistence duration. Value range: 30-3600 (in seconds).
If not specified, this field uses the default value 600.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set The session persistence duration. Value range: 30-3600 (in seconds).
If not specified, this field uses the default value 600.
 * @method Ipv6 getIpv6() Obtain Ipv6 access configuration. 
IPv6 access is disabled if it is not specified.
 * @method void setIpv6(Ipv6 $Ipv6) Set Ipv6 access configuration. 
IPv6 access is disabled if it is not specified.
 * @method array getApplicationProxyRules() Obtain The rule details.
If this field is not specified, an application proxy rule will not be created.
 * @method void setApplicationProxyRules(array $ApplicationProxyRules) Set The rule details.
If this field is not specified, an application proxy rule will not be created.
 * @method AccelerateMainland getAccelerateMainland() Obtain Cross-MLC-border acceleration. It is disabled if this parameter is not specified.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Cross-MLC-border acceleration. It is disabled if this parameter is not specified.
 */
class CreateApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
     */
    public $ProxyName;

    /**
     * @var string The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
     */
    public $PlatType;

    /**
     * @var integer Whether to enable security protection. Values:
<li>`0`: Disable security protection.</li>
<li>`1`: Enable security protection.</li>
     */
    public $SecurityType;

    /**
     * @var integer Whether to enable acceleration. Values:
<li>`0`: Disable acceleration.</li>
<li>`1`: Enable acceleration.</li>
     */
    public $AccelerateType;

    /**
     * @var string Layer 4 proxy mode, with value: <li>instance: instance mode.</li>If not specified, the default value instance will be used.
     */
    public $ProxyType;

    /**
     * @var integer The session persistence duration. Value range: 30-3600 (in seconds).
If not specified, this field uses the default value 600.
     */
    public $SessionPersistTime;

    /**
     * @var Ipv6 Ipv6 access configuration. 
IPv6 access is disabled if it is not specified.
     */
    public $Ipv6;

    /**
     * @var array The rule details.
If this field is not specified, an application proxy rule will not be created.
     */
    public $ApplicationProxyRules;

    /**
     * @var AccelerateMainland Cross-MLC-border acceleration. It is disabled if this parameter is not specified.
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ProxyName Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
     * @param string $PlatType The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
     * @param integer $SecurityType Whether to enable security protection. Values:
<li>`0`: Disable security protection.</li>
<li>`1`: Enable security protection.</li>
     * @param integer $AccelerateType Whether to enable acceleration. Values:
<li>`0`: Disable acceleration.</li>
<li>`1`: Enable acceleration.</li>
     * @param string $ProxyType Layer 4 proxy mode, with value: <li>instance: instance mode.</li>If not specified, the default value instance will be used.
     * @param integer $SessionPersistTime The session persistence duration. Value range: 30-3600 (in seconds).
If not specified, this field uses the default value 600.
     * @param Ipv6 $Ipv6 Ipv6 access configuration. 
IPv6 access is disabled if it is not specified.
     * @param array $ApplicationProxyRules The rule details.
If this field is not specified, an application proxy rule will not be created.
     * @param AccelerateMainland $AccelerateMainland Cross-MLC-border acceleration. It is disabled if this parameter is not specified.
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

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("PlatType",$param) and $param["PlatType"] !== null) {
            $this->PlatType = $param["PlatType"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("ApplicationProxyRules",$param) and $param["ApplicationProxyRules"] !== null) {
            $this->ApplicationProxyRules = [];
            foreach ($param["ApplicationProxyRules"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->ApplicationProxyRules, $obj);
            }
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainland();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }
    }
}
