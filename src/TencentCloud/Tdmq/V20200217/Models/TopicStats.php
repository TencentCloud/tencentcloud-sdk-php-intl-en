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
 * Topic status.
 *
 * @method string getBrokerName() Obtain Broker node.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBrokerName(string $BrokerName) Set Broker node.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQueueId() Obtain Queue number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueId(integer $QueueId) Set Queue number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinOffset() Obtain Minimum offset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinOffset(integer $MinOffset) Set Minimum offset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxOffset() Obtain Specifies the maximum offset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxOffset(integer $MaxOffset) Set Specifies the maximum offset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMessageCount() Obtain Message count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessageCount(integer $MessageCount) Set Message count.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastUpdateTimestamp() Obtain Last message write time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTimestamp(integer $LastUpdateTimestamp) Set Last message write time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TopicStats extends AbstractModel
{
    /**
     * @var string Broker node.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BrokerName;

    /**
     * @var integer Queue number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueId;

    /**
     * @var integer Minimum offset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinOffset;

    /**
     * @var integer Specifies the maximum offset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxOffset;

    /**
     * @var integer Message count.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessageCount;

    /**
     * @var integer Last message write time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTimestamp;

    /**
     * @param string $BrokerName Broker node.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QueueId Queue number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinOffset Minimum offset.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxOffset Specifies the maximum offset.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MessageCount Message count.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastUpdateTimestamp Last message write time.
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
        if (array_key_exists("BrokerName",$param) and $param["BrokerName"] !== null) {
            $this->BrokerName = $param["BrokerName"];
        }

        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("MinOffset",$param) and $param["MinOffset"] !== null) {
            $this->MinOffset = $param["MinOffset"];
        }

        if (array_key_exists("MaxOffset",$param) and $param["MaxOffset"] !== null) {
            $this->MaxOffset = $param["MaxOffset"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("LastUpdateTimestamp",$param) and $param["LastUpdateTimestamp"] !== null) {
            $this->LastUpdateTimestamp = $param["LastUpdateTimestamp"];
        }
    }
}
