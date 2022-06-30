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
 * ModifyNatGatewayAttribute request structure.
 *
 * @method string getNatGatewayId() Obtain The ID of the NAT gateway, such as `nat-df45454`.
 * @method void setNatGatewayId(string $NatGatewayId) Set The ID of the NAT gateway, such as `nat-df45454`.
 * @method string getNatGatewayName() Obtain The NAT gateway name, such as `test_nat`.
 * @method void setNatGatewayName(string $NatGatewayName) Set The NAT gateway name, such as `test_nat`.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth of the NAT gateway. Unit: Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth of the NAT gateway. Unit: Mbps.
 * @method boolean getModifySecurityGroup() Obtain Whether to modify the security group bound to the NAT gateway
 * @method void setModifySecurityGroup(boolean $ModifySecurityGroup) Set Whether to modify the security group bound to the NAT gateway
 * @method array getSecurityGroupIds() Obtain The final security groups bound to the NAT Gateway, such as `['sg-1n232323', 'sg-o4242424']`. An empty list indicates that all the security groups have been deleted.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The final security groups bound to the NAT Gateway, such as `['sg-1n232323', 'sg-o4242424']`. An empty list indicates that all the security groups have been deleted.
 */
class ModifyNatGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string The ID of the NAT gateway, such as `nat-df45454`.
     */
    public $NatGatewayId;

    /**
     * @var string The NAT gateway name, such as `test_nat`.
     */
    public $NatGatewayName;

    /**
     * @var integer The maximum outbound bandwidth of the NAT gateway. Unit: Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether to modify the security group bound to the NAT gateway
     */
    public $ModifySecurityGroup;

    /**
     * @var array The final security groups bound to the NAT Gateway, such as `['sg-1n232323', 'sg-o4242424']`. An empty list indicates that all the security groups have been deleted.
     */
    public $SecurityGroupIds;

    /**
     * @param string $NatGatewayId The ID of the NAT gateway, such as `nat-df45454`.
     * @param string $NatGatewayName The NAT gateway name, such as `test_nat`.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the NAT gateway. Unit: Mbps.
     * @param boolean $ModifySecurityGroup Whether to modify the security group bound to the NAT gateway
     * @param array $SecurityGroupIds The final security groups bound to the NAT Gateway, such as `['sg-1n232323', 'sg-o4242424']`. An empty list indicates that all the security groups have been deleted.
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ModifySecurityGroup",$param) and $param["ModifySecurityGroup"] !== null) {
            $this->ModifySecurityGroup = $param["ModifySecurityGroup"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
