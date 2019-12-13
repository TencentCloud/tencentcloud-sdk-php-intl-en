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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDiskType() 获取The system disk type. For more information about the limits on system disk types, see [Instance Types](/document/product/213/2177). Valid values:<br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_SSD: SSD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><br>Default value: CLOUD_BASIC.
 * @method void setDiskType(string $DiskType) 设置The system disk type. For more information about the limits on system disk types, see [Instance Types](/document/product/213/2177). Valid values:<br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_SSD: SSD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><br>Default value: CLOUD_BASIC.
 * @method string getDiskId() 获取System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
 * @method void setDiskId(string $DiskId) 设置System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
 * @method integer getDiskSize() 获取System disk size; unit: GB; default value: 50 GB.
 * @method void setDiskSize(integer $DiskSize) 设置System disk size; unit: GB; default value: 50 GB.
 */

/**
 *Describes information on the block device where the operating system is stored, i.e., the system disk.
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string The system disk type. For more information about the limits on system disk types, see [Instance Types](/document/product/213/2177). Valid values:<br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_SSD: SSD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><br>Default value: CLOUD_BASIC.
     */
    public $DiskType;

    /**
     * @var string System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
     */
    public $DiskId;

    /**
     * @var integer System disk size; unit: GB; default value: 50 GB.
     */
    public $DiskSize;
    /**
     * @param string $DiskType The system disk type. For more information about the limits on system disk types, see [Instance Types](/document/product/213/2177). Valid values:<br><li>LOCAL_BASIC: local disk<br><li>LOCAL_SSD: local SSD disk<br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_SSD: SSD cloud disk<br><li>CLOUD_PREMIUM: premium cloud storage<br><br>Default value: CLOUD_BASIC.
     * @param string $DiskId System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter currently.
     * @param integer $DiskSize System disk size; unit: GB; default value: 50 GB.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
