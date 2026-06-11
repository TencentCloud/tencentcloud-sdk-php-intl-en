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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reverse shell rule for the aggregated version.
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method array getUuidHostips() Obtain Client ID
 * @method void setUuidHostips(array $UuidHostips) Set Client ID
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getDestIp() Obtain Target IP address
 * @method void setDestIp(string $DestIp) Set Target IP address
 * @method string getDestPort() Obtain Target port
 * @method void setDestPort(string $DestPort) Set Target port
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method integer getIsGlobal() Obtain Whether a global rule
 * @method void setIsGlobal(integer $IsGlobal) Set Whether a global rule
 * @method integer getStatus() Obtain Status (0: valid; 1: invalid)
 * @method void setStatus(integer $Status) Set Status (0: valid; 1: invalid)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method integer getWhiteType() Obtain Allowlisting method. 0: regular allowlisting, 1: regular expression allowlisting.
 * @method void setWhiteType(integer $WhiteType) Set Allowlisting method. 0: regular allowlisting, 1: regular expression allowlisting.
 * @method string getRuleRegexp() Obtain Regular expression
 * @method void setRuleRegexp(string $RuleRegexp) Set Regular expression
 * @method integer getHandleHistory() Obtain Whether to process historical events. 0: no, 1: yes.
 * @method void setHandleHistory(integer $HandleHistory) Set Whether to process historical events. 0: no, 1: yes.
 * @method string getGroupID() Obtain Batch ID.
 * @method void setGroupID(string $GroupID) Set Batch ID.
 * @method string getMachinesNums() Obtain Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
 * @method void setMachinesNums(string $MachinesNums) Set Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
 */
class ReverseShellRuleAggregation extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var array Client ID
     */
    public $UuidHostips;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Target IP address
     */
    public $DestIp;

    /**
     * @var string Target port
     */
    public $DestPort;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var integer Whether a global rule
     */
    public $IsGlobal;

    /**
     * @var integer Status (0: valid; 1: invalid)
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var integer Allowlisting method. 0: regular allowlisting, 1: regular expression allowlisting.
     */
    public $WhiteType;

    /**
     * @var string Regular expression
     */
    public $RuleRegexp;

    /**
     * @var integer Whether to process historical events. 0: no, 1: yes.
     */
    public $HandleHistory;

    /**
     * @var string Batch ID.
     */
    public $GroupID;

    /**
     * @var string Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
     */
    public $MachinesNums;

    /**
     * @param integer $Id Rule ID
     * @param array $UuidHostips Client ID
     * @param string $ProcessName Process name
     * @param string $DestIp Target IP address
     * @param string $DestPort Target port
     * @param string $Operator Operator
     * @param integer $IsGlobal Whether a global rule
     * @param integer $Status Status (0: valid; 1: invalid)
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param integer $WhiteType Allowlisting method. 0: regular allowlisting, 1: regular expression allowlisting.
     * @param string $RuleRegexp Regular expression
     * @param integer $HandleHistory Whether to process historical events. 0: no, 1: yes.
     * @param string $GroupID Batch ID.
     * @param string $MachinesNums Number of servers covered by a rule. When IsGlobal is set to 1, all servers are displayed.
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

        if (array_key_exists("UuidHostips",$param) and $param["UuidHostips"] !== null) {
            $this->UuidHostips = [];
            foreach ($param["UuidHostips"] as $key => $value){
                $obj = new UuidHostip();
                $obj->deserialize($value);
                array_push($this->UuidHostips, $obj);
            }
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("DestIp",$param) and $param["DestIp"] !== null) {
            $this->DestIp = $param["DestIp"];
        }

        if (array_key_exists("DestPort",$param) and $param["DestPort"] !== null) {
            $this->DestPort = $param["DestPort"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("WhiteType",$param) and $param["WhiteType"] !== null) {
            $this->WhiteType = $param["WhiteType"];
        }

        if (array_key_exists("RuleRegexp",$param) and $param["RuleRegexp"] !== null) {
            $this->RuleRegexp = $param["RuleRegexp"];
        }

        if (array_key_exists("HandleHistory",$param) and $param["HandleHistory"] !== null) {
            $this->HandleHistory = $param["HandleHistory"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("MachinesNums",$param) and $param["MachinesNums"] !== null) {
            $this->MachinesNums = $param["MachinesNums"];
        }
    }
}
