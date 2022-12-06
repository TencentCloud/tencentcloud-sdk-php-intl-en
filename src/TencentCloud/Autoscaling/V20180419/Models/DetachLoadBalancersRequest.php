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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachLoadBalancers request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID
 * @method array getLoadBalancerIds() Obtain List of classic CLB IDs. Up to 20 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set List of classic CLB IDs. Up to 20 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
 * @method array getForwardLoadBalancerIdentifications() Obtain List of application CLB IDs. Up to 100 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
 * @method void setForwardLoadBalancerIdentifications(array $ForwardLoadBalancerIdentifications) Set List of application CLB IDs. Up to 100 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
 */
class DetachLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var array List of classic CLB IDs. Up to 20 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
     */
    public $LoadBalancerIds;

    /**
     * @var array List of application CLB IDs. Up to 100 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
     */
    public $ForwardLoadBalancerIdentifications;

    /**
     * @param string $AutoScalingGroupId Scaling group ID
     * @param array $LoadBalancerIds List of classic CLB IDs. Up to 20 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
     * @param array $ForwardLoadBalancerIdentifications List of application CLB IDs. Up to 100 IDs are allowed. `LoadBalancerIds` and `ForwardLoadBalancerIdentifications` cannot be specified at the same time.
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ForwardLoadBalancerIdentifications",$param) and $param["ForwardLoadBalancerIdentifications"] !== null) {
            $this->ForwardLoadBalancerIdentifications = [];
            foreach ($param["ForwardLoadBalancerIdentifications"] as $key => $value){
                $obj = new ForwardLoadBalancerIdentification();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancerIdentifications, $obj);
            }
        }
    }
}
