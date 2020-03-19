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
 * @method integer getBackupCount() Obtain Total number of backups of a user in the current region (including data backups and log backups).
 * @method void setBackupCount(integer $BackupCount) Set Total number of backups of a user in the current region (including data backups and log backups).
 * @method integer getBackupVolume() Obtain Total capacity of backups of a user in the current region.
 * @method void setBackupVolume(integer $BackupVolume) Set Total capacity of backups of a user in the current region.
 * @method integer getBillingVolume() Obtain Paid capacity of backups of a user in the current region, i.e., capacity that exceeds the free tier.
 * @method void setBillingVolume(integer $BillingVolume) Set Paid capacity of backups of a user in the current region, i.e., capacity that exceeds the free tier.
 * @method integer getFreeVolume() Obtain Backup capacity in the free tier of a user in the current region.
 * @method void setFreeVolume(integer $FreeVolume) Set Backup capacity in the free tier of a user in the current region.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeBackupOverview response structure.
 */
class DescribeBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total number of backups of a user in the current region (including data backups and log backups).
     */
    public $BackupCount;

    /**
     * @var integer Total capacity of backups of a user in the current region.
     */
    public $BackupVolume;

    /**
     * @var integer Paid capacity of backups of a user in the current region, i.e., capacity that exceeds the free tier.
     */
    public $BillingVolume;

    /**
     * @var integer Backup capacity in the free tier of a user in the current region.
     */
    public $FreeVolume;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $BackupCount Total number of backups of a user in the current region (including data backups and log backups).
     * @param integer $BackupVolume Total capacity of backups of a user in the current region.
     * @param integer $BillingVolume Paid capacity of backups of a user in the current region, i.e., capacity that exceeds the free tier.
     * @param integer $FreeVolume Backup capacity in the free tier of a user in the current region.
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
        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }

        if (array_key_exists("BackupVolume",$param) and $param["BackupVolume"] !== null) {
            $this->BackupVolume = $param["BackupVolume"];
        }

        if (array_key_exists("BillingVolume",$param) and $param["BillingVolume"] !== null) {
            $this->BillingVolume = $param["BillingVolume"];
        }

        if (array_key_exists("FreeVolume",$param) and $param["FreeVolume"] !== null) {
            $this->FreeVolume = $param["FreeVolume"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
