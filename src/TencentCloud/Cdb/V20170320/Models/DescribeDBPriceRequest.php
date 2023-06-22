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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPrice request structure.
 *
 * @method integer getPeriod() Obtain Instance validity period in months. Value range: 1-36. This field is invalid when querying the prices of pay-as-you-go instances.
 * @method void setPeriod(integer $Period) Set Instance validity period in months. Value range: 1-36. This field is invalid when querying the prices of pay-as-you-go instances.
 * @method string getZone() Obtain AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> API to query the configurable values. This parameter is required when `InstanceId` is empty.
 * @method void setZone(string $Zone) Set AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> API to query the configurable values. This parameter is required when `InstanceId` is empty.
 * @method integer getGoodsNum() Obtain Number of instances. Value range: 1-100. Default value: 1. This parameter is required when `InstanceId` is empty.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances. Value range: 1-100. Default value: 1. This parameter is required when `InstanceId` is empty.
 * @method integer getMemory() Obtain Instance memory size in MB. This parameter is required when `InstanceId` is empty.
 * @method void setMemory(integer $Memory) Set Instance memory size in MB. This parameter is required when `InstanceId` is empty.
 * @method integer getVolume() Obtain Instance disk size in GB. This parameter is required when `InstanceId` is empty.
 * @method void setVolume(integer $Volume) Set Instance disk size in GB. This parameter is required when `InstanceId` is empty.
 * @method string getInstanceRole() Obtain Instance type. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance). Default value: `master`. This parameter is required when `InstanceId` is empty.
 * @method void setInstanceRole(string $InstanceRole) Set Instance type. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance). Default value: `master`. This parameter is required when `InstanceId` is empty.
 * @method string getPayType() Obtain Billing mode. Valid values: `PRE_PAID` (monthly subscribed), `HOUR_PAID` (pay-as-you-go). This parameter is required when `InstanceId` is empty.
 * @method void setPayType(string $PayType) Set Billing mode. Valid values: `PRE_PAID` (monthly subscribed), `HOUR_PAID` (pay-as-you-go). This parameter is required when `InstanceId` is empty.
 * @method integer getProtectMode() Obtain Data replication mode. Valid values: `0` (async), 1 (semi-sync), `2` (strong sync). Default value: `0`.
 * @method void setProtectMode(integer $ProtectMode) Set Data replication mode. Valid values: `0` (async), 1 (semi-sync), `2` (strong sync). Default value: `0`.
 * @method string getDeviceType() Obtain Instance isolation types Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.  Default value: `UNIVERSAL`.
 * @method void setDeviceType(string $DeviceType) Set Instance isolation types Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.  Default value: `UNIVERSAL`.
 * @method integer getInstanceNodes() Obtain The number of the instance. Valid values: `1` (for read-only and basic instances), `2` (for other source instances). To query the price of a three-node instance, set this value to `3`.
 * @method void setInstanceNodes(integer $InstanceNodes) Set The number of the instance. Valid values: `1` (for read-only and basic instances), `2` (for other source instances). To query the price of a three-node instance, set this value to `3`.
 * @method integer getCpu() Obtain CPU core count of the price-queried instance. To ensure that the CPU value to be passed in is valid, use the [DescribeDBZoneConfig](https://www.tencentcloud.com/document/product/236/17229) API to query the number of purchasable cores. If this value is not specified, a default value based on memory size will be set.
 * @method void setCpu(integer $Cpu) Set CPU core count of the price-queried instance. To ensure that the CPU value to be passed in is valid, use the [DescribeDBZoneConfig](https://www.tencentcloud.com/document/product/236/17229) API to query the number of purchasable cores. If this value is not specified, a default value based on memory size will be set.
 * @method string getInstanceId() Obtain Instance ID for querying renewal price. To query the renewal price of the instance, pass in the values of `InstanceId` and `Period`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID for querying renewal price. To query the renewal price of the instance, pass in the values of `InstanceId` and `Period`.
 * @method integer getLadder() Obtain Tiered pay-as-you-go pricing, which is valid only when `PayType` is set to `HOUR_PAID`. Valid values: `1`, `2`, `3`. For more information on tiered duration, visit https://intl.cloud.tencent.com/document/product/236/18335.?from_cn_redirect=1
 * @method void setLadder(integer $Ladder) Set Tiered pay-as-you-go pricing, which is valid only when `PayType` is set to `HOUR_PAID`. Valid values: `1`, `2`, `3`. For more information on tiered duration, visit https://intl.cloud.tencent.com/document/product/236/18335.?from_cn_redirect=1
 */
class DescribeDBPriceRequest extends AbstractModel
{
    /**
     * @var integer Instance validity period in months. Value range: 1-36. This field is invalid when querying the prices of pay-as-you-go instances.
     */
    public $Period;

    /**
     * @var string AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> API to query the configurable values. This parameter is required when `InstanceId` is empty.
     */
    public $Zone;

    /**
     * @var integer Number of instances. Value range: 1-100. Default value: 1. This parameter is required when `InstanceId` is empty.
     */
    public $GoodsNum;

    /**
     * @var integer Instance memory size in MB. This parameter is required when `InstanceId` is empty.
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB. This parameter is required when `InstanceId` is empty.
     */
    public $Volume;

    /**
     * @var string Instance type. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance). Default value: `master`. This parameter is required when `InstanceId` is empty.
     */
    public $InstanceRole;

    /**
     * @var string Billing mode. Valid values: `PRE_PAID` (monthly subscribed), `HOUR_PAID` (pay-as-you-go). This parameter is required when `InstanceId` is empty.
     */
    public $PayType;

    /**
     * @var integer Data replication mode. Valid values: `0` (async), 1 (semi-sync), `2` (strong sync). Default value: `0`.
     */
    public $ProtectMode;

    /**
     * @var string Instance isolation types Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.  Default value: `UNIVERSAL`.
     */
    public $DeviceType;

    /**
     * @var integer The number of the instance. Valid values: `1` (for read-only and basic instances), `2` (for other source instances). To query the price of a three-node instance, set this value to `3`.
     */
    public $InstanceNodes;

    /**
     * @var integer CPU core count of the price-queried instance. To ensure that the CPU value to be passed in is valid, use the [DescribeDBZoneConfig](https://www.tencentcloud.com/document/product/236/17229) API to query the number of purchasable cores. If this value is not specified, a default value based on memory size will be set.
     */
    public $Cpu;

    /**
     * @var string Instance ID for querying renewal price. To query the renewal price of the instance, pass in the values of `InstanceId` and `Period`.
     */
    public $InstanceId;

    /**
     * @var integer Tiered pay-as-you-go pricing, which is valid only when `PayType` is set to `HOUR_PAID`. Valid values: `1`, `2`, `3`. For more information on tiered duration, visit https://intl.cloud.tencent.com/document/product/236/18335.?from_cn_redirect=1
     */
    public $Ladder;

    /**
     * @param integer $Period Instance validity period in months. Value range: 1-36. This field is invalid when querying the prices of pay-as-you-go instances.
     * @param string $Zone AZ information in the format of "ap-guangzhou-2". You can use the <a href="https://intl.cloud.tencent.com/document/api/236/17229?from_cn_redirect=1">DescribeDBZoneConfig</a> API to query the configurable values. This parameter is required when `InstanceId` is empty.
     * @param integer $GoodsNum Number of instances. Value range: 1-100. Default value: 1. This parameter is required when `InstanceId` is empty.
     * @param integer $Memory Instance memory size in MB. This parameter is required when `InstanceId` is empty.
     * @param integer $Volume Instance disk size in GB. This parameter is required when `InstanceId` is empty.
     * @param string $InstanceRole Instance type. Valid values: `master` (source instance), `dr` (disaster recovery instance), `ro` (read-only instance). Default value: `master`. This parameter is required when `InstanceId` is empty.
     * @param string $PayType Billing mode. Valid values: `PRE_PAID` (monthly subscribed), `HOUR_PAID` (pay-as-you-go). This parameter is required when `InstanceId` is empty.
     * @param integer $ProtectMode Data replication mode. Valid values: `0` (async), 1 (semi-sync), `2` (strong sync). Default value: `0`.
     * @param string $DeviceType Instance isolation types Valid values: `UNIVERSAL` (general instance), `EXCLUSIVE` (dedicated instance), `BASIC` (basic instance). Default value: `UNIVERSAL`.  Default value: `UNIVERSAL`.
     * @param integer $InstanceNodes The number of the instance. Valid values: `1` (for read-only and basic instances), `2` (for other source instances). To query the price of a three-node instance, set this value to `3`.
     * @param integer $Cpu CPU core count of the price-queried instance. To ensure that the CPU value to be passed in is valid, use the [DescribeDBZoneConfig](https://www.tencentcloud.com/document/product/236/17229) API to query the number of purchasable cores. If this value is not specified, a default value based on memory size will be set.
     * @param string $InstanceId Instance ID for querying renewal price. To query the renewal price of the instance, pass in the values of `InstanceId` and `Period`.
     * @param integer $Ladder Tiered pay-as-you-go pricing, which is valid only when `PayType` is set to `HOUR_PAID`. Valid values: `1`, `2`, `3`. For more information on tiered duration, visit https://intl.cloud.tencent.com/document/product/236/18335.?from_cn_redirect=1
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
    }
}
