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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiskBackupQuota request structure.
 *
 * @method string getDiskId() Obtain Cloud disk ID.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID.
 * @method integer getDiskBackupQuota() Obtain Cloud disk backup point quota after the adjustment
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Cloud disk backup point quota after the adjustment
 */
class ModifyDiskBackupQuotaRequest extends AbstractModel
{
    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

    /**
     * @var integer Cloud disk backup point quota after the adjustment
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskId Cloud disk ID.
     * @param integer $DiskBackupQuota Cloud disk backup point quota after the adjustment
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
