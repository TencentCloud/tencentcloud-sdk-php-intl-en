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
 * QueryTaskCostDetail request structure.
 *
 * @method array getFilters() Obtain Filter criteria. The following filter types are supported. The parameter Name should be one of them. The maximum number of values that can be filtered by task-id is 50. The values that can be filtered by other parameter filters should not be more than 5.
task-id - String - (accurate filtering of task IDs). The example of the value of task-id is e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filtering task status); valid values: 0 (initializing), 1 (running), 2 (successful), and -1 (failed).
task-sql-keyword - String - (fuzzy filtering of the keywords of SQL statements); the example of the value is DROP TABLE.
task-operator- string (filtering sub-UIN)
 * @method void setFilters(array $Filters) Set Filter criteria. The following filter types are supported. The parameter Name should be one of them. The maximum number of values that can be filtered by task-id is 50. The values that can be filtered by other parameter filters should not be more than 5.
task-id - String - (accurate filtering of task IDs). The example of the value of task-id is e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filtering task status); valid values: 0 (initializing), 1 (running), 2 (successful), and -1 (failed).
task-sql-keyword - String - (fuzzy filtering of the keywords of SQL statements); the example of the value is DROP TABLE.
task-operator- string (filtering sub-UIN)
 * @method string getStartTime() Obtain Start time, and the format is yyyy-mm-dd HH:MM:SS. It is the current moment 45 days ago by default.
 * @method void setStartTime(string $StartTime) Set Start time, and the format is yyyy-mm-dd HH:MM:SS. It is the current moment 45 days ago by default.
 * @method string getEndTime() Obtain End time, and the format is yyyy-mm-dd HH:MM:SS. The time span is longer than 0 day but shorter than or equal to 30 days. Data within the recent 45 days can be queried. It is the current moment by default.
 * @method void setEndTime(string $EndTime) Set End time, and the format is yyyy-mm-dd HH:MM:SS. The time span is longer than 0 day but shorter than or equal to 30 days. Data within the recent 45 days can be queried. It is the current moment by default.
 * @method string getDataEngineName() Obtain Data engine name, used for selecting
 * @method void setDataEngineName(string $DataEngineName) Set Data engine name, used for selecting
 * @method string getSearchAfter() Obtain Identifier on the next page
 * @method void setSearchAfter(string $SearchAfter) Set Identifier on the next page
 * @method integer getPageSize() Obtain Size of each page
 * @method void setPageSize(integer $PageSize) Set Size of each page
 */
class QueryTaskCostDetailRequest extends AbstractModel
{
    /**
     * @var array Filter criteria. The following filter types are supported. The parameter Name should be one of them. The maximum number of values that can be filtered by task-id is 50. The values that can be filtered by other parameter filters should not be more than 5.
task-id - String - (accurate filtering of task IDs). The example of the value of task-id is e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filtering task status); valid values: 0 (initializing), 1 (running), 2 (successful), and -1 (failed).
task-sql-keyword - String - (fuzzy filtering of the keywords of SQL statements); the example of the value is DROP TABLE.
task-operator- string (filtering sub-UIN)
     */
    public $Filters;

    /**
     * @var string Start time, and the format is yyyy-mm-dd HH:MM:SS. It is the current moment 45 days ago by default.
     */
    public $StartTime;

    /**
     * @var string End time, and the format is yyyy-mm-dd HH:MM:SS. The time span is longer than 0 day but shorter than or equal to 30 days. Data within the recent 45 days can be queried. It is the current moment by default.
     */
    public $EndTime;

    /**
     * @var string Data engine name, used for selecting
     */
    public $DataEngineName;

    /**
     * @var string Identifier on the next page
     */
    public $SearchAfter;

    /**
     * @var integer Size of each page
     */
    public $PageSize;

    /**
     * @param array $Filters Filter criteria. The following filter types are supported. The parameter Name should be one of them. The maximum number of values that can be filtered by task-id is 50. The values that can be filtered by other parameter filters should not be more than 5.
task-id - String - (accurate filtering of task IDs). The example of the value of task-id is e386471f-139a-4e59-877f-50ece8135b99.
task-state - String - (filtering task status); valid values: 0 (initializing), 1 (running), 2 (successful), and -1 (failed).
task-sql-keyword - String - (fuzzy filtering of the keywords of SQL statements); the example of the value is DROP TABLE.
task-operator- string (filtering sub-UIN)
     * @param string $StartTime Start time, and the format is yyyy-mm-dd HH:MM:SS. It is the current moment 45 days ago by default.
     * @param string $EndTime End time, and the format is yyyy-mm-dd HH:MM:SS. The time span is longer than 0 day but shorter than or equal to 30 days. Data within the recent 45 days can be queried. It is the current moment by default.
     * @param string $DataEngineName Data engine name, used for selecting
     * @param string $SearchAfter Identifier on the next page
     * @param integer $PageSize Size of each page
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
