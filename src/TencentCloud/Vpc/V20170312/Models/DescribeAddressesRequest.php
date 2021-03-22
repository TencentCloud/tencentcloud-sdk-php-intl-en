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
 * DescribeAddresses request structure.
 *
 * @method array getAddressIds() Obtain The list of unique IDs of EIPs in the format of `eip-11112222`. `AddressIds` and `Filters.address-id` cannot be specified at the same time.
 * @method void setAddressIds(array $AddressIds) Set The list of unique IDs of EIPs in the format of `eip-11112222`. `AddressIds` and `Filters.address-id` cannot be specified at the same time.
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `address-id` - String - Required: No - (Filter condition) Filter by the unique EIP ID in the format of `eip-11112222`.</li>
<li> `address-name` - String - Required: No - (Filter condition) Filter by EIP name. Fuzzy filtering is not supported. </li>
<li> `address-ip` - String - Required: No - (Filter condition) Filter by the IP address of EIP.</li>
<li> address-status - String - Required: no - (Filter condition) Filter by the EIP state. Possible EIP states are: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.</li>
<li> `instance-id` - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP in the format of `ins-11112222`.</li>
<li> `private-ip-address` - String - Required: No - (Filter condition) Filter by the private IP bound to the EIP.</li>
<li> `network-interface-id` - String - Required: No - (Filter condition) Filter by the ID of the ENI bound to the EIP in the format of `eni-11112222`.</li>
<li> `is-arrears` - String - Required: No - (Filter condition) Filter by whether the EIP is overdue. (TRUE: The EIP is overdue | FALSE: The EIP billing status is normal)</li>
<li> `address-type` - String - Required: No - (Filter condition) Filter by the IP type. Optional values: 'EIP'，'AnycastEIP'，'HighQualityEIP'</li>
<li> `address-isp` - String - Required: No - (Filter condition) Filter by the ISP type. Optional values: 'BGP'，'CMCC'，'CUCC', 'CTCC'</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `address-id` - String - Required: No - (Filter condition) Filter by the unique EIP ID in the format of `eip-11112222`.</li>
<li> `address-name` - String - Required: No - (Filter condition) Filter by EIP name. Fuzzy filtering is not supported. </li>
<li> `address-ip` - String - Required: No - (Filter condition) Filter by the IP address of EIP.</li>
<li> address-status - String - Required: no - (Filter condition) Filter by the EIP state. Possible EIP states are: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.</li>
<li> `instance-id` - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP in the format of `ins-11112222`.</li>
<li> `private-ip-address` - String - Required: No - (Filter condition) Filter by the private IP bound to the EIP.</li>
<li> `network-interface-id` - String - Required: No - (Filter condition) Filter by the ID of the ENI bound to the EIP in the format of `eni-11112222`.</li>
<li> `is-arrears` - String - Required: No - (Filter condition) Filter by whether the EIP is overdue. (TRUE: The EIP is overdue | FALSE: The EIP billing status is normal)</li>
<li> `address-type` - String - Required: No - (Filter condition) Filter by the IP type. Optional values: 'EIP'，'AnycastEIP'，'HighQualityEIP'</li>
<li> `address-isp` - String - Required: No - (Filter condition) Filter by the ISP type. Optional values: 'BGP'，'CMCC'，'CUCC', 'CTCC'</li>
 * @method integer getOffset() Obtain The Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
 * @method void setOffset(integer $Offset) Set The Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
 * @method integer getLimit() Obtain Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
 * @method void setLimit(integer $Limit) Set Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
 */
class DescribeAddressesRequest extends AbstractModel
{
    /**
     * @var array The list of unique IDs of EIPs in the format of `eip-11112222`. `AddressIds` and `Filters.address-id` cannot be specified at the same time.
     */
    public $AddressIds;

    /**
     * @var array Each request can have up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `address-id` - String - Required: No - (Filter condition) Filter by the unique EIP ID in the format of `eip-11112222`.</li>
<li> `address-name` - String - Required: No - (Filter condition) Filter by EIP name. Fuzzy filtering is not supported. </li>
<li> `address-ip` - String - Required: No - (Filter condition) Filter by the IP address of EIP.</li>
<li> address-status - String - Required: no - (Filter condition) Filter by the EIP state. Possible EIP states are: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.</li>
<li> `instance-id` - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP in the format of `ins-11112222`.</li>
<li> `private-ip-address` - String - Required: No - (Filter condition) Filter by the private IP bound to the EIP.</li>
<li> `network-interface-id` - String - Required: No - (Filter condition) Filter by the ID of the ENI bound to the EIP in the format of `eni-11112222`.</li>
<li> `is-arrears` - String - Required: No - (Filter condition) Filter by whether the EIP is overdue. (TRUE: The EIP is overdue | FALSE: The EIP billing status is normal)</li>
<li> `address-type` - String - Required: No - (Filter condition) Filter by the IP type. Optional values: 'EIP'，'AnycastEIP'，'HighQualityEIP'</li>
<li> `address-isp` - String - Required: No - (Filter condition) Filter by the ISP type. Optional values: 'BGP'，'CMCC'，'CUCC', 'CTCC'</li>
     */
    public $Filters;

    /**
     * @var integer The Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
     */
    public $Limit;

    /**
     * @param array $AddressIds The list of unique IDs of EIPs in the format of `eip-11112222`. `AddressIds` and `Filters.address-id` cannot be specified at the same time.
     * @param array $Filters Each request can have up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `address-id` - String - Required: No - (Filter condition) Filter by the unique EIP ID in the format of `eip-11112222`.</li>
<li> `address-name` - String - Required: No - (Filter condition) Filter by EIP name. Fuzzy filtering is not supported. </li>
<li> `address-ip` - String - Required: No - (Filter condition) Filter by the IP address of EIP.</li>
<li> address-status - String - Required: no - (Filter condition) Filter by the EIP state. Possible EIP states are: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', and 'BIND_ENI'.</li>
<li> `instance-id` - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP in the format of `ins-11112222`.</li>
<li> `private-ip-address` - String - Required: No - (Filter condition) Filter by the private IP bound to the EIP.</li>
<li> `network-interface-id` - String - Required: No - (Filter condition) Filter by the ID of the ENI bound to the EIP in the format of `eni-11112222`.</li>
<li> `is-arrears` - String - Required: No - (Filter condition) Filter by whether the EIP is overdue. (TRUE: The EIP is overdue | FALSE: The EIP billing status is normal)</li>
<li> `address-type` - String - Required: No - (Filter condition) Filter by the IP type. Optional values: 'EIP'，'AnycastEIP'，'HighQualityEIP'</li>
<li> `address-isp` - String - Required: No - (Filter condition) Filter by the ISP type. Optional values: 'BGP'，'CMCC'，'CUCC', 'CTCC'</li>
     * @param integer $Offset The Offset. The default value is 0. For more information on `Offset`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
     * @param integer $Limit Number of returned results. The default value is 20. The maximum is 100. For more information on `Limit`, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/product/11646).
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
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
