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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyCredential response structure.
 *
 * @method boolean getResult() Obtain Whether the verification is successful.
 * @method void setResult(boolean $Result) Set Whether the verification is successful.
 * @method integer getVerifyCode() Obtain The verification code.
 * @method void setVerifyCode(integer $VerifyCode) Set The verification code.
 * @method string getVerifyMessage() Obtain The verification message.
 * @method void setVerifyMessage(string $VerifyMessage) Set The verification message.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class VerifyCredentialResponse extends AbstractModel
{
    /**
     * @var boolean Whether the verification is successful.
     */
    public $Result;

    /**
     * @var integer The verification code.
     */
    public $VerifyCode;

    /**
     * @var string The verification message.
     */
    public $VerifyMessage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Result Whether the verification is successful.
     * @param integer $VerifyCode The verification code.
     * @param string $VerifyMessage The verification message.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }

        if (array_key_exists("VerifyMessage",$param) and $param["VerifyMessage"] !== null) {
            $this->VerifyMessage = $param["VerifyMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
