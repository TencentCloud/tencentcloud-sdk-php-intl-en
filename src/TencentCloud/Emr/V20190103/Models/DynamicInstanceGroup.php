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
 * Group part in the form data submitted when creating a DynamicInstance.
 *
 * @method string getGroupType() Obtain <p>Resource group type.</p>
 * @method void setGroupType(string $GroupType) Set <p>Resource group type.</p>
 * @method string getGroupName() Obtain <p>Resource group name.</p>
 * @method void setGroupName(string $GroupName) Set <p>Resource group name.</p>
 * @method integer getPodCpu() Obtain <p>Number of Pod CPU cores.</p>
 * @method void setPodCpu(integer $PodCpu) Set <p>Number of Pod CPU cores.</p>
 * @method integer getPodMem() Obtain <p>Pod memory size (GB).</p>
 * @method void setPodMem(integer $PodMem) Set <p>Pod memory size (GB).</p>
 * @method string getPodGpuType() Obtain <p>Pod GPU type.</p>
 * @method void setPodGpuType(string $PodGpuType) Set <p>Pod GPU type.</p>
 * @method integer getPodGpu() Obtain <p>Number of Pod GPUs.</p>
 * @method void setPodGpu(integer $PodGpu) Set <p>Number of Pod GPUs.</p>
 * @method integer getPodNum() Obtain <p>Number of Pods.</p>
 * @method void setPodNum(integer $PodNum) Set <p>Number of Pods.</p>
 * @method integer getMinPodNum() Obtain <p>Minimum number of elastic Pods.</p>
 * @method void setMinPodNum(integer $MinPodNum) Set <p>Minimum number of elastic Pods.</p>
 * @method integer getMaxPodNum() Obtain <p>Maximum number of elastic Pods. When MaxPodNum &gt; MinPodNum, auto scaling is enabled by default and scaling is performed within the range.</p>
 * @method void setMaxPodNum(integer $MaxPodNum) Set <p>Maximum number of elastic Pods. When MaxPodNum &gt; MinPodNum, auto scaling is enabled by default and scaling is performed within the range.</p>
 * @method boolean getSupportPV() Obtain <p>Whether to support storage configuration.</p>
 * @method void setSupportPV(boolean $SupportPV) Set <p>Whether to support storage configuration.</p>
 * @method array getCBSVolumes() Obtain <p>CBS storage volume list.</p>
 * @method void setCBSVolumes(array $CBSVolumes) Set <p>CBS storage volume list.</p>
 * @method array getCFSVolumes() Obtain <p>CFS storage volume list.</p>
 * @method void setCFSVolumes(array $CFSVolumes) Set <p>CFS storage volume list.</p>
 * @method array getCOSVolumes() Obtain <p>COS storage volume list.</p>
 * @method void setCOSVolumes(array $COSVolumes) Set <p>COS storage volume list.</p>
 * @method array getVolumeMounts() Obtain <p>Mount volume list.</p>
 * @method void setVolumeMounts(array $VolumeMounts) Set <p>Mount volume list.</p>
 * @method array getLabels() Obtain <p>Pod label.</p>
 * @method void setLabels(array $Labels) Set <p>Pod label.</p>
 * @method array getTolerations() Obtain <p>Tolerations definition.</p>
 * @method void setTolerations(array $Tolerations) Set <p>Tolerations definition.</p>
 * @method array getEnvs() Obtain <p>Environment variable.</p>
 * @method void setEnvs(array $Envs) Set <p>Environment variable.</p>
 * @method string getSchedulingPolicy() Obtain <p>Node scheduling policy.</p>
 * @method void setSchedulingPolicy(string $SchedulingPolicy) Set <p>Node scheduling policy.</p>
 * @method string getResourceLabel() Obtain <p>Resource label.</p>
 * @method void setResourceLabel(string $ResourceLabel) Set <p>Resource label.</p>
 * @method string getPodGpuResourceKey() Obtain <p>GPU resource vendor key.</p>
 * @method void setPodGpuResourceKey(string $PodGpuResourceKey) Set <p>GPU resource vendor key.</p>
 * @method array getCFSTurboVolumes() Obtain <p>CFS Turbo mount list.</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) Set <p>CFS Turbo mount list.</p>
 * @method array getGooseFSVolumes() Obtain <p>GooseFS disk.</p>
 * @method void setGooseFSVolumes(array $GooseFSVolumes) Set <p>GooseFS disk.</p>
 * @method string getPreStartCommand() Obtain <p>Pre-start command.</p>
 * @method void setPreStartCommand(string $PreStartCommand) Set <p>Pre-start command.</p>
 * @method string getRayStartParams() Obtain <p>Ray pre-start command.</p>
 * @method void setRayStartParams(string $RayStartParams) Set <p>Ray pre-start command.</p>
 */
class DynamicInstanceGroup extends AbstractModel
{
    /**
     * @var string <p>Resource group type.</p>
     */
    public $GroupType;

    /**
     * @var string <p>Resource group name.</p>
     */
    public $GroupName;

    /**
     * @var integer <p>Number of Pod CPU cores.</p>
     */
    public $PodCpu;

    /**
     * @var integer <p>Pod memory size (GB).</p>
     */
    public $PodMem;

    /**
     * @var string <p>Pod GPU type.</p>
     */
    public $PodGpuType;

    /**
     * @var integer <p>Number of Pod GPUs.</p>
     */
    public $PodGpu;

    /**
     * @var integer <p>Number of Pods.</p>
     */
    public $PodNum;

    /**
     * @var integer <p>Minimum number of elastic Pods.</p>
     */
    public $MinPodNum;

    /**
     * @var integer <p>Maximum number of elastic Pods. When MaxPodNum &gt; MinPodNum, auto scaling is enabled by default and scaling is performed within the range.</p>
     */
    public $MaxPodNum;

    /**
     * @var boolean <p>Whether to support storage configuration.</p>
     */
    public $SupportPV;

    /**
     * @var array <p>CBS storage volume list.</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>CFS storage volume list.</p>
     */
    public $CFSVolumes;

    /**
     * @var array <p>COS storage volume list.</p>
     */
    public $COSVolumes;

    /**
     * @var array <p>Mount volume list.</p>
     */
    public $VolumeMounts;

    /**
     * @var array <p>Pod label.</p>
     */
    public $Labels;

    /**
     * @var array <p>Tolerations definition.</p>
     */
    public $Tolerations;

    /**
     * @var array <p>Environment variable.</p>
     */
    public $Envs;

    /**
     * @var string <p>Node scheduling policy.</p>
     */
    public $SchedulingPolicy;

    /**
     * @var string <p>Resource label.</p>
     */
    public $ResourceLabel;

    /**
     * @var string <p>GPU resource vendor key.</p>
     */
    public $PodGpuResourceKey;

    /**
     * @var array <p>CFS Turbo mount list.</p>
     */
    public $CFSTurboVolumes;

    /**
     * @var array <p>GooseFS disk.</p>
     */
    public $GooseFSVolumes;

    /**
     * @var string <p>Pre-start command.</p>
     */
    public $PreStartCommand;

    /**
     * @var string <p>Ray pre-start command.</p>
     */
    public $RayStartParams;

    /**
     * @param string $GroupType <p>Resource group type.</p>
     * @param string $GroupName <p>Resource group name.</p>
     * @param integer $PodCpu <p>Number of Pod CPU cores.</p>
     * @param integer $PodMem <p>Pod memory size (GB).</p>
     * @param string $PodGpuType <p>Pod GPU type.</p>
     * @param integer $PodGpu <p>Number of Pod GPUs.</p>
     * @param integer $PodNum <p>Number of Pods.</p>
     * @param integer $MinPodNum <p>Minimum number of elastic Pods.</p>
     * @param integer $MaxPodNum <p>Maximum number of elastic Pods. When MaxPodNum &gt; MinPodNum, auto scaling is enabled by default and scaling is performed within the range.</p>
     * @param boolean $SupportPV <p>Whether to support storage configuration.</p>
     * @param array $CBSVolumes <p>CBS storage volume list.</p>
     * @param array $CFSVolumes <p>CFS storage volume list.</p>
     * @param array $COSVolumes <p>COS storage volume list.</p>
     * @param array $VolumeMounts <p>Mount volume list.</p>
     * @param array $Labels <p>Pod label.</p>
     * @param array $Tolerations <p>Tolerations definition.</p>
     * @param array $Envs <p>Environment variable.</p>
     * @param string $SchedulingPolicy <p>Node scheduling policy.</p>
     * @param string $ResourceLabel <p>Resource label.</p>
     * @param string $PodGpuResourceKey <p>GPU resource vendor key.</p>
     * @param array $CFSTurboVolumes <p>CFS Turbo mount list.</p>
     * @param array $GooseFSVolumes <p>GooseFS disk.</p>
     * @param string $PreStartCommand <p>Pre-start command.</p>
     * @param string $RayStartParams <p>Ray pre-start command.</p>
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
        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("PodCpu",$param) and $param["PodCpu"] !== null) {
            $this->PodCpu = $param["PodCpu"];
        }

        if (array_key_exists("PodMem",$param) and $param["PodMem"] !== null) {
            $this->PodMem = $param["PodMem"];
        }

        if (array_key_exists("PodGpuType",$param) and $param["PodGpuType"] !== null) {
            $this->PodGpuType = $param["PodGpuType"];
        }

        if (array_key_exists("PodGpu",$param) and $param["PodGpu"] !== null) {
            $this->PodGpu = $param["PodGpu"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }

        if (array_key_exists("MinPodNum",$param) and $param["MinPodNum"] !== null) {
            $this->MinPodNum = $param["MinPodNum"];
        }

        if (array_key_exists("MaxPodNum",$param) and $param["MaxPodNum"] !== null) {
            $this->MaxPodNum = $param["MaxPodNum"];
        }

        if (array_key_exists("SupportPV",$param) and $param["SupportPV"] !== null) {
            $this->SupportPV = $param["SupportPV"];
        }

        if (array_key_exists("CBSVolumes",$param) and $param["CBSVolumes"] !== null) {
            $this->CBSVolumes = [];
            foreach ($param["CBSVolumes"] as $key => $value){
                $obj = new CBSVolume();
                $obj->deserialize($value);
                array_push($this->CBSVolumes, $obj);
            }
        }

        if (array_key_exists("CFSVolumes",$param) and $param["CFSVolumes"] !== null) {
            $this->CFSVolumes = [];
            foreach ($param["CFSVolumes"] as $key => $value){
                $obj = new CFSVolume();
                $obj->deserialize($value);
                array_push($this->CFSVolumes, $obj);
            }
        }

        if (array_key_exists("COSVolumes",$param) and $param["COSVolumes"] !== null) {
            $this->COSVolumes = [];
            foreach ($param["COSVolumes"] as $key => $value){
                $obj = new COSVolume();
                $obj->deserialize($value);
                array_push($this->COSVolumes, $obj);
            }
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TkeLabel();
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

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("SchedulingPolicy",$param) and $param["SchedulingPolicy"] !== null) {
            $this->SchedulingPolicy = $param["SchedulingPolicy"];
        }

        if (array_key_exists("ResourceLabel",$param) and $param["ResourceLabel"] !== null) {
            $this->ResourceLabel = $param["ResourceLabel"];
        }

        if (array_key_exists("PodGpuResourceKey",$param) and $param["PodGpuResourceKey"] !== null) {
            $this->PodGpuResourceKey = $param["PodGpuResourceKey"];
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
        }

        if (array_key_exists("GooseFSVolumes",$param) and $param["GooseFSVolumes"] !== null) {
            $this->GooseFSVolumes = [];
            foreach ($param["GooseFSVolumes"] as $key => $value){
                $obj = new GooseFSVolume();
                $obj->deserialize($value);
                array_push($this->GooseFSVolumes, $obj);
            }
        }

        if (array_key_exists("PreStartCommand",$param) and $param["PreStartCommand"] !== null) {
            $this->PreStartCommand = $param["PreStartCommand"];
        }

        if (array_key_exists("RayStartParams",$param) and $param["RayStartParams"] !== null) {
            $this->RayStartParams = $param["RayStartParams"];
        }
    }
}
