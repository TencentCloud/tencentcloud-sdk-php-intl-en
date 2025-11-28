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
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getSubnetId() Obtain 
 * @method void setSubnetId(string $SubnetId) Set 
 * @method string getVpcEndpoint() Obtain 
 * @method void setVpcEndpoint(string $VpcEndpoint) Set 
 * @method string getVpcDataStreamEndpointStatus() Obtain Access point status. valid values: OFF, ON, CREATING, DELETING.
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) Set Access point status. valid values: OFF, ON, CREATING, DELETING.
 * @method string getVpcTlsEndpoint() Obtain Encrypted TLS data stream access point.
 * @method void setVpcTlsEndpoint(string $VpcTlsEndpoint) Set Encrypted TLS data stream access point.
 */
class VpcEndpointInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string 
     */
    public $SubnetId;

    /**
     * @var string 
     */
    public $VpcEndpoint;

    /**
     * @var string Access point status. valid values: OFF, ON, CREATING, DELETING.
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @var string Encrypted TLS data stream access point.
     */
    public $VpcTlsEndpoint;

    /**
     * @param string $VpcId 
     * @param string $SubnetId 
     * @param string $VpcEndpoint 
     * @param string $VpcDataStreamEndpointStatus Access point status. valid values: OFF, ON, CREATING, DELETING.
     * @param string $VpcTlsEndpoint Encrypted TLS data stream access point.
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

        if (array_key_exists("VpcTlsEndpoint",$param) and $param["VpcTlsEndpoint"] !== null) {
            $this->VpcTlsEndpoint = $param["VpcTlsEndpoint"];
        }
    }
}
