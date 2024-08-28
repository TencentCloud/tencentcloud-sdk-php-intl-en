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
 * List of displayed blocking allowlist information, including the machine information
 *
 * @method string getId() Obtain Allowlist ID
 * @method void setId(string $Id) Set Allowlist ID
 * @method string getRemark() Obtain Allowlist alias
 * @method void setRemark(string $Remark) Set Allowlist alias
 * @method string getSrcIp() Obtain Blocking source IP address
 * @method void setSrcIp(string $SrcIp) Set Blocking source IP address
 * @method string getModifyTime() Obtain Allowlist modification time
 * @method void setModifyTime(string $ModifyTime) Set Allowlist modification time
 * @method string getCreateTime() Obtain Allowlist creation time
 * @method void setCreateTime(string $CreateTime) Set Allowlist creation time
 * @method boolean getIsGlobal() Obtain Whether the allowlist takes effect globally
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether the allowlist takes effect globally
 * @method string getQuuid() Obtain Machine UUID
 * @method void setQuuid(string $Quuid) Set Machine UUID
 * @method string getUuid() Obtain CWPP program UUID
 * @method void setUuid(string $Uuid) Set CWPP program UUID
 * @method string getMachineIp() Obtain Machine IP address
 * @method void setMachineIp(string $MachineIp) Set Machine IP address
 * @method string getMachineName() Obtain Machine name
 * @method void setMachineName(string $MachineName) Set Machine name
 */
class BanWhiteListDetail extends AbstractModel
{
    /**
     * @var string Allowlist ID
     */
    public $Id;

    /**
     * @var string Allowlist alias
     */
    public $Remark;

    /**
     * @var string Blocking source IP address
     */
    public $SrcIp;

    /**
     * @var string Allowlist modification time
     */
    public $ModifyTime;

    /**
     * @var string Allowlist creation time
     */
    public $CreateTime;

    /**
     * @var boolean Whether the allowlist takes effect globally
     */
    public $IsGlobal;

    /**
     * @var string Machine UUID
     */
    public $Quuid;

    /**
     * @var string CWPP program UUID
     */
    public $Uuid;

    /**
     * @var string Machine IP address
     */
    public $MachineIp;

    /**
     * @var string Machine name
     */
    public $MachineName;

    /**
     * @param string $Id Allowlist ID
     * @param string $Remark Allowlist alias
     * @param string $SrcIp Blocking source IP address
     * @param string $ModifyTime Allowlist modification time
     * @param string $CreateTime Allowlist creation time
     * @param boolean $IsGlobal Whether the allowlist takes effect globally
     * @param string $Quuid Machine UUID
     * @param string $Uuid CWPP program UUID
     * @param string $MachineIp Machine IP address
     * @param string $MachineName Machine name
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }
    }
}
