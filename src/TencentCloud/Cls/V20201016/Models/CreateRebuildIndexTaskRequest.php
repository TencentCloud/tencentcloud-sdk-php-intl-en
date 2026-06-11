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
 * CreateRebuildIndexTask request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getStartTime() Obtain Reconstruction start timestamp, in milliseconds
Start time cannot exceed log lifecycle
 * @method void setStartTime(integer $StartTime) Set Reconstruction start timestamp, in milliseconds
Start time cannot exceed log lifecycle
 * @method integer getEndTime() Obtain Reconstruction end timestamp, in milliseconds
End time not later than 15 minutes before the current time
Note: It is advisable to use the "EstimateRebuildIndexTask" API in advance to assess the data volume and duration involved in index rebuilding within this time range, avoiding excessive cost or duration due to overly large data volume.
 * @method void setEndTime(integer $EndTime) Set Reconstruction end timestamp, in milliseconds
End time not later than 15 minutes before the current time
Note: It is advisable to use the "EstimateRebuildIndexTask" API in advance to assess the data volume and duration involved in index rebuilding within this time range, avoiding excessive cost or duration due to overly large data volume.
 */
class CreateRebuildIndexTaskRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer Reconstruction start timestamp, in milliseconds
Start time cannot exceed log lifecycle
     */
    public $StartTime;

    /**
     * @var integer Reconstruction end timestamp, in milliseconds
End time not later than 15 minutes before the current time
Note: It is advisable to use the "EstimateRebuildIndexTask" API in advance to assess the data volume and duration involved in index rebuilding within this time range, avoiding excessive cost or duration due to overly large data volume.
     */
    public $EndTime;

    /**
     * @param string $TopicId Log topic ID
     * @param integer $StartTime Reconstruction start timestamp, in milliseconds
Start time cannot exceed log lifecycle
     * @param integer $EndTime Reconstruction end timestamp, in milliseconds
End time not later than 15 minutes before the current time
Note: It is advisable to use the "EstimateRebuildIndexTask" API in advance to assess the data volume and duration involved in index rebuilding within this time range, avoiding excessive cost or duration due to overly large data volume.
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
