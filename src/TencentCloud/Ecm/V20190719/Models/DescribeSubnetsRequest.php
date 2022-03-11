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
 * DescribeSubnets request structure.
 *
 * @method array getSubnetIds() Obtain Subnet instance ID, such as `subnet-pxir56ns`. Each request supports a maximum of 100 instances. `SubnetIds` and `Filters` cannot be specified at the same time.
 * @method void setSubnetIds(array $SubnetIds) Set Subnet instance ID, such as `subnet-pxir56ns`. Each request supports a maximum of 100 instances. `SubnetIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter. `SubnetIds` and `Filters` cannot be specified at the same time.
subnet-id - String - Subnet instance name.
subnet-name - String - Subnet name. Only fuzzy query by a single value is supported.
cidr-block - String - Subnet IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
vpc-cidr-block  - String - VPC IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
region - String - ECM region.
zone - String - AZ.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
 * @method void setFilters(array $Filters) Set Filter. `SubnetIds` and `Filters` cannot be specified at the same time.
subnet-id - String - Subnet instance name.
subnet-name - String - Subnet name. Only fuzzy query by a single value is supported.
cidr-block - String - Subnet IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
vpc-cidr-block  - String - VPC IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
region - String - ECM region.
zone - String - AZ.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
 * @method string getOffset() Obtain Offset
 * @method void setOffset(string $Offset) Set Offset
 * @method string getLimit() Obtain Number of returned results.
 * @method void setLimit(string $Limit) Set Number of returned results.
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getSort() Obtain Sorting method. time: sort in reverse chronological order; default: sort by network planning.
 * @method void setSort(string $Sort) Set Sorting method. time: sort in reverse chronological order; default: sort by network planning.
 */
class DescribeSubnetsRequest extends AbstractModel
{
    /**
     * @var array Subnet instance ID, such as `subnet-pxir56ns`. Each request supports a maximum of 100 instances. `SubnetIds` and `Filters` cannot be specified at the same time.
     */
    public $SubnetIds;

    /**
     * @var array Filter. `SubnetIds` and `Filters` cannot be specified at the same time.
subnet-id - String - Subnet instance name.
subnet-name - String - Subnet name. Only fuzzy query by a single value is supported.
cidr-block - String - Subnet IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
vpc-cidr-block  - String - VPC IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
region - String - ECM region.
zone - String - AZ.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
     */
    public $Filters;

    /**
     * @var string Offset
     */
    public $Offset;

    /**
     * @var string Number of returned results.
     */
    public $Limit;

    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string Sorting method. time: sort in reverse chronological order; default: sort by network planning.
     */
    public $Sort;

    /**
     * @param array $SubnetIds Subnet instance ID, such as `subnet-pxir56ns`. Each request supports a maximum of 100 instances. `SubnetIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter. `SubnetIds` and `Filters` cannot be specified at the same time.
subnet-id - String - Subnet instance name.
subnet-name - String - Subnet name. Only fuzzy query by a single value is supported.
cidr-block - String - Subnet IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
vpc-cidr-block  - String - VPC IP address range, such as `192.168.1.0`. Only fuzzy query by a single value is supported.
region - String - ECM region.
zone - String - AZ.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
     * @param string $Offset Offset
     * @param string $Limit Number of returned results.
     * @param string $EcmRegion ECM region
     * @param string $Sort Sorting method. time: sort in reverse chronological order; default: sort by network planning.
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
        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
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

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
