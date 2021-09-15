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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binding details including listener name, protocol, url and vport
 *
 * @method string getLoadBalancerId() Obtain Specifies the ID of CLB to be bound
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Specifies the ID of CLB to be bound
 * @method string getListenerId() Obtain Specifies the ID of listener to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set Specifies the ID of listener to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Specifies the domain name to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Specifies the domain name to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLocationId() Obtain Sets the bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLocationId(string $LocationId) Set Sets the bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain Listener name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setListenerName(string $ListenerName) Set Listener name.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Listener protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Listener protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain Listener port.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set Listener port.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUconfigId() Obtain Configuration ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUconfigId(string $UconfigId) Set Configuration ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class BindDetailItem extends AbstractModel
{
    /**
     * @var string Specifies the ID of CLB to be bound
     */
    public $LoadBalancerId;

    /**
     * @var string Specifies the ID of listener to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string Specifies the domain name to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Sets the bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LocationId;

    /**
     * @var string Listener name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ListenerName;

    /**
     * @var string Listener protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var integer Listener port.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var string URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Configuration ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UconfigId;

    /**
     * @param string $LoadBalancerId Specifies the ID of CLB to be bound
     * @param string $ListenerId Specifies the ID of listener to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Domain Specifies the domain name to be bound
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LocationId Sets the bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ListenerName Listener name.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Protocol Listener protocol.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Vport Listener port.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Url URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UconfigId Configuration ID.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }
    }
}
