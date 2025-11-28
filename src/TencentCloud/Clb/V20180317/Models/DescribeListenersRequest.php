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
 * DescribeListeners request structure.
 *
 * @method string getLoadBalancerId() Obtain ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/api/214/30685?from_cn_redirect=1) api to obtain the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/api/214/30685?from_cn_redirect=1) api to obtain the ID.
 * @method array getListenerIds() Obtain Specifies the array of clb listener ids to query, with a maximum of 100. you can call the [DescribeListeners](https://www.tencentcloud.comom/document/api/214/30686?from_cn_redirect=1) api to obtain the ids.
 * @method void setListenerIds(array $ListenerIds) Set Specifies the array of clb listener ids to query, with a maximum of 100. you can call the [DescribeListeners](https://www.tencentcloud.comom/document/api/214/30686?from_cn_redirect=1) api to obtain the ids.
 * @method string getProtocol() Obtain Type of the listener protocols to be queried. Values: TCP`, `UDP`, `HTTP`, `HTTPS`, `TCP_SSL` and `QUIC`.
 * @method void setProtocol(string $Protocol) Set Type of the listener protocols to be queried. Values: TCP`, `UDP`, `HTTP`, `HTTPS`, `TCP_SSL` and `QUIC`.
 * @method integer getPort() Obtain Port of listener to query. value range: 1-65535.
 * @method void setPort(integer $Port) Set Port of listener to query. value range: 1-65535.
 */
class DescribeListenersRequest extends AbstractModel
{
    /**
     * @var string ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/api/214/30685?from_cn_redirect=1) api to obtain the ID.
     */
    public $LoadBalancerId;

    /**
     * @var array Specifies the array of clb listener ids to query, with a maximum of 100. you can call the [DescribeListeners](https://www.tencentcloud.comom/document/api/214/30686?from_cn_redirect=1) api to obtain the ids.
     */
    public $ListenerIds;

    /**
     * @var string Type of the listener protocols to be queried. Values: TCP`, `UDP`, `HTTP`, `HTTPS`, `TCP_SSL` and `QUIC`.
     */
    public $Protocol;

    /**
     * @var integer Port of listener to query. value range: 1-65535.
     */
    public $Port;

    /**
     * @param string $LoadBalancerId ID of the cloud load balancer instance. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/api/214/30685?from_cn_redirect=1) api to obtain the ID.
     * @param array $ListenerIds Specifies the array of clb listener ids to query, with a maximum of 100. you can call the [DescribeListeners](https://www.tencentcloud.comom/document/api/214/30686?from_cn_redirect=1) api to obtain the ids.
     * @param string $Protocol Type of the listener protocols to be queried. Values: TCP`, `UDP`, `HTTP`, `HTTPS`, `TCP_SSL` and `QUIC`.
     * @param integer $Port Port of listener to query. value range: 1-65535.
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
