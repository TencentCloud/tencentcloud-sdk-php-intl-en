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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB instance and listener information
 *
 * @method string getListenerId() Obtain Listener ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setListenerId(string $ListenerId) Set Listener ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getListenerName() Obtain The listener name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setListenerName(string $ListenerName) Set The listener name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerId() Obtain Load balancer ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Load balancer ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerName() Obtain CLB instance name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Network protocol
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Network protocol
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain CLB instance IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set CLB instance IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getVPort() Obtain Port
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVPort(integer $VPort) Set Port
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getNumericalVpcId() Obtain VPC ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set VPC ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerType() Obtain CLB instance type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB instance type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Listener domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Listener domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerDomain() Obtain Load balancer domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set Load balancer domain name
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class ClbListenerListInfo extends AbstractModel
{
    /**
     * @var string Listener ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ListenerId;

    /**
     * @var string The listener name.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ListenerName;

    /**
     * @var string Load balancer ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerName;

    /**
     * @var string Network protocol
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string CLB instance IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer Port
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VPort;

    /**
     * @var string Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var integer VPC ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NumericalVpcId;

    /**
     * @var string CLB instance type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerType;

    /**
     * @var string Listener domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Load balancer domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerDomain;

    /**
     * @param string $ListenerId Listener ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ListenerName The listener name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerId Load balancer ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerName CLB instance name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Protocol Network protocol
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Vip CLB instance IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $VPort Port
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Zone Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $NumericalVpcId VPC ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerType CLB instance type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Domain Listener domain name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerDomain Load balancer domain name
Note: This field may return·null, indicating that no valid values can be obtained.
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
