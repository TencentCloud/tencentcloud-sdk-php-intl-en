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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistic information of hosts in the CDC
 *
 * @method string getHostType() Obtain Host type
 * @method void setHostType(string $HostType) Set Host type
 * @method string getHostFamily() Obtain Host model family
 * @method void setHostFamily(string $HostFamily) Set Host model family
 * @method integer getCpu() Obtain Number of CPU cores of host, in cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of host, in cores
 * @method integer getMemory() Obtain Host memory, in GB
 * @method void setMemory(integer $Memory) Set Host memory, in GB
 * @method integer getCount() Obtain Number of hosts of this type
 * @method void setCount(integer $Count) Set Number of hosts of this type
 * @method float getCpuAverage() Obtain Average CPU load percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setCpuAverage(float $CpuAverage) Set Average CPU load percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method float getMemAverage() Obtain Average memory usage percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMemAverage(float $MemAverage) Set Average memory usage percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method float getNetAverage() Obtain Average network traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setNetAverage(float $NetAverage) Set Average network traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method DetailData getCpuDetailData() Obtain Detailed CPU monitoring data 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setCpuDetailData(DetailData $CpuDetailData) Set Detailed CPU monitoring data 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method DetailData getMemDetailData() Obtain Memory details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMemDetailData(DetailData $MemDetailData) Set Memory details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method DetailData getNetRateDetailData() Obtain Network rate details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setNetRateDetailData(DetailData $NetRateDetailData) Set Network rate details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method DetailData getNetPacketDetailData() Obtain Network packet details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setNetPacketDetailData(DetailData $NetPacketDetailData) Set Network packet details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 */
class HostStatistic extends AbstractModel
{
    /**
     * @var string Host type
     */
    public $HostType;

    /**
     * @var string Host model family
     */
    public $HostFamily;

    /**
     * @var integer Number of CPU cores of host, in cores
     */
    public $Cpu;

    /**
     * @var integer Host memory, in GB
     */
    public $Memory;

    /**
     * @var integer Number of hosts of this type
     */
    public $Count;

    /**
     * @var float Average CPU load percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $CpuAverage;

    /**
     * @var float Average memory usage percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $MemAverage;

    /**
     * @var float Average network traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $NetAverage;

    /**
     * @var DetailData Detailed CPU monitoring data 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $CpuDetailData;

    /**
     * @var DetailData Memory details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $MemDetailData;

    /**
     * @var DetailData Network rate details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $NetRateDetailData;

    /**
     * @var DetailData Network packet details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $NetPacketDetailData;

    /**
     * @param string $HostType Host type
     * @param string $HostFamily Host model family
     * @param integer $Cpu Number of CPU cores of host, in cores
     * @param integer $Memory Host memory, in GB
     * @param integer $Count Number of hosts of this type
     * @param float $CpuAverage Average CPU load percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param float $MemAverage Average memory usage percentage 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param float $NetAverage Average network traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param DetailData $CpuDetailData Detailed CPU monitoring data 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param DetailData $MemDetailData Memory details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param DetailData $NetRateDetailData Network rate details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param DetailData $NetPacketDetailData Network packet details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
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
        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostFamily",$param) and $param["HostFamily"] !== null) {
            $this->HostFamily = $param["HostFamily"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CpuAverage",$param) and $param["CpuAverage"] !== null) {
            $this->CpuAverage = $param["CpuAverage"];
        }

        if (array_key_exists("MemAverage",$param) and $param["MemAverage"] !== null) {
            $this->MemAverage = $param["MemAverage"];
        }

        if (array_key_exists("NetAverage",$param) and $param["NetAverage"] !== null) {
            $this->NetAverage = $param["NetAverage"];
        }

        if (array_key_exists("CpuDetailData",$param) and $param["CpuDetailData"] !== null) {
            $this->CpuDetailData = new DetailData();
            $this->CpuDetailData->deserialize($param["CpuDetailData"]);
        }

        if (array_key_exists("MemDetailData",$param) and $param["MemDetailData"] !== null) {
            $this->MemDetailData = new DetailData();
            $this->MemDetailData->deserialize($param["MemDetailData"]);
        }

        if (array_key_exists("NetRateDetailData",$param) and $param["NetRateDetailData"] !== null) {
            $this->NetRateDetailData = new DetailData();
            $this->NetRateDetailData->deserialize($param["NetRateDetailData"]);
        }

        if (array_key_exists("NetPacketDetailData",$param) and $param["NetPacketDetailData"] !== null) {
            $this->NetPacketDetailData = new DetailData();
            $this->NetPacketDetailData->deserialize($param["NetPacketDetailData"]);
        }
    }
}
