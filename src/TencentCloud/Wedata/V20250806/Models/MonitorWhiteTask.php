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
 * Monitor allowlist configuration with Alarm rules.
 *
 * @method string getMonitorObjectId() Obtain Configure the allowlist corresponding to the workflow/project id.
 * @method void setMonitorObjectId(string $MonitorObjectId) Set Configure the allowlist corresponding to the workflow/project id.
 * @method array getTaskIds() Obtain Allowlist task list.
 * @method void setTaskIds(array $TaskIds) Set Allowlist task list.
 */
class MonitorWhiteTask extends AbstractModel
{
    /**
     * @var string Configure the allowlist corresponding to the workflow/project id.
     */
    public $MonitorObjectId;

    /**
     * @var array Allowlist task list.
     */
    public $TaskIds;

    /**
     * @param string $MonitorObjectId Configure the allowlist corresponding to the workflow/project id.
     * @param array $TaskIds Allowlist task list.
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
        if (array_key_exists("MonitorObjectId",$param) and $param["MonitorObjectId"] !== null) {
            $this->MonitorObjectId = $param["MonitorObjectId"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }
    }
}
