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
 * Task object.
 *
 * @method TaskBaseAttribute getTaskBaseAttribute() Obtain Describes the basic attributes of the task.
 * @method void setTaskBaseAttribute(TaskBaseAttribute $TaskBaseAttribute) Set Describes the basic attributes of the task.
 * @method TaskConfiguration getTaskConfiguration() Obtain Task configurations.

 * @method void setTaskConfiguration(TaskConfiguration $TaskConfiguration) Set Task configurations.

 * @method TaskSchedulerConfiguration getTaskSchedulerConfiguration() Obtain Specifies task scheduling configuration.

 * @method void setTaskSchedulerConfiguration(TaskSchedulerConfiguration $TaskSchedulerConfiguration) Set Specifies task scheduling configuration.
 */
class Task extends AbstractModel
{
    /**
     * @var TaskBaseAttribute Describes the basic attributes of the task.
     */
    public $TaskBaseAttribute;

    /**
     * @var TaskConfiguration Task configurations.

     */
    public $TaskConfiguration;

    /**
     * @var TaskSchedulerConfiguration Specifies task scheduling configuration.

     */
    public $TaskSchedulerConfiguration;

    /**
     * @param TaskBaseAttribute $TaskBaseAttribute Describes the basic attributes of the task.
     * @param TaskConfiguration $TaskConfiguration Task configurations.

     * @param TaskSchedulerConfiguration $TaskSchedulerConfiguration Specifies task scheduling configuration.
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
        if (array_key_exists("TaskBaseAttribute",$param) and $param["TaskBaseAttribute"] !== null) {
            $this->TaskBaseAttribute = new TaskBaseAttribute();
            $this->TaskBaseAttribute->deserialize($param["TaskBaseAttribute"]);
        }

        if (array_key_exists("TaskConfiguration",$param) and $param["TaskConfiguration"] !== null) {
            $this->TaskConfiguration = new TaskConfiguration();
            $this->TaskConfiguration->deserialize($param["TaskConfiguration"]);
        }

        if (array_key_exists("TaskSchedulerConfiguration",$param) and $param["TaskSchedulerConfiguration"] !== null) {
            $this->TaskSchedulerConfiguration = new TaskSchedulerConfiguration();
            $this->TaskSchedulerConfiguration->deserialize($param["TaskSchedulerConfiguration"]);
        }
    }
}
