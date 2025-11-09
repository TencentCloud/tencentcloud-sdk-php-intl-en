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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getBackupType() Obtain 
 * @method void setBackupType(string $BackupType) Set 
 * @method string getBackupMethod() Obtain 
 * @method void setBackupMethod(string $BackupMethod) Set 
 * @method string getSnapshotTime() Obtain 
 * @method void setSnapshotTime(string $SnapshotTime) Set 
 * @method array getCrossRegionBackupInfos() Obtain Detailed information of cross-region backup items.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCrossRegionBackupInfos(array $CrossRegionBackupInfos) Set Detailed information of cross-region backup items.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ManualBackupData extends AbstractModel
{
    /**
     * @var string 
     */
    public $BackupType;

    /**
     * @var string 
     */
    public $BackupMethod;

    /**
     * @var string 
     */
    public $SnapshotTime;

    /**
     * @var array Detailed information of cross-region backup items.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CrossRegionBackupInfos;

    /**
     * @param string $BackupType 
     * @param string $BackupMethod 
     * @param string $SnapshotTime 
     * @param array $CrossRegionBackupInfos Detailed information of cross-region backup items.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("CrossRegionBackupInfos",$param) and $param["CrossRegionBackupInfos"] !== null) {
            $this->CrossRegionBackupInfos = [];
            foreach ($param["CrossRegionBackupInfos"] as $key => $value){
                $obj = new CrossRegionBackupItem();
                $obj->deserialize($value);
                array_push($this->CrossRegionBackupInfos, $obj);
            }
        }
    }
}
