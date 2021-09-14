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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSSHKeyPairValue response structure.
 *
 * @method string getSSHKeyID() Obtain ID of the SSH key.
 * @method void setSSHKeyID(string $SSHKeyID) Set ID of the SSH key.
 * @method string getPublicKey() Obtain Plaintext value of the Base64-encoded public key.
 * @method void setPublicKey(string $PublicKey) Set Plaintext value of the Base64-encoded public key.
 * @method string getPrivateKey() Obtain Plaintext value of the Base64-encoded private key.
 * @method void setPrivateKey(string $PrivateKey) Set Plaintext value of the Base64-encoded private key.
 * @method integer getProjectID() Obtain ID of the project to which the SSH key belongs.
 * @method void setProjectID(integer $ProjectID) Set ID of the project to which the SSH key belongs.
 * @method string getSSHKeyDescription() Obtain Description of the SSH key.
The description can be modified in the CVM console.
 * @method void setSSHKeyDescription(string $SSHKeyDescription) Set Description of the SSH key.
The description can be modified in the CVM console.
 * @method string getSSHKeyName() Obtain Name of the SSH key.
The name can be modified in the CVM console.
 * @method void setSSHKeyName(string $SSHKeyName) Set Name of the SSH key.
The name can be modified in the CVM console.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetSSHKeyPairValueResponse extends AbstractModel
{
    /**
     * @var string ID of the SSH key.
     */
    public $SSHKeyID;

    /**
     * @var string Plaintext value of the Base64-encoded public key.
     */
    public $PublicKey;

    /**
     * @var string Plaintext value of the Base64-encoded private key.
     */
    public $PrivateKey;

    /**
     * @var integer ID of the project to which the SSH key belongs.
     */
    public $ProjectID;

    /**
     * @var string Description of the SSH key.
The description can be modified in the CVM console.
     */
    public $SSHKeyDescription;

    /**
     * @var string Name of the SSH key.
The name can be modified in the CVM console.
     */
    public $SSHKeyName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SSHKeyID ID of the SSH key.
     * @param string $PublicKey Plaintext value of the Base64-encoded public key.
     * @param string $PrivateKey Plaintext value of the Base64-encoded private key.
     * @param integer $ProjectID ID of the project to which the SSH key belongs.
     * @param string $SSHKeyDescription Description of the SSH key.
The description can be modified in the CVM console.
     * @param string $SSHKeyName Name of the SSH key.
The name can be modified in the CVM console.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("SSHKeyID",$param) and $param["SSHKeyID"] !== null) {
            $this->SSHKeyID = $param["SSHKeyID"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("SSHKeyDescription",$param) and $param["SSHKeyDescription"] !== null) {
            $this->SSHKeyDescription = $param["SSHKeyDescription"];
        }

        if (array_key_exists("SSHKeyName",$param) and $param["SSHKeyName"] !== null) {
            $this->SSHKeyName = $param["SSHKeyName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
