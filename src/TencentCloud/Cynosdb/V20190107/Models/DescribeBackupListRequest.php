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
 * DescribeBackupList request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getLimit() Obtain The number of results to be returned. Value range: (0,100]
 * @method void setLimit(integer $Limit) Set The number of results to be returned. Value range: (0,100]
 * @method integer getOffset() Obtain Record offset. Value range: [0,INF)
 * @method void setOffset(integer $Offset) Set Record offset. Value range: [0,INF)
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 * @method array getBackupIds() Obtain Backup ID
 * @method void setBackupIds(array $BackupIds) Set Backup ID
 * @method string getBackupType() Obtain Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
 * @method void setBackupType(string $BackupType) Set Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
 * @method string getBackupMethod() Obtain Back mode. Valid values: `auto` (automatic backup), `manual` (manual backup)
 * @method void setBackupMethod(string $BackupMethod) Set Back mode. Valid values: `auto` (automatic backup), `manual` (manual backup)
 * @method string getSnapShotType() Obtain 
 * @method void setSnapShotType(string $SnapShotType) Set 
 * @method string getStartTime() Obtain Backup start time
 * @method void setStartTime(string $StartTime) Set Backup start time
 * @method string getEndTime() Obtain Backup end time
 * @method void setEndTime(string $EndTime) Set Backup end time
 * @method array getFileNames() Obtain 
 * @method void setFileNames(array $FileNames) Set 
 * @method array getBackupNames() Obtain Backup alias, which supports fuzzy query.
 * @method void setBackupNames(array $BackupNames) Set Backup alias, which supports fuzzy query.
 * @method array getSnapshotIdList() Obtain ID list of the snapshot backup
 * @method void setSnapshotIdList(array $SnapshotIdList) Set ID list of the snapshot backup
 */
class DescribeBackupListRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer The number of results to be returned. Value range: (0,100]
     */
    public $Limit;

    /**
     * @var integer Record offset. Value range: [0,INF)
     */
    public $Offset;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var array Backup ID
     */
    public $BackupIds;

    /**
     * @var string Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
     */
    public $BackupType;

    /**
     * @var string Back mode. Valid values: `auto` (automatic backup), `manual` (manual backup)
     */
    public $BackupMethod;

    /**
     * @var string 
     */
    public $SnapShotType;

    /**
     * @var string Backup start time
     */
    public $StartTime;

    /**
     * @var string Backup end time
     */
    public $EndTime;

    /**
     * @var array 
     */
    public $FileNames;

    /**
     * @var array Backup alias, which supports fuzzy query.
     */
    public $BackupNames;

    /**
     * @var array ID list of the snapshot backup
     */
    public $SnapshotIdList;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Limit The number of results to be returned. Value range: (0,100]
     * @param integer $Offset Record offset. Value range: [0,INF)
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param array $BackupIds Backup ID
     * @param string $BackupType Backup type. Valid values: `snapshot` (snapshot backup), `logic` (logic backup).
     * @param string $BackupMethod Back mode. Valid values: `auto` (automatic backup), `manual` (manual backup)
     * @param string $SnapShotType 
     * @param string $StartTime Backup start time
     * @param string $EndTime Backup end time
     * @param array $FileNames 
     * @param array $BackupNames Backup alias, which supports fuzzy query.
     * @param array $SnapshotIdList ID list of the snapshot backup
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("SnapShotType",$param) and $param["SnapShotType"] !== null) {
            $this->SnapShotType = $param["SnapShotType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
        }

        if (array_key_exists("BackupNames",$param) and $param["BackupNames"] !== null) {
            $this->BackupNames = $param["BackupNames"];
        }

        if (array_key_exists("SnapshotIdList",$param) and $param["SnapshotIdList"] !== null) {
            $this->SnapshotIdList = $param["SnapshotIdList"];
        }
    }
}
