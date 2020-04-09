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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port list
 *
 * @method integer getId() Obtain Unique ID.
 * @method void setId(integer $Id) Set Unique ID.
 * @method string getUuid() Obtain CWP agent `UUID`.
 * @method void setUuid(string $Uuid) Set CWP agent `UUID`.
 * @method integer getPort() Obtain Open port number.
 * @method void setPort(integer $Port) Set Open port number.
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getProcessName() Obtain Process name corresponding to port.
 * @method void setProcessName(string $ProcessName) Set Process name corresponding to port.
 * @method integer getPid() Obtain Process `Pid` corresponding to port.
 * @method void setPid(integer $Pid) Set Process `Pid` corresponding to port.
 * @method string getCreateTime() Obtain Record creation time.
 * @method void setCreateTime(string $CreateTime) Set Record creation time.
 * @method string getModifyTime() Obtain Record update time.
 * @method void setModifyTime(string $ModifyTime) Set Record update time.
 */
class OpenPort extends AbstractModel
{
    /**
     * @var integer Unique ID.
     */
    public $Id;

    /**
     * @var string CWP agent `UUID`.
     */
    public $Uuid;

    /**
     * @var integer Open port number.
     */
    public $Port;

    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string Process name corresponding to port.
     */
    public $ProcessName;

    /**
     * @var integer Process `Pid` corresponding to port.
     */
    public $Pid;

    /**
     * @var string Record creation time.
     */
    public $CreateTime;

    /**
     * @var string Record update time.
     */
    public $ModifyTime;

    /**
     * @param integer $Id Unique ID.
     * @param string $Uuid CWP agent `UUID`.
     * @param integer $Port Open port number.
     * @param string $MachineIp Server IP.
     * @param string $MachineName Server name.
     * @param string $ProcessName Process name corresponding to port.
     * @param integer $Pid Process `Pid` corresponding to port.
     * @param string $CreateTime Record creation time.
     * @param string $ModifyTime Record update time.
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
