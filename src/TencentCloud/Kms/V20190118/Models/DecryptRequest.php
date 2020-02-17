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
 * @method string getCiphertextBlob() Obtain The ciphertext data to be decrypted.
 * @method void setCiphertextBlob(string $CiphertextBlob) Set The ciphertext data to be decrypted.
 * @method string getEncryptionContext() Obtain 
 * @method void setEncryptionContext(string $EncryptionContext) Set 
 */

/**
 *Decrypt request structure.
 */
class DecryptRequest extends AbstractModel
{
    /**
     * @var string The ciphertext data to be decrypted.
     */
    public $CiphertextBlob;

    /**
     * @var string 
     */
    public $EncryptionContext;
    /**
     * @param string $CiphertextBlob The ciphertext data to be decrypted.
     * @param string $EncryptionContext 
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

        if (array_key_exists("EncryptionContext",$param) and $param["EncryptionContext"] !== null) {
            $this->EncryptionContext = $param["EncryptionContext"];
        }
    }
}
