<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method array getAddressIds() Obtain List of unique IDs for identifying Elastic IP (EIP). The EIP unique ID is in the format of `eip-11112222`. You can use the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the AddressId. The parameters `AddressIds` and `Filters.address-id` cannot be specified simultaneously.
 * @method void setAddressIds(array $AddressIds) Set List of unique IDs for identifying Elastic IP (EIP). The EIP unique ID is in the format of `eip-11112222`. You can use the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the AddressId. The parameters `AddressIds` and `Filters.address-id` cannot be specified simultaneously.
 * @method array getFilters() Obtain The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` per request is 100. The detailed filter conditions are as follows:
<li> address-id - String - Optional - Filter by the unique id of the EIP. the unique id of EIP is in the format of `EIP-11112222`. you can obtain the address-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-name - String - Optional - Filter by the EIP name. fuzzy filtering is not supported. available for use through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the address-name. note: when specifying the address-name parameter, only the first passed in address-name parameter is supported for query execution.</li>
<li> address-ip - String - Optional - Filter by the ip address of the EIP. you can obtain address-ip through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-status - String - Optional - Filter by the EIP status. valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by instance id bound to EIP. instance id is in the format of ins-11112222. you can obtain instance-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> private-ip-address - String - Optional - Filter by the private ip bound to the EIP. you can obtain private-ip-address through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API. note: when specifying the private-ip-address parameter, only the first passed-in private-ip-address parameter is supported for query execution.</li>
<li>network-interface-id - String - Optional - Filter by the id of the ENI bound to the EIP. the ENI id is in the format such as `eni-11112222`. you can obtain the network-interface-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> is-arrears - String - Optional - Filters by whether the EIP is overdue. (TRUE: EIP is overdue | FALSE: EIP is in normal fee state).</li>
<li>instance-type - String - Optional - Filters by the instance type bound to the EIP. valid values: `CVM`, `NAT`, `ENI`, `CLB`, `HAVIP`, `DHCPIP`, `EKS`, `VPCE`, and `WAF`.
Note: when using only the instance-type filter condition, the system returns by default the list of bound resources for all EIP types (including EIP, AnycastEIP, HighQualityEIP, AntiDDoSEIP, and ResidentialEIP). to query bound resources for a specific EIP type or `WanIP`, specify both the instance-type and address-type parameters to configure.
<li> address-type - String - Optional - Filter by IP type. valid values: `WanIP`, `EIP`, `AnycastEIP`, `HighQualityEIP`, `AntiDDoSEIP`, and `ResidentialEIP`. default value is `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li>tag-key - String - Optional - Filter by tag key.</li>
<li>tag-value - String - Optional - Filter by tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method void setFilters(array $Filters) Set The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` per request is 100. The detailed filter conditions are as follows:
<li> address-id - String - Optional - Filter by the unique id of the EIP. the unique id of EIP is in the format of `EIP-11112222`. you can obtain the address-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-name - String - Optional - Filter by the EIP name. fuzzy filtering is not supported. available for use through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the address-name. note: when specifying the address-name parameter, only the first passed in address-name parameter is supported for query execution.</li>
<li> address-ip - String - Optional - Filter by the ip address of the EIP. you can obtain address-ip through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-status - String - Optional - Filter by the EIP status. valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by instance id bound to EIP. instance id is in the format of ins-11112222. you can obtain instance-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> private-ip-address - String - Optional - Filter by the private ip bound to the EIP. you can obtain private-ip-address through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API. note: when specifying the private-ip-address parameter, only the first passed-in private-ip-address parameter is supported for query execution.</li>
<li>network-interface-id - String - Optional - Filter by the id of the ENI bound to the EIP. the ENI id is in the format such as `eni-11112222`. you can obtain the network-interface-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> is-arrears - String - Optional - Filters by whether the EIP is overdue. (TRUE: EIP is overdue | FALSE: EIP is in normal fee state).</li>
<li>instance-type - String - Optional - Filters by the instance type bound to the EIP. valid values: `CVM`, `NAT`, `ENI`, `CLB`, `HAVIP`, `DHCPIP`, `EKS`, `VPCE`, and `WAF`.
Note: when using only the instance-type filter condition, the system returns by default the list of bound resources for all EIP types (including EIP, AnycastEIP, HighQualityEIP, AntiDDoSEIP, and ResidentialEIP). to query bound resources for a specific EIP type or `WanIP`, specify both the instance-type and address-type parameters to configure.
<li> address-type - String - Optional - Filter by IP type. valid values: `WanIP`, `EIP`, `AnycastEIP`, `HighQualityEIP`, `AntiDDoSEIP`, and `ResidentialEIP`. default value is `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li>tag-key - String - Optional - Filter by tag key.</li>
<li>tag-value - String - Optional - Filter by tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
 * @method integer getOffset() Obtain The Offset. The default value is 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 * @method void setOffset(integer $Offset) Set The Offset. The default value is 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
 */
class DescribeAddressesRequest extends AbstractModel
{
    /**
     * @var array List of unique IDs for identifying Elastic IP (EIP). The EIP unique ID is in the format of `eip-11112222`. You can use the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the AddressId. The parameters `AddressIds` and `Filters.address-id` cannot be specified simultaneously.
     */
    public $AddressIds;

    /**
     * @var array The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` per request is 100. The detailed filter conditions are as follows:
<li> address-id - String - Optional - Filter by the unique id of the EIP. the unique id of EIP is in the format of `EIP-11112222`. you can obtain the address-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-name - String - Optional - Filter by the EIP name. fuzzy filtering is not supported. available for use through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the address-name. note: when specifying the address-name parameter, only the first passed in address-name parameter is supported for query execution.</li>
<li> address-ip - String - Optional - Filter by the ip address of the EIP. you can obtain address-ip through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-status - String - Optional - Filter by the EIP status. valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by instance id bound to EIP. instance id is in the format of ins-11112222. you can obtain instance-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> private-ip-address - String - Optional - Filter by the private ip bound to the EIP. you can obtain private-ip-address through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API. note: when specifying the private-ip-address parameter, only the first passed-in private-ip-address parameter is supported for query execution.</li>
<li>network-interface-id - String - Optional - Filter by the id of the ENI bound to the EIP. the ENI id is in the format such as `eni-11112222`. you can obtain the network-interface-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> is-arrears - String - Optional - Filters by whether the EIP is overdue. (TRUE: EIP is overdue | FALSE: EIP is in normal fee state).</li>
<li>instance-type - String - Optional - Filters by the instance type bound to the EIP. valid values: `CVM`, `NAT`, `ENI`, `CLB`, `HAVIP`, `DHCPIP`, `EKS`, `VPCE`, and `WAF`.
Note: when using only the instance-type filter condition, the system returns by default the list of bound resources for all EIP types (including EIP, AnycastEIP, HighQualityEIP, AntiDDoSEIP, and ResidentialEIP). to query bound resources for a specific EIP type or `WanIP`, specify both the instance-type and address-type parameters to configure.
<li> address-type - String - Optional - Filter by IP type. valid values: `WanIP`, `EIP`, `AnycastEIP`, `HighQualityEIP`, `AntiDDoSEIP`, and `ResidentialEIP`. default value is `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li>tag-key - String - Optional - Filter by tag key.</li>
<li>tag-value - String - Optional - Filter by tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
     */
    public $Filters;

    /**
     * @var integer The Offset. The default value is 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
     */
    public $Limit;

    /**
     * @param array $AddressIds List of unique IDs for identifying Elastic IP (EIP). The EIP unique ID is in the format of `eip-11112222`. You can use the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the AddressId. The parameters `AddressIds` and `Filters.address-id` cannot be specified simultaneously.
     * @param array $Filters The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` per request is 100. The detailed filter conditions are as follows:
<li> address-id - String - Optional - Filter by the unique id of the EIP. the unique id of EIP is in the format of `EIP-11112222`. you can obtain the address-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-name - String - Optional - Filter by the EIP name. fuzzy filtering is not supported. available for use through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API to obtain the address-name. note: when specifying the address-name parameter, only the first passed in address-name parameter is supported for query execution.</li>
<li> address-ip - String - Optional - Filter by the ip address of the EIP. you can obtain address-ip through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> address-status - String - Optional - Filter by the EIP status. valid values: `CREATING`, `BINDING`, `BIND`, `UNBINDING`, `UNBIND`, `OFFLINING`, and `BIND_ENI`.</li>
<li> instance-id - String - Optional - Filter by instance id bound to EIP. instance id is in the format of ins-11112222. you can obtain instance-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> private-ip-address - String - Optional - Filter by the private ip bound to the EIP. you can obtain private-ip-address through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API. note: when specifying the private-ip-address parameter, only the first passed-in private-ip-address parameter is supported for query execution.</li>
<li>network-interface-id - String - Optional - Filter by the id of the ENI bound to the EIP. the ENI id is in the format such as `eni-11112222`. you can obtain the network-interface-id through the [DescribeAddresses](https://www.tencentcloud.com/document/product/215/16702) API.</li>
<li> is-arrears - String - Optional - Filters by whether the EIP is overdue. (TRUE: EIP is overdue | FALSE: EIP is in normal fee state).</li>
<li>instance-type - String - Optional - Filters by the instance type bound to the EIP. valid values: `CVM`, `NAT`, `ENI`, `CLB`, `HAVIP`, `DHCPIP`, `EKS`, `VPCE`, and `WAF`.
Note: when using only the instance-type filter condition, the system returns by default the list of bound resources for all EIP types (including EIP, AnycastEIP, HighQualityEIP, AntiDDoSEIP, and ResidentialEIP). to query bound resources for a specific EIP type or `WanIP`, specify both the instance-type and address-type parameters to configure.
<li> address-type - String - Optional - Filter by IP type. valid values: `WanIP`, `EIP`, `AnycastEIP`, `HighQualityEIP`, `AntiDDoSEIP`, and `ResidentialEIP`. default value is `EIP`.</li>
<li> address-isp - String - Optional - Filter by ISP type. valid values: `BGP`, `CMCC`, `CUCC`, and `CTCC`.</li>
<li> dedicated-cluster-id - String - Optional - Filter by unique CDC ID, such as `cluster-11112222`.</li>
<li>tag-key - String - Optional - Filter by tag key.</li>
<li>tag-value - String - Optional - Filter by tag value.</li>
<li>tag:tag-key - String - Optional - Filter by tag key-value pair. Use a specific tag key to replace `tag-key`.</li>
     * @param integer $Offset The Offset. The default value is 0. For more information on Offset, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on Limit, see the relevant section in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688).
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
