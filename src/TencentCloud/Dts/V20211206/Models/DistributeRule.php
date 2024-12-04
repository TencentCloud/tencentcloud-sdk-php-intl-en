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
 * Kafka partition rules for subscription tasks. Data that matches the regex of the database name and table name will be delivered to the Kafka partition according to the RuleType . If multiple rules are configured, the first hit rule will take effect according to the configured order.
 *
 * @method string getRuleType() Obtain Rule type. Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key); cols (partitioned by column name). Valid values for mongo: collection (partitioned by collection name); collectionAndObjectId (partitioned by collection + primary key). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Rule type. Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key); cols (partitioned by column name). Valid values for mongo: collection (partitioned by collection name); collectionAndObjectId (partitioned by collection + primary key). Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbPattern() Obtain Database name matching rule, please fill in the regular expression.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbPattern(string $DbPattern) Set Database name matching rule, please fill in the regular expression.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTablePattern() Obtain Table name matching rule. If DatabaseType is mongodb, it matches the collection name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTablePattern(string $TablePattern) Set Table name matching rule. If DatabaseType is mongodb, it matches the collection name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain Column name. This field is required if RuleType is cols. The subscription task will use the value of this column to calculate the partition. Mongo does not partition by column, so there is no need to pass this field.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set Column name. This field is required if RuleType is cols. The subscription task will use the value of this column to calculate the partition. Mongo does not partition by column, so there is no need to pass this field.Note: This field may return null, indicating that no valid values can be obtained.
 */
class DistributeRule extends AbstractModel
{
    /**
     * @var string Rule type. Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key); cols (partitioned by column name). Valid values for mongo: collection (partitioned by collection name); collectionAndObjectId (partitioned by collection + primary key). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @var string Database name matching rule, please fill in the regular expression.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbPattern;

    /**
     * @var string Table name matching rule. If DatabaseType is mongodb, it matches the collection name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TablePattern;

    /**
     * @var array Column name. This field is required if RuleType is cols. The subscription task will use the value of this column to calculate the partition. Mongo does not partition by column, so there is no need to pass this field.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @param string $RuleType Rule type. Valid values for non-mongo products: table (partitioned by table name); pk (partitioned by table name + primary key); cols (partitioned by column name). Valid values for mongo: collection (partitioned by collection name); collectionAndObjectId (partitioned by collection + primary key). Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbPattern Database name matching rule, please fill in the regular expression.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TablePattern Table name matching rule. If DatabaseType is mongodb, it matches the collection name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Columns Column name. This field is required if RuleType is cols. The subscription task will use the value of this column to calculate the partition. Mongo does not partition by column, so there is no need to pass this field.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("DbPattern",$param) and $param["DbPattern"] !== null) {
            $this->DbPattern = $param["DbPattern"];
        }

        if (array_key_exists("TablePattern",$param) and $param["TablePattern"] !== null) {
            $this->TablePattern = $param["TablePattern"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }
    }
}
