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
 * DescribeDirectConnectGateways request structure.
 *
 * @method array getDirectConnectGatewayIds() Obtain The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
 * @method void setDirectConnectGatewayIds(array $DirectConnectGatewayIds) Set The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
 * @method array getFilters() Obtain Filter condition. `DirectConnectGatewayIds` and `Filters` cannot be specified at the same time.
<li>direct-connect-gateway-id - String - The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.</li>
<li>direct-connect-gateway-name - String - The name of the Direct Connect gateway. The default is fuzzy query.</li>
<li>direct-connect-gateway-ip - String - The `IP` of the Direct Connect gateway.</li>
<li>gateway-type - String - The gateway type. Available values: `NORMAL` (Normal-type), `NAT` (NAT-type).</li>
<li>network-type- String - The network type. Available values: `VPC` (VPC-type), `CCN` (CCN-type).</li>
<li>ccn-id - String - The `ID` of the CCN where the Direct Connect gateway is located.</li>
<li>vpc-id - String - The `ID` of the VPC where the Direct Connect gateway is located.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `DirectConnectGatewayIds` and `Filters` cannot be specified at the same time.
<li>direct-connect-gateway-id - String - The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.</li>
<li>direct-connect-gateway-name - String - The name of the Direct Connect gateway. The default is fuzzy query.</li>
<li>direct-connect-gateway-ip - String - The `IP` of the Direct Connect gateway.</li>
<li>gateway-type - String - The gateway type. Available values: `NORMAL` (Normal-type), `NAT` (NAT-type).</li>
<li>network-type- String - The network type. Available values: `VPC` (VPC-type), `CCN` (CCN-type).</li>
<li>ccn-id - String - The `ID` of the CCN where the Direct Connect gateway is located.</li>
<li>vpc-id - String - The `ID` of the VPC where the Direct Connect gateway is located.</li>
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The returned quantity.
 * @method void setLimit(integer $Limit) Set The returned quantity.
 */
class DescribeDirectConnectGatewaysRequest extends AbstractModel
{
    /**
     * @var array The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
     */
    public $DirectConnectGatewayIds;

    /**
     * @var array Filter condition. `DirectConnectGatewayIds` and `Filters` cannot be specified at the same time.
<li>direct-connect-gateway-id - String - The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.</li>
<li>direct-connect-gateway-name - String - The name of the Direct Connect gateway. The default is fuzzy query.</li>
<li>direct-connect-gateway-ip - String - The `IP` of the Direct Connect gateway.</li>
<li>gateway-type - String - The gateway type. Available values: `NORMAL` (Normal-type), `NAT` (NAT-type).</li>
<li>network-type- String - The network type. Available values: `VPC` (VPC-type), `CCN` (CCN-type).</li>
<li>ccn-id - String - The `ID` of the CCN where the Direct Connect gateway is located.</li>
<li>vpc-id - String - The `ID` of the VPC where the Direct Connect gateway is located.</li>
     */
    public $Filters;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The returned quantity.
     */
    public $Limit;

    /**
     * @param array $DirectConnectGatewayIds The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
     * @param array $Filters Filter condition. `DirectConnectGatewayIds` and `Filters` cannot be specified at the same time.
<li>direct-connect-gateway-id - String - The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.</li>
<li>direct-connect-gateway-name - String - The name of the Direct Connect gateway. The default is fuzzy query.</li>
<li>direct-connect-gateway-ip - String - The `IP` of the Direct Connect gateway.</li>
<li>gateway-type - String - The gateway type. Available values: `NORMAL` (Normal-type), `NAT` (NAT-type).</li>
<li>network-type- String - The network type. Available values: `VPC` (VPC-type), `CCN` (CCN-type).</li>
<li>ccn-id - String - The `ID` of the CCN where the Direct Connect gateway is located.</li>
<li>vpc-id - String - The `ID` of the VPC where the Direct Connect gateway is located.</li>
     * @param integer $Offset Offset.
     * @param integer $Limit The returned quantity.
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
        if (array_key_exists("DirectConnectGatewayIds",$param) and $param["DirectConnectGatewayIds"] !== null) {
            $this->DirectConnectGatewayIds = $param["DirectConnectGatewayIds"];
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
