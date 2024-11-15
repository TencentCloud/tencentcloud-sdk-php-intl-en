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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterNodePool request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getAutoScalingGroupPara() Obtain AS group parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20440?from_cn_redirect=1
 * @method void setAutoScalingGroupPara(string $AutoScalingGroupPara) Set AS group parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20440?from_cn_redirect=1
 * @method string getLaunchConfigurePara() Obtain Running parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20447?from_cn_redirect=1
 * @method void setLaunchConfigurePara(string $LaunchConfigurePara) Set Running parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20447?from_cn_redirect=1
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain InstanceAdvancedSettings
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set InstanceAdvancedSettings
 * @method boolean getEnableAutoscale() Obtain Indicates whether to enable auto scaling
 * @method void setEnableAutoscale(boolean $EnableAutoscale) Set Indicates whether to enable auto scaling
 * @method string getName() Obtain Node pool name
 * @method void setName(string $Name) Set Node pool name
 * @method array getLabels() Obtain Labels
 * @method void setLabels(array $Labels) Set Labels
 * @method array getTaints() Obtain Taints
 * @method void setTaints(array $Taints) Set Taints
 * @method array getAnnotations() Obtain Node Annotation List
 * @method void setAnnotations(array $Annotations) Set Node Annotation List
 * @method string getContainerRuntime() Obtain Node pool runtime type and version
 * @method void setContainerRuntime(string $ContainerRuntime) Set Node pool runtime type and version
 * @method string getRuntimeVersion() Obtain Runtime version
 * @method void setRuntimeVersion(string $RuntimeVersion) Set Runtime version
 * @method string getNodePoolOs() Obtain Node pool operating system (enter the image ID for a custom image, and enter the OS name for a public image)
 * @method void setNodePoolOs(string $NodePoolOs) Set Node pool operating system (enter the image ID for a custom image, and enter the OS name for a public image)
 * @method string getOsCustomizeType() Obtain Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
 * @method void setOsCustomizeType(string $OsCustomizeType) Set Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
 * @method array getTags() Obtain Resource tag
 * @method void setTags(array $Tags) Set Resource tag
 * @method boolean getDeletionProtection() Obtain Whether Deletion Protection is enabled
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether Deletion Protection is enabled
 */
class CreateClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string AS group parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20440?from_cn_redirect=1
     */
    public $AutoScalingGroupPara;

    /**
     * @var string Running parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20447?from_cn_redirect=1
     */
    public $LaunchConfigurePara;

    /**
     * @var InstanceAdvancedSettings InstanceAdvancedSettings
     */
    public $InstanceAdvancedSettings;

    /**
     * @var boolean Indicates whether to enable auto scaling
     */
    public $EnableAutoscale;

    /**
     * @var string Node pool name
     */
    public $Name;

    /**
     * @var array Labels
     */
    public $Labels;

    /**
     * @var array Taints
     */
    public $Taints;

    /**
     * @var array Node Annotation List
     */
    public $Annotations;

    /**
     * @var string Node pool runtime type and version
     */
    public $ContainerRuntime;

    /**
     * @var string Runtime version
     */
    public $RuntimeVersion;

    /**
     * @var string Node pool operating system (enter the image ID for a custom image, and enter the OS name for a public image)
     */
    public $NodePoolOs;

    /**
     * @var string Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
     */
    public $OsCustomizeType;

    /**
     * @var array Resource tag
     */
    public $Tags;

    /**
     * @var boolean Whether Deletion Protection is enabled
     */
    public $DeletionProtection;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $AutoScalingGroupPara AS group parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20440?from_cn_redirect=1
     * @param string $LaunchConfigurePara Running parameters. For details, see https://intl.cloud.tencent.com/document/product/377/20447?from_cn_redirect=1
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings InstanceAdvancedSettings
     * @param boolean $EnableAutoscale Indicates whether to enable auto scaling
     * @param string $Name Node pool name
     * @param array $Labels Labels
     * @param array $Taints Taints
     * @param array $Annotations Node Annotation List
     * @param string $ContainerRuntime Node pool runtime type and version
     * @param string $RuntimeVersion Runtime version
     * @param string $NodePoolOs Node pool operating system (enter the image ID for a custom image, and enter the OS name for a public image)
     * @param string $OsCustomizeType Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
     * @param array $Tags Resource tag
     * @param boolean $DeletionProtection Whether Deletion Protection is enabled
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoScalingGroupPara",$param) and $param["AutoScalingGroupPara"] !== null) {
            $this->AutoScalingGroupPara = $param["AutoScalingGroupPara"];
        }

        if (array_key_exists("LaunchConfigurePara",$param) and $param["LaunchConfigurePara"] !== null) {
            $this->LaunchConfigurePara = $param["LaunchConfigurePara"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new AnnotationValue();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
