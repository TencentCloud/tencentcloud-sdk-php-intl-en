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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binding details including listener name, protocol, url and vport
 *
 * @method string getLoadBalancerId() Obtain Specifies the ID of CLB to be bound
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Specifies the ID of CLB to be bound
 * @method string getListenerId() Obtain ID of the listener bound to the configuration
 * @method void setListenerId(string $ListenerId) Set ID of the listener bound to the configuration
 * @method string getDomain() Obtain Domain name bound to the configuration
 * @method void setDomain(string $Domain) Set Domain name bound to the configuration
 * @method string getLocationId() Obtain Rule bound to the configuration
 * @method void setLocationId(string $LocationId) Set Rule bound to the configuration
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method string getProtocol() Obtain Listener protocol
 * @method void setProtocol(string $Protocol) Set Listener protocol
 * @method integer getVport() Obtain Listener port
 * @method void setVport(integer $Vport) Set Listener port
 * @method string getUrl() Obtain URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUconfigId() Obtain Configuration ID.
 * @method void setUconfigId(string $UconfigId) Set Configuration ID.
 */
class BindDetailItem extends AbstractModel
{
    /**
     * @var string Specifies the ID of CLB to be bound
     */
    public $LoadBalancerId;

    /**
     * @var string ID of the listener bound to the configuration
     */
    public $ListenerId;

    /**
     * @var string Domain name bound to the configuration
     */
    public $Domain;

    /**
     * @var string Rule bound to the configuration
     */
    public $LocationId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var string Listener protocol
     */
    public $Protocol;

    /**
     * @var integer Listener port
     */
    public $Vport;

    /**
     * @var string URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Configuration ID.
     */
    public $UconfigId;

    /**
     * @param string $LoadBalancerId Specifies the ID of CLB to be bound
     * @param string $ListenerId ID of the listener bound to the configuration
     * @param string $Domain Domain name bound to the configuration
     * @param string $LocationId Rule bound to the configuration
     * @param string $ListenerName Listener name
     * @param string $Protocol Listener protocol
     * @param integer $Vport Listener port
     * @param string $Url URL of the location.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UconfigId Configuration ID.
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
