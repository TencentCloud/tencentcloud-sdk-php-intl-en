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
 * Table merging results
 *
 * @method string getTaskId() Obtain Task ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain If table merging is successful, `null` will be returned
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set If table merging is successful, `null` will be returned
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method CompareTablesInfo getTable() Obtain Comparison results of tables
 * @method void setTable(CompareTablesInfo $Table) Set Comparison results of tables
 * @method string getApplicationId() Obtain Application ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class MergeTableResult extends AbstractModel
{
    /**
     * @var string Task ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var ErrorInfo If table merging is successful, `null` will be returned
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var CompareTablesInfo Comparison results of tables
     */
    public $Table;

    /**
     * @var string Application ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @param string $TaskId Task ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error If table merging is successful, `null` will be returned
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param CompareTablesInfo $Table Comparison results of tables
     * @param string $ApplicationId Application ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = new CompareTablesInfo();
            $this->Table->deserialize($param["Table"]);
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
