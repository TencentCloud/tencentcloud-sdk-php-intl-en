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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Offline search task
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getStatus() Obtain Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
 * @method void setStatus(integer $Status) Set Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
 * @method string getAsyncSearchTaskId() Obtain Offline search task ID
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) Set Offline search task ID
 * @method string getQuery() Obtain Query statement
 * @method void setQuery(string $Query) Set Query statement
 * @method integer getFrom() Obtain Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setFrom(integer $From) Set Start time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method integer getTo() Obtain End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method void setTo(integer $To) Set End time of the log to be queried, which is a Unix timestamp in milliseconds
 * @method string getSort() Obtain Log scan order. Valid values: `asc`: ascending; `desc`: descending
 * @method void setSort(string $Sort) Set Log scan order. Valid values: `asc`: ascending; `desc`: descending
 * @method string getErrorMessage() Obtain Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getLogCount() Obtain Total number of logs matched in offline search task
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogCount(integer $LogCount) Set Total number of logs matched in offline search task
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getFinishTime() Obtain Task completion time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFinishTime(string $FinishTime) Set Task completion time
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AsyncSearchTask extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
     */
    public $Status;

    /**
     * @var string Offline search task ID
     */
    public $AsyncSearchTaskId;

    /**
     * @var string Query statement
     */
    public $Query;

    /**
     * @var integer Start time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $From;

    /**
     * @var integer End time of the log to be queried, which is a Unix timestamp in milliseconds
     */
    public $To;

    /**
     * @var string Log scan order. Valid values: `asc`: ascending; `desc`: descending
     */
    public $Sort;

    /**
     * @var string Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var integer Total number of logs matched in offline search task
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogCount;

    /**
     * @var string Task completion time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FinishTime;

    /**
     * @param string $LogsetId Logset ID
     * @param string $TopicId Log topic ID
     * @param string $CreateTime Creation time
     * @param integer $Status Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
     * @param string $AsyncSearchTaskId Offline search task ID
     * @param string $Query Query statement
     * @param integer $From Start time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param integer $To End time of the log to be queried, which is a Unix timestamp in milliseconds
     * @param string $Sort Log scan order. Valid values: `asc`: ascending; `desc`: descending
     * @param string $ErrorMessage Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $LogCount Total number of logs matched in offline search task
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $FinishTime Task completion time
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("LogCount",$param) and $param["LogCount"] !== null) {
            $this->LogCount = $param["LogCount"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
