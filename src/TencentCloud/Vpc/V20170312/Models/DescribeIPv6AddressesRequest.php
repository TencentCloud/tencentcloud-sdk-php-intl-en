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
 * DescribeIPv6Addresses request structure.
 *
 * @method array getIPv6AddressIds() Obtain Unique ID column identifying IPv6.

- Unique ID of the traditional EIPv6, such as `eip-11112222`
- Unique ID of the EIPv6, such as `eipv6-11112222`

Note: `IPv6AddressIds` and `Filters` cannot be specified at the same time.
 * @method void setIPv6AddressIds(array $IPv6AddressIds) Set Unique ID column identifying IPv6.

- Unique ID of the traditional EIPv6, such as `eip-11112222`
- Unique ID of the EIPv6, such as `eipv6-11112222`

Note: `IPv6AddressIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` and 100 `Filter.Values`. `IPv6AddressIds` and `Filters` cannot be specified at the same time. The detailed filter conditions are as follows:

- address-id - String - Required: No - (Filter condition) Filter by the unique ID of the EIPv6.
- public-ipv6-address - String - Required: No - (Filter condition) Filter by the public IPv6 address.
- network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of the ENI.
- instance-id - String - Required: No - (Filter condition) Filter by the unique ID of the bound instance.
- charge-type - String - Required: No - (Filter condition) Filter by the billing type.
- private-ipv6-address - String - Required: No - (Filter condition) Filter by the bound private IPv6 address.
- egress - String - Required: No - (Filter condition) Filter by the egress.
- address-type - String - Required: No - (Filter condition) Filter by the IPv6 type. Valid values: 'EIP6', 'EIPv6', 'WanIPv6', and 'HighQualityEIPv6'. Default: 'EIPv6'.
- address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: 'BGP', 'CMCC', 'CUCC', and 'CTCC'.
- address-status - String - Required: No - (Filter condition) Filter by the EIP status. Valid values: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', 'BIND_ENI', and 'PRIVATE'.
- address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.
- tag-key - String - Required: No - (Filter condition) Filter by the tag key.
- tag-value - String - Required: No - (Filter condition) Filter by the tag value.
- tag:tag-key - String - Required: No - (Filter condition) Filter by the tag-key - value pair. Replace tag-key with a specific tag key.
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` and 100 `Filter.Values`. `IPv6AddressIds` and `Filters` cannot be specified at the same time. The detailed filter conditions are as follows:

- address-id - String - Required: No - (Filter condition) Filter by the unique ID of the EIPv6.
- public-ipv6-address - String - Required: No - (Filter condition) Filter by the public IPv6 address.
- network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of the ENI.
- instance-id - String - Required: No - (Filter condition) Filter by the unique ID of the bound instance.
- charge-type - String - Required: No - (Filter condition) Filter by the billing type.
- private-ipv6-address - String - Required: No - (Filter condition) Filter by the bound private IPv6 address.
- egress - String - Required: No - (Filter condition) Filter by the egress.
- address-type - String - Required: No - (Filter condition) Filter by the IPv6 type. Valid values: 'EIP6', 'EIPv6', 'WanIPv6', and 'HighQualityEIPv6'. Default: 'EIPv6'.
- address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: 'BGP', 'CMCC', 'CUCC', and 'CTCC'.
- address-status - String - Required: No - (Filter condition) Filter by the EIP status. Valid values: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', 'BIND_ENI', and 'PRIVATE'.
- address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.
- tag-key - String - Required: No - (Filter condition) Filter by the tag key.
- tag-value - String - Required: No - (Filter condition) Filter by the tag value.
- tag:tag-key - String - Required: No - (Filter condition) Filter by the tag-key - value pair. Replace tag-key with a specific tag key.
 * @method boolean getTraditional() Obtain Indicates whether to query the traditional IPv6 address information.
 * @method void setTraditional(boolean $Traditional) Set Indicates whether to query the traditional IPv6 address information.
 * @method integer getOffset() Obtain Offset. Default: 0. For more information on Offset, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default: 0. For more information on Offset, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default: 20. Maximum: 100. For more information on Limit, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default: 20. Maximum: 100. For more information on Limit, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 */
class DescribeIPv6AddressesRequest extends AbstractModel
{
    /**
     * @var array Unique ID column identifying IPv6.

- Unique ID of the traditional EIPv6, such as `eip-11112222`
- Unique ID of the EIPv6, such as `eipv6-11112222`

Note: `IPv6AddressIds` and `Filters` cannot be specified at the same time.
     */
    public $IPv6AddressIds;

    /**
     * @var array Each request can have up to 10 `Filters` and 100 `Filter.Values`. `IPv6AddressIds` and `Filters` cannot be specified at the same time. The detailed filter conditions are as follows:

- address-id - String - Required: No - (Filter condition) Filter by the unique ID of the EIPv6.
- public-ipv6-address - String - Required: No - (Filter condition) Filter by the public IPv6 address.
- network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of the ENI.
- instance-id - String - Required: No - (Filter condition) Filter by the unique ID of the bound instance.
- charge-type - String - Required: No - (Filter condition) Filter by the billing type.
- private-ipv6-address - String - Required: No - (Filter condition) Filter by the bound private IPv6 address.
- egress - String - Required: No - (Filter condition) Filter by the egress.
- address-type - String - Required: No - (Filter condition) Filter by the IPv6 type. Valid values: 'EIP6', 'EIPv6', 'WanIPv6', and 'HighQualityEIPv6'. Default: 'EIPv6'.
- address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: 'BGP', 'CMCC', 'CUCC', and 'CTCC'.
- address-status - String - Required: No - (Filter condition) Filter by the EIP status. Valid values: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', 'BIND_ENI', and 'PRIVATE'.
- address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.
- tag-key - String - Required: No - (Filter condition) Filter by the tag key.
- tag-value - String - Required: No - (Filter condition) Filter by the tag value.
- tag:tag-key - String - Required: No - (Filter condition) Filter by the tag-key - value pair. Replace tag-key with a specific tag key.
     */
    public $Filters;

    /**
     * @var boolean Indicates whether to query the traditional IPv6 address information.
     */
    public $Traditional;

    /**
     * @var integer Offset. Default: 0. For more information on Offset, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default: 20. Maximum: 100. For more information on Limit, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $IPv6AddressIds Unique ID column identifying IPv6.

- Unique ID of the traditional EIPv6, such as `eip-11112222`
- Unique ID of the EIPv6, such as `eipv6-11112222`

Note: `IPv6AddressIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Each request can have up to 10 `Filters` and 100 `Filter.Values`. `IPv6AddressIds` and `Filters` cannot be specified at the same time. The detailed filter conditions are as follows:

- address-id - String - Required: No - (Filter condition) Filter by the unique ID of the EIPv6.
- public-ipv6-address - String - Required: No - (Filter condition) Filter by the public IPv6 address.
- network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of the ENI.
- instance-id - String - Required: No - (Filter condition) Filter by the unique ID of the bound instance.
- charge-type - String - Required: No - (Filter condition) Filter by the billing type.
- private-ipv6-address - String - Required: No - (Filter condition) Filter by the bound private IPv6 address.
- egress - String - Required: No - (Filter condition) Filter by the egress.
- address-type - String - Required: No - (Filter condition) Filter by the IPv6 type. Valid values: 'EIP6', 'EIPv6', 'WanIPv6', and 'HighQualityEIPv6'. Default: 'EIPv6'.
- address-isp - String - Required: No - (Filter condition) Filter by the ISP type. Valid values: 'BGP', 'CMCC', 'CUCC', and 'CTCC'.
- address-status - String - Required: No - (Filter condition) Filter by the EIP status. Valid values: 'CREATING', 'BINDING', 'BIND', 'UNBINDING', 'UNBIND', 'OFFLINING', 'BIND_ENI', and 'PRIVATE'.
- address-name - String - Required: No - (Filter condition) Filter by the EIP name. Fuzzy filtering is not supported.
- tag-key - String - Required: No - (Filter condition) Filter by the tag key.
- tag-value - String - Required: No - (Filter condition) Filter by the tag value.
- tag:tag-key - String - Required: No - (Filter condition) Filter by the tag-key - value pair. Replace tag-key with a specific tag key.
     * @param boolean $Traditional Indicates whether to query the traditional IPv6 address information.
     * @param integer $Offset Offset. Default: 0. For more information on Offset, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default: 20. Maximum: 100. For more information on Limit, see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
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
        if (array_key_exists("IPv6AddressIds",$param) and $param["IPv6AddressIds"] !== null) {
            $this->IPv6AddressIds = $param["IPv6AddressIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Traditional",$param) and $param["Traditional"] !== null) {
            $this->Traditional = $param["Traditional"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
