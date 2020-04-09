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
 * DescribeVpnConnections request structure.
 *
 * @method array getVpnConnectionIds() Obtain The instance ID of the VPN tunnel, such as `vpnx-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
 * @method void setVpnConnectionIds(array $VpnConnectionIds) Set The instance ID of the VPN tunnel, such as `vpnx-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter condition. In each request, the upper limit for `Filters` is 10 and 5 for `Filter.Values`. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - VPC instance ID, such as `vpc-0a36uwkr`.</li>
<li>vpn-gateway-id - String - VPN gateway instance ID, such as `vpngw-p4lmqawn`.</li>
<li>customer-gateway-id - String - Customer gateway instance ID, such as `cgw-l4rblw63`.</li>
<li>vpn-connection-name - String - Connection name, such as `test-vpn`.</li>
<li>vpn-connection-id - String - Connection instance ID, such as `vpnx-5p7vkch8"`.</li>
 * @method void setFilters(array $Filters) Set Filter condition. In each request, the upper limit for `Filters` is 10 and 5 for `Filter.Values`. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - VPC instance ID, such as `vpc-0a36uwkr`.</li>
<li>vpn-gateway-id - String - VPN gateway instance ID, such as `vpngw-p4lmqawn`.</li>
<li>customer-gateway-id - String - Customer gateway instance ID, such as `cgw-l4rblw63`.</li>
<li>vpn-connection-name - String - Connection name, such as `test-vpn`.</li>
<li>vpn-connection-id - String - Connection instance ID, such as `vpnx-5p7vkch8"`.</li>
 * @method integer getOffset() Obtain The Offset. The default value is 0. For more information about Offset, see the relevant section in the API Introduction.
 * @method void setOffset(integer $Offset) Set The Offset. The default value is 0. For more information about Offset, see the relevant section in the API Introduction.
 * @method integer getLimit() Obtain Number of values to be returned. The default value is 20. Maximum is 100.
 * @method void setLimit(integer $Limit) Set Number of values to be returned. The default value is 20. Maximum is 100.
 */
class DescribeVpnConnectionsRequest extends AbstractModel
{
    /**
     * @var array The instance ID of the VPN tunnel, such as `vpnx-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
     */
    public $VpnConnectionIds;

    /**
     * @var array Filter condition. In each request, the upper limit for `Filters` is 10 and 5 for `Filter.Values`. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - VPC instance ID, such as `vpc-0a36uwkr`.</li>
<li>vpn-gateway-id - String - VPN gateway instance ID, such as `vpngw-p4lmqawn`.</li>
<li>customer-gateway-id - String - Customer gateway instance ID, such as `cgw-l4rblw63`.</li>
<li>vpn-connection-name - String - Connection name, such as `test-vpn`.</li>
<li>vpn-connection-id - String - Connection instance ID, such as `vpnx-5p7vkch8"`.</li>
     */
    public $Filters;

    /**
     * @var integer The Offset. The default value is 0. For more information about Offset, see the relevant section in the API Introduction.
     */
    public $Offset;

    /**
     * @var integer Number of values to be returned. The default value is 20. Maximum is 100.
     */
    public $Limit;

    /**
     * @param array $VpnConnectionIds The instance ID of the VPN tunnel, such as `vpnx-f49l6u0z`. Each request can have a maximum of 100 instances. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter condition. In each request, the upper limit for `Filters` is 10 and 5 for `Filter.Values`. `VpnConnectionIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - VPC instance ID, such as `vpc-0a36uwkr`.</li>
<li>vpn-gateway-id - String - VPN gateway instance ID, such as `vpngw-p4lmqawn`.</li>
<li>customer-gateway-id - String - Customer gateway instance ID, such as `cgw-l4rblw63`.</li>
<li>vpn-connection-name - String - Connection name, such as `test-vpn`.</li>
<li>vpn-connection-id - String - Connection instance ID, such as `vpnx-5p7vkch8"`.</li>
     * @param integer $Offset The Offset. The default value is 0. For more information about Offset, see the relevant section in the API Introduction.
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
        if (array_key_exists("VpnConnectionIds",$param) and $param["VpnConnectionIds"] !== null) {
            $this->VpnConnectionIds = $param["VpnConnectionIds"];
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
