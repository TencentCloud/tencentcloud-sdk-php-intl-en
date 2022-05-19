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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRoleWithWebIdentity request structure.
 *
 * @method string getProviderId() Obtain Identity provider name
 * @method void setProviderId(string $ProviderId) Set Identity provider name
 * @method string getWebIdentityToken() Obtain OIDC token issued by the IdP
 * @method void setWebIdentityToken(string $WebIdentityToken) Set OIDC token issued by the IdP
 * @method string getRoleArn() Obtain Role access description name
 * @method void setRoleArn(string $RoleArn) Set Role access description name
 * @method string getRoleSessionName() Obtain Session name
 * @method void setRoleSessionName(string $RoleSessionName) Set Session name
 * @method integer getDurationSeconds() Obtain The validity period of the temporary credential in seconds. Default value: 7,200s. Maximum value: 43,200s.
 * @method void setDurationSeconds(integer $DurationSeconds) Set The validity period of the temporary credential in seconds. Default value: 7,200s. Maximum value: 43,200s.
 */
class AssumeRoleWithWebIdentityRequest extends AbstractModel
{
    /**
     * @var string Identity provider name
     */
    public $ProviderId;

    /**
     * @var string OIDC token issued by the IdP
     */
    public $WebIdentityToken;

    /**
     * @var string Role access description name
     */
    public $RoleArn;

    /**
     * @var string Session name
     */
    public $RoleSessionName;

    /**
     * @var integer The validity period of the temporary credential in seconds. Default value: 7,200s. Maximum value: 43,200s.
     */
    public $DurationSeconds;

    /**
     * @param string $ProviderId Identity provider name
     * @param string $WebIdentityToken OIDC token issued by the IdP
     * @param string $RoleArn Role access description name
     * @param string $RoleSessionName Session name
     * @param integer $DurationSeconds The validity period of the temporary credential in seconds. Default value: 7,200s. Maximum value: 43,200s.
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
        if (array_key_exists("ProviderId",$param) and $param["ProviderId"] !== null) {
            $this->ProviderId = $param["ProviderId"];
        }

        if (array_key_exists("WebIdentityToken",$param) and $param["WebIdentityToken"] !== null) {
            $this->WebIdentityToken = $param["WebIdentityToken"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("RoleSessionName",$param) and $param["RoleSessionName"] !== null) {
            $this->RoleSessionName = $param["RoleSessionName"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
