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
 * Update task object input parameters.
 *
 * @method UpdateTaskBaseAttributePart getTaskBaseAttribute() Obtain Task basic attributes.
 * @method void setTaskBaseAttribute(UpdateTaskBaseAttributePart $TaskBaseAttribute) Set Task basic attributes.
 * @method TaskConfiguration getTaskConfiguration() Obtain Task configurations.
 * @method void setTaskConfiguration(TaskConfiguration $TaskConfiguration) Set Task configurations.
 * @method TaskSchedulerConfiguration getTaskSchedulerConfiguration() Obtain Task scheduling configuration.
 * @method void setTaskSchedulerConfiguration(TaskSchedulerConfiguration $TaskSchedulerConfiguration) Set Task scheduling configuration.
 */
class UpdateTaskPart extends AbstractModel
{
    /**
     * @var UpdateTaskBaseAttributePart Task basic attributes.
     */
    public $TaskBaseAttribute;

    /**
     * @var TaskConfiguration Task configurations.
     */
    public $TaskConfiguration;

    /**
     * @var TaskSchedulerConfiguration Task scheduling configuration.
     */
    public $TaskSchedulerConfiguration;

    /**
     * @param UpdateTaskBaseAttributePart $TaskBaseAttribute Task basic attributes.
     * @param TaskConfiguration $TaskConfiguration Task configurations.
     * @param TaskSchedulerConfiguration $TaskSchedulerConfiguration Task scheduling configuration.
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
            $this->TaskBaseAttribute = new UpdateTaskBaseAttributePart();
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
