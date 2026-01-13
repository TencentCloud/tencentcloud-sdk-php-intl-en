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
 * SetLoadBalancerSecurityGroups request structure.
 *
 * @method string getLoadBalancerId() Obtain ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
 * @method array getSecurityGroups() Obtain Specifies an array of security group ids. a load balancing instance supports a maximum binding of 50 security groups. to unbind all security groups, omit this parameter.
Can be queried through the [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1) api.
 * @method void setSecurityGroups(array $SecurityGroups) Set Specifies an array of security group ids. a load balancing instance supports a maximum binding of 50 security groups. to unbind all security groups, omit this parameter.
Can be queried through the [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1) api.
 */
class SetLoadBalancerSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
     */
    public $LoadBalancerId;

    /**
     * @var array Specifies an array of security group ids. a load balancing instance supports a maximum binding of 50 security groups. to unbind all security groups, omit this parameter.
Can be queried through the [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1) api.
     */
    public $SecurityGroups;

    /**
     * @param string $LoadBalancerId ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/1108/48459?from_cn_redirect=1) API to query the ID.
     * @param array $SecurityGroups Specifies an array of security group ids. a load balancing instance supports a maximum binding of 50 security groups. to unbind all security groups, omit this parameter.
Can be queried through the [DescribeSecurityGroups](https://www.tencentcloud.com/document/product/215/15808?from_cn_redirect=1) api.
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

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }
    }
}
