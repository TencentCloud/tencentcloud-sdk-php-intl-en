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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes information on the block device where the operating system is stored, i.e., the system disk.
 *
 * @method string getDiskType() Obtain Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://www.tencentcloud.com/document/product/362/31636). value range:<br>
<li>LOCAL_BASIC: Local SATA disk</li>
<li>LOCAL_SSD: Local NVMe SSD</li>
<li>CLOUD_BASIC: Cloud SATA disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium SSD</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li>
Default value: Current disk types with inventory available.
 * @method void setDiskType(string $DiskType) Set Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://www.tencentcloud.com/document/product/362/31636). value range:<br>
<li>LOCAL_BASIC: Local SATA disk</li>
<li>LOCAL_SSD: Local NVMe SSD</li>
<li>CLOUD_BASIC: Cloud SATA disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium SSD</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li>
Default value: Current disk types with inventory available.
 * @method string getDiskId() Obtain System disk ID.
Currently, this parameter is only used for response parameters in query apis such as [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258) and is not applicable to request parameters in write apis such as [RunInstances](https://www.tencentcloud.com/document/api/213/33237).
 * @method void setDiskId(string $DiskId) Set System disk ID.
Currently, this parameter is only used for response parameters in query apis such as [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258) and is not applicable to request parameters in write apis such as [RunInstances](https://www.tencentcloud.com/document/api/213/33237).
 * @method integer getDiskSize() Obtain System disk size; unit: GiB; default value: 50 GiB.
 * @method void setDiskSize(integer $DiskSize) Set System disk size; unit: GiB; default value: 50 GiB.
 * @method string getCdcId() Obtain Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCdcId(string $CdcId) Set Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
 * @method string getDiskName() Obtain Disk name, which specifies a length not exceeding 128 characters.
 * @method void setDiskName(string $DiskName) Set Disk name, which specifies a length not exceeding 128 characters.
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://www.tencentcloud.com/document/product/362/31636). value range:<br>
<li>LOCAL_BASIC: Local SATA disk</li>
<li>LOCAL_SSD: Local NVMe SSD</li>
<li>CLOUD_BASIC: Cloud SATA disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium SSD</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li>
Default value: Current disk types with inventory available.
     */
    public $DiskType;

    /**
     * @var string System disk ID.
Currently, this parameter is only used for response parameters in query apis such as [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258) and is not applicable to request parameters in write apis such as [RunInstances](https://www.tencentcloud.com/document/api/213/33237).
     */
    public $DiskId;

    /**
     * @var integer System disk size; unit: GiB; default value: 50 GiB.
     */
    public $DiskSize;

    /**
     * @var string Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
     */
    public $CdcId;

    /**
     * @var string Disk name, which specifies a length not exceeding 128 characters.
     */
    public $DiskName;

    /**
     * @param string $DiskType Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://www.tencentcloud.com/document/product/362/31636). value range:<br>
<li>LOCAL_BASIC: Local SATA disk</li>
<li>LOCAL_SSD: Local NVMe SSD</li>
<li>CLOUD_BASIC: Cloud SATA disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium SSD</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li>
Default value: Current disk types with inventory available.
     * @param string $DiskId System disk ID.
Currently, this parameter is only used for response parameters in query apis such as [DescribeInstances](https://www.tencentcloud.com/document/api/213/33258) and is not applicable to request parameters in write apis such as [RunInstances](https://www.tencentcloud.com/document/api/213/33237).
     * @param integer $DiskSize System disk size; unit: GiB; default value: 50 GiB.
     * @param string $CdcId Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
     * @param string $DiskName Disk name, which specifies a length not exceeding 128 characters.
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }
    }
}
