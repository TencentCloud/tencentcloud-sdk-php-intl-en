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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kibana view data
 *
 * @method string getIp() Obtain <p>Kibana node IP</p>
 * @method void setIp(string $Ip) Set <p>Kibana node IP</p>
 * @method integer getDiskSize() Obtain <p>Total node disk size</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Total node disk size</p>
 * @method float getDiskUsage() Obtain <p>Disk utilization rate</p>
 * @method void setDiskUsage(float $DiskUsage) Set <p>Disk utilization rate</p>
 * @method integer getMemSize() Obtain <p>Node memory size</p>
 * @method void setMemSize(integer $MemSize) Set <p>Node memory size</p>
 * @method float getMemUsage() Obtain <p>Memory usage rate</p>
 * @method void setMemUsage(float $MemUsage) Set <p>Memory usage rate</p>
 * @method integer getCpuNum() Obtain <p>Number of CPUs on the node</p>
 * @method void setCpuNum(integer $CpuNum) Set <p>Number of CPUs on the node</p>
 * @method float getCpuUsage() Obtain <p>cpu utilization</p>
 * @method void setCpuUsage(float $CpuUsage) Set <p>cpu utilization</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getNodeId() Obtain <p>ts-0noqayxu-az6-hot-03222010-0</p>
 * @method void setNodeId(string $NodeId) Set <p>ts-0noqayxu-az6-hot-03222010-0</p>
 * @method string getUserIp() Obtain <p>Client-side Ip info</p>
 * @method void setUserIp(string $UserIp) Set <p>Client-side Ip info</p>
 */
class KibanaView extends AbstractModel
{
    /**
     * @var string <p>Kibana node IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>Total node disk size</p>
     */
    public $DiskSize;

    /**
     * @var float <p>Disk utilization rate</p>
     */
    public $DiskUsage;

    /**
     * @var integer <p>Node memory size</p>
     */
    public $MemSize;

    /**
     * @var float <p>Memory usage rate</p>
     */
    public $MemUsage;

    /**
     * @var integer <p>Number of CPUs on the node</p>
     */
    public $CpuNum;

    /**
     * @var float <p>cpu utilization</p>
     */
    public $CpuUsage;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>ts-0noqayxu-az6-hot-03222010-0</p>
     */
    public $NodeId;

    /**
     * @var string <p>Client-side Ip info</p>
     */
    public $UserIp;

    /**
     * @param string $Ip <p>Kibana node IP</p>
     * @param integer $DiskSize <p>Total node disk size</p>
     * @param float $DiskUsage <p>Disk utilization rate</p>
     * @param integer $MemSize <p>Node memory size</p>
     * @param float $MemUsage <p>Memory usage rate</p>
     * @param integer $CpuNum <p>Number of CPUs on the node</p>
     * @param float $CpuUsage <p>cpu utilization</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $NodeId <p>ts-0noqayxu-az6-hot-03222010-0</p>
     * @param string $UserIp <p>Client-side Ip info</p>
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

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }
    }
}
