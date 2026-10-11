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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DynamicInstanceGroupSpec
 *
 * @method string getName() Obtain <p>Group name.</p>
 * @method void setName(string $Name) Set <p>Group name.</p>
 * @method integer getPodCount() Obtain <p>Number of Pods.</p>
 * @method void setPodCount(integer $PodCount) Set <p>Number of Pods.</p>
 * @method integer getMinNodes() Obtain <p>Minimum number of nodes.</p>
 * @method void setMinNodes(integer $MinNodes) Set <p>Minimum number of nodes.</p>
 * @method integer getMaxNodes() Obtain <p>Maximum number of nodes.</p>
 * @method void setMaxNodes(integer $MaxNodes) Set <p>Maximum number of nodes.</p>
 * @method boolean getStorageConfigEnabled() Obtain <p>Whether to enable storage configuration.</p>
 * @method void setStorageConfigEnabled(boolean $StorageConfigEnabled) Set <p>Whether to enable storage configuration.</p>
 * @method string getGroupType() Obtain <p>headGroup:head;<br>workerGroup:worker</p>
 * @method void setGroupType(string $GroupType) Set <p>headGroup:head;<br>workerGroup:worker</p>
 * @method integer getCpu() Obtain <p>Number of CPU cores.</p>
 * @method void setCpu(integer $Cpu) Set <p>Number of CPU cores.</p>
 * @method integer getMemSize() Obtain <p>Memory (GB).</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory (GB).</p>
 * @method string getGpuType() Obtain <p>GPU type.</p>
 * @method void setGpuType(string $GpuType) Set <p>GPU type.</p>
 * @method integer getGpu() Obtain <p>Number of GPU cores.</p>
 * @method void setGpu(integer $Gpu) Set <p>Number of GPU cores.</p>
 * @method string getResourceLabels() Obtain <p>Resource label.</p>
 * @method void setResourceLabels(string $ResourceLabels) Set <p>Resource label.</p>
 * @method array getEnv() Obtain <p>Environment variable.</p>
 * @method void setEnv(array $Env) Set <p>Environment variable.</p>
 * @method array getLabels() Obtain <p>Tag.</p>
 * @method void setLabels(array $Labels) Set <p>Tag.</p>
 * @method array getTolerations() Obtain <p>Tolerations.</p>
 * @method void setTolerations(array $Tolerations) Set <p>Tolerations.</p>
 * @method string getScheduler() Obtain <p>Scheduling policy.</p>
 * @method void setScheduler(string $Scheduler) Set <p>Scheduling policy.</p>
 * @method PersistentVolume getPersistentVolume() Obtain <p>Volume directory.</p>
 * @method void setPersistentVolume(PersistentVolume $PersistentVolume) Set <p>Volume directory.</p>
 * @method string getPreStartCommand() Obtain <p>Pre-start command.</p>
 * @method void setPreStartCommand(string $PreStartCommand) Set <p>Pre-start command.</p>
 * @method string getRayStartParams() Obtain <p>RayStart startup parameters.</p>
 * @method void setRayStartParams(string $RayStartParams) Set <p>RayStart startup parameters.</p>
 */
class DynamicInstanceGroupSpec extends AbstractModel
{
    /**
     * @var string <p>Group name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Number of Pods.</p>
     */
    public $PodCount;

    /**
     * @var integer <p>Minimum number of nodes.</p>
     */
    public $MinNodes;

    /**
     * @var integer <p>Maximum number of nodes.</p>
     */
    public $MaxNodes;

    /**
     * @var boolean <p>Whether to enable storage configuration.</p>
     */
    public $StorageConfigEnabled;

    /**
     * @var string <p>headGroup:head;<br>workerGroup:worker</p>
     */
    public $GroupType;

    /**
     * @var integer <p>Number of CPU cores.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory (GB).</p>
     */
    public $MemSize;

    /**
     * @var string <p>GPU type.</p>
     */
    public $GpuType;

    /**
     * @var integer <p>Number of GPU cores.</p>
     */
    public $Gpu;

    /**
     * @var string <p>Resource label.</p>
     */
    public $ResourceLabels;

    /**
     * @var array <p>Environment variable.</p>
     */
    public $Env;

    /**
     * @var array <p>Tag.</p>
     */
    public $Labels;

    /**
     * @var array <p>Tolerations.</p>
     */
    public $Tolerations;

    /**
     * @var string <p>Scheduling policy.</p>
     */
    public $Scheduler;

    /**
     * @var PersistentVolume <p>Volume directory.</p>
     */
    public $PersistentVolume;

    /**
     * @var string <p>Pre-start command.</p>
     */
    public $PreStartCommand;

    /**
     * @var string <p>RayStart startup parameters.</p>
     */
    public $RayStartParams;

    /**
     * @param string $Name <p>Group name.</p>
     * @param integer $PodCount <p>Number of Pods.</p>
     * @param integer $MinNodes <p>Minimum number of nodes.</p>
     * @param integer $MaxNodes <p>Maximum number of nodes.</p>
     * @param boolean $StorageConfigEnabled <p>Whether to enable storage configuration.</p>
     * @param string $GroupType <p>headGroup:head;<br>workerGroup:worker</p>
     * @param integer $Cpu <p>Number of CPU cores.</p>
     * @param integer $MemSize <p>Memory (GB).</p>
     * @param string $GpuType <p>GPU type.</p>
     * @param integer $Gpu <p>Number of GPU cores.</p>
     * @param string $ResourceLabels <p>Resource label.</p>
     * @param array $Env <p>Environment variable.</p>
     * @param array $Labels <p>Tag.</p>
     * @param array $Tolerations <p>Tolerations.</p>
     * @param string $Scheduler <p>Scheduling policy.</p>
     * @param PersistentVolume $PersistentVolume <p>Volume directory.</p>
     * @param string $PreStartCommand <p>Pre-start command.</p>
     * @param string $RayStartParams <p>RayStart startup parameters.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("MinNodes",$param) and $param["MinNodes"] !== null) {
            $this->MinNodes = $param["MinNodes"];
        }

        if (array_key_exists("MaxNodes",$param) and $param["MaxNodes"] !== null) {
            $this->MaxNodes = $param["MaxNodes"];
        }

        if (array_key_exists("StorageConfigEnabled",$param) and $param["StorageConfigEnabled"] !== null) {
            $this->StorageConfigEnabled = $param["StorageConfigEnabled"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("ResourceLabels",$param) and $param["ResourceLabels"] !== null) {
            $this->ResourceLabels = $param["ResourceLabels"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("PersistentVolume",$param) and $param["PersistentVolume"] !== null) {
            $this->PersistentVolume = new PersistentVolume();
            $this->PersistentVolume->deserialize($param["PersistentVolume"]);
        }

        if (array_key_exists("PreStartCommand",$param) and $param["PreStartCommand"] !== null) {
            $this->PreStartCommand = $param["PreStartCommand"];
        }

        if (array_key_exists("RayStartParams",$param) and $param["RayStartParams"] !== null) {
            $this->RayStartParams = $param["RayStartParams"];
        }
    }
}
