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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportKeyMaterial request structure.
 *
 * @method string getEncryptedKeyMaterial() Obtain Base64-encoded key material that encrypted with the `PublicKey` returned by `GetParametersForImport`. For the KMS of SM-CRYPTO version, the length of the key material should be 128 bits, while for KMS of FIPS-compliant version, the length should be 256 bits.
 * @method void setEncryptedKeyMaterial(string $EncryptedKeyMaterial) Set Base64-encoded key material that encrypted with the `PublicKey` returned by `GetParametersForImport`. For the KMS of SM-CRYPTO version, the length of the key material should be 128 bits, while for KMS of FIPS-compliant version, the length should be 256 bits.
 * @method string getImportToken() Obtain Import token obtained by calling `GetParametersForImport`.
 * @method void setImportToken(string $ImportToken) Set Import token obtained by calling `GetParametersForImport`.
 * @method string getKeyId() Obtain Specifies the CMK into which to import key material, which must be the same as the one specified by `GetParametersForImport`.
 * @method void setKeyId(string $KeyId) Set Specifies the CMK into which to import key material, which must be the same as the one specified by `GetParametersForImport`.
 * @method integer getValidTo() Obtain Unix timestamp of the key material's expiration time. If this value is empty or 0, the key material will never expire. To specify the expiration time, it should be later than the current time. Maximum value: 2147443200.
 * @method void setValidTo(integer $ValidTo) Set Unix timestamp of the key material's expiration time. If this value is empty or 0, the key material will never expire. To specify the expiration time, it should be later than the current time. Maximum value: 2147443200.
 */
class ImportKeyMaterialRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded key material that encrypted with the `PublicKey` returned by `GetParametersForImport`. For the KMS of SM-CRYPTO version, the length of the key material should be 128 bits, while for KMS of FIPS-compliant version, the length should be 256 bits.
     */
    public $EncryptedKeyMaterial;

    /**
     * @var string Import token obtained by calling `GetParametersForImport`.
     */
    public $ImportToken;

    /**
     * @var string Specifies the CMK into which to import key material, which must be the same as the one specified by `GetParametersForImport`.
     */
    public $KeyId;

    /**
     * @var integer Unix timestamp of the key material's expiration time. If this value is empty or 0, the key material will never expire. To specify the expiration time, it should be later than the current time. Maximum value: 2147443200.
     */
    public $ValidTo;

    /**
     * @param string $EncryptedKeyMaterial Base64-encoded key material that encrypted with the `PublicKey` returned by `GetParametersForImport`. For the KMS of SM-CRYPTO version, the length of the key material should be 128 bits, while for KMS of FIPS-compliant version, the length should be 256 bits.
     * @param string $ImportToken Import token obtained by calling `GetParametersForImport`.
     * @param string $KeyId Specifies the CMK into which to import key material, which must be the same as the one specified by `GetParametersForImport`.
     * @param integer $ValidTo Unix timestamp of the key material's expiration time. If this value is empty or 0, the key material will never expire. To specify the expiration time, it should be later than the current time. Maximum value: 2147443200.
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
