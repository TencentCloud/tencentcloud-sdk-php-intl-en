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
 * ModifyDiskBackupQuota request structure.
 *
 * @method string getDiskId() Obtain Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
 * @method integer getDiskBackupQuota() Obtain Adjusted cloud disk backup point quota. value range: 1-1024.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Adjusted cloud disk backup point quota. value range: 1-1024.
 */
class ModifyDiskBackupQuotaRequest extends AbstractModel
{
    /**
     * @var string Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
     */
    public $DiskId;

    /**
     * @var integer Adjusted cloud disk backup point quota. value range: 1-1024.
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskId Cloud disk ID. can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
     * @param integer $DiskBackupQuota Adjusted cloud disk backup point quota. value range: 1-1024.
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
