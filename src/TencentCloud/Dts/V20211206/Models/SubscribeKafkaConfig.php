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
 * Number of subscribed Kafka partitions and partition rules. mariadb, percona, tdsqlmysql, tdpg do not support custom partitions, so DistributeRules and DefaultRuleType can be left blank, but NumberOfPartitions is required.
 *
 * @method integer getNumberOfPartitions() Obtain Number of Kafka partitions. Valid values: 1, 4, 8.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumberOfPartitions(integer $NumberOfPartitions) Set Number of Kafka partitions. Valid values: 1, 4, 8.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDistributeRules() Obtain Partition rules. This field is required when NumberOfPartitions > 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDistributeRules(array $DistributeRules) Set Partition rules. This field is required when NumberOfPartitions > 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultRuleType() Obtain Default partitioning policy. If NumberOfPartitions > 1, this field is required. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key). Valid values for mongo: collection (partitioned by collection name). This field is used in conjunction with DistributeRules. If this field is configured, it is considered as configuring a DistributeRules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultRuleType(string $DefaultRuleType) Set Default partitioning policy. If NumberOfPartitions > 1, this field is required. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key). Valid values for mongo: collection (partitioned by collection name). This field is used in conjunction with DistributeRules. If this field is configured, it is considered as configuring a DistributeRules.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SubscribeKafkaConfig extends AbstractModel
{
    /**
     * @var integer Number of Kafka partitions. Valid values: 1, 4, 8.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NumberOfPartitions;

    /**
     * @var array Partition rules. This field is required when NumberOfPartitions > 1.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DistributeRules;

    /**
     * @var string Default partitioning policy. If NumberOfPartitions > 1, this field is required. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key). Valid values for mongo: collection (partitioned by collection name). This field is used in conjunction with DistributeRules. If this field is configured, it is considered as configuring a DistributeRules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultRuleType;

    /**
     * @param integer $NumberOfPartitions Number of Kafka partitions. Valid values: 1, 4, 8.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DistributeRules Partition rules. This field is required when NumberOfPartitions > 1.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultRuleType Default partitioning policy. If NumberOfPartitions > 1, this field is required. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key). Valid values for mongo: collection (partitioned by collection name). This field is used in conjunction with DistributeRules. If this field is configured, it is considered as configuring a DistributeRules.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NumberOfPartitions",$param) and $param["NumberOfPartitions"] !== null) {
            $this->NumberOfPartitions = $param["NumberOfPartitions"];
        }

        if (array_key_exists("DistributeRules",$param) and $param["DistributeRules"] !== null) {
            $this->DistributeRules = [];
            foreach ($param["DistributeRules"] as $key => $value){
                $obj = new DistributeRule();
                $obj->deserialize($value);
                array_push($this->DistributeRules, $obj);
            }
        }

        if (array_key_exists("DefaultRuleType",$param) and $param["DefaultRuleType"] !== null) {
            $this->DefaultRuleType = $param["DefaultRuleType"];
        }
    }
}
