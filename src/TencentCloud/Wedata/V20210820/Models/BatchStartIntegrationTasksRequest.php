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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchStartIntegrationTasks request structure.
 *
 * @method integer getTaskType() Obtain Task Type, 201 for real-time tasks, 202 for offline tasks
 * @method void setTaskType(integer $TaskType) Set Task Type, 201 for real-time tasks, 202 for offline tasks
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getTaskIds() Obtain Task ID
 * @method void setTaskIds(array $TaskIds) Set Task ID
 * @method array getStartTaskInfoSet() Obtain Batch run integration tasks, currently only used in real-time integration
 * @method void setStartTaskInfoSet(array $StartTaskInfoSet) Set Batch run integration tasks, currently only used in real-time integration
 */
class BatchStartIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var integer Task Type, 201 for real-time tasks, 202 for offline tasks
     */
    public $TaskType;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Task ID
     */
    public $TaskIds;

    /**
     * @var array Batch run integration tasks, currently only used in real-time integration
     */
    public $StartTaskInfoSet;

    /**
     * @param integer $TaskType Task Type, 201 for real-time tasks, 202 for offline tasks
     * @param string $ProjectId Project ID
     * @param array $TaskIds Task ID
     * @param array $StartTaskInfoSet Batch run integration tasks, currently only used in real-time integration
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("StartTaskInfoSet",$param) and $param["StartTaskInfoSet"] !== null) {
            $this->StartTaskInfoSet = [];
            foreach ($param["StartTaskInfoSet"] as $key => $value){
                $obj = new StartTaskInfo();
                $obj->deserialize($value);
                array_push($this->StartTaskInfoSet, $obj);
            }
        }
    }
}
