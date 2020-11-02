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
 * Basic information of the Secret.
 *
 * @method string getSecretName() Obtain Name of the Secret.
 * @method void setSecretName(string $SecretName) Set Name of the Secret.
 * @method string getDescription() Obtain Description of the Secret.
 * @method void setDescription(string $Description) Set Description of the Secret.
 * @method string getKmsKeyId() Obtain KMS Key ID used for Secret encryption.
 * @method void setKmsKeyId(string $KmsKeyId) Set KMS Key ID used for Secret encryption.
 * @method integer getCreateUin() Obtain Creator UIN.
 * @method void setCreateUin(integer $CreateUin) Set Creator UIN.
 * @method string getStatus() Obtain Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
 * @method void setStatus(string $Status) Set Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
 * @method integer getDeleteTime() Obtain Secret deletion time, formatted as a Unix timestamp. This parameter is only applicable for Secrets in `PendingDelete` status.
 * @method void setDeleteTime(integer $DeleteTime) Set Secret deletion time, formatted as a Unix timestamp. This parameter is only applicable for Secrets in `PendingDelete` status.
 * @method integer getCreateTime() Obtain Secret creation time, formatted as a Unix timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Secret creation time, formatted as a Unix timestamp.
 * @method string getKmsKeyType() Obtain Type of KMS CMK used for Secret encryption. `DEFAULT`: default key created by SecretsManager; `CUSTOMER`: user-specified key.
 * @method void setKmsKeyType(string $KmsKeyType) Set Type of KMS CMK used for Secret encryption. `DEFAULT`: default key created by SecretsManager; `CUSTOMER`: user-specified key.
 */
class SecretMetadata extends AbstractModel
{
    /**
     * @var string Name of the Secret.
     */
    public $SecretName;

    /**
     * @var string Description of the Secret.
     */
    public $Description;

    /**
     * @var string KMS Key ID used for Secret encryption.
     */
    public $KmsKeyId;

    /**
     * @var integer Creator UIN.
     */
    public $CreateUin;

    /**
     * @var string Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
     */
    public $Status;

    /**
     * @var integer Secret deletion time, formatted as a Unix timestamp. This parameter is only applicable for Secrets in `PendingDelete` status.
     */
    public $DeleteTime;

    /**
     * @var integer Secret creation time, formatted as a Unix timestamp.
     */
    public $CreateTime;

    /**
     * @var string Type of KMS CMK used for Secret encryption. `DEFAULT`: default key created by SecretsManager; `CUSTOMER`: user-specified key.
     */
    public $KmsKeyType;

    /**
     * @param string $SecretName Name of the Secret.
     * @param string $Description Description of the Secret.
     * @param string $KmsKeyId KMS Key ID used for Secret encryption.
     * @param integer $CreateUin Creator UIN.
     * @param string $Status Secret status, which can be `Enabled`, `Disabled`, or `PendingDelete`.
     * @param integer $DeleteTime Secret deletion time, formatted as a Unix timestamp. This parameter is only applicable for Secrets in `PendingDelete` status.
     * @param integer $CreateTime Secret creation time, formatted as a Unix timestamp.
     * @param string $KmsKeyType Type of KMS CMK used for Secret encryption. `DEFAULT`: default key created by SecretsManager; `CUSTOMER`: user-specified key.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("KmsKeyType",$param) and $param["KmsKeyType"] !== null) {
            $this->KmsKeyType = $param["KmsKeyType"];
        }
    }
}
