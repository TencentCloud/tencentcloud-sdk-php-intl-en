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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPrice request structure.
 *
 * @method integer getPeriod() Obtain <p>Instance duration, in months, minimum value 1, maximum value 36. This field is invalid when querying the pay-as-you-go rate.</p>
 * @method void setPeriod(integer $Period) Set <p>Instance duration, in months, minimum value 1, maximum value 36. This field is invalid when querying the pay-as-you-go rate.</p>
 * @method string getZone() Obtain <p>AZ information, in the format of "ap-guangzhou-2". For available values, query the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> api. This parameter is required when InstanceId is empty.</p>
 * @method void setZone(string $Zone) Set <p>AZ information, in the format of "ap-guangzhou-2". For available values, query the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> api. This parameter is required when InstanceId is empty.</p>
 * @method integer getGoodsNum() Obtain <p>Instance count. Default value is 1, minimum value 1, maximum value 100. This parameter is required when InstanceId is empty.</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Instance count. Default value is 1, minimum value 1, maximum value 100. This parameter is required when InstanceId is empty.</p>
 * @method integer getMemory() Obtain <p>Instance memory size, measurement unit: MB. Required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain the saleable instance memory size range.</p>
 * @method void setMemory(integer $Memory) Set <p>Instance memory size, measurement unit: MB. Required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain the saleable instance memory size range.</p>
 * @method integer getVolume() Obtain <p>Instance disk size, unit: GB. This parameter is required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the saleable disk size range.</p>
 * @method void setVolume(integer $Volume) Set <p>Instance disk size, unit: GB. This parameter is required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the saleable disk size range.</p>
 * @method string getInstanceRole() Obtain <p>Instance type, defaults to master. Supported values include: master - primary instance, ro - read-only instance, dr - disaster recovery instance. Required when InstanceId is empty.</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Instance type, defaults to master. Supported values include: master - primary instance, ro - read-only instance, dr - disaster recovery instance. Required when InstanceId is empty.</p>
 * @method string getPayType() Obtain <p>Payment type. Supported values: PRE_PAID (yearly/monthly subscription) and HOUR_PAID (pay-as-you-go). This parameter is required when InstanceId is empty.</p>
 * @method void setPayType(string $PayType) Set <p>Payment type. Supported values: PRE_PAID (yearly/monthly subscription) and HOUR_PAID (pay-as-you-go). This parameter is required when InstanceId is empty.</p>
 * @method integer getProtectMode() Obtain <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method void setProtectMode(integer $ProtectMode) Set <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
 * @method string getDeviceType() Obtain <p>Instance isolation type.</p><p>Enumeration value:</p><ul><li>UNIVERSAL: General-purpose instance</li><li>EXCLUSIVE: Dedicated instance</li><li>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_ULTRA: Flagship type of cloud disk edition</li></ul><p>Default value: UNIVERSAL</p><p>If needed to query the price of a single-node instance of cloud disk edition, set up this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes as 1.</p>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance isolation type.</p><p>Enumeration value:</p><ul><li>UNIVERSAL: General-purpose instance</li><li>EXCLUSIVE: Dedicated instance</li><li>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_ULTRA: Flagship type of cloud disk edition</li></ul><p>Default value: UNIVERSAL</p><p>If needed to query the price of a single-node instance of cloud disk edition, set up this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes as 1.</p>
 * @method integer getInstanceNodes() Obtain <p>Number of instance nodes.<br>1. When querying the price of a read-only instance or a single-node instance, the value of this field is 1.<br>2. When querying the price of a dual-node instance, the value of this field is 2.<br>3. When querying the price of a three-node instance, the value of this field is 3.<br>4. When querying the price of a cloud disk edition instance, the value range of this field can be 2 - 6. A value of 2 means the cloud disk edition instance has 1 read-write node + 1 read-only node. A value of 6 means the cloud disk edition instance has 1 read-write node + 5 read-only nodes. For other values (3 - 5), the rule is 1 read-write node + (value - 1) read-only nodes.</p>
 * @method void setInstanceNodes(integer $InstanceNodes) Set <p>Number of instance nodes.<br>1. When querying the price of a read-only instance or a single-node instance, the value of this field is 1.<br>2. When querying the price of a dual-node instance, the value of this field is 2.<br>3. When querying the price of a three-node instance, the value of this field is 3.<br>4. When querying the price of a cloud disk edition instance, the value range of this field can be 2 - 6. A value of 2 means the cloud disk edition instance has 1 read-write node + 1 read-only node. A value of 6 means the cloud disk edition instance has 1 read-write node + 5 read-only nodes. For other values (3 - 5), the rule is 1 read-write node + (value - 1) read-only nodes.</p>
 * @method integer getCpu() Obtain <p>The number of CPU cores of the price-query instance, measurement unit: core. To ensure the validity of the input CPU value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API acquisition to get the saleable number of cores. When this value is not specified, a default value will be padded based on the Memory size.</p>
 * @method void setCpu(integer $Cpu) Set <p>The number of CPU cores of the price-query instance, measurement unit: core. To ensure the validity of the input CPU value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API acquisition to get the saleable number of cores. When this value is not specified, a default value will be padded based on the Memory size.</p>
 * @method string getInstanceId() Obtain <p>Query the ID of the instance to be renewed. If needed, fill in InstanceId and Period to query instance renewal price.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Query the ID of the instance to be renewed. If needed, fill in InstanceId and Period to query instance renewal price.</p>
 * @method integer getLadder() Obtain <p>Usage-based billing tier. Valid only when PayType=HOUR_PAID. Supported values include: 1, 2, 3. For step duration, see https://www.tencentcloud.com/document/product/236/18335.?from_cn_redirect=1</p>
 * @method void setLadder(integer $Ladder) Set <p>Usage-based billing tier. Valid only when PayType=HOUR_PAID. Supported values include: 1, 2, 3. For step duration, see https://www.tencentcloud.com/document/product/236/18335.?from_cn_redirect=1</p>
 * @method string getDiskType() Obtain <p>Disk Type. Specify this parameter when querying the price of CLOUD disk edition or single-node instance of CLOUD disk edition. Default value: SSD CLOUD Block Storage.<br>Supported values include:<br>"CLOUD_SSD" - SSD CLOUD Block Storage.<br>"CLOUD_HSSD" - Enhanced SSD CLOUD Disk.<br>"CLOUD_PREMIUM" - High-performance CLOUD Block Storage.</p>
 * @method void setDiskType(string $DiskType) Set <p>Disk Type. Specify this parameter when querying the price of CLOUD disk edition or single-node instance of CLOUD disk edition. Default value: SSD CLOUD Block Storage.<br>Supported values include:<br>"CLOUD_SSD" - SSD CLOUD Block Storage.<br>"CLOUD_HSSD" - Enhanced SSD CLOUD Disk.<br>"CLOUD_PREMIUM" - High-performance CLOUD Block Storage.</p>
 */
class DescribeDBPriceRequest extends AbstractModel
{
    /**
     * @var integer <p>Instance duration, in months, minimum value 1, maximum value 36. This field is invalid when querying the pay-as-you-go rate.</p>
     */
    public $Period;

    /**
     * @var string <p>AZ information, in the format of "ap-guangzhou-2". For available values, query the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> api. This parameter is required when InstanceId is empty.</p>
     */
    public $Zone;

    /**
     * @var integer <p>Instance count. Default value is 1, minimum value 1, maximum value 100. This parameter is required when InstanceId is empty.</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>Instance memory size, measurement unit: MB. Required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain the saleable instance memory size range.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Instance disk size, unit: GB. This parameter is required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the saleable disk size range.</p>
     */
    public $Volume;

    /**
     * @var string <p>Instance type, defaults to master. Supported values include: master - primary instance, ro - read-only instance, dr - disaster recovery instance. Required when InstanceId is empty.</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>Payment type. Supported values: PRE_PAID (yearly/monthly subscription) and HOUR_PAID (pay-as-you-go). This parameter is required when InstanceId is empty.</p>
     */
    public $PayType;

    /**
     * @var integer <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     */
    public $ProtectMode;

    /**
     * @var string <p>Instance isolation type.</p><p>Enumeration value:</p><ul><li>UNIVERSAL: General-purpose instance</li><li>EXCLUSIVE: Dedicated instance</li><li>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_ULTRA: Flagship type of cloud disk edition</li></ul><p>Default value: UNIVERSAL</p><p>If needed to query the price of a single-node instance of cloud disk edition, set up this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes as 1.</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>Number of instance nodes.<br>1. When querying the price of a read-only instance or a single-node instance, the value of this field is 1.<br>2. When querying the price of a dual-node instance, the value of this field is 2.<br>3. When querying the price of a three-node instance, the value of this field is 3.<br>4. When querying the price of a cloud disk edition instance, the value range of this field can be 2 - 6. A value of 2 means the cloud disk edition instance has 1 read-write node + 1 read-only node. A value of 6 means the cloud disk edition instance has 1 read-write node + 5 read-only nodes. For other values (3 - 5), the rule is 1 read-write node + (value - 1) read-only nodes.</p>
     */
    public $InstanceNodes;

    /**
     * @var integer <p>The number of CPU cores of the price-query instance, measurement unit: core. To ensure the validity of the input CPU value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API acquisition to get the saleable number of cores. When this value is not specified, a default value will be padded based on the Memory size.</p>
     */
    public $Cpu;

    /**
     * @var string <p>Query the ID of the instance to be renewed. If needed, fill in InstanceId and Period to query instance renewal price.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Usage-based billing tier. Valid only when PayType=HOUR_PAID. Supported values include: 1, 2, 3. For step duration, see https://www.tencentcloud.com/document/product/236/18335.?from_cn_redirect=1</p>
     */
    public $Ladder;

    /**
     * @var string <p>Disk Type. Specify this parameter when querying the price of CLOUD disk edition or single-node instance of CLOUD disk edition. Default value: SSD CLOUD Block Storage.<br>Supported values include:<br>"CLOUD_SSD" - SSD CLOUD Block Storage.<br>"CLOUD_HSSD" - Enhanced SSD CLOUD Disk.<br>"CLOUD_PREMIUM" - High-performance CLOUD Block Storage.</p>
     */
    public $DiskType;

    /**
     * @param integer $Period <p>Instance duration, in months, minimum value 1, maximum value 36. This field is invalid when querying the pay-as-you-go rate.</p>
     * @param string $Zone <p>AZ information, in the format of "ap-guangzhou-2". For available values, query the <a href="https://www.tencentcloud.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> api. This parameter is required when InstanceId is empty.</p>
     * @param integer $GoodsNum <p>Instance count. Default value is 1, minimum value 1, maximum value 100. This parameter is required when InstanceId is empty.</p>
     * @param integer $Memory <p>Instance memory size, measurement unit: MB. Required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to obtain the saleable instance memory size range.</p>
     * @param integer $Volume <p>Instance disk size, unit: GB. This parameter is required when InstanceId is empty. To ensure the input value is valid, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API to get the saleable disk size range.</p>
     * @param string $InstanceRole <p>Instance type, defaults to master. Supported values include: master - primary instance, ro - read-only instance, dr - disaster recovery instance. Required when InstanceId is empty.</p>
     * @param string $PayType <p>Payment type. Supported values: PRE_PAID (yearly/monthly subscription) and HOUR_PAID (pay-as-you-go). This parameter is required when InstanceId is empty.</p>
     * @param integer $ProtectMode <p>Data replication method, defaults to 0. Supported values include: 0 - means async replication, 1 - means semi-sync replication, 2 - means strong sync replication.</p>
     * @param string $DeviceType <p>Instance isolation type.</p><p>Enumeration value:</p><ul><li>UNIVERSAL: General-purpose instance</li><li>EXCLUSIVE: Dedicated instance</li><li>CLOUD_NATIVE_CLUSTER: Standard type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE: Enhanced type of cloud disk edition</li><li>CLOUD_NATIVE_CLUSTER_ULTRA: Flagship type of cloud disk edition</li></ul><p>Default value: UNIVERSAL</p><p>If needed to query the price of a single-node instance of cloud disk edition, set up this parameter as CLOUD_NATIVE_CLUSTER and specify parameter InstanceNodes as 1.</p>
     * @param integer $InstanceNodes <p>Number of instance nodes.<br>1. When querying the price of a read-only instance or a single-node instance, the value of this field is 1.<br>2. When querying the price of a dual-node instance, the value of this field is 2.<br>3. When querying the price of a three-node instance, the value of this field is 3.<br>4. When querying the price of a cloud disk edition instance, the value range of this field can be 2 - 6. A value of 2 means the cloud disk edition instance has 1 read-write node + 1 read-only node. A value of 6 means the cloud disk edition instance has 1 read-write node + 5 read-only nodes. For other values (3 - 5), the rule is 1 read-write node + (value - 1) read-only nodes.</p>
     * @param integer $Cpu <p>The number of CPU cores of the price-query instance, measurement unit: core. To ensure the validity of the input CPU value, please use the <a href="https://www.tencentcloud.com/document/product/236/17229?from_cn_redirect=1">obtain the purchasable specifications of cloud databases</a> API acquisition to get the saleable number of cores. When this value is not specified, a default value will be padded based on the Memory size.</p>
     * @param string $InstanceId <p>Query the ID of the instance to be renewed. If needed, fill in InstanceId and Period to query instance renewal price.</p>
     * @param integer $Ladder <p>Usage-based billing tier. Valid only when PayType=HOUR_PAID. Supported values include: 1, 2, 3. For step duration, see https://www.tencentcloud.com/document/product/236/18335.?from_cn_redirect=1</p>
     * @param string $DiskType <p>Disk Type. Specify this parameter when querying the price of CLOUD disk edition or single-node instance of CLOUD disk edition. Default value: SSD CLOUD Block Storage.<br>Supported values include:<br>"CLOUD_SSD" - SSD CLOUD Block Storage.<br>"CLOUD_HSSD" - Enhanced SSD CLOUD Disk.<br>"CLOUD_PREMIUM" - High-performance CLOUD Block Storage.</p>
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ladder",$param) and $param["Ladder"] !== null) {
            $this->Ladder = $param["Ladder"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
