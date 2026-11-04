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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Plugin authorization configuration
 *
 * @method integer getAuthType() Obtain <p>Authorization mode.</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key authentication</li><li>2: CAM authorization</li><li>3: OAuth 2.0 authorization</li></ul>
 * @method void setAuthType(integer $AuthType) Set <p>Authorization mode.</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key authentication</li><li>2: CAM authorization</li><li>3: OAuth 2.0 authorization</li></ul>
 * @method ApiKeyAuthConfig getApiKeyAuthConfig() Obtain <p>API Key Authorization Configuration</p>
 * @method void setApiKeyAuthConfig(ApiKeyAuthConfig $ApiKeyAuthConfig) Set <p>API Key Authorization Configuration</p>
 * @method CamAuthConfig getCamAuthConfig() Obtain <p>CAM Authorization Configuration</p>
 * @method void setCamAuthConfig(CamAuthConfig $CamAuthConfig) Set <p>CAM Authorization Configuration</p>
 * @method OAuthConfig getOAuthConfig() Obtain <p>OAuth 2.0 authorization configuration</p>
 * @method void setOAuthConfig(OAuthConfig $OAuthConfig) Set <p>OAuth 2.0 authorization configuration</p>
 * @method AccessKeyAuthConfig getAccessKeyAuthConfig() Obtain <p>AccessKey authorization configuration</p>
 * @method void setAccessKeyAuthConfig(AccessKeyAuthConfig $AccessKeyAuthConfig) Set <p>AccessKey authorization configuration</p>
 */
class AuthConfig extends AbstractModel
{
    /**
     * @var integer <p>Authorization mode.</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key authentication</li><li>2: CAM authorization</li><li>3: OAuth 2.0 authorization</li></ul>
     */
    public $AuthType;

    /**
     * @var ApiKeyAuthConfig <p>API Key Authorization Configuration</p>
     */
    public $ApiKeyAuthConfig;

    /**
     * @var CamAuthConfig <p>CAM Authorization Configuration</p>
     */
    public $CamAuthConfig;

    /**
     * @var OAuthConfig <p>OAuth 2.0 authorization configuration</p>
     */
    public $OAuthConfig;

    /**
     * @var AccessKeyAuthConfig <p>AccessKey authorization configuration</p>
     */
    public $AccessKeyAuthConfig;

    /**
     * @param integer $AuthType <p>Authorization mode.</p><p>Enumeration values:</p><ul><li>0: No authentication</li><li>1: API Key authentication</li><li>2: CAM authorization</li><li>3: OAuth 2.0 authorization</li></ul>
     * @param ApiKeyAuthConfig $ApiKeyAuthConfig <p>API Key Authorization Configuration</p>
     * @param CamAuthConfig $CamAuthConfig <p>CAM Authorization Configuration</p>
     * @param OAuthConfig $OAuthConfig <p>OAuth 2.0 authorization configuration</p>
     * @param AccessKeyAuthConfig $AccessKeyAuthConfig <p>AccessKey authorization configuration</p>
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiKeyAuthConfig",$param) and $param["ApiKeyAuthConfig"] !== null) {
            $this->ApiKeyAuthConfig = new ApiKeyAuthConfig();
            $this->ApiKeyAuthConfig->deserialize($param["ApiKeyAuthConfig"]);
        }

        if (array_key_exists("CamAuthConfig",$param) and $param["CamAuthConfig"] !== null) {
            $this->CamAuthConfig = new CamAuthConfig();
            $this->CamAuthConfig->deserialize($param["CamAuthConfig"]);
        }

        if (array_key_exists("OAuthConfig",$param) and $param["OAuthConfig"] !== null) {
            $this->OAuthConfig = new OAuthConfig();
            $this->OAuthConfig->deserialize($param["OAuthConfig"]);
        }

        if (array_key_exists("AccessKeyAuthConfig",$param) and $param["AccessKeyAuthConfig"] !== null) {
            $this->AccessKeyAuthConfig = new AccessKeyAuthConfig();
            $this->AccessKeyAuthConfig->deserialize($param["AccessKeyAuthConfig"]);
        }
    }
}
