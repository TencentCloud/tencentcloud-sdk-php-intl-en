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
 * @method TriggerTaskBaseAttribute getTriggerTaskBaseAttribute() Obtain Task basic attributes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerTaskBaseAttribute(TriggerTaskBaseAttribute $TriggerTaskBaseAttribute) Set Task basic attributes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TriggerTaskConfiguration getTriggerTaskConfiguration() Obtain Task configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerTaskConfiguration(TriggerTaskConfiguration $TriggerTaskConfiguration) Set Task configurations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TriggerTaskSchedulerConfiguration getTriggerTaskSchedulerConfiguration() Obtain Task scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerTaskSchedulerConfiguration(TriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration) Set Task scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTask extends AbstractModel
{
    /**
     * @var TriggerTaskBaseAttribute Task basic attributes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerTaskBaseAttribute;

    /**
     * @var TriggerTaskConfiguration Task configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerTaskConfiguration;

    /**
     * @var TriggerTaskSchedulerConfiguration Task scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerTaskSchedulerConfiguration;

    /**
     * @param TriggerTaskBaseAttribute $TriggerTaskBaseAttribute Task basic attributes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TriggerTaskConfiguration $TriggerTaskConfiguration Task configurations.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration Task scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TriggerTaskBaseAttribute",$param) and $param["TriggerTaskBaseAttribute"] !== null) {
            $this->TriggerTaskBaseAttribute = new TriggerTaskBaseAttribute();
            $this->TriggerTaskBaseAttribute->deserialize($param["TriggerTaskBaseAttribute"]);
        }

        if (array_key_exists("TriggerTaskConfiguration",$param) and $param["TriggerTaskConfiguration"] !== null) {
            $this->TriggerTaskConfiguration = new TriggerTaskConfiguration();
            $this->TriggerTaskConfiguration->deserialize($param["TriggerTaskConfiguration"]);
        }

        if (array_key_exists("TriggerTaskSchedulerConfiguration",$param) and $param["TriggerTaskSchedulerConfiguration"] !== null) {
            $this->TriggerTaskSchedulerConfiguration = new TriggerTaskSchedulerConfiguration();
            $this->TriggerTaskSchedulerConfiguration->deserialize($param["TriggerTaskSchedulerConfiguration"]);
        }
    }
}
