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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of data disk in launch configuration. If this parameter is not specified, no data disk will be purchased by default. You can specify only one data disk when purchasing it.
 *
 * @method string getDiskType() Obtain Data disk type. for restrictions on data disk types, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
The default value is consistent with the system disk type (SystemDisk.DiskType).
 * @method void setDiskType(string $DiskType) Set Data disk type. for restrictions on data disk types, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
The default value is consistent with the system disk type (SystemDisk.DiskType).
 * @method integer getDiskSize() Obtain Data disk size, in GB. the value range varies according to the data disk type. for specific restrictions, see [CVM instance configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). default value: 0, which means no data disk is purchased. for more restrictions, see the [product documentation](https://intl.cloud.tencent.com/document/product/362/5145?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Data disk size, in GB. the value range varies according to the data disk type. for specific restrictions, see [CVM instance configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). default value: 0, which means no data disk is purchased. for more restrictions, see the [product documentation](https://intl.cloud.tencent.com/document/product/362/5145?from_cn_redirect=1).
 * @method string getSnapshotId() Obtain The data disk snapshot ID can be obtained through the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) api.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotId(string $SnapshotId) Set The data disk snapshot ID can be obtained through the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) api.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeleteWithInstance() Obtain Whether the data disk is terminated along with the instance. Valid values:
<li>TRUE: When the instance is terminated, the data disk is also terminated. This option is only supported for hourly postpaid cloud disks.</li>
<li>FALSE: When the instance is terminated, the data disk is retained.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether the data disk is terminated along with the instance. Valid values:
<li>TRUE: When the instance is terminated, the data disk is also terminated. This option is only supported for hourly postpaid cloud disks.</li>
<li>FALSE: When the instance is terminated, the data disk is retained.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEncrypt() Obtain Whether the data disk is encrypted. Valid values:
<li>TRUE: Encrypted.</li>
<li>FALSE: Not encrypted.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncrypt(boolean $Encrypt) Set Whether the data disk is encrypted. Valid values:
<li>TRUE: Encrypted.</li>
<li>FALSE: Not encrypted.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getThroughputPerformance() Obtain Cloud disk performance (MB/s). This parameter is used to purchase extra performance for the cloud disk. For details on the feature and limits, see [Enhanced SSD Performance](https://intl.cloud.tencent.com/document/product/362/51896?from_cn_redirect=1#. E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96 .E6.80.A7.E8.83.BD).
This feature is only available to enhanced SSD (`CLOUD_HSSD`) and tremendous SSD (`CLOUD_TSSD`) disks with a capacity greater than 460 GB.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Cloud disk performance (MB/s). This parameter is used to purchase extra performance for the cloud disk. For details on the feature and limits, see [Enhanced SSD Performance](https://intl.cloud.tencent.com/document/product/362/51896?from_cn_redirect=1#. E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96 .E6.80.A7.E8.83.BD).
This feature is only available to enhanced SSD (`CLOUD_HSSD`) and tremendous SSD (`CLOUD_TSSD`) disks with a capacity greater than 460 GB.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getBurstPerformance() Obtain Burst performance. specifies whether to enable burst performance. default value is false. this parameter only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity > 460GB.
Note: this feature is in beta test and requires a ticket to be submitted for usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Burst performance. specifies whether to enable burst performance. default value is false. this parameter only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity > 460GB.
Note: this feature is in beta test and requires a ticket to be submitted for usage.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string Data disk type. for restrictions on data disk types, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
The default value is consistent with the system disk type (SystemDisk.DiskType).
     */
    public $DiskType;

    /**
     * @var integer Data disk size, in GB. the value range varies according to the data disk type. for specific restrictions, see [CVM instance configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). default value: 0, which means no data disk is purchased. for more restrictions, see the [product documentation](https://intl.cloud.tencent.com/document/product/362/5145?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var string The data disk snapshot ID can be obtained through the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) api.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotId;

    /**
     * @var boolean Whether the data disk is terminated along with the instance. Valid values:
<li>TRUE: When the instance is terminated, the data disk is also terminated. This option is only supported for hourly postpaid cloud disks.</li>
<li>FALSE: When the instance is terminated, the data disk is retained.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeleteWithInstance;

    /**
     * @var boolean Whether the data disk is encrypted. Valid values:
<li>TRUE: Encrypted.</li>
<li>FALSE: Not encrypted.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Encrypt;

    /**
     * @var integer Cloud disk performance (MB/s). This parameter is used to purchase extra performance for the cloud disk. For details on the feature and limits, see [Enhanced SSD Performance](https://intl.cloud.tencent.com/document/product/362/51896?from_cn_redirect=1#. E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96 .E6.80.A7.E8.83.BD).
This feature is only available to enhanced SSD (`CLOUD_HSSD`) and tremendous SSD (`CLOUD_TSSD`) disks with a capacity greater than 460 GB.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ThroughputPerformance;

    /**
     * @var boolean Burst performance. specifies whether to enable burst performance. default value is false. this parameter only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity > 460GB.
Note: this feature is in beta test and requires a ticket to be submitted for usage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BurstPerformance;

    /**
     * @param string $DiskType Data disk type. for restrictions on data disk types, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
The default value is consistent with the system disk type (SystemDisk.DiskType).
     * @param integer $DiskSize Data disk size, in GB. the value range varies according to the data disk type. for specific restrictions, see [CVM instance configuration](https://intl.cloud.tencent.com/document/product/213/2177?from_cn_redirect=1). default value: 0, which means no data disk is purchased. for more restrictions, see the [product documentation](https://intl.cloud.tencent.com/document/product/362/5145?from_cn_redirect=1).
     * @param string $SnapshotId The data disk snapshot ID can be obtained through the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) api.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DeleteWithInstance Whether the data disk is terminated along with the instance. Valid values:
<li>TRUE: When the instance is terminated, the data disk is also terminated. This option is only supported for hourly postpaid cloud disks.</li>
<li>FALSE: When the instance is terminated, the data disk is retained.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Encrypt Whether the data disk is encrypted. Valid values:
<li>TRUE: Encrypted.</li>
<li>FALSE: Not encrypted.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ThroughputPerformance Cloud disk performance (MB/s). This parameter is used to purchase extra performance for the cloud disk. For details on the feature and limits, see [Enhanced SSD Performance](https://intl.cloud.tencent.com/document/product/362/51896?from_cn_redirect=1#. E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96 .E6.80.A7.E8.83.BD).
This feature is only available to enhanced SSD (`CLOUD_HSSD`) and tremendous SSD (`CLOUD_TSSD`) disks with a capacity greater than 460 GB.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $BurstPerformance Burst performance. specifies whether to enable burst performance. default value is false. this parameter only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity > 460GB.
Note: this feature is in beta test and requires a ticket to be submitted for usage.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }
    }
}
