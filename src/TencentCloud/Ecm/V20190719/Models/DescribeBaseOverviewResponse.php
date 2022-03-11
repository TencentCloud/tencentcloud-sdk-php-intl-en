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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaseOverview response structure.
 *
 * @method integer getModuleNum() Obtain Number of modules
 * @method void setModuleNum(integer $ModuleNum) Set Number of modules
 * @method integer getNodeNum() Obtain Number of nodes
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes
 * @method integer getVcpuNum() Obtain Number of CPU cores
 * @method void setVcpuNum(integer $VcpuNum) Set Number of CPU cores
 * @method integer getMemoryNum() Obtain Memory size in GB
 * @method void setMemoryNum(integer $MemoryNum) Set Memory size in GB
 * @method integer getStorageNum() Obtain Disk size in GB
 * @method void setStorageNum(integer $StorageNum) Set Disk size in GB
 * @method integer getNetworkNum() Obtain Yesterday's network peak in Mbps
 * @method void setNetworkNum(integer $NetworkNum) Set Yesterday's network peak in Mbps
 * @method integer getInstanceNum() Obtain Number of instances
 * @method void setInstanceNum(integer $InstanceNum) Set Number of instances
 * @method integer getRunningNum() Obtain Number of running instances
 * @method void setRunningNum(integer $RunningNum) Set Number of running instances
 * @method integer getIsolationNum() Obtain Number of isolated instances
 * @method void setIsolationNum(integer $IsolationNum) Set Number of isolated instances
 * @method integer getExpiredNum() Obtain Number of expired instances
 * @method void setExpiredNum(integer $ExpiredNum) Set Number of expired instances
 * @method integer getWillExpireNum() Obtain Number of instances about to expire
 * @method void setWillExpireNum(integer $WillExpireNum) Set Number of instances about to expire
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBaseOverviewResponse extends AbstractModel
{
    /**
     * @var integer Number of modules
     */
    public $ModuleNum;

    /**
     * @var integer Number of nodes
     */
    public $NodeNum;

    /**
     * @var integer Number of CPU cores
     */
    public $VcpuNum;

    /**
     * @var integer Memory size in GB
     */
    public $MemoryNum;

    /**
     * @var integer Disk size in GB
     */
    public $StorageNum;

    /**
     * @var integer Yesterday's network peak in Mbps
     */
    public $NetworkNum;

    /**
     * @var integer Number of instances
     */
    public $InstanceNum;

    /**
     * @var integer Number of running instances
     */
    public $RunningNum;

    /**
     * @var integer Number of isolated instances
     */
    public $IsolationNum;

    /**
     * @var integer Number of expired instances
     */
    public $ExpiredNum;

    /**
     * @var integer Number of instances about to expire
     */
    public $WillExpireNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ModuleNum Number of modules
     * @param integer $NodeNum Number of nodes
     * @param integer $VcpuNum Number of CPU cores
     * @param integer $MemoryNum Memory size in GB
     * @param integer $StorageNum Disk size in GB
     * @param integer $NetworkNum Yesterday's network peak in Mbps
     * @param integer $InstanceNum Number of instances
     * @param integer $RunningNum Number of running instances
     * @param integer $IsolationNum Number of isolated instances
     * @param integer $ExpiredNum Number of expired instances
     * @param integer $WillExpireNum Number of instances about to expire
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ModuleNum",$param) and $param["ModuleNum"] !== null) {
            $this->ModuleNum = $param["ModuleNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("VcpuNum",$param) and $param["VcpuNum"] !== null) {
            $this->VcpuNum = $param["VcpuNum"];
        }

        if (array_key_exists("MemoryNum",$param) and $param["MemoryNum"] !== null) {
            $this->MemoryNum = $param["MemoryNum"];
        }

        if (array_key_exists("StorageNum",$param) and $param["StorageNum"] !== null) {
            $this->StorageNum = $param["StorageNum"];
        }

        if (array_key_exists("NetworkNum",$param) and $param["NetworkNum"] !== null) {
            $this->NetworkNum = $param["NetworkNum"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("RunningNum",$param) and $param["RunningNum"] !== null) {
            $this->RunningNum = $param["RunningNum"];
        }

        if (array_key_exists("IsolationNum",$param) and $param["IsolationNum"] !== null) {
            $this->IsolationNum = $param["IsolationNum"];
        }

        if (array_key_exists("ExpiredNum",$param) and $param["ExpiredNum"] !== null) {
            $this->ExpiredNum = $param["ExpiredNum"];
        }

        if (array_key_exists("WillExpireNum",$param) and $param["WillExpireNum"] !== null) {
            $this->WillExpireNum = $param["WillExpireNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
