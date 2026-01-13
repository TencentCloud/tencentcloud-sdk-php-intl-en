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
 * DeleteLoadBalancerListeners request structure.
 *
 * @method string getLoadBalancerId() Obtain ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
 * @method array getListenerIds() Obtain Specifies the listener ID array to be deleted, with a maximum of 20 elements. if left blank, all listeners of the clb will be deleted. can be obtained through the [DescribeListeners](https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1) api.
 * @method void setListenerIds(array $ListenerIds) Set Specifies the listener ID array to be deleted, with a maximum of 20 elements. if left blank, all listeners of the clb will be deleted. can be obtained through the [DescribeListeners](https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1) api.
 */
class DeleteLoadBalancerListenersRequest extends AbstractModel
{
    /**
     * @var string ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
     */
    public $LoadBalancerId;

    /**
     * @var array Specifies the listener ID array to be deleted, with a maximum of 20 elements. if left blank, all listeners of the clb will be deleted. can be obtained through the [DescribeListeners](https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1) api.
     */
    public $ListenerIds;

    /**
     * @param string $LoadBalancerId ID of the CLB instance. You can call the [DescribeLoadBalancers](https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1) API to query the ID.
     * @param array $ListenerIds Specifies the listener ID array to be deleted, with a maximum of 20 elements. if left blank, all listeners of the clb will be deleted. can be obtained through the [DescribeListeners](https://www.tencentcloud.com/document/product/214/30686?from_cn_redirect=1) api.
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

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }
    }
}
