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
 * Form data submitted when updating a DynamicInstance.
 *
 * @method integer getModifyScope() Obtain <p>Update scope:<br>1: Add a worker group (DynamicInstance level)<br>2: Update storage configuration (DynamicInstance level)<br>3: Update tag configuration (DynamicInstance level)<br>4: Update advanced configuration (DynamicInstance level)<br>5: Update PodCpu and PodMem (DynamicInstance-group level)<br>6: Update PodNum, MinPodNum, and MaxPodNum (DynamicInstance-group level)<br>7: Update storage configuration (DynamicInstance-group level)<br>8: Update tag configuration (DynamicInstance-group level)</p>
 * @method void setModifyScope(integer $ModifyScope) Set <p>Update scope:<br>1: Add a worker group (DynamicInstance level)<br>2: Update storage configuration (DynamicInstance level)<br>3: Update tag configuration (DynamicInstance level)<br>4: Update advanced configuration (DynamicInstance level)<br>5: Update PodCpu and PodMem (DynamicInstance-group level)<br>6: Update PodNum, MinPodNum, and MaxPodNum (DynamicInstance-group level)<br>7: Update storage configuration (DynamicInstance-group level)<br>8: Update tag configuration (DynamicInstance-group level)</p>
 * @method DynamicInstanceGroup getAddDynamicInstanceGroup() Obtain <p>Added worker group information.</p>
 * @method void setAddDynamicInstanceGroup(DynamicInstanceGroup $AddDynamicInstanceGroup) Set <p>Added worker group information.</p>
 * @method boolean getSupportPV() Obtain <p>Whether to support storage configuration.</p>
 * @method void setSupportPV(boolean $SupportPV) Set <p>Whether to support storage configuration.</p>
 * @method array getCBSVolumes() Obtain <p>CBS storage volume list.</p>
 * @method void setCBSVolumes(array $CBSVolumes) Set <p>CBS storage volume list.</p>
 * @method array getCFSVolumes() Obtain <p>CFS storage volume list, excluding the CFS Turbo list.</p>
 * @method void setCFSVolumes(array $CFSVolumes) Set <p>CFS storage volume list, excluding the CFS Turbo list.</p>
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
 * @method array getDependServices() Obtain <p>Dependent external components.</p>
 * @method void setDependServices(array $DependServices) Set <p>Dependent external components.</p>
 * @method boolean getSupportNewToken() Obtain <p>Whether to generate a new token for authentication.</p>
 * @method void setSupportNewToken(boolean $SupportNewToken) Set <p>Whether to generate a new token for authentication.</p>
 * @method DynamicInstanceGroup getModifyDynamicInstanceGroup() Obtain <p>Update information at the DynamicInstance-group level.</p>
 * @method void setModifyDynamicInstanceGroup(DynamicInstanceGroup $ModifyDynamicInstanceGroup) Set <p>Update information at the DynamicInstance-group level.</p>
 * @method array getCFSTurboVolumes() Obtain <p>CFS Turbo mount list, excluding the standard edition.</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) Set <p>CFS Turbo mount list, excluding the standard edition.</p>
 * @method CustomImage getCustomImage() Obtain <p>Custom image.</p>
 * @method void setCustomImage(CustomImage $CustomImage) Set <p>Custom image.</p>
 * @method ImageInfoV2 getImageInfoV2() Obtain <p>Custom image.</p>
 * @method void setImageInfoV2(ImageInfoV2 $ImageInfoV2) Set <p>Custom image.</p>
 * @method array getGooseFSVolumes() Obtain <p>GooseFS disk.</p>
 * @method void setGooseFSVolumes(array $GooseFSVolumes) Set <p>GooseFS disk.</p>
 * @method boolean getEnableHistoryServer() Obtain <p>Whether to enable log collection.</p>
 * @method void setEnableHistoryServer(boolean $EnableHistoryServer) Set <p>Whether to enable log collection.</p>
 */
class ModifyDynamicInstanceForm extends AbstractModel
{
    /**
     * @var integer <p>Update scope:<br>1: Add a worker group (DynamicInstance level)<br>2: Update storage configuration (DynamicInstance level)<br>3: Update tag configuration (DynamicInstance level)<br>4: Update advanced configuration (DynamicInstance level)<br>5: Update PodCpu and PodMem (DynamicInstance-group level)<br>6: Update PodNum, MinPodNum, and MaxPodNum (DynamicInstance-group level)<br>7: Update storage configuration (DynamicInstance-group level)<br>8: Update tag configuration (DynamicInstance-group level)</p>
     */
    public $ModifyScope;

    /**
     * @var DynamicInstanceGroup <p>Added worker group information.</p>
     */
    public $AddDynamicInstanceGroup;

    /**
     * @var boolean <p>Whether to support storage configuration.</p>
     */
    public $SupportPV;

    /**
     * @var array <p>CBS storage volume list.</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>CFS storage volume list, excluding the CFS Turbo list.</p>
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
     * @var array <p>Dependent external components.</p>
     */
    public $DependServices;

    /**
     * @var boolean <p>Whether to generate a new token for authentication.</p>
     */
    public $SupportNewToken;

    /**
     * @var DynamicInstanceGroup <p>Update information at the DynamicInstance-group level.</p>
     */
    public $ModifyDynamicInstanceGroup;

    /**
     * @var array <p>CFS Turbo mount list, excluding the standard edition.</p>
     */
    public $CFSTurboVolumes;

    /**
     * @var CustomImage <p>Custom image.</p>
     */
    public $CustomImage;

    /**
     * @var ImageInfoV2 <p>Custom image.</p>
     */
    public $ImageInfoV2;

    /**
     * @var array <p>GooseFS disk.</p>
     */
    public $GooseFSVolumes;

    /**
     * @var boolean <p>Whether to enable log collection.</p>
     */
    public $EnableHistoryServer;

    /**
     * @param integer $ModifyScope <p>Update scope:<br>1: Add a worker group (DynamicInstance level)<br>2: Update storage configuration (DynamicInstance level)<br>3: Update tag configuration (DynamicInstance level)<br>4: Update advanced configuration (DynamicInstance level)<br>5: Update PodCpu and PodMem (DynamicInstance-group level)<br>6: Update PodNum, MinPodNum, and MaxPodNum (DynamicInstance-group level)<br>7: Update storage configuration (DynamicInstance-group level)<br>8: Update tag configuration (DynamicInstance-group level)</p>
     * @param DynamicInstanceGroup $AddDynamicInstanceGroup <p>Added worker group information.</p>
     * @param boolean $SupportPV <p>Whether to support storage configuration.</p>
     * @param array $CBSVolumes <p>CBS storage volume list.</p>
     * @param array $CFSVolumes <p>CFS storage volume list, excluding the CFS Turbo list.</p>
     * @param array $COSVolumes <p>COS storage volume list.</p>
     * @param array $VolumeMounts <p>Mount volume list.</p>
     * @param array $Labels <p>Pod label.</p>
     * @param array $Tolerations <p>Tolerations definition.</p>
     * @param array $Envs <p>Environment variable.</p>
     * @param array $DependServices <p>Dependent external components.</p>
     * @param boolean $SupportNewToken <p>Whether to generate a new token for authentication.</p>
     * @param DynamicInstanceGroup $ModifyDynamicInstanceGroup <p>Update information at the DynamicInstance-group level.</p>
     * @param array $CFSTurboVolumes <p>CFS Turbo mount list, excluding the standard edition.</p>
     * @param CustomImage $CustomImage <p>Custom image.</p>
     * @param ImageInfoV2 $ImageInfoV2 <p>Custom image.</p>
     * @param array $GooseFSVolumes <p>GooseFS disk.</p>
     * @param boolean $EnableHistoryServer <p>Whether to enable log collection.</p>
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
        if (array_key_exists("ModifyScope",$param) and $param["ModifyScope"] !== null) {
            $this->ModifyScope = $param["ModifyScope"];
        }

        if (array_key_exists("AddDynamicInstanceGroup",$param) and $param["AddDynamicInstanceGroup"] !== null) {
            $this->AddDynamicInstanceGroup = new DynamicInstanceGroup();
            $this->AddDynamicInstanceGroup->deserialize($param["AddDynamicInstanceGroup"]);
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

        if (array_key_exists("DependServices",$param) and $param["DependServices"] !== null) {
            $this->DependServices = [];
            foreach ($param["DependServices"] as $key => $value){
                $obj = new DependService();
                $obj->deserialize($value);
                array_push($this->DependServices, $obj);
            }
        }

        if (array_key_exists("SupportNewToken",$param) and $param["SupportNewToken"] !== null) {
            $this->SupportNewToken = $param["SupportNewToken"];
        }

        if (array_key_exists("ModifyDynamicInstanceGroup",$param) and $param["ModifyDynamicInstanceGroup"] !== null) {
            $this->ModifyDynamicInstanceGroup = new DynamicInstanceGroup();
            $this->ModifyDynamicInstanceGroup->deserialize($param["ModifyDynamicInstanceGroup"]);
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
        }

        if (array_key_exists("CustomImage",$param) and $param["CustomImage"] !== null) {
            $this->CustomImage = new CustomImage();
            $this->CustomImage->deserialize($param["CustomImage"]);
        }

        if (array_key_exists("ImageInfoV2",$param) and $param["ImageInfoV2"] !== null) {
            $this->ImageInfoV2 = new ImageInfoV2();
            $this->ImageInfoV2->deserialize($param["ImageInfoV2"]);
        }

        if (array_key_exists("GooseFSVolumes",$param) and $param["GooseFSVolumes"] !== null) {
            $this->GooseFSVolumes = [];
            foreach ($param["GooseFSVolumes"] as $key => $value){
                $obj = new GooseFSVolume();
                $obj->deserialize($value);
                array_push($this->GooseFSVolumes, $obj);
            }
        }

        if (array_key_exists("EnableHistoryServer",$param) and $param["EnableHistoryServer"] !== null) {
            $this->EnableHistoryServer = $param["EnableHistoryServer"];
        }
    }
}
