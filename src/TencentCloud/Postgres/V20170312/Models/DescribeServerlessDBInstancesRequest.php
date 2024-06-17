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
 * DescribeServerlessDBInstances request structure.
 *
 * @method array getFilter() Obtain Query criteria. Query using one or more filter criteria. Filter criteria type (specified by the name field) currently supported include: 

- db-instance-id: filter by instance ID (in string format)
- db-instance-name: filter by instance name (in string format)
- db-tag-key: filter by instance tag (in string format)

The value field specifies the specific instance ID/instance name/instance tag-key to filter under this type of filter criteria.
 * @method void setFilter(array $Filter) Set Query criteria. Query using one or more filter criteria. Filter criteria type (specified by the name field) currently supported include: 

- db-instance-id: filter by instance ID (in string format)
- db-instance-name: filter by instance name (in string format)
- db-tag-key: filter by instance tag (in string format)

The value field specifies the specific instance ID/instance name/instance tag-key to filter under this type of filter criteria.
 * @method integer getLimit() Obtain The number of queries
 * @method void setLimit(integer $Limit) Set The number of queries
 * @method integer getOffset() Obtain The offset value
 * @method void setOffset(integer $Offset) Set The offset value
 * @method string getOrderBy() Obtain Sorting metric. Currently, only "CreateTime" (instance creation time) is supported.
 * @method void setOrderBy(string $OrderBy) Set Sorting metric. Currently, only "CreateTime" (instance creation time) is supported.
 * @method string getOrderByType() Obtain Sorting order. Ascending and descending are supported.
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Ascending and descending are supported.
 */
class DescribeServerlessDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Query criteria. Query using one or more filter criteria. Filter criteria type (specified by the name field) currently supported include: 

- db-instance-id: filter by instance ID (in string format)
- db-instance-name: filter by instance name (in string format)
- db-tag-key: filter by instance tag (in string format)

The value field specifies the specific instance ID/instance name/instance tag-key to filter under this type of filter criteria.
     */
    public $Filter;

    /**
     * @var integer The number of queries
     */
    public $Limit;

    /**
     * @var integer The offset value
     */
    public $Offset;

    /**
     * @var string Sorting metric. Currently, only "CreateTime" (instance creation time) is supported.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Ascending and descending are supported.
     */
    public $OrderByType;

    /**
     * @param array $Filter Query criteria. Query using one or more filter criteria. Filter criteria type (specified by the name field) currently supported include: 

- db-instance-id: filter by instance ID (in string format)
- db-instance-name: filter by instance name (in string format)
- db-tag-key: filter by instance tag (in string format)

The value field specifies the specific instance ID/instance name/instance tag-key to filter under this type of filter criteria.
     * @param integer $Limit The number of queries
     * @param integer $Offset The offset value
     * @param string $OrderBy Sorting metric. Currently, only "CreateTime" (instance creation time) is supported.
     * @param string $OrderByType Sorting order. Ascending and descending are supported.
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
