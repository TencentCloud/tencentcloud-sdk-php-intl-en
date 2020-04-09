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
 * Account list information.
 *
 * @method integer getId() Obtain Unique ID.
 * @method void setId(integer $Id) Set Unique ID.
 * @method string getUuid() Obtain CWP agent `Uuid`
 * @method void setUuid(string $Uuid) Set CWP agent `Uuid`
 * @method string getMachineIp() Obtain Private IP of server.
 * @method void setMachineIp(string $MachineIp) Set Private IP of server.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getUsername() Obtain Account name.
 * @method void setUsername(string $Username) Set Account name.
 * @method string getGroups() Obtain Account group.
 * @method void setGroups(string $Groups) Set Account group.
 * @method string getPrivilege() Obtain Account type.
<li>ORDINARY: ordinary account</li>
<li>SUPPER: super admin account</li>
 * @method void setPrivilege(string $Privilege) Set Account type.
<li>ORDINARY: ordinary account</li>
<li>SUPPER: super admin account</li>
 * @method string getAccountCreateTime() Obtain Account creation time.
 * @method void setAccountCreateTime(string $AccountCreateTime) Set Account creation time.
 * @method string getLastLoginTime() Obtain Account last login time.
 * @method void setLastLoginTime(string $LastLoginTime) Set Account last login time.
 */
class Account extends AbstractModel
{
    /**
     * @var integer Unique ID.
     */
    public $Id;

    /**
     * @var string CWP agent `Uuid`
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
     * @var string Account name.
     */
    public $Username;

    /**
     * @var string Account group.
     */
    public $Groups;

    /**
     * @var string Account type.
<li>ORDINARY: ordinary account</li>
<li>SUPPER: super admin account</li>
     */
    public $Privilege;

    /**
     * @var string Account creation time.
     */
    public $AccountCreateTime;

    /**
     * @var string Account last login time.
     */
    public $LastLoginTime;

    /**
     * @param integer $Id Unique ID.
     * @param string $Uuid CWP agent `Uuid`
     * @param string $MachineIp Private IP of server.
     * @param string $MachineName Server name.
     * @param string $Username Account name.
     * @param string $Groups Account group.
     * @param string $Privilege Account type.
<li>ORDINARY: ordinary account</li>
<li>SUPPER: super admin account</li>
     * @param string $AccountCreateTime Account creation time.
     * @param string $LastLoginTime Account last login time.
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

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("AccountCreateTime",$param) and $param["AccountCreateTime"] !== null) {
            $this->AccountCreateTime = $param["AccountCreateTime"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }
    }
}
