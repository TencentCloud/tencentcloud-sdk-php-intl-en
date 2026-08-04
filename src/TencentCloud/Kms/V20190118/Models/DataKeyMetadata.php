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
 * @method string getDataKeyId() Obtain <p>Globally unique ID of the DataKey</p>
 * @method void setDataKeyId(string $DataKeyId) Set <p>Globally unique ID of the DataKey</p>
 * @method string getKeyId() Obtain <p>Globally unique ID of the CMK.</p>
 * @method void setKeyId(string $KeyId) Set <p>Globally unique ID of the CMK.</p>
 * @method string getKeyName() Obtain <p>CMK name</p>
 * @method void setKeyName(string $KeyName) Set <p>CMK name</p>
 * @method string getDataKeyName() Obtain <p>Data key name that is easier to identify and understand as a key</p>
 * @method void setDataKeyName(string $DataKeyName) Set <p>Data key name that is easier to identify and understand as a key</p>
 * @method integer getNumberOfBytes() Obtain <p>Length of the data key, in bytes</p>
 * @method void setNumberOfBytes(integer $NumberOfBytes) Set <p>Length of the data key, in bytes</p>
 * @method integer getCreateTime() Obtain <p>Key creation time</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Key creation time</p>
 * @method string getDescription() Obtain <p>Description of DataKey</p>
 * @method void setDescription(string $Description) Set <p>Description of DataKey</p>
 * @method string getKeyState() Obtain <p>DataKey state, value: Enabled | Disabled | PendingDelete</p>
 * @method void setKeyState(string $KeyState) Set <p>DataKey state, value: Enabled | Disabled | PendingDelete</p>
 * @method integer getCreatorUin() Obtain <p>Creator.</p>
 * @method void setCreatorUin(integer $CreatorUin) Set <p>Creator.</p>
 * @method string getOwner() Obtain <p>Creator of the data key. For user-created keys, it is user; for keys automatically created by authorized cloud services, it is the corresponding product name.</p>
 * @method void setOwner(string $Owner) Set <p>Creator of the data key. For user-created keys, it is user; for keys automatically created by authorized cloud services, it is the corresponding product name.</p>
 * @method integer getDeletionDate() Obtain <p>Schedule deletion time</p>
 * @method void setDeletionDate(integer $DeletionDate) Set <p>Schedule deletion time</p>
 * @method string getOrigin() Obtain <p>DataKey key material type. For keys created by KMS: TENCENT_KMS. For keys of user import type: EXTERNAL.</p>
 * @method void setOrigin(string $Origin) Set <p>DataKey key material type. For keys created by KMS: TENCENT_KMS. For keys of user import type: EXTERNAL.</p>
 * @method string getHsmClusterId() Obtain <p>HSM Cluster ID (only applicable to KMS exclusive edition/managed version service instances)</p>
 * @method void setHsmClusterId(string $HsmClusterId) Set <p>HSM Cluster ID (only applicable to KMS exclusive edition/managed version service instances)</p>
 * @method string getResourceId() Obtain <p>Resource ID, format: creatorUin/$creatorUin/$dataKeyId</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID, format: creatorUin/$creatorUin/$dataKeyId</p>
 * @method integer getIsSyncReplica() Obtain <p>Whether the key is a primary replica. 0: primary replica, 1: synced replica.</p>
 * @method void setIsSyncReplica(integer $IsSyncReplica) Set <p>Whether the key is a primary replica. 0: primary replica, 1: synced replica.</p>
 * @method string getSourceRegion() Obtain <p>Synchronous original region</p>
 * @method void setSourceRegion(string $SourceRegion) Set <p>Synchronous original region</p>
 * @method integer getSyncStatus() Obtain <p>Key synchronization status. 0: unsynced, 1: synchronization successful, 2: synchronization failure, 3: syncing.</p>
 * @method void setSyncStatus(integer $SyncStatus) Set <p>Key synchronization status. 0: unsynced, 1: synchronization successful, 2: synchronization failure, 3: syncing.</p>
 * @method string getSyncMessages() Obtain <p>Synchronous result description</p>
 * @method void setSyncMessages(string $SyncMessages) Set <p>Synchronous result description</p>
 * @method integer getSyncStartTime() Obtain <p>Start time of synchronization</p>
 * @method void setSyncStartTime(integer $SyncStartTime) Set <p>Start time of synchronization</p>
 * @method integer getSyncEndTime() Obtain <p>Synchronous end time</p>
 * @method void setSyncEndTime(integer $SyncEndTime) Set <p>Synchronous end time</p>
 * @method string getSourceHsmClusterId() Obtain <p>Synchronous primitive cluster. If empty, it is a public cloud public cluster.</p>
 * @method void setSourceHsmClusterId(string $SourceHsmClusterId) Set <p>Synchronous primitive cluster. If empty, it is a public cloud public cluster.</p>
 * @method integer getAccountAppId() Obtain <p>Member account appId</p>
 * @method void setAccountAppId(integer $AccountAppId) Set <p>Member account appId</p>
 * @method integer getAccountUin() Obtain <p>member account uin</p>
 * @method void setAccountUin(integer $AccountUin) Set <p>member account uin</p>
 * @method string getAccountName() Obtain <p>Enter the member account name.</p>
 * @method void setAccountName(string $AccountName) Set <p>Enter the member account name.</p>
 * @method string getCreatorUinString() Obtain <p>Creator UIN</p>
 * @method void setCreatorUinString(string $CreatorUinString) Set <p>Creator UIN</p>
 */
class DataKeyMetadata extends AbstractModel
{
    /**
     * @var string <p>Globally unique ID of the DataKey</p>
     */
    public $DataKeyId;

    /**
     * @var string <p>Globally unique ID of the CMK.</p>
     */
    public $KeyId;

    /**
     * @var string <p>CMK name</p>
     */
    public $KeyName;

    /**
     * @var string <p>Data key name that is easier to identify and understand as a key</p>
     */
    public $DataKeyName;

    /**
     * @var integer <p>Length of the data key, in bytes</p>
     */
    public $NumberOfBytes;

    /**
     * @var integer <p>Key creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Description of DataKey</p>
     */
    public $Description;

    /**
     * @var string <p>DataKey state, value: Enabled | Disabled | PendingDelete</p>
     */
    public $KeyState;

    /**
     * @var integer <p>Creator.</p>
     */
    public $CreatorUin;

    /**
     * @var string <p>Creator of the data key. For user-created keys, it is user; for keys automatically created by authorized cloud services, it is the corresponding product name.</p>
     */
    public $Owner;

    /**
     * @var integer <p>Schedule deletion time</p>
     */
    public $DeletionDate;

    /**
     * @var string <p>DataKey key material type. For keys created by KMS: TENCENT_KMS. For keys of user import type: EXTERNAL.</p>
     */
    public $Origin;

    /**
     * @var string <p>HSM Cluster ID (only applicable to KMS exclusive edition/managed version service instances)</p>
     */
    public $HsmClusterId;

    /**
     * @var string <p>Resource ID, format: creatorUin/$creatorUin/$dataKeyId</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>Whether the key is a primary replica. 0: primary replica, 1: synced replica.</p>
     */
    public $IsSyncReplica;

    /**
     * @var string <p>Synchronous original region</p>
     */
    public $SourceRegion;

    /**
     * @var integer <p>Key synchronization status. 0: unsynced, 1: synchronization successful, 2: synchronization failure, 3: syncing.</p>
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
     * @var string <p>Synchronous primitive cluster. If empty, it is a public cloud public cluster.</p>
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
     * @var string <p>Enter the member account name.</p>
     */
    public $AccountName;

    /**
     * @var string <p>Creator UIN</p>
     */
    public $CreatorUinString;

    /**
     * @param string $DataKeyId <p>Globally unique ID of the DataKey</p>
     * @param string $KeyId <p>Globally unique ID of the CMK.</p>
     * @param string $KeyName <p>CMK name</p>
     * @param string $DataKeyName <p>Data key name that is easier to identify and understand as a key</p>
     * @param integer $NumberOfBytes <p>Length of the data key, in bytes</p>
     * @param integer $CreateTime <p>Key creation time</p>
     * @param string $Description <p>Description of DataKey</p>
     * @param string $KeyState <p>DataKey state, value: Enabled | Disabled | PendingDelete</p>
     * @param integer $CreatorUin <p>Creator.</p>
     * @param string $Owner <p>Creator of the data key. For user-created keys, it is user; for keys automatically created by authorized cloud services, it is the corresponding product name.</p>
     * @param integer $DeletionDate <p>Schedule deletion time</p>
     * @param string $Origin <p>DataKey key material type. For keys created by KMS: TENCENT_KMS. For keys of user import type: EXTERNAL.</p>
     * @param string $HsmClusterId <p>HSM Cluster ID (only applicable to KMS exclusive edition/managed version service instances)</p>
     * @param string $ResourceId <p>Resource ID, format: creatorUin/$creatorUin/$dataKeyId</p>
     * @param integer $IsSyncReplica <p>Whether the key is a primary replica. 0: primary replica, 1: synced replica.</p>
     * @param string $SourceRegion <p>Synchronous original region</p>
     * @param integer $SyncStatus <p>Key synchronization status. 0: unsynced, 1: synchronization successful, 2: synchronization failure, 3: syncing.</p>
     * @param string $SyncMessages <p>Synchronous result description</p>
     * @param integer $SyncStartTime <p>Start time of synchronization</p>
     * @param integer $SyncEndTime <p>Synchronous end time</p>
     * @param string $SourceHsmClusterId <p>Synchronous primitive cluster. If empty, it is a public cloud public cluster.</p>
     * @param integer $AccountAppId <p>Member account appId</p>
     * @param integer $AccountUin <p>member account uin</p>
     * @param string $AccountName <p>Enter the member account name.</p>
     * @param string $CreatorUinString <p>Creator UIN</p>
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

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
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

        if (array_key_exists("AccountAppId",$param) and $param["AccountAppId"] !== null) {
            $this->AccountAppId = $param["AccountAppId"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("CreatorUinString",$param) and $param["CreatorUinString"] !== null) {
            $this->CreatorUinString = $param["CreatorUinString"];
        }
    }
}
