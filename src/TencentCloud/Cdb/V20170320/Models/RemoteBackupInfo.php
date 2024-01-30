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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the remote backup
 *
 * @method integer getSubBackupId() Obtain ID of the remote backup subtask
 * @method void setSubBackupId(integer $SubBackupId) Set ID of the remote backup subtask
 * @method string getRegion() Obtain The region where the remote backup resides
 * @method void setRegion(string $Region) Set The region where the remote backup resides
 * @method string getStatus() Obtain Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
 * @method void setStatus(string $Status) Set Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
 * @method string getStartTime() Obtain The start time of remote backup
 * @method void setStartTime(string $StartTime) Set The start time of remote backup
 * @method string getFinishTime() Obtain The end time of remote backup
 * @method void setFinishTime(string $FinishTime) Set The end time of remote backup
 * @method string getUrl() Obtain The download address
 * @method void setUrl(string $Url) Set The download address
 */
class RemoteBackupInfo extends AbstractModel
{
    /**
     * @var integer ID of the remote backup subtask
     */
    public $SubBackupId;

    /**
     * @var string The region where the remote backup resides
     */
    public $Region;

    /**
     * @var string Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
     */
    public $Status;

    /**
     * @var string The start time of remote backup
     */
    public $StartTime;

    /**
     * @var string The end time of remote backup
     */
    public $FinishTime;

    /**
     * @var string The download address
     */
    public $Url;

    /**
     * @param integer $SubBackupId ID of the remote backup subtask
     * @param string $Region The region where the remote backup resides
     * @param string $Status Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
     * @param string $StartTime The start time of remote backup
     * @param string $FinishTime The end time of remote backup
     * @param string $Url The download address
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
        if (array_key_exists("SubBackupId",$param) and $param["SubBackupId"] !== null) {
            $this->SubBackupId = $param["SubBackupId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
