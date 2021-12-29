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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cmq DeadLetterPolicy
 *
 * @method string getDeadLetterQueue() Obtain Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterQueue(string $DeadLetterQueue) Set Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicy() Obtain Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPolicy(integer $Policy) Set Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxTimeToLive() Obtain Maximum period in seconds before an unconsumed message expires, which is required if `Policy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) Set Maximum period in seconds before an unconsumed message expires, which is required if `Policy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxReceiveCount() Obtain Maximum number of receipts.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) Set Maximum number of receipts.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CmqDeadLetterPolicy extends AbstractModel
{
    /**
     * @var string Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterQueue;

    /**
     * @var integer Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var integer Maximum period in seconds before an unconsumed message expires, which is required if `Policy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxTimeToLive;

    /**
     * @var integer Maximum number of receipts.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxReceiveCount;

    /**
     * @param string $DeadLetterQueue Dead letter queue.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Policy Dead letter queue policy.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxTimeToLive Maximum period in seconds before an unconsumed message expires, which is required if `Policy` is 1. Value range: 300–43200. This value should be smaller than `MsgRetentionSeconds` (maximum message retention period)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxReceiveCount Maximum number of receipts.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DeadLetterQueue",$param) and $param["DeadLetterQueue"] !== null) {
            $this->DeadLetterQueue = $param["DeadLetterQueue"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("MaxTimeToLive",$param) and $param["MaxTimeToLive"] !== null) {
            $this->MaxTimeToLive = $param["MaxTimeToLive"];
        }

        if (array_key_exists("MaxReceiveCount",$param) and $param["MaxReceiveCount"] !== null) {
            $this->MaxReceiveCount = $param["MaxReceiveCount"];
        }
    }
}
