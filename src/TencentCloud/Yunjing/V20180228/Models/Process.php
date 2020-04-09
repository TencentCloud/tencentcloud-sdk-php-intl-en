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
 * Process information.
 *
 * @method integer getId() Obtain Unique ID.
 * @method void setId(integer $Id) Set Unique ID.
 * @method string getUuid() Obtain CWP agent `UUID`.
 * @method void setUuid(string $Uuid) Set CWP agent `UUID`.
 * @method string getMachineIp() Obtain Private IP of server.
 * @method void setMachineIp(string $MachineIp) Set Private IP of server.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method integer getPid() Obtain Process `Pid`.
 * @method void setPid(integer $Pid) Set Process `Pid`.
 * @method integer getPpid() Obtain Process `Ppid`.
 * @method void setPpid(integer $Ppid) Set Process `Ppid`.
 * @method string getProcessName() Obtain Process name.
 * @method void setProcessName(string $ProcessName) Set Process name.
 * @method string getUsername() Obtain Process username.
 * @method void setUsername(string $Username) Set Process username.
 * @method string getPlatform() Obtain OS.
<li>WIN32: Windows 32-bit</li>
<li>WIN64: Windows 64-bit</li>
<li>LINUX32: Linux 32-bit</li>
<li>LINUX64: Linux 64-bit</li>
 * @method void setPlatform(string $Platform) Set OS.
<li>WIN32: Windows 32-bit</li>
<li>WIN64: Windows 64-bit</li>
<li>LINUX32: Linux 32-bit</li>
<li>LINUX64: Linux 64-bit</li>
 * @method string getFullPath() Obtain Process path.
 * @method void setFullPath(string $FullPath) Set Process path.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 */
class Process extends AbstractModel
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
     * @var string Private IP of server.
     */
    public $MachineIp;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var integer Process `Pid`.
     */
    public $Pid;

    /**
     * @var integer Process `Ppid`.
     */
    public $Ppid;

    /**
     * @var string Process name.
     */
    public $ProcessName;

    /**
     * @var string Process username.
     */
    public $Username;

    /**
     * @var string OS.
<li>WIN32: Windows 32-bit</li>
<li>WIN64: Windows 64-bit</li>
<li>LINUX32: Linux 32-bit</li>
<li>LINUX64: Linux 64-bit</li>
     */
    public $Platform;

    /**
     * @var string Process path.
     */
    public $FullPath;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @param integer $Id Unique ID.
     * @param string $Uuid CWP agent `UUID`.
     * @param string $MachineIp Private IP of server.
     * @param string $MachineName Server name.
     * @param integer $Pid Process `Pid`.
     * @param integer $Ppid Process `Ppid`.
     * @param string $ProcessName Process name.
     * @param string $Username Process username.
     * @param string $Platform OS.
<li>WIN32: Windows 32-bit</li>
<li>WIN64: Windows 64-bit</li>
<li>LINUX32: Linux 32-bit</li>
<li>LINUX64: Linux 64-bit</li>
     * @param string $FullPath Process path.
     * @param string $CreateTime Creation time.
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

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Ppid",$param) and $param["Ppid"] !== null) {
            $this->Ppid = $param["Ppid"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
