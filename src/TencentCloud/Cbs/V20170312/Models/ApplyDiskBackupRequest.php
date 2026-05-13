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
 * ApplyDiskBackup request structure.
 *
 * @method string getDiskBackupId() Obtain Cloud disk backup point ID. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
 * @method void setDiskBackupId(string $DiskBackupId) Set Cloud disk backup point ID. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
 * @method string getDiskId() Obtain Original cloud disk ID of the backup point. can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
 * @method void setDiskId(string $DiskId) Set Original cloud disk ID of the backup point. can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
 * @method boolean getAutoStopInstance() Obtain Specifies whether to enable automatic shutdown before rolling back the CBS backup point. defaults to FALSE, which means no automatic shutdown.
 * @method void setAutoStopInstance(boolean $AutoStopInstance) Set Specifies whether to enable automatic shutdown before rolling back the CBS backup point. defaults to FALSE, which means no automatic shutdown.
 * @method boolean getAutoStartInstance() Obtain Whether to automatically start after rolling back the cloud disk backup point, default to FALSE, means do not auto boot. the AutoStartInstance parameter can only be set to true when AutoStopInstance is true.
 * @method void setAutoStartInstance(boolean $AutoStartInstance) Set Whether to automatically start after rolling back the cloud disk backup point, default to FALSE, means do not auto boot. the AutoStartInstance parameter can only be set to true when AutoStopInstance is true.
 */
class ApplyDiskBackupRequest extends AbstractModel
{
    /**
     * @var string Cloud disk backup point ID. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
     */
    public $DiskBackupId;

    /**
     * @var string Original cloud disk ID of the backup point. can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
     */
    public $DiskId;

    /**
     * @var boolean Specifies whether to enable automatic shutdown before rolling back the CBS backup point. defaults to FALSE, which means no automatic shutdown.
     */
    public $AutoStopInstance;

    /**
     * @var boolean Whether to automatically start after rolling back the cloud disk backup point, default to FALSE, means do not auto boot. the AutoStartInstance parameter can only be set to true when AutoStopInstance is true.
     */
    public $AutoStartInstance;

    /**
     * @param string $DiskBackupId Cloud disk backup point ID. can be queried through the [DescribeDiskBackups](https://www.tencentcloud.com/document/product/362/80278?from_cn_redirect=1) api.
     * @param string $DiskId Original cloud disk ID of the backup point. can be queried through the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api.
     * @param boolean $AutoStopInstance Specifies whether to enable automatic shutdown before rolling back the CBS backup point. defaults to FALSE, which means no automatic shutdown.
     * @param boolean $AutoStartInstance Whether to automatically start after rolling back the cloud disk backup point, default to FALSE, means do not auto boot. the AutoStartInstance parameter can only be set to true when AutoStopInstance is true.
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
        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("AutoStopInstance",$param) and $param["AutoStopInstance"] !== null) {
            $this->AutoStopInstance = $param["AutoStopInstance"];
        }

        if (array_key_exists("AutoStartInstance",$param) and $param["AutoStartInstance"] !== null) {
            $this->AutoStartInstance = $param["AutoStartInstance"];
        }
    }
}
