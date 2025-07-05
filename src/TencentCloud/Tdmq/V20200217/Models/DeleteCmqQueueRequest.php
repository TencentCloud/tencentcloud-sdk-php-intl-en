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
 * @method string getQueueName() Obtain Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
 * @method void setQueueName(string $QueueName) Set Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
 */
class DeleteCmqQueueRequest extends AbstractModel
{
    /**
     * @var string Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
     */
    public $QueueName;

    /**
     * @param string $QueueName Queue name, which must be unique under the same account in the same region. It can contain up to 64 letters, digits, and hyphens and must begin with a letter.
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
