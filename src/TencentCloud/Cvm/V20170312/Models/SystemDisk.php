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
 * @method string getDiskType() Obtain Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). value range:<br>.
<Li>LOCAL_BASIC: specifies a local hard disk.</li>.
<Li>LOCAL_SSD: specifies a local ssd.</li>.
<Li>CLOUD_BASIC: ordinary cloud disk.</li>.
<Li>CLOUD_SSD: ssd cloud disk</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage.</li>.
<Li>CLOUD_BSSD: universal type ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<li>CLOUD_TSSD: ultra-fast SSD cbs</li.
Default value: Current disk types with inventory available.
 * @method void setDiskType(string $DiskType) Set Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). value range:<br>.
<Li>LOCAL_BASIC: specifies a local hard disk.</li>.
<Li>LOCAL_SSD: specifies a local ssd.</li>.
<Li>CLOUD_BASIC: ordinary cloud disk.</li>.
<Li>CLOUD_SSD: ssd cloud disk</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage.</li>.
<Li>CLOUD_BSSD: universal type ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<li>CLOUD_TSSD: ultra-fast SSD cbs</li.
Default value: Current disk types with inventory available.
 * @method string getDiskId() Obtain Specifies the system disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
 * @method void setDiskId(string $DiskId) Set Specifies the system disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
 * @method integer getDiskSize() Obtain System disk size; unit: GiB; default value: 50 GiB.
 * @method void setDiskSize(integer $DiskSize) Set System disk size; unit: GiB; default value: 50 GiB.
 * @method string getCdcId() Obtain Specifies the exclusive cluster ID it belongs to.
 * @method void setCdcId(string $CdcId) Set Specifies the exclusive cluster ID it belongs to.
 * @method string getDiskName() Obtain Disk name, which specifies a length not exceeding 128 characters.
 * @method void setDiskName(string $DiskName) Set Disk name, which specifies a length not exceeding 128 characters.
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). value range:<br>.
<Li>LOCAL_BASIC: specifies a local hard disk.</li>.
<Li>LOCAL_SSD: specifies a local ssd.</li>.
<Li>CLOUD_BASIC: ordinary cloud disk.</li>.
<Li>CLOUD_SSD: ssd cloud disk</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage.</li>.
<Li>CLOUD_BSSD: universal type ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<li>CLOUD_TSSD: ultra-fast SSD cbs</li.
Default value: Current disk types with inventory available.
     */
    public $DiskType;

    /**
     * @var string Specifies the system disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
     */
    public $DiskId;

    /**
     * @var integer System disk size; unit: GiB; default value: 50 GiB.
     */
    public $DiskSize;

    /**
     * @var string Specifies the exclusive cluster ID it belongs to.
     */
    public $CdcId;

    /**
     * @var string Disk name, which specifies a length not exceeding 128 characters.
     */
    public $DiskName;

    /**
     * @param string $DiskType Specifies the system disk type. for the restrictions on the system disk type, refer to [storage overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). value range:<br>.
<Li>LOCAL_BASIC: specifies a local hard disk.</li>.
<Li>LOCAL_SSD: specifies a local ssd.</li>.
<Li>CLOUD_BASIC: ordinary cloud disk.</li>.
<Li>CLOUD_SSD: ssd cloud disk</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage.</li>.
<Li>CLOUD_BSSD: universal type ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<li>CLOUD_TSSD: ultra-fast SSD cbs</li.
Default value: Current disk types with inventory available.
     * @param string $DiskId Specifies the system disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
     * @param integer $DiskSize System disk size; unit: GiB; default value: 50 GiB.
     * @param string $CdcId Specifies the exclusive cluster ID it belongs to.
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
