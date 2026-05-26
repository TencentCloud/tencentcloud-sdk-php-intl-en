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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReadOnlyGroups request structure.
 *
 * @method array getFilters() Obtain Query using one or more filter criteria. filter criteria currently supported include:.
db-master-instance-id: specifies the primary instance to filter by (in string format).
read-only-group-id: Filter by read-only group ID, type string.
Note: in the filter criteria of this parameter, db-master-instance-id must be specified.
 * @method void setFilters(array $Filters) Set Query using one or more filter criteria. filter criteria currently supported include:.
db-master-instance-id: specifies the primary instance to filter by (in string format).
read-only-group-id: Filter by read-only group ID, type string.
Note: in the filter criteria of this parameter, db-master-instance-id must be specified.
 * @method integer getPageSize() Obtain Specifies the number of items per page. default value: 10. maximum value: 99.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of items per page. default value: 10. maximum value: 99.
 * @method integer getPageNumber() Obtain Specify which page is displayed. Default value: 1 (the first page).
 * @method void setPageNumber(integer $PageNumber) Set Specify which page is displayed. Default value: 1 (the first page).
 * @method string getOrderBy() Obtain Specifies the sorting basis for queries. currently supports: ROGroupId, CreateTime, Name. default value: CreateTime.
 * @method void setOrderBy(string $OrderBy) Set Specifies the sorting basis for queries. currently supports: ROGroupId, CreateTime, Name. default value: CreateTime.
 * @method string getOrderByType() Obtain Specifies the sorting basis type for queries. currently supports: desc, asc. default value: asc.
 * @method void setOrderByType(string $OrderByType) Set Specifies the sorting basis type for queries. currently supports: desc, asc. default value: asc.
 */
class DescribeReadOnlyGroupsRequest extends AbstractModel
{
    /**
     * @var array Query using one or more filter criteria. filter criteria currently supported include:.
db-master-instance-id: specifies the primary instance to filter by (in string format).
read-only-group-id: Filter by read-only group ID, type string.
Note: in the filter criteria of this parameter, db-master-instance-id must be specified.
     */
    public $Filters;

    /**
     * @var integer Specifies the number of items per page. default value: 10. maximum value: 99.
     */
    public $PageSize;

    /**
     * @var integer Specify which page is displayed. Default value: 1 (the first page).
     */
    public $PageNumber;

    /**
     * @var string Specifies the sorting basis for queries. currently supports: ROGroupId, CreateTime, Name. default value: CreateTime.
     */
    public $OrderBy;

    /**
     * @var string Specifies the sorting basis type for queries. currently supports: desc, asc. default value: asc.
     */
    public $OrderByType;

    /**
     * @param array $Filters Query using one or more filter criteria. filter criteria currently supported include:.
db-master-instance-id: specifies the primary instance to filter by (in string format).
read-only-group-id: Filter by read-only group ID, type string.
Note: in the filter criteria of this parameter, db-master-instance-id must be specified.
     * @param integer $PageSize Specifies the number of items per page. default value: 10. maximum value: 99.
     * @param integer $PageNumber Specify which page is displayed. Default value: 1 (the first page).
     * @param string $OrderBy Specifies the sorting basis for queries. currently supports: ROGroupId, CreateTime, Name. default value: CreateTime.
     * @param string $OrderByType Specifies the sorting basis type for queries. currently supports: desc, asc. default value: asc.
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
