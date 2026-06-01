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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDecryptionKey request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format such as cdb-fybaegd8. This matches the instance ID displayed on the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format such as cdb-fybaegd8. This matches the instance ID displayed on the TencentDB console.
 * @method integer getBackupId() Obtain Backup ID of the instance, which can be obtained through the [DescribeBackups](https://www.tencentcloud.com/document/api/236/15842?from_cn_redirect=1) API.
 * @method void setBackupId(integer $BackupId) Set Backup ID of the instance, which can be obtained through the [DescribeBackups](https://www.tencentcloud.com/document/api/236/15842?from_cn_redirect=1) API.
 * @method string getBackupType() Obtain Backup type. data - data backup, binlog - log backup. The default value is data.
 * @method void setBackupType(string $BackupType) Set Backup type. data - data backup, binlog - log backup. The default value is data.
 */
class DescribeBackupDecryptionKeyRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format such as cdb-fybaegd8. This matches the instance ID displayed on the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var integer Backup ID of the instance, which can be obtained through the [DescribeBackups](https://www.tencentcloud.com/document/api/236/15842?from_cn_redirect=1) API.
     */
    public $BackupId;

    /**
     * @var string Backup type. data - data backup, binlog - log backup. The default value is data.
     */
    public $BackupType;

    /**
     * @param string $InstanceId Instance ID, in the format such as cdb-fybaegd8. This matches the instance ID displayed on the TencentDB console.
     * @param integer $BackupId Backup ID of the instance, which can be obtained through the [DescribeBackups](https://www.tencentcloud.com/document/api/236/15842?from_cn_redirect=1) API.
     * @param string $BackupType Backup type. data - data backup, binlog - log backup. The default value is data.
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }
    }
}
