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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StarRocks query information.
 *
 * @method string getClientIP() Obtain Submission IP address.
 * @method void setClientIP(string $ClientIP) Set Submission IP address.
 * @method integer getCPUCost() Obtain Total CPU time (ns).
 * @method void setCPUCost(integer $CPUCost) Set Total CPU time (ns).
 * @method string getDefaultDB() Obtain Default DB.
 * @method void setDefaultDB(string $DefaultDB) Set Default DB.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 * @method string getExecutionIP() Obtain Execution IP address.
 * @method void setExecutionIP(string $ExecutionIP) Set Execution IP address.
 * @method string getQueryID() Obtain Query ID.
 * @method void setQueryID(string $QueryID) Set Query ID.
 * @method string getQueryType() Obtain Query type.
 * @method void setQueryType(string $QueryType) Set Query type.
 * @method integer getMemCost() Obtain Total memory consumed (bytes).
 * @method void setMemCost(integer $MemCost) Set Total memory consumed (bytes).
 * @method integer getPlanCpuCosts() Obtain CPU usage (ns) at the plan stage.
 * @method void setPlanCpuCosts(integer $PlanCpuCosts) Set CPU usage (ns) at the plan stage.
 * @method integer getPlanMemCosts() Obtain Memory usage (bytes) at the plan stage.
 * @method void setPlanMemCosts(integer $PlanMemCosts) Set Memory usage (bytes) at the plan stage.
 * @method integer getQueryTime() Obtain Execution duration.
 * @method void setQueryTime(integer $QueryTime) Set Execution duration.
 * @method string getResourceGroup() Obtain Resource group.
 * @method void setResourceGroup(string $ResourceGroup) Set Resource group.
 * @method integer getReturnRows() Obtain Number of rows obtained.
 * @method void setReturnRows(integer $ReturnRows) Set Number of rows obtained.
 * @method integer getScanBytes() Obtain Scanned data volume (bytes).
 * @method void setScanBytes(integer $ScanBytes) Set Scanned data volume (bytes).
 * @method integer getScanRows() Obtain Number of scanned rows.
 * @method void setScanRows(integer $ScanRows) Set Number of scanned rows.
 * @method integer getBeginTime() Obtain Start time.
 * @method void setBeginTime(integer $BeginTime) Set Start time.
 * @method string getExecutionState() Obtain Execution status.
 * @method void setExecutionState(string $ExecutionState) Set Execution status.
 * @method string getExecutionStatement() Obtain Execution statement.
 * @method void setExecutionStatement(string $ExecutionStatement) Set Execution statement.
 * @method string getUser() Obtain User.
 * @method void setUser(string $User) Set User.
 */
class StarRocksQueryInfo extends AbstractModel
{
    /**
     * @var string Submission IP address.
     */
    public $ClientIP;

    /**
     * @var integer Total CPU time (ns).
     */
    public $CPUCost;

    /**
     * @var string Default DB.
     */
    public $DefaultDB;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @var string Execution IP address.
     */
    public $ExecutionIP;

    /**
     * @var string Query ID.
     */
    public $QueryID;

    /**
     * @var string Query type.
     */
    public $QueryType;

    /**
     * @var integer Total memory consumed (bytes).
     */
    public $MemCost;

    /**
     * @var integer CPU usage (ns) at the plan stage.
     */
    public $PlanCpuCosts;

    /**
     * @var integer Memory usage (bytes) at the plan stage.
     */
    public $PlanMemCosts;

    /**
     * @var integer Execution duration.
     */
    public $QueryTime;

    /**
     * @var string Resource group.
     */
    public $ResourceGroup;

    /**
     * @var integer Number of rows obtained.
     */
    public $ReturnRows;

    /**
     * @var integer Scanned data volume (bytes).
     */
    public $ScanBytes;

    /**
     * @var integer Number of scanned rows.
     */
    public $ScanRows;

    /**
     * @var integer Start time.
     */
    public $BeginTime;

    /**
     * @var string Execution status.
     */
    public $ExecutionState;

    /**
     * @var string Execution statement.
     */
    public $ExecutionStatement;

    /**
     * @var string User.
     */
    public $User;

    /**
     * @param string $ClientIP Submission IP address.
     * @param integer $CPUCost Total CPU time (ns).
     * @param string $DefaultDB Default DB.
     * @param integer $EndTime End time.
     * @param string $ExecutionIP Execution IP address.
     * @param string $QueryID Query ID.
     * @param string $QueryType Query type.
     * @param integer $MemCost Total memory consumed (bytes).
     * @param integer $PlanCpuCosts CPU usage (ns) at the plan stage.
     * @param integer $PlanMemCosts Memory usage (bytes) at the plan stage.
     * @param integer $QueryTime Execution duration.
     * @param string $ResourceGroup Resource group.
     * @param integer $ReturnRows Number of rows obtained.
     * @param integer $ScanBytes Scanned data volume (bytes).
     * @param integer $ScanRows Number of scanned rows.
     * @param integer $BeginTime Start time.
     * @param string $ExecutionState Execution status.
     * @param string $ExecutionStatement Execution statement.
     * @param string $User User.
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
        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("CPUCost",$param) and $param["CPUCost"] !== null) {
            $this->CPUCost = $param["CPUCost"];
        }

        if (array_key_exists("DefaultDB",$param) and $param["DefaultDB"] !== null) {
            $this->DefaultDB = $param["DefaultDB"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionIP",$param) and $param["ExecutionIP"] !== null) {
            $this->ExecutionIP = $param["ExecutionIP"];
        }

        if (array_key_exists("QueryID",$param) and $param["QueryID"] !== null) {
            $this->QueryID = $param["QueryID"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("MemCost",$param) and $param["MemCost"] !== null) {
            $this->MemCost = $param["MemCost"];
        }

        if (array_key_exists("PlanCpuCosts",$param) and $param["PlanCpuCosts"] !== null) {
            $this->PlanCpuCosts = $param["PlanCpuCosts"];
        }

        if (array_key_exists("PlanMemCosts",$param) and $param["PlanMemCosts"] !== null) {
            $this->PlanMemCosts = $param["PlanMemCosts"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ReturnRows",$param) and $param["ReturnRows"] !== null) {
            $this->ReturnRows = $param["ReturnRows"];
        }

        if (array_key_exists("ScanBytes",$param) and $param["ScanBytes"] !== null) {
            $this->ScanBytes = $param["ScanBytes"];
        }

        if (array_key_exists("ScanRows",$param) and $param["ScanRows"] !== null) {
            $this->ScanRows = $param["ScanRows"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecutionStatement",$param) and $param["ExecutionStatement"] !== null) {
            $this->ExecutionStatement = $param["ExecutionStatement"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
