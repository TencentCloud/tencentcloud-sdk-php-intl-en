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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow running instance time information
 *
 * @method string getCreateTime() Obtain Creation time (a millisecond timestamp).
 * @method void setCreateTime(string $CreateTime) Set Creation time (a millisecond timestamp).
 * @method string getStartTime() Obtain Start time (timestamp in milliseconds)
 * @method void setStartTime(string $StartTime) Set Start time (timestamp in milliseconds)
 * @method string getEndTime() Obtain End time (timestamp in milliseconds)
 * @method void setEndTime(string $EndTime) Set End time (timestamp in milliseconds)
 */
class WorkflowRunTime extends AbstractModel
{
    /**
     * @var string Creation time (a millisecond timestamp).
     */
    public $CreateTime;

    /**
     * @var string Start time (timestamp in milliseconds)
     */
    public $StartTime;

    /**
     * @var string End time (timestamp in milliseconds)
     */
    public $EndTime;

    /**
     * @param string $CreateTime Creation time (a millisecond timestamp).
     * @param string $StartTime Start time (timestamp in milliseconds)
     * @param string $EndTime End time (timestamp in milliseconds)
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
