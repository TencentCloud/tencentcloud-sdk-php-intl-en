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
 * Form data submitted when creating a DynamicInstance.
 *
 * @method string getDynamicInstanceName() Obtain <p>DynamicInstance name. The length is limited to 1–64 characters and can only contain lowercase letters.</p>
 * @method void setDynamicInstanceName(string $DynamicInstanceName) Set <p>DynamicInstance name. The length is limited to 1–64 characters and can only contain lowercase letters.</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method boolean getSupportHA() Obtain <p>Whether high availability is supported.</p>
 * @method void setSupportHA(boolean $SupportHA) Set <p>Whether high availability is supported.</p>
 * @method CustomImage getCustomImage() Obtain <p>Custom image information.</p>
 * @method void setCustomImage(CustomImage $CustomImage) Set <p>Custom image information.</p>
 * @method array getDynamicInstanceGroups() Obtain <p>Resource group configuration.</p>
 * @method void setDynamicInstanceGroups(array $DynamicInstanceGroups) Set <p>Resource group configuration.</p>
 * @method boolean getSupportPV() Obtain <p>Whether to support storage configuration.</p>
 * @method void setSupportPV(boolean $SupportPV) Set <p>Whether to support storage configuration.</p>
 * @method array getCBSVolumes() Obtain <p>CBS storage volume list.</p>
 * @method void setCBSVolumes(array $CBSVolumes) Set <p>CBS storage volume list.</p>
 * @method array getCFSVolumes() Obtain <p>CFS storage volume list, including only CFS but not CFS Turbo.</p>
 * @method void setCFSVolumes(array $CFSVolumes) Set <p>CFS storage volume list, including only CFS but not CFS Turbo.</p>
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
 * @method boolean getSupportToken() Obtain <p>Whether to enable token authentication.</p>
 * @method void setSupportToken(boolean $SupportToken) Set <p>Whether to enable token authentication.</p>
 * @method array getCFSTurboVolumes() Obtain <p>CFS Turbo mount list, excluding the standard edition CFS.</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) Set <p>CFS Turbo mount list, excluding the standard edition CFS.</p>
 * @method ImageInfoV2 getImageInfoV2() Obtain <p>Custom image.</p>
 * @method void setImageInfoV2(ImageInfoV2 $ImageInfoV2) Set <p>Custom image.</p>
 * @method array getGooseFSVolumes() Obtain <p>GooseFS disk.</p>
 * @method void setGooseFSVolumes(array $GooseFSVolumes) Set <p>GooseFS disk.</p>
 * @method boolean getEnableHistoryServer() Obtain <p>Enable HistoryServer.</p>
 * @method void setEnableHistoryServer(boolean $EnableHistoryServer) Set <p>Enable HistoryServer.</p>
 */
class DynamicInstanceForm extends AbstractModel
{
    /**
     * @var string <p>DynamicInstance name. The length is limited to 1–64 characters and can only contain lowercase letters.</p>
     */
    public $DynamicInstanceName;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var boolean <p>Whether high availability is supported.</p>
     */
    public $SupportHA;

    /**
     * @var CustomImage <p>Custom image information.</p>
     */
    public $CustomImage;

    /**
     * @var array <p>Resource group configuration.</p>
     */
    public $DynamicInstanceGroups;

    /**
     * @var boolean <p>Whether to support storage configuration.</p>
     */
    public $SupportPV;

    /**
     * @var array <p>CBS storage volume list.</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>CFS storage volume list, including only CFS but not CFS Turbo.</p>
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
     * @var boolean <p>Whether to enable token authentication.</p>
     */
    public $SupportToken;

    /**
     * @var array <p>CFS Turbo mount list, excluding the standard edition CFS.</p>
     */
    public $CFSTurboVolumes;

    /**
     * @var ImageInfoV2 <p>Custom image.</p>
     */
    public $ImageInfoV2;

    /**
     * @var array <p>GooseFS disk.</p>
     */
    public $GooseFSVolumes;

    /**
     * @var boolean <p>Enable HistoryServer.</p>
     */
    public $EnableHistoryServer;

    /**
     * @param string $DynamicInstanceName <p>DynamicInstance name. The length is limited to 1–64 characters and can only contain lowercase letters.</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param boolean $SupportHA <p>Whether high availability is supported.</p>
     * @param CustomImage $CustomImage <p>Custom image information.</p>
     * @param array $DynamicInstanceGroups <p>Resource group configuration.</p>
     * @param boolean $SupportPV <p>Whether to support storage configuration.</p>
     * @param array $CBSVolumes <p>CBS storage volume list.</p>
     * @param array $CFSVolumes <p>CFS storage volume list, including only CFS but not CFS Turbo.</p>
     * @param array $COSVolumes <p>COS storage volume list.</p>
     * @param array $VolumeMounts <p>Mount volume list.</p>
     * @param array $Labels <p>Pod label.</p>
     * @param array $Tolerations <p>Tolerations definition.</p>
     * @param array $Envs <p>Environment variable.</p>
     * @param array $DependServices <p>Dependent external components.</p>
     * @param boolean $SupportToken <p>Whether to enable token authentication.</p>
     * @param array $CFSTurboVolumes <p>CFS Turbo mount list, excluding the standard edition CFS.</p>
     * @param ImageInfoV2 $ImageInfoV2 <p>Custom image.</p>
     * @param array $GooseFSVolumes <p>GooseFS disk.</p>
     * @param boolean $EnableHistoryServer <p>Enable HistoryServer.</p>
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
        if (array_key_exists("DynamicInstanceName",$param) and $param["DynamicInstanceName"] !== null) {
            $this->DynamicInstanceName = $param["DynamicInstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("CustomImage",$param) and $param["CustomImage"] !== null) {
            $this->CustomImage = new CustomImage();
            $this->CustomImage->deserialize($param["CustomImage"]);
        }

        if (array_key_exists("DynamicInstanceGroups",$param) and $param["DynamicInstanceGroups"] !== null) {
            $this->DynamicInstanceGroups = [];
            foreach ($param["DynamicInstanceGroups"] as $key => $value){
                $obj = new DynamicInstanceGroup();
                $obj->deserialize($value);
                array_push($this->DynamicInstanceGroups, $obj);
            }
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

        if (array_key_exists("SupportToken",$param) and $param["SupportToken"] !== null) {
            $this->SupportToken = $param["SupportToken"];
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
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
