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
 * CreateProductSecret request structure.
 *
 * @method string getSecretName() Obtain Credential name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens, and underscores and must begin with a letter or digit.
 * @method void setSecretName(string $SecretName) Set Credential name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens, and underscores and must begin with a letter or digit.
 * @method string getUserNamePrefix() Obtain Prefix of the user account name, which is specified by you and can contain up to 8 characters.
Supported character sets include:
Digits: [0, 9].
Lowercase letters: [a, z].
Uppercase letters: [A, Z].
Special symbols: underscore.
The prefix must begin with a letter.
 * @method void setUserNamePrefix(string $UserNamePrefix) Set Prefix of the user account name, which is specified by you and can contain up to 8 characters.
Supported character sets include:
Digits: [0, 9].
Lowercase letters: [a, z].
Uppercase letters: [A, Z].
Special symbols: underscore.
The prefix must begin with a letter.
 * @method string getProductName() Obtain Name of the Tencent Cloud service bound to the credential, such as `Mysql`. The `DescribeSupportedProducts` API can be used to get the names of the supported Tencent Cloud services.
 * @method void setProductName(string $ProductName) Set Name of the Tencent Cloud service bound to the credential, such as `Mysql`. The `DescribeSupportedProducts` API can be used to get the names of the supported Tencent Cloud services.
 * @method string getInstanceID() Obtain Tencent Cloud service instance ID.
 * @method void setInstanceID(string $InstanceID) Set Tencent Cloud service instance ID.
 * @method array getDomains() Obtain Domain name of the account in the form of IP. You can enter `%`.
 * @method void setDomains(array $Domains) Set Domain name of the account in the form of IP. You can enter `%`.
 * @method array getPrivilegesList() Obtain List of permissions that need to be granted when the credential is bound to a Tencent Cloud service.
 * @method void setPrivilegesList(array $PrivilegesList) Set List of permissions that need to be granted when the credential is bound to a Tencent Cloud service.
 * @method string getDescription() Obtain Description, which is used to describe the purpose in detail and can contain up to 2,048 bytes.
 * @method void setDescription(string $Description) Set Description, which is used to describe the purpose in detail and can contain up to 2,048 bytes.
 * @method string getKmsKeyId() Obtain Specifies the KMS CMK that encrypts the credential.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
 * @method void setKmsKeyId(string $KmsKeyId) Set Specifies the KMS CMK that encrypts the credential.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
 * @method array getTags() Obtain List of tags.
 * @method void setTags(array $Tags) Set List of tags.
 * @method string getRotationBeginTime() Obtain User-Defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `True`, this parameter is required.
 * @method void setRotationBeginTime(string $RotationBeginTime) Set User-Defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `True`, this parameter is required.
 * @method boolean getEnableRotation() Obtain Specifies whether to enable rotation
True - enable
False - do not enable
If this parameter is not specified, `False` will be used by default.
 * @method void setEnableRotation(boolean $EnableRotation) Set Specifies whether to enable rotation
True - enable
False - do not enable
If this parameter is not specified, `False` will be used by default.
 * @method integer getRotationFrequency() Obtain Rotation frequency in days. Default value: 1 day.
 * @method void setRotationFrequency(integer $RotationFrequency) Set Rotation frequency in days. Default value: 1 day.
 */
class CreateProductSecretRequest extends AbstractModel
{
    /**
     * @var string Credential name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens, and underscores and must begin with a letter or digit.
     */
    public $SecretName;

    /**
     * @var string Prefix of the user account name, which is specified by you and can contain up to 8 characters.
Supported character sets include:
Digits: [0, 9].
Lowercase letters: [a, z].
Uppercase letters: [A, Z].
Special symbols: underscore.
The prefix must begin with a letter.
     */
    public $UserNamePrefix;

    /**
     * @var string Name of the Tencent Cloud service bound to the credential, such as `Mysql`. The `DescribeSupportedProducts` API can be used to get the names of the supported Tencent Cloud services.
     */
    public $ProductName;

    /**
     * @var string Tencent Cloud service instance ID.
     */
    public $InstanceID;

    /**
     * @var array Domain name of the account in the form of IP. You can enter `%`.
     */
    public $Domains;

    /**
     * @var array List of permissions that need to be granted when the credential is bound to a Tencent Cloud service.
     */
    public $PrivilegesList;

    /**
     * @var string Description, which is used to describe the purpose in detail and can contain up to 2,048 bytes.
     */
    public $Description;

    /**
     * @var string Specifies the KMS CMK that encrypts the credential.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
     */
    public $KmsKeyId;

    /**
     * @var array List of tags.
     */
    public $Tags;

    /**
     * @var string User-Defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `True`, this parameter is required.
     */
    public $RotationBeginTime;

    /**
     * @var boolean Specifies whether to enable rotation
True - enable
False - do not enable
If this parameter is not specified, `False` will be used by default.
     */
    public $EnableRotation;

    /**
     * @var integer Rotation frequency in days. Default value: 1 day.
     */
    public $RotationFrequency;

    /**
     * @param string $SecretName Credential name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens, and underscores and must begin with a letter or digit.
     * @param string $UserNamePrefix Prefix of the user account name, which is specified by you and can contain up to 8 characters.
Supported character sets include:
Digits: [0, 9].
Lowercase letters: [a, z].
Uppercase letters: [A, Z].
Special symbols: underscore.
The prefix must begin with a letter.
     * @param string $ProductName Name of the Tencent Cloud service bound to the credential, such as `Mysql`. The `DescribeSupportedProducts` API can be used to get the names of the supported Tencent Cloud services.
     * @param string $InstanceID Tencent Cloud service instance ID.
     * @param array $Domains Domain name of the account in the form of IP. You can enter `%`.
     * @param array $PrivilegesList List of permissions that need to be granted when the credential is bound to a Tencent Cloud service.
     * @param string $Description Description, which is used to describe the purpose in detail and can contain up to 2,048 bytes.
     * @param string $KmsKeyId Specifies the KMS CMK that encrypts the credential.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
     * @param array $Tags List of tags.
     * @param string $RotationBeginTime User-Defined rotation start time in the format of 2006-01-02 15:04:05.
When `EnableRotation` is `True`, this parameter is required.
     * @param boolean $EnableRotation Specifies whether to enable rotation
True - enable
False - do not enable
If this parameter is not specified, `False` will be used by default.
     * @param integer $RotationFrequency Rotation frequency in days. Default value: 1 day.
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

        if (array_key_exists("UserNamePrefix",$param) and $param["UserNamePrefix"] !== null) {
            $this->UserNamePrefix = $param["UserNamePrefix"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("PrivilegesList",$param) and $param["PrivilegesList"] !== null) {
            $this->PrivilegesList = [];
            foreach ($param["PrivilegesList"] as $key => $value){
                $obj = new ProductPrivilegeUnit();
                $obj->deserialize($value);
                array_push($this->PrivilegesList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RotationBeginTime",$param) and $param["RotationBeginTime"] !== null) {
            $this->RotationBeginTime = $param["RotationBeginTime"];
        }

        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("RotationFrequency",$param) and $param["RotationFrequency"] !== null) {
            $this->RotationFrequency = $param["RotationFrequency"];
        }
    }
}
