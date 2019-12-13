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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Redis instance ID
 * @method void setInstanceId(string $InstanceId) 设置Redis instance ID
 * @method string getPassword() 获取Password reset (this parameter can be left blank when switching to password-free instance mode and is required in other cases)
 * @method void setPassword(string $Password) 设置Password reset (this parameter can be left blank when switching to password-free instance mode and is required in other cases)
 * @method boolean getNoAuth() 获取Whether to switch to password-free instance mode. false: switch to password-enabled instance mode; true: switch to password-free instance mode. Default value: false
 * @method void setNoAuth(boolean $NoAuth) 设置Whether to switch to password-free instance mode. false: switch to password-enabled instance mode; true: switch to password-free instance mode. Default value: false
 */

/**
 *ResetPassword request structure.
 */
class ResetPasswordRequest extends AbstractModel
{
    /**
     * @var string Redis instance ID
     */
    public $InstanceId;

    /**
     * @var string Password reset (this parameter can be left blank when switching to password-free instance mode and is required in other cases)
     */
    public $Password;

    /**
     * @var boolean Whether to switch to password-free instance mode. false: switch to password-enabled instance mode; true: switch to password-free instance mode. Default value: false
     */
    public $NoAuth;
    /**
     * @param string $InstanceId Redis instance ID
     * @param string $Password Password reset (this parameter can be left blank when switching to password-free instance mode and is required in other cases)
     * @param boolean $NoAuth Whether to switch to password-free instance mode. false: switch to password-enabled instance mode; true: switch to password-free instance mode. Default value: false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }
    }
}
