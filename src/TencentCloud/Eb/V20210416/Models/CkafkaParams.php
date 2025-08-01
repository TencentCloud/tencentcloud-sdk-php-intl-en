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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka connector parameter
 *
 * @method string getOffset() Obtain kafka offset
 * @method void setOffset(string $Offset) Set kafka offset
 * @method string getTopicName() Obtain ckafka  topic
 * @method void setTopicName(string $TopicName) Set ckafka  topic
 */
class CkafkaParams extends AbstractModel
{
    /**
     * @var string kafka offset
     */
    public $Offset;

    /**
     * @var string ckafka  topic
     */
    public $TopicName;

    /**
     * @param string $Offset kafka offset
     * @param string $TopicName ckafka  topic
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
