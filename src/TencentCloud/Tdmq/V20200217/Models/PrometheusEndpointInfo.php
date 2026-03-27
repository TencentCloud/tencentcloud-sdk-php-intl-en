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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rabbitmq Prometheus Information
 *
 * @method string getPrometheusEndpointStatus() Obtain Status of the Prometheus switch
 * @method void setPrometheusEndpointStatus(string $PrometheusEndpointStatus) Set Status of the Prometheus switch
 * @method array getVpcPrometheusEndpoint() Obtain prometheus Information
 * @method void setVpcPrometheusEndpoint(array $VpcPrometheusEndpoint) Set prometheus Information
 * @method array getNodePrometheusAddress() Obtain Node Information
 * @method void setNodePrometheusAddress(array $NodePrometheusAddress) Set Node Information
 * @method VpcEndpointInfo getVpcEndpointInfo() Obtain vpc information
 * @method void setVpcEndpointInfo(VpcEndpointInfo $VpcEndpointInfo) Set vpc information
 */
class PrometheusEndpointInfo extends AbstractModel
{
    /**
     * @var string Status of the Prometheus switch
     */
    public $PrometheusEndpointStatus;

    /**
     * @var array prometheus Information
     */
    public $VpcPrometheusEndpoint;

    /**
     * @var array Node Information
     */
    public $NodePrometheusAddress;

    /**
     * @var VpcEndpointInfo vpc information
     */
    public $VpcEndpointInfo;

    /**
     * @param string $PrometheusEndpointStatus Status of the Prometheus switch
     * @param array $VpcPrometheusEndpoint prometheus Information
     * @param array $NodePrometheusAddress Node Information
     * @param VpcEndpointInfo $VpcEndpointInfo vpc information
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
        if (array_key_exists("PrometheusEndpointStatus",$param) and $param["PrometheusEndpointStatus"] !== null) {
            $this->PrometheusEndpointStatus = $param["PrometheusEndpointStatus"];
        }

        if (array_key_exists("VpcPrometheusEndpoint",$param) and $param["VpcPrometheusEndpoint"] !== null) {
            $this->VpcPrometheusEndpoint = $param["VpcPrometheusEndpoint"];
        }

        if (array_key_exists("NodePrometheusAddress",$param) and $param["NodePrometheusAddress"] !== null) {
            $this->NodePrometheusAddress = $param["NodePrometheusAddress"];
        }

        if (array_key_exists("VpcEndpointInfo",$param) and $param["VpcEndpointInfo"] !== null) {
            $this->VpcEndpointInfo = new VpcEndpointInfo();
            $this->VpcEndpointInfo->deserialize($param["VpcEndpointInfo"]);
        }
    }
}
