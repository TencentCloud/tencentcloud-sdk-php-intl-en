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
 * DescribeVpnGateways request structure.
 *
 * @method array getVpnGatewayIds() Obtain The VPN gateway instance ID, such as `vpngw-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
 * @method void setVpnGatewayIds(array $VpnGatewayIds) Set The VPN gateway instance ID, such as `vpngw-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter condition. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>vpn-gateway-id - String - (Filter condition) VPN instance ID, such as `vpngw-5aluhh9t`.</li>
<li>vpn-gateway-name - String - (Filter condition) VPN instance name.</li>
<li>type - String - (Filter condition) VPN gateway type: 'IPSEC', 'SSL'.</li>
<li>public-ip-address- String - (Filter condition) Public IP.</li>
<li>renew-flag - String - (Filter condition) Gateway renewal type. Manual renewal: `NOTIFY_AND_MANUAL_RENEW`, Automatic renewal: `NOTIFY_AND_AUTO_RENEW`.</li>
<li>zone - String - (Filter condition) The availability zone where the VPN is located, such as `ap-guangzhou-2`.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>vpn-gateway-id - String - (Filter condition) VPN instance ID, such as `vpngw-5aluhh9t`.</li>
<li>vpn-gateway-name - String - (Filter condition) VPN instance name.</li>
<li>type - String - (Filter condition) VPN gateway type: 'IPSEC', 'SSL'.</li>
<li>public-ip-address- String - (Filter condition) Public IP.</li>
<li>renew-flag - String - (Filter condition) Gateway renewal type. Manual renewal: `NOTIFY_AND_MANUAL_RENEW`, Automatic renewal: `NOTIFY_AND_AUTO_RENEW`.</li>
<li>zone - String - (Filter condition) The availability zone where the VPN is located, such as `ap-guangzhou-2`.</li>
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The number of request objects.
 * @method void setLimit(integer $Limit) Set The number of request objects.
 */
class DescribeVpnGatewaysRequest extends AbstractModel
{
    /**
     * @var array The VPN gateway instance ID, such as `vpngw-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
     */
    public $VpnGatewayIds;

    /**
     * @var array Filter condition. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>vpn-gateway-id - String - (Filter condition) VPN instance ID, such as `vpngw-5aluhh9t`.</li>
<li>vpn-gateway-name - String - (Filter condition) VPN instance name.</li>
<li>type - String - (Filter condition) VPN gateway type: 'IPSEC', 'SSL'.</li>
<li>public-ip-address- String - (Filter condition) Public IP.</li>
<li>renew-flag - String - (Filter condition) Gateway renewal type. Manual renewal: `NOTIFY_AND_MANUAL_RENEW`, Automatic renewal: `NOTIFY_AND_AUTO_RENEW`.</li>
<li>zone - String - (Filter condition) The availability zone where the VPN is located, such as `ap-guangzhou-2`.</li>
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The number of request objects.
     */
    public $Limit;

    /**
     * @param array $VpnGatewayIds The VPN gateway instance ID, such as `vpngw-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter condition. `VpnGatewayIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>vpn-gateway-id - String - (Filter condition) VPN instance ID, such as `vpngw-5aluhh9t`.</li>
<li>vpn-gateway-name - String - (Filter condition) VPN instance name.</li>
<li>type - String - (Filter condition) VPN gateway type: 'IPSEC', 'SSL'.</li>
<li>public-ip-address- String - (Filter condition) Public IP.</li>
<li>renew-flag - String - (Filter condition) Gateway renewal type. Manual renewal: `NOTIFY_AND_MANUAL_RENEW`, Automatic renewal: `NOTIFY_AND_AUTO_RENEW`.</li>
<li>zone - String - (Filter condition) The availability zone where the VPN is located, such as `ap-guangzhou-2`.</li>
     * @param integer $Offset Offset
     * @param integer $Limit The number of request objects.
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
        if (array_key_exists("VpnGatewayIds",$param) and $param["VpnGatewayIds"] !== null) {
            $this->VpnGatewayIds = $param["VpnGatewayIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterObject();
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
