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
 * @method string getDiskType() Obtain Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD
 * @method void setDiskType(string $DiskType) Set Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD
 * @method string getDiskChargeType() Obtain Cloud disk billing method. POSTPAID_BY_HOUR: pay as you go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For information about the pricing of each method, see the cloud disk [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
 * @method void setDiskChargeType(string $DiskChargeType) Set Cloud disk billing method. POSTPAID_BY_HOUR: pay as you go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For information about the pricing of each method, see the cloud disk [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
 * @method Placement getPlacement() Obtain The location of the instance. The availability zone and the project that the instance belongs to can be specified using this parameter. If the project is not specified, it will be created under the default project.
 * @method void setPlacement(Placement $Placement) Set The location of the instance. The availability zone and the project that the instance belongs to can be specified using this parameter. If the project is not specified, it will be created under the default project.
 * @method string getDiskName() Obtain The displayed name of the cloud disk. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
 * @method void setDiskName(string $DiskName) Set The displayed name of the cloud disk. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
 * @method integer getDiskCount() Obtain If the number of cloud disks to be created is left empty, the default is 1. There is a limit to the maximum number of cloud disks that can be created for a single request. For more information, please see [CBS Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method void setDiskCount(integer $DiskCount) Set If the number of cloud disks to be created is left empty, the default is 1. There is a limit to the maximum number of cloud disks that can be created for a single request. For more information, please see [CBS Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
 * @method integer getDiskSize() Obtain Cloud hard disk size (in GB). <br><li> If `SnapshotId` is passed, `DiskSize` cannot be passed. In this case, the size of the cloud disk is the size of the snapshot. <br><li>To pass `SnapshotId` and `DiskSize` at the same time, the size of the disk must be larger than or equal to the size of the snapshot. <br><li>For information about the size range of cloud disks, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Cloud hard disk size (in GB). <br><li> If `SnapshotId` is passed, `DiskSize` cannot be passed. In this case, the size of the cloud disk is the size of the snapshot. <br><li>To pass `SnapshotId` and `DiskSize` at the same time, the size of the disk must be larger than or equal to the size of the snapshot. <br><li>For information about the size range of cloud disks, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method string getSnapshotId() Obtain Snapshot ID. If this parameter is specified, the cloud disk is created based on the snapshot. The snapshot type must be a data disk snapshot. The snapshot can be queried in the DiskUsage field in the output parameter through the API [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID. If this parameter is specified, the cloud disk is created based on the snapshot. The snapshot type must be a data disk snapshot. The snapshot can be queried in the DiskUsage field in the output parameter through the API [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
 * @method string getClientToken() Obtain A string to ensure the idempotency of the request, which is generated by the client. Each request shall have a unique string with a maximum of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be ensured.
 * @method void setClientToken(string $ClientToken) Set A string to ensure the idempotency of the request, which is generated by the client. Each request shall have a unique string with a maximum of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be ensured.
 * @method string getEncrypt() Obtain This parameter is used to create an encrypted cloud disk. Its value is always ENCRYPT.
 * @method void setEncrypt(string $Encrypt) Set This parameter is used to create an encrypted cloud disk. Its value is always ENCRYPT.
 * @method array getTags() Obtain Cloud disk binding tag.
 * @method void setTags(array $Tags) Set Cloud disk binding tag.
 * @method boolean getShareable() Obtain The default of optional parameter is False. When True is selected, the cloud disk will be created as a shareable cloud disk.
 * @method void setShareable(boolean $Shareable) Set The default of optional parameter is False. When True is selected, the cloud disk will be created as a shareable cloud disk.
 * @method integer getThroughputPerformance() Obtain Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for Tremendous SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for Tremendous SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
 */
class CreateDisksRequest extends AbstractModel
{
    /**
     * @var string Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD
     */
    public $DiskType;

    /**
     * @var string Cloud disk billing method. POSTPAID_BY_HOUR: pay as you go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For information about the pricing of each method, see the cloud disk [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
     */
    public $DiskChargeType;

    /**
     * @var Placement The location of the instance. The availability zone and the project that the instance belongs to can be specified using this parameter. If the project is not specified, it will be created under the default project.
     */
    public $Placement;

    /**
     * @var string The displayed name of the cloud disk. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
     */
    public $DiskName;

    /**
     * @var integer If the number of cloud disks to be created is left empty, the default is 1. There is a limit to the maximum number of cloud disks that can be created for a single request. For more information, please see [CBS Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
     */
    public $DiskCount;

    /**
     * @var DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Cloud hard disk size (in GB). <br><li> If `SnapshotId` is passed, `DiskSize` cannot be passed. In this case, the size of the cloud disk is the size of the snapshot. <br><li>To pass `SnapshotId` and `DiskSize` at the same time, the size of the disk must be larger than or equal to the size of the snapshot. <br><li>For information about the size range of cloud disks, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var string Snapshot ID. If this parameter is specified, the cloud disk is created based on the snapshot. The snapshot type must be a data disk snapshot. The snapshot can be queried in the DiskUsage field in the output parameter through the API [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
     */
    public $SnapshotId;

    /**
     * @var string A string to ensure the idempotency of the request, which is generated by the client. Each request shall have a unique string with a maximum of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be ensured.
     */
    public $ClientToken;

    /**
     * @var string This parameter is used to create an encrypted cloud disk. Its value is always ENCRYPT.
     */
    public $Encrypt;

    /**
     * @var array Cloud disk binding tag.
     */
    public $Tags;

    /**
     * @var boolean The default of optional parameter is False. When True is selected, the cloud disk will be created as a shareable cloud disk.
     */
    public $Shareable;

    /**
     * @var integer Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for Tremendous SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
     */
    public $ThroughputPerformance;

    /**
     * @param string $DiskType Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD
     * @param string $DiskChargeType Cloud disk billing method. POSTPAID_BY_HOUR: pay as you go by hour<br><li>CDCPAID: Billed together with the bound dedicated cluster<br>For information about the pricing of each method, see the cloud disk [Pricing Overview](https://intl.cloud.tencent.com/document/product/362/2413?from_cn_redirect=1).
     * @param Placement $Placement The location of the instance. The availability zone and the project that the instance belongs to can be specified using this parameter. If the project is not specified, it will be created under the default project.
     * @param string $DiskName The displayed name of the cloud disk. If it is left empty, the default is 'Not named'. The maximum length cannot exceed 60 bytes.
     * @param integer $DiskCount If the number of cloud disks to be created is left empty, the default is 1. There is a limit to the maximum number of cloud disks that can be created for a single request. For more information, please see [CBS Use Limits](https://intl.cloud.tencent.com/doc/product/362/5145?from_cn_redirect=1).
     * @param DiskChargePrepaid $DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk. 
     * @param integer $DiskSize Cloud hard disk size (in GB). <br><li> If `SnapshotId` is passed, `DiskSize` cannot be passed. In this case, the size of the cloud disk is the size of the snapshot. <br><li>To pass `SnapshotId` and `DiskSize` at the same time, the size of the disk must be larger than or equal to the size of the snapshot. <br><li>For information about the size range of cloud disks, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     * @param string $SnapshotId Snapshot ID. If this parameter is specified, the cloud disk is created based on the snapshot. The snapshot type must be a data disk snapshot. The snapshot can be queried in the DiskUsage field in the output parameter through the API [DescribeSnapshots](https://intl.cloud.tencent.com/document/product/362/15647?from_cn_redirect=1).
     * @param string $ClientToken A string to ensure the idempotency of the request, which is generated by the client. Each request shall have a unique string with a maximum of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be ensured.
     * @param string $Encrypt This parameter is used to create an encrypted cloud disk. Its value is always ENCRYPT.
     * @param array $Tags Cloud disk binding tag.
     * @param boolean $Shareable The default of optional parameter is False. When True is selected, the cloud disk will be created as a shareable cloud disk.
     * @param integer $ThroughputPerformance Extra performance purchased for a cloud disk.<br>This optional parameter is only valid for Tremendous SSD (CLOUD_TSSD) and Enhanced SSD (CLOUD_HSSD).
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

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
