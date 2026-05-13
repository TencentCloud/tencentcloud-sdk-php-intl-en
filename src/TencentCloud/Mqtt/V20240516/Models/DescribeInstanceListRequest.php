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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceList request structure.
 *
 * @method array getFilters() Obtain Query criteria list, support the following fields
InstanceName: Fuzzy search for cluster name
InstanceId: Cluster id for exact search
InstanceStatus: Cluster status search (RUNNING - running, CREATING - creating, MODIFYING - modifying, DELETING - deleting)
Note: The query condition is not effective when TagFilters is configured.
 * @method void setFilters(array $Filters) Set Query criteria list, support the following fields
InstanceName: Fuzzy search for cluster name
InstanceId: Cluster id for exact search
InstanceStatus: Cluster status search (RUNNING - running, CREATING - creating, MODIFYING - modifying, DELETING - deleting)
Note: The query condition is not effective when TagFilters is configured.
 * @method integer getOffset() Obtain Query start position, default 0
 * @method void setOffset(integer $Offset) Set Query start position, default 0
 * @method integer getLimit() Obtain Query result limit count. Default 20. Maximum 100.
 * @method void setLimit(integer $Limit) Set Query result limit count. Default 20. Maximum 100.
 * @method array getTagFilters() Obtain Tag filter
 * @method void setTagFilters(array $TagFilters) Set Tag filter
 */
class DescribeInstanceListRequest extends AbstractModel
{
    /**
     * @var array Query criteria list, support the following fields
InstanceName: Fuzzy search for cluster name
InstanceId: Cluster id for exact search
InstanceStatus: Cluster status search (RUNNING - running, CREATING - creating, MODIFYING - modifying, DELETING - deleting)
Note: The query condition is not effective when TagFilters is configured.
     */
    public $Filters;

    /**
     * @var integer Query start position, default 0
     */
    public $Offset;

    /**
     * @var integer Query result limit count. Default 20. Maximum 100.
     */
    public $Limit;

    /**
     * @var array Tag filter
     */
    public $TagFilters;

    /**
     * @param array $Filters Query criteria list, support the following fields
InstanceName: Fuzzy search for cluster name
InstanceId: Cluster id for exact search
InstanceStatus: Cluster status search (RUNNING - running, CREATING - creating, MODIFYING - modifying, DELETING - deleting)
Note: The query condition is not effective when TagFilters is configured.
     * @param integer $Offset Query start position, default 0
     * @param integer $Limit Query result limit count. Default 20. Maximum 100.
     * @param array $TagFilters Tag filter
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
