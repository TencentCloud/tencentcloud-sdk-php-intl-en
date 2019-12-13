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
 * @method string getRoleName() 获取Role name
 * @method void setRoleName(string $RoleName) 设置Role name
 * @method string getPolicyDocument() 获取Policy document
 * @method void setPolicyDocument(string $PolicyDocument) 设置Policy document
 * @method string getDescription() 获取Role description
 * @method void setDescription(string $Description) 设置Role description
 * @method integer getConsoleLogin() 获取If login is allowed
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置If login is allowed
 */

/**
 *CreateRole request structure.
 */
class CreateRoleRequest extends AbstractModel
{
    /**
     * @var string Role name
     */
    public $RoleName;

    /**
     * @var string Policy document
     */
    public $PolicyDocument;

    /**
     * @var string Role description
     */
    public $Description;

    /**
     * @var integer If login is allowed
     */
    public $ConsoleLogin;
    /**
     * @param string $RoleName Role name
     * @param string $PolicyDocument Policy document
     * @param string $Description Role description
     * @param integer $ConsoleLogin If login is allowed
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }
    }
}
