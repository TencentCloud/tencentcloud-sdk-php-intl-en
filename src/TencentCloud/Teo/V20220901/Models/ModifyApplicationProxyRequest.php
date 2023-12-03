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
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getProxyId() Obtain Proxy ID.
 * @method void setProxyId(string $ProxyId) Set Proxy ID.
 * @method string getProxyName() Obtain Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
 * @method void setProxyName(string $ProxyName) Set Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
 * @method integer getSessionPersistTime() Obtain The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
 * @method string getProxyType() Obtain L4 proxy mode. Valid values: 
<li>instance: Instance mode. </li>If it is not specified, instance is used by default.
 * @method void setProxyType(string $ProxyType) Set L4 proxy mode. Valid values: 
<li>instance: Instance mode. </li>If it is not specified, instance is used by default.
 * @method Ipv6 getIpv6() Obtain IPv6 access configuration. The original configuration will apply if it is not specified.
 * @method void setIpv6(Ipv6 $Ipv6) Set IPv6 access configuration. The original configuration will apply if it is not specified.
 * @method AccelerateMainland getAccelerateMainland() Obtain Cross-MLC-border acceleration. The original configuration will apply if it is not specified.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Cross-MLC-border acceleration. The original configuration will apply if it is not specified.
 */
class ModifyApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Proxy ID.
     */
    public $ProxyId;

    /**
     * @var string Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
     */
    public $ProxyName;

    /**
     * @var integer The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
     */
    public $SessionPersistTime;

    /**
     * @var string L4 proxy mode. Valid values: 
<li>instance: Instance mode. </li>If it is not specified, instance is used by default.
     */
    public $ProxyType;

    /**
     * @var Ipv6 IPv6 access configuration. The original configuration will apply if it is not specified.
     */
    public $Ipv6;

    /**
     * @var AccelerateMainland Cross-MLC-border acceleration. The original configuration will apply if it is not specified.
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ProxyId Proxy ID.
     * @param string $ProxyName Domain name or subdomain name when `ProxyType=hostname`; 
Instance name when `ProxyType=instance`.
     * @param integer $SessionPersistTime The session persistence duration. Value range: 30-3600 (in seconds).
The original configuration will apply if this field is not specified.
     * @param string $ProxyType L4 proxy mode. Valid values: 
<li>instance: Instance mode. </li>If it is not specified, instance is used by default.
     * @param Ipv6 $Ipv6 IPv6 access configuration. The original configuration will apply if it is not specified.
     * @param AccelerateMainland $AccelerateMainland Cross-MLC-border acceleration. The original configuration will apply if it is not specified.
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

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainland();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }
    }
}
