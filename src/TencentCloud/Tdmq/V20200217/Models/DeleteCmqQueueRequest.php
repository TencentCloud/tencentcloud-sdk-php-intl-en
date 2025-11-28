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
 * DeleteCmqQueue request structure.
 *
 * @method string getQueueName() Obtain Queue name, unique under the same account in a single region. queue name is a string of no more than 64 characters, beginning with a letter, the remainder can contain letters, digits, and hyphens (-).
 * @method void setQueueName(string $QueueName) Set Queue name, unique under the same account in a single region. queue name is a string of no more than 64 characters, beginning with a letter, the remainder can contain letters, digits, and hyphens (-).
 */
class DeleteCmqQueueRequest extends AbstractModel
{
    /**
     * @var string Queue name, unique under the same account in a single region. queue name is a string of no more than 64 characters, beginning with a letter, the remainder can contain letters, digits, and hyphens (-).
     */
    public $QueueName;

    /**
     * @param string $QueueName Queue name, unique under the same account in a single region. queue name is a string of no more than 64 characters, beginning with a letter, the remainder can contain letters, digits, and hyphens (-).
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
