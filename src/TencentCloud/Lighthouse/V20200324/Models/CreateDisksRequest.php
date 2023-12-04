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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisks request structure.
 *
 * @method string getZone() Obtain Availability zone. You can call [DescribeZones](https://intl.cloud.tencent.com/document/product/1207/57513?from_cn_redirect=1) and get the information in the `Zone` parameter re 
 * @method void setZone(string $Zone) Set Availability zone. You can call [DescribeZones](https://intl.cloud.tencent.com/document/product/1207/57513?from_cn_redirect=1) and get the information in the `Zone` parameter re 
 * @method integer getDiskSize() Obtain Cloud disk size in GB.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size in GB.
 * @method string getDiskType() Obtain Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud disk), "CLOUD_SSD" (SSD cloud disk).
 * @method void setDiskType(string $DiskType) Set Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud disk), "CLOUD_SSD" (SSD cloud disk).
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Parameters of monthly subscribed cloud disks
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Parameters of monthly subscribed cloud disks
 * @method string getDiskName() Obtain Image name, which can contain up to 60 characters.
 * @method void setDiskName(string $DiskName) Set Image name, which can contain up to 60 characters.
 * @method integer getDiskCount() Obtain Number of cloud disks. Range: [1, 30]. Default value: 1.
 * @method void setDiskCount(integer $DiskCount) Set Number of cloud disks. Range: [1, 30]. Default value: 1.
 * @method integer getDiskBackupQuota() Obtain Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
 * @method boolean getAutoVoucher() Obtain Whether to use the vouchers automatically. It defaults to No.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to use the vouchers automatically. It defaults to No.
 * @method AutoMountConfiguration getAutoMountConfiguration() Obtain Automatically mount and initialize the data disk.
 * @method void setAutoMountConfiguration(AutoMountConfiguration $AutoMountConfiguration) Set Automatically mount and initialize the data disk.
 */
class CreateDisksRequest extends AbstractModel
{
    /**
     * @var string Availability zone. You can call [DescribeZones](https://intl.cloud.tencent.com/document/product/1207/57513?from_cn_redirect=1) and get the information in the `Zone` parameter re 
     */
    public $Zone;

    /**
     * @var integer Cloud disk size in GB.
     */
    public $DiskSize;

    /**
     * @var string Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud disk), "CLOUD_SSD" (SSD cloud disk).
     */
    public $DiskType;

    /**
     * @var DiskChargePrepaid Parameters of monthly subscribed cloud disks
     */
    public $DiskChargePrepaid;

    /**
     * @var string Image name, which can contain up to 60 characters.
     */
    public $DiskName;

    /**
     * @var integer Number of cloud disks. Range: [1, 30]. Default value: 1.
     */
    public $DiskCount;

    /**
     * @var integer Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
     */
    public $DiskBackupQuota;

    /**
     * @var boolean Whether to use the vouchers automatically. It defaults to No.
     */
    public $AutoVoucher;

    /**
     * @var AutoMountConfiguration Automatically mount and initialize the data disk.
     */
    public $AutoMountConfiguration;

    /**
     * @param string $Zone Availability zone. You can call [DescribeZones](https://intl.cloud.tencent.com/document/product/1207/57513?from_cn_redirect=1) and get the information in the `Zone` parameter re 
     * @param integer $DiskSize Cloud disk size in GB.
     * @param string $DiskType Cloud disk media type. Valid values: "CLOUD_PREMIUM" (premium cloud disk), "CLOUD_SSD" (SSD cloud disk).
     * @param DiskChargePrepaid $DiskChargePrepaid Parameters of monthly subscribed cloud disks
     * @param string $DiskName Image name, which can contain up to 60 characters.
     * @param integer $DiskCount Number of cloud disks. Range: [1, 30]. Default value: 1.
     * @param integer $DiskBackupQuota Specify the quota of disk backups. No quota if it’s left empty. Only one quota is allowed.
     * @param boolean $AutoVoucher Whether to use the vouchers automatically. It defaults to No.
     * @param AutoMountConfiguration $AutoMountConfiguration Automatically mount and initialize the data disk.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("AutoMountConfiguration",$param) and $param["AutoMountConfiguration"] !== null) {
            $this->AutoMountConfiguration = new AutoMountConfiguration();
            $this->AutoMountConfiguration->deserialize($param["AutoMountConfiguration"]);
        }
    }
}
