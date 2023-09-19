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
 * Database account permission change information
 *
 * @method string getUserName() Obtain Database username
 * @method void setUserName(string $UserName) Set Database username
 * @method array getDBPrivileges() Obtain Account permission change information
 * @method void setDBPrivileges(array $DBPrivileges) Set Account permission change information
 * @method boolean getIsAdmin() Obtain Whether it is an instance admin account. Valid values: `true` (Yes. When the instance is single-node and `AccountType` is `L0`, it's an admin account; when the instance is two-node and `AccountType` is `L1`, it's a privileged account), `false` (No. It's a standard account and `AccountType` is `L3`).
 * @method void setIsAdmin(boolean $IsAdmin) Set Whether it is an instance admin account. Valid values: `true` (Yes. When the instance is single-node and `AccountType` is `L0`, it's an admin account; when the instance is two-node and `AccountType` is `L1`, it's a privileged account), `false` (No. It's a standard account and `AccountType` is `L3`).
 * @method string getAccountType() Obtain Account type, which is an extension field of `IsAdmin`. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account, default)
 * @method void setAccountType(string $AccountType) Set Account type, which is an extension field of `IsAdmin`. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account, default)
 */
class AccountPrivilegeModifyInfo extends AbstractModel
{
    /**
     * @var string Database username
     */
    public $UserName;

    /**
     * @var array Account permission change information
     */
    public $DBPrivileges;

    /**
     * @var boolean Whether it is an instance admin account. Valid values: `true` (Yes. When the instance is single-node and `AccountType` is `L0`, it's an admin account; when the instance is two-node and `AccountType` is `L1`, it's a privileged account), `false` (No. It's a standard account and `AccountType` is `L3`).
     */
    public $IsAdmin;

    /**
     * @var string Account type, which is an extension field of `IsAdmin`. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account, default)
     */
    public $AccountType;

    /**
     * @param string $UserName Database username
     * @param array $DBPrivileges Account permission change information
     * @param boolean $IsAdmin Whether it is an instance admin account. Valid values: `true` (Yes. When the instance is single-node and `AccountType` is `L0`, it's an admin account; when the instance is two-node and `AccountType` is `L1`, it's a privileged account), `false` (No. It's a standard account and `AccountType` is `L3`).
     * @param string $AccountType Account type, which is an extension field of `IsAdmin`. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account, default)
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DBPrivileges",$param) and $param["DBPrivileges"] !== null) {
            $this->DBPrivileges = [];
            foreach ($param["DBPrivileges"] as $key => $value){
                $obj = new DBPrivilegeModifyInfo();
                $obj->deserialize($value);
                array_push($this->DBPrivileges, $obj);
            }
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }
    }
}
