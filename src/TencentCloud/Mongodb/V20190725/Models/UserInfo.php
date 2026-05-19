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
 * @method string getUserName() Obtain 
 * @method void setUserName(string $UserName) Set 
 * @method array getAuthRole() Obtain 
 * @method void setAuthRole(array $AuthRole) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 * @method string getUserDesc() Obtain 
 * @method void setUserDesc(string $UserDesc) Set 
 * @method string getConsolePassUpdateTime() Obtain Console password update time.
 * @method void setConsolePassUpdateTime(string $ConsolePassUpdateTime) Set Console password update time.
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $UserName;

    /**
     * @var array 
     */
    public $AuthRole;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $UserDesc;

    /**
     * @var string Console password update time.
     */
    public $ConsolePassUpdateTime;

    /**
     * @param string $UserName 
     * @param array $AuthRole 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param string $UserDesc 
     * @param string $ConsolePassUpdateTime Console password update time.
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
