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
 * ModifyApplicationProxy request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getProxyId() Obtain ID of the proxy
 * @method void setProxyId(string $ProxyId) Set ID of the proxy
 * @method string getProxyName() Obtain Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
 * @method void setProxyName(string $ProxyName) Set Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
 * @method string getForwardClientIp() Obtain This parameter is disused.
 * @method void setForwardClientIp(string $ForwardClientIp) Set This parameter is disused.
 * @method boolean getSessionPersist() Obtain This parameter is disused.
 * @method void setSessionPersist(boolean $SessionPersist) Set This parameter is disused.
 * @method integer getSessionPersistTime() Obtain Session persistence time. Value range: 30-3600 (in seconds).
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Session persistence time. Value range: 30-3600 (in seconds).
 * @method string getProxyType() Obtain Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
 * @method void setProxyType(string $ProxyType) Set Specifies how a layer-4 proxy is created.
`hostname`: Create by subdomain name
`instance`: Create by instance
 */
class ModifyApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string ID of the proxy
     */
    public $ProxyId;

    /**
     * @var string Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
     */
    public $ProxyName;

    /**
     * @var string This parameter is disused.
     */
    public $ForwardClientIp;

    /**
     * @var boolean This parameter is disused.
     */
    public $SessionPersist;

    /**
     * @var integer Session persistence time. Value range: 30-3600 (in seconds).
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
     * @param string $ProxyId ID of the proxy
     * @param string $ProxyName Name of the proxy:
Domain name or subdomain name when `ProxyType=hostname`
Instance name when `ProxyType=instance`
     * @param string $ForwardClientIp This parameter is disused.
     * @param boolean $SessionPersist This parameter is disused.
     * @param integer $SessionPersistTime Session persistence time. Value range: 30-3600 (in seconds).
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }
    }
}
