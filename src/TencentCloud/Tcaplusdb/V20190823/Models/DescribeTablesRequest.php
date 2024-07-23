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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTables request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where the table to be queried resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where the table to be queried resides
 * @method array getTableGroupIds() Obtain List of IDs of the table groups where the table to be queried resides
 * @method void setTableGroupIds(array $TableGroupIds) Set List of IDs of the table groups where the table to be queried resides
 * @method array getSelectedTables() Obtain Information list of tables to be queried. If you need to filter the tables, use the`Filter` parameter.
 * @method void setSelectedTables(array $SelectedTables) Set Information list of tables to be queried. If you need to filter the tables, use the`Filter` parameter.
 * @method array getFilters() Obtain Filter. Valid values: TableName, TableInstanceId
 * @method void setFilters(array $Filters) Set Filter. Valid values: TableName, TableInstanceId
 * @method integer getOffset() Obtain Query result offset
 * @method void setOffset(integer $Offset) Set Query result offset
 * @method integer getLimit() Obtain Number of returned query results
 * @method void setLimit(integer $Limit) Set Number of returned query results
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where the table to be queried resides
     */
    public $ClusterId;

    /**
     * @var array List of IDs of the table groups where the table to be queried resides
     */
    public $TableGroupIds;

    /**
     * @var array Information list of tables to be queried. If you need to filter the tables, use the`Filter` parameter.
     */
    public $SelectedTables;

    /**
     * @var array Filter. Valid values: TableName, TableInstanceId
     */
    public $Filters;

    /**
     * @var integer Query result offset
     */
    public $Offset;

    /**
     * @var integer Number of returned query results
     */
    public $Limit;

    /**
     * @param string $ClusterId ID of the cluster where the table to be queried resides
     * @param array $TableGroupIds List of IDs of the table groups where the table to be queried resides
     * @param array $SelectedTables Information list of tables to be queried. If you need to filter the tables, use the`Filter` parameter.
     * @param array $Filters Filter. Valid values: TableName, TableInstanceId
     * @param integer $Offset Query result offset
     * @param integer $Limit Number of returned query results
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

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
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
