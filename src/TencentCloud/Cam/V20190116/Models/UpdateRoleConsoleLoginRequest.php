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
 * UpdateRoleConsoleLogin request structure.
 *
 * @method integer getConsoleLogin() Obtain Whether login is allowed. 1: yes, 0: no
 * @method void setConsoleLogin(integer $ConsoleLogin) Set Whether login is allowed. 1: yes, 0: no
 * @method integer getRoleId() Obtain Role ID. Use either `RoleId` or `RoleName` as the input parameter.
 * @method void setRoleId(integer $RoleId) Set Role ID. Use either `RoleId` or `RoleName` as the input parameter.
 * @method string getRoleName() Obtain Role name. Use either `RoleId` or `RoleName` as the input parameter.
 * @method void setRoleName(string $RoleName) Set Role name. Use either `RoleId` or `RoleName` as the input parameter.
 */
class UpdateRoleConsoleLoginRequest extends AbstractModel
{
    /**
     * @var integer Whether login is allowed. 1: yes, 0: no
     */
    public $ConsoleLogin;

    /**
     * @var integer Role ID. Use either `RoleId` or `RoleName` as the input parameter.
     */
    public $RoleId;

    /**
     * @var string Role name. Use either `RoleId` or `RoleName` as the input parameter.
     */
    public $RoleName;

    /**
     * @param integer $ConsoleLogin Whether login is allowed. 1: yes, 0: no
     * @param integer $RoleId Role ID. Use either `RoleId` or `RoleName` as the input parameter.
     * @param string $RoleName Role name. Use either `RoleId` or `RoleName` as the input parameter.
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
        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
