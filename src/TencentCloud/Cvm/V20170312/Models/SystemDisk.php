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
 * Describes information on the block device where the operating system is stored, i.e., the system disk.
 *
 * @method string getDiskType() Obtain System disk type. For the restrictions on the system disk type, refer to [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). Value values:<br>
<li>LOCAL_BASIC: Local Disk</li>
<li>LOCAL_SSD: Local SSD</li>
<li>CLOUD_BASIC: Basic Cloud Disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li><br>
Default value: Current disk types with inventory available.
 * @method void setDiskType(string $DiskType) Set System disk type. For the restrictions on the system disk type, refer to [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). Value values:<br>
<li>LOCAL_BASIC: Local Disk</li>
<li>LOCAL_SSD: Local SSD</li>
<li>CLOUD_BASIC: Basic Cloud Disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li><br>
Default value: Current disk types with inventory available.
 * @method string getDiskId() Obtain System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
 * @method void setDiskId(string $DiskId) Set System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
 * @method integer getDiskSize() Obtain System disk size; unit: GB; default value: 50 GB.
 * @method void setDiskSize(integer $DiskSize) Set System disk size; unit: GB; default value: 50 GB.
 * @method string getCdcId() Obtain ID of the dedicated cluster to which the instance belongs.
 * @method void setCdcId(string $CdcId) Set ID of the dedicated cluster to which the instance belongs.
 * @method string getDiskName() Obtain Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
Note: This field may return null, indicating that no valid value is found.
 * @method void setDiskName(string $DiskName) Set Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
Note: This field may return null, indicating that no valid value is found.
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string System disk type. For the restrictions on the system disk type, refer to [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). Value values:<br>
<li>LOCAL_BASIC: Local Disk</li>
<li>LOCAL_SSD: Local SSD</li>
<li>CLOUD_BASIC: Basic Cloud Disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li><br>
Default value: Current disk types with inventory available.
     */
    public $DiskType;

    /**
     * @var string System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
     */
    public $DiskId;

    /**
     * @var integer System disk size; unit: GB; default value: 50 GB.
     */
    public $DiskSize;

    /**
     * @var string ID of the dedicated cluster to which the instance belongs.
     */
    public $CdcId;

    /**
     * @var string Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
Note: This field may return null, indicating that no valid value is found.
     */
    public $DiskName;

    /**
     * @param string $DiskType System disk type. For the restrictions on the system disk type, refer to [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). Value values:<br>
<li>LOCAL_BASIC: Local Disk</li>
<li>LOCAL_SSD: Local SSD</li>
<li>CLOUD_BASIC: Basic Cloud Disk</li>
<li>CLOUD_SSD: Cloud SSD</li>
<li>CLOUD_PREMIUM: Premium Disk</li>
<li>CLOUD_BSSD: Balanced SSD</li>
<li>CLOUD_HSSD: Enhanced SSD</li>
<li>CLOUD_TSSD: Tremendous SSD</li><br>
Default value: Current disk types with inventory available.
     * @param string $DiskId System disk ID. System disks whose type is `LOCAL_BASIC` or `LOCAL_SSD` do not have an ID and do not support this parameter.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
     * @param integer $DiskSize System disk size; unit: GB; default value: 50 GB.
     * @param string $CdcId ID of the dedicated cluster to which the instance belongs.
     * @param string $DiskName Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
Note: This field may return null, indicating that no valid value is found.
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
