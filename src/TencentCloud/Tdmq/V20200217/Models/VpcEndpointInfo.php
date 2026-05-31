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
 * @method string getVpcId() Obtain <p>vpc id</p>
 * @method void setVpcId(string $VpcId) Set <p>vpc id</p>
 * @method string getSubnetId() Obtain <p>Subnet id</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet id</p>
 * @method string getVpcEndpoint() Obtain <p>vpc access point information</p>
 * @method void setVpcEndpoint(string $VpcEndpoint) Set <p>vpc access point information</p>
 * @method string getVpcDataStreamEndpointStatus() Obtain <p>vpc access point status OFF/ON/CREATING/DELETING</p>
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) Set <p>vpc access point status OFF/ON/CREATING/DELETING</p>
 * @method string getVpcTlsEndpoint() Obtain <p>TLS encrypted data stream access point</p>
 * @method void setVpcTlsEndpoint(string $VpcTlsEndpoint) Set <p>TLS encrypted data stream access point</p>
 * @method string getVpcErrorMessage() Obtain <p>Error information of VPC access point operation failure</p>
 * @method void setVpcErrorMessage(string $VpcErrorMessage) Set <p>Error information of VPC access point operation failure</p>
 * @method string getId() Obtain <p>Access point ID</p>
 * @method void setId(string $Id) Set <p>Access point ID</p>
 * @method string getVpcStreamEndpoint() Obtain <p>vpc Stream access point</p>
 * @method void setVpcStreamEndpoint(string $VpcStreamEndpoint) Set <p>vpc Stream access point</p>
 */
class VpcEndpointInfo extends AbstractModel
{
    /**
     * @var string <p>vpc id</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>vpc access point information</p>
     */
    public $VpcEndpoint;

    /**
     * @var string <p>vpc access point status OFF/ON/CREATING/DELETING</p>
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @var string <p>TLS encrypted data stream access point</p>
     */
    public $VpcTlsEndpoint;

    /**
     * @var string <p>Error information of VPC access point operation failure</p>
     */
    public $VpcErrorMessage;

    /**
     * @var string <p>Access point ID</p>
     */
    public $Id;

    /**
     * @var string <p>vpc Stream access point</p>
     */
    public $VpcStreamEndpoint;

    /**
     * @param string $VpcId <p>vpc id</p>
     * @param string $SubnetId <p>Subnet id</p>
     * @param string $VpcEndpoint <p>vpc access point information</p>
     * @param string $VpcDataStreamEndpointStatus <p>vpc access point status OFF/ON/CREATING/DELETING</p>
     * @param string $VpcTlsEndpoint <p>TLS encrypted data stream access point</p>
     * @param string $VpcErrorMessage <p>Error information of VPC access point operation failure</p>
     * @param string $Id <p>Access point ID</p>
     * @param string $VpcStreamEndpoint <p>vpc Stream access point</p>
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

        if (array_key_exists("VpcErrorMessage",$param) and $param["VpcErrorMessage"] !== null) {
            $this->VpcErrorMessage = $param["VpcErrorMessage"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("VpcStreamEndpoint",$param) and $param["VpcStreamEndpoint"] !== null) {
            $this->VpcStreamEndpoint = $param["VpcStreamEndpoint"];
        }
    }
}
