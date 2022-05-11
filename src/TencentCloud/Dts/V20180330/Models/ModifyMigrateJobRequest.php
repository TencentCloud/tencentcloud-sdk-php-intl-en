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
 * ModifyMigrateJob request structure.
 *
 * @method string getJobId() Obtain ID of the data migration task to be modified
 * @method void setJobId(string $JobId) Set ID of the data migration task to be modified
 * @method string getJobName() Obtain Data migration task name
 * @method void setJobName(string $JobName) Set Data migration task name
 * @method MigrateOption getMigrateOption() Obtain Migration task configuration options
 * @method void setMigrateOption(MigrateOption $MigrateOption) Set Migration task configuration options
 * @method string getSrcAccessType() Obtain Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance)
 * @method void setSrcAccessType(string $SrcAccessType) Set Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance)
 * @method SrcInfo getSrcInfo() Obtain Source instance information, which is correlated with the migration task type
 * @method void setSrcInfo(SrcInfo $SrcInfo) Set Source instance information, which is correlated with the migration task type
 * @method string getDstAccessType() Obtain Target instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance). Currently, only `cdb` is supported
 * @method void setDstAccessType(string $DstAccessType) Set Target instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance). Currently, only `cdb` is supported
 * @method DstInfo getDstInfo() Obtain Target instance information. The region where the target instance is located cannot be modified.
 * @method void setDstInfo(DstInfo $DstInfo) Set Target instance information. The region where the target instance is located cannot be modified.
 * @method string getDatabaseInfo() Obtain When migrating the specified table, you need to set the information of the source database table to be migrated, which should be described in JSON string format. Below are examples.

For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]

This field does not need to be set when the entire instance is to be migrated
 * @method void setDatabaseInfo(string $DatabaseInfo) Set When migrating the specified table, you need to set the information of the source database table to be migrated, which should be described in JSON string format. Below are examples.

For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]

This field does not need to be set when the entire instance is to be migrated
 * @method string getSrcNodeType() Obtain Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
 * @method void setSrcNodeType(string $SrcNodeType) Set Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
 * @method array getSrcInfoMulti() Obtain Source instance information, which is correlated with the migration task type.
 * @method void setSrcInfoMulti(array $SrcInfoMulti) Set Source instance information, which is correlated with the migration task type.
 */
class ModifyMigrateJobRequest extends AbstractModel
{
    /**
     * @var string ID of the data migration task to be modified
     */
    public $JobId;

    /**
     * @var string Data migration task name
     */
    public $JobName;

    /**
     * @var MigrateOption Migration task configuration options
     */
    public $MigrateOption;

    /**
     * @var string Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance)
     */
    public $SrcAccessType;

    /**
     * @var SrcInfo Source instance information, which is correlated with the migration task type
     */
    public $SrcInfo;

    /**
     * @var string Target instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance). Currently, only `cdb` is supported
     */
    public $DstAccessType;

    /**
     * @var DstInfo Target instance information. The region where the target instance is located cannot be modified.
     */
    public $DstInfo;

    /**
     * @var string When migrating the specified table, you need to set the information of the source database table to be migrated, which should be described in JSON string format. Below are examples.

For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]

This field does not need to be set when the entire instance is to be migrated
     */
    public $DatabaseInfo;

    /**
     * @var string Source instance type. `simple`: Primary/Secondary node; `cluster`: Cluster node. If this field is left empty, the value defaults to primary/secondary node.
     */
    public $SrcNodeType;

    /**
     * @var array Source instance information, which is correlated with the migration task type.
     */
    public $SrcInfoMulti;

    /**
     * @param string $JobId ID of the data migration task to be modified
     * @param string $JobName Data migration task name
     * @param MigrateOption $MigrateOption Migration task configuration options
     * @param string $SrcAccessType Source instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance)
     * @param SrcInfo $SrcInfo Source instance information, which is correlated with the migration task type
     * @param string $DstAccessType Target instance access type. Valid values: extranet (public network), cvm (CVM-based self-created instance), dcg (Direct Connect-enabled instance), vpncloud (Tencent Cloud VPN-enabled instance), cdb (TencentDB instance). Currently, only `cdb` is supported
     * @param DstInfo $DstInfo Target instance information. The region where the target instance is located cannot be modified.
     * @param string $DatabaseInfo When migrating the specified table, you need to set the information of the source database table to be migrated, which should be described in JSON string format. Below are examples.

For databases with a database-table structure:
[{"Database":"db1","Table":["table1","table2"]},{"Database":"db2"}]
For databases with a database-schema-table structure:
[{"Database":"db1","Schema":"s1","Table":["table1","table2"]},{"Database":"db1","Schema":"s2","Table":["table1","table2"]},{"Database":"db2","Schema":"s1","Table":["table1","table2"]},{"Database":"db3"},{"Database":"db4","Schema":"s1"}]

This field does not need to be set when the entire instance is to be migrated
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
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
