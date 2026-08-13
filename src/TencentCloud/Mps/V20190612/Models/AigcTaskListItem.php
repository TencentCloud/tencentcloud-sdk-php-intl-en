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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aigc task details
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTaskType() Obtain <p>Task type</p><p>Enumeration value:</p><ul><li>VideoRedraw: Video redraw task</li><li>AIDrama: AI drama task</li></ul>
 * @method void setTaskType(string $TaskType) Set <p>Task type</p><p>Enumeration value:</p><ul><li>VideoRedraw: Video redraw task</li><li>AIDrama: AI drama task</li></ul>
 * @method string getTaskStatus() Obtain <p>Task status</p><p>Enumeration values:</p><ul><li>PENDING: Task waiting for scheduling</li><li>RUNNING: Task running</li><li>FINISHED: Task executed successfully</li><li>STOP: Task termination</li><li>FAILED: Task failure</li><li>TIMEOUT: Task timeout</li></ul>
 * @method void setTaskStatus(string $TaskStatus) Set <p>Task status</p><p>Enumeration values:</p><ul><li>PENDING: Task waiting for scheduling</li><li>RUNNING: Task running</li><li>FINISHED: Task executed successfully</li><li>STOP: Task termination</li><li>FAILED: Task failure</li><li>TIMEOUT: Task timeout</li></ul>
 * @method string getCreateTime() Obtain <p>Task creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time</p>
 * @method string getScheduledTime() Obtain <p>Task start scheduling time</p>
 * @method void setScheduledTime(string $ScheduledTime) Set <p>Task start scheduling time</p>
 * @method string getFinishedTime() Obtain <p>Task end time</p>
 * @method void setFinishedTime(string $FinishedTime) Set <p>Task end time</p>
 * @method array getUrls() Obtain <p>Task result Url.</p>
 * @method void setUrls(array $Urls) Set <p>Task result Url.</p>
 * @method integer getTaskResultCode() Obtain <p>Task execution error code</p>
 * @method void setTaskResultCode(integer $TaskResultCode) Set <p>Task execution error code</p>
 * @method string getTaskResultMsg() Obtain <p>Task execution error message</p>
 * @method void setTaskResultMsg(string $TaskResultMsg) Set <p>Task execution error message</p>
 * @method string getResolution() Obtain <p>Output video resolution</p>
 * @method void setResolution(string $Resolution) Set <p>Output video resolution</p>
 * @method string getRatio() Obtain <p>Aspect ratio of the output video</p>
 * @method void setRatio(string $Ratio) Set <p>Aspect ratio of the output video</p>
 * @method string getRequestBody() Obtain <p>Task request package</p>
 * @method void setRequestBody(string $RequestBody) Set <p>Task request package</p>
 */
class AigcTaskListItem extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task type</p><p>Enumeration value:</p><ul><li>VideoRedraw: Video redraw task</li><li>AIDrama: AI drama task</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>Task status</p><p>Enumeration values:</p><ul><li>PENDING: Task waiting for scheduling</li><li>RUNNING: Task running</li><li>FINISHED: Task executed successfully</li><li>STOP: Task termination</li><li>FAILED: Task failure</li><li>TIMEOUT: Task timeout</li></ul>
     */
    public $TaskStatus;

    /**
     * @var string <p>Task creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Task start scheduling time</p>
     */
    public $ScheduledTime;

    /**
     * @var string <p>Task end time</p>
     */
    public $FinishedTime;

    /**
     * @var array <p>Task result Url.</p>
     */
    public $Urls;

    /**
     * @var integer <p>Task execution error code</p>
     */
    public $TaskResultCode;

    /**
     * @var string <p>Task execution error message</p>
     */
    public $TaskResultMsg;

    /**
     * @var string <p>Output video resolution</p>
     */
    public $Resolution;

    /**
     * @var string <p>Aspect ratio of the output video</p>
     */
    public $Ratio;

    /**
     * @var string <p>Task request package</p>
     */
    public $RequestBody;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TaskType <p>Task type</p><p>Enumeration value:</p><ul><li>VideoRedraw: Video redraw task</li><li>AIDrama: AI drama task</li></ul>
     * @param string $TaskStatus <p>Task status</p><p>Enumeration values:</p><ul><li>PENDING: Task waiting for scheduling</li><li>RUNNING: Task running</li><li>FINISHED: Task executed successfully</li><li>STOP: Task termination</li><li>FAILED: Task failure</li><li>TIMEOUT: Task timeout</li></ul>
     * @param string $CreateTime <p>Task creation time</p>
     * @param string $ScheduledTime <p>Task start scheduling time</p>
     * @param string $FinishedTime <p>Task end time</p>
     * @param array $Urls <p>Task result Url.</p>
     * @param integer $TaskResultCode <p>Task execution error code</p>
     * @param string $TaskResultMsg <p>Task execution error message</p>
     * @param string $Resolution <p>Output video resolution</p>
     * @param string $Ratio <p>Aspect ratio of the output video</p>
     * @param string $RequestBody <p>Task request package</p>
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("TaskResultCode",$param) and $param["TaskResultCode"] !== null) {
            $this->TaskResultCode = $param["TaskResultCode"];
        }

        if (array_key_exists("TaskResultMsg",$param) and $param["TaskResultMsg"] !== null) {
            $this->TaskResultMsg = $param["TaskResultMsg"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }
    }
}
