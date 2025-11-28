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
 * cmq DeadLetterPolicy
 *
 * @method string getDeadLetterQueue() Obtain Dead letter queue.
 * @method void setDeadLetterQueue(string $DeadLetterQueue) Set Dead letter queue.
 * @method integer getPolicy() Obtain Dead letter queue policy. 0: maximum number of receipt. 1: maximum unconsumed time.
 * @method void setPolicy(integer $Policy) Set Dead letter queue policy. 0: maximum number of receipt. 1: maximum unconsumed time.
 * @method integer getMaxTimeToLive() Obtain Maximum unconsumed expiration time. Required if policy is 1. Range: 300-43,200 seconds, must be less than the maximum message retention time MsgRetentionSeconds.
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) Set Maximum unconsumed expiration time. Required if policy is 1. Range: 300-43,200 seconds, must be less than the maximum message retention time MsgRetentionSeconds.
 * @method integer getMaxReceiveCount() Obtain Maximum number of receipt. required when Policy is 0. value range: 1 to 1000.
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) Set Maximum number of receipt. required when Policy is 0. value range: 1 to 1000.
 */
class CmqDeadLetterPolicy extends AbstractModel
{
    /**
     * @var string Dead letter queue.
     */
    public $DeadLetterQueue;

    /**
     * @var integer Dead letter queue policy. 0: maximum number of receipt. 1: maximum unconsumed time.
     */
    public $Policy;

    /**
     * @var integer Maximum unconsumed expiration time. Required if policy is 1. Range: 300-43,200 seconds, must be less than the maximum message retention time MsgRetentionSeconds.
     */
    public $MaxTimeToLive;

    /**
     * @var integer Maximum number of receipt. required when Policy is 0. value range: 1 to 1000.
     */
    public $MaxReceiveCount;

    /**
     * @param string $DeadLetterQueue Dead letter queue.
     * @param integer $Policy Dead letter queue policy. 0: maximum number of receipt. 1: maximum unconsumed time.
     * @param integer $MaxTimeToLive Maximum unconsumed expiration time. Required if policy is 1. Range: 300-43,200 seconds, must be less than the maximum message retention time MsgRetentionSeconds.
     * @param integer $MaxReceiveCount Maximum number of receipt. required when Policy is 0. value range: 1 to 1000.
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
