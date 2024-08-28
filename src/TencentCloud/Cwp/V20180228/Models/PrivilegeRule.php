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
 * Local privilege escalation rule
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getUuid() Obtain Client ID
 * @method void setUuid(string $Uuid) Set Client ID
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method integer getSMode() Obtain Whether the mode is S mode
 * @method void setSMode(integer $SMode) Set Whether the mode is S mode
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method integer getIsGlobal() Obtain Whether the rule is global
 * @method void setIsGlobal(integer $IsGlobal) Set Whether the rule is global
 * @method integer getStatus() Obtain Status. 0: valid; 1: invalid.
 * @method void setStatus(integer $Status) Set Status. 0: valid; 1: invalid.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method string getHostip() Obtain Host IP
 * @method void setHostip(string $Hostip) Set Host IP
 */
class PrivilegeRule extends AbstractModel
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
     * @var integer Whether the mode is S mode
     */
    public $SMode;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var integer Whether the rule is global
     */
    public $IsGlobal;

    /**
     * @var integer Status. 0: valid; 1: invalid.
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
     * @param integer $SMode Whether the mode is S mode
     * @param string $Operator Operator
     * @param integer $IsGlobal Whether the rule is global
     * @param integer $Status Status. 0: valid; 1: invalid.
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

        if (array_key_exists("SMode",$param) and $param["SMode"] !== null) {
            $this->SMode = $param["SMode"];
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
