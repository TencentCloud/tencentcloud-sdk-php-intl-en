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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiKey request structure.
 *
 * @method string getPlatform() Obtain Platform type. Currently supported values: maas.
 * @method void setPlatform(string $Platform) Set Platform type. Currently supported values: maas.
 * @method string getApiKeyId() Obtain API Key ID. At least one of this or ApiKey is required. Prioritize ApiKeyId.
 * @method void setApiKeyId(string $ApiKeyId) Set API Key ID. At least one of this or ApiKey is required. Prioritize ApiKeyId.
 * @method string getApiKey() Obtain API key plaintext. At least one of it and ApiKeyId must be imported.
 * @method void setApiKey(string $ApiKey) Set API key plaintext. At least one of it and ApiKeyId must be imported.
 */
class DescribeApiKeyRequest extends AbstractModel
{
    /**
     * @var string Platform type. Currently supported values: maas.
     */
    public $Platform;

    /**
     * @var string API Key ID. At least one of this or ApiKey is required. Prioritize ApiKeyId.
     */
    public $ApiKeyId;

    /**
     * @var string API key plaintext. At least one of it and ApiKeyId must be imported.
     */
    public $ApiKey;

    /**
     * @param string $Platform Platform type. Currently supported values: maas.
     * @param string $ApiKeyId API Key ID. At least one of this or ApiKey is required. Prioritize ApiKeyId.
     * @param string $ApiKey API key plaintext. At least one of it and ApiKeyId must be imported.
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }
    }
}
