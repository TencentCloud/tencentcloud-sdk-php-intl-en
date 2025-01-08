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
 * Describes data disk information.
 *
 * @method integer getDiskSize() Obtain Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
 * @method void setDiskSize(integer $DiskSize) Set Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
 * @method string getDiskType() Obtain Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
 * @method void setDiskType(string $DiskType) Set Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
 * @method string getDiskId() Obtain Data disk ID. Note that it's not available for `LOCAL_BASIC` and `LOCAL_SSD` disks.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
 * @method void setDiskId(string $DiskId) Set Data disk ID. Note that it's not available for `LOCAL_BASIC` and `LOCAL_SSD` disks.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
 * @method boolean getDeleteWithInstance() Obtain Whether the data disk is terminated with the Cloud Virtual Machine (CVM). Valid values:

<li>true: Terminate the data disk when the CVM is terminated. Only the pay-as-you-go cloud disk billed by hour is supported.</li>
<li>
  false: Retain the data disk when the CVM is terminated.<br />
  Default value: true.<br />
  This parameter is currently only used for the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether the data disk is terminated with the Cloud Virtual Machine (CVM). Valid values:

<li>true: Terminate the data disk when the CVM is terminated. Only the pay-as-you-go cloud disk billed by hour is supported.</li>
<li>
  false: Retain the data disk when the CVM is terminated.<br />
  Default value: true.<br />
  This parameter is currently only used for the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
 * @method string getSnapshotId() Obtain Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
 * @method void setSnapshotId(string $SnapshotId) Set Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
 * @method boolean getEncrypt() Obtain Whether a data disk is encrypted. Valid values:
<li>true: encrypted.</li>
<li>
  false: not encrypted.<br/>
  Default value: false.<br/>
  This parameter is currently used only in the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
 * @method void setEncrypt(boolean $Encrypt) Set Whether a data disk is encrypted. Valid values:
<li>true: encrypted.</li>
<li>
  false: not encrypted.<br/>
  Default value: false.<br/>
  This parameter is currently used only in the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
 * @method string getKmsKeyId() Obtain ID of the custom CMK in the format of UUID or "kms-abcd1234". This parameter is used to encrypt cloud disks.

Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKmsKeyId(string $KmsKeyId) Set ID of the custom CMK in the format of UUID or "kms-abcd1234". This parameter is used to encrypt cloud disks.

Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getThroughputPerformance() Obtain Cloud disk performance, in MB/s
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Cloud disk performance, in MB/s
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCdcId() Obtain ID of the dedicated cluster to which the instance belongs.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCdcId(string $CdcId) Set ID of the dedicated cluster to which the instance belongs.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getBurstPerformance() Obtain Burst performance.

 <b>Note: This field is in beta test.</b>
Note: This field may return null, indicating that no valid value is found.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Burst performance.

 <b>Note: This field is in beta test.</b>
Note: This field may return null, indicating that no valid value is found.
 * @method string getDiskName() Obtain Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
 * @method void setDiskName(string $DiskName) Set Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
     */
    public $DiskSize;

    /**
     * @var string Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
     */
    public $DiskType;

    /**
     * @var string Data disk ID. Note that it's not available for `LOCAL_BASIC` and `LOCAL_SSD` disks.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
     */
    public $DiskId;

    /**
     * @var boolean Whether the data disk is terminated with the Cloud Virtual Machine (CVM). Valid values:

<li>true: Terminate the data disk when the CVM is terminated. Only the pay-as-you-go cloud disk billed by hour is supported.</li>
<li>
  false: Retain the data disk when the CVM is terminated.<br />
  Default value: true.<br />
  This parameter is currently only used for the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
     */
    public $DeleteWithInstance;

    /**
     * @var string Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
     */
    public $SnapshotId;

    /**
     * @var boolean Whether a data disk is encrypted. Valid values:
<li>true: encrypted.</li>
<li>
  false: not encrypted.<br/>
  Default value: false.<br/>
  This parameter is currently used only in the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
     */
    public $Encrypt;

    /**
     * @var string ID of the custom CMK in the format of UUID or "kms-abcd1234". This parameter is used to encrypt cloud disks.

Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KmsKeyId;

    /**
     * @var integer Cloud disk performance, in MB/s
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ThroughputPerformance;

    /**
     * @var string ID of the dedicated cluster to which the instance belongs.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CdcId;

    /**
     * @var boolean Burst performance.

 <b>Note: This field is in beta test.</b>
Note: This field may return null, indicating that no valid value is found.
     */
    public $BurstPerformance;

    /**
     * @var string Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
     */
    public $DiskName;

    /**
     * @param integer $DiskSize Data disk size (in GB). The minimum adjustment increment is 10 GB. The value range varies by data disk type. For more information on limits, see [Storage Overview](https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). The default value is 0, indicating that no data disk is purchased. For more information, see the product documentation.
     * @param string $DiskType Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
     * @param string $DiskId Data disk ID. Note that it's not available for `LOCAL_BASIC` and `LOCAL_SSD` disks.
It is only used as a response parameter for APIs such as `DescribeInstances`, and cannot be used as a request parameter for APIs such as `RunInstances`.
     * @param boolean $DeleteWithInstance Whether the data disk is terminated with the Cloud Virtual Machine (CVM). Valid values:

<li>true: Terminate the data disk when the CVM is terminated. Only the pay-as-you-go cloud disk billed by hour is supported.</li>
<li>
  false: Retain the data disk when the CVM is terminated.<br />
  Default value: true.<br />
  This parameter is currently only used for the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
     * @param string $SnapshotId Data disk snapshot ID. The size of the selected data disk snapshot must be smaller than that of the data disk.
Note: This field may return null, indicating that no valid value is found.
     * @param boolean $Encrypt Whether a data disk is encrypted. Valid values:
<li>true: encrypted.</li>
<li>
  false: not encrypted.<br/>
  Default value: false.<br/>
  This parameter is currently used only in the `RunInstances` API.
</li>
Note: This field may return null, indicating that no valid value is found.
     * @param string $KmsKeyId ID of the custom CMK in the format of UUID or "kms-abcd1234". This parameter is used to encrypt cloud disks.

Currently, this parameter is only used in the `RunInstances` API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ThroughputPerformance Cloud disk performance, in MB/s
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CdcId ID of the dedicated cluster to which the instance belongs.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $BurstPerformance Burst performance.

 <b>Note: This field is in beta test.</b>
Note: This field may return null, indicating that no valid value is found.
     * @param string $DiskName Disk name, with a length of not more than 128 characters.

This parameter is in invite-only testing and is not yet open for use.
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }
    }
}
