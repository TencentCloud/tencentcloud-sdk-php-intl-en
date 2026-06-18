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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB instance and listener information
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getListenerName() Obtain listener name
 * @method void setListenerName(string $ListenerName) Set listener name
 * @method string getLoadBalancerId() Obtain CLB Id
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB Id
 * @method string getLoadBalancerName() Obtain CLB name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB name
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getVip() Obtain Load balancing ip
 * @method void setVip(string $Vip) Set Load balancing ip
 * @method integer getVPort() Obtain Port.
 * @method void setVPort(integer $VPort) Set Port.
 * @method string getZone() Obtain Region.
 * @method void setZone(string $Zone) Set Region.
 * @method integer getNumericalVpcId() Obtain VPC id
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set VPC id
 * @method string getLoadBalancerType() Obtain CLB Type
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB Type
 * @method string getDomain() Obtain Listener Domain Name
 * @method void setDomain(string $Domain) Set Listener Domain Name
 * @method string getLoadBalancerDomain() Obtain CLB domain name
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set CLB domain name
 */
class ClbListenerListInfo extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string listener name
     */
    public $ListenerName;

    /**
     * @var string CLB Id
     */
    public $LoadBalancerId;

    /**
     * @var string CLB name
     */
    public $LoadBalancerName;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Load balancing ip
     */
    public $Vip;

    /**
     * @var integer Port.
     */
    public $VPort;

    /**
     * @var string Region.
     */
    public $Zone;

    /**
     * @var integer VPC id
     */
    public $NumericalVpcId;

    /**
     * @var string CLB Type
     */
    public $LoadBalancerType;

    /**
     * @var string Listener Domain Name
     */
    public $Domain;

    /**
     * @var string CLB domain name
     */
    public $LoadBalancerDomain;

    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName listener name
     * @param string $LoadBalancerId CLB Id
     * @param string $LoadBalancerName CLB name
     * @param string $Protocol Protocol
     * @param string $Region Region.
     * @param string $Vip Load balancing ip
     * @param integer $VPort Port.
     * @param string $Zone Region.
     * @param integer $NumericalVpcId VPC id
     * @param string $LoadBalancerType CLB Type
     * @param string $Domain Listener Domain Name
     * @param string $LoadBalancerDomain CLB domain name
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }
    }
}
