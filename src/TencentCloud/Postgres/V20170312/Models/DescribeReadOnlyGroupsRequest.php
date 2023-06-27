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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReadOnlyGroups request structure.
 *
 * @method array getFilters() Obtain Filter instances by using one or more filters. Valid values:  `db-master-instance-id` (filter by the primary instance ID in string), `read-only-group-id` (filter by the read-only group ID in string),
 * @method void setFilters(array $Filters) Set Filter instances by using one or more filters. Valid values:  `db-master-instance-id` (filter by the primary instance ID in string), `read-only-group-id` (filter by the read-only group ID in string),
 * @method integer getPageSize() Obtain The number of results per page. Default value: 10.
 * @method void setPageSize(integer $PageSize) Set The number of results per page. Default value: 10.
 * @method integer getPageNumber() Obtain Specify which page is displayed. Default value: 1 (the first page).
 * @method void setPageNumber(integer $PageNumber) Set Specify which page is displayed. Default value: 1 (the first page).
 * @method string getOrderBy() Obtain Sorting criterion. Valid values: `ROGroupId`, `CreateTime`, `Name`.
 * @method void setOrderBy(string $OrderBy) Set Sorting criterion. Valid values: `ROGroupId`, `CreateTime`, `Name`.
 * @method string getOrderByType() Obtain Sorting order. Valid values: `desc`, `asc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `desc`, `asc`.
 */
class DescribeReadOnlyGroupsRequest extends AbstractModel
{
    /**
     * @var array Filter instances by using one or more filters. Valid values:  `db-master-instance-id` (filter by the primary instance ID in string), `read-only-group-id` (filter by the read-only group ID in string),
     */
    public $Filters;

    /**
     * @var integer The number of results per page. Default value: 10.
     */
    public $PageSize;

    /**
     * @var integer Specify which page is displayed. Default value: 1 (the first page).
     */
    public $PageNumber;

    /**
     * @var string Sorting criterion. Valid values: `ROGroupId`, `CreateTime`, `Name`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `desc`, `asc`.
     */
    public $OrderByType;

    /**
     * @param array $Filters Filter instances by using one or more filters. Valid values:  `db-master-instance-id` (filter by the primary instance ID in string), `read-only-group-id` (filter by the read-only group ID in string),
     * @param integer $PageSize The number of results per page. Default value: 10.
     * @param integer $PageNumber Specify which page is displayed. Default value: 1 (the first page).
     * @param string $OrderBy Sorting criterion. Valid values: `ROGroupId`, `CreateTime`, `Name`.
     * @param string $OrderByType Sorting order. Valid values: `desc`, `asc`.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
