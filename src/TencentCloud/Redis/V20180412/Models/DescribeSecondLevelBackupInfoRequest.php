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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecondLevelBackupInfo request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID. For example, crs-xjhsdj****. Log in to the TencentDB for Redis® console and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. For example, crs-xjhsdj****. Log in to the TencentDB for Redis® console and copy the instance ID from the instance list.
 * @method integer getBackupTimestamp() Obtain Second-level backup timestamp. The corresponding time should be within the last 7 days.
 * @method void setBackupTimestamp(integer $BackupTimestamp) Set Second-level backup timestamp. The corresponding time should be within the last 7 days.
 */
class DescribeSecondLevelBackupInfoRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID. For example, crs-xjhsdj****. Log in to the TencentDB for Redis® console and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Second-level backup timestamp. The corresponding time should be within the last 7 days.
     */
    public $BackupTimestamp;

    /**
     * @param string $InstanceId Specifies the instance ID. For example, crs-xjhsdj****. Log in to the TencentDB for Redis® console and copy the instance ID from the instance list.
     * @param integer $BackupTimestamp Second-level backup timestamp. The corresponding time should be within the last 7 days.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupTimestamp",$param) and $param["BackupTimestamp"] !== null) {
            $this->BackupTimestamp = $param["BackupTimestamp"];
        }
    }
}
