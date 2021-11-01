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
 * Offline context search task
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getCreateTime() Obtain Creation time, which is a timestamp accurate down to the millisecond
 * @method void setCreateTime(integer $CreateTime) Set Creation time, which is a timestamp accurate down to the millisecond
 * @method integer getStatus() Obtain Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
 * @method void setStatus(integer $Status) Set Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
 * @method string getAsyncContextTaskId() Obtain Offline context search task ID
 * @method void setAsyncContextTaskId(string $AsyncContextTaskId) Set Offline context search task ID
 * @method string getErrorMessage() Obtain Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPkgId() Obtain Log package number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPkgId(string $PkgId) Set Log package number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPkgLogId() Obtain Log number in log package
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPkgLogId(string $PkgLogId) Set Log number in log package
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTime() Obtain Log time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTime(integer $Time) Set Log time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getFinishTime() Obtain Task completion time, which is a timestamp accurate down to the millisecond
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFinishTime(integer $FinishTime) Set Task completion time, which is a timestamp accurate down to the millisecond
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAsyncSearchTaskId() Obtain Associated offline search ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) Set Associated offline search ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AsyncContextTask extends AbstractModel
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
     * @var integer Creation time, which is a timestamp accurate down to the millisecond
     */
    public $CreateTime;

    /**
     * @var integer Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
     */
    public $Status;

    /**
     * @var string Offline context search task ID
     */
    public $AsyncContextTaskId;

    /**
     * @var string Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var string Log package number
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PkgId;

    /**
     * @var string Log number in log package
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PkgLogId;

    /**
     * @var integer Log time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Time;

    /**
     * @var integer Task completion time, which is a timestamp accurate down to the millisecond
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FinishTime;

    /**
     * @var string Associated offline search ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AsyncSearchTaskId;

    /**
     * @param string $LogsetId Logset ID
     * @param string $TopicId Log topic ID
     * @param integer $CreateTime Creation time, which is a timestamp accurate down to the millisecond
     * @param integer $Status Status. Valid values: `0`: to be started; `1`: running; `2`: completed; `-1`: failed
     * @param string $AsyncContextTaskId Offline context search task ID
     * @param string $ErrorMessage Error message of task failure
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PkgId Log package number
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PkgLogId Log number in log package
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Time Log time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $FinishTime Task completion time, which is a timestamp accurate down to the millisecond
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AsyncSearchTaskId Associated offline search ID
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

        if (array_key_exists("AsyncContextTaskId",$param) and $param["AsyncContextTaskId"] !== null) {
            $this->AsyncContextTaskId = $param["AsyncContextTaskId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }
    }
}
