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
 * CreateVpcEndPoint request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 * @method string getSubnetId() Obtain Subnet instance ID
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID
 * @method string getEndPointName() Obtain Endpoint name
 * @method void setEndPointName(string $EndPointName) Set Endpoint name
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 * @method string getEndPointVip() Obtain Endpoint VIP. You can apply for a specified IP.
 * @method void setEndPointVip(string $EndPointVip) Set Endpoint VIP. You can apply for a specified IP.
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 */
class CreateVpcEndPointRequest extends AbstractModel
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
     * @var string Endpoint name
     */
    public $EndPointName;

    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @var string Endpoint VIP. You can apply for a specified IP.
     */
    public $EndPointVip;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @param string $VpcId VPC instance ID
     * @param string $SubnetId Subnet instance ID
     * @param string $EndPointName Endpoint name
     * @param string $EndPointServiceId Endpoint service ID
     * @param string $EndPointVip Endpoint VIP. You can apply for a specified IP.
     * @param string $SecurityGroupId Security group ID
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

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
