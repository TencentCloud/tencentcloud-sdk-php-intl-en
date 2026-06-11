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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EstimateRebuildIndexTask request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getStartTime() Obtain Estimated task start time, in milliseconds
 * @method void setStartTime(integer $StartTime) Set Estimated task start time, in milliseconds
 * @method integer getEndTime() Obtain Estimated end time of the task, in milliseconds.
 * @method void setEndTime(integer $EndTime) Set Estimated end time of the task, in milliseconds.
 */
class EstimateRebuildIndexTaskRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer Estimated task start time, in milliseconds
     */
    public $StartTime;

    /**
     * @var integer Estimated end time of the task, in milliseconds.
     */
    public $EndTime;

    /**
     * @param string $TopicId Log topic ID
     * @param integer $StartTime Estimated task start time, in milliseconds
     * @param integer $EndTime Estimated end time of the task, in milliseconds.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
