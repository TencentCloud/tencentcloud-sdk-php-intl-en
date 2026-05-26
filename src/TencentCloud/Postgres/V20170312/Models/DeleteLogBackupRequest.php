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
 * DeleteLogBackup request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getLogBackupId() Obtain Log backup ID. obtain through the api [DescribeLogBackups](https://www.tencentcloud.com/document/api/409/89021?from_cn_redirect=1). note: automatic backup sets cannot be deleted within 7 days.
 * @method void setLogBackupId(string $LogBackupId) Set Log backup ID. obtain through the api [DescribeLogBackups](https://www.tencentcloud.com/document/api/409/89021?from_cn_redirect=1). note: automatic backup sets cannot be deleted within 7 days.
 */
class DeleteLogBackupRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Log backup ID. obtain through the api [DescribeLogBackups](https://www.tencentcloud.com/document/api/409/89021?from_cn_redirect=1). note: automatic backup sets cannot be deleted within 7 days.
     */
    public $LogBackupId;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $LogBackupId Log backup ID. obtain through the api [DescribeLogBackups](https://www.tencentcloud.com/document/api/409/89021?from_cn_redirect=1). note: automatic backup sets cannot be deleted within 7 days.
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

        if (array_key_exists("LogBackupId",$param) and $param["LogBackupId"] !== null) {
            $this->LogBackupId = $param["LogBackupId"];
        }
    }
}
