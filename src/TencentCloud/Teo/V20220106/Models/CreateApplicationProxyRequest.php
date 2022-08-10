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
 * CreateApplicationProxy request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getZoneName() Obtain Site name
 * @method void setZoneName(string $ZoneName) Set Site name
 * @method string getProxyName() Obtain Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
 * @method void setProxyName(string $ProxyName) Set Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
 * @method string getPlatType() Obtain Scheduling mode. Values:
`ip`: Anycast IP
`domain`: CNAME
 * @method void setPlatType(string $PlatType) Set Scheduling mode. Values:
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
 * @method array getRule() Obtain Rule details
 * @method void setRule(array $Rule) Set Rule details
 * @method integer getSessionPersistTime() Obtain Session persistence duration. Value range: 30-3600 (in seconds).
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Session persistence duration. Value range: 30-3600 (in seconds).
 * @method string getProxyType() Obtain Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
 * @method void setProxyType(string $ProxyType) Set Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
 */
class CreateApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Site name
     */
    public $ZoneName;

    /**
     * @var string Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
     */
    public $ProxyName;

    /**
     * @var string Scheduling mode. Values:
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
     * @var array Rule details
     */
    public $Rule;

    /**
     * @var integer Session persistence duration. Value range: 30-3600 (in seconds).
     */
    public $SessionPersistTime;

    /**
     * @var string Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
     */
    public $ProxyType;

    /**
     * @param string $ZoneId Site ID
     * @param string $ZoneName Site name
     * @param string $ProxyName Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
     * @param string $PlatType Scheduling mode. Values:
`ip`: Anycast IP
`domain`: CNAME
     * @param integer $SecurityType `0`: Disable security protection; `1`: Enable security protection.
     * @param integer $AccelerateType `0`: Disable acceleration; `1`: Enable acceleration.
     * @param string $ForwardClientIp This field is moved to `Rule.ForwardClientIp`.
     * @param boolean $SessionPersist This field is moved to `Rule.SessionPersist`.
     * @param array $Rule Rule details
     * @param integer $SessionPersistTime Session persistence duration. Value range: 30-3600 (in seconds).
     * @param string $ProxyType Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
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

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }
    }
}
