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
 * @method boolean getAvailable() 获取Whether the configuration is available.
 * @method void setAvailable(boolean $Available) 设置Whether the configuration is available.
 * @method string getDiskType() 获取Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method void setDiskType(string $DiskType) 设置Type of cloud disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method string getDiskUsage() 获取Cloud disk type. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method void setDiskUsage(string $DiskUsage) 设置Cloud disk type. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method string getDiskChargeType() 获取Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method void setDiskChargeType(string $DiskChargeType) 设置Billing method. Value range: <br><li>PREPAID: Prepaid, that is, monthly subscription<br><li>POSTPAID_BY_HOUR: Postpaid, that is, pay as you go.
 * @method integer getMaxDiskSize() 获取The maximum configurable cloud disk size (in GB).
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置The maximum configurable cloud disk size (in GB).
 * @method integer getMinDiskSize() 获取The minimum configurable cloud disk size (in GB).
 * @method void setMinDiskSize(integer $MinDiskSize) 设置The minimum configurable cloud disk size (in GB).
 * @method string getZone() 获取The [Availability Region](/document/product/213/15753#ZoneInfo) of the cloud drive.
 * @method void setZone(string $Zone) 设置The [Availability Region](/document/product/213/15753#ZoneInfo) of the cloud drive.
 * @method string getDeviceClass() 获取Instance model.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDeviceClass(string $DeviceClass) 设置Instance model.
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceFamily() 获取Instance model series. For more information, please see [Instance Models](https://cloud.tencent.com/document/product/213/11518)
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceFamily(string $InstanceFamily) 设置Instance model series. For more information, please see [Instance Models](https://cloud.tencent.com/document/product/213/11518)
Note: This field may return null, indicating that no valid value was found.
 */

/**
 *Cloud disk configuration.
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
     * @var string The [Availability Region](/document/product/213/15753#ZoneInfo) of the cloud drive.
     */
    public $Zone;

    /**
     * @var string Instance model.
Note: This field may return null, indicating that no valid value was found.
     */
    public $DeviceClass;

    /**
     * @var string Instance model series. For more information, please see [Instance Models](https://cloud.tencent.com/document/product/213/11518)
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
     * @param string $Zone The [Availability Region](/document/product/213/15753#ZoneInfo) of the cloud drive.
     * @param string $DeviceClass Instance model.
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceFamily Instance model series. For more information, please see [Instance Models](https://cloud.tencent.com/document/product/213/11518)
Note: This field may return null, indicating that no valid value was found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
