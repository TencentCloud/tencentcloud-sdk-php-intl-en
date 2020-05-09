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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeadLetterPolicy
 *
 * @method string getDeadLetterQueueName() Obtain DeadLetterQueueName
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) Set DeadLetterQueueName
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeadLetterQueue() Obtain DeadLetterQueue
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterQueue(string $DeadLetterQueue) Set DeadLetterQueue
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicy() Obtain Policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPolicy(integer $Policy) Set Policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxTimeToLive() Obtain MaxTimeToLive
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) Set MaxTimeToLive
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxReceiveCount() Obtain MaxReceiveCount
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) Set MaxReceiveCount
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DeadLetterPolicy extends AbstractModel
{
    /**
     * @var string DeadLetterQueueName
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterQueueName;

    /**
     * @var string DeadLetterQueue
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterQueue;

    /**
     * @var integer Policy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var integer MaxTimeToLive
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxTimeToLive;

    /**
     * @var integer MaxReceiveCount
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxReceiveCount;

    /**
     * @param string $DeadLetterQueueName DeadLetterQueueName
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DeadLetterQueue DeadLetterQueue
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Policy Policy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxTimeToLive MaxTimeToLive
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxReceiveCount MaxReceiveCount
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
        if (array_key_exists("DeadLetterQueueName",$param) and $param["DeadLetterQueueName"] !== null) {
            $this->DeadLetterQueueName = $param["DeadLetterQueueName"];
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
