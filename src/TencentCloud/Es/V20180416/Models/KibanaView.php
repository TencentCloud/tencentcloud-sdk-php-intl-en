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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kibana view data
 *
 * @method string getIp() Obtain Kibana node IP
 * @method void setIp(string $Ip) Set Kibana node IP
 * @method integer getDiskSize() Obtain Node disk size
 * @method void setDiskSize(integer $DiskSize) Set Node disk size
 * @method float getDiskUsage() Obtain Disk usage
 * @method void setDiskUsage(float $DiskUsage) Set Disk usage
 * @method integer getMemSize() Obtain Node memory size
 * @method void setMemSize(integer $MemSize) Set Node memory size
 * @method float getMemUsage() Obtain Memory usage
 * @method void setMemUsage(float $MemUsage) Set Memory usage
 * @method integer getCpuNum() Obtain Number of node CPUs
 * @method void setCpuNum(integer $CpuNum) Set Number of node CPUs
 * @method float getCpuUsage() Obtain CPU usage
 * @method void setCpuUsage(float $CpuUsage) Set CPU usage
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 */
class KibanaView extends AbstractModel
{
    /**
     * @var string Kibana node IP
     */
    public $Ip;

    /**
     * @var integer Node disk size
     */
    public $DiskSize;

    /**
     * @var float Disk usage
     */
    public $DiskUsage;

    /**
     * @var integer Node memory size
     */
    public $MemSize;

    /**
     * @var float Memory usage
     */
    public $MemUsage;

    /**
     * @var integer Number of node CPUs
     */
    public $CpuNum;

    /**
     * @var float CPU usage
     */
    public $CpuUsage;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @param string $Ip Kibana node IP
     * @param integer $DiskSize Node disk size
     * @param float $DiskUsage Disk usage
     * @param integer $MemSize Node memory size
     * @param float $MemUsage Memory usage
     * @param integer $CpuNum Number of node CPUs
     * @param float $CpuUsage CPU usage
     * @param string $Zone Availability zone
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("CpuUsage",$param) and $param["CpuUsage"] !== null) {
            $this->CpuUsage = $param["CpuUsage"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
