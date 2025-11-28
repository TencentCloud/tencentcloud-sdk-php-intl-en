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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for RocketMQ message trace information
 *
 * @method string getGroup() Obtain Consumer group
 * @method void setGroup(string $Group) Set Consumer group
 * @method string getConsumeStatus() Obtain Consumption status.
CONSUMED.
CONSUMED BUT FILTERED.
NOT_CONSUME: specifies unconsumed.
ENTER_RETRY: specifies whether to enter the retry queue.
ENTER_DLQ: specifies whether the message enters the dead letter queue.
Consumption status UNKNOWN.
 * @method void setConsumeStatus(string $ConsumeStatus) Set Consumption status.
CONSUMED.
CONSUMED BUT FILTERED.
NOT_CONSUME: specifies unconsumed.
ENTER_RETRY: specifies whether to enter the retry queue.
ENTER_DLQ: specifies whether the message enters the dead letter queue.
Consumption status UNKNOWN.
 * @method string getTrackType() Obtain Message trace type
 * @method void setTrackType(string $TrackType) Set Message trace type
 * @method string getExceptionDesc() Obtain Exception information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptionDesc(string $ExceptionDesc) Set Exception information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RocketMQMessageTrack extends AbstractModel
{
    /**
     * @var string Consumer group
     */
    public $Group;

    /**
     * @var string Consumption status.
CONSUMED.
CONSUMED BUT FILTERED.
NOT_CONSUME: specifies unconsumed.
ENTER_RETRY: specifies whether to enter the retry queue.
ENTER_DLQ: specifies whether the message enters the dead letter queue.
Consumption status UNKNOWN.
     */
    public $ConsumeStatus;

    /**
     * @var string Message trace type
     */
    public $TrackType;

    /**
     * @var string Exception information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptionDesc;

    /**
     * @param string $Group Consumer group
     * @param string $ConsumeStatus Consumption status.
CONSUMED.
CONSUMED BUT FILTERED.
NOT_CONSUME: specifies unconsumed.
ENTER_RETRY: specifies whether to enter the retry queue.
ENTER_DLQ: specifies whether the message enters the dead letter queue.
Consumption status UNKNOWN.
     * @param string $TrackType Message trace type
     * @param string $ExceptionDesc Exception information
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("ConsumeStatus",$param) and $param["ConsumeStatus"] !== null) {
            $this->ConsumeStatus = $param["ConsumeStatus"];
        }

        if (array_key_exists("TrackType",$param) and $param["TrackType"] !== null) {
            $this->TrackType = $param["TrackType"];
        }

        if (array_key_exists("ExceptionDesc",$param) and $param["ExceptionDesc"] !== null) {
            $this->ExceptionDesc = $param["ExceptionDesc"];
        }
    }
}
