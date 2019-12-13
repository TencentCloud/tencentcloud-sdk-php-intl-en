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
 * @method integer getOpUin() 获取Set user UIN
 * @method void setOpUin(integer $OpUin) 设置Set user UIN
 * @method LoginActionFlag getLoginFlag() 获取Login settings
 * @method void setLoginFlag(LoginActionFlag $LoginFlag) 设置Login settings
 * @method LoginActionFlag getActionFlag() 获取Sensitive operation settings
 * @method void setActionFlag(LoginActionFlag $ActionFlag) 设置Sensitive operation settings
 * @method OffsiteFlag getOffsiteFlag() 获取Remote login settings
 * @method void setOffsiteFlag(OffsiteFlag $OffsiteFlag) 设置Remote login settings
 * @method integer getNeedResetMfa() 获取If MFA requires top-up
 * @method void setNeedResetMfa(integer $NeedResetMfa) 设置If MFA requires top-up
 */

/**
 *SetFlag request structure.
 */
class SetFlagRequest extends AbstractModel
{
    /**
     * @var integer Set user UIN
     */
    public $OpUin;

    /**
     * @var LoginActionFlag Login settings
     */
    public $LoginFlag;

    /**
     * @var LoginActionFlag Sensitive operation settings
     */
    public $ActionFlag;

    /**
     * @var OffsiteFlag Remote login settings
     */
    public $OffsiteFlag;

    /**
     * @var integer If MFA requires top-up
     */
    public $NeedResetMfa;
    /**
     * @param integer $OpUin Set user UIN
     * @param LoginActionFlag $LoginFlag Login settings
     * @param LoginActionFlag $ActionFlag Sensitive operation settings
     * @param OffsiteFlag $OffsiteFlag Remote login settings
     * @param integer $NeedResetMfa If MFA requires top-up
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
        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionFlag();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionFlag();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }

        if (array_key_exists("OffsiteFlag",$param) and $param["OffsiteFlag"] !== null) {
            $this->OffsiteFlag = new OffsiteFlag();
            $this->OffsiteFlag->deserialize($param["OffsiteFlag"]);
        }

        if (array_key_exists("NeedResetMfa",$param) and $param["NeedResetMfa"] !== null) {
            $this->NeedResetMfa = $param["NeedResetMfa"];
        }
    }
}
