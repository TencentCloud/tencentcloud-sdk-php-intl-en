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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database account permission information, which is set when the database is created
 *
 * @method string getUserName() Obtain Database username
 * @method void setUserName(string $UserName) Set Database username
 * @method string getPrivilege() Obtain Database permission. Valid values: `ReadWrite` (read-write), `ReadOnly` (read-only), `Delete` (delete the database permissions of this account), `DBOwner` (owner).
 * @method void setPrivilege(string $Privilege) Set Database permission. Valid values: `ReadWrite` (read-write), `ReadOnly` (read-only), `Delete` (delete the database permissions of this account), `DBOwner` (owner).
 * @method string getAccountType() Obtain Account name. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
 * @method void setAccountType(string $AccountType) Set Account name. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
 */
class AccountPrivilege extends AbstractModel
{
    /**
     * @var string Database username
     */
    public $UserName;

    /**
     * @var string Database permission. Valid values: `ReadWrite` (read-write), `ReadOnly` (read-only), `Delete` (delete the database permissions of this account), `DBOwner` (owner).
     */
    public $Privilege;

    /**
     * @var string Account name. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
     */
    public $AccountType;

    /**
     * @param string $UserName Database username
     * @param string $Privilege Database permission. Valid values: `ReadWrite` (read-write), `ReadOnly` (read-only), `Delete` (delete the database permissions of this account), `DBOwner` (owner).
     * @param string $AccountType Account name. Valid values: `L0` (admin account, only for basic edition), `L1` (privileged account), `L2` (designated account), `L3` (standard account).
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

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }
    }
}
