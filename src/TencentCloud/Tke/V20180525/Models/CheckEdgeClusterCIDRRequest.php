<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckEdgeClusterCIDR request structure.
 *
 * @method string getVpcId() Obtain Cluster VPC ID
 * @method void setVpcId(string $VpcId) Set Cluster VPC ID
 * @method string getPodCIDR() Obtain Cluster Pod CIDR block
 * @method void setPodCIDR(string $PodCIDR) Set Cluster Pod CIDR block
 * @method string getServiceCIDR() Obtain Cluster service CIDR block
 * @method void setServiceCIDR(string $ServiceCIDR) Set Cluster service CIDR block
 */
class CheckEdgeClusterCIDRRequest extends AbstractModel
{
    /**
     * @var string Cluster VPC ID
     */
    public $VpcId;

    /**
     * @var string Cluster Pod CIDR block
     */
    public $PodCIDR;

    /**
     * @var string Cluster service CIDR block
     */
    public $ServiceCIDR;

    /**
     * @param string $VpcId Cluster VPC ID
     * @param string $PodCIDR Cluster Pod CIDR block
     * @param string $ServiceCIDR Cluster service CIDR block
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }
    }
}
