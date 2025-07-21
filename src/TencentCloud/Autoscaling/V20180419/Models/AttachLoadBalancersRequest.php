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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachLoadBalancers request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
 * @method array getLoadBalancerIds() Obtain Specifies a list of classic clb ids. each scaling group can bind a maximum of 20 classic clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set Specifies a list of classic clb ids. each scaling group can bind a maximum of 20 classic clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method array getForwardLoadBalancers() Obtain Specifies the list of load balancers. each scaling group can bind a maximum of 100 application clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) Set Specifies the list of load balancers. each scaling group can bind a maximum of 100 application clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 */
class AttachLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupId;

    /**
     * @var array Specifies a list of classic clb ids. each scaling group can bind a maximum of 20 classic clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $LoadBalancerIds;

    /**
     * @var array Specifies the list of load balancers. each scaling group can bind a maximum of 100 application clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $ForwardLoadBalancers;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. obtain the scaling group ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1), and retrieve AutoScalingGroupId from the returned information.
     * @param array $LoadBalancerIds Specifies a list of classic clb ids. each scaling group can bind a maximum of 20 classic clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     * @param array $ForwardLoadBalancers Specifies the list of load balancers. each scaling group can bind a maximum of 100 application clbs. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
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

        if (array_key_exists("ForwardLoadBalancers",$param) and $param["ForwardLoadBalancers"] !== null) {
            $this->ForwardLoadBalancers = [];
            foreach ($param["ForwardLoadBalancers"] as $key => $value){
                $obj = new ForwardLoadBalancer();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancers, $obj);
            }
        }
    }
}
