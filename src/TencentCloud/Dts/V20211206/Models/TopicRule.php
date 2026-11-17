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
 * Description of single and custom topics. During shipping to a single topic, the last item in this array will be treated as the default partition strategy. All unmatched data will be shipped according to this strategy. The default strategy only supports three options: shipping to partition 0, by table name, or by table name+primary key.
 *
 * @method string getTopicName() Obtain Topic name. For single-topic scenarios, all TopicNames should be the same.
 * @method void setTopicName(string $TopicName) Set Topic name. For single-topic scenarios, all TopicNames should be the same.
 * @method string getPartitionType() Obtain Topic partition policy. When a topic is customized, the valid value is Random (random shipping); when centralizing shipping to a single topic is adopted, the valid values are AllInPartitionZero (ship all to partition 0), PartitionByTable (partition by table name), PartitionByTableAndKey (partition by table name and primary key), and PartitionByCols (partition by column).
 * @method void setPartitionType(string $PartitionType) Set Topic partition policy. When a topic is customized, the valid value is Random (random shipping); when centralizing shipping to a single topic is adopted, the valid values are AllInPartitionZero (ship all to partition 0), PartitionByTable (partition by table name), PartitionByTableAndKey (partition by table name and primary key), and PartitionByCols (partition by column).
 * @method string getDbMatchMode() Obtain Database name matching rule. For example: Regular (regular expression matching) and Default (remaining databases that do not meet any rule). The last item in the array should be Default.
 * @method void setDbMatchMode(string $DbMatchMode) Set Database name matching rule. For example: Regular (regular expression matching) and Default (remaining databases that do not meet any rule). The last item in the array should be Default.
 * @method string getDbName() Obtain Database name. It is valid when DbMatchMode=Regular.
 * @method void setDbName(string $DbName) Set Database name. It is valid when DbMatchMode=Regular.
 * @method string getTableMatchMode() Obtain Table name matching rule. For example: Regular (regular expression matching) and Default (remaining tables that do not meet any rule). The last item in the array should be Default.
 * @method void setTableMatchMode(string $TableMatchMode) Set Table name matching rule. For example: Regular (regular expression matching) and Default (remaining tables that do not meet any rule). The last item in the array should be Default.
 * @method string getTableName() Obtain Table name. It is valid when TableMatchMode is Regular.
 * @method void setTableName(string $TableName) Set Table name. It is valid when TableMatchMode is Regular.
 * @method array getColumns() Obtain When partitioning by column, you need to select and configure column names. Multi-column selection is supported.
 * @method void setColumns(array $Columns) Set When partitioning by column, you need to select and configure column names. Multi-column selection is supported.
 */
class TopicRule extends AbstractModel
{
    /**
     * @var string Topic name. For single-topic scenarios, all TopicNames should be the same.
     */
    public $TopicName;

    /**
     * @var string Topic partition policy. When a topic is customized, the valid value is Random (random shipping); when centralizing shipping to a single topic is adopted, the valid values are AllInPartitionZero (ship all to partition 0), PartitionByTable (partition by table name), PartitionByTableAndKey (partition by table name and primary key), and PartitionByCols (partition by column).
     */
    public $PartitionType;

    /**
     * @var string Database name matching rule. For example: Regular (regular expression matching) and Default (remaining databases that do not meet any rule). The last item in the array should be Default.
     */
    public $DbMatchMode;

    /**
     * @var string Database name. It is valid when DbMatchMode=Regular.
     */
    public $DbName;

    /**
     * @var string Table name matching rule. For example: Regular (regular expression matching) and Default (remaining tables that do not meet any rule). The last item in the array should be Default.
     */
    public $TableMatchMode;

    /**
     * @var string Table name. It is valid when TableMatchMode is Regular.
     */
    public $TableName;

    /**
     * @var array When partitioning by column, you need to select and configure column names. Multi-column selection is supported.
     */
    public $Columns;

    /**
     * @param string $TopicName Topic name. For single-topic scenarios, all TopicNames should be the same.
     * @param string $PartitionType Topic partition policy. When a topic is customized, the valid value is Random (random shipping); when centralizing shipping to a single topic is adopted, the valid values are AllInPartitionZero (ship all to partition 0), PartitionByTable (partition by table name), PartitionByTableAndKey (partition by table name and primary key), and PartitionByCols (partition by column).
     * @param string $DbMatchMode Database name matching rule. For example: Regular (regular expression matching) and Default (remaining databases that do not meet any rule). The last item in the array should be Default.
     * @param string $DbName Database name. It is valid when DbMatchMode=Regular.
     * @param string $TableMatchMode Table name matching rule. For example: Regular (regular expression matching) and Default (remaining tables that do not meet any rule). The last item in the array should be Default.
     * @param string $TableName Table name. It is valid when TableMatchMode is Regular.
     * @param array $Columns When partitioning by column, you need to select and configure column names. Multi-column selection is supported.
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

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("DbMatchMode",$param) and $param["DbMatchMode"] !== null) {
            $this->DbMatchMode = $param["DbMatchMode"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableMatchMode",$param) and $param["TableMatchMode"] !== null) {
            $this->TableMatchMode = $param["TableMatchMode"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }
    }
}
