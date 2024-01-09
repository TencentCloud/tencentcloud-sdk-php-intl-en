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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hive query details
 *
 * @method string getStatement() Obtain Query statementNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatement(string $Statement) Set Query statementNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getDuration() Obtain Execution Duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(string $Duration) Set Execution Duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain Start Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set Start Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain End Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set End Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getState() Obtain StatusNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(string $State) Set StatusNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain UserNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set UserNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getJobIds() Obtain AppId List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobIds(array $JobIds) Set AppId List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionEngine() Obtain Execution Engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionEngine(string $ExecutionEngine) Set Execution Engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getId() Obtain Query ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set Query ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HiveQuery extends AbstractModel
{
    /**
     * @var string Query statementNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Statement;

    /**
     * @var string Execution Duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var integer Start Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer End Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string StatusNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var string UserNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var array AppId List
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobIds;

    /**
     * @var string Execution Engine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionEngine;

    /**
     * @var string Query ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @param string $Statement Query statementNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Duration Execution Duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime Start Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime End Time in Milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $State StatusNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $User UserNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $JobIds AppId List
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionEngine Execution Engine
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Id Query ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("ExecutionEngine",$param) and $param["ExecutionEngine"] !== null) {
            $this->ExecutionEngine = $param["ExecutionEngine"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
