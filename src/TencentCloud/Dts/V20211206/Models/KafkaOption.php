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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Synchronization option fields added when the destination is Kafka.
 *
 * @method string getDataType() Obtain <p>Data type delivered to kafka, such as Avro, Json, canal-pb, canal-Json, debezium</p>
 * @method void setDataType(string $DataType) Set <p>Data type delivered to kafka, such as Avro, Json, canal-pb, canal-Json, debezium</p>
 * @method string getTopicType() Obtain <p>Synchronize topic policies, for example, Single (Deliver to a single topic), Multi (Custom topic name)</p>
 * @method void setTopicType(string $TopicType) Set <p>Synchronize topic policies, for example, Single (Deliver to a single topic), Multi (Custom topic name)</p>
 * @method string getDDLTopicName() Obtain <p>topic used to store ddl</p>
 * @method void setDDLTopicName(string $DDLTopicName) Set <p>topic used to store ddl</p>
 * @method array getTopicRules() Obtain <p>Description of single topic and custom topic</p>
 * @method void setTopicRules(array $TopicRules) Set <p>Description of single topic and custom topic</p>
 * @method array getDataOption() Obtain <p>Additional information, for specific data types, additional parameters can be set. For example, for Canal-compatible feature support: "canalOfficialFormat":"on" means to enable the Canal-compatible feature, not included by default. For large message skipping feature support: "skipLargeMessage":"on" means to enable skipping large messages, not included by default; when enabled, "maxMessageSizeMB" must be simultaneously set to a positive integer string from 1 to 100, representing the max message size threshold (MB), messages exceeding this size will be skipped, not included by default.</p>
 * @method void setDataOption(array $DataOption) Set <p>Additional information, for specific data types, additional parameters can be set. For example, for Canal-compatible feature support: "canalOfficialFormat":"on" means to enable the Canal-compatible feature, not included by default. For large message skipping feature support: "skipLargeMessage":"on" means to enable skipping large messages, not included by default; when enabled, "maxMessageSizeMB" must be simultaneously set to a positive integer string from 1 to 100, representing the max message size threshold (MB), messages exceeding this size will be skipped, not included by default.</p>
 */
class KafkaOption extends AbstractModel
{
    /**
     * @var string <p>Data type delivered to kafka, such as Avro, Json, canal-pb, canal-Json, debezium</p>
     */
    public $DataType;

    /**
     * @var string <p>Synchronize topic policies, for example, Single (Deliver to a single topic), Multi (Custom topic name)</p>
     */
    public $TopicType;

    /**
     * @var string <p>topic used to store ddl</p>
     */
    public $DDLTopicName;

    /**
     * @var array <p>Description of single topic and custom topic</p>
     */
    public $TopicRules;

    /**
     * @var array <p>Additional information, for specific data types, additional parameters can be set. For example, for Canal-compatible feature support: "canalOfficialFormat":"on" means to enable the Canal-compatible feature, not included by default. For large message skipping feature support: "skipLargeMessage":"on" means to enable skipping large messages, not included by default; when enabled, "maxMessageSizeMB" must be simultaneously set to a positive integer string from 1 to 100, representing the max message size threshold (MB), messages exceeding this size will be skipped, not included by default.</p>
     */
    public $DataOption;

    /**
     * @param string $DataType <p>Data type delivered to kafka, such as Avro, Json, canal-pb, canal-Json, debezium</p>
     * @param string $TopicType <p>Synchronize topic policies, for example, Single (Deliver to a single topic), Multi (Custom topic name)</p>
     * @param string $DDLTopicName <p>topic used to store ddl</p>
     * @param array $TopicRules <p>Description of single topic and custom topic</p>
     * @param array $DataOption <p>Additional information, for specific data types, additional parameters can be set. For example, for Canal-compatible feature support: "canalOfficialFormat":"on" means to enable the Canal-compatible feature, not included by default. For large message skipping feature support: "skipLargeMessage":"on" means to enable skipping large messages, not included by default; when enabled, "maxMessageSizeMB" must be simultaneously set to a positive integer string from 1 to 100, representing the max message size threshold (MB), messages exceeding this size will be skipped, not included by default.</p>
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

        if (array_key_exists("DataOption",$param) and $param["DataOption"] !== null) {
            $this->DataOption = [];
            foreach ($param["DataOption"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->DataOption, $obj);
            }
        }
    }
}
