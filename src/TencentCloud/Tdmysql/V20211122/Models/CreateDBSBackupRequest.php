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
 * CreateDBSBackup request structure.
 *
 * @method string getBackupMethod() Obtain <p>Backup method: physical, snapshot. this value should be consistent with the backupMethod in the api response of DescribeDBSBackupPolicy.</p>enumeration value:<ul><li> physical: physical backup</li><li> snapshot: snapshot backup</li></ul>
 * @method void setBackupMethod(string $BackupMethod) Set <p>Backup method: physical, snapshot. this value should be consistent with the backupMethod in the api response of DescribeDBSBackupPolicy.</p>enumeration value:<ul><li> physical: physical backup</li><li> snapshot: snapshot backup</li></ul>
 * @method string getBackupType() Obtain <P>Backup type: currently, only supports full.</p>
 * @method void setBackupType(string $BackupType) Set <P>Backup type: currently, only supports full.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getBackupName() Obtain <P>Backup notes.</p>
 * @method void setBackupName(string $BackupName) Set <P>Backup notes.</p>
 */
class CreateDBSBackupRequest extends AbstractModel
{
    /**
     * @var string <p>Backup method: physical, snapshot. this value should be consistent with the backupMethod in the api response of DescribeDBSBackupPolicy.</p>enumeration value:<ul><li> physical: physical backup</li><li> snapshot: snapshot backup</li></ul>
     */
    public $BackupMethod;

    /**
     * @var string <P>Backup type: currently, only supports full.</p>
     */
    public $BackupType;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <P>Backup notes.</p>
     */
    public $BackupName;

    /**
     * @param string $BackupMethod <p>Backup method: physical, snapshot. this value should be consistent with the backupMethod in the api response of DescribeDBSBackupPolicy.</p>enumeration value:<ul><li> physical: physical backup</li><li> snapshot: snapshot backup</li></ul>
     * @param string $BackupType <P>Backup type: currently, only supports full.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $BackupName <P>Backup notes.</p>
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
