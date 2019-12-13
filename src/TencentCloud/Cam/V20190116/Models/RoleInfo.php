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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRoleId() 获取Role ID
 * @method void setRoleId(string $RoleId) 设置Role ID
 * @method string getRoleName() 获取Role name
 * @method void setRoleName(string $RoleName) 设置Role name
 * @method string getPolicyDocument() 获取Role policy document
 * @method void setPolicyDocument(string $PolicyDocument) 设置Role policy document
 * @method string getDescription() 获取Role description
 * @method void setDescription(string $Description) 设置Role description
 * @method string getAddTime() 获取Time role created
 * @method void setAddTime(string $AddTime) 设置Time role created
 * @method string getUpdateTime() 获取Time role last updated
 * @method void setUpdateTime(string $UpdateTime) 设置Time role last updated
 * @method integer getConsoleLogin() 获取If login is allowed for the role
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置If login is allowed for the role
 */

/**
 *Role details
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string Role ID
     */
    public $RoleId;

    /**
     * @var string Role name
     */
    public $RoleName;

    /**
     * @var string Role policy document
     */
    public $PolicyDocument;

    /**
     * @var string Role description
     */
    public $Description;

    /**
     * @var string Time role created
     */
    public $AddTime;

    /**
     * @var string Time role last updated
     */
    public $UpdateTime;

    /**
     * @var integer If login is allowed for the role
     */
    public $ConsoleLogin;
    /**
     * @param string $RoleId Role ID
     * @param string $RoleName Role name
     * @param string $PolicyDocument Role policy document
     * @param string $Description Role description
     * @param string $AddTime Time role created
     * @param string $UpdateTime Time role last updated
     * @param integer $ConsoleLogin If login is allowed for the role
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }
    }
}
