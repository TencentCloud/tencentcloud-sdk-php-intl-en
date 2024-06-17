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
 * DeleteBaseBackup request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getBaseBackupId() Obtain Data Backup ID.
 * @method void setBaseBackupId(string $BaseBackupId) Set Data Backup ID.
 */
class DeleteBaseBackupRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string Data Backup ID.
     */
    public $BaseBackupId;

    /**
     * @param string $DBInstanceId Instance ID
     * @param string $BaseBackupId Data Backup ID.
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

        if (array_key_exists("BaseBackupId",$param) and $param["BaseBackupId"] !== null) {
            $this->BaseBackupId = $param["BaseBackupId"];
        }
    }
}
