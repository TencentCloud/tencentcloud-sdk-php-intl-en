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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreate request structure.
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method integer getGoodsNum() Obtain Number of compute node to purchase
 * @method void setGoodsNum(integer $GoodsNum) Set Number of compute node to purchase
 * @method string getInstancePayMode() Obtain Instance type for purchase. Valid values: `PREPAID`, `POSTPAID`, `SERVERLESS`.
 * @method void setInstancePayMode(string $InstancePayMode) Set Instance type for purchase. Valid values: `PREPAID`, `POSTPAID`, `SERVERLESS`.
 * @method string getStoragePayMode() Obtain Storage type for purchase. Valid values: `PREPAID`, `POSTPAID`.
 * @method void setStoragePayMode(string $StoragePayMode) Set Storage type for purchase. Valid values: `PREPAID`, `POSTPAID`.
 * @method string getDeviceType() Obtain device type:common, exclusive
 * @method void setDeviceType(string $DeviceType) Set device type:common, exclusive
 * @method integer getCpu() Obtain Number of CPU cores, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
 * @method integer getMemory() Obtain Memory size in GB, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
 * @method void setMemory(integer $Memory) Set Memory size in GB, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
 * @method float getCcu() Obtain CCU size, which is required when `InstancePayMode` is `SERVERLESS`.
 * @method void setCcu(float $Ccu) Set CCU size, which is required when `InstancePayMode` is `SERVERLESS`.
 * @method integer getStorageLimit() Obtain Storage size, which is required when `StoragePayMode` is `PREPAID`.
 * @method void setStorageLimit(integer $StorageLimit) Set Storage size, which is required when `StoragePayMode` is `PREPAID`.
 * @method integer getTimeSpan() Obtain Validity period, which is required when `InstancePayMode` is `PREPAID`.
 * @method void setTimeSpan(integer $TimeSpan) Set Validity period, which is required when `InstancePayMode` is `PREPAID`.
 * @method string getTimeUnit() Obtain Duration unit, which is required when `InstancePayMode` is `PREPAID`. Valid values: `m` (month), `d` (day).
 * @method void setTimeUnit(string $TimeUnit) Set Duration unit, which is required when `InstancePayMode` is `PREPAID`. Valid values: `m` (month), `d` (day).
 */
class InquirePriceCreateRequest extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var integer Number of compute node to purchase
     */
    public $GoodsNum;

    /**
     * @var string Instance type for purchase. Valid values: `PREPAID`, `POSTPAID`, `SERVERLESS`.
     */
    public $InstancePayMode;

    /**
     * @var string Storage type for purchase. Valid values: `PREPAID`, `POSTPAID`.
     */
    public $StoragePayMode;

    /**
     * @var string device type:common, exclusive
     */
    public $DeviceType;

    /**
     * @var integer Number of CPU cores, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
     */
    public $Cpu;

    /**
     * @var integer Memory size in GB, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
     */
    public $Memory;

    /**
     * @var float CCU size, which is required when `InstancePayMode` is `SERVERLESS`.
     */
    public $Ccu;

    /**
     * @var integer Storage size, which is required when `StoragePayMode` is `PREPAID`.
     */
    public $StorageLimit;

    /**
     * @var integer Validity period, which is required when `InstancePayMode` is `PREPAID`.
     */
    public $TimeSpan;

    /**
     * @var string Duration unit, which is required when `InstancePayMode` is `PREPAID`. Valid values: `m` (month), `d` (day).
     */
    public $TimeUnit;

    /**
     * @param string $Zone AZ
     * @param integer $GoodsNum Number of compute node to purchase
     * @param string $InstancePayMode Instance type for purchase. Valid values: `PREPAID`, `POSTPAID`, `SERVERLESS`.
     * @param string $StoragePayMode Storage type for purchase. Valid values: `PREPAID`, `POSTPAID`.
     * @param string $DeviceType device type:common, exclusive
     * @param integer $Cpu Number of CPU cores, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
     * @param integer $Memory Memory size in GB, which is required when `InstancePayMode` is `PREPAID` or `POSTPAID`.
     * @param float $Ccu CCU size, which is required when `InstancePayMode` is `SERVERLESS`.
     * @param integer $StorageLimit Storage size, which is required when `StoragePayMode` is `PREPAID`.
     * @param integer $TimeSpan Validity period, which is required when `InstancePayMode` is `PREPAID`.
     * @param string $TimeUnit Duration unit, which is required when `InstancePayMode` is `PREPAID`. Valid values: `m` (month), `d` (day).
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

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Ccu",$param) and $param["Ccu"] !== null) {
            $this->Ccu = $param["Ccu"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
