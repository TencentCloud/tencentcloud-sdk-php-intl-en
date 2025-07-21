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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application load balancer
 *
 * @method string getLoadBalancerId() Obtain ID of the load balancer. this parameter is required as an input parameter. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the load balancer. this parameter is required as an input parameter. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method string getListenerId() Obtain CLB listener ID. as an input parameter, this parameter is required. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setListenerId(string $ListenerId) Set CLB listener ID. as an input parameter, this parameter is required. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method array getTargetAttributes() Obtain Target rule attribute list. as an input parameter, this parameter is required.
 * @method void setTargetAttributes(array $TargetAttributes) Set Target rule attribute list. as an input parameter, this parameter is required.
 * @method string getLocationId() Obtain The forwarding rule ID. note: this parameter is required for layer-7 (http/https) listeners. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method void setLocationId(string $LocationId) Set The forwarding rule ID. note: this parameter is required for layer-7 (http/https) listeners. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
 * @method string getRegion() Obtain The region of CLB instance. It defaults to the region of AS service and is in the format of the common parameter `Region`, such as `ap-guangzhou`.
 * @method void setRegion(string $Region) Set The region of CLB instance. It defaults to the region of AS service and is in the format of the common parameter `Region`, such as `ap-guangzhou`.
 */
class ForwardLoadBalancer extends AbstractModel
{
    /**
     * @var string ID of the load balancer. this parameter is required as an input parameter. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $LoadBalancerId;

    /**
     * @var string CLB listener ID. as an input parameter, this parameter is required. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $ListenerId;

    /**
     * @var array Target rule attribute list. as an input parameter, this parameter is required.
     */
    public $TargetAttributes;

    /**
     * @var string The forwarding rule ID. note: this parameter is required for layer-7 (http/https) listeners. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     */
    public $LocationId;

    /**
     * @var string The region of CLB instance. It defaults to the region of AS service and is in the format of the common parameter `Region`, such as `ap-guangzhou`.
     */
    public $Region;

    /**
     * @param string $LoadBalancerId ID of the load balancer. this parameter is required as an input parameter. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     * @param string $ListenerId CLB listener ID. as an input parameter, this parameter is required. you can obtain it through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     * @param array $TargetAttributes Target rule attribute list. as an input parameter, this parameter is required.
     * @param string $LocationId The forwarding rule ID. note: this parameter is required for layer-7 (http/https) listeners. it can be obtained through the [DescribeLoadBalancers](https://intl.cloud.tencent.com/document/product/214/30685?from_cn_redirect=1) api.
     * @param string $Region The region of CLB instance. It defaults to the region of AS service and is in the format of the common parameter `Region`, such as `ap-guangzhou`.
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("TargetAttributes",$param) and $param["TargetAttributes"] !== null) {
            $this->TargetAttributes = [];
            foreach ($param["TargetAttributes"] as $key => $value){
                $obj = new TargetAttribute();
                $obj->deserialize($value);
                array_push($this->TargetAttributes, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
