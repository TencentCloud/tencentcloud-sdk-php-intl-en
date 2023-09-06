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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSecurityPolicy request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method integer getPolicyIndex() Obtain Allowlist ID
 * @method void setPolicyIndex(integer $PolicyIndex) Set Allowlist ID
 * @method string getPolicyVersion() Obtain Allowlist version
 * @method void setPolicyVersion(string $PolicyVersion) Set Allowlist version
 * @method string getCidrBlock() Obtain IP range or IP address (mutually exclusive).
 * @method void setCidrBlock(string $CidrBlock) Set IP range or IP address (mutually exclusive).
 */
class DeleteSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var integer Allowlist ID
     */
    public $PolicyIndex;

    /**
     * @var string Allowlist version
     */
    public $PolicyVersion;

    /**
     * @var string IP range or IP address (mutually exclusive).
     */
    public $CidrBlock;

    /**
     * @param string $RegistryId Instance ID
     * @param integer $PolicyIndex Allowlist ID
     * @param string $PolicyVersion Allowlist version
     * @param string $CidrBlock IP range or IP address (mutually exclusive).
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
