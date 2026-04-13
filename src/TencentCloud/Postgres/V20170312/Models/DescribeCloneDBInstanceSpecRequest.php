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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneDBInstanceSpec request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method string getBackupSetId() Obtain Basic backup set ID. obtain through the api [DescribeBaseBackups](https://www.tencentcloud.com/document/product/409/54343?lang=en). this parameter and RecoveryTargetTime must be selected. if set simultaneously with RecoveryTargetTime, this parameter takes precedence.
 * @method void setBackupSetId(string $BackupSetId) Set Basic backup set ID. obtain through the api [DescribeBaseBackups](https://www.tencentcloud.com/document/product/409/54343?lang=en). this parameter and RecoveryTargetTime must be selected. if set simultaneously with RecoveryTargetTime, this parameter takes precedence.
 * @method string getRecoveryTargetTime() Obtain Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) Set Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
 */
class DescribeCloneDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var string Basic backup set ID. obtain through the api [DescribeBaseBackups](https://www.tencentcloud.com/document/product/409/54343?lang=en). this parameter and RecoveryTargetTime must be selected. if set simultaneously with RecoveryTargetTime, this parameter takes precedence.
     */
    public $BackupSetId;

    /**
     * @var string Restoration time (UTC+8). Either this parameter or `BackupSetId` must be passed in.
     */
    public $RecoveryTargetTime;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param string $BackupSetId Basic backup set ID. obtain through the api [DescribeBaseBackups](https://www.tencentcloud.com/document/product/409/54343?lang=en). this parameter and RecoveryTargetTime must be selected. if set simultaneously with RecoveryTargetTime, this parameter takes precedence.
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
