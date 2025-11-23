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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCardVerificationExternalResult request structure.
 *
 * @method string getCardVerificationToken() Obtain Initiates the recognition interface and returns a unique token.
 * @method void setCardVerificationToken(string $CardVerificationToken) Set Initiates the recognition interface and returns a unique token.
 */
class GetCardVerificationExternalResultRequest extends AbstractModel
{
    /**
     * @var string Initiates the recognition interface and returns a unique token.
     */
    public $CardVerificationToken;

    /**
     * @param string $CardVerificationToken Initiates the recognition interface and returns a unique token.
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
