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
 * DeleteCmqSubscribe request structure.
 *
 * @method string getTopicName() Obtain Topic name, which must be unique under the same account in a single region. the name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
 * @method void setTopicName(string $TopicName) Set Topic name, which must be unique under the same account in a single region. the name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
 * @method string getSubscriptionName() Obtain Subscription name, uniquely identifies under the same topic of the same account in a single region. subscription name is a string of no more than 64 characters, beginning with a letter, the remaining part can contain letters, digits, and hyphens (-).
 * @method void setSubscriptionName(string $SubscriptionName) Set Subscription name, uniquely identifies under the same topic of the same account in a single region. subscription name is a string of no more than 64 characters, beginning with a letter, the remaining part can contain letters, digits, and hyphens (-).
 */
class DeleteCmqSubscribeRequest extends AbstractModel
{
    /**
     * @var string Topic name, which must be unique under the same account in a single region. the name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
     */
    public $TopicName;

    /**
     * @var string Subscription name, uniquely identifies under the same topic of the same account in a single region. subscription name is a string of no more than 64 characters, beginning with a letter, the remaining part can contain letters, digits, and hyphens (-).
     */
    public $SubscriptionName;

    /**
     * @param string $TopicName Topic name, which must be unique under the same account in a single region. the name is a string of no more than 64 characters, starting with a letter, and the remaining part may include letters, numbers, and hyphens (-).
     * @param string $SubscriptionName Subscription name, uniquely identifies under the same topic of the same account in a single region. subscription name is a string of no more than 64 characters, beginning with a letter, the remaining part can contain letters, digits, and hyphens (-).
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }
    }
}
