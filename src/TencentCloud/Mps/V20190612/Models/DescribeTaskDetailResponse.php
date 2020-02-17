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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskType() Obtain Task type. Currently valid values:
<li>WorkflowTask: Video workflow processing task.</li>
<li>LiveStreamProcessTask: Live stream processing task.</li>
 * @method void setTaskType(string $TaskType) Set Task type. Currently valid values:
<li>WorkflowTask: Video workflow processing task.</li>
<li>LiveStreamProcessTask: Live stream processing task.</li>
 * @method string getStatus() Obtain Task status. Valid values:
<li>WAITING: Waiting;</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>WAITING: Waiting;</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
 * @method string getCreateTime() Obtain Creation time of a task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getBeginProcessTime() Obtain Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getFinishTime() Obtain End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setFinishTime(string $FinishTime) Set End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method WorkflowTask getWorkflowTask() Obtain Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowTask(WorkflowTask $WorkflowTask) Set Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LiveStreamProcessTask getLiveStreamProcessTask() Obtain Information of a live stream processing task. This field has a value only when `TaskType` is `LiveStreamProcessTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLiveStreamProcessTask(LiveStreamProcessTask $LiveStreamProcessTask) Set Information of a live stream processing task. This field has a value only when `TaskType` is `LiveStreamProcessTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of a task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of a task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTasksPriority() Obtain Task flow priority. Value range: [-10, 10].
 * @method void setTasksPriority(integer $TasksPriority) Set Task flow priority. Value range: [-10, 10].
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeTaskDetail response structure.
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string Task type. Currently valid values:
<li>WorkflowTask: Video workflow processing task.</li>
<li>LiveStreamProcessTask: Live stream processing task.</li>
     */
    public $TaskType;

    /**
     * @var string Task status. Valid values:
<li>WAITING: Waiting;</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var string Creation time of a task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $BeginProcessTime;

    /**
     * @var string End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $FinishTime;

    /**
     * @var WorkflowTask Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowTask;

    /**
     * @var LiveStreamProcessTask Information of a live stream processing task. This field has a value only when `TaskType` is `LiveStreamProcessTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LiveStreamProcessTask;

    /**
     * @var TaskNotifyConfig Event notification information of a task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Task flow priority. Value range: [-10, 10].
     */
    public $TasksPriority;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $TaskType Task type. Currently valid values:
<li>WorkflowTask: Video workflow processing task.</li>
<li>LiveStreamProcessTask: Live stream processing task.</li>
     * @param string $Status Task status. Valid values:
<li>WAITING: Waiting;</li>
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
     * @param string $CreateTime Creation time of a task in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $BeginProcessTime Start time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $FinishTime End time of task execution in [ISO date format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param WorkflowTask $WorkflowTask Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LiveStreamProcessTask $LiveStreamProcessTask Information of a live stream processing task. This field has a value only when `TaskType` is `LiveStreamProcessTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of a task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TasksPriority Task flow priority. Value range: [-10, 10].
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("WorkflowTask",$param) and $param["WorkflowTask"] !== null) {
            $this->WorkflowTask = new WorkflowTask();
            $this->WorkflowTask->deserialize($param["WorkflowTask"]);
        }

        if (array_key_exists("LiveStreamProcessTask",$param) and $param["LiveStreamProcessTask"] !== null) {
            $this->LiveStreamProcessTask = new LiveStreamProcessTask();
            $this->LiveStreamProcessTask->deserialize($param["LiveStreamProcessTask"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
