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
 * CreateApplicationProxy request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyName() Obtain When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
 * @method void setProxyName(string $ProxyName) Set When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
 * @method string getPlatType() Obtain Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
 * @method void setPlatType(string $PlatType) Set Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
 * @method integer getSecurityType() Obtain Whether security is enabled. Valid values:
<li>0: security off;</li>
<li>1: Enable security.</li>
 * @method void setSecurityType(integer $SecurityType) Set Whether security is enabled. Valid values:
<li>0: security off;</li>
<li>1: Enable security.</li>
 * @method integer getAccelerateType() Obtain Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
 * @method void setAccelerateType(integer $AccelerateType) Set Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
 * @method string getProxyType() Obtain Layer 4 proxy mode. Valid values: <li>instance: instance mode.</li>Use default value instance if not specified.
 * @method void setProxyType(string $ProxyType) Set Layer 4 proxy mode. Valid values: <li>instance: instance mode.</li>Use default value instance if not specified.
 * @method integer getSessionPersistTime() Obtain Session persistence duration. Value range: 30-3600. Unit: second.
If this field is not specified, the default value '600' will be used.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Session persistence duration. Value range: 30-3600. Unit: second.
If this field is not specified, the default value '600' will be used.
 * @method Ipv6 getIpv6() Obtain Ipv6 access configuration.
Not specified means disabling Ipv6 access.
 * @method void setIpv6(Ipv6 $Ipv6) Set Ipv6 access configuration.
Not specified means disabling Ipv6 access.
 * @method array getApplicationProxyRules() Obtain Rule details.
If not specified, no rules are created.
 * @method void setApplicationProxyRules(array $ApplicationProxyRules) Set Rule details.
If not specified, no rules are created.
 * @method AccelerateMainland getAccelerateMainland() Obtain Acceleration optimization configuration for the Chinese mainland. Not specified means disabling acceleration optimization for the Chinese mainland.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Acceleration optimization configuration for the Chinese mainland. Not specified means disabling acceleration optimization for the Chinese mainland.
 */
class CreateApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
     */
    public $ProxyName;

    /**
     * @var string Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
     */
    public $PlatType;

    /**
     * @var integer Whether security is enabled. Valid values:
<li>0: security off;</li>
<li>1: Enable security.</li>
     */
    public $SecurityType;

    /**
     * @var integer Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
     */
    public $AccelerateType;

    /**
     * @var string Layer 4 proxy mode. Valid values: <li>instance: instance mode.</li>Use default value instance if not specified.
     */
    public $ProxyType;

    /**
     * @var integer Session persistence duration. Value range: 30-3600. Unit: second.
If this field is not specified, the default value '600' will be used.
     */
    public $SessionPersistTime;

    /**
     * @var Ipv6 Ipv6 access configuration.
Not specified means disabling Ipv6 access.
     */
    public $Ipv6;

    /**
     * @var array Rule details.
If not specified, no rules are created.
     */
    public $ApplicationProxyRules;

    /**
     * @var AccelerateMainland Acceleration optimization configuration for the Chinese mainland. Not specified means disabling acceleration optimization for the Chinese mainland.
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyName When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
     * @param string $PlatType Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
     * @param integer $SecurityType Whether security is enabled. Valid values:
<li>0: security off;</li>
<li>1: Enable security.</li>
     * @param integer $AccelerateType Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
     * @param string $ProxyType Layer 4 proxy mode. Valid values: <li>instance: instance mode.</li>Use default value instance if not specified.
     * @param integer $SessionPersistTime Session persistence duration. Value range: 30-3600. Unit: second.
If this field is not specified, the default value '600' will be used.
     * @param Ipv6 $Ipv6 Ipv6 access configuration.
Not specified means disabling Ipv6 access.
     * @param array $ApplicationProxyRules Rule details.
If not specified, no rules are created.
     * @param AccelerateMainland $AccelerateMainland Acceleration optimization configuration for the Chinese mainland. Not specified means disabling acceleration optimization for the Chinese mainland.
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
