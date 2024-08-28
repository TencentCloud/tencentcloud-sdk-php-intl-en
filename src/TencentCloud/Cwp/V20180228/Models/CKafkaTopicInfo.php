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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka topic name
 *
 * @method string getTopicID() Obtain Topic ID
 * @method void setTopicID(string $TopicID) Set Topic ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 */
class CKafkaTopicInfo extends AbstractModel
{
    /**
     * @var string Topic ID
     */
    public $TopicID;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @param string $TopicID Topic ID
     * @param string $TopicName Topic name
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
        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
