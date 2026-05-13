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
 * Cloud disk configuration.
 *
 * @method boolean getAvailable() Obtain Whether the configuration is available.
 * @method void setAvailable(boolean $Available) Set Whether the configuration is available.
 * @method string getDiskChargeType() Obtain Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><br><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
 * @method void setDiskChargeType(string $DiskChargeType) Set Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><br><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
 * @method string getZone() Obtain The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
 * @method void setZone(string $Zone) Set The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
 * @method string getInstanceFamily() Obtain Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
 * @method string getDiskType() Obtain Cloud disk media type. valid values: <br>.
CLOUD_BASIC: specifies the BASIC CLOUD disk.
CLOUD_PREMIUM: indicates high-performance CLOUD block storage.
CLOUD_BSSD: indicates a universal type SSD CLOUD disk.
CLOUD_SSD: indicates SSD CLOUD disk.
CLOUD_HSSD: indicates the enhanced SSD CLOUD disk.
CLOUD_TSSD: indicates ultra-fast ssd cbs.
 * @method void setDiskType(string $DiskType) Set Cloud disk media type. valid values: <br>.
CLOUD_BASIC: specifies the BASIC CLOUD disk.
CLOUD_PREMIUM: indicates high-performance CLOUD block storage.
CLOUD_BSSD: indicates a universal type SSD CLOUD disk.
CLOUD_SSD: indicates SSD CLOUD disk.
CLOUD_HSSD: indicates the enhanced SSD CLOUD disk.
CLOUD_TSSD: indicates ultra-fast ssd cbs.
 * @method integer getStepSize() Obtain Specifies the minimum step size for disk size change in GiB.
 * @method void setStepSize(integer $StepSize) Set Specifies the minimum step size for disk size change in GiB.
 * @method array getExtraPerformanceRange() Obtain Additional performance range.
Note: This field might return null, indicating that no valid values can be obtained.
 * @method void setExtraPerformanceRange(array $ExtraPerformanceRange) Set Additional performance range.
Note: This field might return null, indicating that no valid values can be obtained.
 * @method string getDeviceClass() Obtain Instance model.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeviceClass(string $DeviceClass) Set Instance model.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDiskUsage() Obtain Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><br><li>DATA_DISK: DATA DISK.</li>.
 * @method void setDiskUsage(string $DiskUsage) Set Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><br><li>DATA_DISK: DATA DISK.</li>.
 * @method integer getMinDiskSize() Obtain Specifies the minimum configurable cloud disk size in GiB.
 * @method void setMinDiskSize(integer $MinDiskSize) Set Specifies the minimum configurable cloud disk size in GiB.
 * @method integer getMaxDiskSize() Obtain Specifies the maximum configurable cloud disk size in GiB.
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set Specifies the maximum configurable cloud disk size in GiB.
 * @method Price getPrice() Obtain Price of a prepaid or postpaid cloud disk.
 * @method void setPrice(Price $Price) Set Price of a prepaid or postpaid cloud disk.
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var boolean Whether the configuration is available.
     */
    public $Available;

    /**
     * @var string Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><br><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
     */
    public $DiskChargeType;

    /**
     * @var string The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
     */
    public $Zone;

    /**
     * @var string Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceFamily;

    /**
     * @var string Cloud disk media type. valid values: <br>.
CLOUD_BASIC: specifies the BASIC CLOUD disk.
CLOUD_PREMIUM: indicates high-performance CLOUD block storage.
CLOUD_BSSD: indicates a universal type SSD CLOUD disk.
CLOUD_SSD: indicates SSD CLOUD disk.
CLOUD_HSSD: indicates the enhanced SSD CLOUD disk.
CLOUD_TSSD: indicates ultra-fast ssd cbs.
     */
    public $DiskType;

    /**
     * @var integer Specifies the minimum step size for disk size change in GiB.
     */
    public $StepSize;

    /**
     * @var array Additional performance range.
Note: This field might return null, indicating that no valid values can be obtained.
     */
    public $ExtraPerformanceRange;

    /**
     * @var string Instance model.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeviceClass;

    /**
     * @var string Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><br><li>DATA_DISK: DATA DISK.</li>.
     */
    public $DiskUsage;

    /**
     * @var integer Specifies the minimum configurable cloud disk size in GiB.
     */
    public $MinDiskSize;

    /**
     * @var integer Specifies the maximum configurable cloud disk size in GiB.
     */
    public $MaxDiskSize;

    /**
     * @var Price Price of a prepaid or postpaid cloud disk.
     */
    public $Price;

    /**
     * @param boolean $Available Whether the configuration is available.
     * @param string $DiskChargeType Payment mode. valid values: <br><li>PREPAID: PREPAID, i.e. monthly subscription</li><br><li>POSTPAID_BY_HOUR: POSTPAID, i.e. pay-as-you-go.</li>.
     * @param string $Zone The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
     * @param string $InstanceFamily Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
     * @param string $DiskType Cloud disk media type. valid values: <br>.
CLOUD_BASIC: specifies the BASIC CLOUD disk.
CLOUD_PREMIUM: indicates high-performance CLOUD block storage.
CLOUD_BSSD: indicates a universal type SSD CLOUD disk.
CLOUD_SSD: indicates SSD CLOUD disk.
CLOUD_HSSD: indicates the enhanced SSD CLOUD disk.
CLOUD_TSSD: indicates ultra-fast ssd cbs.
     * @param integer $StepSize Specifies the minimum step size for disk size change in GiB.
     * @param array $ExtraPerformanceRange Additional performance range.
Note: This field might return null, indicating that no valid values can be obtained.
     * @param string $DeviceClass Instance model.
Note: This field may return null, indicating that no valid value was found.
     * @param string $DiskUsage Cloud DISK type. valid values:<br><li>SYSTEM_DISK: SYSTEM DISK</li><br><li>DATA_DISK: DATA DISK.</li>.
     * @param integer $MinDiskSize Specifies the minimum configurable cloud disk size in GiB.
     * @param integer $MaxDiskSize Specifies the maximum configurable cloud disk size in GiB.
     * @param Price $Price Price of a prepaid or postpaid cloud disk.
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
        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("StepSize",$param) and $param["StepSize"] !== null) {
            $this->StepSize = $param["StepSize"];
        }

        if (array_key_exists("ExtraPerformanceRange",$param) and $param["ExtraPerformanceRange"] !== null) {
            $this->ExtraPerformanceRange = $param["ExtraPerformanceRange"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }
    }
}
