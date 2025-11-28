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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MessageTrack
 *
 * @method string getConsumerGroup() Obtain Specifies the consumer group name.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Specifies the consumer group name.
 * @method string getConsumeStatus() Obtain Consumption status. CONSUMED: Consumed CONSUMED_BUT_FILTERED: Filtered NOT_CONSUME: Not consumed ENTER_RETRY: Enter retry queue. ENTER_DLQ: Enter dead letter queue. UNKNOWN: Consumption status unknown
 * @method void setConsumeStatus(string $ConsumeStatus) Set Consumption status. CONSUMED: Consumed CONSUMED_BUT_FILTERED: Filtered NOT_CONSUME: Not consumed ENTER_RETRY: Enter retry queue. ENTER_DLQ: Enter dead letter queue. UNKNOWN: Consumption status unknown
 * @method string getTrackType() Obtain Track type
 * @method void setTrackType(string $TrackType) Set Track type
 * @method string getExceptionDesc() Obtain Exception information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptionDesc(string $ExceptionDesc) Set Exception information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MessageTrackItem extends AbstractModel
{
    /**
     * @var string Specifies the consumer group name.
     */
    public $ConsumerGroup;

    /**
     * @var string Consumption status. CONSUMED: Consumed CONSUMED_BUT_FILTERED: Filtered NOT_CONSUME: Not consumed ENTER_RETRY: Enter retry queue. ENTER_DLQ: Enter dead letter queue. UNKNOWN: Consumption status unknown
     */
    public $ConsumeStatus;

    /**
     * @var string Track type
     */
    public $TrackType;

    /**
     * @var string Exception information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptionDesc;

    /**
     * @param string $ConsumerGroup Specifies the consumer group name.
     * @param string $ConsumeStatus Consumption status. CONSUMED: Consumed CONSUMED_BUT_FILTERED: Filtered NOT_CONSUME: Not consumed ENTER_RETRY: Enter retry queue. ENTER_DLQ: Enter dead letter queue. UNKNOWN: Consumption status unknown
     * @param string $TrackType Track type
     * @param string $ExceptionDesc Exception information.
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
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
