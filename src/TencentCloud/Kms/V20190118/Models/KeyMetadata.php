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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CMK attribute information
 *
 * @method string getKeyId() Obtain <p>Globally unique ID of the CMK.</p>
 * @method void setKeyId(string $KeyId) Set <p>Globally unique ID of the CMK.</p>
 * @method string getAlias() Obtain <p>An alias name as a key that is easier to identify and understand</p>
 * @method void setAlias(string $Alias) Set <p>An alias name as a key that is easier to identify and understand</p>
 * @method integer getCreateTime() Obtain <p>Key creation time</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Key creation time</p>
 * @method string getDescription() Obtain <p>Description of the CMK.</p>
 * @method void setDescription(string $Description) Set <p>Description of the CMK.</p>
 * @method string getKeyState() Obtain <p>CMK state, value: Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
 * @method void setKeyState(string $KeyState) Set <p>CMK state, value: Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
 * @method string getKeyUsage() Obtain <p>CMK purpose. Value: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
 * @method void setKeyUsage(string $KeyUsage) Set <p>CMK purpose. Value: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
 * @method integer getType() Obtain <p>CMK type. 2 means compliant with FIPS 140-2 standard. 4 means compliant with national cryptography standards.</p><p>Enumeration value:</p><ul><li>2: Complies with FIPS 140-2 standard</li><li>4: Complies with national cryptography standards</li></ul>
 * @method void setType(integer $Type) Set <p>CMK type. 2 means compliant with FIPS 140-2 standard. 4 means compliant with national cryptography standards.</p><p>Enumeration value:</p><ul><li>2: Complies with FIPS 140-2 standard</li><li>4: Complies with national cryptography standards</li></ul>
 * @method integer getCreatorUin() Obtain <p>Creator.</p>
 * @method void setCreatorUin(integer $CreatorUin) Set <p>Creator.</p>
 * @method boolean getKeyRotationEnabled() Obtain <p>Is key rotation function enabled?</p>
 * @method void setKeyRotationEnabled(boolean $KeyRotationEnabled) Set <p>Is key rotation function enabled?</p>
 * @method string getOwner() Obtain <p>Creator of the CMK. For user-created CMKs, the value is user. For CMKs auto-created by authorized Cloud services, the value is the corresponding product name.</p>
 * @method void setOwner(string $Owner) Set <p>Creator of the CMK. For user-created CMKs, the value is user. For CMKs auto-created by authorized Cloud services, the value is the corresponding product name.</p>
 * @method integer getNextRotateTime() Obtain <p>The time when the next rotation occurs with key rotation enabled</p>
 * @method void setNextRotateTime(integer $NextRotateTime) Set <p>The time when the next rotation occurs with key rotation enabled</p>
 * @method integer getDeletionDate() Obtain <p>The time when schedule deletion</p>
 * @method void setDeletionDate(integer $DeletionDate) Set <p>The time when schedule deletion</p>
 * @method string getOrigin() Obtain <p>CMK key material type. TENCENT_KMS for those created by KMS, EXTERNAL for user import.</p>
 * @method void setOrigin(string $Origin) Set <p>CMK key material type. TENCENT_KMS for those created by KMS, EXTERNAL for user import.</p>
 * @method integer getValidTo() Obtain <p>Valid when Origin is EXTERNAL. Indicates the expiration date of the key material. 0 means never expire.</p>
 * @method void setValidTo(integer $ValidTo) Set <p>Valid when Origin is EXTERNAL. Indicates the expiration date of the key material. 0 means never expire.</p>
 * @method string getResourceId() Obtain <p>Resource ID, format: creatorUin/$creatorUin/$keyId</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID, format: creatorUin/$creatorUin/$keyId</p>
 * @method string getHsmClusterId() Obtain <p>HSM Cluster ID (only applicable to KMS exclusive/managed service instance)</p>
 * @method void setHsmClusterId(string $HsmClusterId) Set <p>HSM Cluster ID (only applicable to KMS exclusive/managed service instance)</p>
 * @method integer getRotateDays() Obtain <p>Key rotation cycle (days)</p>
 * @method void setRotateDays(integer $RotateDays) Set <p>Key rotation cycle (days)</p>
 * @method integer getLastRotateTime() Obtain <p>Last rotation time (Unix timestamp).</p>
 * @method void setLastRotateTime(integer $LastRotateTime) Set <p>Last rotation time (Unix timestamp).</p>
 * @method integer getIsSyncReplica() Obtain <p>Whether the key is the primary replica. 0: primary replica, 1: synced replica.</p>
 * @method void setIsSyncReplica(integer $IsSyncReplica) Set <p>Whether the key is the primary replica. 0: primary replica, 1: synced replica.</p>
 * @method string getSourceRegion() Obtain <p>Synchronous original region</p>
 * @method void setSourceRegion(string $SourceRegion) Set <p>Synchronous original region</p>
 * @method integer getSyncStatus() Obtain <p>Key synchronization state: 0: unsynced, 1: synced successfully, 2: synchronization failed, 3: syncing.</p>
 * @method void setSyncStatus(integer $SyncStatus) Set <p>Key synchronization state: 0: unsynced, 1: synced successfully, 2: synchronization failed, 3: syncing.</p>
 * @method string getSyncMessages() Obtain <p>Synchronous result description</p>
 * @method void setSyncMessages(string $SyncMessages) Set <p>Synchronous result description</p>
 * @method integer getSyncStartTime() Obtain <p>Start time of synchronization</p>
 * @method void setSyncStartTime(integer $SyncStartTime) Set <p>Start time of synchronization</p>
 * @method integer getSyncEndTime() Obtain <p>Synchronous end time</p>
 * @method void setSyncEndTime(integer $SyncEndTime) Set <p>Synchronous end time</p>
 * @method string getSourceHsmClusterId() Obtain <p>Synchronous original cluster. If empty, it is a public cloud public cluster.</p>
 * @method void setSourceHsmClusterId(string $SourceHsmClusterId) Set <p>Synchronous original cluster. If empty, it is a public cloud public cluster.</p>
 * @method integer getAccountAppId() Obtain <p>Member account appId</p>
 * @method void setAccountAppId(integer $AccountAppId) Set <p>Member account appId</p>
 * @method integer getAccountUin() Obtain <p>member account uin</p>
 * @method void setAccountUin(integer $AccountUin) Set <p>member account uin</p>
 * @method string getAccountName() Obtain <p>Member account name</p>
 * @method void setAccountName(string $AccountName) Set <p>Member account name</p>
 */
class KeyMetadata extends AbstractModel
{
    /**
     * @var string <p>Globally unique ID of the CMK.</p>
     */
    public $KeyId;

    /**
     * @var string <p>An alias name as a key that is easier to identify and understand</p>
     */
    public $Alias;

    /**
     * @var integer <p>Key creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Description of the CMK.</p>
     */
    public $Description;

    /**
     * @var string <p>CMK state, value: Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
     */
    public $KeyState;

    /**
     * @var string <p>CMK purpose. Value: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
     */
    public $KeyUsage;

    /**
     * @var integer <p>CMK type. 2 means compliant with FIPS 140-2 standard. 4 means compliant with national cryptography standards.</p><p>Enumeration value:</p><ul><li>2: Complies with FIPS 140-2 standard</li><li>4: Complies with national cryptography standards</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Creator.</p>
     */
    public $CreatorUin;

    /**
     * @var boolean <p>Is key rotation function enabled?</p>
     */
    public $KeyRotationEnabled;

    /**
     * @var string <p>Creator of the CMK. For user-created CMKs, the value is user. For CMKs auto-created by authorized Cloud services, the value is the corresponding product name.</p>
     */
    public $Owner;

    /**
     * @var integer <p>The time when the next rotation occurs with key rotation enabled</p>
     */
    public $NextRotateTime;

    /**
     * @var integer <p>The time when schedule deletion</p>
     */
    public $DeletionDate;

    /**
     * @var string <p>CMK key material type. TENCENT_KMS for those created by KMS, EXTERNAL for user import.</p>
     */
    public $Origin;

    /**
     * @var integer <p>Valid when Origin is EXTERNAL. Indicates the expiration date of the key material. 0 means never expire.</p>
     */
    public $ValidTo;

    /**
     * @var string <p>Resource ID, format: creatorUin/$creatorUin/$keyId</p>
     */
    public $ResourceId;

    /**
     * @var string <p>HSM Cluster ID (only applicable to KMS exclusive/managed service instance)</p>
     */
    public $HsmClusterId;

    /**
     * @var integer <p>Key rotation cycle (days)</p>
     */
    public $RotateDays;

    /**
     * @var integer <p>Last rotation time (Unix timestamp).</p>
     */
    public $LastRotateTime;

    /**
     * @var integer <p>Whether the key is the primary replica. 0: primary replica, 1: synced replica.</p>
     */
    public $IsSyncReplica;

    /**
     * @var string <p>Synchronous original region</p>
     */
    public $SourceRegion;

    /**
     * @var integer <p>Key synchronization state: 0: unsynced, 1: synced successfully, 2: synchronization failed, 3: syncing.</p>
     */
    public $SyncStatus;

    /**
     * @var string <p>Synchronous result description</p>
     */
    public $SyncMessages;

    /**
     * @var integer <p>Start time of synchronization</p>
     */
    public $SyncStartTime;

    /**
     * @var integer <p>Synchronous end time</p>
     */
    public $SyncEndTime;

    /**
     * @var string <p>Synchronous original cluster. If empty, it is a public cloud public cluster.</p>
     */
    public $SourceHsmClusterId;

    /**
     * @var integer <p>Member account appId</p>
     */
    public $AccountAppId;

    /**
     * @var integer <p>member account uin</p>
     */
    public $AccountUin;

    /**
     * @var string <p>Member account name</p>
     */
    public $AccountName;

    /**
     * @param string $KeyId <p>Globally unique ID of the CMK.</p>
     * @param string $Alias <p>An alias name as a key that is easier to identify and understand</p>
     * @param integer $CreateTime <p>Key creation time</p>
     * @param string $Description <p>Description of the CMK.</p>
     * @param string $KeyState <p>CMK state, value: Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
     * @param string $KeyUsage <p>CMK purpose. Value: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
     * @param integer $Type <p>CMK type. 2 means compliant with FIPS 140-2 standard. 4 means compliant with national cryptography standards.</p><p>Enumeration value:</p><ul><li>2: Complies with FIPS 140-2 standard</li><li>4: Complies with national cryptography standards</li></ul>
     * @param integer $CreatorUin <p>Creator.</p>
     * @param boolean $KeyRotationEnabled <p>Is key rotation function enabled?</p>
     * @param string $Owner <p>Creator of the CMK. For user-created CMKs, the value is user. For CMKs auto-created by authorized Cloud services, the value is the corresponding product name.</p>
     * @param integer $NextRotateTime <p>The time when the next rotation occurs with key rotation enabled</p>
     * @param integer $DeletionDate <p>The time when schedule deletion</p>
     * @param string $Origin <p>CMK key material type. TENCENT_KMS for those created by KMS, EXTERNAL for user import.</p>
     * @param integer $ValidTo <p>Valid when Origin is EXTERNAL. Indicates the expiration date of the key material. 0 means never expire.</p>
     * @param string $ResourceId <p>Resource ID, format: creatorUin/$creatorUin/$keyId</p>
     * @param string $HsmClusterId <p>HSM Cluster ID (only applicable to KMS exclusive/managed service instance)</p>
     * @param integer $RotateDays <p>Key rotation cycle (days)</p>
     * @param integer $LastRotateTime <p>Last rotation time (Unix timestamp).</p>
     * @param integer $IsSyncReplica <p>Whether the key is the primary replica. 0: primary replica, 1: synced replica.</p>
     * @param string $SourceRegion <p>Synchronous original region</p>
     * @param integer $SyncStatus <p>Key synchronization state: 0: unsynced, 1: synced successfully, 2: synchronization failed, 3: syncing.</p>
     * @param string $SyncMessages <p>Synchronous result description</p>
     * @param integer $SyncStartTime <p>Start time of synchronization</p>
     * @param integer $SyncEndTime <p>Synchronous end time</p>
     * @param string $SourceHsmClusterId <p>Synchronous original cluster. If empty, it is a public cloud public cluster.</p>
     * @param integer $AccountAppId <p>Member account appId</p>
     * @param integer $AccountUin <p>member account uin</p>
     * @param string $AccountName <p>Member account name</p>
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

        if (array_key_exists("RotateDays",$param) and $param["RotateDays"] !== null) {
            $this->RotateDays = $param["RotateDays"];
        }

        if (array_key_exists("LastRotateTime",$param) and $param["LastRotateTime"] !== null) {
            $this->LastRotateTime = $param["LastRotateTime"];
        }

        if (array_key_exists("IsSyncReplica",$param) and $param["IsSyncReplica"] !== null) {
            $this->IsSyncReplica = $param["IsSyncReplica"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncMessages",$param) and $param["SyncMessages"] !== null) {
            $this->SyncMessages = $param["SyncMessages"];
        }

        if (array_key_exists("SyncStartTime",$param) and $param["SyncStartTime"] !== null) {
            $this->SyncStartTime = $param["SyncStartTime"];
        }

        if (array_key_exists("SyncEndTime",$param) and $param["SyncEndTime"] !== null) {
            $this->SyncEndTime = $param["SyncEndTime"];
        }

        if (array_key_exists("SourceHsmClusterId",$param) and $param["SourceHsmClusterId"] !== null) {
            $this->SourceHsmClusterId = $param["SourceHsmClusterId"];
        }

        if (array_key_exists("AccountAppId",$param) and $param["AccountAppId"] !== null) {
            $this->AccountAppId = $param["AccountAppId"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }
    }
}
