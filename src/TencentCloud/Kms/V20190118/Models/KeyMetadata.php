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
 * CMK attribute information
 *
 * @method string getKeyId() Obtain Globally unique CMK ID
 * @method void setKeyId(string $KeyId) Set Globally unique CMK ID
 * @method string getAlias() Obtain Alias that makes a key more recognizable and understandable
 * @method void setAlias(string $Alias) Set Alias that makes a key more recognizable and understandable
 * @method integer getCreateTime() Obtain Key creation time
 * @method void setCreateTime(integer $CreateTime) Set Key creation time
 * @method string getDescription() Obtain CMK description
 * @method void setDescription(string $Description) Set CMK description
 * @method string getKeyState() Obtain CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport, Archived.
 * @method void setKeyState(string $KeyState) Set CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport, Archived.
 * @method string getKeyUsage() Obtain CMK purpose. Valid values: `ENCRYPT_DECRYPT`, `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
 * @method void setKeyUsage(string $KeyUsage) Set CMK purpose. Valid values: `ENCRYPT_DECRYPT`, `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
 * @method integer getType() Obtain CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
 * @method void setType(integer $Type) Set CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
 * @method integer getCreatorUin() Obtain Creator
 * @method void setCreatorUin(integer $CreatorUin) Set Creator
 * @method boolean getKeyRotationEnabled() Obtain Whether key rotation is enabled
 * @method void setKeyRotationEnabled(boolean $KeyRotationEnabled) Set Whether key rotation is enabled
 * @method string getOwner() Obtain CMK creator. The value of this parameter is `user` if the CMK is created by the user, or the corresponding service name if it is created automatically by an authorized Tencent Cloud service.
 * @method void setOwner(string $Owner) Set CMK creator. The value of this parameter is `user` if the CMK is created by the user, or the corresponding service name if it is created automatically by an authorized Tencent Cloud service.
 * @method integer getNextRotateTime() Obtain Time of next rotation if key rotation is enabled
 * @method void setNextRotateTime(integer $NextRotateTime) Set Time of next rotation if key rotation is enabled
 * @method integer getDeletionDate() Obtain Scheduled deletion time
 * @method void setDeletionDate(integer $DeletionDate) Set Scheduled deletion time
 * @method string getOrigin() Obtain CMK key material type. TENCENT_KMS: created by KMS; EXTERNAL: imported by user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrigin(string $Origin) Set CMK key material type. TENCENT_KMS: created by KMS; EXTERNAL: imported by user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getValidTo() Obtain It's valid when `Origin` is `EXTERNAL`, indicating the expiration date of key material. 0 means valid forever.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidTo(integer $ValidTo) Set It's valid when `Origin` is `EXTERNAL`, indicating the expiration date of key material. 0 means valid forever.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceId() Obtain Resource ID in the format of `creatorUin/$creatorUin/$keyId`.
 * @method void setResourceId(string $ResourceId) Set Resource ID in the format of `creatorUin/$creatorUin/$keyId`.
 * @method string getHsmClusterId() Obtain ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHsmClusterId(string $HsmClusterId) Set ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class KeyMetadata extends AbstractModel
{
    /**
     * @var string Globally unique CMK ID
     */
    public $KeyId;

    /**
     * @var string Alias that makes a key more recognizable and understandable
     */
    public $Alias;

    /**
     * @var integer Key creation time
     */
    public $CreateTime;

    /**
     * @var string CMK description
     */
    public $Description;

    /**
     * @var string CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport, Archived.
     */
    public $KeyState;

    /**
     * @var string CMK purpose. Valid values: `ENCRYPT_DECRYPT`, `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
     */
    public $KeyUsage;

    /**
     * @var integer CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
     */
    public $Type;

    /**
     * @var integer Creator
     */
    public $CreatorUin;

    /**
     * @var boolean Whether key rotation is enabled
     */
    public $KeyRotationEnabled;

    /**
     * @var string CMK creator. The value of this parameter is `user` if the CMK is created by the user, or the corresponding service name if it is created automatically by an authorized Tencent Cloud service.
     */
    public $Owner;

    /**
     * @var integer Time of next rotation if key rotation is enabled
     */
    public $NextRotateTime;

    /**
     * @var integer Scheduled deletion time
     */
    public $DeletionDate;

    /**
     * @var string CMK key material type. TENCENT_KMS: created by KMS; EXTERNAL: imported by user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Origin;

    /**
     * @var integer It's valid when `Origin` is `EXTERNAL`, indicating the expiration date of key material. 0 means valid forever.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidTo;

    /**
     * @var string Resource ID in the format of `creatorUin/$creatorUin/$keyId`.
     */
    public $ResourceId;

    /**
     * @var string ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HsmClusterId;

    /**
     * @param string $KeyId Globally unique CMK ID
     * @param string $Alias Alias that makes a key more recognizable and understandable
     * @param integer $CreateTime Key creation time
     * @param string $Description CMK description
     * @param string $KeyState CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport, Archived.
     * @param string $KeyUsage CMK purpose. Valid values: `ENCRYPT_DECRYPT`, `ASYMMETRIC_DECRYPT_RSA_2048`, `ASYMMETRIC_DECRYPT_SM2`, `ASYMMETRIC_SIGN_VERIFY_SM2`, `ASYMMETRIC_SIGN_VERIFY_RSA_2048`, and `ASYMMETRIC_SIGN_VERIFY_ECC`.
     * @param integer $Type CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
     * @param integer $CreatorUin Creator
     * @param boolean $KeyRotationEnabled Whether key rotation is enabled
     * @param string $Owner CMK creator. The value of this parameter is `user` if the CMK is created by the user, or the corresponding service name if it is created automatically by an authorized Tencent Cloud service.
     * @param integer $NextRotateTime Time of next rotation if key rotation is enabled
     * @param integer $DeletionDate Scheduled deletion time
     * @param string $Origin CMK key material type. TENCENT_KMS: created by KMS; EXTERNAL: imported by user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ValidTo It's valid when `Origin` is `EXTERNAL`, indicating the expiration date of key material. 0 means valid forever.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceId Resource ID in the format of `creatorUin/$creatorUin/$keyId`.
     * @param string $HsmClusterId ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("KeyRotationEnabled",$param) and $param["KeyRotationEnabled"] !== null) {
            $this->KeyRotationEnabled = $param["KeyRotationEnabled"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("NextRotateTime",$param) and $param["NextRotateTime"] !== null) {
            $this->NextRotateTime = $param["NextRotateTime"];
        }

        if (array_key_exists("DeletionDate",$param) and $param["DeletionDate"] !== null) {
            $this->DeletionDate = $param["DeletionDate"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
