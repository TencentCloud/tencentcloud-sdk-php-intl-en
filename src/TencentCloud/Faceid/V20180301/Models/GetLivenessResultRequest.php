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
 * GetLivenessResult request structure.
 *
 * @method string getSdkToken() Obtain The token used to identify an SDK-based verification process.
 * @method void setSdkToken(string $SdkToken) Set The token used to identify an SDK-based verification process.
 */
class GetLivenessResultRequest extends AbstractModel
{
    /**
     * @var string The token used to identify an SDK-based verification process.
     */
    public $SdkToken;

    /**
     * @param string $SdkToken The token used to identify an SDK-based verification process.
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
        if (array_key_exists("SdkToken",$param) and $param["SdkToken"] !== null) {
            $this->SdkToken = $param["SdkToken"];
        }
    }
}
