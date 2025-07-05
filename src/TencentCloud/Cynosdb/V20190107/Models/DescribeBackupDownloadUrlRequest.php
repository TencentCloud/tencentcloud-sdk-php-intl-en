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
 * DescribeBackupDownloadUrl request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getBackupId() Obtain Backup ID
 * @method void setBackupId(integer $BackupId) Set Backup ID
 * @method BackupLimitRestriction getDownloadRestriction() Obtain Backup download source restriction condition.
 * @method void setDownloadRestriction(BackupLimitRestriction $DownloadRestriction) Set Backup download source restriction condition.
 */
class DescribeBackupDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Backup ID
     */
    public $BackupId;

    /**
     * @var BackupLimitRestriction Backup download source restriction condition.
     */
    public $DownloadRestriction;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $BackupId Backup ID
     * @param BackupLimitRestriction $DownloadRestriction Backup download source restriction condition.
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DownloadRestriction",$param) and $param["DownloadRestriction"] !== null) {
            $this->DownloadRestriction = new BackupLimitRestriction();
            $this->DownloadRestriction->deserialize($param["DownloadRestriction"]);
        }
    }
}
