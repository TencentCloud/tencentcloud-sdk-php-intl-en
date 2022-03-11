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
 * DescribeVpcs request structure.
 *
 * @method array getVpcIds() Obtain VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
 * @method void setVpcIds(array $VpcIds) Set VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter. `VpcIds` and `Filters` cannot be specified at the same time.
vpc-name - String - VPC instance name. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
cidr-block - String - VPC CIDR. Only fuzzy query by a single value is supported.
region - String - VPC region.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
 * @method void setFilters(array $Filters) Set Filter. `VpcIds` and `Filters` cannot be specified at the same time.
vpc-name - String - VPC instance name. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
cidr-block - String - VPC CIDR. Only fuzzy query by a single value is supported.
region - String - VPC region.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number of returned results.
 * @method void setLimit(integer $Limit) Set Number of returned results.
 * @method string getEcmRegion() Obtain Region
 * @method void setEcmRegion(string $EcmRegion) Set Region
 * @method string getSort() Obtain Sorting method. time: sort in reverse chronological order; default: sort by network planning.
 * @method void setSort(string $Sort) Set Sorting method. time: sort in reverse chronological order; default: sort by network planning.
 */
class DescribeVpcsRequest extends AbstractModel
{
    /**
     * @var array VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
     */
    public $VpcIds;

    /**
     * @var array Filter. `VpcIds` and `Filters` cannot be specified at the same time.
vpc-name - String - VPC instance name. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
cidr-block - String - VPC CIDR. Only fuzzy query by a single value is supported.
region - String - VPC region.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results.
     */
    public $Limit;

    /**
     * @var string Region
     */
    public $EcmRegion;

    /**
     * @var string Sorting method. time: sort in reverse chronological order; default: sort by network planning.
     */
    public $Sort;

    /**
     * @param array $VpcIds VPC instance ID, such as `vpc-f49l6u0z`. Each request supports a maximum of 100 instances. `VpcIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter. `VpcIds` and `Filters` cannot be specified at the same time.
vpc-name - String - VPC instance name. Only fuzzy query by a single value is supported.
vpc-id - String - VPC instance ID, such as `vpc-f49l6u0z`.
cidr-block - String - VPC CIDR. Only fuzzy query by a single value is supported.
region - String - VPC region.
tag-key - String - Required: no - Filter by tag key.
tag:tag-key - String - Required: no - Filter by tag key-value pair.
     * @param integer $Offset Offset
     * @param integer $Limit Number of returned results.
     * @param string $EcmRegion Region
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
        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
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
