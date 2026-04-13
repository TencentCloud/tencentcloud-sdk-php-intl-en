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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KMS key information
 *
 * @method string getKeyId() Obtain Specifies the KeyId for KMS instance encryption.
 * @method void setKeyId(string $KeyId) Set Specifies the KeyId for KMS instance encryption.
 * @method string getKeyAlias() Obtain Alias name of the KMS instance encryption Key.
 * @method void setKeyAlias(string $KeyAlias) Set Alias name of the KMS instance encryption Key.
 * @method string getDEKCipherTextBlob() Obtain Specifies the ciphertext of the instance encryption key DEK.
 * @method void setDEKCipherTextBlob(string $DEKCipherTextBlob) Set Specifies the ciphertext of the instance encryption key DEK.
 * @method integer getIsEnabled() Obtain Whether the key is enabled. valid values: 1 (enabled), 0 (disabled).
 * @method void setIsEnabled(integer $IsEnabled) Set Whether the key is enabled. valid values: 1 (enabled), 0 (disabled).
 * @method string getKeyRegion() Obtain Specifies the region of the KMS key.
 * @method void setKeyRegion(string $KeyRegion) Set Specifies the region of the KMS key.
 * @method string getCreateTime() Obtain Creation time of the DEK key.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the DEK key.
 * @method string getKMSClusterId() Obtain Specifies the Id of the KMS service cluster where the key resides. being empty indicates the key is in the default KMS cluster. a non-empty value indicates the key is in the specified KMS service cluster.
 * @method void setKMSClusterId(string $KMSClusterId) Set Specifies the Id of the KMS service cluster where the key resides. being empty indicates the key is in the default KMS cluster. a non-empty value indicates the key is in the specified KMS service cluster.
 */
class EncryptionKey extends AbstractModel
{
    /**
     * @var string Specifies the KeyId for KMS instance encryption.
     */
    public $KeyId;

    /**
     * @var string Alias name of the KMS instance encryption Key.
     */
    public $KeyAlias;

    /**
     * @var string Specifies the ciphertext of the instance encryption key DEK.
     */
    public $DEKCipherTextBlob;

    /**
     * @var integer Whether the key is enabled. valid values: 1 (enabled), 0 (disabled).
     */
    public $IsEnabled;

    /**
     * @var string Specifies the region of the KMS key.
     */
    public $KeyRegion;

    /**
     * @var string Creation time of the DEK key.
     */
    public $CreateTime;

    /**
     * @var string Specifies the Id of the KMS service cluster where the key resides. being empty indicates the key is in the default KMS cluster. a non-empty value indicates the key is in the specified KMS service cluster.
     */
    public $KMSClusterId;

    /**
     * @param string $KeyId Specifies the KeyId for KMS instance encryption.
     * @param string $KeyAlias Alias name of the KMS instance encryption Key.
     * @param string $DEKCipherTextBlob Specifies the ciphertext of the instance encryption key DEK.
     * @param integer $IsEnabled Whether the key is enabled. valid values: 1 (enabled), 0 (disabled).
     * @param string $KeyRegion Specifies the region of the KMS key.
     * @param string $CreateTime Creation time of the DEK key.
     * @param string $KMSClusterId Specifies the Id of the KMS service cluster where the key resides. being empty indicates the key is in the default KMS cluster. a non-empty value indicates the key is in the specified KMS service cluster.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyAlias",$param) and $param["KeyAlias"] !== null) {
            $this->KeyAlias = $param["KeyAlias"];
        }

        if (array_key_exists("DEKCipherTextBlob",$param) and $param["DEKCipherTextBlob"] !== null) {
            $this->DEKCipherTextBlob = $param["DEKCipherTextBlob"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("KMSClusterId",$param) and $param["KMSClusterId"] !== null) {
            $this->KMSClusterId = $param["KMSClusterId"];
        }
    }
}
