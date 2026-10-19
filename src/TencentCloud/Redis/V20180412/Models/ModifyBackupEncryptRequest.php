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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupEncrypt request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the Redis console and copy it from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the Redis console and copy it from the instance list.</p>
 * @method boolean getBackupEncrypt() Obtain <p>Whether backup encryption is enabled.</p><p>Default value: false</p>
 * @method void setBackupEncrypt(boolean $BackupEncrypt) Set <p>Whether backup encryption is enabled.</p><p>Default value: false</p>
 * @method integer getEncryptKeyType() Obtain <p>Encryption key type.</p><p>Enumeration value:</p><ul><li>0: Tencent Cloud hosted (default)</li><li>1: User-customized KMS key</li></ul><p>Default value: 0</p>
 * @method void setEncryptKeyType(integer $EncryptKeyType) Set <p>Encryption key type.</p><p>Enumeration value:</p><ul><li>0: Tencent Cloud hosted (default)</li><li>1: User-customized KMS key</li></ul><p>Default value: 0</p>
 * @method string getKmsKeyId() Obtain <p>Key ID of KMS.</p><p>Parameter format: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method void setKmsKeyId(string $KmsKeyId) Set <p>Key ID of KMS.</p><p>Parameter format: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method string getKmsRegion() Obtain <p>Regional information.</p><p>Parameter format: ap-xxxx</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/573/34406?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">Supported region list for KMS</a></p>
 * @method void setKmsRegion(string $KmsRegion) Set <p>Regional information.</p><p>Parameter format: ap-xxxx</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/573/34406?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">Supported region list for KMS</a></p>
 */
class ModifyBackupEncryptRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the Redis console and copy it from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>Whether backup encryption is enabled.</p><p>Default value: false</p>
     */
    public $BackupEncrypt;

    /**
     * @var integer <p>Encryption key type.</p><p>Enumeration value:</p><ul><li>0: Tencent Cloud hosted (default)</li><li>1: User-customized KMS key</li></ul><p>Default value: 0</p>
     */
    public $EncryptKeyType;

    /**
     * @var string <p>Key ID of KMS.</p><p>Parameter format: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     */
    public $KmsKeyId;

    /**
     * @var string <p>Regional information.</p><p>Parameter format: ap-xxxx</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/573/34406?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">Supported region list for KMS</a></p>
     */
    public $KmsRegion;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the Redis console and copy it from the instance list.</p>
     * @param boolean $BackupEncrypt <p>Whether backup encryption is enabled.</p><p>Default value: false</p>
     * @param integer $EncryptKeyType <p>Encryption key type.</p><p>Enumeration value:</p><ul><li>0: Tencent Cloud hosted (default)</li><li>1: User-customized KMS key</li></ul><p>Default value: 0</p>
     * @param string $KmsKeyId <p>Key ID of KMS.</p><p>Parameter format: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     * @param string $KmsRegion <p>Regional information.</p><p>Parameter format: ap-xxxx</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/573/34406?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">Supported region list for KMS</a></p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupEncrypt",$param) and $param["BackupEncrypt"] !== null) {
            $this->BackupEncrypt = $param["BackupEncrypt"];
        }

        if (array_key_exists("EncryptKeyType",$param) and $param["EncryptKeyType"] !== null) {
            $this->EncryptKeyType = $param["EncryptKeyType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }
    }
}
