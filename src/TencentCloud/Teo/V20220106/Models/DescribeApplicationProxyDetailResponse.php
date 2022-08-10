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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationProxyDetail response structure.
 *
 * @method string getProxyId() Obtain Instance ID
 * @method void setProxyId(string $ProxyId) Set Instance ID
 * @method string getProxyName() Obtain Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
 * @method void setProxyName(string $ProxyName) Set Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
 * @method string getPlatType() Obtain Proxy mode. Valid values:
`ip`: Anycast IP
`domain`: CNAME
 * @method void setPlatType(string $PlatType) Set Proxy mode. Valid values:
`ip`: Anycast IP
`domain`: CNAME
 * @method integer getSecurityType() Obtain `0`: Disable security protection; `1`: Enable security protection.
 * @method void setSecurityType(integer $SecurityType) Set `0`: Disable security protection; `1`: Enable security protection.
 * @method integer getAccelerateType() Obtain `0`: Disable acceleration; `1`: Enable acceleration.
 * @method void setAccelerateType(integer $AccelerateType) Set `0`: Disable acceleration; `1`: Enable acceleration.
 * @method string getForwardClientIp() Obtain This field is moved to `Rule.ForwardClientIp`.
 * @method void setForwardClientIp(string $ForwardClientIp) Set This field is moved to `Rule.ForwardClientIp`.
 * @method boolean getSessionPersist() Obtain This field is moved to `Rule.SessionPersist`.
 * @method void setSessionPersist(boolean $SessionPersist) Set This field is moved to `Rule.SessionPersist`.
 * @method array getRule() Obtain List of rules
 * @method void setRule(array $Rule) Set List of rules
 * @method string getStatus() Obtain Status. Valid values:
`online`: Enable
`offline`: Disable
`progress`: Deploying
 * @method void setStatus(string $Status) Set Status. Valid values:
`online`: Enable
`offline`: Disable
`progress`: Deploying
 * @method array getScheduleValue() Obtain Scheduling information
 * @method void setScheduleValue(array $ScheduleValue) Set Scheduling information
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getZoneName() Obtain Site name
 * @method void setZoneName(string $ZoneName) Set Site name
 * @method integer getSessionPersistTime() Obtain Session persistence time
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Session persistence time
 * @method string getProxyType() Obtain Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
 * @method void setProxyType(string $ProxyType) Set Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
 * @method string getHostId() Obtain When `ProxyType=hostname`:
`ProxyName` indicates a specified domain name, such as test.123.com
`HostId` indicates a unique ID of the domain name.
 * @method void setHostId(string $HostId) Set When `ProxyType=hostname`:
`ProxyName` indicates a specified domain name, such as test.123.com
`HostId` indicates a unique ID of the domain name.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeApplicationProxyDetailResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $ProxyId;

    /**
     * @var string Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
     */
    public $ProxyName;

    /**
     * @var string Proxy mode. Valid values:
`ip`: Anycast IP
`domain`: CNAME
     */
    public $PlatType;

    /**
     * @var integer `0`: Disable security protection; `1`: Enable security protection.
     */
    public $SecurityType;

    /**
     * @var integer `0`: Disable acceleration; `1`: Enable acceleration.
     */
    public $AccelerateType;

    /**
     * @var string This field is moved to `Rule.ForwardClientIp`.
     */
    public $ForwardClientIp;

    /**
     * @var boolean This field is moved to `Rule.SessionPersist`.
     */
    public $SessionPersist;

    /**
     * @var array List of rules
     */
    public $Rule;

    /**
     * @var string Status. Valid values:
`online`: Enable
`offline`: Disable
`progress`: Deploying
     */
    public $Status;

    /**
     * @var array Scheduling information
     */
    public $ScheduleValue;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Site name
     */
    public $ZoneName;

    /**
     * @var integer Session persistence time
     */
    public $SessionPersistTime;

    /**
     * @var string Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
     */
    public $ProxyType;

    /**
     * @var string When `ProxyType=hostname`:
`ProxyName` indicates a specified domain name, such as test.123.com
`HostId` indicates a unique ID of the domain name.
     */
    public $HostId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ProxyId Instance ID
     * @param string $ProxyName Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
     * @param string $PlatType Proxy mode. Valid values:
`ip`: Anycast IP
`domain`: CNAME
     * @param integer $SecurityType `0`: Disable security protection; `1`: Enable security protection.
     * @param integer $AccelerateType `0`: Disable acceleration; `1`: Enable acceleration.
     * @param string $ForwardClientIp This field is moved to `Rule.ForwardClientIp`.
     * @param boolean $SessionPersist This field is moved to `Rule.SessionPersist`.
     * @param array $Rule List of rules
     * @param string $Status Status. Valid values:
`online`: Enable
`offline`: Disable
`progress`: Deploying
     * @param array $ScheduleValue Scheduling information
     * @param string $UpdateTime Update time
     * @param string $ZoneId Site ID
     * @param string $ZoneName Site name
     * @param integer $SessionPersistTime Session persistence time
     * @param string $ProxyType Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
     * @param string $HostId When `ProxyType=hostname`:
`ProxyName` indicates a specified domain name, such as test.123.com
`HostId` indicates a unique ID of the domain name.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
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

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScheduleValue",$param) and $param["ScheduleValue"] !== null) {
            $this->ScheduleValue = $param["ScheduleValue"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
