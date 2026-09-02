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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log backup
 *
 * @method integer getId() Obtain Index.
 * @method void setId(integer $Id) Set Index.
 * @method integer getIndexStartTime() Obtain Index start time.
 * @method void setIndexStartTime(integer $IndexStartTime) Set Index start time.
 * @method integer getIndexEndTime() Obtain Index end time.
 * @method void setIndexEndTime(integer $IndexEndTime) Set Index end time.
 * @method integer getBackupSize() Obtain Compressed size after backup, in MB.
 * @method void setBackupSize(integer $BackupSize) Set Compressed size after backup, in MB.
 * @method integer getStatus() Obtain Log status. 0: backup incomplete; 1: backup file; 2: restoration in progress; 3: restored; 4: deleted.
 * @method void setStatus(integer $Status) Set Log status. 0: backup incomplete; 1: backup file; 2: restoration in progress; 3: restored; 4: deleted.
 * @method integer getRestoreProcessRemindTime() Obtain Remaining restore time in minutes. Minutes must be converted by the frontend.
 * @method void setRestoreProcessRemindTime(integer $RestoreProcessRemindTime) Set Remaining restore time in minutes. Minutes must be converted by the frontend.
 * @method integer getRestoreRemindTime() Obtain Time until which restored logs are retained.
 * @method void setRestoreRemindTime(integer $RestoreRemindTime) Set Time until which restored logs are retained.
 * @method integer getRestoreIndexSize() Obtain Restoration index size.
 * @method void setRestoreIndexSize(integer $RestoreIndexSize) Set Restoration index size.
 * @method integer getRestoreEndTime() Obtain End time of the recovery log execution.
 * @method void setRestoreEndTime(integer $RestoreEndTime) Set End time of the recovery log execution.
 * @method integer getAppId() Obtain appId to which the backup belongs
 * @method void setAppId(integer $AppId) Set appId to which the backup belongs
 * @method integer getAssetId() Obtain Asset ID to which the backup belongs
 * @method void setAssetId(integer $AssetId) Set Asset ID to which the backup belongs
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method string getUin() Obtain uin of the account to which the asset belongs
 * @method void setUin(string $Uin) Set uin of the account to which the asset belongs
 */
class BackupLog extends AbstractModel
{
    /**
     * @var integer Index.
     */
    public $Id;

    /**
     * @var integer Index start time.
     */
    public $IndexStartTime;

    /**
     * @var integer Index end time.
     */
    public $IndexEndTime;

    /**
     * @var integer Compressed size after backup, in MB.
     */
    public $BackupSize;

    /**
     * @var integer Log status. 0: backup incomplete; 1: backup file; 2: restoration in progress; 3: restored; 4: deleted.
     */
    public $Status;

    /**
     * @var integer Remaining restore time in minutes. Minutes must be converted by the frontend.
     */
    public $RestoreProcessRemindTime;

    /**
     * @var integer Time until which restored logs are retained.
     */
    public $RestoreRemindTime;

    /**
     * @var integer Restoration index size.
     */
    public $RestoreIndexSize;

    /**
     * @var integer End time of the recovery log execution.
     */
    public $RestoreEndTime;

    /**
     * @var integer appId to which the backup belongs
     */
    public $AppId;

    /**
     * @var integer Asset ID to which the backup belongs
     */
    public $AssetId;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var string uin of the account to which the asset belongs
     */
    public $Uin;

    /**
     * @param integer $Id Index.
     * @param integer $IndexStartTime Index start time.
     * @param integer $IndexEndTime Index end time.
     * @param integer $BackupSize Compressed size after backup, in MB.
     * @param integer $Status Log status. 0: backup incomplete; 1: backup file; 2: restoration in progress; 3: restored; 4: deleted.
     * @param integer $RestoreProcessRemindTime Remaining restore time in minutes. Minutes must be converted by the frontend.
     * @param integer $RestoreRemindTime Time until which restored logs are retained.
     * @param integer $RestoreIndexSize Restoration index size.
     * @param integer $RestoreEndTime End time of the recovery log execution.
     * @param integer $AppId appId to which the backup belongs
     * @param integer $AssetId Asset ID to which the backup belongs
     * @param string $NickName Account nickname
     * @param string $Uin uin of the account to which the asset belongs
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IndexStartTime",$param) and $param["IndexStartTime"] !== null) {
            $this->IndexStartTime = $param["IndexStartTime"];
        }

        if (array_key_exists("IndexEndTime",$param) and $param["IndexEndTime"] !== null) {
            $this->IndexEndTime = $param["IndexEndTime"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RestoreProcessRemindTime",$param) and $param["RestoreProcessRemindTime"] !== null) {
            $this->RestoreProcessRemindTime = $param["RestoreProcessRemindTime"];
        }

        if (array_key_exists("RestoreRemindTime",$param) and $param["RestoreRemindTime"] !== null) {
            $this->RestoreRemindTime = $param["RestoreRemindTime"];
        }

        if (array_key_exists("RestoreIndexSize",$param) and $param["RestoreIndexSize"] !== null) {
            $this->RestoreIndexSize = $param["RestoreIndexSize"];
        }

        if (array_key_exists("RestoreEndTime",$param) and $param["RestoreEndTime"] !== null) {
            $this->RestoreEndTime = $param["RestoreEndTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
