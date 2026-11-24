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
 * CreateMCPToken request structure.
 *
 * @method integer getExpireSeconds() Obtain <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Unit: seconds</p><p>Default value: 86400</p><p>If this parameter is not specified, the default timeout is 1 day. The expiration time is the current time + the timeout period.</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) Set <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Unit: seconds</p><p>Default value: 86400</p><p>If this parameter is not specified, the default timeout is 1 day. The expiration time is the current time + the timeout period.</p>
 * @method string getTokenName() Obtain <p>Token name (comment)</p><p>Format: Only a combination of Chinese characters, English letters, digits, and hyphens (&quot;-&quot;) is supported.</p><p>Maximum length: 16 characters</p>
 * @method void setTokenName(string $TokenName) Set <p>Token name (comment)</p><p>Format: Only a combination of Chinese characters, English letters, digits, and hyphens (&quot;-&quot;) is supported.</p><p>Maximum length: 16 characters</p>
 * @method string getUserId() Obtain <p>User Id</p><p>Format: Only a combination of letters (A-Za-z), digits (0-9), and underscores (_) is supported.</p><p>This UserId is always used to operate cloud rendering concurrent resources. Maximum length: 64 characters</p>
 * @method void setUserId(string $UserId) Set <p>User Id</p><p>Format: Only a combination of letters (A-Za-z), digits (0-9), and underscores (_) is supported.</p><p>This UserId is always used to operate cloud rendering concurrent resources. Maximum length: 64 characters</p>
 */
class CreateMCPTokenRequest extends AbstractModel
{
    /**
     * @var integer <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Unit: seconds</p><p>Default value: 86400</p><p>If this parameter is not specified, the default timeout is 1 day. The expiration time is the current time + the timeout period.</p>
     */
    public $ExpireSeconds;

    /**
     * @var string <p>Token name (comment)</p><p>Format: Only a combination of Chinese characters, English letters, digits, and hyphens (&quot;-&quot;) is supported.</p><p>Maximum length: 16 characters</p>
     */
    public $TokenName;

    /**
     * @var string <p>User Id</p><p>Format: Only a combination of letters (A-Za-z), digits (0-9), and underscores (_) is supported.</p><p>This UserId is always used to operate cloud rendering concurrent resources. Maximum length: 64 characters</p>
     */
    public $UserId;

    /**
     * @param integer $ExpireSeconds <p>Token expiration time</p><p>Value range: [0, 2592000]</p><p>Unit: seconds</p><p>Default value: 86400</p><p>If this parameter is not specified, the default timeout is 1 day. The expiration time is the current time + the timeout period.</p>
     * @param string $TokenName <p>Token name (comment)</p><p>Format: Only a combination of Chinese characters, English letters, digits, and hyphens (&quot;-&quot;) is supported.</p><p>Maximum length: 16 characters</p>
     * @param string $UserId <p>User Id</p><p>Format: Only a combination of letters (A-Za-z), digits (0-9), and underscores (_) is supported.</p><p>This UserId is always used to operate cloud rendering concurrent resources. Maximum length: 64 characters</p>
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
        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
