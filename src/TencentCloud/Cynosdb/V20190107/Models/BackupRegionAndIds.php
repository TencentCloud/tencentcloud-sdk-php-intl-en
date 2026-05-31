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
 * Region where backup files are located and ID.
 *
 * @method string getBackupRegion() Obtain Backup region.
 * @method void setBackupRegion(string $BackupRegion) Set Backup region.
 * @method integer getBackupId() Obtain Backup ID.
 * @method void setBackupId(integer $BackupId) Set Backup ID.
 */
class BackupRegionAndIds extends AbstractModel
{
    /**
     * @var string Backup region.
     */
    public $BackupRegion;

    /**
     * @var integer Backup ID.
     */
    public $BackupId;

    /**
     * @param string $BackupRegion Backup region.
     * @param integer $BackupId Backup ID.
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
