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
 * Task overview information
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getTaskType() Obtain Task type. Valid values:
<li> WorkflowTask: Workflow processing task;</li>
<li> LiveProcessTask: Live stream processing task.</li>
 * @method void setTaskType(string $TaskType) Set Task type. Valid values:
<li> WorkflowTask: Workflow processing task;</li>
<li> LiveProcessTask: Live stream processing task.</li>
 * @method string getCreateTime() Obtain Creation time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getBeginProcessTime() Obtain Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been started yet, this field will be `0000-00-00T00:00:00Z`.
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been started yet, this field will be `0000-00-00T00:00:00Z`.
 * @method string getFinishTime() Obtain End time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been completed yet, this field will be `0000-00-00T00:00:00Z`.
 * @method void setFinishTime(string $FinishTime) Set End time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been completed yet, this field will be `0000-00-00T00:00:00Z`.
 * @method array getSubTaskTypes() Obtain The subtask type.
 * @method void setSubTaskTypes(array $SubTaskTypes) Set The subtask type.
 */
class TaskSimpleInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task type. Valid values:
<li> WorkflowTask: Workflow processing task;</li>
<li> LiveProcessTask: Live stream processing task.</li>
     */
    public $TaskType;

    /**
     * @var string Creation time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been started yet, this field will be `0000-00-00T00:00:00Z`.
     */
    public $BeginProcessTime;

    /**
     * @var string End time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been completed yet, this field will be `0000-00-00T00:00:00Z`.
     */
    public $FinishTime;

    /**
     * @var array The subtask type.
     */
    public $SubTaskTypes;

    /**
     * @param string $TaskId Task ID.
     * @param string $TaskType Task type. Valid values:
<li> WorkflowTask: Workflow processing task;</li>
<li> LiveProcessTask: Live stream processing task.</li>
     * @param string $CreateTime Creation time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $BeginProcessTime Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been started yet, this field will be `0000-00-00T00:00:00Z`.
     * @param string $FinishTime End time of a task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F). If the task has not been completed yet, this field will be `0000-00-00T00:00:00Z`.
     * @param array $SubTaskTypes The subtask type.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("SubTaskTypes",$param) and $param["SubTaskTypes"] !== null) {
            $this->SubTaskTypes = $param["SubTaskTypes"];
        }
    }
}
