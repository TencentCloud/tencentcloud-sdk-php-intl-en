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
 * 
 *
 * @method string getPrometheusEndpointStatus() Obtain 
 * @method void setPrometheusEndpointStatus(string $PrometheusEndpointStatus) Set 
 * @method array getVpcPrometheusEndpoint() Obtain 
 * @method void setVpcPrometheusEndpoint(array $VpcPrometheusEndpoint) Set 
 * @method array getNodePrometheusAddress() Obtain 
 * @method void setNodePrometheusAddress(array $NodePrometheusAddress) Set 
 * @method VpcEndpointInfo getVpcEndpointInfo() Obtain 
 * @method void setVpcEndpointInfo(VpcEndpointInfo $VpcEndpointInfo) Set 
 */
class PrometheusEndpointInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $PrometheusEndpointStatus;

    /**
     * @var array 
     */
    public $VpcPrometheusEndpoint;

    /**
     * @var array 
     */
    public $NodePrometheusAddress;

    /**
     * @var VpcEndpointInfo 
     */
    public $VpcEndpointInfo;

    /**
     * @param string $PrometheusEndpointStatus 
     * @param array $VpcPrometheusEndpoint 
     * @param array $NodePrometheusAddress 
     * @param VpcEndpointInfo $VpcEndpointInfo 
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
