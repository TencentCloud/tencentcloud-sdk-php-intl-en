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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateDDoSEipLoadBalancer request structure.
 *
 * @method string getInstanceId() Obtain Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
 * @method string getEip() Obtain EIP of the Anti-DDoS instance ID.
 * @method void setEip(string $Eip) Set EIP of the Anti-DDoS instance ID.
 * @method string getLoadBalancerID() Obtain ID of the CLB to bind, such as `lb-0000002i`. It can be queried in the console or obtained from `LoadBalancerId` returned by the `DescribeLoadBalancers` API.
 * @method void setLoadBalancerID(string $LoadBalancerID) Set ID of the CLB to bind, such as `lb-0000002i`. It can be queried in the console or obtained from `LoadBalancerId` returned by the `DescribeLoadBalancers` API.
 * @method string getLoadBalancerRegion() Obtain Region of the CLB instance, such as `ap-hongkong`.
 * @method void setLoadBalancerRegion(string $LoadBalancerRegion) Set Region of the CLB instance, such as `ap-hongkong`.
 * @method string getVip() Obtain CLB private IP
 * @method void setVip(string $Vip) Set CLB private IP
 */
class AssociateDDoSEipLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
     */
    public $InstanceId;

    /**
     * @var string EIP of the Anti-DDoS instance ID.
     */
    public $Eip;

    /**
     * @var string ID of the CLB to bind, such as `lb-0000002i`. It can be queried in the console or obtained from `LoadBalancerId` returned by the `DescribeLoadBalancers` API.
     */
    public $LoadBalancerID;

    /**
     * @var string Region of the CLB instance, such as `ap-hongkong`.
     */
    public $LoadBalancerRegion;

    /**
     * @var string CLB private IP
     */
    public $Vip;

    /**
     * @param string $InstanceId Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
     * @param string $Eip EIP of the Anti-DDoS instance ID.
     * @param string $LoadBalancerID ID of the CLB to bind, such as `lb-0000002i`. It can be queried in the console or obtained from `LoadBalancerId` returned by the `DescribeLoadBalancers` API.
     * @param string $LoadBalancerRegion Region of the CLB instance, such as `ap-hongkong`.
     * @param string $Vip CLB private IP
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("LoadBalancerID",$param) and $param["LoadBalancerID"] !== null) {
            $this->LoadBalancerID = $param["LoadBalancerID"];
        }

        if (array_key_exists("LoadBalancerRegion",$param) and $param["LoadBalancerRegion"] !== null) {
            $this->LoadBalancerRegion = $param["LoadBalancerRegion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
