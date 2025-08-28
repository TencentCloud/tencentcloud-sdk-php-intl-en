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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCrossBackupStrategy request structure.
 *
 * @method string getCrossBackupEnabled() Obtain Cross-region backup switch (data backup & log backup). enable - enabled; disable - disabled.
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) Set Cross-region backup switch (data backup & log backup). enable - enabled; disable - disabled.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getInstanceIdSet() Obtain Instance ID list.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set Instance ID list.
 * @method integer getCrossBackupSaveDays() Obtain Retention days for cross-region backups. Value range: 7-1830. The default value is 7.
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) Set Retention days for cross-region backups. Value range: 7-1830. The default value is 7.
 * @method array getCrossBackupRegion() Obtain Target region ID for cross-region backups, with a maximum of two and a minimum of one.
 * @method void setCrossBackupRegion(array $CrossBackupRegion) Set Target region ID for cross-region backups, with a maximum of two and a minimum of one.
 * @method integer getCleanUpCrossBackup() Obtain Whether to clean up cross-region backups (data backups & log backups) immediately. This parameter is only valid when the value of BackupEnabled is disabled. 1 - yes; 0 - no. The default value is 0.
 * @method void setCleanUpCrossBackup(integer $CleanUpCrossBackup) Set Whether to clean up cross-region backups (data backups & log backups) immediately. This parameter is only valid when the value of BackupEnabled is disabled. 1 - yes; 0 - no. The default value is 0.
 */
class ModifyCrossBackupStrategyRequest extends AbstractModel
{
    /**
     * @var string Cross-region backup switch (data backup & log backup). enable - enabled; disable - disabled.
     */
    public $CrossBackupEnabled;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array Instance ID list.
     */
    public $InstanceIdSet;

    /**
     * @var integer Retention days for cross-region backups. Value range: 7-1830. The default value is 7.
     */
    public $CrossBackupSaveDays;

    /**
     * @var array Target region ID for cross-region backups, with a maximum of two and a minimum of one.
     */
    public $CrossBackupRegion;

    /**
     * @var integer Whether to clean up cross-region backups (data backups & log backups) immediately. This parameter is only valid when the value of BackupEnabled is disabled. 1 - yes; 0 - no. The default value is 0.
     */
    public $CleanUpCrossBackup;

    /**
     * @param string $CrossBackupEnabled Cross-region backup switch (data backup & log backup). enable - enabled; disable - disabled.
     * @param string $InstanceId Instance ID.
     * @param array $InstanceIdSet Instance ID list.
     * @param integer $CrossBackupSaveDays Retention days for cross-region backups. Value range: 7-1830. The default value is 7.
     * @param array $CrossBackupRegion Target region ID for cross-region backups, with a maximum of two and a minimum of one.
     * @param integer $CleanUpCrossBackup Whether to clean up cross-region backups (data backups & log backups) immediately. This parameter is only valid when the value of BackupEnabled is disabled. 1 - yes; 0 - no. The default value is 0.
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
        if (array_key_exists("CrossBackupEnabled",$param) and $param["CrossBackupEnabled"] !== null) {
            $this->CrossBackupEnabled = $param["CrossBackupEnabled"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("CrossBackupSaveDays",$param) and $param["CrossBackupSaveDays"] !== null) {
            $this->CrossBackupSaveDays = $param["CrossBackupSaveDays"];
        }

        if (array_key_exists("CrossBackupRegion",$param) and $param["CrossBackupRegion"] !== null) {
            $this->CrossBackupRegion = $param["CrossBackupRegion"];
        }

        if (array_key_exists("CleanUpCrossBackup",$param) and $param["CleanUpCrossBackup"] !== null) {
            $this->CleanUpCrossBackup = $param["CleanUpCrossBackup"];
        }
    }
}
