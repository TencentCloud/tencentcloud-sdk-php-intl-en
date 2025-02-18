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
 * DescribeIp6Addresses request structure.
 *
 * @method array getIp6AddressIds() Obtain List of unique IDs that identify IPv6 instances. The unique ID of an IPv6 instance is in the format of `eip-11112222`. Parameters `Ip6AddressIds` and `Filters` cannot be specified at the same time.
 * @method void setIp6AddressIds(array $Ip6AddressIds) Set List of unique IDs that identify IPv6 instances. The unique ID of an IPv6 instance is in the format of `eip-11112222`. Parameters `Ip6AddressIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Each request can have up to 10 `Filters` values and 100 `Filter.Values` values. Parameters `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li>address-ip - String - Required: No - (Filter condition) Filter by the IP address of IPv6 instances.</li>
<li>network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of ENIs.</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters` values and 100 `Filter.Values` values. Parameters `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li>address-ip - String - Required: No - (Filter condition) Filter by the IP address of IPv6 instances.</li>
<li>network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of ENIs.</li>
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
 */
class DescribeIp6AddressesRequest extends AbstractModel
{
    /**
     * @var array List of unique IDs that identify IPv6 instances. The unique ID of an IPv6 instance is in the format of `eip-11112222`. Parameters `Ip6AddressIds` and `Filters` cannot be specified at the same time.
     */
    public $Ip6AddressIds;

    /**
     * @var array Each request can have up to 10 `Filters` values and 100 `Filter.Values` values. Parameters `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li>address-ip - String - Required: No - (Filter condition) Filter by the IP address of IPv6 instances.</li>
<li>network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of ENIs.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $Ip6AddressIds List of unique IDs that identify IPv6 instances. The unique ID of an IPv6 instance is in the format of `eip-11112222`. Parameters `Ip6AddressIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Each request can have up to 10 `Filters` values and 100 `Filter.Values` values. Parameters `AddressIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li>address-ip - String - Required: No - (Filter condition) Filter by the IP address of IPv6 instances.</li>
<li>network-interface-id - String - Required: No - (Filter condition) Filter by the unique ID of ENIs.</li>
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/11646?from_cn_redirect=1).
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
        if (array_key_exists("Ip6AddressIds",$param) and $param["Ip6AddressIds"] !== null) {
            $this->Ip6AddressIds = $param["Ip6AddressIds"];
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
