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
 * Information about request resources of the container cluster Pod.
 *
 * @method string getComponentName() Obtain <p>Component role name.</p>
 * @method void setComponentName(string $ComponentName) Set <p>Component role name.</p>
 * @method integer getPodNumber() Obtain <p>Number of Pod requests.</p>
 * @method void setPodNumber(integer $PodNumber) Set <p>Number of Pod requests.</p>
 * @method integer getLimitCpu() Obtain <p>Maximum number of CPU requests.</p>
 * @method void setLimitCpu(integer $LimitCpu) Set <p>Maximum number of CPU requests.</p>
 * @method integer getLimitMemory() Obtain <p>Maximum number of memory requests.</p>
 * @method void setLimitMemory(integer $LimitMemory) Set <p>Maximum number of memory requests.</p>
 * @method string getService() Obtain <p>Service name, for example, HIVE.</p>
 * @method void setService(string $Service) Set <p>Service name, for example, HIVE.</p>
 * @method VolumeSetting getVolumeDir() Obtain <p>Data volume directory settings.</p>
 * @method void setVolumeDir(VolumeSetting $VolumeDir) Set <p>Data volume directory settings.</p>
 * @method ExternalAccess getExternalAccess() Obtain <p>External access settings for the component.</p>
 * @method void setExternalAccess(ExternalAccess $ExternalAccess) Set <p>External access settings for the component.</p>
 * @method NodeAffinity getAffinity() Obtain <p>Node affinity settings.</p>
 * @method void setAffinity(NodeAffinity $Affinity) Set <p>Node affinity settings.</p>
 * @method array getDisks() Obtain <p>Selected data disk information.</p>
 * @method void setDisks(array $Disks) Set <p>Selected data disk information.</p>
 * @method array getTolerations() Obtain <p>Toleration.</p>
 * @method void setTolerations(array $Tolerations) Set <p>Toleration.</p>
 * @method PodAffinitySpec getPodAffinity() Obtain <p>Pod affinity.</p>
 * @method void setPodAffinity(PodAffinitySpec $PodAffinity) Set <p>Pod affinity.</p>
 * @method PodAffinitySpec getPodAntiAffinity() Obtain <p>Pod anti-affinity.</p>
 * @method void setPodAntiAffinity(PodAffinitySpec $PodAntiAffinity) Set <p>Pod anti-affinity.</p>
 * @method array getTopologySpreadConstraints() Obtain <p>Topology distribution constraint.</p>
 * @method void setTopologySpreadConstraints(array $TopologySpreadConstraints) Set <p>Topology distribution constraint.</p>
 * @method array getPodLabels() Obtain <p>Pod tag.</p>
 * @method void setPodLabels(array $PodLabels) Set <p>Pod tag.</p>
 * @method boolean getEnableDefaultRayCluster() Obtain <p>Whether the default Ray cluster is created.</p>
 * @method void setEnableDefaultRayCluster(boolean $EnableDefaultRayCluster) Set <p>Whether the default Ray cluster is created.</p>
 * @method ImageInfoV2 getImageInfoV2() Obtain <p>Custom image.</p>
 * @method void setImageInfoV2(ImageInfoV2 $ImageInfoV2) Set <p>Custom image.</p>
 * @method DynamicInstanceForm getDynamicInstanceForm() Obtain <p>Specifies the dynamic instance parameter to be created.</p>
 * @method void setDynamicInstanceForm(DynamicInstanceForm $DynamicInstanceForm) Set <p>Specifies the dynamic instance parameter to be created.</p>
 */
class CloudResource extends AbstractModel
{
    /**
     * @var string <p>Component role name.</p>
     */
    public $ComponentName;

    /**
     * @var integer <p>Number of Pod requests.</p>
     */
    public $PodNumber;

    /**
     * @var integer <p>Maximum number of CPU requests.</p>
     */
    public $LimitCpu;

    /**
     * @var integer <p>Maximum number of memory requests.</p>
     */
    public $LimitMemory;

    /**
     * @var string <p>Service name, for example, HIVE.</p>
     */
    public $Service;

    /**
     * @var VolumeSetting <p>Data volume directory settings.</p>
     */
    public $VolumeDir;

    /**
     * @var ExternalAccess <p>External access settings for the component.</p>
     */
    public $ExternalAccess;

    /**
     * @var NodeAffinity <p>Node affinity settings.</p>
     */
    public $Affinity;

    /**
     * @var array <p>Selected data disk information.</p>
     */
    public $Disks;

    /**
     * @var array <p>Toleration.</p>
     */
    public $Tolerations;

    /**
     * @var PodAffinitySpec <p>Pod affinity.</p>
     */
    public $PodAffinity;

    /**
     * @var PodAffinitySpec <p>Pod anti-affinity.</p>
     */
    public $PodAntiAffinity;

    /**
     * @var array <p>Topology distribution constraint.</p>
     */
    public $TopologySpreadConstraints;

    /**
     * @var array <p>Pod tag.</p>
     */
    public $PodLabels;

    /**
     * @var boolean <p>Whether the default Ray cluster is created.</p>
     */
    public $EnableDefaultRayCluster;

    /**
     * @var ImageInfoV2 <p>Custom image.</p>
     */
    public $ImageInfoV2;

    /**
     * @var DynamicInstanceForm <p>Specifies the dynamic instance parameter to be created.</p>
     */
    public $DynamicInstanceForm;

    /**
     * @param string $ComponentName <p>Component role name.</p>
     * @param integer $PodNumber <p>Number of Pod requests.</p>
     * @param integer $LimitCpu <p>Maximum number of CPU requests.</p>
     * @param integer $LimitMemory <p>Maximum number of memory requests.</p>
     * @param string $Service <p>Service name, for example, HIVE.</p>
     * @param VolumeSetting $VolumeDir <p>Data volume directory settings.</p>
     * @param ExternalAccess $ExternalAccess <p>External access settings for the component.</p>
     * @param NodeAffinity $Affinity <p>Node affinity settings.</p>
     * @param array $Disks <p>Selected data disk information.</p>
     * @param array $Tolerations <p>Toleration.</p>
     * @param PodAffinitySpec $PodAffinity <p>Pod affinity.</p>
     * @param PodAffinitySpec $PodAntiAffinity <p>Pod anti-affinity.</p>
     * @param array $TopologySpreadConstraints <p>Topology distribution constraint.</p>
     * @param array $PodLabels <p>Pod tag.</p>
     * @param boolean $EnableDefaultRayCluster <p>Whether the default Ray cluster is created.</p>
     * @param ImageInfoV2 $ImageInfoV2 <p>Custom image.</p>
     * @param DynamicInstanceForm $DynamicInstanceForm <p>Specifies the dynamic instance parameter to be created.</p>
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
        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("PodNumber",$param) and $param["PodNumber"] !== null) {
            $this->PodNumber = $param["PodNumber"];
        }

        if (array_key_exists("LimitCpu",$param) and $param["LimitCpu"] !== null) {
            $this->LimitCpu = $param["LimitCpu"];
        }

        if (array_key_exists("LimitMemory",$param) and $param["LimitMemory"] !== null) {
            $this->LimitMemory = $param["LimitMemory"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("VolumeDir",$param) and $param["VolumeDir"] !== null) {
            $this->VolumeDir = new VolumeSetting();
            $this->VolumeDir->deserialize($param["VolumeDir"]);
        }

        if (array_key_exists("ExternalAccess",$param) and $param["ExternalAccess"] !== null) {
            $this->ExternalAccess = new ExternalAccess();
            $this->ExternalAccess->deserialize($param["ExternalAccess"]);
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = new NodeAffinity();
            $this->Affinity->deserialize($param["Affinity"]);
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new Disk();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
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

        if (array_key_exists("PodAffinity",$param) and $param["PodAffinity"] !== null) {
            $this->PodAffinity = new PodAffinitySpec();
            $this->PodAffinity->deserialize($param["PodAffinity"]);
        }

        if (array_key_exists("PodAntiAffinity",$param) and $param["PodAntiAffinity"] !== null) {
            $this->PodAntiAffinity = new PodAffinitySpec();
            $this->PodAntiAffinity->deserialize($param["PodAntiAffinity"]);
        }

        if (array_key_exists("TopologySpreadConstraints",$param) and $param["TopologySpreadConstraints"] !== null) {
            $this->TopologySpreadConstraints = [];
            foreach ($param["TopologySpreadConstraints"] as $key => $value){
                $obj = new TopologySpreadConstraint();
                $obj->deserialize($value);
                array_push($this->TopologySpreadConstraints, $obj);
            }
        }

        if (array_key_exists("PodLabels",$param) and $param["PodLabels"] !== null) {
            $this->PodLabels = [];
            foreach ($param["PodLabels"] as $key => $value){
                $obj = new StringMap();
                $obj->deserialize($value);
                array_push($this->PodLabels, $obj);
            }
        }

        if (array_key_exists("EnableDefaultRayCluster",$param) and $param["EnableDefaultRayCluster"] !== null) {
            $this->EnableDefaultRayCluster = $param["EnableDefaultRayCluster"];
        }

        if (array_key_exists("ImageInfoV2",$param) and $param["ImageInfoV2"] !== null) {
            $this->ImageInfoV2 = new ImageInfoV2();
            $this->ImageInfoV2->deserialize($param["ImageInfoV2"]);
        }

        if (array_key_exists("DynamicInstanceForm",$param) and $param["DynamicInstanceForm"] !== null) {
            $this->DynamicInstanceForm = new DynamicInstanceForm();
            $this->DynamicInstanceForm->deserialize($param["DynamicInstanceForm"]);
        }
    }
}
