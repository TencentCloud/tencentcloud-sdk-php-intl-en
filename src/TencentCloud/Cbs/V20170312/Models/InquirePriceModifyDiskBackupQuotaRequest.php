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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceModifyDiskBackupQuota request structure.
 *
 * @method string getDiskId() Obtain Cloud disk ID, which can be queried through the `DescribeDisks` API.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID, which can be queried through the `DescribeDisks` API.
 * @method integer getDiskBackupQuota() Obtain Cloud disk backup point quota after the modification, i.e., the number of backup points that a cloud disk can have.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Cloud disk backup point quota after the modification, i.e., the number of backup points that a cloud disk can have.
 */
class InquirePriceModifyDiskBackupQuotaRequest extends AbstractModel
{
    /**
     * @var string Cloud disk ID, which can be queried through the `DescribeDisks` API.
     */
    public $DiskId;

    /**
     * @var integer Cloud disk backup point quota after the modification, i.e., the number of backup points that a cloud disk can have.
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskId Cloud disk ID, which can be queried through the `DescribeDisks` API.
     * @param integer $DiskBackupQuota Cloud disk backup point quota after the modification, i.e., the number of backup points that a cloud disk can have.
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
