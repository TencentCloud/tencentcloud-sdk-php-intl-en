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
 * Dependency configuration policy.
 *
 * @method string getPollingNullStrategy() Obtain Wait upstream task instance policy: EXECUTING (execute); WAITING (wait).

 * @method void setPollingNullStrategy(string $PollingNullStrategy) Set Wait upstream task instance policy: EXECUTING (execute); WAITING (wait).

 * @method array getTaskDependencyExecutingStrategies() Obtain This field is required only when PollingNullStrategy is set to EXECUTING.
Type: List

NOT_EXIST (default) - In cases where minute depends on minute / hour depends on hour, the parent instance does not fall within the scheduling time range of the downstream instance.

PARENT_EXPIRED - The parent instance failed.

PARENT_TIMEOUT - The parent instance timed out.

If any of the above conditions are met, the dependency check for that parent task instance is considered satisfied. In all other cases, the system must wait for the parent instance.
 * @method void setTaskDependencyExecutingStrategies(array $TaskDependencyExecutingStrategies) Set This field is required only when PollingNullStrategy is set to EXECUTING.
Type: List

NOT_EXIST (default) - In cases where minute depends on minute / hour depends on hour, the parent instance does not fall within the scheduling time range of the downstream instance.

PARENT_EXPIRED - The parent instance failed.

PARENT_TIMEOUT - The parent instance timed out.

If any of the above conditions are met, the dependency check for that parent task instance is considered satisfied. In all other cases, the system must wait for the parent instance.
 * @method integer getTaskDependencyExecutingTimeoutValue() Obtain This field is required only when TaskDependencyExecutingStrategies includes PARENT_TIMEOUT.
Specifies the timeout duration (in minutes) for the downstream task's dependency on the parent instance execution.
 * @method void setTaskDependencyExecutingTimeoutValue(integer $TaskDependencyExecutingTimeoutValue) Set This field is required only when TaskDependencyExecutingStrategies includes PARENT_TIMEOUT.
Specifies the timeout duration (in minutes) for the downstream task's dependency on the parent instance execution.
 */
class DependencyStrategyTask extends AbstractModel
{
    /**
     * @var string Wait upstream task instance policy: EXECUTING (execute); WAITING (wait).

     */
    public $PollingNullStrategy;

    /**
     * @var array This field is required only when PollingNullStrategy is set to EXECUTING.
Type: List

NOT_EXIST (default) - In cases where minute depends on minute / hour depends on hour, the parent instance does not fall within the scheduling time range of the downstream instance.

PARENT_EXPIRED - The parent instance failed.

PARENT_TIMEOUT - The parent instance timed out.

If any of the above conditions are met, the dependency check for that parent task instance is considered satisfied. In all other cases, the system must wait for the parent instance.
     */
    public $TaskDependencyExecutingStrategies;

    /**
     * @var integer This field is required only when TaskDependencyExecutingStrategies includes PARENT_TIMEOUT.
Specifies the timeout duration (in minutes) for the downstream task's dependency on the parent instance execution.
     */
    public $TaskDependencyExecutingTimeoutValue;

    /**
     * @param string $PollingNullStrategy Wait upstream task instance policy: EXECUTING (execute); WAITING (wait).

     * @param array $TaskDependencyExecutingStrategies This field is required only when PollingNullStrategy is set to EXECUTING.
Type: List

NOT_EXIST (default) - In cases where minute depends on minute / hour depends on hour, the parent instance does not fall within the scheduling time range of the downstream instance.

PARENT_EXPIRED - The parent instance failed.

PARENT_TIMEOUT - The parent instance timed out.

If any of the above conditions are met, the dependency check for that parent task instance is considered satisfied. In all other cases, the system must wait for the parent instance.
     * @param integer $TaskDependencyExecutingTimeoutValue This field is required only when TaskDependencyExecutingStrategies includes PARENT_TIMEOUT.
Specifies the timeout duration (in minutes) for the downstream task's dependency on the parent instance execution.
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
        if (array_key_exists("PollingNullStrategy",$param) and $param["PollingNullStrategy"] !== null) {
            $this->PollingNullStrategy = $param["PollingNullStrategy"];
        }

        if (array_key_exists("TaskDependencyExecutingStrategies",$param) and $param["TaskDependencyExecutingStrategies"] !== null) {
            $this->TaskDependencyExecutingStrategies = $param["TaskDependencyExecutingStrategies"];
        }

        if (array_key_exists("TaskDependencyExecutingTimeoutValue",$param) and $param["TaskDependencyExecutingTimeoutValue"] !== null) {
            $this->TaskDependencyExecutingTimeoutValue = $param["TaskDependencyExecutingTimeoutValue"];
        }
    }
}
