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
 * Cmq DeadLetterSource
 *
 * @method string getQueueId() Obtain Message queue ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQueueId(string $QueueId) Set Message queue ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getQueueName() Obtain Message queue name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQueueName(string $QueueName) Set Message queue name.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CmqDeadLetterSource extends AbstractModel
{
    /**
     * @var string Message queue ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $QueueId;

    /**
     * @var string Message queue name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $QueueName;

    /**
     * @param string $QueueId Message queue ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $QueueName Message queue name.
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
