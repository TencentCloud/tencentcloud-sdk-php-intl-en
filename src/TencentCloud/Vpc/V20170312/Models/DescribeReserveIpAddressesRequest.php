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
 * DescribeReserveIpAddresses request structure.
 *
 * @method array getReserveIpIds() Obtain List of unique IDs of reserved private IP addresses.
 * @method void setReserveIpIds(array $ReserveIpIds) Set List of unique IDs of reserved private IP addresses.
 * @method array getFilters() Obtain Filter criteria. ReserveIpIds and Filters cannot be specified at the same time.

reserve-ip-id - String - (Filter criteria) Unique ID of a reserved private IP address, for example, rsvip-pvqgv9vi.
vpc-id - String - (Filter criteria) VPC instance ID, for example, vpc-f49l6u0z.
subnet-id - String - (Filter criteria) Subnet instance ID, for example, subnet-f49l6u0z.
address-ip - String - (Filter criteria) Reserved private IP address, for example, 192.168.0.10.
ip-type - String - (Filter criteria) Business type (IpType), for example, 0.
name - String - (Filter criteria) Name.
state - String - (Filter criteria) Status. Valid values: Bind and UnBind.
resource-id - String - (Filter criteria) Bound instance resource, for example, eni-059qmnif.
tag-key - String - (Filter criteria) Tag key.
tag:tag-key - String - (Filter criteria) Tag key-value pair. Replace tag-key with the specific tag key.

 * @method void setFilters(array $Filters) Set Filter criteria. ReserveIpIds and Filters cannot be specified at the same time.

reserve-ip-id - String - (Filter criteria) Unique ID of a reserved private IP address, for example, rsvip-pvqgv9vi.
vpc-id - String - (Filter criteria) VPC instance ID, for example, vpc-f49l6u0z.
subnet-id - String - (Filter criteria) Subnet instance ID, for example, subnet-f49l6u0z.
address-ip - String - (Filter criteria) Reserved private IP address, for example, 192.168.0.10.
ip-type - String - (Filter criteria) Business type (IpType), for example, 0.
name - String - (Filter criteria) Name.
state - String - (Filter criteria) Status. Valid values: Bind and UnBind.
resource-id - String - (Filter criteria) Bound instance resource, for example, eni-059qmnif.
tag-key - String - (Filter criteria) Tag key.
tag:tag-key - String - (Filter criteria) Tag key-value pair. Replace tag-key with the specific tag key.

 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Number of request objects.
 * @method void setLimit(integer $Limit) Set Number of request objects.
 */
class DescribeReserveIpAddressesRequest extends AbstractModel
{
    /**
     * @var array List of unique IDs of reserved private IP addresses.
     */
    public $ReserveIpIds;

    /**
     * @var array Filter criteria. ReserveIpIds and Filters cannot be specified at the same time.

reserve-ip-id - String - (Filter criteria) Unique ID of a reserved private IP address, for example, rsvip-pvqgv9vi.
vpc-id - String - (Filter criteria) VPC instance ID, for example, vpc-f49l6u0z.
subnet-id - String - (Filter criteria) Subnet instance ID, for example, subnet-f49l6u0z.
address-ip - String - (Filter criteria) Reserved private IP address, for example, 192.168.0.10.
ip-type - String - (Filter criteria) Business type (IpType), for example, 0.
name - String - (Filter criteria) Name.
state - String - (Filter criteria) Status. Valid values: Bind and UnBind.
resource-id - String - (Filter criteria) Bound instance resource, for example, eni-059qmnif.
tag-key - String - (Filter criteria) Tag key.
tag:tag-key - String - (Filter criteria) Tag key-value pair. Replace tag-key with the specific tag key.

     */
    public $Filters;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Number of request objects.
     */
    public $Limit;

    /**
     * @param array $ReserveIpIds List of unique IDs of reserved private IP addresses.
     * @param array $Filters Filter criteria. ReserveIpIds and Filters cannot be specified at the same time.

reserve-ip-id - String - (Filter criteria) Unique ID of a reserved private IP address, for example, rsvip-pvqgv9vi.
vpc-id - String - (Filter criteria) VPC instance ID, for example, vpc-f49l6u0z.
subnet-id - String - (Filter criteria) Subnet instance ID, for example, subnet-f49l6u0z.
address-ip - String - (Filter criteria) Reserved private IP address, for example, 192.168.0.10.
ip-type - String - (Filter criteria) Business type (IpType), for example, 0.
name - String - (Filter criteria) Name.
state - String - (Filter criteria) Status. Valid values: Bind and UnBind.
resource-id - String - (Filter criteria) Bound instance resource, for example, eni-059qmnif.
tag-key - String - (Filter criteria) Tag key.
tag:tag-key - String - (Filter criteria) Tag key-value pair. Replace tag-key with the specific tag key.

     * @param integer $Offset Offset.
     * @param integer $Limit Number of request objects.
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
        if (array_key_exists("ReserveIpIds",$param) and $param["ReserveIpIds"] !== null) {
            $this->ReserveIpIds = $param["ReserveIpIds"];
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
