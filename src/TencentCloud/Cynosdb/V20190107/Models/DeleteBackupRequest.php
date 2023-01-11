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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBackup request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getSnapshotIdList() Obtain Backup file ID. This field is used by legacy versions and thus not recommended.
 * @method void setSnapshotIdList(array $SnapshotIdList) Set Backup file ID. This field is used by legacy versions and thus not recommended.
 * @method array getBackupIds() Obtain Backup file ID. This field is recommended.
 * @method void setBackupIds(array $BackupIds) Set Backup file ID. This field is recommended.
 */
class DeleteBackupRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Backup file ID. This field is used by legacy versions and thus not recommended.
     */
    public $SnapshotIdList;

    /**
     * @var array Backup file ID. This field is recommended.
     */
    public $BackupIds;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $SnapshotIdList Backup file ID. This field is used by legacy versions and thus not recommended.
     * @param array $BackupIds Backup file ID. This field is recommended.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SnapshotIdList",$param) and $param["SnapshotIdList"] !== null) {
            $this->SnapshotIdList = $param["SnapshotIdList"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }
    }
}
