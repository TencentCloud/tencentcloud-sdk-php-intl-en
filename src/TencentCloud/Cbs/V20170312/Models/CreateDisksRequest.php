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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisks request structure.
 *
 * @method Placement getPlacement() Obtain Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
 * @method void setPlacement(Placement $Placement) Set Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
 * @method string getDiskChargeType() Obtain Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
 * @method void setDiskChargeType(string $DiskChargeType) Set Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
 * @method string getDiskType() Obtain Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD Cloud Storage<br><li>CLOUD_PREMIUM: Premium Cloud Disk<br><li>CLOUD_BSSD: Balanced SSD<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: ulTra SSD.
 * @method void setDiskType(string $DiskType) Set Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD Cloud Storage<br><li>CLOUD_PREMIUM: Premium Cloud Disk<br><li>CLOUD_BSSD: Balanced SSD<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: ulTra SSD.
 * @method string getDiskName() Obtain Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
 * @method void setDiskName(string $DiskName) Set Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
 * @method array getTags() Obtain Tags bound to the cloud disk.
 * @method void setTags(array $Tags) Set Tags bound to the cloud disk.
 * @method string getSnapshotId() Obtain Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
 * @method integer getDiskCount() Obtain Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method void setDiskCount(integer $DiskCount) Set Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method integer getThroughputPerformance() Obtain Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for ulTra SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for ulTra SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
 * @method integer getDiskSize() Obtain Cloud disk size in GB. <br><li>`DiskSize` is not required if `SnapshotId` is specified. In this case, the size of the cloud disk will be equal to that of the snapshot. <br><li>If you specify both `SnapshotId` and `DiskSize`, the specified disk size cannot be smaller than the snapshot size. <br><li>For the value range of cloud disk size, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size in GB. <br><li>`DiskSize` is not required if `SnapshotId` is specified. In this case, the size of the cloud disk will be equal to that of the snapshot. <br><li>If you specify both `SnapshotId` and `DiskSize`, the specified disk size cannot be smaller than the snapshot size. <br><li>For the value range of cloud disk size, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method boolean getShareable() Obtain Optional parameter. Default value: `False`. If `True` is specified, the new cloud disk will be shared.
 * @method void setShareable(boolean $Shareable) Set Optional parameter. Default value: `False`. If `True` is specified, the new cloud disk will be shared.
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method string getEncrypt() Obtain This parameter is used to create encrypted cloud disks. It is fixed at `ENCRYPT`.
 * @method void setEncrypt(string $Encrypt) Set This parameter is used to create encrypted cloud disks. It is fixed at `ENCRYPT`.
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
 * @method integer getDeleteSnapshot() Obtain Whether to delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default value). `1`: Yes. To check whether a snapshot is permanently reserved, see the `IsPermanent` field returned by the `DescribeSnapshots` API.
 * @method void setDeleteSnapshot(integer $DeleteSnapshot) Set Whether to delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default value). `1`: Yes. To check whether a snapshot is permanently reserved, see the `IsPermanent` field returned by the `DescribeSnapshots` API.
 * @method AutoMountConfiguration getAutoMountConfiguration() Obtain Specifies whether to automatically attach and initialize the newly created data disk.
 * @method void setAutoMountConfiguration(AutoMountConfiguration $AutoMountConfiguration) Set Specifies whether to automatically attach and initialize the newly created data disk.
 * @method integer getDiskBackupQuota() Obtain Specifies the cloud disk backup point quota.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specifies the cloud disk backup point quota.
 * @method boolean getBurstPerformance() Obtain Specifies whether to enable disk bursting.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Specifies whether to enable disk bursting.
 */
class CreateDisksRequest extends AbstractModel
{
    /**
     * @var Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
     */
    public $Placement;

    /**
     * @var string Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
     */
    public $DiskChargeType;

    /**
     * @var string Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD Cloud Storage<br><li>CLOUD_PREMIUM: Premium Cloud Disk<br><li>CLOUD_BSSD: Balanced SSD<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: ulTra SSD.
     */
    public $DiskType;

    /**
     * @var string Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
     */
    public $DiskName;

    /**
     * @var array Tags bound to the cloud disk.
     */
    public $Tags;

    /**
     * @var string Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
     */
    public $SnapshotId;

    /**
     * @var integer Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
     */
    public $DiskCount;

    /**
     * @var integer Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for ulTra SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
     */
    public $ThroughputPerformance;

    /**
     * @var integer Cloud disk size in GB. <br><li>`DiskSize` is not required if `SnapshotId` is specified. In this case, the size of the cloud disk will be equal to that of the snapshot. <br><li>If you specify both `SnapshotId` and `DiskSize`, the specified disk size cannot be smaller than the snapshot size. <br><li>For the value range of cloud disk size, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var boolean Optional parameter. Default value: `False`. If `True` is specified, the new cloud disk will be shared.
     */
    public $Shareable;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var string This parameter is used to create encrypted cloud disks. It is fixed at `ENCRYPT`.
     */
    public $Encrypt;

    /**
     * @var DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Whether to delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default value). `1`: Yes. To check whether a snapshot is permanently reserved, see the `IsPermanent` field returned by the `DescribeSnapshots` API.
     */
    public $DeleteSnapshot;

    /**
     * @var AutoMountConfiguration Specifies whether to automatically attach and initialize the newly created data disk.
     */
    public $AutoMountConfiguration;

    /**
     * @var integer Specifies the cloud disk backup point quota.
     */
    public $DiskBackupQuota;

    /**
     * @var boolean Specifies whether to enable disk bursting.
     */
    public $BurstPerformance;

    /**
     * @param Placement $Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
     * @param string $DiskChargeType Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
     * @param string $DiskType Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD Cloud Storage<br><li>CLOUD_PREMIUM: Premium Cloud Disk<br><li>CLOUD_BSSD: Balanced SSD<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: ulTra SSD.
     * @param string $DiskName Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
     * @param array $Tags Tags bound to the cloud disk.
     * @param string $SnapshotId Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
     * @param integer $DiskCount Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
     * @param integer $ThroughputPerformance Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for ulTra SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
     * @param integer $DiskSize Cloud disk size in GB. <br><li>`DiskSize` is not required if `SnapshotId` is specified. In this case, the size of the cloud disk will be equal to that of the snapshot. <br><li>If you specify both `SnapshotId` and `DiskSize`, the specified disk size cannot be smaller than the snapshot size. <br><li>For the value range of cloud disk size, see [Cloud Disk Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     * @param boolean $Shareable Optional parameter. Default value: `False`. If `True` is specified, the new cloud disk will be shared.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param string $Encrypt This parameter is used to create encrypted cloud disks. It is fixed at `ENCRYPT`.
     * @param DiskChargePrepaid $DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
     * @param integer $DeleteSnapshot Whether to delete the associated non-permanently reserved snapshots upon deletion of the source cloud disk. `0`: No (default value). `1`: Yes. To check whether a snapshot is permanently reserved, see the `IsPermanent` field returned by the `DescribeSnapshots` API.
     * @param AutoMountConfiguration $AutoMountConfiguration Specifies whether to automatically attach and initialize the newly created data disk.
     * @param integer $DiskBackupQuota Specifies the cloud disk backup point quota.
     * @param boolean $BurstPerformance Specifies whether to enable disk bursting.
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DeleteSnapshot",$param) and $param["DeleteSnapshot"] !== null) {
            $this->DeleteSnapshot = $param["DeleteSnapshot"];
        }

        if (array_key_exists("AutoMountConfiguration",$param) and $param["AutoMountConfiguration"] !== null) {
            $this->AutoMountConfiguration = new AutoMountConfiguration();
            $this->AutoMountConfiguration->deserialize($param["AutoMountConfiguration"]);
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }
    }
}
