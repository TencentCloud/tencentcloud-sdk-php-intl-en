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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTask request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method CreateTaskBaseAttribute getTaskBaseAttribute() Obtain The basic attributes of the task.
 * @method void setTaskBaseAttribute(CreateTaskBaseAttribute $TaskBaseAttribute) Set The basic attributes of the task.
 * @method CreateTaskConfiguration getTaskConfiguration() Obtain Task configurations.
 * @method void setTaskConfiguration(CreateTaskConfiguration $TaskConfiguration) Set Task configurations.
 * @method CreateTaskSchedulerConfiguration getTaskSchedulerConfiguration() Obtain Task scheduling configuration.
 * @method void setTaskSchedulerConfiguration(CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration) Set Task scheduling configuration.
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var CreateTaskBaseAttribute The basic attributes of the task.
     */
    public $TaskBaseAttribute;

    /**
     * @var CreateTaskConfiguration Task configurations.
     */
    public $TaskConfiguration;

    /**
     * @var CreateTaskSchedulerConfiguration Task scheduling configuration.
     */
    public $TaskSchedulerConfiguration;

    /**
     * @param string $ProjectId Project ID.
     * @param CreateTaskBaseAttribute $TaskBaseAttribute The basic attributes of the task.
     * @param CreateTaskConfiguration $TaskConfiguration Task configurations.
     * @param CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration Task scheduling configuration.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskBaseAttribute",$param) and $param["TaskBaseAttribute"] !== null) {
            $this->TaskBaseAttribute = new CreateTaskBaseAttribute();
            $this->TaskBaseAttribute->deserialize($param["TaskBaseAttribute"]);
        }

        if (array_key_exists("TaskConfiguration",$param) and $param["TaskConfiguration"] !== null) {
            $this->TaskConfiguration = new CreateTaskConfiguration();
            $this->TaskConfiguration->deserialize($param["TaskConfiguration"]);
        }

        if (array_key_exists("TaskSchedulerConfiguration",$param) and $param["TaskSchedulerConfiguration"] !== null) {
            $this->TaskSchedulerConfiguration = new CreateTaskSchedulerConfiguration();
            $this->TaskSchedulerConfiguration->deserialize($param["TaskSchedulerConfiguration"]);
        }
    }
}
