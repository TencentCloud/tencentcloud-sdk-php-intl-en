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
 * Describes the details of each stage in instance execution.
 *
 * @method string getStartTime() Obtain Start time of the state.
 * @method void setStartTime(string $StartTime) Set Start time of the state.
 * @method string getDetailState() Obtain **Instance lifecycle phase status**.

-WAIT_UPSTREAM indicates the wait event/upstream status.
-WAIT_RUN indicates the waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates the final state of completion.
- FAILED indicates the final state - retry on failure.
-EXPIRED indicates the final state - failure.
-SKIP_RUNNING indicates the branch skipped by the upstream branch node in the final state.
-HISTORY indicates compatibility with historical instances before 2024-03-30. no need to pay attention to this enum afterward.
 * @method void setDetailState(string $DetailState) Set **Instance lifecycle phase status**.

-WAIT_UPSTREAM indicates the wait event/upstream status.
-WAIT_RUN indicates the waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates the final state of completion.
- FAILED indicates the final state - retry on failure.
-EXPIRED indicates the final state - failure.
-SKIP_RUNNING indicates the branch skipped by the upstream branch node in the final state.
-HISTORY indicates compatibility with historical instances before 2024-03-30. no need to pay attention to this enum afterward.
 * @method string getEndTime() Obtain End time of the state.
 * @method void setEndTime(string $EndTime) Set End time of the state.
 */
class InstanceExecutionPhase extends AbstractModel
{
    /**
     * @var string Start time of the state.
     */
    public $StartTime;

    /**
     * @var string **Instance lifecycle phase status**.

-WAIT_UPSTREAM indicates the wait event/upstream status.
-WAIT_RUN indicates the waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates the final state of completion.
- FAILED indicates the final state - retry on failure.
-EXPIRED indicates the final state - failure.
-SKIP_RUNNING indicates the branch skipped by the upstream branch node in the final state.
-HISTORY indicates compatibility with historical instances before 2024-03-30. no need to pay attention to this enum afterward.
     */
    public $DetailState;

    /**
     * @var string End time of the state.
     */
    public $EndTime;

    /**
     * @param string $StartTime Start time of the state.
     * @param string $DetailState **Instance lifecycle phase status**.

-WAIT_UPSTREAM indicates the wait event/upstream status.
-WAIT_RUN indicates the waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates the final state of completion.
- FAILED indicates the final state - retry on failure.
-EXPIRED indicates the final state - failure.
-SKIP_RUNNING indicates the branch skipped by the upstream branch node in the final state.
-HISTORY indicates compatibility with historical instances before 2024-03-30. no need to pay attention to this enum afterward.
     * @param string $EndTime End time of the state.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DetailState",$param) and $param["DetailState"] !== null) {
            $this->DetailState = $param["DetailState"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
