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
 * @method array getNatGatewayIds() Obtain NAT gateway ID.
 * @method void setNatGatewayIds(array $NatGatewayIds) Set NAT gateway ID.
 * @method array getFilters() Obtain Filter conditions:
`NatGatewayIds` and `Filters` cannot be specified at the same time.
<li> nat-gateway-id, the NAT gateway ID, such as `nat-0yi4hekt`.</li>
<li> vpc-id, the VPC ID, such as `vpc-0yi4hekt`.</li>
<li> public-ip-address, the EIP, such as `139.199.232.238`.</li>
<li>public-port, the public network port.</li>
<li>private-ip-address, the private IP, such as `10.0.0.1`.</li>
<li>private-port, the private network port.</li>
<li>description, the rule description.</li>
 * @method void setFilters(array $Filters) Set Filter conditions:
`NatGatewayIds` and `Filters` cannot be specified at the same time.
<li> nat-gateway-id, the NAT gateway ID, such as `nat-0yi4hekt`.</li>
<li> vpc-id, the VPC ID, such as `vpc-0yi4hekt`.</li>
<li> public-ip-address, the EIP, such as `139.199.232.238`.</li>
<li>public-port, the public network port.</li>
<li>private-ip-address, the private IP, such as `10.0.0.1`.</li>
<li>private-port, the private network port.</li>
<li>description, the rule description.</li>
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 * @method integer getLimit() Obtain Number of values to be returned. The default value is 20. Maximum is 100.
 * @method void setLimit(integer $Limit) Set Number of values to be returned. The default value is 20. Maximum is 100.
 */

/**
 *DescribeNatGatewayDestinationIpPortTranslationNatRules request structure.
 */
class DescribeNatGatewayDestinationIpPortTranslationNatRulesRequest extends AbstractModel
{
    /**
     * @var array NAT gateway ID.
     */
    public $NatGatewayIds;

    /**
     * @var array Filter conditions:
`NatGatewayIds` and `Filters` cannot be specified at the same time.
<li> nat-gateway-id, the NAT gateway ID, such as `nat-0yi4hekt`.</li>
<li> vpc-id, the VPC ID, such as `vpc-0yi4hekt`.</li>
<li> public-ip-address, the EIP, such as `139.199.232.238`.</li>
<li>public-port, the public network port.</li>
<li>private-ip-address, the private IP, such as `10.0.0.1`.</li>
<li>private-port, the private network port.</li>
<li>description, the rule description.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of values to be returned. The default value is 20. Maximum is 100.
     */
    public $Limit;
    /**
     * @param array $NatGatewayIds NAT gateway ID.
     * @param array $Filters Filter conditions:
`NatGatewayIds` and `Filters` cannot be specified at the same time.
<li> nat-gateway-id, the NAT gateway ID, such as `nat-0yi4hekt`.</li>
<li> vpc-id, the VPC ID, such as `vpc-0yi4hekt`.</li>
<li> public-ip-address, the EIP, such as `139.199.232.238`.</li>
<li>public-port, the public network port.</li>
<li>private-ip-address, the private IP, such as `10.0.0.1`.</li>
<li>private-port, the private network port.</li>
<li>description, the rule description.</li>
     * @param integer $Offset Offset. The default value is 0.
     * @param integer $Limit Number of values to be returned. The default value is 20. Maximum is 100.
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
        if (array_key_exists("NatGatewayIds",$param) and $param["NatGatewayIds"] !== null) {
            $this->NatGatewayIds = $param["NatGatewayIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
