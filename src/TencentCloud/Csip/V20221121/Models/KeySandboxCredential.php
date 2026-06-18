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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Credential data structure, used for list query and details query response
 *
 * @method string getCredentialId() Obtain Credential ID
 * @method void setCredentialId(string $CredentialId) Set Credential ID
 * @method string getCredentialName() Obtain Credential name
 * @method void setCredentialName(string $CredentialName) Set Credential name
 * @method string getCredentialType() Obtain Credential Type
Enumeration value:
access: normal Key (Key-Value pair)
sts: STS temporary key credential
 * @method void setCredentialType(string $CredentialType) Set Credential Type
Enumeration value:
access: normal Key (Key-Value pair)
sts: STS temporary key credential
 * @method CredentialEffectScope getCredentialEffectScope() Obtain Effective machine scope
 * @method void setCredentialEffectScope(CredentialEffectScope $CredentialEffectScope) Set Effective machine scope
 * @method string getCreateTime() Obtain Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method string getUpdateTime() Obtain Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
 */
class KeySandboxCredential extends AbstractModel
{
    /**
     * @var string Credential ID
     */
    public $CredentialId;

    /**
     * @var string Credential name
     */
    public $CredentialName;

    /**
     * @var string Credential Type
Enumeration value:
access: normal Key (Key-Value pair)
sts: STS temporary key credential
     */
    public $CredentialType;

    /**
     * @var CredentialEffectScope Effective machine scope
     */
    public $CredentialEffectScope;

    /**
     * @var string Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $CreateTime;

    /**
     * @var string Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     */
    public $UpdateTime;

    /**
     * @param string $CredentialId Credential ID
     * @param string $CredentialName Credential name
     * @param string $CredentialType Credential Type
Enumeration value:
access: normal Key (Key-Value pair)
sts: STS temporary key credential
     * @param CredentialEffectScope $CredentialEffectScope Effective machine scope
     * @param string $CreateTime Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
     * @param string $UpdateTime Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format).
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("CredentialName",$param) and $param["CredentialName"] !== null) {
            $this->CredentialName = $param["CredentialName"];
        }

        if (array_key_exists("CredentialType",$param) and $param["CredentialType"] !== null) {
            $this->CredentialType = $param["CredentialType"];
        }

        if (array_key_exists("CredentialEffectScope",$param) and $param["CredentialEffectScope"] !== null) {
            $this->CredentialEffectScope = new CredentialEffectScope();
            $this->CredentialEffectScope->deserialize($param["CredentialEffectScope"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
