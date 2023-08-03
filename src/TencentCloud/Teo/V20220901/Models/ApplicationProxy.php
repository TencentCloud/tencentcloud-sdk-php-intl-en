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
 * Application proxy instance
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method string getProxyId() Obtain The proxy ID.
 * @method void setProxyId(string $ProxyId) Set The proxy ID.
 * @method string getProxyName() Obtain The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
 * @method void setProxyName(string $ProxyName) Set The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
 * @method string getProxyType() Obtain The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>
 * @method void setProxyType(string $ProxyType) Set The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>
 * @method string getPlatType() Obtain The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
 * @method void setPlatType(string $PlatType) Set The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
 * @method string getArea() Obtain Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
Default value: overseas.
 * @method void setArea(string $Area) Set Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
Default value: overseas.
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
 * @method integer getSessionPersistTime() Obtain The session persistence duration.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set The session persistence duration.
 * @method string getStatus() Obtain The rule status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
 * @method void setStatus(string $Status) Set The rule status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
 * @method string getBanStatus() Obtain The blocking status of the proxy. Values:
<li>`banned`: Blocked</li>
<li>`banning`: Blocking</li>
<li>`recover`: Unblocked</li>
<li>`recovering`: Unblocking</li>
 * @method void setBanStatus(string $BanStatus) Set The blocking status of the proxy. Values:
<li>`banned`: Blocked</li>
<li>`banning`: Blocking</li>
<li>`recover`: Unblocked</li>
<li>`recovering`: Unblocking</li>
 * @method array getScheduleValue() Obtain Scheduling information.
 * @method void setScheduleValue(array $ScheduleValue) Set Scheduling information.
 * @method string getHostId() Obtain When `ProxyType=hostname`:
This field indicates the unique ID of the subdomain name.
 * @method void setHostId(string $HostId) Set When `ProxyType=hostname`:
This field indicates the unique ID of the subdomain name.
 * @method Ipv6 getIpv6() Obtain The IPv6 access configuration.
 * @method void setIpv6(Ipv6 $Ipv6) Set The IPv6 access configuration.
 * @method string getUpdateTime() Obtain The update time.
 * @method void setUpdateTime(string $UpdateTime) Set The update time.
 * @method array getApplicationProxyRules() Obtain List of rules.
 * @method void setApplicationProxyRules(array $ApplicationProxyRules) Set List of rules.
 * @method AccelerateMainland getAccelerateMainland() Obtain Cross-MLC-border acceleration.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Cross-MLC-border acceleration.
 */
class ApplicationProxy extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The site name.
     */
    public $ZoneName;

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
     * @var string The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>
     */
    public $ProxyType;

    /**
     * @var string The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
     */
    public $PlatType;

    /**
     * @var string Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
Default value: overseas.
     */
    public $Area;

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
     * @var integer The session persistence duration.
     */
    public $SessionPersistTime;

    /**
     * @var string The rule status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
     */
    public $Status;

    /**
     * @var string The blocking status of the proxy. Values:
<li>`banned`: Blocked</li>
<li>`banning`: Blocking</li>
<li>`recover`: Unblocked</li>
<li>`recovering`: Unblocking</li>
     */
    public $BanStatus;

    /**
     * @var array Scheduling information.
     */
    public $ScheduleValue;

    /**
     * @var string When `ProxyType=hostname`:
This field indicates the unique ID of the subdomain name.
     */
    public $HostId;

    /**
     * @var Ipv6 The IPv6 access configuration.
     */
    public $Ipv6;

    /**
     * @var string The update time.
     */
    public $UpdateTime;

    /**
     * @var array List of rules.
     */
    public $ApplicationProxyRules;

    /**
     * @var AccelerateMainland Cross-MLC-border acceleration.
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId The site ID.
     * @param string $ZoneName The site name.
     * @param string $ProxyId The proxy ID.
     * @param string $ProxyName The domain name or subdomain name when `ProxyType=hostname`.
The instance name when `ProxyType=instance`.
     * @param string $ProxyType The proxy type. Values:
<li>`hostname`: The proxy is created by subdomain name.</li>
<li>`instance`: The proxy is created by instance.</li>
     * @param string $PlatType The scheduling mode. Values:
<li>`ip`: Schedule via Anycast IP.</li>
<li>`domain`: Schedule via CNAME.</li>
     * @param string $Area Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
Default value: overseas.
     * @param integer $SecurityType Whether to enable security protection. Values:
<li>`0`: Disable security protection.</li>
<li>`1`: Enable security protection.</li>
     * @param integer $AccelerateType Whether to enable acceleration. Values:
<li>`0`: Disable acceleration.</li>
<li>`1`: Enable acceleration.</li>
     * @param integer $SessionPersistTime The session persistence duration.
     * @param string $Status The rule status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
<li>`progress`: Deploying</li>
<li>`stopping`: Disabling</li>
<li>`fail`: Failed to deploy or disable</li>
     * @param string $BanStatus The blocking status of the proxy. Values:
<li>`banned`: Blocked</li>
<li>`banning`: Blocking</li>
<li>`recover`: Unblocked</li>
<li>`recovering`: Unblocking</li>
     * @param array $ScheduleValue Scheduling information.
     * @param string $HostId When `ProxyType=hostname`:
This field indicates the unique ID of the subdomain name.
     * @param Ipv6 $Ipv6 The IPv6 access configuration.
     * @param string $UpdateTime The update time.
     * @param array $ApplicationProxyRules List of rules.
     * @param AccelerateMainland $AccelerateMainland Cross-MLC-border acceleration.
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("PlatType",$param) and $param["PlatType"] !== null) {
            $this->PlatType = $param["PlatType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("ScheduleValue",$param) and $param["ScheduleValue"] !== null) {
            $this->ScheduleValue = $param["ScheduleValue"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
