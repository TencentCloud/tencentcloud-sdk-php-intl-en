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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sync options configured when the target database is Kafka
 *
 * @method string getDataType() Obtain Data type delivered to Kafka, such as Avro, Json, canal-pb, canal-json
 * @method void setDataType(string $DataType) Set Data type delivered to Kafka, such as Avro, Json, canal-pb, canal-json
 * @method string getTopicType() Obtain Topic sync policy, such as `Single` (deliver all data to a single topic), `Multi` (deliver data to multiple custom topics).
 * @method void setTopicType(string $TopicType) Set Topic sync policy, such as `Single` (deliver all data to a single topic), `Multi` (deliver data to multiple custom topics).
 * @method string getDDLTopicName() Obtain Topic for DDL storage
 * @method void setDDLTopicName(string $DDLTopicName) Set Topic for DDL storage
 * @method array getTopicRules() Obtain Topic description
 * @method void setTopicRules(array $TopicRules) Set Topic description
 */
class KafkaOption extends AbstractModel
{
    /**
     * @var string Data type delivered to Kafka, such as Avro, Json, canal-pb, canal-json
     */
    public $DataType;

    /**
     * @var string Topic sync policy, such as `Single` (deliver all data to a single topic), `Multi` (deliver data to multiple custom topics).
     */
    public $TopicType;

    /**
     * @var string Topic for DDL storage
     */
    public $DDLTopicName;

    /**
     * @var array Topic description
     */
    public $TopicRules;

    /**
     * @param string $DataType Data type delivered to Kafka, such as Avro, Json, canal-pb, canal-json
     * @param string $TopicType Topic sync policy, such as `Single` (deliver all data to a single topic), `Multi` (deliver data to multiple custom topics).
     * @param string $DDLTopicName Topic for DDL storage
     * @param array $TopicRules Topic description
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
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("DDLTopicName",$param) and $param["DDLTopicName"] !== null) {
            $this->DDLTopicName = $param["DDLTopicName"];
        }

        if (array_key_exists("TopicRules",$param) and $param["TopicRules"] !== null) {
            $this->TopicRules = [];
            foreach ($param["TopicRules"] as $key => $value){
                $obj = new TopicRule();
                $obj->deserialize($value);
                array_push($this->TopicRules, $obj);
            }
        }
    }
}
