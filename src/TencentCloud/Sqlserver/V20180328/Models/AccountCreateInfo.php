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
 * Account creation information
 *
 * @method string getUserName() Obtain Instance username
 * @method void setUserName(string $UserName) Set Instance username
 * @method string getPassword() Obtain Instance password
 * @method void setPassword(string $Password) Set Instance password
 * @method array getDBPrivileges() Obtain List of database permissions
 * @method void setDBPrivileges(array $DBPrivileges) Set List of database permissions
 * @method string getRemark() Obtain Account remarks
 * @method void setRemark(string $Remark) Set Account remarks
 * @method boolean getIsAdmin() Obtain Whether it is an admin account. Default value: no
 * @method void setIsAdmin(boolean $IsAdmin) Set Whether it is an admin account. Default value: no
 * @method string getAuthentication() Obtain Valid values: `win-windows authentication`, `sql-sqlserver authentication`. Default value: `sql-sqlserver authentication`.
 * @method void setAuthentication(string $Authentication) Set Valid values: `win-windows authentication`, `sql-sqlserver authentication`. Default value: `sql-sqlserver authentication`.
 */
class AccountCreateInfo extends AbstractModel
{
    /**
     * @var string Instance username
     */
    public $UserName;

    /**
     * @var string Instance password
     */
    public $Password;

    /**
     * @var array List of database permissions
     */
    public $DBPrivileges;

    /**
     * @var string Account remarks
     */
    public $Remark;

    /**
     * @var boolean Whether it is an admin account. Default value: no
     */
    public $IsAdmin;

    /**
     * @var string Valid values: `win-windows authentication`, `sql-sqlserver authentication`. Default value: `sql-sqlserver authentication`.
     */
    public $Authentication;

    /**
     * @param string $UserName Instance username
     * @param string $Password Instance password
     * @param array $DBPrivileges List of database permissions
     * @param string $Remark Account remarks
     * @param boolean $IsAdmin Whether it is an admin account. Default value: no
     * @param string $Authentication Valid values: `win-windows authentication`, `sql-sqlserver authentication`. Default value: `sql-sqlserver authentication`.
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DBPrivileges",$param) and $param["DBPrivileges"] !== null) {
            $this->DBPrivileges = [];
            foreach ($param["DBPrivileges"] as $key => $value){
                $obj = new DBPrivilege();
                $obj->deserialize($value);
                array_push($this->DBPrivileges, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = $param["Authentication"];
        }
    }
}
