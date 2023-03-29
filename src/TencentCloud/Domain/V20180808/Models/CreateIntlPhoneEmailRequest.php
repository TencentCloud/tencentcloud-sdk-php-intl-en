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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIntlPhoneEmail request structure.
 *
 * @method integer getType() Obtain The type. Valid values: `1` (mobile number), `2` (email address).
 * @method void setType(integer $Type) Set The type. Valid values: `1` (mobile number), `2` (email address).
 * @method string getCode() Obtain The mobile number or email address.
 * @method void setCode(string $Code) Set The mobile number or email address.
 * @method string getVerifyCode() Obtain The verification code.
 * @method void setVerifyCode(string $VerifyCode) Set The verification code.
 */
class CreateIntlPhoneEmailRequest extends AbstractModel
{
    /**
     * @var integer The type. Valid values: `1` (mobile number), `2` (email address).
     */
    public $Type;

    /**
     * @var string The mobile number or email address.
     */
    public $Code;

    /**
     * @var string The verification code.
     */
    public $VerifyCode;

    /**
     * @param integer $Type The type. Valid values: `1` (mobile number), `2` (email address).
     * @param string $Code The mobile number or email address.
     * @param string $VerifyCode The verification code.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }
    }
}
