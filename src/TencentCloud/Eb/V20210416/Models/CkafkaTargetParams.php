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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka delivery target description
 *
 * @method string getTopicName() Obtain CKafka topic to be delivered to
 * @method void setTopicName(string $TopicName) Set CKafka topic to be delivered to
 * @method RetryPolicy getRetryPolicy() Obtain Retry policy
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) Set Retry policy
 */
class CkafkaTargetParams extends AbstractModel
{
    /**
     * @var string CKafka topic to be delivered to
     */
    public $TopicName;

    /**
     * @var RetryPolicy Retry policy
     */
    public $RetryPolicy;

    /**
     * @param string $TopicName CKafka topic to be delivered to
     * @param RetryPolicy $RetryPolicy Retry policy
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

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = new RetryPolicy();
            $this->RetryPolicy->deserialize($param["RetryPolicy"]);
        }
    }
}
