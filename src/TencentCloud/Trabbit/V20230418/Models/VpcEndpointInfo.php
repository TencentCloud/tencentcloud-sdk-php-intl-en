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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC access point information
 *
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getVpcEndpoint() Obtain vpc access point information.
 * @method void setVpcEndpoint(string $VpcEndpoint) Set vpc access point information.
 * @method string getVpcDataStreamEndpointStatus() Obtain vpc access point status.
OFF/ON/CREATING/DELETING
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) Set vpc access point status.
OFF/ON/CREATING/DELETING
 */
class VpcEndpointInfo extends AbstractModel
{
    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string vpc access point information.
     */
    public $VpcEndpoint;

    /**
     * @var string vpc access point status.
OFF/ON/CREATING/DELETING
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $VpcEndpoint vpc access point information.
     * @param string $VpcDataStreamEndpointStatus vpc access point status.
OFF/ON/CREATING/DELETING
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcEndpoint",$param) and $param["VpcEndpoint"] !== null) {
            $this->VpcEndpoint = $param["VpcEndpoint"];
        }

        if (array_key_exists("VpcDataStreamEndpointStatus",$param) and $param["VpcDataStreamEndpointStatus"] !== null) {
            $this->VpcDataStreamEndpointStatus = $param["VpcDataStreamEndpointStatus"];
        }
    }
}
