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
 * InquiryPriceCreateDisks request structure.
 *
 * @method string getDiskChargeType() Obtain Cloud disk billing mode. <br>
<li>PREPAID: Prepaid by month.</li>
<li>POSTPAID_BY_HOUR: Hourly pay-as-you-go.</li>
 * @method void setDiskChargeType(string $DiskChargeType) Set Cloud disk billing mode. <br>
<li>PREPAID: Prepaid by month.</li>
<li>POSTPAID_BY_HOUR: Hourly pay-as-you-go.</li>
 * @method string getDiskType() Obtain Hard disk media type. valid values: <ul> <li>CLOUD_PREMIUM: high-performance CLOUD block storage</li> <li>CLOUD_SSD: SSD CLOUD disk</li> <li>CLOUD_HSSD: enhanced SSD CLOUD disk</li> <li>CLOUD_TSSD: ultra-fast SSD cbs</li> </ul>.
 * @method void setDiskType(string $DiskType) Set Hard disk media type. valid values: <ul> <li>CLOUD_PREMIUM: high-performance CLOUD block storage</li> <li>CLOUD_SSD: SSD CLOUD disk</li> <li>CLOUD_HSSD: enhanced SSD CLOUD disk</li> <li>CLOUD_TSSD: ultra-fast SSD cbs</li> </ul>.
 * @method integer getDiskSize() Obtain Specifies the disk capacity in GiB. for the cloud disk size range, please refer to the product type of cloud block storage (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
 * @method void setDiskSize(integer $DiskSize) Set Specifies the disk capacity in GiB. for the cloud disk size range, please refer to the product type of cloud block storage (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
 * @method integer getProjectId() Obtain cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1). default to the default project.
 * @method void setProjectId(integer $ProjectId) Set cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1). default to the default project.
 * @method integer getDiskCount() Obtain Specifies the number of cloud block storage (cbs) disks to purchase. defaults to 1 if left blank.
 * @method void setDiskCount(integer $DiskCount) Set Specifies the number of cloud block storage (cbs) disks to purchase. defaults to 1 if left blank.
 * @method integer getThroughputPerformance() Obtain Specifies the additional performance value of the CBS disk in MiB/s. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Specifies the additional performance value of the CBS disk in MiB/s. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
 * @method integer getDiskBackupQuota() Obtain Specifies the cloud disk backup point quota.
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) Set Specifies the cloud disk backup point quota.
 */
class InquiryPriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var string Cloud disk billing mode. <br>
<li>PREPAID: Prepaid by month.</li>
<li>POSTPAID_BY_HOUR: Hourly pay-as-you-go.</li>
     */
    public $DiskChargeType;

    /**
     * @var string Hard disk media type. valid values: <ul> <li>CLOUD_PREMIUM: high-performance CLOUD block storage</li> <li>CLOUD_SSD: SSD CLOUD disk</li> <li>CLOUD_HSSD: enhanced SSD CLOUD disk</li> <li>CLOUD_TSSD: ultra-fast SSD cbs</li> </ul>.
     */
    public $DiskType;

    /**
     * @var integer Specifies the disk capacity in GiB. for the cloud disk size range, please refer to the product type of cloud block storage (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
     */
    public $DiskSize;

    /**
     * @var integer cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1). default to the default project.
     */
    public $ProjectId;

    /**
     * @var integer Specifies the number of cloud block storage (cbs) disks to purchase. defaults to 1 if left blank.
     */
    public $DiskCount;

    /**
     * @var integer Specifies the additional performance value of the CBS disk in MiB/s. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
     */
    public $ThroughputPerformance;

    /**
     * @var DiskChargePrepaid Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
     */
    public $DiskChargePrepaid;

    /**
     * @var integer Specifies the cloud disk backup point quota.
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskChargeType Cloud disk billing mode. <br>
<li>PREPAID: Prepaid by month.</li>
<li>POSTPAID_BY_HOUR: Hourly pay-as-you-go.</li>
     * @param string $DiskType Hard disk media type. valid values: <ul> <li>CLOUD_PREMIUM: high-performance CLOUD block storage</li> <li>CLOUD_SSD: SSD CLOUD disk</li> <li>CLOUD_HSSD: enhanced SSD CLOUD disk</li> <li>CLOUD_TSSD: ultra-fast SSD cbs</li> </ul>.
     * @param integer $DiskSize Specifies the disk capacity in GiB. for the cloud disk size range, please refer to the product type of cloud block storage (https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1).
     * @param integer $ProjectId cloud disk project ID. obtain this parameter by calling the projectId field in the return value of [DescribeProject](https://www.tencentcloud.comom/document/api/651/78725?from_cn_redirect=1). default to the default project.
     * @param integer $DiskCount Specifies the number of cloud block storage (cbs) disks to purchase. defaults to 1 if left blank.
     * @param integer $ThroughputPerformance Specifies the additional performance value of the CBS disk in MiB/s. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
     * @param DiskChargePrepaid $DiskChargePrepaid Prepaid mode, that is, the settings for the monthly subscription-related parameters. through this parameter, you can specify the purchase duration of the monthly subscribed cloud disk, whether to enable auto-renewal, and other attributes. this parameter is required for creating a prepaid cloud disk, but no need to specify it when creating an hourly postpaid cloud disk.
     * @param integer $DiskBackupQuota Specifies the cloud disk backup point quota.
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
        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
