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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackupDownloadTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method string getBackupName() Obtain Name of the backup file to be downloaded. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain it.
 * @method void setBackupName(string $BackupName) Set Name of the backup file to be downloaded. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain it.
 * @method array getBackupSets() Obtain Specifies the node ID of the replica set to be downloaded or the shard node ID list of the sharded cluster.
- If the replica set instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0, full data can be downloaded.
- If the sharded cluster instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0&BackupSets.1=cmgo-p8vnipr5_1, download the data of Shard 0 and Shard 1. If a full download is needed for the sharded cluster, import all shard names as shown in the example.
 * @method void setBackupSets(array $BackupSets) Set Specifies the node ID of the replica set to be downloaded or the shard node ID list of the sharded cluster.
- If the replica set instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0, full data can be downloaded.
- If the sharded cluster instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0&BackupSets.1=cmgo-p8vnipr5_1, download the data of Shard 0 and Shard 1. If a full download is needed for the sharded cluster, import all shard names as shown in the example.
 */
class CreateBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Name of the backup file to be downloaded. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain it.
     */
    public $BackupName;

    /**
     * @var array Specifies the node ID of the replica set to be downloaded or the shard node ID list of the sharded cluster.
- If the replica set instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0, full data can be downloaded.
- If the sharded cluster instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0&BackupSets.1=cmgo-p8vnipr5_1, download the data of Shard 0 and Shard 1. If a full download is needed for the sharded cluster, import all shard names as shown in the example.
     */
    public $BackupSets;

    /**
     * @param string $InstanceId Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param string $BackupName Name of the backup file to be downloaded. The [DescribeDBBackups](https://www.tencentcloud.comom/document/product/240/38574?from_cn_redirect=1) API can be called to obtain it.
     * @param array $BackupSets Specifies the node ID of the replica set to be downloaded or the shard node ID list of the sharded cluster.
- If the replica set instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0, full data can be downloaded.
- If the sharded cluster instance ID is cmgo-p8vnipr5, for example, BackupSets.0=cmgo-p8vnipr5_0&BackupSets.1=cmgo-p8vnipr5_1, download the data of Shard 0 and Shard 1. If a full download is needed for the sharded cluster, import all shard names as shown in the example.
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
