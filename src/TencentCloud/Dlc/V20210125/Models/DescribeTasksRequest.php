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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method integer getLimit() Obtain Number of returned results. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filter. The following filters are supported, and the `Name` input parameter must be one of them. Up to 50 `task-id` values can be filtered, while up to 5 other parameters can be filtered in total.
task-id - String - (filter by task ID). `task-id` format: e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filter exactly by task status). Valid values: `0` (initial), `1` (running), `2` (succeeded), `-1` (failed).
task-sql-keyword - String - (filter fuzzily by SQL statement keyword, such as `DROP TABLE`).
task-operator- string (filter by sub-UIN)
task-kind - string (filter by task type)
 * @method void setFilters(array $Filters) Set Filter. The following filters are supported, and the `Name` input parameter must be one of them. Up to 50 `task-id` values can be filtered, while up to 5 other parameters can be filtered in total.
task-id - String - (filter by task ID). `task-id` format: e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filter exactly by task status). Valid values: `0` (initial), `1` (running), `2` (succeeded), `-1` (failed).
task-sql-keyword - String - (filter fuzzily by SQL statement keyword, such as `DROP TABLE`).
task-operator- string (filter by sub-UIN)
task-kind - string (filter by task type)
 * @method string getSortBy() Obtain Sorting field. Valid values: `create-time` (default value), `update-time`.
 * @method void setSortBy(string $SortBy) Set Sorting field. Valid values: `create-time` (default value), `update-time`.
 * @method string getSorting() Obtain Sorting order. Valid values: `asc` (ascending order), `desc` (descending order). Default value: `asc`.
 * @method void setSorting(string $Sorting) Set Sorting order. Valid values: `asc` (ascending order), `desc` (descending order). Default value: `asc`.
 * @method string getStartTime() Obtain Start time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time seven days ago by default.
 * @method void setStartTime(string $StartTime) Set Start time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time seven days ago by default.
 * @method string getEndTime() Obtain End time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time by default. The time span is (0, 30] days. Data in the last 45 days can be queried.
 * @method void setEndTime(string $EndTime) Set End time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time by default. The time span is (0, 30] days. Data in the last 45 days can be queried.
 * @method string getDataEngineName() Obtain The data engine name for filtering.
 * @method void setDataEngineName(string $DataEngineName) Set The data engine name for filtering.
 * @method string getResourceGroupName() Obtain Resource group name of the spark engine
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name of the spark engine
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer Number of returned results. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filter. The following filters are supported, and the `Name` input parameter must be one of them. Up to 50 `task-id` values can be filtered, while up to 5 other parameters can be filtered in total.
task-id - String - (filter by task ID). `task-id` format: e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filter exactly by task status). Valid values: `0` (initial), `1` (running), `2` (succeeded), `-1` (failed).
task-sql-keyword - String - (filter fuzzily by SQL statement keyword, such as `DROP TABLE`).
task-operator- string (filter by sub-UIN)
task-kind - string (filter by task type)
     */
    public $Filters;

    /**
     * @var string Sorting field. Valid values: `create-time` (default value), `update-time`.
     */
    public $SortBy;

    /**
     * @var string Sorting order. Valid values: `asc` (ascending order), `desc` (descending order). Default value: `asc`.
     */
    public $Sorting;

    /**
     * @var string Start time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time seven days ago by default.
     */
    public $StartTime;

    /**
     * @var string End time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time by default. The time span is (0, 30] days. Data in the last 45 days can be queried.
     */
    public $EndTime;

    /**
     * @var string The data engine name for filtering.
     */
    public $DataEngineName;

    /**
     * @var string Resource group name of the spark engine
     */
    public $ResourceGroupName;

    /**
     * @param integer $Limit Number of returned results. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filter. The following filters are supported, and the `Name` input parameter must be one of them. Up to 50 `task-id` values can be filtered, while up to 5 other parameters can be filtered in total.
task-id - String - (filter by task ID). `task-id` format: e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filter exactly by task status). Valid values: `0` (initial), `1` (running), `2` (succeeded), `-1` (failed).
task-sql-keyword - String - (filter fuzzily by SQL statement keyword, such as `DROP TABLE`).
task-operator- string (filter by sub-UIN)
task-kind - string (filter by task type)
     * @param string $SortBy Sorting field. Valid values: `create-time` (default value), `update-time`.
     * @param string $Sorting Sorting order. Valid values: `asc` (ascending order), `desc` (descending order). Default value: `asc`.
     * @param string $StartTime Start time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time seven days ago by default.
     * @param string $EndTime End time in the format of `yyyy-mm-dd HH:MM:SS`, which is the current time by default. The time span is (0, 30] days. Data in the last 45 days can be queried.
     * @param string $DataEngineName The data engine name for filtering.
     * @param string $ResourceGroupName Resource group name of the spark engine
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
