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
 * Specifies the data key attribute information.
 *
 * @method string getDataKeyId() Obtain DataKey globally unique id.
 * @method void setDataKeyId(string $DataKeyId) Set DataKey globally unique id.
 * @method string getKeyId() Obtain Globally unique id of the CMK.
 * @method void setKeyId(string $KeyId) Set Globally unique id of the CMK.
 * @method string getDataKeyName() Obtain Key name as a more recognizable and understandable data key.
 * @method void setDataKeyName(string $DataKeyName) Set Key name as a more recognizable and understandable data key.
 * @method integer getNumberOfBytes() Obtain Specifies the length of the data key in bytes.
 * @method void setNumberOfBytes(integer $NumberOfBytes) Set Specifies the length of the data key in bytes.
 * @method integer getCreateTime() Obtain Key key creation time.
 * @method void setCreateTime(integer $CreateTime) Set Key key creation time.
 * @method string getDescription() Obtain DataKey description.
 * @method void setDescription(string $Description) Set DataKey description.
 * @method string getKeyState() Obtain DataKey status. valid values: Enabled, Disabled, PendingDelete.
 * @method void setKeyState(string $KeyState) Set DataKey status. valid values: Enabled, Disabled, PendingDelete.
 * @method integer getCreatorUin() Obtain Creator.
 * @method void setCreatorUin(integer $CreatorUin) Set Creator.
 * @method string getOwner() Obtain Specifies the creator of the data key. valid values: user (user-created) or product name (auto-created by authorized cloud services).
 * @method void setOwner(string $Owner) Set Specifies the creator of the data key. valid values: user (user-created) or product name (auto-created by authorized cloud services).
 * @method integer getDeletionDate() Obtain The time when schedule deletion.
 * @method void setDeletionDate(integer $DeletionDate) Set The time when schedule deletion.
 * @method string getOrigin() Obtain Specifies the key material type of DataKey. valid values: TENCENT_KMS (created by KMS), EXTERNAL (user import).
 * @method void setOrigin(string $Origin) Set Specifies the key material type of DataKey. valid values: TENCENT_KMS (created by KMS), EXTERNAL (user import).
 * @method string getHsmClusterId() Obtain HSM cluster ID (only applicable to KMS exclusive/managed service instance).
 * @method void setHsmClusterId(string $HsmClusterId) Set HSM cluster ID (only applicable to KMS exclusive/managed service instance).
 * @method string getResourceId() Obtain Resource ID in the format of `creatorUin/$creatorUin/$dataKeyId`.
 * @method void setResourceId(string $ResourceId) Set Resource ID in the format of `creatorUin/$creatorUin/$dataKeyId`.
 * @method integer getIsSyncReplica() Obtain Whether the key is a primary replica. valid values: `0` (primary), `1` (synced replica).
 * @method void setIsSyncReplica(integer $IsSyncReplica) Set Whether the key is a primary replica. valid values: `0` (primary), `1` (synced replica).
 * @method string getSourceRegion() Obtain Synchronous original region.
 * @method void setSourceRegion(string $SourceRegion) Set Synchronous original region.
 * @method integer getSyncStatus() Obtain The state of key synchronization. valid values: 0 (unsynced), 1 (synchronization successful), 2 (synchronization failed), 3 (synchronizing).
 * @method void setSyncStatus(integer $SyncStatus) Set The state of key synchronization. valid values: 0 (unsynced), 1 (synchronization successful), 2 (synchronization failed), 3 (synchronizing).
 * @method string getSyncMessages() Obtain Sresult description}.
 * @method void setSyncMessages(string $SyncMessages) Set Sresult description}.
 * @method integer getSyncStartTime() Obtain Start time of synchronization.
 * @method void setSyncStartTime(integer $SyncStartTime) Set Start time of synchronization.
 * @method integer getSyncEndTime() Obtain Specifies the synchronous end time.
 * @method void setSyncEndTime(integer $SyncEndTime) Set Specifies the synchronous end time.
 * @method string getSourceHsmClusterId() Obtain Synchronous original cluster. if empty, it is a public cloud public cluster.
 * @method void setSourceHsmClusterId(string $SourceHsmClusterId) Set Synchronous original cluster. if empty, it is a public cloud public cluster.
 */
class DataKeyMetadata extends AbstractModel
{
    /**
     * @var string DataKey globally unique id.
     */
    public $DataKeyId;

    /**
     * @var string Globally unique id of the CMK.
     */
    public $KeyId;

    /**
     * @var string Key name as a more recognizable and understandable data key.
     */
    public $DataKeyName;

    /**
     * @var integer Specifies the length of the data key in bytes.
     */
    public $NumberOfBytes;

    /**
     * @var integer Key key creation time.
     */
    public $CreateTime;

    /**
     * @var string DataKey description.
     */
    public $Description;

    /**
     * @var string DataKey status. valid values: Enabled, Disabled, PendingDelete.
     */
    public $KeyState;

    /**
     * @var integer Creator.
     */
    public $CreatorUin;

    /**
     * @var string Specifies the creator of the data key. valid values: user (user-created) or product name (auto-created by authorized cloud services).
     */
    public $Owner;

    /**
     * @var integer The time when schedule deletion.
     */
    public $DeletionDate;

    /**
     * @var string Specifies the key material type of DataKey. valid values: TENCENT_KMS (created by KMS), EXTERNAL (user import).
     */
    public $Origin;

    /**
     * @var string HSM cluster ID (only applicable to KMS exclusive/managed service instance).
     */
    public $HsmClusterId;

    /**
     * @var string Resource ID in the format of `creatorUin/$creatorUin/$dataKeyId`.
     */
    public $ResourceId;

    /**
     * @var integer Whether the key is a primary replica. valid values: `0` (primary), `1` (synced replica).
     */
    public $IsSyncReplica;

    /**
     * @var string Synchronous original region.
     */
    public $SourceRegion;

    /**
     * @var integer The state of key synchronization. valid values: 0 (unsynced), 1 (synchronization successful), 2 (synchronization failed), 3 (synchronizing).
     */
    public $SyncStatus;

    /**
     * @var string Sresult description}.
     */
    public $SyncMessages;

    /**
     * @var integer Start time of synchronization.
     */
    public $SyncStartTime;

    /**
     * @var integer Specifies the synchronous end time.
     */
    public $SyncEndTime;

    /**
     * @var string Synchronous original cluster. if empty, it is a public cloud public cluster.
     */
    public $SourceHsmClusterId;

    /**
     * @param string $DataKeyId DataKey globally unique id.
     * @param string $KeyId Globally unique id of the CMK.
     * @param string $DataKeyName Key name as a more recognizable and understandable data key.
     * @param integer $NumberOfBytes Specifies the length of the data key in bytes.
     * @param integer $CreateTime Key key creation time.
     * @param string $Description DataKey description.
     * @param string $KeyState DataKey status. valid values: Enabled, Disabled, PendingDelete.
     * @param integer $CreatorUin Creator.
     * @param string $Owner Specifies the creator of the data key. valid values: user (user-created) or product name (auto-created by authorized cloud services).
     * @param integer $DeletionDate The time when schedule deletion.
     * @param string $Origin Specifies the key material type of DataKey. valid values: TENCENT_KMS (created by KMS), EXTERNAL (user import).
     * @param string $HsmClusterId HSM cluster ID (only applicable to KMS exclusive/managed service instance).
     * @param string $ResourceId Resource ID in the format of `creatorUin/$creatorUin/$dataKeyId`.
     * @param integer $IsSyncReplica Whether the key is a primary replica. valid values: `0` (primary), `1` (synced replica).
     * @param string $SourceRegion Synchronous original region.
     * @param integer $SyncStatus The state of key synchronization. valid values: 0 (unsynced), 1 (synchronization successful), 2 (synchronization failed), 3 (synchronizing).
     * @param string $SyncMessages Sresult description}.
     * @param integer $SyncStartTime Start time of synchronization.
     * @param integer $SyncEndTime Specifies the synchronous end time.
     * @param string $SourceHsmClusterId Synchronous original cluster. if empty, it is a public cloud public cluster.
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
        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DataKeyName",$param) and $param["DataKeyName"] !== null) {
            $this->DataKeyName = $param["DataKeyName"];
        }

        if (array_key_exists("NumberOfBytes",$param) and $param["NumberOfBytes"] !== null) {
            $this->NumberOfBytes = $param["NumberOfBytes"];
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

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("DeletionDate",$param) and $param["DeletionDate"] !== null) {
            $this->DeletionDate = $param["DeletionDate"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
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
    }
}
