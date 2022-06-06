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
 * @method boolean getIsAdmin() Obtain Whether it is an admin account
 * @method void setIsAdmin(boolean $IsAdmin) Set Whether it is an admin account
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
     * @var boolean Whether it is an admin account
     */
    public $IsAdmin;

    /**
     * @param string $UserName Database username
     * @param array $DBPrivileges Account permission change information
     * @param boolean $IsAdmin Whether it is an admin account
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
    }
}
