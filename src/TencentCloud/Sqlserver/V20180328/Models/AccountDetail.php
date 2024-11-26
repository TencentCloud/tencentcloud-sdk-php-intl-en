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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account information details
 *
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 * @method string getRemark() Obtain Account remarks
 * @method void setRemark(string $Remark) Set Account remarks
 * @method string getCreateTime() Obtain Account creation time
 * @method void setCreateTime(string $CreateTime) Set Account creation time
 * @method integer getStatus() Obtain Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
 * @method void setStatus(integer $Status) Set Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
 * @method string getUpdateTime() Obtain Account update time
 * @method void setUpdateTime(string $UpdateTime) Set Account update time
 * @method string getPassTime() Obtain Password update time
 * @method void setPassTime(string $PassTime) Set Password update time
 * @method string getInternalStatus() Obtain Internal account status, which should be `enable` normally
 * @method void setInternalStatus(string $InternalStatus) Set Internal account status, which should be `enable` normally
 * @method array getDbs() Obtain Information of read and write permissions of this account on relevant databases
 * @method void setDbs(array $Dbs) Set Information of read and write permissions of this account on relevant databases
 * @method boolean getIsAdmin() Obtain Whether it is an admin account
 * @method void setIsAdmin(boolean $IsAdmin) Set Whether it is an admin account
 * @method boolean getIsCam() Obtain Whether it is a CAM managed account
 * @method void setIsCam(boolean $IsCam) Set Whether it is a CAM managed account
 * @method string getAuthentication() Obtain Valid values: `win-windows authentication`, `sql-sqlserver authentication`.
 * @method void setAuthentication(string $Authentication) Set Valid values: `win-windows authentication`, `sql-sqlserver authentication`.
 * @method string getHost() Obtain The host required for `win-windows authentication` account
 * @method void setHost(string $Host) Set The host required for `win-windows authentication` account
 * @method string getAccountType() Obtain Account type. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
 * @method void setAccountType(string $AccountType) Set Account type. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
 */
class AccountDetail extends AbstractModel
{
    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @var string Account remarks
     */
    public $Remark;

    /**
     * @var string Account creation time
     */
    public $CreateTime;

    /**
     * @var integer Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
     */
    public $Status;

    /**
     * @var string Account update time
     */
    public $UpdateTime;

    /**
     * @var string Password update time
     */
    public $PassTime;

    /**
     * @var string Internal account status, which should be `enable` normally
     */
    public $InternalStatus;

    /**
     * @var array Information of read and write permissions of this account on relevant databases
     */
    public $Dbs;

    /**
     * @var boolean Whether it is an admin account
     */
    public $IsAdmin;

    /**
     * @var boolean Whether it is a CAM managed account
     */
    public $IsCam;

    /**
     * @var string Valid values: `win-windows authentication`, `sql-sqlserver authentication`.
     */
    public $Authentication;

    /**
     * @var string The host required for `win-windows authentication` account
     */
    public $Host;

    /**
     * @var string Account type. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
     */
    public $AccountType;

    /**
     * @param string $Name Account name
     * @param string $Remark Account remarks
     * @param string $CreateTime Account creation time
     * @param integer $Status Account status. 1: creating, 2: normal, 3: modifying, 4: resetting password, -1: deleting
     * @param string $UpdateTime Account update time
     * @param string $PassTime Password update time
     * @param string $InternalStatus Internal account status, which should be `enable` normally
     * @param array $Dbs Information of read and write permissions of this account on relevant databases
     * @param boolean $IsAdmin Whether it is an admin account
     * @param boolean $IsCam Whether it is a CAM managed account
     * @param string $Authentication Valid values: `win-windows authentication`, `sql-sqlserver authentication`.
     * @param string $Host The host required for `win-windows authentication` account
     * @param string $AccountType Account type. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PassTime",$param) and $param["PassTime"] !== null) {
            $this->PassTime = $param["PassTime"];
        }

        if (array_key_exists("InternalStatus",$param) and $param["InternalStatus"] !== null) {
            $this->InternalStatus = $param["InternalStatus"];
        }

        if (array_key_exists("Dbs",$param) and $param["Dbs"] !== null) {
            $this->Dbs = [];
            foreach ($param["Dbs"] as $key => $value){
                $obj = new DBPrivilege();
                $obj->deserialize($value);
                array_push($this->Dbs, $obj);
            }
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }

        if (array_key_exists("IsCam",$param) and $param["IsCam"] !== null) {
            $this->IsCam = $param["IsCam"];
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = $param["Authentication"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }
    }
}
