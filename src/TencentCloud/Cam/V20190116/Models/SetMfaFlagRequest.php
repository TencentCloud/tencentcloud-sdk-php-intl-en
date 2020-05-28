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
 * SetMfaFlag request structure.
 *
 * @method integer getOpUin() Obtain Sets user UIN
 * @method void setOpUin(integer $OpUin) Set Sets user UIN
 * @method LoginActionMfaFlag getLoginFlag() Obtain Sets login protection
 * @method void setLoginFlag(LoginActionMfaFlag $LoginFlag) Set Sets login protection
 * @method LoginActionMfaFlag getActionFlag() Obtain Sets operation protection
 * @method void setActionFlag(LoginActionMfaFlag $ActionFlag) Set Sets operation protection
 */
class SetMfaFlagRequest extends AbstractModel
{
    /**
     * @var integer Sets user UIN
     */
    public $OpUin;

    /**
     * @var LoginActionMfaFlag Sets login protection
     */
    public $LoginFlag;

    /**
     * @var LoginActionMfaFlag Sets operation protection
     */
    public $ActionFlag;

    /**
     * @param integer $OpUin Sets user UIN
     * @param LoginActionMfaFlag $LoginFlag Sets login protection
     * @param LoginActionMfaFlag $ActionFlag Sets operation protection
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
        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionMfaFlag();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionMfaFlag();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }
    }
}
