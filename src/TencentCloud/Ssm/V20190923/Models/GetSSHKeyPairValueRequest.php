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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSSHKeyPairValue request structure.
 *
 * @method string getSecretName() Obtain Secret name. This field is only valid for SSH key secrets.
 * @method void setSecretName(string $SecretName) Set Secret name. This field is only valid for SSH key secrets.
 * @method string getSSHKeyId() Obtain ID of the key pair, which is the unique identifier of the key pair in the CVM.
 * @method void setSSHKeyId(string $SSHKeyId) Set ID of the key pair, which is the unique identifier of the key pair in the CVM.
 */
class GetSSHKeyPairValueRequest extends AbstractModel
{
    /**
     * @var string Secret name. This field is only valid for SSH key secrets.
     */
    public $SecretName;

    /**
     * @var string ID of the key pair, which is the unique identifier of the key pair in the CVM.
     */
    public $SSHKeyId;

    /**
     * @param string $SecretName Secret name. This field is only valid for SSH key secrets.
     * @param string $SSHKeyId ID of the key pair, which is the unique identifier of the key pair in the CVM.
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("SSHKeyId",$param) and $param["SSHKeyId"] !== null) {
            $this->SSHKeyId = $param["SSHKeyId"];
        }
    }
}
