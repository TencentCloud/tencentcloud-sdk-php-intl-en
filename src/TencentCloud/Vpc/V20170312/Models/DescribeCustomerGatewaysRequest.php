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
 * DescribeCustomerGateways request structure.
 *
 * @method array getCustomerGatewayIds() Obtain Customer gateway ID, such as `cgw-2wqq41m9`. Each request can have a maximum of 100 instances. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
 * @method void setCustomerGatewayIds(array $CustomerGatewayIds) Set Customer gateway ID, such as `cgw-2wqq41m9`. Each request can have a maximum of 100 instances. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain The filter condition. For details, see the Instance Filter Conditions Table. The upper limit for `Filters` in each request is 10 and 5 for `Filter.Values`. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
<li>customer-gateway-id - String - (Filter condition) The unique ID of the user gateway, such as `cgw-mgp33pll`.</li>
<li>customer-gateway-name - String - (Filter condition) The name of the user gateway, such as `test-cgw`.</li>
<li>ip-address - String - (Filter condition) The public IP address, such as `58.211.1.12`.</li>
 * @method void setFilters(array $Filters) Set The filter condition. For details, see the Instance Filter Conditions Table. The upper limit for `Filters` in each request is 10 and 5 for `Filter.Values`. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
<li>customer-gateway-id - String - (Filter condition) The unique ID of the user gateway, such as `cgw-mgp33pll`.</li>
<li>customer-gateway-name - String - (Filter condition) The name of the user gateway, such as `test-cgw`.</li>
<li>ip-address - String - (Filter condition) The public IP address, such as `58.211.1.12`.</li>
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on Offset, see the relevant section in the API [Introduction](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on Offset, see the relevant section in the API [Introduction](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 */
class DescribeCustomerGatewaysRequest extends AbstractModel
{
    /**
     * @var array Customer gateway ID, such as `cgw-2wqq41m9`. Each request can have a maximum of 100 instances. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
     */
    public $CustomerGatewayIds;

    /**
     * @var array The filter condition. For details, see the Instance Filter Conditions Table. The upper limit for `Filters` in each request is 10 and 5 for `Filter.Values`. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
<li>customer-gateway-id - String - (Filter condition) The unique ID of the user gateway, such as `cgw-mgp33pll`.</li>
<li>customer-gateway-name - String - (Filter condition) The name of the user gateway, such as `test-cgw`.</li>
<li>ip-address - String - (Filter condition) The public IP address, such as `58.211.1.12`.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on Offset, see the relevant section in the API [Introduction](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $CustomerGatewayIds Customer gateway ID, such as `cgw-2wqq41m9`. Each request can have a maximum of 100 instances. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters The filter condition. For details, see the Instance Filter Conditions Table. The upper limit for `Filters` in each request is 10 and 5 for `Filter.Values`. `CustomerGatewayIds` and `Filters` cannot be specified at the same time.
<li>customer-gateway-id - String - (Filter condition) The unique ID of the user gateway, such as `cgw-mgp33pll`.</li>
<li>customer-gateway-name - String - (Filter condition) The name of the user gateway, such as `test-cgw`.</li>
<li>ip-address - String - (Filter condition) The public IP address, such as `58.211.1.12`.</li>
     * @param integer $Offset Offset. Default value: 0. For more information on Offset, see the relevant section in the API [Introduction](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("CustomerGatewayIds",$param) and $param["CustomerGatewayIds"] !== null) {
            $this->CustomerGatewayIds = $param["CustomerGatewayIds"];
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
