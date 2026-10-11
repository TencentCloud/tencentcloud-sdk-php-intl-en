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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task run condition rules
 *
 * @method string getUpstreamTaskId() Obtain <p>Upstream task ID</p>
 * @method void setUpstreamTaskId(string $UpstreamTaskId) Set <p>Upstream task ID</p>
 * @method string getUpstreamTaskName() Obtain <p>Upstream task name</p>
 * @method void setUpstreamTaskName(string $UpstreamTaskName) Set <p>Upstream task name</p>
 * @method array getAllowedStates() Obtain <p>Task run conditions<br>Supported status values: - SUCCESS: successful - FAILED: failed - UPSTREAM_FAILED: upstream failed - EXCLUDED: excluded from running</p>
 * @method void setAllowedStates(array $AllowedStates) Set <p>Task run conditions<br>Supported status values: - SUCCESS: successful - FAILED: failed - UPSTREAM_FAILED: upstream failed - EXCLUDED: excluded from running</p>
 */
class TaskRunConditionRule extends AbstractModel
{
    /**
     * @var string <p>Upstream task ID</p>
     */
    public $UpstreamTaskId;

    /**
     * @var string <p>Upstream task name</p>
     */
    public $UpstreamTaskName;

    /**
     * @var array <p>Task run conditions<br>Supported status values: - SUCCESS: successful - FAILED: failed - UPSTREAM_FAILED: upstream failed - EXCLUDED: excluded from running</p>
     */
    public $AllowedStates;

    /**
     * @param string $UpstreamTaskId <p>Upstream task ID</p>
     * @param string $UpstreamTaskName <p>Upstream task name</p>
     * @param array $AllowedStates <p>Task run conditions<br>Supported status values: - SUCCESS: successful - FAILED: failed - UPSTREAM_FAILED: upstream failed - EXCLUDED: excluded from running</p>
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
        if (array_key_exists("UpstreamTaskId",$param) and $param["UpstreamTaskId"] !== null) {
            $this->UpstreamTaskId = $param["UpstreamTaskId"];
        }

        if (array_key_exists("UpstreamTaskName",$param) and $param["UpstreamTaskName"] !== null) {
            $this->UpstreamTaskName = $param["UpstreamTaskName"];
        }

        if (array_key_exists("AllowedStates",$param) and $param["AllowedStates"] !== null) {
            $this->AllowedStates = $param["AllowedStates"];
        }
    }
}
