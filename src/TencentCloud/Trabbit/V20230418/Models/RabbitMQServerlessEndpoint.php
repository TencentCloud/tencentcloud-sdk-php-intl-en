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
 * Access point.
 *
 * @method string getVpcId() Obtain vpc id
 * @method void setVpcId(string $VpcId) Set vpc id
 * @method string getSubnetId() Obtain subnet id
 * @method void setSubnetId(string $SubnetId) Set subnet id
 * @method string getVpcEndpoint() Obtain Access address
 * @method void setVpcEndpoint(string $VpcEndpoint) Set Access address
 * @method string getVpcDataStreamEndpointStatus() Obtain Access address status.
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) Set Access address status.
 * @method boolean getPublicNetwork() Obtain Whether it is a public network.
 * @method void setPublicNetwork(boolean $PublicNetwork) Set Whether it is a public network.
 * @method string getAccessStrategy() Obtain Specifies the access policy.
 * @method void setAccessStrategy(string $AccessStrategy) Set Specifies the access policy.
 * @method integer getBandwidth() Obtain Bandwidth
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth
 */
class RabbitMQServerlessEndpoint extends AbstractModel
{
    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string subnet id
     */
    public $SubnetId;

    /**
     * @var string Access address
     */
    public $VpcEndpoint;

    /**
     * @var string Access address status.
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @var boolean Whether it is a public network.
     */
    public $PublicNetwork;

    /**
     * @var string Specifies the access policy.
     */
    public $AccessStrategy;

    /**
     * @var integer Bandwidth
     */
    public $Bandwidth;

    /**
     * @param string $VpcId vpc id
     * @param string $SubnetId subnet id
     * @param string $VpcEndpoint Access address
     * @param string $VpcDataStreamEndpointStatus Access address status.
     * @param boolean $PublicNetwork Whether it is a public network.
     * @param string $AccessStrategy Specifies the access policy.
     * @param integer $Bandwidth Bandwidth
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

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("AccessStrategy",$param) and $param["AccessStrategy"] !== null) {
            $this->AccessStrategy = $param["AccessStrategy"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
