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
 * Backup Usage Info
 *
 * @method float getBackupVolume() Obtain Backup usage
 * @method void setBackupVolume(float $BackupVolume) Set Backup usage
 * @method string getBackupType() Obtain Backup type
 * @method void setBackupType(string $BackupType) Set Backup type
 * @method string getBackupMethod() Obtain Backup method
 * @method void setBackupMethod(string $BackupMethod) Set Backup method
 */
class BackupVolumeInfo extends AbstractModel
{
    /**
     * @var float Backup usage
     */
    public $BackupVolume;

    /**
     * @var string Backup type
     */
    public $BackupType;

    /**
     * @var string Backup method
     */
    public $BackupMethod;

    /**
     * @param float $BackupVolume Backup usage
     * @param string $BackupType Backup type
     * @param string $BackupMethod Backup method
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
        if (array_key_exists("BackupVolume",$param) and $param["BackupVolume"] !== null) {
            $this->BackupVolume = $param["BackupVolume"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }
    }
}
