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
<li> address-id - String - Required: No - (Filter condition) Filter by the unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Required: No - (Filter condition) Filter by EIP.</li>
<li> address-status - String - Required: No - (Filter condition) Filter by the EIP state. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Required: No - (Filter condition) Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Required: No - (Filter condition) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Required: No - (Filter condition) Whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Required: No - (Filter condition) Filter by the IP type. Valid values: `EIP`, `AnycastEIP`, and `HighQualityEIP`.</li>
<li> address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Required: No - (Filter condition) Filter by the unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> address-id - String - Required: No - (Filter condition) Filter by the unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Required: No - (Filter condition) Filter by EIP.</li>
<li> address-status - String - Required: No - (Filter condition) Filter by the EIP state. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Required: No - (Filter condition) Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Required: No - (Filter condition) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Required: No - (Filter condition) Whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Required: No - (Filter condition) Filter by the IP type. Valid values: `EIP`, `AnycastEIP`, and `HighQualityEIP`.</li>
<li> address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Required: No - (Filter condition) Filter by the unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
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
<li> address-id - String - Required: No - (Filter condition) Filter by the unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Required: No - (Filter condition) Filter by EIP.</li>
<li> address-status - String - Required: No - (Filter condition) Filter by the EIP state. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Required: No - (Filter condition) Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Required: No - (Filter condition) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Required: No - (Filter condition) Whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Required: No - (Filter condition) Filter by the IP type. Valid values: `EIP`, `AnycastEIP`, and `HighQualityEIP`.</li>
<li> address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Required: No - (Filter condition) Filter by the unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
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
<li> address-id - String - Required: No - (Filter condition) Filter by the unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Required: No - (Filter condition) Filter by EIP.</li>
<li> address-status - String - Required: No - (Filter condition) Filter by the EIP state. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Required: No - (Filter condition) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Required: No - (Filter condition) Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Required: No - (Filter condition) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Required: No - (Filter condition) Whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Required: No - (Filter condition) Filter by the IP type. Valid values: `EIP`, `AnycastEIP`, and `HighQualityEIP`.</li>
<li> address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Required: No - (Filter condition) Filter by the unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Required: No - (Filter condition) Filter by tag key.</li>
<li> tag-value - String - Required: No - (Filter condition) Filter by tag value.</li>
<li> tag:tag-key - String - Required: No - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
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
