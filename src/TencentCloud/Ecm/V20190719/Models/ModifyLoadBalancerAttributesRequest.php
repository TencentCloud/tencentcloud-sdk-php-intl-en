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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancerAttributes request structure.
 *
 * @method string getLoadBalancerId() Obtain Unique CLB ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Unique CLB ID
 * @method string getLoadBalancerName() Obtain CLB instance name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
 * @method LoadBalancerInternetAccessible getInternetChargeInfo() Obtain Network billing and bandwidth parameters
 * @method void setInternetChargeInfo(LoadBalancerInternetAccessible $InternetChargeInfo) Set Network billing and bandwidth parameters
 * @method boolean getLoadBalancerPassToTarget() Obtain Whether to allow ELB traffic to the target group. `true`: allows ELB traffic to the target group and verifies security groups only on ELB; `false`: denies ELB traffic to the target group and verifies security groups on both ELB and backend instances.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Whether to allow ELB traffic to the target group. `true`: allows ELB traffic to the target group and verifies security groups only on ELB; `false`: denies ELB traffic to the target group and verifies security groups on both ELB and backend instances.
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string Unique CLB ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name
     */
    public $LoadBalancerName;

    /**
     * @var LoadBalancerInternetAccessible Network billing and bandwidth parameters
     */
    public $InternetChargeInfo;

    /**
     * @var boolean Whether to allow ELB traffic to the target group. `true`: allows ELB traffic to the target group and verifies security groups only on ELB; `false`: denies ELB traffic to the target group and verifies security groups on both ELB and backend instances.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @param string $LoadBalancerId Unique CLB ID
     * @param string $LoadBalancerName CLB instance name
     * @param LoadBalancerInternetAccessible $InternetChargeInfo Network billing and bandwidth parameters
     * @param boolean $LoadBalancerPassToTarget Whether to allow ELB traffic to the target group. `true`: allows ELB traffic to the target group and verifies security groups only on ELB; `false`: denies ELB traffic to the target group and verifies security groups on both ELB and backend instances.
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

        if (array_key_exists("InternetChargeInfo",$param) and $param["InternetChargeInfo"] !== null) {
            $this->InternetChargeInfo = new LoadBalancerInternetAccessible();
            $this->InternetChargeInfo->deserialize($param["InternetChargeInfo"]);
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }
    }
}
