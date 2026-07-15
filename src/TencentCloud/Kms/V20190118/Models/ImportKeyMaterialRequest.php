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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportKeyMaterial request structure.
 *
 * @method string getEncryptedKeyMaterial() Obtain <p>base64-encoded encrypted key material using the PublicKey returned by GetParametersForImport. For KMS in national cryptography version regions, the length requirement for imported key material is 128 bit. For KMS in FIPS 140-2 version regions, the length requirement for imported key material is 256 bit.</p>
 * @method void setEncryptedKeyMaterial(string $EncryptedKeyMaterial) Set <p>base64-encoded encrypted key material using the PublicKey returned by GetParametersForImport. For KMS in national cryptography version regions, the length requirement for imported key material is 128 bit. For KMS in FIPS 140-2 version regions, the length requirement for imported key material is 256 bit.</p>
 * @method string getImportToken() Obtain <p>Import token obtained by calling GetParametersForImport.</p>
 * @method void setImportToken(string $ImportToken) Set <p>Import token obtained by calling GetParametersForImport.</p>
 * @method string getKeyId() Obtain <p>The CMK designated for importing key material must be identical to the CMK specified in GetParametersForImport.</p>
 * @method void setKeyId(string $KeyId) Set <p>The CMK designated for importing key material must be identical to the CMK specified in GetParametersForImport.</p>
 * @method integer getValidTo() Obtain <p>Expiration time of the key material in unix timestamp. If unspecified or 0, the key material does not expire. If specified, the expiration time must be greater than the current time and supports up to 2147443200.</p>
 * @method void setValidTo(integer $ValidTo) Set <p>Expiration time of the key material in unix timestamp. If unspecified or 0, the key material does not expire. If specified, the expiration time must be greater than the current time and supports up to 2147443200.</p>
 */
class ImportKeyMaterialRequest extends AbstractModel
{
    /**
     * @var string <p>base64-encoded encrypted key material using the PublicKey returned by GetParametersForImport. For KMS in national cryptography version regions, the length requirement for imported key material is 128 bit. For KMS in FIPS 140-2 version regions, the length requirement for imported key material is 256 bit.</p>
     */
    public $EncryptedKeyMaterial;

    /**
     * @var string <p>Import token obtained by calling GetParametersForImport.</p>
     */
    public $ImportToken;

    /**
     * @var string <p>The CMK designated for importing key material must be identical to the CMK specified in GetParametersForImport.</p>
     */
    public $KeyId;

    /**
     * @var integer <p>Expiration time of the key material in unix timestamp. If unspecified or 0, the key material does not expire. If specified, the expiration time must be greater than the current time and supports up to 2147443200.</p>
     */
    public $ValidTo;

    /**
     * @param string $EncryptedKeyMaterial <p>base64-encoded encrypted key material using the PublicKey returned by GetParametersForImport. For KMS in national cryptography version regions, the length requirement for imported key material is 128 bit. For KMS in FIPS 140-2 version regions, the length requirement for imported key material is 256 bit.</p>
     * @param string $ImportToken <p>Import token obtained by calling GetParametersForImport.</p>
     * @param string $KeyId <p>The CMK designated for importing key material must be identical to the CMK specified in GetParametersForImport.</p>
     * @param integer $ValidTo <p>Expiration time of the key material in unix timestamp. If unspecified or 0, the key material does not expire. If specified, the expiration time must be greater than the current time and supports up to 2147443200.</p>
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
        if (array_key_exists("EncryptedKeyMaterial",$param) and $param["EncryptedKeyMaterial"] !== null) {
            $this->EncryptedKeyMaterial = $param["EncryptedKeyMaterial"];
        }

        if (array_key_exists("ImportToken",$param) and $param["ImportToken"] !== null) {
            $this->ImportToken = $param["ImportToken"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }
    }
}
