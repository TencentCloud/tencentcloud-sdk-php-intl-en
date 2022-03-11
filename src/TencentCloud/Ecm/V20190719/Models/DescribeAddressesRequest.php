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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddresses request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method array getAddressIds() Obtain List of unique IDs of EIPs, such as `eip-11112222`. `AddressIds` and `Filters` cannot be specified at the same time.
 * @method void setAddressIds(array $AddressIds) Set List of unique IDs of EIPs, such as `eip-11112222`. `AddressIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Each request can contain up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The detailed filters are as follows:
address-id - String - Required: no - (Filter) Filter by unique EIP ID, such as `eip-11112222`.
address-name - String - Required: no - (Filter) Filter by EIP name. Fuzzy filtering is not supported.
address-ip - String - Required: no - (Filter) Filter by EIP IP address.
address-status - String - Required: no - (Filter) Filter by EIP status. Value range: see the list of EIP status.
instance-id - String - Required: no - (Filter) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.
private-ip-address - String - Required: no - (Filter) Filter by the private IP bound to the EIP.
network-interface-id - String - Required: no - (Filter) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.
is-arrears - String - Required: no - (Filter) Filter by whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal)
 * @method void setFilters(array $Filters) Set Each request can contain up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The detailed filters are as follows:
address-id - String - Required: no - (Filter) Filter by unique EIP ID, such as `eip-11112222`.
address-name - String - Required: no - (Filter) Filter by EIP name. Fuzzy filtering is not supported.
address-ip - String - Required: no - (Filter) Filter by EIP IP address.
address-status - String - Required: no - (Filter) Filter by EIP status. Value range: see the list of EIP status.
instance-id - String - Required: no - (Filter) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.
private-ip-address - String - Required: no - (Filter) Filter by the private IP bound to the EIP.
network-interface-id - String - Required: no - (Filter) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.
is-arrears - String - Required: no - (Filter) Filter by whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal)
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100.
 */
class DescribeAddressesRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var array List of unique IDs of EIPs, such as `eip-11112222`. `AddressIds` and `Filters` cannot be specified at the same time.
     */
    public $AddressIds;

    /**
     * @var array Each request can contain up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The detailed filters are as follows:
address-id - String - Required: no - (Filter) Filter by unique EIP ID, such as `eip-11112222`.
address-name - String - Required: no - (Filter) Filter by EIP name. Fuzzy filtering is not supported.
address-ip - String - Required: no - (Filter) Filter by EIP IP address.
address-status - String - Required: no - (Filter) Filter by EIP status. Value range: see the list of EIP status.
instance-id - String - Required: no - (Filter) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.
private-ip-address - String - Required: no - (Filter) Filter by the private IP bound to the EIP.
network-interface-id - String - Required: no - (Filter) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.
is-arrears - String - Required: no - (Filter) Filter by whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal)
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $EcmRegion ECM region
     * @param array $AddressIds List of unique IDs of EIPs, such as `eip-11112222`. `AddressIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Each request can contain up to 10 `Filters` and 5 `Filter.Values`. `AddressIds` and `Filters` cannot be specified at the same time. The detailed filters are as follows:
address-id - String - Required: no - (Filter) Filter by unique EIP ID, such as `eip-11112222`.
address-name - String - Required: no - (Filter) Filter by EIP name. Fuzzy filtering is not supported.
address-ip - String - Required: no - (Filter) Filter by EIP IP address.
address-status - String - Required: no - (Filter) Filter by EIP status. Value range: see the list of EIP status.
instance-id - String - Required: no - (Filter) Filter by the ID of the instance bound to the EIP, such as `ins-11112222`.
private-ip-address - String - Required: no - (Filter) Filter by the private IP bound to the EIP.
network-interface-id - String - Required: no - (Filter) Filter by ID of the ENI bound to the EIP, such as `eni-11112222`.
is-arrears - String - Required: no - (Filter) Filter by whether the EIP is overdue (TRUE: the EIP is overdue | FALSE: the billing status of the EIP is normal)
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
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
