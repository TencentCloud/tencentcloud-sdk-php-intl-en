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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance Lifecycle Detail
 *
 * @method string getState() Obtain Indicates the status of an instance.
-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]  indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(string $State) Set Indicates the status of an instance.
-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]  indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDetailState() Obtain Instance lifecycle phase status.

-WAIT_UPSTREAM indicates waiting for an event or upstream status.
-WAIT_RUN indicates waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates terminal state - completed.
-FAILED indicates terminal state - retry after failure.
-EXPIRED indicates terminal state - failure.
-SKIP_RUNNING indicates terminal state - a branch skipped by the upstream branch node.
-HISTORY indicates compatibility with historical instances before march 30, 2024. no need to pay attention to this enumeration type for instances afterward.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetailState(string $DetailState) Set Instance lifecycle phase status.

-WAIT_UPSTREAM indicates waiting for an event or upstream status.
-WAIT_RUN indicates waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates terminal state - completed.
-FAILED indicates terminal state - retry after failure.
-EXPIRED indicates terminal state - failure.
-SKIP_RUNNING indicates terminal state - a branch skipped by the upstream branch node.
-HISTORY indicates compatibility with historical instances before march 30, 2024. no need to pay attention to this enumeration type for instances afterward.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceLifeDetailDto extends AbstractModel
{
    /**
     * @var string Indicates the status of an instance.
-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]  indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var string Start Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Instance lifecycle phase status.

-WAIT_UPSTREAM indicates waiting for an event or upstream status.
-WAIT_RUN indicates waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates terminal state - completed.
-FAILED indicates terminal state - retry after failure.
-EXPIRED indicates terminal state - failure.
-SKIP_RUNNING indicates terminal state - a branch skipped by the upstream branch node.
-HISTORY indicates compatibility with historical instances before march 30, 2024. no need to pay attention to this enumeration type for instances afterward.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetailState;

    /**
     * @var string End Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @param string $State Indicates the status of an instance.
-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22]  indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DetailState Instance lifecycle phase status.

-WAIT_UPSTREAM indicates waiting for an event or upstream status.
-WAIT_RUN indicates waiting for running status.
-RUNNING indicates the running state.
-COMPLETE indicates terminal state - completed.
-FAILED indicates terminal state - retry after failure.
-EXPIRED indicates terminal state - failure.
-SKIP_RUNNING indicates terminal state - a branch skipped by the upstream branch node.
-HISTORY indicates compatibility with historical instances before march 30, 2024. no need to pay attention to this enumeration type for instances afterward.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End Time of the State
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
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
