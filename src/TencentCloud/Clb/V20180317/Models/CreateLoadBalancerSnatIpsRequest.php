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
 * CreateLoadBalancerSnatIps request structure.
 *
 * @method string getLoadBalancerId() Obtain Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID, such as lb-12345678.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID, such as lb-12345678.
 * @method array getSnatIps() Obtain Added SnatIp information. specify IP for request or designated subnet for automatic application. can be accessed through [DescribeSubnets](https://www.tencentcloud.comom/document/api/215/15784?from_cn_redirect=1) to query and retrieve. the default upper limit for one CLB instance is 10.
 * @method void setSnatIps(array $SnatIps) Set Added SnatIp information. specify IP for request or designated subnet for automatic application. can be accessed through [DescribeSubnets](https://www.tencentcloud.comom/document/api/215/15784?from_cn_redirect=1) to query and retrieve. the default upper limit for one CLB instance is 10.
 * @method integer getNumber() Obtain Number of SNAT IPs to be added. This parameter is used in conjunction with `SnatIps`. Note that if `Ip` is specified in `SnapIps`, this parameter is not available. It defaults to `1` and the upper limit is `10`.
 * @method void setNumber(integer $Number) Set Number of SNAT IPs to be added. This parameter is used in conjunction with `SnatIps`. Note that if `Ip` is specified in `SnapIps`, this parameter is not available. It defaults to `1` and the upper limit is `10`.
 */
class CreateLoadBalancerSnatIpsRequest extends AbstractModel
{
    /**
     * @var string Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID, such as lb-12345678.
     */
    public $LoadBalancerId;

    /**
     * @var array Added SnatIp information. specify IP for request or designated subnet for automatic application. can be accessed through [DescribeSubnets](https://www.tencentcloud.comom/document/api/215/15784?from_cn_redirect=1) to query and retrieve. the default upper limit for one CLB instance is 10.
     */
    public $SnatIps;

    /**
     * @var integer Number of SNAT IPs to be added. This parameter is used in conjunction with `SnatIps`. Note that if `Ip` is specified in `SnapIps`, this parameter is not available. It defaults to `1` and the upper limit is `10`.
     */
    public $Number;

    /**
     * @param string $LoadBalancerId Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to query the ID, such as lb-12345678.
     * @param array $SnatIps Added SnatIp information. specify IP for request or designated subnet for automatic application. can be accessed through [DescribeSubnets](https://www.tencentcloud.comom/document/api/215/15784?from_cn_redirect=1) to query and retrieve. the default upper limit for one CLB instance is 10.
     * @param integer $Number Number of SNAT IPs to be added. This parameter is used in conjunction with `SnatIps`. Note that if `Ip` is specified in `SnapIps`, this parameter is not available. It defaults to `1` and the upper limit is `10`.
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

        if (array_key_exists("SnatIps",$param) and $param["SnatIps"] !== null) {
            $this->SnatIps = [];
            foreach ($param["SnatIps"] as $key => $value){
                $obj = new SnatIp();
                $obj->deserialize($value);
                array_push($this->SnatIps, $obj);
            }
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
