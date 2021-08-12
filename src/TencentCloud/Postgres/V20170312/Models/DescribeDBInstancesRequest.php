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
 * DescribeDBInstances request structure.
 *
 * @method array getFilters() Obtain Filter instances using one or more criteria. Valid filter names:
db-instance-id: filter by instance ID (in string format)
db-instance-name: filter by instance name (in string format)
db-project-id: filter by project ID (in integer format)
db-pay-mode: filter by billing mode (in string format)
db-tag-key: filter by tag key (in string format)
 * @method void setFilters(array $Filters) Set Filter instances using one or more criteria. Valid filter names:
db-instance-id: filter by instance ID (in string format)
db-instance-name: filter by instance name (in string format)
db-project-id: filter by project ID (in integer format)
db-pay-mode: filter by billing mode (in string format)
db-tag-key: filter by tag key (in string format)
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 1-100. Default: `10`
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 1-100. Default: `10`
 * @method string getOrderBy() Obtain Sorting metric, such as instance name or creation time. Valid values: DBInstanceId, CreateTime, Name, EndTime
 * @method void setOrderBy(string $OrderBy) Set Sorting metric, such as instance name or creation time. Valid values: DBInstanceId, CreateTime, Name, EndTime
 * @method integer getOffset() Obtain Pagination offset, starting from 0
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0
 * @method string getOrderByType() Obtain Sorting order. Valid values: `asc` (ascending), `desc` (descending)
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `asc` (ascending), `desc` (descending)
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter instances using one or more criteria. Valid filter names:
db-instance-id: filter by instance ID (in string format)
db-instance-name: filter by instance name (in string format)
db-project-id: filter by project ID (in integer format)
db-pay-mode: filter by billing mode (in string format)
db-tag-key: filter by tag key (in string format)
     */
    public $Filters;

    /**
     * @var integer The maximum number of results returned per page. Value range: 1-100. Default: `10`
     */
    public $Limit;

    /**
     * @var string Sorting metric, such as instance name or creation time. Valid values: DBInstanceId, CreateTime, Name, EndTime
     */
    public $OrderBy;

    /**
     * @var integer Pagination offset, starting from 0
     */
    public $Offset;

    /**
     * @var string Sorting order. Valid values: `asc` (ascending), `desc` (descending)
     */
    public $OrderByType;

    /**
     * @param array $Filters Filter instances using one or more criteria. Valid filter names:
db-instance-id: filter by instance ID (in string format)
db-instance-name: filter by instance name (in string format)
db-project-id: filter by project ID (in integer format)
db-pay-mode: filter by billing mode (in string format)
db-tag-key: filter by tag key (in string format)
     * @param integer $Limit The maximum number of results returned per page. Value range: 1-100. Default: `10`
     * @param string $OrderBy Sorting metric, such as instance name or creation time. Valid values: DBInstanceId, CreateTime, Name, EndTime
     * @param integer $Offset Pagination offset, starting from 0
     * @param string $OrderByType Sorting order. Valid values: `asc` (ascending), `desc` (descending)
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
