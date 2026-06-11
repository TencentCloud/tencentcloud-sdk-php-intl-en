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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getUserName() Obtain The account name.
 * @method void setUserName(string $UserName) Set The account name.
 * @method array getAuthRole() Obtain The account permission details.
 * @method void setAuthRole(array $AuthRole) Set The account permission details.
 * @method string getCreateTime() Obtain The time when the account was created.
 * @method void setCreateTime(string $CreateTime) Set The time when the account was created.
 * @method string getUpdateTime() Obtain The time when the account was last updated.
 * @method void setUpdateTime(string $UpdateTime) Set The time when the account was last updated.
 * @method string getUserDesc() Obtain The remarks for the account.
 * @method void setUserDesc(string $UserDesc) Set The remarks for the account.
 * @method string getConsolePassUpdateTime() Obtain The time when the console password was last updated.
 * @method void setConsolePassUpdateTime(string $ConsolePassUpdateTime) Set The time when the console password was last updated.
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string The account name.
     */
    public $UserName;

    /**
     * @var array The account permission details.
     */
    public $AuthRole;

    /**
     * @var string The time when the account was created.
     */
    public $CreateTime;

    /**
     * @var string The time when the account was last updated.
     */
    public $UpdateTime;

    /**
     * @var string The remarks for the account.
     */
    public $UserDesc;

    /**
     * @var string The time when the console password was last updated.
     */
    public $ConsolePassUpdateTime;

    /**
     * @param string $UserName The account name.
     * @param array $AuthRole The account permission details.
     * @param string $CreateTime The time when the account was created.
     * @param string $UpdateTime The time when the account was last updated.
     * @param string $UserDesc The remarks for the account.
     * @param string $ConsolePassUpdateTime The time when the console password was last updated.
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

        if (array_key_exists("AuthRole",$param) and $param["AuthRole"] !== null) {
            $this->AuthRole = [];
            foreach ($param["AuthRole"] as $key => $value){
                $obj = new Auth();
                $obj->deserialize($value);
                array_push($this->AuthRole, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserDesc",$param) and $param["UserDesc"] !== null) {
            $this->UserDesc = $param["UserDesc"];
        }

        if (array_key_exists("ConsolePassUpdateTime",$param) and $param["ConsolePassUpdateTime"] !== null) {
            $this->ConsolePassUpdateTime = $param["ConsolePassUpdateTime"];
        }
    }
}
