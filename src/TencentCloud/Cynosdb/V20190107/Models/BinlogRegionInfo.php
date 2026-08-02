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
 * binlog retention info for each region
 *
 * @method string getBackupRegion() Obtain <p>Backup region</p>
 * @method void setBackupRegion(string $BackupRegion) Set <p>Backup region</p>
 * @method integer getBackupId() Obtain <p>Backup ID</p>
 * @method void setBackupId(integer $BackupId) Set <p>Backup ID</p>
 */
class BinlogRegionInfo extends AbstractModel
{
    /**
     * @var string <p>Backup region</p>
     */
    public $BackupRegion;

    /**
     * @var integer <p>Backup ID</p>
     */
    public $BackupId;

    /**
     * @param string $BackupRegion <p>Backup region</p>
     * @param integer $BackupId <p>Backup ID</p>
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
        if (array_key_exists("BackupRegion",$param) and $param["BackupRegion"] !== null) {
            $this->BackupRegion = $param["BackupRegion"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }
    }
}
