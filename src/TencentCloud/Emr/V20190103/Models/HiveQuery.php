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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hive query details
 *
 * @method string getStatement() Obtain Query statement.
 * @method void setStatement(string $Statement) Set Query statement.
 * @method string getDuration() Obtain Execution duration.
 * @method void setDuration(string $Duration) Set Execution duration.
 * @method integer getStartTime() Obtain Start time in milliseconds.
 * @method void setStartTime(integer $StartTime) Set Start time in milliseconds.
 * @method integer getEndTime() Obtain End time in milliseconds.
 * @method void setEndTime(integer $EndTime) Set End time in milliseconds.
 * @method string getState() Obtain Status.
 * @method void setState(string $State) Set Status.
 * @method string getUser() Obtain User.
 * @method void setUser(string $User) Set User.
 * @method array getJobIds() Obtain AppId List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobIds(array $JobIds) Set AppId List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionEngine() Obtain Execution engine.
 * @method void setExecutionEngine(string $ExecutionEngine) Set Execution engine.
 * @method string getId() Obtain Query ID.
 * @method void setId(string $Id) Set Query ID.
 */
class HiveQuery extends AbstractModel
{
    /**
     * @var string Query statement.
     */
    public $Statement;

    /**
     * @var string Execution duration.
     */
    public $Duration;

    /**
     * @var integer Start time in milliseconds.
     */
    public $StartTime;

    /**
     * @var integer End time in milliseconds.
     */
    public $EndTime;

    /**
     * @var string Status.
     */
    public $State;

    /**
     * @var string User.
     */
    public $User;

    /**
     * @var array AppId List
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobIds;

    /**
     * @var string Execution engine.
     */
    public $ExecutionEngine;

    /**
     * @var string Query ID.
     */
    public $Id;

    /**
     * @param string $Statement Query statement.
     * @param string $Duration Execution duration.
     * @param integer $StartTime Start time in milliseconds.
     * @param integer $EndTime End time in milliseconds.
     * @param string $State Status.
     * @param string $User User.
     * @param array $JobIds AppId List
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionEngine Execution engine.
     * @param string $Id Query ID.
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
