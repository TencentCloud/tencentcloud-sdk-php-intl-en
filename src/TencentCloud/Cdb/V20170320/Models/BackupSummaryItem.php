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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistical items of instance backup
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getAutoBackupCount() Obtain Number of automatic data backups of an instance.
 * @method void setAutoBackupCount(integer $AutoBackupCount) Set Number of automatic data backups of an instance.
 * @method integer getAutoBackupVolume() Obtain Capacity of automatic data backups of an instance.
 * @method void setAutoBackupVolume(integer $AutoBackupVolume) Set Capacity of automatic data backups of an instance.
 * @method integer getManualBackupCount() Obtain Number of manual data backups of an instance.
 * @method void setManualBackupCount(integer $ManualBackupCount) Set Number of manual data backups of an instance.
 * @method integer getManualBackupVolume() Obtain Capacity of manual data backups of an instance.
 * @method void setManualBackupVolume(integer $ManualBackupVolume) Set Capacity of manual data backups of an instance.
 * @method integer getDataBackupCount() Obtain Total number of data backups of an instance (including automatic backups and manual backups).
 * @method void setDataBackupCount(integer $DataBackupCount) Set Total number of data backups of an instance (including automatic backups and manual backups).
 * @method integer getDataBackupVolume() Obtain Total capacity of data backups of an instance.
 * @method void setDataBackupVolume(integer $DataBackupVolume) Set Total capacity of data backups of an instance.
 * @method integer getBinlogBackupCount() Obtain Number of log backups of an instance.
 * @method void setBinlogBackupCount(integer $BinlogBackupCount) Set Number of log backups of an instance.
 * @method integer getBinlogBackupVolume() Obtain Capacity of log backups of an instance.
 * @method void setBinlogBackupVolume(integer $BinlogBackupVolume) Set Capacity of log backups of an instance.
 * @method integer getBackupVolume() Obtain Total capacity of backups of an instance (including data backups and log backups).
 * @method void setBackupVolume(integer $BackupVolume) Set Total capacity of backups of an instance (including data backups and log backups).
 */
class BackupSummaryItem extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Number of automatic data backups of an instance.
     */
    public $AutoBackupCount;

    /**
     * @var integer Capacity of automatic data backups of an instance.
     */
    public $AutoBackupVolume;

    /**
     * @var integer Number of manual data backups of an instance.
     */
    public $ManualBackupCount;

    /**
     * @var integer Capacity of manual data backups of an instance.
     */
    public $ManualBackupVolume;

    /**
     * @var integer Total number of data backups of an instance (including automatic backups and manual backups).
     */
    public $DataBackupCount;

    /**
     * @var integer Total capacity of data backups of an instance.
     */
    public $DataBackupVolume;

    /**
     * @var integer Number of log backups of an instance.
     */
    public $BinlogBackupCount;

    /**
     * @var integer Capacity of log backups of an instance.
     */
    public $BinlogBackupVolume;

    /**
     * @var integer Total capacity of backups of an instance (including data backups and log backups).
     */
    public $BackupVolume;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $AutoBackupCount Number of automatic data backups of an instance.
     * @param integer $AutoBackupVolume Capacity of automatic data backups of an instance.
     * @param integer $ManualBackupCount Number of manual data backups of an instance.
     * @param integer $ManualBackupVolume Capacity of manual data backups of an instance.
     * @param integer $DataBackupCount Total number of data backups of an instance (including automatic backups and manual backups).
     * @param integer $DataBackupVolume Total capacity of data backups of an instance.
     * @param integer $BinlogBackupCount Number of log backups of an instance.
     * @param integer $BinlogBackupVolume Capacity of log backups of an instance.
     * @param integer $BackupVolume Total capacity of backups of an instance (including data backups and log backups).
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

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("AutoBackupVolume",$param) and $param["AutoBackupVolume"] !== null) {
            $this->AutoBackupVolume = $param["AutoBackupVolume"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("ManualBackupVolume",$param) and $param["ManualBackupVolume"] !== null) {
            $this->ManualBackupVolume = $param["ManualBackupVolume"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("DataBackupVolume",$param) and $param["DataBackupVolume"] !== null) {
            $this->DataBackupVolume = $param["DataBackupVolume"];
        }

        if (array_key_exists("BinlogBackupCount",$param) and $param["BinlogBackupCount"] !== null) {
            $this->BinlogBackupCount = $param["BinlogBackupCount"];
        }

        if (array_key_exists("BinlogBackupVolume",$param) and $param["BinlogBackupVolume"] !== null) {
            $this->BinlogBackupVolume = $param["BinlogBackupVolume"];
        }

        if (array_key_exists("BackupVolume",$param) and $param["BackupVolume"] !== null) {
            $this->BackupVolume = $param["BackupVolume"];
        }
    }
}
