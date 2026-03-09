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
 * CreateTriggerTask request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method CreateTriggerTaskBaseAttribute getTriggerTaskBaseAttribute() Obtain Task basic attributes.
 * @method void setTriggerTaskBaseAttribute(CreateTriggerTaskBaseAttribute $TriggerTaskBaseAttribute) Set Task basic attributes.
 * @method CreateTriggerTaskConfiguration getTriggerTaskConfiguration() Obtain Task configurations.
 * @method void setTriggerTaskConfiguration(CreateTriggerTaskConfiguration $TriggerTaskConfiguration) Set Task configurations.
 * @method CreateTriggerTaskSchedulerConfiguration getTriggerTaskSchedulerConfiguration() Obtain Task scheduling configuration.
 * @method void setTriggerTaskSchedulerConfiguration(CreateTriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration) Set Task scheduling configuration.
 */
class CreateTriggerTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var CreateTriggerTaskBaseAttribute Task basic attributes.
     */
    public $TriggerTaskBaseAttribute;

    /**
     * @var CreateTriggerTaskConfiguration Task configurations.
     */
    public $TriggerTaskConfiguration;

    /**
     * @var CreateTriggerTaskSchedulerConfiguration Task scheduling configuration.
     */
    public $TriggerTaskSchedulerConfiguration;

    /**
     * @param string $ProjectId Project ID.
     * @param CreateTriggerTaskBaseAttribute $TriggerTaskBaseAttribute Task basic attributes.
     * @param CreateTriggerTaskConfiguration $TriggerTaskConfiguration Task configurations.
     * @param CreateTriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration Task scheduling configuration.
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

        if (array_key_exists("TriggerTaskBaseAttribute",$param) and $param["TriggerTaskBaseAttribute"] !== null) {
            $this->TriggerTaskBaseAttribute = new CreateTriggerTaskBaseAttribute();
            $this->TriggerTaskBaseAttribute->deserialize($param["TriggerTaskBaseAttribute"]);
        }

        if (array_key_exists("TriggerTaskConfiguration",$param) and $param["TriggerTaskConfiguration"] !== null) {
            $this->TriggerTaskConfiguration = new CreateTriggerTaskConfiguration();
            $this->TriggerTaskConfiguration->deserialize($param["TriggerTaskConfiguration"]);
        }

        if (array_key_exists("TriggerTaskSchedulerConfiguration",$param) and $param["TriggerTaskSchedulerConfiguration"] !== null) {
            $this->TriggerTaskSchedulerConfiguration = new CreateTriggerTaskSchedulerConfiguration();
            $this->TriggerTaskSchedulerConfiguration->deserialize($param["TriggerTaskSchedulerConfiguration"]);
        }
    }
}
