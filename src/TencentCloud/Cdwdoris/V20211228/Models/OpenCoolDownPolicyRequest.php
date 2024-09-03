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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenCoolDownPolicy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getDatabaseName() Obtain DB name
 * @method void setDatabaseName(string $DatabaseName) Set DB name
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getOperationType() Obtain Operation type
 * @method void setOperationType(string $OperationType) Set Operation type
 * @method string getBatchOpenCoolDownTables() Obtain Separate with commas. The DB name is required, for example, db1.tb1,db1.tb2,db2.tb1.
 * @method void setBatchOpenCoolDownTables(string $BatchOpenCoolDownTables) Set Separate with commas. The DB name is required, for example, db1.tb1,db1.tb2,db2.tb1.
 * @method string getPolicyName() Obtain Policy name required for binding
 * @method void setPolicyName(string $PolicyName) Set Policy name required for binding
 * @method string getBatchOpenCoolDownPartitions() Obtain Separate with commas, for example, p1,p2,p3.
 * @method void setBatchOpenCoolDownPartitions(string $BatchOpenCoolDownPartitions) Set Separate with commas, for example, p1,p2,p3.
 */
class OpenCoolDownPolicyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string DB name
     */
    public $DatabaseName;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Operation type
     */
    public $OperationType;

    /**
     * @var string Separate with commas. The DB name is required, for example, db1.tb1,db1.tb2,db2.tb1.
     */
    public $BatchOpenCoolDownTables;

    /**
     * @var string Policy name required for binding
     */
    public $PolicyName;

    /**
     * @var string Separate with commas, for example, p1,p2,p3.
     */
    public $BatchOpenCoolDownPartitions;

    /**
     * @param string $InstanceId Instance ID
     * @param string $DatabaseName DB name
     * @param string $TableName Table name
     * @param string $OperationType Operation type
     * @param string $BatchOpenCoolDownTables Separate with commas. The DB name is required, for example, db1.tb1,db1.tb2,db2.tb1.
     * @param string $PolicyName Policy name required for binding
     * @param string $BatchOpenCoolDownPartitions Separate with commas, for example, p1,p2,p3.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("BatchOpenCoolDownTables",$param) and $param["BatchOpenCoolDownTables"] !== null) {
            $this->BatchOpenCoolDownTables = $param["BatchOpenCoolDownTables"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("BatchOpenCoolDownPartitions",$param) and $param["BatchOpenCoolDownPartitions"] !== null) {
            $this->BatchOpenCoolDownPartitions = $param["BatchOpenCoolDownPartitions"];
        }
    }
}
