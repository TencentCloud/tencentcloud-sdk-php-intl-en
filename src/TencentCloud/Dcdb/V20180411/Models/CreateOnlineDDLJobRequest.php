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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOnlineDDLJob request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getAlter() Obtain Specifies the DDL statement to be executed. Common online DDL refer to this API documentation example section.
 * @method void setAlter(string $Alter) Set Specifies the DDL statement to be executed. Common online DDL refer to this API documentation example section.
 * @method string getDbName() Obtain Specifies the database to be modified.	
 * @method void setDbName(string $DbName) Set Specifies the database to be modified.	
 * @method string getTable() Obtain Specifies the table to be modified.
 * @method void setTable(string $Table) Set Specifies the table to be modified.
 * @method string getUser() Obtain Specifies the account to execute DDL. Ensure the account has ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE permissions. If not specified, the system account will be used by default.
 * @method void setUser(string $User) Set Specifies the account to execute DDL. Ensure the account has ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE permissions. If not specified, the system account will be used by default.
 * @method string getPassword() Obtain Specifies the password for the account.
 * @method void setPassword(string $Password) Set Specifies the password for the account.
 * @method integer getCriticalLoad() Obtain Indicates that DDL will terminate if the number of running threads exceeds this value. Default is 58 if not specified.
 * @method void setCriticalLoad(integer $CriticalLoad) Set Indicates that DDL will terminate if the number of running threads exceeds this value. Default is 58 if not specified.
 * @method integer getCheckAutoInc() Obtain Specifies whether to check auto-increment fields. If set to 1, modification of auto-increment fields is not allowed; if set to 0 or left empty, no check is performed.
 * @method void setCheckAutoInc(integer $CheckAutoInc) Set Specifies whether to check auto-increment fields. If set to 1, modification of auto-increment fields is not allowed; if set to 0 or left empty, no check is performed.
 * @method integer getMaxDelay() Obtain Allowed primary-secondary delay time (in seconds). If set to 0 or left empty, do not check delay.
 * @method void setMaxDelay(integer $MaxDelay) Set Allowed primary-secondary delay time (in seconds). If set to 0 or left empty, do not check delay.
 * @method integer getUsePt() Obtain Indicates whether to use pt-osc tool for DDL.
 * @method void setUsePt(integer $UsePt) Set Indicates whether to use pt-osc tool for DDL.
 * @method string getStartTime() Obtain Start Execution Time
 * @method void setStartTime(string $StartTime) Set Start Execution Time
 */
class CreateOnlineDDLJobRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the DDL statement to be executed. Common online DDL refer to this API documentation example section.
     */
    public $Alter;

    /**
     * @var string Specifies the database to be modified.	
     */
    public $DbName;

    /**
     * @var string Specifies the table to be modified.
     */
    public $Table;

    /**
     * @var string Specifies the account to execute DDL. Ensure the account has ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE permissions. If not specified, the system account will be used by default.
     */
    public $User;

    /**
     * @var string Specifies the password for the account.
     */
    public $Password;

    /**
     * @var integer Indicates that DDL will terminate if the number of running threads exceeds this value. Default is 58 if not specified.
     */
    public $CriticalLoad;

    /**
     * @var integer Specifies whether to check auto-increment fields. If set to 1, modification of auto-increment fields is not allowed; if set to 0 or left empty, no check is performed.
     */
    public $CheckAutoInc;

    /**
     * @var integer Allowed primary-secondary delay time (in seconds). If set to 0 or left empty, do not check delay.
     */
    public $MaxDelay;

    /**
     * @var integer Indicates whether to use pt-osc tool for DDL.
     */
    public $UsePt;

    /**
     * @var string Start Execution Time
     */
    public $StartTime;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Alter Specifies the DDL statement to be executed. Common online DDL refer to this API documentation example section.
     * @param string $DbName Specifies the database to be modified.	
     * @param string $Table Specifies the table to be modified.
     * @param string $User Specifies the account to execute DDL. Ensure the account has ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE permissions. If not specified, the system account will be used by default.
     * @param string $Password Specifies the password for the account.
     * @param integer $CriticalLoad Indicates that DDL will terminate if the number of running threads exceeds this value. Default is 58 if not specified.
     * @param integer $CheckAutoInc Specifies whether to check auto-increment fields. If set to 1, modification of auto-increment fields is not allowed; if set to 0 or left empty, no check is performed.
     * @param integer $MaxDelay Allowed primary-secondary delay time (in seconds). If set to 0 or left empty, do not check delay.
     * @param integer $UsePt Indicates whether to use pt-osc tool for DDL.
     * @param string $StartTime Start Execution Time
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

        if (array_key_exists("Alter",$param) and $param["Alter"] !== null) {
            $this->Alter = $param["Alter"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CriticalLoad",$param) and $param["CriticalLoad"] !== null) {
            $this->CriticalLoad = $param["CriticalLoad"];
        }

        if (array_key_exists("CheckAutoInc",$param) and $param["CheckAutoInc"] !== null) {
            $this->CheckAutoInc = $param["CheckAutoInc"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("UsePt",$param) and $param["UsePt"] !== null) {
            $this->UsePt = $param["UsePt"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
