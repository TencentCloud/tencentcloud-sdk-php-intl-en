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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event configuration
 *
 * @method string getEventName() Obtain Event type. Value range: <br/><li>`JOB_RUNNING`: The job is running, applicable to `SubmitJob`. </li><li>`JOB_SUCCEED`: The job succeeded, applicable to `SubmitJob`. </li><li>`JOB_FAILED`: The job failed, applicable to `SubmitJob`. </li><li>`JOB_FAILED_INTERRUPTED`: The job failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_RUNNING`: The task is running, applicable to `SubmitJob`. </li><li>`TASK_SUCCEED`: The task succeeded, applicable to `SubmitJob`. </li><li>`TASK_FAILED`: The task failed, applicable to `SubmitJob`. </li><li>`TASK_FAILED_INTERRUPTED`: The task failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_RUNNING`: The task instance is running, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_SUCCEED`: The task instance succeeded, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED`: The task instance failed, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED_INTERRUPTED`: The task instance failed and the instance is retained, applicable to `SubmitJob`. </li><li>`COMPUTE_ENV_CREATED`: the compute environment has been created, applicable to "CreateComputeEnv". </li><li>`COMPUTE_ENV_DELETED`: The compute environment has been deleted, applicable to `CreateComputeEnv`. </li><li>`COMPUTE_NODE_CREATED`: The compute node has been created, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_CREATION_FAILED`: The compute node creation failed, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_RUNNING`: The compute node is running, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_ABNORMAL`: The compute node is exceptional, applicable to "CreateComputeEnv" and "SubmitJob". </li><li>`COMPUTE_NODE_DELETING`: The compute node has been deleted, applicable to `CreateComputeEnv` and `SubmitJob`. </li>
 * @method void setEventName(string $EventName) Set Event type. Value range: <br/><li>`JOB_RUNNING`: The job is running, applicable to `SubmitJob`. </li><li>`JOB_SUCCEED`: The job succeeded, applicable to `SubmitJob`. </li><li>`JOB_FAILED`: The job failed, applicable to `SubmitJob`. </li><li>`JOB_FAILED_INTERRUPTED`: The job failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_RUNNING`: The task is running, applicable to `SubmitJob`. </li><li>`TASK_SUCCEED`: The task succeeded, applicable to `SubmitJob`. </li><li>`TASK_FAILED`: The task failed, applicable to `SubmitJob`. </li><li>`TASK_FAILED_INTERRUPTED`: The task failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_RUNNING`: The task instance is running, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_SUCCEED`: The task instance succeeded, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED`: The task instance failed, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED_INTERRUPTED`: The task instance failed and the instance is retained, applicable to `SubmitJob`. </li><li>`COMPUTE_ENV_CREATED`: the compute environment has been created, applicable to "CreateComputeEnv". </li><li>`COMPUTE_ENV_DELETED`: The compute environment has been deleted, applicable to `CreateComputeEnv`. </li><li>`COMPUTE_NODE_CREATED`: The compute node has been created, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_CREATION_FAILED`: The compute node creation failed, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_RUNNING`: The compute node is running, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_ABNORMAL`: The compute node is exceptional, applicable to "CreateComputeEnv" and "SubmitJob". </li><li>`COMPUTE_NODE_DELETING`: The compute node has been deleted, applicable to `CreateComputeEnv` and `SubmitJob`. </li>
 * @method array getEventVars() Obtain Custom key-value pair
 * @method void setEventVars(array $EventVars) Set Custom key-value pair
 */
class EventConfig extends AbstractModel
{
    /**
     * @var string Event type. Value range: <br/><li>`JOB_RUNNING`: The job is running, applicable to `SubmitJob`. </li><li>`JOB_SUCCEED`: The job succeeded, applicable to `SubmitJob`. </li><li>`JOB_FAILED`: The job failed, applicable to `SubmitJob`. </li><li>`JOB_FAILED_INTERRUPTED`: The job failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_RUNNING`: The task is running, applicable to `SubmitJob`. </li><li>`TASK_SUCCEED`: The task succeeded, applicable to `SubmitJob`. </li><li>`TASK_FAILED`: The task failed, applicable to `SubmitJob`. </li><li>`TASK_FAILED_INTERRUPTED`: The task failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_RUNNING`: The task instance is running, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_SUCCEED`: The task instance succeeded, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED`: The task instance failed, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED_INTERRUPTED`: The task instance failed and the instance is retained, applicable to `SubmitJob`. </li><li>`COMPUTE_ENV_CREATED`: the compute environment has been created, applicable to "CreateComputeEnv". </li><li>`COMPUTE_ENV_DELETED`: The compute environment has been deleted, applicable to `CreateComputeEnv`. </li><li>`COMPUTE_NODE_CREATED`: The compute node has been created, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_CREATION_FAILED`: The compute node creation failed, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_RUNNING`: The compute node is running, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_ABNORMAL`: The compute node is exceptional, applicable to "CreateComputeEnv" and "SubmitJob". </li><li>`COMPUTE_NODE_DELETING`: The compute node has been deleted, applicable to `CreateComputeEnv` and `SubmitJob`. </li>
     */
    public $EventName;

    /**
     * @var array Custom key-value pair
     */
    public $EventVars;

    /**
     * @param string $EventName Event type. Value range: <br/><li>`JOB_RUNNING`: The job is running, applicable to `SubmitJob`. </li><li>`JOB_SUCCEED`: The job succeeded, applicable to `SubmitJob`. </li><li>`JOB_FAILED`: The job failed, applicable to `SubmitJob`. </li><li>`JOB_FAILED_INTERRUPTED`: The job failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_RUNNING`: The task is running, applicable to `SubmitJob`. </li><li>`TASK_SUCCEED`: The task succeeded, applicable to `SubmitJob`. </li><li>`TASK_FAILED`: The task failed, applicable to `SubmitJob`. </li><li>`TASK_FAILED_INTERRUPTED`: The task failed and the instance is retained, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_RUNNING`: The task instance is running, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_SUCCEED`: The task instance succeeded, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED`: The task instance failed, applicable to `SubmitJob`. </li><li>`TASK_INSTANCE_FAILED_INTERRUPTED`: The task instance failed and the instance is retained, applicable to `SubmitJob`. </li><li>`COMPUTE_ENV_CREATED`: the compute environment has been created, applicable to "CreateComputeEnv". </li><li>`COMPUTE_ENV_DELETED`: The compute environment has been deleted, applicable to `CreateComputeEnv`. </li><li>`COMPUTE_NODE_CREATED`: The compute node has been created, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_CREATION_FAILED`: The compute node creation failed, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_RUNNING`: The compute node is running, applicable to `CreateComputeEnv` and `SubmitJob`. </li><li>`COMPUTE_NODE_ABNORMAL`: The compute node is exceptional, applicable to "CreateComputeEnv" and "SubmitJob". </li><li>`COMPUTE_NODE_DELETING`: The compute node has been deleted, applicable to `CreateComputeEnv` and `SubmitJob`. </li>
     * @param array $EventVars Custom key-value pair
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventVars",$param) and $param["EventVars"] !== null) {
            $this->EventVars = [];
            foreach ($param["EventVars"] as $key => $value){
                $obj = new EventVar();
                $obj->deserialize($value);
                array_push($this->EventVars, $obj);
            }
        }
    }
}
