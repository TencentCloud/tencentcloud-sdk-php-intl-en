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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMigrateJob request structure.
 *
 * @method string getJobName() Obtain Data migration task name
 * @method void setJobName(string $JobName) Set Data migration task name
 * @method MigrateOption getMigrateOption() Obtain Migration task configuration options
 * @method void setMigrateOption(MigrateOption $MigrateOption) Set Migration task configuration options
 * @method string getSrcDatabaseType() Obtain Source instance database type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona, and SQL Server. For more information on the supported types in a specific region, see the migration task creation page in the console.
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source instance database type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona, and SQL Server. For more information on the supported types in a specific region, see the migration task creation page in the console.
 * @method string getSrcAccessType() Obtain Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instance)
 * @method void setSrcAccessType(string $SrcAccessType) Set Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instance)
 * @method SrcInfo getSrcInfo() Obtain Source instance information, which is correlated with the migration task type
 * @method void setSrcInfo(SrcInfo $SrcInfo) Set Source instance information, which is correlated with the migration task type
 * @method string getDstDatabaseType() Obtain Target instance access type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, and Percona, SQL Server, and TDSQL-C for MySQL. For more information on the supported types in a specific region, see the migration task creation page in the console.
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Target instance access type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, and Percona, SQL Server, and TDSQL-C for MySQL. For more information on the supported types in a specific region, see the migration task creation page in the console.
 * @method string getDstAccessType() Obtain Target instance access type, which currently only supports cdb (TencentDB instance)
 * @method void setDstAccessType(string $DstAccessType) Set Target instance access type, which currently only supports cdb (TencentDB instance)
 * @method DstInfo getDstInfo() Obtain Destination instance information
 * @method void setDstInfo(DstInfo $DstInfo) Set Destination instance information
 * @method string getDatabaseInfo() Obtain Information of the source table to be migrated, which is described in JSON string format. It is required if MigrateOption.MigrateObject is 2 (migrating the specified table).
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]
 * @method void setDatabaseInfo(string $DatabaseInfo) Set Information of the source table to be migrated, which is described in JSON string format. It is required if MigrateOption.MigrateObject is 2 (migrating the specified table).
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]
 * @method array getTags() Obtain Tag of the instance to be migrated.
 * @method void setTags(array $Tags) Set Tag of the instance to be migrated.
 * @method string getSrcNodeType() Obtain Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
 * @method void setSrcNodeType(string $SrcNodeType) Set Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
 * @method array getSrcInfoMulti() Obtain Source instance information, which is correlated with the migration task type.
 * @method void setSrcInfoMulti(array $SrcInfoMulti) Set Source instance information, which is correlated with the migration task type.
 */
class CreateMigrateJobRequest extends AbstractModel
{
    /**
     * @var string Data migration task name
     */
    public $JobName;

    /**
     * @var MigrateOption Migration task configuration options
     */
    public $MigrateOption;

    /**
     * @var string Source instance database type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona, and SQL Server. For more information on the supported types in a specific region, see the migration task creation page in the console.
     */
    public $SrcDatabaseType;

    /**
     * @var string Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instance)
     */
    public $SrcAccessType;

    /**
     * @var SrcInfo Source instance information, which is correlated with the migration task type
     */
    public $SrcInfo;

    /**
     * @var string Target instance access type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, and Percona, SQL Server, and TDSQL-C for MySQL. For more information on the supported types in a specific region, see the migration task creation page in the console.
     */
    public $DstDatabaseType;

    /**
     * @var string Target instance access type, which currently only supports cdb (TencentDB instance)
     */
    public $DstAccessType;

    /**
     * @var DstInfo Destination instance information
     */
    public $DstInfo;

    /**
     * @var string Information of the source table to be migrated, which is described in JSON string format. It is required if MigrateOption.MigrateObject is 2 (migrating the specified table).
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]
     */
    public $DatabaseInfo;

    /**
     * @var array Tag of the instance to be migrated.
     */
    public $Tags;

    /**
     * @var string Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
     */
    public $SrcNodeType;

    /**
     * @var array Source instance information, which is correlated with the migration task type.
     */
    public $SrcInfoMulti;

    /**
     * @param string $JobName Data migration task name
     * @param MigrateOption $MigrateOption Migration task configuration options
     * @param string $SrcDatabaseType Source instance database type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, Percona, and SQL Server. For more information on the supported types in a specific region, see the migration task creation page in the console.
     * @param string $SrcAccessType Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance), ccn (CCN instance)
     * @param SrcInfo $SrcInfo Source instance information, which is correlated with the migration task type
     * @param string $DstDatabaseType Target instance access type, which currently supports MySQL, Redis, MongoDB, PostgreSQL, MariaDB, and Percona, SQL Server, and TDSQL-C for MySQL. For more information on the supported types in a specific region, see the migration task creation page in the console.
     * @param string $DstAccessType Target instance access type, which currently only supports cdb (TencentDB instance)
     * @param DstInfo $DstInfo Destination instance information
     * @param string $DatabaseInfo Information of the source table to be migrated, which is described in JSON string format. It is required if MigrateOption.MigrateObject is 2 (migrating the specified table).
For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]
     * @param array $Tags Tag of the instance to be migrated.
     * @param string $SrcNodeType Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
     * @param array $SrcInfoMulti Source instance information, which is correlated with the migration task type.
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SrcNodeType",$param) and $param["SrcNodeType"] !== null) {
            $this->SrcNodeType = $param["SrcNodeType"];
        }

        if (array_key_exists("SrcInfoMulti",$param) and $param["SrcInfoMulti"] !== null) {
            $this->SrcInfoMulti = [];
            foreach ($param["SrcInfoMulti"] as $key => $value){
                $obj = new SrcInfo();
                $obj->deserialize($value);
                array_push($this->SrcInfoMulti, $obj);
            }
        }
    }
}
