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
 * ModifyApplicationProxy request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getProxyId() Obtain The proxy ID.
 * @method void setProxyId(string $ProxyId) Set The proxy ID.
 * @method string getProxyName() Obtain The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
 * @method void setProxyName(string $ProxyName) Set The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
 * @method integer getSessionPersistTime() Obtain The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
 * @method string getProxyType() Obtain The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>If not specified, this field uses the default value `instance`.
 * @method void setProxyType(string $ProxyType) Set The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>If not specified, this field uses the default value `instance`.
 * @method Ipv6 getIpv6() Obtain The IPv6 access configuration. The original configuration will apply if this field is not specified.
 * @method void setIpv6(Ipv6 $Ipv6) Set The IPv6 access configuration. The original configuration will apply if this field is not specified.
 */
class ModifyApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The proxy ID.
     */
    public $ProxyId;

    /**
     * @var string The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
     */
    public $ProxyName;

    /**
     * @var integer The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
     */
    public $SessionPersistTime;

    /**
     * @var string The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>If not specified, this field uses the default value `instance`.
     */
    public $ProxyType;

    /**
     * @var Ipv6 The IPv6 access configuration. The original configuration will apply if this field is not specified.
     */
    public $Ipv6;

    /**
     * @param string $ZoneId The site ID.
     * @param string $ProxyId The proxy ID.
     * @param string $ProxyName The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
     * @param integer $SessionPersistTime The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
     * @param string $ProxyType The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>If not specified, this field uses the default value `instance`.
     * @param Ipv6 $Ipv6 The IPv6 access configuration. The original configuration will apply if this field is not specified.
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

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }
    }
}
