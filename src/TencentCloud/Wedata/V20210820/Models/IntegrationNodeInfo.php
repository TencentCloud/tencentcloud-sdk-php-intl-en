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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Integrated Task Node
 *
 * @method string getId() Obtain Integration Node ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Integration Node ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain Task ID of the Integrated Node
 * @method void setTaskId(string $TaskId) Set Task ID of the Integrated Node
 * @method string getName() Obtain Integration Node Name
 * @method void setName(string $Name) Set Integration Node Name
 * @method string getNodeType() Obtain Integration Node Type, INPUT: Input Node, OUTPUT: Output Node
 * @method void setNodeType(string $NodeType) Set Integration Node Type, INPUT: Input Node, OUTPUT: Output Node
 * @method string getDataSourceType() Obtain Node Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
 * @method void setDataSourceType(string $DataSourceType) Set Node Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
 * @method string getDescription() Obtain Node Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Node Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data source IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getConfig() Obtain Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConfig(array $Config) Set Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtConfig() Obtain Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtConfig(array $ExtConfig) Set Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSchema() Obtain Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchema(array $Schema) Set Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
 * @method IntegrationNodeMapping getNodeMapping() Obtain Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeMapping(IntegrationNodeMapping $NodeMapping) Set Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAppId() Obtain Belonging User AppId, Display Fields Non-passed
 * @method void setAppId(string $AppId) Set Belonging User AppId, Display Fields Non-passed
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getCreatorUin() Obtain Creator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreatorUin(string $CreatorUin) Set Creator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperatorUin() Obtain Operator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorUin(string $OperatorUin) Set Operator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerUin() Obtain owner uin Display Fields Non-passed
 * @method void setOwnerUin(string $OwnerUin) Set owner uin Display Fields Non-passed
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 */
class IntegrationNodeInfo extends AbstractModel
{
    /**
     * @var string Integration Node ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Task ID of the Integrated Node
     */
    public $TaskId;

    /**
     * @var string Integration Node Name
     */
    public $Name;

    /**
     * @var string Integration Node Type, INPUT: Input Node, OUTPUT: Output Node
     */
    public $NodeType;

    /**
     * @var string Node Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
     */
    public $DataSourceType;

    /**
     * @var string Node Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Data source IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var array Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Config;

    /**
     * @var array Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtConfig;

    /**
     * @var array Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Schema;

    /**
     * @var IntegrationNodeMapping Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeMapping;

    /**
     * @var string Belonging User AppId, Display Fields Non-passed
     */
    public $AppId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Creator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreatorUin;

    /**
     * @var string Operator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorUin;

    /**
     * @var string owner uin Display Fields Non-passed
     */
    public $OwnerUin;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Id Integration Node ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId Task ID of the Integrated Node
     * @param string $Name Integration Node Name
     * @param string $NodeType Integration Node Type, INPUT: Input Node, OUTPUT: Output Node
     * @param string $DataSourceType Node Data Source Type: MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
     * @param string $Description Node Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data source IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Config Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtConfig Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Schema Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
     * @param IntegrationNodeMapping $NodeMapping Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AppId Belonging User AppId, Display Fields Non-passed
     * @param string $ProjectId Project ID
     * @param string $CreatorUin Creator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OperatorUin Operator UIN, Display Fields Non-passed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerUin owner uin Display Fields Non-passed
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = [];
            foreach ($param["Schema"] as $key => $value){
                $obj = new IntegrationNodeSchema();
                $obj->deserialize($value);
                array_push($this->Schema, $obj);
            }
        }

        if (array_key_exists("NodeMapping",$param) and $param["NodeMapping"] !== null) {
            $this->NodeMapping = new IntegrationNodeMapping();
            $this->NodeMapping->deserialize($param["NodeMapping"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
