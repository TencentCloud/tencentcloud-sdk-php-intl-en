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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCIM key.
 *
 * @method string getZoneId() Obtain Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method void setZoneId(string $ZoneId) Set Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method string getStatus() Obtain SCIM key status. Enabled: enabled. Disabled: disabled.
 * @method void setStatus(string $Status) Set SCIM key status. Enabled: enabled. Disabled: disabled.
 * @method string getCredentialId() Obtain SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
 * @method void setCredentialId(string $CredentialId) Set SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
 * @method string getCredentialType() Obtain SCIM key type.
 * @method void setCredentialType(string $CredentialType) Set SCIM key type.
 * @method string getCreateTime() Obtain Creation time of a SCIM key.
 * @method void setCreateTime(string $CreateTime) Set Creation time of a SCIM key.
 * @method string getExpireTime() Obtain Expiration time of a SCIM key.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time of a SCIM key.
 */
class SCIMCredential extends AbstractModel
{
    /**
     * @var string Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     */
    public $ZoneId;

    /**
     * @var string SCIM key status. Enabled: enabled. Disabled: disabled.
     */
    public $Status;

    /**
     * @var string SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
     */
    public $CredentialId;

    /**
     * @var string SCIM key type.
     */
    public $CredentialType;

    /**
     * @var string Creation time of a SCIM key.
     */
    public $CreateTime;

    /**
     * @var string Expiration time of a SCIM key.
     */
    public $ExpireTime;

    /**
     * @param string $ZoneId Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     * @param string $Status SCIM key status. Enabled: enabled. Disabled: disabled.
     * @param string $CredentialId SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
     * @param string $CredentialType SCIM key type.
     * @param string $CreateTime Creation time of a SCIM key.
     * @param string $ExpireTime Expiration time of a SCIM key.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("CredentialType",$param) and $param["CredentialType"] !== null) {
            $this->CredentialType = $param["CredentialType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
