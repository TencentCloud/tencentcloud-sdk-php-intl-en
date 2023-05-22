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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of resources bound with the queried IPs
 *
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 * @method string getSubnetId() Obtain Subnet instance ID
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID
 * @method string getIpAddress() Obtain IP address
 * @method void setIpAddress(string $IpAddress) Set IP address
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 */
class IpAddressStates extends AbstractModel
{
    /**
     * @var string VPC instance ID
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID
     */
    public $SubnetId;

    /**
     * @var string IP address
     */
    public $IpAddress;

    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @param string $VpcId VPC instance ID
     * @param string $SubnetId Subnet instance ID
     * @param string $IpAddress IP address
     * @param string $ResourceType Resource type
     * @param string $ResourceId Resource ID
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

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
