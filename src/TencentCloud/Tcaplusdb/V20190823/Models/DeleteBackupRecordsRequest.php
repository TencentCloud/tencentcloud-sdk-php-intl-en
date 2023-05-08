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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBackupRecords request structure.
 *
 * @method string getClusterId() Obtain Cluster ID of the backup records to be deleted
 * @method void setClusterId(string $ClusterId) Set Cluster ID of the backup records to be deleted
 * @method array getBackupRecords() Obtain Details of the backup records to be deleted
 * @method void setBackupRecords(array $BackupRecords) Set Details of the backup records to be deleted
 */
class DeleteBackupRecordsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID of the backup records to be deleted
     */
    public $ClusterId;

    /**
     * @var array Details of the backup records to be deleted
     */
    public $BackupRecords;

    /**
     * @param string $ClusterId Cluster ID of the backup records to be deleted
     * @param array $BackupRecords Details of the backup records to be deleted
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

        if (array_key_exists("BackupRecords",$param) and $param["BackupRecords"] !== null) {
            $this->BackupRecords = [];
            foreach ($param["BackupRecords"] as $key => $value){
                $obj = new BackupRecords();
                $obj->deserialize($value);
                array_push($this->BackupRecords, $obj);
            }
        }
    }
}
