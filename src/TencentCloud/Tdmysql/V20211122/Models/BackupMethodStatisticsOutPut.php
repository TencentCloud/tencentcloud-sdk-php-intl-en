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
 * Backup method statistical object, provided to backup set statistical detail API
 *
 * @method array getAutoBackupSize() Obtain <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoBackupSize(array $AutoBackupSize) Set <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getManualBackupSize() Obtain <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManualBackupSize(array $ManualBackupSize) Set <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupMethodStatisticsOutPut extends AbstractModel
{
    /**
     * @var array <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoBackupSize;

    /**
     * @var array <p>Manual backup size, unit Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManualBackupSize;

    /**
     * @param array $AutoBackupSize <p>Auto-backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ManualBackupSize <p>Manual backup size, unit Byte</p>
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
        if (array_key_exists("AutoBackupSize",$param) and $param["AutoBackupSize"] !== null) {
            $this->AutoBackupSize = $param["AutoBackupSize"];
        }

        if (array_key_exists("ManualBackupSize",$param) and $param["ManualBackupSize"] !== null) {
            $this->ManualBackupSize = $param["ManualBackupSize"];
        }
    }
}
