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
 * DescribeIdleLoadBalancers request structure.
 *
 * @method integer getOffset() Obtain Data offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Data offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned CLB instances. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned CLB instances. Default value: 20. Maximum value: 100.
 * @method string getLoadBalancerRegion() Obtain The Region of the cloud load balancer can be obtained through the `RegionSet.Region` field in the API return value of [DescribeRegions](https://www.tencentcloud.comom/document/product/1596/77930?from_cn_redirect=1).
 * @method void setLoadBalancerRegion(string $LoadBalancerRegion) Set The Region of the cloud load balancer can be obtained through the `RegionSet.Region` field in the API return value of [DescribeRegions](https://www.tencentcloud.comom/document/product/1596/77930?from_cn_redirect=1).
 */
class DescribeIdleLoadBalancersRequest extends AbstractModel
{
    /**
     * @var integer Data offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned CLB instances. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string The Region of the cloud load balancer can be obtained through the `RegionSet.Region` field in the API return value of [DescribeRegions](https://www.tencentcloud.comom/document/product/1596/77930?from_cn_redirect=1).
     */
    public $LoadBalancerRegion;

    /**
     * @param integer $Offset Data offset. Default value: 0.
     * @param integer $Limit Number of returned CLB instances. Default value: 20. Maximum value: 100.
     * @param string $LoadBalancerRegion The Region of the cloud load balancer can be obtained through the `RegionSet.Region` field in the API return value of [DescribeRegions](https://www.tencentcloud.comom/document/product/1596/77930?from_cn_redirect=1).
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LoadBalancerRegion",$param) and $param["LoadBalancerRegion"] !== null) {
            $this->LoadBalancerRegion = $param["LoadBalancerRegion"];
        }
    }
}
