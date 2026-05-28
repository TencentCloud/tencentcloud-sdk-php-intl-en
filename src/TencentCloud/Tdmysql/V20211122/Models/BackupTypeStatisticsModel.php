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
 * @method array getDataBackupSize() Obtain <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataBackupSize(array $DataBackupSize) Set <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLogBackupSize() Obtain <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogBackupSize(array $LogBackupSize) Set <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupTypeStatisticsModel extends AbstractModel
{
    /**
     * @var array <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataBackupSize;

    /**
     * @var array <p>Log backup size in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogBackupSize;

    /**
     * @param array $DataBackupSize <p>Backup size of data, in Byte</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LogBackupSize <p>Log backup size in Byte</p>
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
        if (array_key_exists("DataBackupSize",$param) and $param["DataBackupSize"] !== null) {
            $this->DataBackupSize = $param["DataBackupSize"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }
    }
}
