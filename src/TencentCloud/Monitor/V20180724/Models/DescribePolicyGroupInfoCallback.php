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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User callback information output by the policy query
 *
 * @method string getCallbackUrl() Obtain URL of the user callback API.
 * @method void setCallbackUrl(string $CallbackUrl) Set URL of the user callback API.
 * @method integer getValidFlag() Obtain Status of the user callback API. The value 0 indicates that the API is not verified. The value 1 indicates that the API is verified. The value 2 indicates that a URL exists but the API fails to be verified.
 * @method void setValidFlag(integer $ValidFlag) Set Status of the user callback API. The value 0 indicates that the API is not verified. The value 1 indicates that the API is verified. The value 2 indicates that a URL exists but the API fails to be verified.
 * @method string getVerifyCode() Obtain Verification code of the user callback API.
 * @method void setVerifyCode(string $VerifyCode) Set Verification code of the user callback API.
 */
class DescribePolicyGroupInfoCallback extends AbstractModel
{
    /**
     * @var string URL of the user callback API.
     */
    public $CallbackUrl;

    /**
     * @var integer Status of the user callback API. The value 0 indicates that the API is not verified. The value 1 indicates that the API is verified. The value 2 indicates that a URL exists but the API fails to be verified.
     */
    public $ValidFlag;

    /**
     * @var string Verification code of the user callback API.
     */
    public $VerifyCode;

    /**
     * @param string $CallbackUrl URL of the user callback API.
     * @param integer $ValidFlag Status of the user callback API. The value 0 indicates that the API is not verified. The value 1 indicates that the API is verified. The value 2 indicates that a URL exists but the API fails to be verified.
     * @param string $VerifyCode Verification code of the user callback API.
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
        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ValidFlag",$param) and $param["ValidFlag"] !== null) {
            $this->ValidFlag = $param["ValidFlag"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }
    }
}
