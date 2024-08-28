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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reverse Shell rule
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getUuid() Obtain Client ID
 * @method void setUuid(string $Uuid) Set Client ID
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getDestIp() Obtain Target IP
 * @method void setDestIp(string $DestIp) Set Target IP
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
 * @method string getHostip() Obtain Host IP
 * @method void setHostip(string $Hostip) Set Host IP
 */
class ReverseShellRule extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var string Client ID
     */
    public $Uuid;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Target IP
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
     * @var string Host IP
     */
    public $Hostip;

    /**
     * @param integer $Id Rule ID
     * @param string $Uuid Client ID
     * @param string $ProcessName Process name
     * @param string $DestIp Target IP
     * @param string $DestPort Target port
     * @param string $Operator Operator
     * @param integer $IsGlobal Whether a global rule
     * @param integer $Status Status (0: valid; 1: invalid)
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param string $Hostip Host IP
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }
    }
}
