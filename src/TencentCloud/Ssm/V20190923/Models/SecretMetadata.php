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
 * @method string getSecretName() Obtain Credential name
 * @method void setSecretName(string $SecretName) Set Credential name
 * @method string getDescription() Obtain Credential description
 * @method void setDescription(string $Description) Set Credential description
 * @method string getKmsKeyId() Obtain KMS `KeyId` used to encrypt the credential
 * @method void setKmsKeyId(string $KmsKeyId) Set KMS `KeyId` used to encrypt the credential
 * @method integer getCreateUin() Obtain Creator UIN
 * @method void setCreateUin(integer $CreateUin) Set Creator UIN
 * @method string getStatus() Obtain Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
 * @method void setStatus(string $Status) Set Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
 * @method integer getDeleteTime() Obtain Credential deletion date, which takes effect for credentials in `PendingDelete` status and is in UNIX timestamp format
 * @method void setDeleteTime(integer $DeleteTime) Set Credential deletion date, which takes effect for credentials in `PendingDelete` status and is in UNIX timestamp format
 * @method integer getCreateTime() Obtain Credential creation time in UNIX timestamp format
 * @method void setCreateTime(integer $CreateTime) Set Credential creation time in UNIX timestamp format
 * @method string getKmsKeyType() Obtain Type of the KMS CMK used to encrypt the credential. `DEFAULT` represents the default key created by Secrets Manager, and `CUSTOMER` represents the user-specified key
 * @method void setKmsKeyType(string $KmsKeyType) Set Type of the KMS CMK used to encrypt the credential. `DEFAULT` represents the default key created by Secrets Manager, and `CUSTOMER` represents the user-specified key
 * @method integer getRotationStatus() Obtain 1: enable rotation; 0: disable rotation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRotationStatus(integer $RotationStatus) Set 1: enable rotation; 0: disable rotation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNextRotationTime() Obtain Start time of the next rotation in UNIX timestamp format
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNextRotationTime(integer $NextRotationTime) Set Start time of the next rotation in UNIX timestamp format
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSecretType() Obtain 0: user-defined credential; 1: Tencent Cloud service credential.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecretType(integer $SecretType) Set 0: user-defined credential; 1: Tencent Cloud service credential.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProductName() Obtain Tencent Cloud service name, which takes effect only when `SecretType` is 1 (Tencent Cloud service credential)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Tencent Cloud service name, which takes effect only when `SecretType` is 1 (Tencent Cloud service credential)
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SecretMetadata extends AbstractModel
{
    /**
     * @var string Credential name
     */
    public $SecretName;

    /**
     * @var string Credential description
     */
    public $Description;

    /**
     * @var string KMS `KeyId` used to encrypt the credential
     */
    public $KmsKeyId;

    /**
     * @var integer Creator UIN
     */
    public $CreateUin;

    /**
     * @var string Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
     */
    public $Status;

    /**
     * @var integer Credential deletion date, which takes effect for credentials in `PendingDelete` status and is in UNIX timestamp format
     */
    public $DeleteTime;

    /**
     * @var integer Credential creation time in UNIX timestamp format
     */
    public $CreateTime;

    /**
     * @var string Type of the KMS CMK used to encrypt the credential. `DEFAULT` represents the default key created by Secrets Manager, and `CUSTOMER` represents the user-specified key
     */
    public $KmsKeyType;

    /**
     * @var integer 1: enable rotation; 0: disable rotation
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RotationStatus;

    /**
     * @var integer Start time of the next rotation in UNIX timestamp format
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NextRotationTime;

    /**
     * @var integer 0: user-defined credential; 1: Tencent Cloud service credential.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecretType;

    /**
     * @var string Tencent Cloud service name, which takes effect only when `SecretType` is 1 (Tencent Cloud service credential)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @param string $SecretName Credential name
     * @param string $Description Credential description
     * @param string $KmsKeyId KMS `KeyId` used to encrypt the credential
     * @param integer $CreateUin Creator UIN
     * @param string $Status Credential status: Enabled, Disabled, PendingDelete, Creating, Failed.
     * @param integer $DeleteTime Credential deletion date, which takes effect for credentials in `PendingDelete` status and is in UNIX timestamp format
     * @param integer $CreateTime Credential creation time in UNIX timestamp format
     * @param string $KmsKeyType Type of the KMS CMK used to encrypt the credential. `DEFAULT` represents the default key created by Secrets Manager, and `CUSTOMER` represents the user-specified key
     * @param integer $RotationStatus 1: enable rotation; 0: disable rotation
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NextRotationTime Start time of the next rotation in UNIX timestamp format
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SecretType 0: user-defined credential; 1: Tencent Cloud service credential.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProductName Tencent Cloud service name, which takes effect only when `SecretType` is 1 (Tencent Cloud service credential)
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("RotationStatus",$param) and $param["RotationStatus"] !== null) {
            $this->RotationStatus = $param["RotationStatus"];
        }

        if (array_key_exists("NextRotationTime",$param) and $param["NextRotationTime"] !== null) {
            $this->NextRotationTime = $param["NextRotationTime"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
