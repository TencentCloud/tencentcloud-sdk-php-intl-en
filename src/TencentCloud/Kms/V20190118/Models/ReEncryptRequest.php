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
 * ReEncrypt request structure.
 *
 * @method string getCiphertextBlob() Obtain Ciphertext to be re-encrypted
 * @method void setCiphertextBlob(string $CiphertextBlob) Set Ciphertext to be re-encrypted
 * @method string getDestinationKeyId() Obtain CMK used for re-encryption. If this parameter is empty, the ciphertext will be re-encrypted by using the original CMK (as long as the key is not rotated, the ciphertext will not be refreshed)
 * @method void setDestinationKeyId(string $DestinationKeyId) Set CMK used for re-encryption. If this parameter is empty, the ciphertext will be re-encrypted by using the original CMK (as long as the key is not rotated, the ciphertext will not be refreshed)
 * @method string getSourceEncryptionContext() Obtain JSON string of the key-value pair used during ciphertext encryption by `CiphertextBlob`. If not used during encryption, this parameter will be empty
 * @method void setSourceEncryptionContext(string $SourceEncryptionContext) Set JSON string of the key-value pair used during ciphertext encryption by `CiphertextBlob`. If not used during encryption, this parameter will be empty
 * @method string getDestinationEncryptionContext() Obtain JSON string of the key-value pair used during re-encryption. If this field is used, the same string should be entered when the returned new ciphertext is decrypted
 * @method void setDestinationEncryptionContext(string $DestinationEncryptionContext) Set JSON string of the key-value pair used during re-encryption. If this field is used, the same string should be entered when the returned new ciphertext is decrypted
 */
class ReEncryptRequest extends AbstractModel
{
    /**
     * @var string Ciphertext to be re-encrypted
     */
    public $CiphertextBlob;

    /**
     * @var string CMK used for re-encryption. If this parameter is empty, the ciphertext will be re-encrypted by using the original CMK (as long as the key is not rotated, the ciphertext will not be refreshed)
     */
    public $DestinationKeyId;

    /**
     * @var string JSON string of the key-value pair used during ciphertext encryption by `CiphertextBlob`. If not used during encryption, this parameter will be empty
     */
    public $SourceEncryptionContext;

    /**
     * @var string JSON string of the key-value pair used during re-encryption. If this field is used, the same string should be entered when the returned new ciphertext is decrypted
     */
    public $DestinationEncryptionContext;

    /**
     * @param string $CiphertextBlob Ciphertext to be re-encrypted
     * @param string $DestinationKeyId CMK used for re-encryption. If this parameter is empty, the ciphertext will be re-encrypted by using the original CMK (as long as the key is not rotated, the ciphertext will not be refreshed)
     * @param string $SourceEncryptionContext JSON string of the key-value pair used during ciphertext encryption by `CiphertextBlob`. If not used during encryption, this parameter will be empty
     * @param string $DestinationEncryptionContext JSON string of the key-value pair used during re-encryption. If this field is used, the same string should be entered when the returned new ciphertext is decrypted
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
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("DestinationKeyId",$param) and $param["DestinationKeyId"] !== null) {
            $this->DestinationKeyId = $param["DestinationKeyId"];
        }

        if (array_key_exists("SourceEncryptionContext",$param) and $param["SourceEncryptionContext"] !== null) {
            $this->SourceEncryptionContext = $param["SourceEncryptionContext"];
        }

        if (array_key_exists("DestinationEncryptionContext",$param) and $param["DestinationEncryptionContext"] !== null) {
            $this->DestinationEncryptionContext = $param["DestinationEncryptionContext"];
        }
    }
}
