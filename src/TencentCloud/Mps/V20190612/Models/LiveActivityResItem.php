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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The output of a live scheme subtask.
 *
 * @method LiveScheduleLiveRecordTaskResult getLiveRecordTask() Obtain The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLiveRecordTask(LiveScheduleLiveRecordTaskResult $LiveRecordTask) Set The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method ScheduleQualityControlTaskResult getLiveQualityControlTask() Obtain Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLiveQualityControlTask(ScheduleQualityControlTaskResult $LiveQualityControlTask) Set Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveActivityResItem extends AbstractModel
{
    /**
     * @var LiveScheduleLiveRecordTaskResult The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LiveRecordTask;

    /**
     * @var ScheduleQualityControlTaskResult Media quality inspection task output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LiveQualityControlTask;

    /**
     * @param LiveScheduleLiveRecordTaskResult $LiveRecordTask The output of a live recording task.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param ScheduleQualityControlTaskResult $LiveQualityControlTask Media quality inspection task output.
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
        if (array_key_exists("LiveRecordTask",$param) and $param["LiveRecordTask"] !== null) {
            $this->LiveRecordTask = new LiveScheduleLiveRecordTaskResult();
            $this->LiveRecordTask->deserialize($param["LiveRecordTask"]);
        }

        if (array_key_exists("LiveQualityControlTask",$param) and $param["LiveQualityControlTask"] !== null) {
            $this->LiveQualityControlTask = new ScheduleQualityControlTaskResult();
            $this->LiveQualityControlTask->deserialize($param["LiveQualityControlTask"]);
        }
    }
}
