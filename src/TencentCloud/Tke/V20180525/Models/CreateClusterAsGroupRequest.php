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
 * CreateClusterAsGroup request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getAutoScalingGroupPara() Obtain The pass-through parameters for scaling group creation, in the format of a JSON string. For more information, see the [CreateAutoScalingGroup](https://intl.cloud.tencent.com/document/api/377/20440?from_cn_redirect=1) API. The **LaunchConfigurationId** is created with the LaunchConfigurePara parameter, which does not support data entry.
 * @method void setAutoScalingGroupPara(string $AutoScalingGroupPara) Set The pass-through parameters for scaling group creation, in the format of a JSON string. For more information, see the [CreateAutoScalingGroup](https://intl.cloud.tencent.com/document/api/377/20440?from_cn_redirect=1) API. The **LaunchConfigurationId** is created with the LaunchConfigurePara parameter, which does not support data entry.
 * @method string getLaunchConfigurePara() Obtain The pass-through parameters for launch configuration creation, in the format of a JSON string. For more information, see the [CreateLaunchConfiguration](https://intl.cloud.tencent.com/document/api/377/20447?from_cn_redirect=1) API. **ImageId** is not required as it is already included in the cluster dimension. **UserData** is not required as it's set through the **UserScript**.
 * @method void setLaunchConfigurePara(string $LaunchConfigurePara) Set The pass-through parameters for launch configuration creation, in the format of a JSON string. For more information, see the [CreateLaunchConfiguration](https://intl.cloud.tencent.com/document/api/377/20447?from_cn_redirect=1) API. **ImageId** is not required as it is already included in the cluster dimension. **UserData** is not required as it's set through the **UserScript**.
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Advanced configuration information of the node
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Advanced configuration information of the node
 * @method array getLabels() Obtain Node label array
 * @method void setLabels(array $Labels) Set Node label array
 */
class CreateClusterAsGroupRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string The pass-through parameters for scaling group creation, in the format of a JSON string. For more information, see the [CreateAutoScalingGroup](https://intl.cloud.tencent.com/document/api/377/20440?from_cn_redirect=1) API. The **LaunchConfigurationId** is created with the LaunchConfigurePara parameter, which does not support data entry.
     */
    public $AutoScalingGroupPara;

    /**
     * @var string The pass-through parameters for launch configuration creation, in the format of a JSON string. For more information, see the [CreateLaunchConfiguration](https://intl.cloud.tencent.com/document/api/377/20447?from_cn_redirect=1) API. **ImageId** is not required as it is already included in the cluster dimension. **UserData** is not required as it's set through the **UserScript**.
     */
    public $LaunchConfigurePara;

    /**
     * @var InstanceAdvancedSettings Advanced configuration information of the node
     */
    public $InstanceAdvancedSettings;

    /**
     * @var array Node label array
     */
    public $Labels;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $AutoScalingGroupPara The pass-through parameters for scaling group creation, in the format of a JSON string. For more information, see the [CreateAutoScalingGroup](https://intl.cloud.tencent.com/document/api/377/20440?from_cn_redirect=1) API. The **LaunchConfigurationId** is created with the LaunchConfigurePara parameter, which does not support data entry.
     * @param string $LaunchConfigurePara The pass-through parameters for launch configuration creation, in the format of a JSON string. For more information, see the [CreateLaunchConfiguration](https://intl.cloud.tencent.com/document/api/377/20447?from_cn_redirect=1) API. **ImageId** is not required as it is already included in the cluster dimension. **UserData** is not required as it's set through the **UserScript**.
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Advanced configuration information of the node
     * @param array $Labels Node label array
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

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
