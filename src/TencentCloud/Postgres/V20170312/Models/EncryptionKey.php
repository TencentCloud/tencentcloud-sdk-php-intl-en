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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KMS key information
 *
 * @method string getKeyId() Obtain Encrypted KeyId of KMS instance
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setKeyId(string $KeyId) Set Encrypted KeyId of KMS instance
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getKeyAlias() Obtain Encryption key alias of KMS instance 
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setKeyAlias(string $KeyAlias) Set Encryption key alias of KMS instance 
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDEKCipherTextBlob() Obtain Instance DEK ciphertext
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDEKCipherTextBlob(string $DEKCipherTextBlob) Set Instance DEK ciphertext
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getIsEnabled() Obtain Whether the key is enabled. Valid values: `1` (yes), `0` (no)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIsEnabled(integer $IsEnabled) Set Whether the key is enabled. Valid values: `1` (yes), `0` (no)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getKeyRegion() Obtain Region where KMS key resides
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setKeyRegion(string $KeyRegion) Set Region where KMS key resides
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain DEK key creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set DEK key creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class EncryptionKey extends AbstractModel
{
    /**
     * @var string Encrypted KeyId of KMS instance
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $KeyId;

    /**
     * @var string Encryption key alias of KMS instance 
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $KeyAlias;

    /**
     * @var string Instance DEK ciphertext
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DEKCipherTextBlob;

    /**
     * @var integer Whether the key is enabled. Valid values: `1` (yes), `0` (no)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IsEnabled;

    /**
     * @var string Region where KMS key resides
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $KeyRegion;

    /**
     * @var string DEK key creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $KeyId Encrypted KeyId of KMS instance
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $KeyAlias Encryption key alias of KMS instance 
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $DEKCipherTextBlob Instance DEK ciphertext
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $IsEnabled Whether the key is enabled. Valid values: `1` (yes), `0` (no)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $KeyRegion Region where KMS key resides
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CreateTime DEK key creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
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
    }
}
