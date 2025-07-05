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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCardVerificationResult request structure.
 *
 * @method string getCardVerificationToken() Obtain The token used to identify an verification process. It can be used to get the verification result after the process is completed.
 * @method void setCardVerificationToken(string $CardVerificationToken) Set The token used to identify an verification process. It can be used to get the verification result after the process is completed.
 */
class GetCardVerificationResultRequest extends AbstractModel
{
    /**
     * @var string The token used to identify an verification process. It can be used to get the verification result after the process is completed.
     */
    public $CardVerificationToken;

    /**
     * @param string $CardVerificationToken The token used to identify an verification process. It can be used to get the verification result after the process is completed.
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
        if (array_key_exists("CardVerificationToken",$param) and $param["CardVerificationToken"] !== null) {
            $this->CardVerificationToken = $param["CardVerificationToken"];
        }
    }
}
