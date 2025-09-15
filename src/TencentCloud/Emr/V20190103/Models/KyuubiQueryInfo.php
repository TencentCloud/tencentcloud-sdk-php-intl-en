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
 * Kyuubi query information.
 *
 * @method string getClientIP() Obtain Submitter IP address.
 * @method void setClientIP(string $ClientIP) Set Submitter IP address.
 * @method integer getDuration() Obtain Execution duration.
 * @method void setDuration(integer $Duration) Set Execution duration.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 * @method string getEngineID() Obtain Engine Id
 * @method void setEngineID(string $EngineID) Set Engine Id
 * @method string getEngineType() Obtain Computing engine.
 * @method void setEngineType(string $EngineType) Set Computing engine.
 * @method string getId() Obtain ID
 * @method void setId(string $Id) Set ID
 * @method string getSessionID() Obtain Session Id
 * @method void setSessionID(string $SessionID) Set Session Id
 * @method integer getBeginTime() Obtain Start time.
 * @method void setBeginTime(integer $BeginTime) Set Start time.
 * @method string getExecutionState() Obtain Execution status.
 * @method void setExecutionState(string $ExecutionState) Set Execution status.
 * @method string getExecutionStatement() Obtain Execution statement.
 * @method void setExecutionStatement(string $ExecutionStatement) Set Execution statement.
 * @method string getStatementID() Obtain Statement Id
 * @method void setStatementID(string $StatementID) Set Statement Id
 * @method string getUser() Obtain User who submits requests.
 * @method void setUser(string $User) Set User who submits requests.
 */
class KyuubiQueryInfo extends AbstractModel
{
    /**
     * @var string Submitter IP address.
     */
    public $ClientIP;

    /**
     * @var integer Execution duration.
     */
    public $Duration;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @var string Engine Id
     */
    public $EngineID;

    /**
     * @var string Computing engine.
     */
    public $EngineType;

    /**
     * @var string ID
     */
    public $Id;

    /**
     * @var string Session Id
     */
    public $SessionID;

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
     * @var string Statement Id
     */
    public $StatementID;

    /**
     * @var string User who submits requests.
     */
    public $User;

    /**
     * @param string $ClientIP Submitter IP address.
     * @param integer $Duration Execution duration.
     * @param integer $EndTime End time.
     * @param string $EngineID Engine Id
     * @param string $EngineType Computing engine.
     * @param string $Id ID
     * @param string $SessionID Session Id
     * @param integer $BeginTime Start time.
     * @param string $ExecutionState Execution status.
     * @param string $ExecutionStatement Execution statement.
     * @param string $StatementID Statement Id
     * @param string $User User who submits requests.
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EngineID",$param) and $param["EngineID"] !== null) {
            $this->EngineID = $param["EngineID"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
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

        if (array_key_exists("StatementID",$param) and $param["StatementID"] !== null) {
            $this->StatementID = $param["StatementID"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
