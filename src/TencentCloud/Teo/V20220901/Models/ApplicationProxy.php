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
 * Application proxy instance
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getZoneName() Obtain Site name.
 * @method void setZoneName(string $ZoneName) Set Site name.
 * @method string getProxyId() Obtain Proxy ID.
 * @method void setProxyId(string $ProxyId) Set Proxy ID.
 * @method string getProxyName() Obtain When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
 * @method void setProxyName(string $ProxyName) Set When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
 * @method string getProxyType() Obtain L4 proxy mode. Valid values:
<li>`hostname`: Create by subdomain name;</li>
<li>`instance`: Create by instance.</li>
 * @method void setProxyType(string $ProxyType) Set L4 proxy mode. Valid values:
<li>`hostname`: Create by subdomain name;</li>
<li>`instance`: Create by instance.</li>
 * @method string getPlatType() Obtain Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
 * @method void setPlatType(string $PlatType) Set Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
 * @method string getArea() Obtain Acceleration region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
Default value: overseas
 * @method void setArea(string $Area) Set Acceleration region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
Default value: overseas
 * @method integer getSecurityType() Obtain Whether security is enabled. Valid values:
<li>0: Disable security;</li>
<li>1: Enable security.</li>
 * @method void setSecurityType(integer $SecurityType) Set Whether security is enabled. Valid values:
<li>0: Disable security;</li>
<li>1: Enable security.</li>
 * @method integer getAccelerateType() Obtain Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
 * @method void setAccelerateType(integer $AccelerateType) Set Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
 * @method integer getSessionPersistTime() Obtain Session hold time, in seconds.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Session hold time, in seconds.
 * @method string getStatus() Obtain Status. Valid values:
<li>`online`: Enable;</li>
<li>`offline`: Disable;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
 * @method void setStatus(string $Status) Set Status. Valid values:
<li>`online`: Enable;</li>
<li>`offline`: Disable;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
 * @method string getBanStatus() Obtain Blocking status. Valid values:
<li>banned: blocked;</li>
<li>banning: Being banned;</li>
<li>recover: unblocked;</li>
<li>`recovering`: The name server is being unblocked.</li>
 * @method void setBanStatus(string $BanStatus) Set Blocking status. Valid values:
<li>banned: blocked;</li>
<li>banning: Being banned;</li>
<li>recover: unblocked;</li>
<li>`recovering`: The name server is being unblocked.</li>
 * @method array getScheduleValue() Obtain Scheduling information.
 * @method void setScheduleValue(array $ScheduleValue) Set Scheduling information.
 * @method string getHostId() Obtain When ProxyType=hostname:
Indicates the unique ID of the proxy acceleration.
 * @method void setHostId(string $HostId) Set When ProxyType=hostname:
Indicates the unique ID of the proxy acceleration.
 * @method Ipv6 getIpv6() Obtain Ipv6 access configuration.
 * @method void setIpv6(Ipv6 $Ipv6) Set Ipv6 access configuration.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method array getApplicationProxyRules() Obtain Rule list.
 * @method void setApplicationProxyRules(array $ApplicationProxyRules) Set Rule list.
 * @method AccelerateMainland getAccelerateMainland() Obtain Acceleration optimization configuration for the Chinese mainland.
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) Set Acceleration optimization configuration for the Chinese mainland.
 */
class ApplicationProxy extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Site name.
     */
    public $ZoneName;

    /**
     * @var string Proxy ID.
     */
    public $ProxyId;

    /**
     * @var string When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
     */
    public $ProxyName;

    /**
     * @var string L4 proxy mode. Valid values:
<li>`hostname`: Create by subdomain name;</li>
<li>`instance`: Create by instance.</li>
     */
    public $ProxyType;

    /**
     * @var string Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
     */
    public $PlatType;

    /**
     * @var string Acceleration region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
Default value: overseas
     */
    public $Area;

    /**
     * @var integer Whether security is enabled. Valid values:
<li>0: Disable security;</li>
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
     * @var integer Session hold time, in seconds.
     */
    public $SessionPersistTime;

    /**
     * @var string Status. Valid values:
<li>`online`: Enable;</li>
<li>`offline`: Disable;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
     */
    public $Status;

    /**
     * @var string Blocking status. Valid values:
<li>banned: blocked;</li>
<li>banning: Being banned;</li>
<li>recover: unblocked;</li>
<li>`recovering`: The name server is being unblocked.</li>
     */
    public $BanStatus;

    /**
     * @var array Scheduling information.
     */
    public $ScheduleValue;

    /**
     * @var string When ProxyType=hostname:
Indicates the unique ID of the proxy acceleration.
     */
    public $HostId;

    /**
     * @var Ipv6 Ipv6 access configuration.
     */
    public $Ipv6;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var array Rule list.
     */
    public $ApplicationProxyRules;

    /**
     * @var AccelerateMainland Acceleration optimization configuration for the Chinese mainland.
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ZoneName Site name.
     * @param string $ProxyId Proxy ID.
     * @param string $ProxyName When ProxyType=hostname, it indicates a domain name or subdomain.
When ProxyType=instance, it indicates the proxy name.
     * @param string $ProxyType L4 proxy mode. Valid values:
<li>`hostname`: Create by subdomain name;</li>
<li>`instance`: Create by instance.</li>
     * @param string $PlatType Scheduling mode. Valid values:
<li>`ip`: Anycast IP;</li>
<li>`domain`: CNAME.</li>
     * @param string $Area Acceleration region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
Default value: overseas
     * @param integer $SecurityType Whether security is enabled. Valid values:
<li>0: Disable security;</li>
<li>1: Enable security.</li>
     * @param integer $AccelerateType Whether to enable acceleration. Valid values:
<li>0: disable acceleration;</li>
<li>1: Enable acceleration.</li>
     * @param integer $SessionPersistTime Session hold time, in seconds.
     * @param string $Status Status. Valid values:
<li>`online`: Enable;</li>
<li>`offline`: Disable;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
     * @param string $BanStatus Blocking status. Valid values:
<li>banned: blocked;</li>
<li>banning: Being banned;</li>
<li>recover: unblocked;</li>
<li>`recovering`: The name server is being unblocked.</li>
     * @param array $ScheduleValue Scheduling information.
     * @param string $HostId When ProxyType=hostname:
Indicates the unique ID of the proxy acceleration.
     * @param Ipv6 $Ipv6 Ipv6 access configuration.
     * @param string $UpdateTime Update time.
     * @param array $ApplicationProxyRules Rule list.
     * @param AccelerateMainland $AccelerateMainland Acceleration optimization configuration for the Chinese mainland.
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
