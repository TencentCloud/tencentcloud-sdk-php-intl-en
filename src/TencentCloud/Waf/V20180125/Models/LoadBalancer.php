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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB listener
 *
 * @method string getLoadBalancerId() Obtain CLB LD's ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB LD's ID
 * @method string getLoadBalancerName() Obtain CLB LD's Name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB LD's Name
 * @method string getListenerId() Obtain CLB Listener ID
 * @method void setListenerId(string $ListenerId) Set CLB Listener ID
 * @method string getListenerName() Obtain Name of CLB Listener
 * @method void setListenerName(string $ListenerName) Set Name of CLB Listener
 * @method string getVip() Obtain IP of CLB Instance
 * @method void setVip(string $Vip) Set IP of CLB Instance
 * @method integer getVport() Obtain Port of the CLB Instance
 * @method void setVport(integer $Vport) Set Port of the CLB Instance
 * @method string getRegion() Obtain CLB LD's Region
 * @method void setRegion(string $Region) Set CLB LD's Region
 * @method string getProtocol() Obtain Listener Protocol, HTTP, HTTPS
 * @method void setProtocol(string $Protocol) Set Listener Protocol, HTTP, HTTPS
 * @method string getZone() Obtain Zone of the CLB Listener
 * @method void setZone(string $Zone) Set Zone of the CLB Listener
 * @method integer getNumericalVpcId() Obtain CLB's VPC ID, -1 for public network, fill in the actual number for private network

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set CLB's VPC ID, -1 for public network, fill in the actual number for private network

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerType() Obtain CLB Network Type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerType(string $LoadBalancerType) Set CLB Network Type

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLoadBalancerDomain() Obtain CLB Domain Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) Set CLB Domain Name

Note: This field may return null, indicating that no valid values can be obtained.
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string CLB LD's ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB LD's Name
     */
    public $LoadBalancerName;

    /**
     * @var string CLB Listener ID
     */
    public $ListenerId;

    /**
     * @var string Name of CLB Listener
     */
    public $ListenerName;

    /**
     * @var string IP of CLB Instance
     */
    public $Vip;

    /**
     * @var integer Port of the CLB Instance
     */
    public $Vport;

    /**
     * @var string CLB LD's Region
     */
    public $Region;

    /**
     * @var string Listener Protocol, HTTP, HTTPS
     */
    public $Protocol;

    /**
     * @var string Zone of the CLB Listener
     */
    public $Zone;

    /**
     * @var integer CLB's VPC ID, -1 for public network, fill in the actual number for private network

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumericalVpcId;

    /**
     * @var string CLB Network Type

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerType;

    /**
     * @var string CLB Domain Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerDomain;

    /**
     * @param string $LoadBalancerId CLB LD's ID
     * @param string $LoadBalancerName CLB LD's Name
     * @param string $ListenerId CLB Listener ID
     * @param string $ListenerName Name of CLB Listener
     * @param string $Vip IP of CLB Instance
     * @param integer $Vport Port of the CLB Instance
     * @param string $Region CLB LD's Region
     * @param string $Protocol Listener Protocol, HTTP, HTTPS
     * @param string $Zone Zone of the CLB Listener
     * @param integer $NumericalVpcId CLB's VPC ID, -1 for public network, fill in the actual number for private network

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerType CLB Network Type

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LoadBalancerDomain CLB Domain Name

Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
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

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }
    }
}
