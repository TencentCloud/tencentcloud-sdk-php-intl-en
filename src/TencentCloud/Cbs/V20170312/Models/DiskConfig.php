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
 * Cloud disk configuration.
 *
 * @method boolean getAvailable() Obtain Whether the configuration is available.
 * @method void setAvailable(boolean $Available) Set Whether the configuration is available.
 * @method string getDiskType() Obtain Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method void setDiskType(string $DiskType) Set Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method string getDiskUsage() Obtain Cloud disk type. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method void setDiskUsage(string $DiskUsage) Set Cloud disk type. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method string getDiskChargeType() Obtain Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method void setDiskChargeType(string $DiskChargeType) Set Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method integer getMaxDiskSize() Obtain The maximum configurable cloud disk size (in GB).
 * @method void setMaxDiskSize(integer $MaxDiskSize) Set The maximum configurable cloud disk size (in GB).
 * @method integer getMinDiskSize() Obtain The minimum configurable cloud disk size (in GB).
 * @method void setMinDiskSize(integer $MinDiskSize) Set The minimum configurable cloud disk size (in GB).
 * @method string getZone() Obtain The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
 * @method void setZone(string $Zone) Set The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
 * @method string getDeviceClass() Obtain Instance model.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeviceClass(string $DeviceClass) Set Instance model.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceFamily() Obtain Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
 */
class DiskConfig extends AbstractModel
{
    /**
     * @var boolean Whether the configuration is available.
     */
    public $Available;

    /**
     * @var string Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
     */
    public $DiskType;

    /**
     * @var string Cloud disk type. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     */
    public $DiskUsage;

    /**
     * @var string Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
     */
    public $DiskChargeType;

    /**
     * @var integer The maximum configurable cloud disk size (in GB).
     */
    public $MaxDiskSize;

    /**
     * @var integer The minimum configurable cloud disk size (in GB).
     */
    public $MinDiskSize;

    /**
     * @var string The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
     */
    public $Zone;

    /**
     * @var string Instance model.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeviceClass;

    /**
     * @var string Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceFamily;

    /**
     * @param boolean $Available Whether the configuration is available.
     * @param string $DiskType Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
     * @param string $DiskUsage Cloud disk type. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     * @param string $DiskChargeType Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
     * @param integer $MaxDiskSize The maximum configurable cloud disk size (in GB).
     * @param integer $MinDiskSize The minimum configurable cloud disk size (in GB).
     * @param string $Zone The [Availability Region](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud drive.
     * @param string $DeviceClass Instance model.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceFamily Instance model series. For more information, please see [Instance Models](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
Note: This field may return null, indicating that no valid value was found.
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

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
