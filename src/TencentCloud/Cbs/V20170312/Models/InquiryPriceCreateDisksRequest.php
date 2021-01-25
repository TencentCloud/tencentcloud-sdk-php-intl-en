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
 * InquiryPriceCreateDisks request structure.
 *
 * @method string getDiskType() Obtain Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD.
 * @method void setDiskType(string $DiskType) Set Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD.
 * @method integer getDiskSize() Obtain Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
 * @method string getDiskChargeType() Obtain Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
 * @method void setDiskChargeType(string $DiskChargeType) Set Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
 * @method integer getDiskCount() Obtain Quantity of cloud disks purchased. If left empty, default is 1.
 * @method void setDiskCount(integer $DiskCount) Set Quantity of cloud disks purchased. If left empty, default is 1.
 * @method integer getProjectId() Obtain ID of project the cloud disk belongs to.
 * @method void setProjectId(integer $ProjectId) Set ID of project the cloud disk belongs to.
 * @method integer getThroughputPerformance() Obtain Extra performance (in MB/sec) purchased for a cloud disk.<br>This parameter is only valid for Enhanced SSD (CLOUD_HSSD) and Tremendous SSD (CLOUD_TSSD).
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Extra performance (in MB/sec) purchased for a cloud disk.<br>This parameter is only valid for Enhanced SSD (CLOUD_HSSD) and Tremendous SSD (CLOUD_TSSD).
 */
class InquiryPriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var string Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD.
     */
    public $DiskType;

    /**
     * @var integer Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var string Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
     */
    public $DiskChargeType;

    /**
     * @var DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Quantity of cloud disks purchased. If left empty, default is 1.
     */
    public $DiskCount;

    /**
     * @var integer ID of project the cloud disk belongs to.
     */
    public $ProjectId;

    /**
     * @var integer Extra performance (in MB/sec) purchased for a cloud disk.<br>This parameter is only valid for Enhanced SSD (CLOUD_HSSD) and Tremendous SSD (CLOUD_TSSD).
     */
    public $ThroughputPerformance;

    /**
     * @param string $DiskType Cloud disk media type. Valid values: <br><li>CLOUD_BASIC: HDD cloud disk<br><li>CLOUD_PREMIUM: Premium Cloud Storage<br><li>CLOUD_SSD: SSD<br><li>CLOUD_HSSD: Enhanced SSD<br><li>CLOUD_TSSD: Tremendous SSD.
     * @param integer $DiskSize Cloud disk size (in GB). For the value range of the cloud disk sizes, see cloud disk [Product Types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1).
     * @param string $DiskChargeType Cloud disk billing method. <br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
     * @param DiskChargePrepaid $DiskChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). The monthly subscription cloud disk purchase attributes such as usage period and whether or not auto-renewal is set up can be specified using this parameter. <br>This parameter is required when creating a prepaid cloud disk. This parameter is not required when creating an hourly postpaid cloud disk.
     * @param integer $DiskCount Quantity of cloud disks purchased. If left empty, default is 1.
     * @param integer $ProjectId ID of project the cloud disk belongs to.
     * @param integer $ThroughputPerformance Extra performance (in MB/sec) purchased for a cloud disk.<br>This parameter is only valid for Enhanced SSD (CLOUD_HSSD) and Tremendous SSD (CLOUD_TSSD).
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

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
