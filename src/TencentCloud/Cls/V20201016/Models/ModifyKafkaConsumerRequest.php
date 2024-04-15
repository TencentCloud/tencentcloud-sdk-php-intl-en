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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKafkaConsumer request structure.
 *
 * @method string getFromTopicId() Obtain Log Topic ID
 * @method void setFromTopicId(string $FromTopicId) Set Log Topic ID
 * @method integer getCompression() Obtain Compression mode [0: NONE; 2: SNAPPY; 3: LZ4]
 * @method void setCompression(integer $Compression) Set Compression mode [0: NONE; 2: SNAPPY; 3: LZ4]
 * @method KafkaConsumerContent getConsumerContent() Obtain Kafka protocol consumer data format
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) Set Kafka protocol consumer data format
 */
class ModifyKafkaConsumerRequest extends AbstractModel
{
    /**
     * @var string Log Topic ID
     */
    public $FromTopicId;

    /**
     * @var integer Compression mode [0: NONE; 2: SNAPPY; 3: LZ4]
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent Kafka protocol consumer data format
     */
    public $ConsumerContent;

    /**
     * @param string $FromTopicId Log Topic ID
     * @param integer $Compression Compression mode [0: NONE; 2: SNAPPY; 3: LZ4]
     * @param KafkaConsumerContent $ConsumerContent Kafka protocol consumer data format
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
        if (array_key_exists("FromTopicId",$param) and $param["FromTopicId"] !== null) {
            $this->FromTopicId = $param["FromTopicId"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("ConsumerContent",$param) and $param["ConsumerContent"] !== null) {
            $this->ConsumerContent = new KafkaConsumerContent();
            $this->ConsumerContent->deserialize($param["ConsumerContent"]);
        }
    }
}
