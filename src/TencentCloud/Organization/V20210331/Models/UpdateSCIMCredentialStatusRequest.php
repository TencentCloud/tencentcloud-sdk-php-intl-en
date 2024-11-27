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
 * UpdateSCIMCredentialStatus request structure.
 *
 * @method string getZoneId() Obtain Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method void setZoneId(string $ZoneId) Set Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
 * @method string getCredentialId() Obtain SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
 * @method void setCredentialId(string $CredentialId) Set SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
 * @method string getNewStatus() Obtain SCIM key status. Enabled: enabled. Disabled: disabled.
 * @method void setNewStatus(string $NewStatus) Set SCIM key status. Enabled: enabled. Disabled: disabled.
 */
class UpdateSCIMCredentialStatusRequest extends AbstractModel
{
    /**
     * @var string Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     */
    public $ZoneId;

    /**
     * @var string SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
     */
    public $CredentialId;

    /**
     * @var string SCIM key status. Enabled: enabled. Disabled: disabled.
     */
    public $NewStatus;

    /**
     * @param string $ZoneId Space ID, which starts with the z- prefix, followed by 12 random digits/lowercase letters.
     * @param string $CredentialId SCIM key ID, which starts with the scimcred- prefix, followed by 12 random digits/lowercase letters.
     * @param string $NewStatus SCIM key status. Enabled: enabled. Disabled: disabled.
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

        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("NewStatus",$param) and $param["NewStatus"] !== null) {
            $this->NewStatus = $param["NewStatus"];
        }
    }
}
