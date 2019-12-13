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
 * @method string getInquiryType() 获取Inquiry type. Value range: INQUIRY_CBS_CONFIG: query the configuration list of cloud disks <br><li>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks and instances.
 * @method void setInquiryType(string $InquiryType) 设置Inquiry type. Value range: INQUIRY_CBS_CONFIG: query the configuration list of cloud disks <br><li>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks and instances.
 * @method array getZones() 获取Query configuration under one or more [availability zone](/document/product/213/15753#ZoneInfo).
 * @method void setZones(array $Zones) 设置Query configuration under one or more [availability zone](/document/product/213/15753#ZoneInfo).
 * @method string getDiskChargeType() 获取Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
 * @method void setDiskChargeType(string $DiskChargeType) 设置Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
 * @method array getDiskTypes() 获取Type of hard disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method void setDiskTypes(array $DiskTypes) 设置Type of hard disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
 * @method string getDiskUsage() 获取The system disk or data disk. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method void setDiskUsage(string $DiskUsage) 设置The system disk or data disk. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method array getInstanceFamilies() 获取Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://cloud.tencent.com/document/product/213/11518)
 * @method void setInstanceFamilies(array $InstanceFamilies) 设置Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://cloud.tencent.com/document/product/213/11518)
 * @method integer getCPU() 获取Instance CPU cores.
 * @method void setCPU(integer $CPU) 设置Instance CPU cores.
 * @method integer getMemory() 获取Instance memory size.
 * @method void setMemory(integer $Memory) 设置Instance memory size.
 */

/**
 *DescribeDiskConfigQuota request structure.
 */
class DescribeDiskConfigQuotaRequest extends AbstractModel
{
    /**
     * @var string Inquiry type. Value range: INQUIRY_CBS_CONFIG: query the configuration list of cloud disks <br><li>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks and instances.
     */
    public $InquiryType;

    /**
     * @var array Query configuration under one or more [availability zone](/document/product/213/15753#ZoneInfo).
     */
    public $Zones;

    /**
     * @var string Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
     */
    public $DiskChargeType;

    /**
     * @var array Type of hard disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
     */
    public $DiskTypes;

    /**
     * @var string The system disk or data disk. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     */
    public $DiskUsage;

    /**
     * @var array Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://cloud.tencent.com/document/product/213/11518)
     */
    public $InstanceFamilies;

    /**
     * @var integer Instance CPU cores.
     */
    public $CPU;

    /**
     * @var integer Instance memory size.
     */
    public $Memory;
    /**
     * @param string $InquiryType Inquiry type. Value range: INQUIRY_CBS_CONFIG: query the configuration list of cloud disks <br><li>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks and instances.
     * @param array $Zones Query configuration under one or more [availability zone](/document/product/213/15753#ZoneInfo).
     * @param string $DiskChargeType Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
     * @param array $DiskTypes Type of hard disk medium. Value range: <br><li>CLOUD_BASIC: Ordinary cloud disk <br><li>CLOUD_PREMIUM: Premium cloud storage <br><li>CLOUD_SSD: SSD cloud disk.
     * @param string $DiskUsage The system disk or data disk. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     * @param array $InstanceFamilies Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://cloud.tencent.com/document/product/213/11518)
     * @param integer $CPU Instance CPU cores.
     * @param integer $Memory Instance memory size.
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
        if (array_key_exists("InquiryType",$param) and $param["InquiryType"] !== null) {
            $this->InquiryType = $param["InquiryType"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskTypes",$param) and $param["DiskTypes"] !== null) {
            $this->DiskTypes = $param["DiskTypes"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = $param["InstanceFamilies"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
