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
 * Describes data disk information.
 *
 * @method integer getDiskSize() Obtain Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
 * @method void setDiskSize(integer $DiskSize) Set Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
 * @method string getDiskType() Obtain Specifies the data disk type. for restrictions on data disk types, refer to [storage overview](https://www.tencentcloud.comom/document/product/213/4952?from_cn_redirect=1). valid values: <br /><li>LOCAL_BASIC: LOCAL disk</li> <li>LOCAL_SSD: LOCAL SSD</li><li>LOCAL_NVME: LOCAL NVME disk, which is closely related to InstanceType and cannot be specified</li><li>LOCAL_PRO: LOCAL HDD, which is closely related to InstanceType and cannot be specified</li><li>cloud_BASIC: BASIC cloud disk</li><li>cloud_PREMIUM: high-performance cloud block storage</li><li>cloud_SSD: SSD cloud disk</li><li>cloud_HSSD: enhanced SSD cloud disk</li> <li>cloud_TSSD: ultra-fast SSD cbs</li><li>cloud_BSSD: universal SSD cloud disk</li><br />default: LOCAL_BASIC.<br/><br />this parameter is invalid for the `ResizeInstanceDisk` api.
 * @method void setDiskType(string $DiskType) Set Specifies the data disk type. for restrictions on data disk types, refer to [storage overview](https://www.tencentcloud.comom/document/product/213/4952?from_cn_redirect=1). valid values: <br /><li>LOCAL_BASIC: LOCAL disk</li> <li>LOCAL_SSD: LOCAL SSD</li><li>LOCAL_NVME: LOCAL NVME disk, which is closely related to InstanceType and cannot be specified</li><li>LOCAL_PRO: LOCAL HDD, which is closely related to InstanceType and cannot be specified</li><li>cloud_BASIC: BASIC cloud disk</li><li>cloud_PREMIUM: high-performance cloud block storage</li><li>cloud_SSD: SSD cloud disk</li><li>cloud_HSSD: enhanced SSD cloud disk</li> <li>cloud_TSSD: ultra-fast SSD cbs</li><li>cloud_BSSD: universal SSD cloud disk</li><br />default: LOCAL_BASIC.<br/><br />this parameter is invalid for the `ResizeInstanceDisk` api.
 * @method string getDiskId() Obtain Specifies the data disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
 * @method void setDiskId(string $DiskId) Set Specifies the data disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
 * @method boolean getDeleteWithInstance() Obtain Whether the data disk is terminated with the instance. value range: <li>true: when the instance is terminated, the data disk is also terminated. only hourly postpaid cloud disks are supported. <li>false: when the instance is terminated, the data disk is retained. <br>default value: true <br>currently, this parameter is only used for the API `RunInstances`.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether the data disk is terminated with the instance. value range: <li>true: when the instance is terminated, the data disk is also terminated. only hourly postpaid cloud disks are supported. <li>false: when the instance is terminated, the data disk is retained. <br>default value: true <br>currently, this parameter is only used for the API `RunInstances`.
 * @method string getSnapshotId() Obtain Data disk snapshot ID. the size of the selected data disk snapshot must be less than the data disk size.
 * @method void setSnapshotId(string $SnapshotId) Set Data disk snapshot ID. the size of the selected data disk snapshot must be less than the data disk size.
 * @method boolean getEncrypt() Obtain Specifies whether the data disk is encrypted. value range: <li>true: encrypted</li> <li>false: unencrypted</li><br/> default value: false<br/> this parameter is currently only used for the `RunInstances` api.
 * @method void setEncrypt(boolean $Encrypt) Set Specifies whether the data disk is encrypted. value range: <li>true: encrypted</li> <li>false: unencrypted</li><br/> default value: false<br/> this parameter is currently only used for the `RunInstances` api.
 * @method string getKmsKeyId() Obtain Custom CMK ID, value is UUID or similar to kms-abcd1234. used for encrypted cloud disk.

This parameter is currently only used for the `RunInstances` api.
Note: This field may return null, indicating that no valid value is found.
 * @method void setKmsKeyId(string $KmsKeyId) Set Custom CMK ID, value is UUID or similar to kms-abcd1234. used for encrypted cloud disk.

This parameter is currently only used for the `RunInstances` api.
Note: This field may return null, indicating that no valid value is found.
 * @method integer getThroughputPerformance() Obtain Cloud disk performance (unit: MiB/s). specifies additional performance for cloud disks.
Currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
Note: This field may return null, indicating that no valid value is found.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Cloud disk performance (unit: MiB/s). specifies additional performance for cloud disks.
Currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
Note: This field may return null, indicating that no valid value is found.
 * @method string getCdcId() Obtain Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCdcId(string $CdcId) Set Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
 * @method boolean getBurstPerformance() Obtain Burstable performance.

<B>Note: this field is in beta test.</b>.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Burstable performance.

<B>Note: this field is in beta test.</b>.
 * @method string getDiskName() Obtain Disk name, with a length not exceeding 128 characters.
 * @method void setDiskName(string $DiskName) Set Disk name, with a length not exceeding 128 characters.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
     */
    public $DiskSize;

    /**
     * @var string Specifies the data disk type. for restrictions on data disk types, refer to [storage overview](https://www.tencentcloud.comom/document/product/213/4952?from_cn_redirect=1). valid values: <br /><li>LOCAL_BASIC: LOCAL disk</li> <li>LOCAL_SSD: LOCAL SSD</li><li>LOCAL_NVME: LOCAL NVME disk, which is closely related to InstanceType and cannot be specified</li><li>LOCAL_PRO: LOCAL HDD, which is closely related to InstanceType and cannot be specified</li><li>cloud_BASIC: BASIC cloud disk</li><li>cloud_PREMIUM: high-performance cloud block storage</li><li>cloud_SSD: SSD cloud disk</li><li>cloud_HSSD: enhanced SSD cloud disk</li> <li>cloud_TSSD: ultra-fast SSD cbs</li><li>cloud_BSSD: universal SSD cloud disk</li><br />default: LOCAL_BASIC.<br/><br />this parameter is invalid for the `ResizeInstanceDisk` api.
     */
    public $DiskType;

    /**
     * @var string Specifies the data disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
     */
    public $DiskId;

    /**
     * @var boolean Whether the data disk is terminated with the instance. value range: <li>true: when the instance is terminated, the data disk is also terminated. only hourly postpaid cloud disks are supported. <li>false: when the instance is terminated, the data disk is retained. <br>default value: true <br>currently, this parameter is only used for the API `RunInstances`.
     */
    public $DeleteWithInstance;

    /**
     * @var string Data disk snapshot ID. the size of the selected data disk snapshot must be less than the data disk size.
     */
    public $SnapshotId;

    /**
     * @var boolean Specifies whether the data disk is encrypted. value range: <li>true: encrypted</li> <li>false: unencrypted</li><br/> default value: false<br/> this parameter is currently only used for the `RunInstances` api.
     */
    public $Encrypt;

    /**
     * @var string Custom CMK ID, value is UUID or similar to kms-abcd1234. used for encrypted cloud disk.

This parameter is currently only used for the `RunInstances` api.
Note: This field may return null, indicating that no valid value is found.
     */
    public $KmsKeyId;

    /**
     * @var integer Cloud disk performance (unit: MiB/s). specifies additional performance for cloud disks.
Currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
Note: This field may return null, indicating that no valid value is found.
     */
    public $ThroughputPerformance;

    /**
     * @var string Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
     */
    public $CdcId;

    /**
     * @var boolean Burstable performance.

<B>Note: this field is in beta test.</b>.
     */
    public $BurstPerformance;

    /**
     * @var string Disk name, with a length not exceeding 128 characters.
     */
    public $DiskName;

    /**
     * @param integer $DiskSize Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
     * @param string $DiskType Specifies the data disk type. for restrictions on data disk types, refer to [storage overview](https://www.tencentcloud.comom/document/product/213/4952?from_cn_redirect=1). valid values: <br /><li>LOCAL_BASIC: LOCAL disk</li> <li>LOCAL_SSD: LOCAL SSD</li><li>LOCAL_NVME: LOCAL NVME disk, which is closely related to InstanceType and cannot be specified</li><li>LOCAL_PRO: LOCAL HDD, which is closely related to InstanceType and cannot be specified</li><li>cloud_BASIC: BASIC cloud disk</li><li>cloud_PREMIUM: high-performance cloud block storage</li><li>cloud_SSD: SSD cloud disk</li><li>cloud_HSSD: enhanced SSD cloud disk</li> <li>cloud_TSSD: ultra-fast SSD cbs</li><li>cloud_BSSD: universal SSD cloud disk</li><br />default: LOCAL_BASIC.<br/><br />this parameter is invalid for the `ResizeInstanceDisk` api.
     * @param string $DiskId Specifies the data disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
     * @param boolean $DeleteWithInstance Whether the data disk is terminated with the instance. value range: <li>true: when the instance is terminated, the data disk is also terminated. only hourly postpaid cloud disks are supported. <li>false: when the instance is terminated, the data disk is retained. <br>default value: true <br>currently, this parameter is only used for the API `RunInstances`.
     * @param string $SnapshotId Data disk snapshot ID. the size of the selected data disk snapshot must be less than the data disk size.
     * @param boolean $Encrypt Specifies whether the data disk is encrypted. value range: <li>true: encrypted</li> <li>false: unencrypted</li><br/> default value: false<br/> this parameter is currently only used for the `RunInstances` api.
     * @param string $KmsKeyId Custom CMK ID, value is UUID or similar to kms-abcd1234. used for encrypted cloud disk.

This parameter is currently only used for the `RunInstances` api.
Note: This field may return null, indicating that no valid value is found.
     * @param integer $ThroughputPerformance Cloud disk performance (unit: MiB/s). specifies additional performance for cloud disks.
Currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
Note: This field may return null, indicating that no valid value is found.
     * @param string $CdcId Specifies the dedicated cluster ID belonging to.
Note: This field may return null, indicating that no valid value is found.
     * @param boolean $BurstPerformance Burstable performance.

<B>Note: this field is in beta test.</b>.
     * @param string $DiskName Disk name, with a length not exceeding 128 characters.
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
