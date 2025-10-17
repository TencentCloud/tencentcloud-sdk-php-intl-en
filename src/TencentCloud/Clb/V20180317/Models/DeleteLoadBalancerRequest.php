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
 * DeleteLoadBalancer request structure.
 *
 * @method array getLoadBalancerIds() Obtain CLB instance ID array to be deleted, which can be obtained by calling the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. The array can include up to 20 elements.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set CLB instance ID array to be deleted, which can be obtained by calling the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. The array can include up to 20 elements.
 * @method boolean getForceDelete() Obtain Whether to forcibly delete the CLB instance. True indicates forced deletion; False indicates non-forced deletion, and blocking verification is required.
The default value is False.
The deletion operation is blocked by default in the following cases. If you confirm forced deletion, the value of the forced verification parameter ForceDelete should be set to True.
1. The instance with 20 or more RS bound to the backend is deleted.
2. The instance with RS bound to the backend and the maximum peak inbound/outbound bandwidth exceeding 10 Mbps within 5 minutes is deleted.
3. Thirty or more instances are deleted within 5 minutes in a single region.
 * @method void setForceDelete(boolean $ForceDelete) Set Whether to forcibly delete the CLB instance. True indicates forced deletion; False indicates non-forced deletion, and blocking verification is required.
The default value is False.
The deletion operation is blocked by default in the following cases. If you confirm forced deletion, the value of the forced verification parameter ForceDelete should be set to True.
1. The instance with 20 or more RS bound to the backend is deleted.
2. The instance with RS bound to the backend and the maximum peak inbound/outbound bandwidth exceeding 10 Mbps within 5 minutes is deleted.
3. Thirty or more instances are deleted within 5 minutes in a single region.
 */
class DeleteLoadBalancerRequest extends AbstractModel
{
    /**
     * @var array CLB instance ID array to be deleted, which can be obtained by calling the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. The array can include up to 20 elements.
     */
    public $LoadBalancerIds;

    /**
     * @var boolean Whether to forcibly delete the CLB instance. True indicates forced deletion; False indicates non-forced deletion, and blocking verification is required.
The default value is False.
The deletion operation is blocked by default in the following cases. If you confirm forced deletion, the value of the forced verification parameter ForceDelete should be set to True.
1. The instance with 20 or more RS bound to the backend is deleted.
2. The instance with RS bound to the backend and the maximum peak inbound/outbound bandwidth exceeding 10 Mbps within 5 minutes is deleted.
3. Thirty or more instances are deleted within 5 minutes in a single region.
     */
    public $ForceDelete;

    /**
     * @param array $LoadBalancerIds CLB instance ID array to be deleted, which can be obtained by calling the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API. The array can include up to 20 elements.
     * @param boolean $ForceDelete Whether to forcibly delete the CLB instance. True indicates forced deletion; False indicates non-forced deletion, and blocking verification is required.
The default value is False.
The deletion operation is blocked by default in the following cases. If you confirm forced deletion, the value of the forced verification parameter ForceDelete should be set to True.
1. The instance with 20 or more RS bound to the backend is deleted.
2. The instance with RS bound to the backend and the maximum peak inbound/outbound bandwidth exceeding 10 Mbps within 5 minutes is deleted.
3. Thirty or more instances are deleted within 5 minutes in a single region.
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}
