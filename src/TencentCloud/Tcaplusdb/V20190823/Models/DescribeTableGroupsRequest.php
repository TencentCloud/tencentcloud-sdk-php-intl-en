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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableGroups request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where a table group resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a table group resides
 * @method array getTableGroupIds() Obtain Table group ID list
 * @method void setTableGroupIds(array $TableGroupIds) Set Table group ID list
 * @method array getFilters() Obtain Filter. Valid values: TableGroupName, TableGroupId
 * @method void setFilters(array $Filters) Set Filter. Valid values: TableGroupName, TableGroupId
 * @method integer getOffset() Obtain Query list offset
 * @method void setOffset(integer $Offset) Set Query list offset
 * @method integer getLimit() Obtain Number of returned results in query list
 * @method void setLimit(integer $Limit) Set Number of returned results in query list
 */
class DescribeTableGroupsRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where a table group resides
     */
    public $ClusterId;

    /**
     * @var array Table group ID list
     */
    public $TableGroupIds;

    /**
     * @var array Filter. Valid values: TableGroupName, TableGroupId
     */
    public $Filters;

    /**
     * @var integer Query list offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results in query list
     */
    public $Limit;

    /**
     * @param string $ClusterId ID of the cluster where a table group resides
     * @param array $TableGroupIds Table group ID list
     * @param array $Filters Filter. Valid values: TableGroupName, TableGroupId
     * @param integer $Offset Query list offset
     * @param integer $Limit Number of returned results in query list
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupIds",$param) and $param["TableGroupIds"] !== null) {
            $this->TableGroupIds = $param["TableGroupIds"];
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
