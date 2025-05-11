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
 * @method integer getDiskSize() Obtain Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
 * @method void setDiskSize(integer $DiskSize) Set Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
 * @method string getDiskType() Obtain Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
 * @method void setDiskType(string $DiskType) Set Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
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
 * @method string getKmsKeyId() Obtain Custom CMK's corresponding ID, with a value of UUID or something similar to kms - abcd1234. used for encrypting cloud disks.

This parameter is currently only used for the `RunInstances` api.
 * @method void setKmsKeyId(string $KmsKeyId) Set Custom CMK's corresponding ID, with a value of UUID or something similar to kms - abcd1234. used for encrypting cloud disks.

This parameter is currently only used for the `RunInstances` api.
 * @method integer getThroughputPerformance() Obtain Specifies the cloud disk performance (unit: MiB/s). using this parameter allows you to purchase additional performance for the cloud disk.
Currently only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Specifies the cloud disk performance (unit: MiB/s). using this parameter allows you to purchase additional performance for the cloud disk.
Currently only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
 * @method string getCdcId() Obtain Specifies the exclusive cluster ID it belongs to.
 * @method void setCdcId(string $CdcId) Set Specifies the exclusive cluster ID it belongs to.
 * @method boolean getBurstPerformance() Obtain Burst performance.

<B>Note: this feature is in beta test.</b>.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Burst performance.

<B>Note: this feature is in beta test.</b>.
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
     * @var string Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
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
     * @var string Custom CMK's corresponding ID, with a value of UUID or something similar to kms - abcd1234. used for encrypting cloud disks.

This parameter is currently only used for the `RunInstances` api.
     */
    public $KmsKeyId;

    /**
     * @var integer Specifies the cloud disk performance (unit: MiB/s). using this parameter allows you to purchase additional performance for the cloud disk.
Currently only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
     */
    public $ThroughputPerformance;

    /**
     * @var string Specifies the exclusive cluster ID it belongs to.
     */
    public $CdcId;

    /**
     * @var boolean Burst performance.

<B>Note: this feature is in beta test.</b>.
     */
    public $BurstPerformance;

    /**
     * @var string Disk name, with a length not exceeding 128 characters.
     */
    public $DiskName;

    /**
     * @param integer $DiskSize Data disk size, unit: GiB. the minimum adjustment step size is 10 GiB. the value ranges of different data disk types vary. for specific limitations, see the storage overview (https://intl.cloud.tencent.com/document/product/213/4952?from_cn_redirect=1). the default value is 0, which means no data disk purchase. for more restrictions, see the product document.
     * @param string $DiskType Data disk type. For the detailed restrictions on the data disk type, refer to [Storage Overview](https://cloud.tencent.com/document/product/213/4952). Valid values: <br /><li>LOCAL_BASIC: Local Disk <br /><li>LOCAL_SSD: Local SSD <br /><li>LOCAL_NVME: Local NVMe Disk, which is strongly related with InstanceType and can not be specified <br /><li>LOCAL_PRO: Local HDD, which is strongly related with InstanceType and can not be specified <br /><li>CLOUD_BASIC: Basic Cloud Disk <br /><li>CLOUD_PREMIUM: Premium Disk <br /><li>CLOUD_SSD: Cloud SSD <br /><li>CLOUD_HSSD: Enhanced SSD <br /><li>CLOUD_TSSD: Tremendous SSD <br /><li>CLOUD_BSSD: Balanced SSD <br /><br />Default value: LOCAL_BASIC. <br /><br />This parameter is invalid for the `ResizeInstanceDisk` API.</li></li></li> </li> </li></li></li></li></li></li>
     * @param string $DiskId Specifies the data disk ID.
This parameter currently only serves as a response parameter for query apis such as `DescribeInstances`, and cannot be used as an input parameter for write apis such as `RunInstances`.
     * @param boolean $DeleteWithInstance Whether the data disk is terminated with the instance. value range: <li>true: when the instance is terminated, the data disk is also terminated. only hourly postpaid cloud disks are supported. <li>false: when the instance is terminated, the data disk is retained. <br>default value: true <br>currently, this parameter is only used for the API `RunInstances`.
     * @param string $SnapshotId Data disk snapshot ID. the size of the selected data disk snapshot must be less than the data disk size.
     * @param boolean $Encrypt Specifies whether the data disk is encrypted. value range: <li>true: encrypted</li> <li>false: unencrypted</li><br/> default value: false<br/> this parameter is currently only used for the `RunInstances` api.
     * @param string $KmsKeyId Custom CMK's corresponding ID, with a value of UUID or something similar to kms - abcd1234. used for encrypting cloud disks.

This parameter is currently only used for the `RunInstances` api.
     * @param integer $ThroughputPerformance Specifies the cloud disk performance (unit: MiB/s). using this parameter allows you to purchase additional performance for the cloud disk.
Currently only supports ultra-fast CLOUD disk (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD).
     * @param string $CdcId Specifies the exclusive cluster ID it belongs to.
     * @param boolean $BurstPerformance Burst performance.

<B>Note: this feature is in beta test.</b>.
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
