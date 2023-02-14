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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The on-chain status of the credential.
 *
 * @method string getCredentialId() Obtain The credential ID.
 * @method void setCredentialId(string $CredentialId) Set The credential ID.
 * @method integer getStatus() Obtain The credential status. `0`: Invalid; `1`: Valid.
 * @method void setStatus(integer $Status) Set The credential status. `0`: Invalid; `1`: Valid.
 * @method string getIssuer() Obtain The DID of the issuer.
 * @method void setIssuer(string $Issuer) Set The DID of the issuer.
 * @method string getDigest() Obtain A summary of the credential.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDigest(string $Digest) Set A summary of the credential.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getSignature() Obtain The credential signature.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSignature(string $Signature) Set The credential signature.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTimeStamp() Obtain The last updated timestamp.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimeStamp(integer $TimeStamp) Set The last updated timestamp.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CredentialStatus extends AbstractModel
{
    /**
     * @var string The credential ID.
     */
    public $CredentialId;

    /**
     * @var integer The credential status. `0`: Invalid; `1`: Valid.
     */
    public $Status;

    /**
     * @var string The DID of the issuer.
     */
    public $Issuer;

    /**
     * @var string A summary of the credential.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Digest;

    /**
     * @var string The credential signature.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Signature;

    /**
     * @var integer The last updated timestamp.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimeStamp;

    /**
     * @param string $CredentialId The credential ID.
     * @param integer $Status The credential status. `0`: Invalid; `1`: Valid.
     * @param string $Issuer The DID of the issuer.
     * @param string $Digest A summary of the credential.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Signature The credential signature.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TimeStamp The last updated timestamp.
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
