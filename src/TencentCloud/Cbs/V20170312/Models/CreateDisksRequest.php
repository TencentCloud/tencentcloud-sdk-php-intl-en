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
 * CreateDisks request structure.
 *
 * @method Placement getPlacement() Obtain Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
 * @method void setPlacement(Placement $Placement) Set Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
 * @method string getDiskChargeType() Obtain Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
 * @method void setDiskChargeType(string $DiskChargeType) Set Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
 * @method string getDiskType() Obtain Hard disk media type. valid values:<br><li>CLOUD_PREMIUM: indicates high-performance CLOUD block storage</li><br><li>CLOUD_BSSD: indicates universal type SSD CLOUD disk</li><br><li>CLOUD_SSD: indicates SSD CLOUD disk</li><br><li>CLOUD_HSSD: indicates enhanced SSD CLOUD disk</li><br><li>CLOUD_TSSD: indicates ultra-fast SSD cbs.</li>ultra-fast SSD CBS (CLOUD_TSSD) is only supported when purchased with some instances and not currently supported for separate creation.
 * @method void setDiskType(string $DiskType) Set Hard disk media type. valid values:<br><li>CLOUD_PREMIUM: indicates high-performance CLOUD block storage</li><br><li>CLOUD_BSSD: indicates universal type SSD CLOUD disk</li><br><li>CLOUD_SSD: indicates SSD CLOUD disk</li><br><li>CLOUD_HSSD: indicates enhanced SSD CLOUD disk</li><br><li>CLOUD_TSSD: indicates ultra-fast SSD cbs.</li>ultra-fast SSD CBS (CLOUD_TSSD) is only supported when purchased with some instances and not currently supported for separate creation.
 * @method string getDiskName() Obtain Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
 * @method void setDiskName(string $DiskName) Set Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
 * @method array getTags() Obtain Tags bound to the cloud disk.
 * @method void setTags(array $Tags) Set Tags bound to the cloud disk.
 * @method string getSnapshotId() Obtain Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
 * @method integer getDiskCount() Obtain Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method void setDiskCount(integer $DiskCount) Set Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method integer getThroughputPerformance() Obtain Use this parameter to purchase additional performance for CLOUD disk in MB/s.<br>currently, only extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) are supported.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Use this parameter to purchase additional performance for CLOUD disk in MB/s.<br>currently, only extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) are supported.
 * @method string getKmsKeyId() Obtain Custom key for purchasing encrypted disks. when this parameter is input, the Encrypt parameter cannot be empty.
 * @method void setKmsKeyId(string $KmsKeyId) Set Custom key for purchasing encrypted disks. when this parameter is input, the Encrypt parameter cannot be empty.
 * @method integer getDiskSize() Obtain Cloud disk size in GiB. <li>if `SnapshotId` is input, `DiskSize` can be omitted. at this point, the new cloud disk size will be the snapshot size.</li> <li>if both `SnapshotId` and `DiskSize` are input, the cloud disk size must be greater than or equal to the snapshot size.</li> <li>for the cloud disk size range, please refer to the [product type](https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1) of cloud block storage.</li>.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size in GiB. <li>if `SnapshotId` is input, `DiskSize` can be omitted. at this point, the new cloud disk size will be the snapshot size.</li> <li>if both `SnapshotId` and `DiskSize` are input, the cloud disk size must be greater than or equal to the snapshot size.</li> <li>for the cloud disk size range, please refer to the [product type](https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1) of cloud block storage.</li>.
 * @method boolean getShareable() Obtain When True is entered, the cloud disk will be created as a shared cloud disk. default is False. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Encrypt parameter.
 * @method void setShareable(boolean $Shareable) Set When True is entered, the cloud disk will be created as a shared cloud disk. default is False. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Encrypt parameter.
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
 * @method string getEncrypt() Obtain This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Shareable parameter.
 * @method void setEncrypt(string $Encrypt) Set This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Shareable parameter.
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
 * @method integer getDeleteSnapshot() Obtain Delete associated non-permanently retained snapshots when destroying the cloud disk. 0 means non-permanent snapshots are not deleted with cloud disk destruction, 1 means non-permanent snapshots are deleted with cloud disk destruction. default value is 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the [DescribeSnapshots](https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1) api. True represents a permanent snapshot, False represents a non-permanent snapshot.
 * @method void setDeleteSnapshot(integer $DeleteSnapshot) Set Delete associated non-permanently retained snapshots when destroying the cloud disk. 0 means non-permanent snapshots are not deleted with cloud disk destruction, 1 means non-permanent snapshots are deleted with cloud disk destruction. default value is 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the [DescribeSnapshots](https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1) api. True represents a permanent snapshot, False represents a non-permanent snapshot.
 * @method AutoMountConfiguration getAutoMountConfiguration() Obtain Specifies auto mount and initialization of the data disk when creating a cloud disk. this parameter cannot be imported simultaneously with the Encrypt parameter because encrypted disks do not support auto mount or initialization.
 * @method void setAutoMountConfiguration(AutoMountConfiguration $AutoMountConfiguration) Set Specifies auto mount and initialization of the data disk when creating a cloud disk. this parameter cannot be imported simultaneously with the Encrypt parameter because encrypted disks do not support auto mount or initialization.
 * @method integer getDiskBackupQuota() Obtain Specifies the cloud disk backup point quota.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specifies the cloud disk backup point quota.
 * @method boolean getBurstPerformance() Obtain Specifies whether to enable burst performance when creating a CLOUD disk. currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with CLOUD disk size greater than or equal to 460GiB.
 * @method void setBurstPerformance(boolean $BurstPerformance) Set Specifies whether to enable burst performance when creating a CLOUD disk. currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with CLOUD disk size greater than or equal to 460GiB.
 * @method string getEncryptType() Obtain Specifies the CBS encryption type. valid values are ENCRYPT_V1 and ENCRYPT_V2, representing first generation and second generation encryption technology respectively. the two encryption technologies are incompatible. it is recommended to prioritize using second generation encryption technology ENCRYPT_V2. first generation encryption is only supported on some outdated models. this parameter is valid only when creating an encrypted cloud disk.
 * @method void setEncryptType(string $EncryptType) Set Specifies the CBS encryption type. valid values are ENCRYPT_V1 and ENCRYPT_V2, representing first generation and second generation encryption technology respectively. the two encryption technologies are incompatible. it is recommended to prioritize using second generation encryption technology ENCRYPT_V2. first generation encryption is only supported on some outdated models. this parameter is valid only when creating an encrypted cloud disk.
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
     * @var string Hard disk media type. valid values:<br><li>CLOUD_PREMIUM: indicates high-performance CLOUD block storage</li><br><li>CLOUD_BSSD: indicates universal type SSD CLOUD disk</li><br><li>CLOUD_SSD: indicates SSD CLOUD disk</li><br><li>CLOUD_HSSD: indicates enhanced SSD CLOUD disk</li><br><li>CLOUD_TSSD: indicates ultra-fast SSD cbs.</li>ultra-fast SSD CBS (CLOUD_TSSD) is only supported when purchased with some instances and not currently supported for separate creation.
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
     * @var integer Use this parameter to purchase additional performance for CLOUD disk in MB/s.<br>currently, only extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) are supported.
     */
    public $ThroughputPerformance;

    /**
     * @var string Custom key for purchasing encrypted disks. when this parameter is input, the Encrypt parameter cannot be empty.
     */
    public $KmsKeyId;

    /**
     * @var integer Cloud disk size in GiB. <li>if `SnapshotId` is input, `DiskSize` can be omitted. at this point, the new cloud disk size will be the snapshot size.</li> <li>if both `SnapshotId` and `DiskSize` are input, the cloud disk size must be greater than or equal to the snapshot size.</li> <li>for the cloud disk size range, please refer to the [product type](https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1) of cloud block storage.</li>.
     */
    public $DiskSize;

    /**
     * @var boolean When True is entered, the cloud disk will be created as a shared cloud disk. default is False. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Encrypt parameter.
     */
    public $Shareable;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     */
    public $ClientToken;

    /**
     * @var string This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Shareable parameter.
     */
    public $Encrypt;

    /**
     * @var DiskChargePrepaid Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Delete associated non-permanently retained snapshots when destroying the cloud disk. 0 means non-permanent snapshots are not deleted with cloud disk destruction, 1 means non-permanent snapshots are deleted with cloud disk destruction. default value is 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the [DescribeSnapshots](https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1) api. True represents a permanent snapshot, False represents a non-permanent snapshot.
     */
    public $DeleteSnapshot;

    /**
     * @var AutoMountConfiguration Specifies auto mount and initialization of the data disk when creating a cloud disk. this parameter cannot be imported simultaneously with the Encrypt parameter because encrypted disks do not support auto mount or initialization.
     */
    public $AutoMountConfiguration;

    /**
     * @var integer Specifies the cloud disk backup point quota.
     */
    public $DiskBackupQuota;

    /**
     * @var boolean Specifies whether to enable burst performance when creating a CLOUD disk. currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with CLOUD disk size greater than or equal to 460GiB.
     */
    public $BurstPerformance;

    /**
     * @var string Specifies the CBS encryption type. valid values are ENCRYPT_V1 and ENCRYPT_V2, representing first generation and second generation encryption technology respectively. the two encryption technologies are incompatible. it is recommended to prioritize using second generation encryption technology ENCRYPT_V2. first generation encryption is only supported on some outdated models. this parameter is valid only when creating an encrypted cloud disk.
     */
    public $EncryptType;

    /**
     * @param Placement $Placement Location of the instance. You can use this parameter to specify the attributes of the instance, such as its availability zone and project. If no project is specified, the default project will be used.
     * @param string $DiskChargeType Cloud disk billing mode. POSTPAID_BY_HOUR: Pay-as-you-go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For more information on the pricing in each mode, see [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
     * @param string $DiskType Hard disk media type. valid values:<br><li>CLOUD_PREMIUM: indicates high-performance CLOUD block storage</li><br><li>CLOUD_BSSD: indicates universal type SSD CLOUD disk</li><br><li>CLOUD_SSD: indicates SSD CLOUD disk</li><br><li>CLOUD_HSSD: indicates enhanced SSD CLOUD disk</li><br><li>CLOUD_TSSD: indicates ultra-fast SSD cbs.</li>ultra-fast SSD CBS (CLOUD_TSSD) is only supported when purchased with some instances and not currently supported for separate creation.
     * @param string $DiskName Cloud disk name. If it is not specified, "Unnamed" will be used by default. The maximum length is 60 bytes.
     * @param array $Tags Tags bound to the cloud disk.
     * @param string $SnapshotId Snapshot ID. If this parameter is specified, the cloud disk will be created based on the snapshot. The snapshot must be a data disk snapshot. To query the type of a snapshot, call the [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1) API and see the `DiskUsage` field in the response.
     * @param integer $DiskCount Number of cloud disks to be created. If it is not specified, `1` will be used by default. There is an upper limit on the maximum number of cloud disks that can be created in a single request. For more information, see [Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
     * @param integer $ThroughputPerformance Use this parameter to purchase additional performance for CLOUD disk in MB/s.<br>currently, only extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) are supported.
     * @param string $KmsKeyId Custom key for purchasing encrypted disks. when this parameter is input, the Encrypt parameter cannot be empty.
     * @param integer $DiskSize Cloud disk size in GiB. <li>if `SnapshotId` is input, `DiskSize` can be omitted. at this point, the new cloud disk size will be the snapshot size.</li> <li>if both `SnapshotId` and `DiskSize` are input, the cloud disk size must be greater than or equal to the snapshot size.</li> <li>for the cloud disk size range, please refer to the [product type](https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1) of cloud block storage.</li>.
     * @param boolean $Shareable When True is entered, the cloud disk will be created as a shared cloud disk. default is False. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Encrypt parameter.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
     * @param string $Encrypt This parameter is used to create an encrypted cloud disk, with the value fixed as ENCRYPT. since shared cloud disk does not support encryption, this parameter cannot be imported simultaneously with the Shareable parameter.
     * @param DiskChargePrepaid $DiskChargePrepaid Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
     * @param integer $DeleteSnapshot Delete associated non-permanently retained snapshots when destroying the cloud disk. 0 means non-permanent snapshots are not deleted with cloud disk destruction, 1 means non-permanent snapshots are deleted with cloud disk destruction. default value is 0. whether a snapshot is permanently retained can be determined through the IsPermanent field in the snapshot description returned by the [DescribeSnapshots](https://www.tencentcloud.com/document/api/362/15647?from_cn_redirect=1) api. True represents a permanent snapshot, False represents a non-permanent snapshot.
     * @param AutoMountConfiguration $AutoMountConfiguration Specifies auto mount and initialization of the data disk when creating a cloud disk. this parameter cannot be imported simultaneously with the Encrypt parameter because encrypted disks do not support auto mount or initialization.
     * @param integer $DiskBackupQuota Specifies the cloud disk backup point quota.
     * @param boolean $BurstPerformance Specifies whether to enable burst performance when creating a CLOUD disk. currently only supports extreme cbs (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with CLOUD disk size greater than or equal to 460GiB.
     * @param string $EncryptType Specifies the CBS encryption type. valid values are ENCRYPT_V1 and ENCRYPT_V2, representing first generation and second generation encryption technology respectively. the two encryption technologies are incompatible. it is recommended to prioritize using second generation encryption technology ENCRYPT_V2. first generation encryption is only supported on some outdated models. this parameter is valid only when creating an encrypted cloud disk.
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

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
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

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
