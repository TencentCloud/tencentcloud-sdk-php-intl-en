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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cross-Region backup describes the backup information in each region.
 *
 * @method string getCrossRegion() Obtain Target region for backup.
 * @method void setCrossRegion(string $CrossRegion) Set Target region for backup.
 * @method integer getBackupId() Obtain Target region's backup task ID.
 * @method void setBackupId(integer $BackupId) Set Target region's backup task ID.
 * @method string getBackupStatus() Obtain Backup status in the target region.
 * @method void setBackupStatus(string $BackupStatus) Set Backup status in the target region.
 */
class CrossRegionBackupItem extends AbstractModel
{
    /**
     * @var string Target region for backup.
     */
    public $CrossRegion;

    /**
     * @var integer Target region's backup task ID.
     */
    public $BackupId;

    /**
     * @var string Backup status in the target region.
     */
    public $BackupStatus;

    /**
     * @param string $CrossRegion Target region for backup.
     * @param integer $BackupId Target region's backup task ID.
     * @param string $BackupStatus Backup status in the target region.
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
        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }
    }
}
