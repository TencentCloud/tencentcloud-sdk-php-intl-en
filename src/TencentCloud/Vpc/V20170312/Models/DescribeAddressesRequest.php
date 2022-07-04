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
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> address-id - String - Optional - Filter by unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Optional - Filter by EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Optional - Filter by EIP address.</li>
<li> address-status - String - Optional - Filter by EIP status. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Optional - Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Optional - Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Optional - Filter by the fact whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Optional - Filter by IP type. Valid values: `WanIP`, `EIP`, `AnycastEIP`, and `HighQualityEIP`. Default value: `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Optional - Filter by tag key.</li>
<li> tag-value - String - Optional - Filter by tag value.</li>
<li> tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> address-id - String - Optional - Filter by unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Optional - Filter by EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Optional - Filter by EIP address.</li>
<li> address-status - String - Optional - Filter by EIP status. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Optional - Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Optional - Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Optional - Filter by the fact whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Optional - Filter by IP type. Valid values: `WanIP`, `EIP`, `AnycastEIP`, and `HighQualityEIP`. Default value: `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Optional - Filter by tag key.</li>
<li> tag-value - String - Optional - Filter by tag value.</li>
<li> tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method integer getOffset() Obtain The Offset. The default value is 0. For more information about `Offset`, see the relevant section in the API documentation.
 * @method void setOffset(integer $Offset) Set The Offset. The default value is 0. For more information about `Offset`, see the relevant section in the API documentation.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API documentation.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API documentation.
 */
class DescribeAddressesRequest extends AbstractModel
{
    /**
     * @var array The list of unique IDs of EIPs in the format of `eip-11112222`. `AddressIds` and `Filters.address-id` cannot be specified at the same time.
     */
    public $AddressIds;

    /**
     * @var array Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> address-id - String - Optional - Filter by unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Optional - Filter by EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Optional - Filter by EIP address.</li>
<li> address-status - String - Optional - Filter by EIP status. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Optional - Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Optional - Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Optional - Filter by the fact whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Optional - Filter by IP type. Valid values: `WanIP`, `EIP`, `AnycastEIP`, and `HighQualityEIP`. Default value: `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Optional - Filter by tag key.</li>
<li> tag-value - String - Optional - Filter by tag value.</li>
<li> tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
     */
    public $Filters;

    /**
     * @var integer The Offset. The default value is 0. For more information about `Offset`, see the relevant section in the API documentation.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API documentation.
     */
    public $Limit;

    /**
     * @param array $AddressIds The list of unique IDs of EIPs in the format of `eip-11112222`. `AddressIds` and `Filters.address-id` cannot be specified at the same time.
     * @param array $Filters Each request can have up to 10 `Filters` and 100 `Filter.Values`. Detailed filter conditions:
<li> address-id - String - Optional - Filter by unique EIP ID, such as `eip-11112222`.</li>
<li> address-name - String - Optional - Filter by EIP name. Fuzzy filtering is not supported.</li>
<li> address-ip - String - Optional - Filter by EIP address.</li>
<li> address-status - String - Optional - Filter by EIP status. Valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.</li>
<li> private-ip-address - String - Optional - Filter by the private IP address bound to the EIP.</li>
<li> network-interface-id - String - Optional - Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.</li>
<li> is-arrears - String - Optional - Filter by the fact whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal).</li>
<li> address-type - String - Optional - Filter by IP type. Valid values: `WanIP`, `EIP`, `AnycastEIP`, and `HighQualityEIP`. Default value: `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. Valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li> tag-key - String - Optional - Filter by tag key.</li>
<li> tag-value - String - Optional - Filter by tag value.</li>
<li> tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
     * @param integer $Offset The Offset. The default value is 0. For more information about `Offset`, see the relevant section in the API documentation.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API documentation.
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
