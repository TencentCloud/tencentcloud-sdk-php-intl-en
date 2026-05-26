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
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method CreateTaskBaseAttribute getTaskBaseAttribute() Obtain <p>The
basic attributes of the task.</p>
 * @method void setTaskBaseAttribute(CreateTaskBaseAttribute $TaskBaseAttribute) Set <p>The
basic attributes of the task.</p>
 * @method CreateTaskConfiguration getTaskConfiguration() Obtain <p>Task configurations.</p>
 * @method void setTaskConfiguration(CreateTaskConfiguration $TaskConfiguration) Set <p>Task configurations.</p>
 * @method CreateTaskSchedulerConfiguration getTaskSchedulerConfiguration() Obtain <p>Task scheduling configuration</p>
 * @method void setTaskSchedulerConfiguration(CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration) Set <p>Task scheduling configuration</p>
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var CreateTaskBaseAttribute <p>The
basic attributes of the task.</p>
     */
    public $TaskBaseAttribute;

    /**
     * @var CreateTaskConfiguration <p>Task configurations.</p>
     */
    public $TaskConfiguration;

    /**
     * @var CreateTaskSchedulerConfiguration <p>Task scheduling configuration</p>
     */
    public $TaskSchedulerConfiguration;

    /**
     * @param string $ProjectId <p>Project ID</p>
     * @param CreateTaskBaseAttribute $TaskBaseAttribute <p>The
basic attributes of the task.</p>
     * @param CreateTaskConfiguration $TaskConfiguration <p>Task configurations.</p>
     * @param CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration <p>Task scheduling configuration</p>
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
