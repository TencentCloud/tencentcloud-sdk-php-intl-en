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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * filter for backup set queries
 *
 * @method string getBackupMethod() Obtain <p>Backup method, multiple values separated by commas</p><p>Enumeration value:</p><ul><li>physical: Physical backup</li><li>snapshot: Snapshot backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupMethod(string $BackupMethod) Set <p>Backup method, multiple values separated by commas</p><p>Enumeration value:</p><ul><li>physical: Physical backup</li><li>snapshot: Snapshot backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupStatus() Obtain <p>Backup status, multiple values separated by commas. Description of meaning: pending scheduling pending, running running, success success, failed failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupStatus(string $BackupStatus) Set <p>Backup status, multiple values separated by commas. Description of meaning: pending scheduling pending, running running, success success, failed failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupType() Obtain <p>Backup type, multiple values separated by commas. Description of meaning: full backup full</p><p>Enumeration value:</p><ul><li>full: Full backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupType(string $BackupType) Set <p>Backup type, multiple values separated by commas. Description of meaning: full backup full</p><p>Enumeration value:</p><ul><li>full: Full backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getManualBackup() Obtain <p>Backup trigger mode</p><p>Enumeration value:</p><ul><li>0: Auto-backup</li><li>1: Manual backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackup(string $ManualBackup) Set <p>Backup trigger mode</p><p>Enumeration value:</p><ul><li>0: Auto-backup</li><li>1: Manual backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupSetsReqFilter extends AbstractModel
{
    /**
     * @var string <p>Backup method, multiple values separated by commas</p><p>Enumeration value:</p><ul><li>physical: Physical backup</li><li>snapshot: Snapshot backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupMethod;

    /**
     * @var string <p>Backup status, multiple values separated by commas. Description of meaning: pending scheduling pending, running running, success success, failed failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupStatus;

    /**
     * @var string <p>Backup type, multiple values separated by commas. Description of meaning: full backup full</p><p>Enumeration value:</p><ul><li>full: Full backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupType;

    /**
     * @var string <p>Backup trigger mode</p><p>Enumeration value:</p><ul><li>0: Auto-backup</li><li>1: Manual backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackup;

    /**
     * @param string $BackupMethod <p>Backup method, multiple values separated by commas</p><p>Enumeration value:</p><ul><li>physical: Physical backup</li><li>snapshot: Snapshot backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupStatus <p>Backup status, multiple values separated by commas. Description of meaning: pending scheduling pending, running running, success success, failed failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupType <p>Backup type, multiple values separated by commas. Description of meaning: full backup full</p><p>Enumeration value:</p><ul><li>full: Full backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ManualBackup <p>Backup trigger mode</p><p>Enumeration value:</p><ul><li>0: Auto-backup</li><li>1: Manual backup</li></ul>
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("ManualBackup",$param) and $param["ManualBackup"] !== null) {
            $this->ManualBackup = $param["ManualBackup"];
        }
    }
}
