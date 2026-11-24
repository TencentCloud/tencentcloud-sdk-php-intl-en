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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewMCPToken request structure.
 *
 * @method string getTokenId() Obtain <p>TokenId</p>
 * @method void setTokenId(string $TokenId) Set <p>TokenId</p>
 * @method integer getExpireSeconds() Obtain <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Default value: 86400</p><p>Unit: seconds. If not specified, the default is 1 day. The new expiration time is the current time plus ExpireSeconds.</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) Set <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Default value: 86400</p><p>Unit: seconds. If not specified, the default is 1 day. The new expiration time is the current time plus ExpireSeconds.</p>
 */
class RenewMCPTokenRequest extends AbstractModel
{
    /**
     * @var string <p>TokenId</p>
     */
    public $TokenId;

    /**
     * @var integer <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Default value: 86400</p><p>Unit: seconds. If not specified, the default is 1 day. The new expiration time is the current time plus ExpireSeconds.</p>
     */
    public $ExpireSeconds;

    /**
     * @param string $TokenId <p>TokenId</p>
     * @param integer $ExpireSeconds <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Default value: 86400</p><p>Unit: seconds. If not specified, the default is 1 day. The new expiration time is the current time plus ExpireSeconds.</p>
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }
    }
}
