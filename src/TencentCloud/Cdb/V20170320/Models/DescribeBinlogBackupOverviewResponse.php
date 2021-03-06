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
 * DescribeBinlogBackupOverview response structure.
 *
 * @method integer getBinlogBackupVolume() Obtain Total capacity of log backups in bytes.
 * @method void setBinlogBackupVolume(integer $BinlogBackupVolume) Set Total capacity of log backups in bytes.
 * @method integer getBinlogBackupCount() Obtain Total number of log backups.
 * @method void setBinlogBackupCount(integer $BinlogBackupCount) Set Total number of log backups.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBinlogBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total capacity of log backups in bytes.
     */
    public $BinlogBackupVolume;

    /**
     * @var integer Total number of log backups.
     */
    public $BinlogBackupCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BinlogBackupVolume Total capacity of log backups in bytes.
     * @param integer $BinlogBackupCount Total number of log backups.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("BinlogBackupVolume",$param) and $param["BinlogBackupVolume"] !== null) {
            $this->BinlogBackupVolume = $param["BinlogBackupVolume"];
        }

        if (array_key_exists("BinlogBackupCount",$param) and $param["BinlogBackupCount"] !== null) {
            $this->BinlogBackupCount = $param["BinlogBackupCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
