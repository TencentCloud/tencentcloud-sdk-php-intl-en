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
 * DescribeDiskConfigQuota request structure.
 *
 * @method string getInquiryType() Obtain INQUIRY type. valid values:<br>INQUIRY_CBS_CONFIG: query the cloud disk configuration list<br>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks with instances.
 * @method void setInquiryType(string $InquiryType) Set INQUIRY type. valid values:<br>INQUIRY_CBS_CONFIG: query the cloud disk configuration list<br>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks with instances.
 * @method string getDiskChargeType() Obtain Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
 * @method void setDiskChargeType(string $DiskChargeType) Set Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
 * @method array getInstanceFamilies() Obtain Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
 * @method void setInstanceFamilies(array $InstanceFamilies) Set Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
 * @method array getDiskTypes() Obtain Hard disk media type. valid values: <br> CLOUD_BASIC: BASIC CLOUD disk <br> CLOUD_PREMIUM: high-performance CLOUD block storage <br> CLOUD_SSD: SSD CLOUD disk <br> CLOUD_HSSD: enhanced SSD CLOUD disk.
 * @method void setDiskTypes(array $DiskTypes) Set Hard disk media type. valid values: <br> CLOUD_BASIC: BASIC CLOUD disk <br> CLOUD_PREMIUM: high-performance CLOUD block storage <br> CLOUD_SSD: SSD CLOUD disk <br> CLOUD_HSSD: enhanced SSD CLOUD disk.
 * @method array getZones() Obtain Query configuration under one or more [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).
 * @method void setZones(array $Zones) Set Query configuration under one or more [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).
 * @method integer getMemory() Obtain Instance memory size in GB.
 * @method void setMemory(integer $Memory) Set Instance memory size in GB.
 * @method string getDiskUsage() Obtain SYSTEM DISK or DATA DISK. valid values:<br>SYSTEM_DISK: SYSTEM DISK<br>DATA_DISK: DATA DISK.
 * @method void setDiskUsage(string $DiskUsage) Set SYSTEM DISK or DATA DISK. valid values:<br>SYSTEM_DISK: SYSTEM DISK<br>DATA_DISK: DATA DISK.
 * @method integer getCPU() Obtain Instance CPU cores.
 * @method void setCPU(integer $CPU) Set Instance CPU cores.
 * @method string getDedicatedClusterId() Obtain Dedicated cluster ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Dedicated cluster ID.
 */
class DescribeDiskConfigQuotaRequest extends AbstractModel
{
    /**
     * @var string INQUIRY type. valid values:<br>INQUIRY_CBS_CONFIG: query the cloud disk configuration list<br>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks with instances.
     */
    public $InquiryType;

    /**
     * @var string Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
     */
    public $DiskChargeType;

    /**
     * @var array Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
     */
    public $InstanceFamilies;

    /**
     * @var array Hard disk media type. valid values: <br> CLOUD_BASIC: BASIC CLOUD disk <br> CLOUD_PREMIUM: high-performance CLOUD block storage <br> CLOUD_SSD: SSD CLOUD disk <br> CLOUD_HSSD: enhanced SSD CLOUD disk.
     */
    public $DiskTypes;

    /**
     * @var array Query configuration under one or more [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).
     */
    public $Zones;

    /**
     * @var integer Instance memory size in GB.
     */
    public $Memory;

    /**
     * @var string SYSTEM DISK or DATA DISK. valid values:<br>SYSTEM_DISK: SYSTEM DISK<br>DATA_DISK: DATA DISK.
     */
    public $DiskUsage;

    /**
     * @var integer Instance CPU cores.
     */
    public $CPU;

    /**
     * @var string Dedicated cluster ID.
     */
    public $DedicatedClusterId;

    /**
     * @param string $InquiryType INQUIRY type. valid values:<br>INQUIRY_CBS_CONFIG: query the cloud disk configuration list<br>INQUIRY_CVM_CONFIG: query the configuration list of cloud disks with instances.
     * @param string $DiskChargeType Billing mode. Value range: <br><li>POSTPAID_BY_HOUR: postpaid.
     * @param array $InstanceFamilies Filter by the instance model series, such as S1, I1 and M1. For more information, please see [Instance Types](https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1)
     * @param array $DiskTypes Hard disk media type. valid values: <br> CLOUD_BASIC: BASIC CLOUD disk <br> CLOUD_PREMIUM: high-performance CLOUD block storage <br> CLOUD_SSD: SSD CLOUD disk <br> CLOUD_HSSD: enhanced SSD CLOUD disk.
     * @param array $Zones Query configuration under one or more [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo).
     * @param integer $Memory Instance memory size in GB.
     * @param string $DiskUsage SYSTEM DISK or DATA DISK. valid values:<br>SYSTEM_DISK: SYSTEM DISK<br>DATA_DISK: DATA DISK.
     * @param integer $CPU Instance CPU cores.
     * @param string $DedicatedClusterId Dedicated cluster ID.
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
        if (array_key_exists("InquiryType",$param) and $param["InquiryType"] !== null) {
            $this->InquiryType = $param["InquiryType"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = $param["InstanceFamilies"];
        }

        if (array_key_exists("DiskTypes",$param) and $param["DiskTypes"] !== null) {
            $this->DiskTypes = $param["DiskTypes"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
