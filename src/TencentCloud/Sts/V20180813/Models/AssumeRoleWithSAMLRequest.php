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
 * AssumeRoleWithSAML request structure.
 *
 * @method string getSAMLAssertion() Obtain Base64-encoded SAML assertion
 * @method void setSAMLAssertion(string $SAMLAssertion) Set Base64-encoded SAML assertion
 * @method string getPrincipalArn() Obtain Principal access description name
 * @method void setPrincipalArn(string $PrincipalArn) Set Principal access description name
 * @method string getRoleArn() Obtain Role access description name
 * @method void setRoleArn(string $RoleArn) Set Role access description name
 * @method string getRoleSessionName() Obtain Session name
 * @method void setRoleSessionName(string $RoleSessionName) Set Session name
 * @method integer getDurationSeconds() Obtain The validity period of the temporary credentials in seconds. Default value: 7,200s. Maximum value: 43,200s.
 * @method void setDurationSeconds(integer $DurationSeconds) Set The validity period of the temporary credentials in seconds. Default value: 7,200s. Maximum value: 43,200s.
 */
class AssumeRoleWithSAMLRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded SAML assertion
     */
    public $SAMLAssertion;

    /**
     * @var string Principal access description name
     */
    public $PrincipalArn;

    /**
     * @var string Role access description name
     */
    public $RoleArn;

    /**
     * @var string Session name
     */
    public $RoleSessionName;

    /**
     * @var integer The validity period of the temporary credentials in seconds. Default value: 7,200s. Maximum value: 43,200s.
     */
    public $DurationSeconds;

    /**
     * @param string $SAMLAssertion Base64-encoded SAML assertion
     * @param string $PrincipalArn Principal access description name
     * @param string $RoleArn Role access description name
     * @param string $RoleSessionName Session name
     * @param integer $DurationSeconds The validity period of the temporary credentials in seconds. Default value: 7,200s. Maximum value: 43,200s.
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
        if (array_key_exists("SAMLAssertion",$param) and $param["SAMLAssertion"] !== null) {
            $this->SAMLAssertion = $param["SAMLAssertion"];
        }

        if (array_key_exists("PrincipalArn",$param) and $param["PrincipalArn"] !== null) {
            $this->PrincipalArn = $param["PrincipalArn"];
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
