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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneDBInstanceSpec request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method string getBackupSetId() Obtain Basic backup set ID. Either this parameter or `RecoveryTargetTime` must be passed in. If both are passed in, only this parameter takes effect.
 * @method void setBackupSetId(string $BackupSetId) Set Basic backup set ID. Either this parameter or `RecoveryTargetTime` must be passed in. If both are passed in, only this parameter takes effect.
 * @method string getRecoveryTargetTime() Obtain Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) Set Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
 */
class DescribeCloneDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Basic backup set ID. Either this parameter or `RecoveryTargetTime` must be passed in. If both are passed in, only this parameter takes effect.
     */
    public $BackupSetId;

    /**
     * @var string Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
     */
    public $RecoveryTargetTime;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param string $BackupSetId Basic backup set ID. Either this parameter or `RecoveryTargetTime` must be passed in. If both are passed in, only this parameter takes effect.
     * @param string $RecoveryTargetTime Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("RecoveryTargetTime",$param) and $param["RecoveryTargetTime"] !== null) {
            $this->RecoveryTargetTime = $param["RecoveryTargetTime"];
        }
    }
}
