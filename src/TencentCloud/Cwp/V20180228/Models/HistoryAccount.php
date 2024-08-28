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
 * Account change history data
 *
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 * @method string getUuid() Obtain CWPP client UUID
 * @method void setUuid(string $Uuid) Set CWPP client UUID
 * @method string getMachineIp() Obtain Private IP address of the host
 * @method void setMachineIp(string $MachineIp) Set Private IP address of the host
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 * @method string getModifyType() Obtain Account change type
<li>CREATE: account creation</li>
<li>MODIFY: account modification</li>
<li>DELETE: account deletion</li>
 * @method void setModifyType(string $ModifyType) Set Account change type
<li>CREATE: account creation</li>
<li>MODIFY: account modification</li>
<li>DELETE: account deletion</li>
 * @method string getModifyTime() Obtain Change time
 * @method void setModifyTime(string $ModifyTime) Set Change time
 */
class HistoryAccount extends AbstractModel
{
    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @var string CWPP client UUID
     */
    public $Uuid;

    /**
     * @var string Private IP address of the host
     */
    public $MachineIp;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @var string Account change type
<li>CREATE: account creation</li>
<li>MODIFY: account modification</li>
<li>DELETE: account deletion</li>
     */
    public $ModifyType;

    /**
     * @var string Change time
     */
    public $ModifyTime;

    /**
     * @param integer $Id Unique ID
     * @param string $Uuid CWPP client UUID
     * @param string $MachineIp Private IP address of the host
     * @param string $MachineName Host name
     * @param string $Username Username
     * @param string $ModifyType Account change type
<li>CREATE: account creation</li>
<li>MODIFY: account modification</li>
<li>DELETE: account deletion</li>
     * @param string $ModifyTime Change time
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

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
