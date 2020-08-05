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
 * @method string getKeyId() Obtain 
 * @method void setKeyId(string $KeyId) Set 
 * @method string getAlias() Obtain 
 * @method void setAlias(string $Alias) Set 
 * @method integer getCreateTime() Obtain 
 * @method void setCreateTime(integer $CreateTime) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method string getKeyState() Obtain CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport.
 * @method void setKeyState(string $KeyState) Set CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport.
 * @method string getKeyUsage() Obtain CMK purpose. Valid values: ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2
 * @method void setKeyUsage(string $KeyUsage) Set CMK purpose. Valid values: ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2
 * @method integer getType() Obtain CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
 * @method void setType(integer $Type) Set CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
 * @method integer getCreatorUin() Obtain 
 * @method void setCreatorUin(integer $CreatorUin) Set 
 * @method boolean getKeyRotationEnabled() Obtain 
 * @method void setKeyRotationEnabled(boolean $KeyRotationEnabled) Set 
 * @method string getOwner() Obtain 
 * @method void setOwner(string $Owner) Set 
 * @method integer getNextRotateTime() Obtain 
 * @method void setNextRotateTime(integer $NextRotateTime) Set 
 * @method integer getDeletionDate() Obtain 
 * @method void setDeletionDate(integer $DeletionDate) Set 
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
 */
class KeyMetadata extends AbstractModel
{
    /**
     * @var string 
     */
    public $KeyId;

    /**
     * @var string 
     */
    public $Alias;

    /**
     * @var integer 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport.
     */
    public $KeyState;

    /**
     * @var string CMK purpose. Valid values: ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2
     */
    public $KeyUsage;

    /**
     * @var integer CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
     */
    public $Type;

    /**
     * @var integer 
     */
    public $CreatorUin;

    /**
     * @var boolean 
     */
    public $KeyRotationEnabled;

    /**
     * @var string 
     */
    public $Owner;

    /**
     * @var integer 
     */
    public $NextRotateTime;

    /**
     * @var integer 
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
     * @param string $KeyId 
     * @param string $Alias 
     * @param integer $CreateTime 
     * @param string $Description 
     * @param string $KeyState CMK status. Valid values: Enabled, Disabled, PendingDelete, PendingImport.
     * @param string $KeyUsage CMK purpose. Valid values: ENCRYPT_DECRYPT, ASYMMETRIC_DECRYPT_RSA_2048, ASYMMETRIC_DECRYPT_SM2
     * @param integer $Type CMK type. 2: FIPS-compliant; 4: SM-CRYPTO
     * @param integer $CreatorUin 
     * @param boolean $KeyRotationEnabled 
     * @param string $Owner 
     * @param integer $NextRotateTime 
     * @param integer $DeletionDate 
     * @param string $Origin CMK key material type. TENCENT_KMS: created by KMS; EXTERNAL: imported by user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ValidTo It's valid when `Origin` is `EXTERNAL`, indicating the expiration date of key material. 0 means valid forever.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceId Resource ID in the format of `creatorUin/$creatorUin/$keyId`.
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
    }
}
