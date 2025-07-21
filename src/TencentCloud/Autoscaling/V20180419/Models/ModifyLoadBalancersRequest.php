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
 * ModifyLoadBalancers request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID. you can obtain the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID. you can obtain the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
 * @method array getLoadBalancerIds() Obtain List of classic clb ids. currently, the maximum length is 20. you cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set List of classic clb ids. currently, the maximum length is 20. you cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method array getForwardLoadBalancers() Obtain Specifies the list of load balancers with a current maximum length of 100. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) Set Specifies the list of load balancers with a current maximum length of 100. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method string getLoadBalancersCheckPolicy() Obtain CLB verification policy. Valid values: ALL and DIFF. Default value: ALL.
<li>ALL: The CLB passes the verification only when all CLB parameters are valid. Otherwise, a verification error occurs.</li>
<li>DIFF: The CLB passes the verification only when the CLB parameters with changes are valid. Otherwise, a verification error occurs.</li>
 * @method void setLoadBalancersCheckPolicy(string $LoadBalancersCheckPolicy) Set CLB verification policy. Valid values: ALL and DIFF. Default value: ALL.
<li>ALL: The CLB passes the verification only when all CLB parameters are valid. Otherwise, a verification error occurs.</li>
<li>DIFF: The CLB passes the verification only when the CLB parameters with changes are valid. Otherwise, a verification error occurs.</li>
 */
class ModifyLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID. you can obtain the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
     */
    public $AutoScalingGroupId;

    /**
     * @var array List of classic clb ids. currently, the maximum length is 20. you cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $LoadBalancerIds;

    /**
     * @var array Specifies the list of load balancers with a current maximum length of 100. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $ForwardLoadBalancers;

    /**
     * @var string CLB verification policy. Valid values: ALL and DIFF. Default value: ALL.
<li>ALL: The CLB passes the verification only when all CLB parameters are valid. Otherwise, a verification error occurs.</li>
<li>DIFF: The CLB passes the verification only when the CLB parameters with changes are valid. Otherwise, a verification error occurs.</li>
     */
    public $LoadBalancersCheckPolicy;

    /**
     * @param string $AutoScalingGroupId Scaling group ID. you can obtain the scaling group ID by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.
     * @param array $LoadBalancerIds List of classic clb ids. currently, the maximum length is 20. you cannot specify LoadBalancerIds and ForwardLoadBalancers at the same time. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     * @param array $ForwardLoadBalancers Specifies the list of load balancers with a current maximum length of 100. either LoadBalancerIds or ForwardLoadBalancers can be specified at the same time. can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     * @param string $LoadBalancersCheckPolicy CLB verification policy. Valid values: ALL and DIFF. Default value: ALL.
<li>ALL: The CLB passes the verification only when all CLB parameters are valid. Otherwise, a verification error occurs.</li>
<li>DIFF: The CLB passes the verification only when the CLB parameters with changes are valid. Otherwise, a verification error occurs.</li>
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

        if (array_key_exists("LoadBalancersCheckPolicy",$param) and $param["LoadBalancersCheckPolicy"] !== null) {
            $this->LoadBalancersCheckPolicy = $param["LoadBalancersCheckPolicy"];
        }
    }
}
