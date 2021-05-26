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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackupDownloadTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
 * @method string getBackupName() Obtain The name of the backup file to be downloaded, which can be obtained by the `DescribeDBBackups` API
 * @method void setBackupName(string $BackupName) Set The name of the backup file to be downloaded, which can be obtained by the `DescribeDBBackups` API
 * @method array getBackupSets() Obtain The list of shards whose backups will be downloaded
 * @method void setBackupSets(array $BackupSets) Set The list of shards whose backups will be downloaded
 */
class CreateBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
     */
    public $InstanceId;

    /**
     * @var string The name of the backup file to be downloaded, which can be obtained by the `DescribeDBBackups` API
     */
    public $BackupName;

    /**
     * @var array The list of shards whose backups will be downloaded
     */
    public $BackupSets;

    /**
     * @param string $InstanceId Instance ID in the format of "cmgo-p8vnipr5", which is the same as the instance ID displayed in the TencentDB console
     * @param string $BackupName The name of the backup file to be downloaded, which can be obtained by the `DescribeDBBackups` API
     * @param array $BackupSets The list of shards whose backups will be downloaded
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupSets",$param) and $param["BackupSets"] !== null) {
            $this->BackupSets = [];
            foreach ($param["BackupSets"] as $key => $value){
                $obj = new ReplicaSetInfo();
                $obj->deserialize($value);
                array_push($this->BackupSets, $obj);
            }
        }
    }
}
