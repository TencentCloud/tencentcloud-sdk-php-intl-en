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
 * Configuration parameters of existing nodes in different roles
 *
 * @method string getNodeRole() Obtain Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
 * @method void setNodeRole(string $NodeRole) Set Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
 * @method ExistedInstancesPara getExistedInstancesPara() Obtain Reinstallation parameter of existing instances
 * @method void setExistedInstancesPara(ExistedInstancesPara $ExistedInstancesPara) Set Reinstallation parameter of existing instances
 * @method InstanceAdvancedSettings getInstanceAdvancedSettingsOverride() Obtain Advanced node setting, which overrides the InstanceAdvancedSettings item set at the cluster level (currently valid for the ExtraArgs node custom parameter only)
 * @method void setInstanceAdvancedSettingsOverride(InstanceAdvancedSettings $InstanceAdvancedSettingsOverride) Set Advanced node setting, which overrides the InstanceAdvancedSettings item set at the cluster level (currently valid for the ExtraArgs node custom parameter only)
 * @method array getDesiredPodNumbers() Obtain When the custom PodCIDR mode is enabled for the cluster, you can specify the maximum number of pods per node.
 * @method void setDesiredPodNumbers(array $DesiredPodNumbers) Set When the custom PodCIDR mode is enabled for the cluster, you can specify the maximum number of pods per node.
 */
class ExistedInstancesForNode extends AbstractModel
{
    /**
     * @var string Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
     */
    public $NodeRole;

    /**
     * @var ExistedInstancesPara Reinstallation parameter of existing instances
     */
    public $ExistedInstancesPara;

    /**
     * @var InstanceAdvancedSettings Advanced node setting, which overrides the InstanceAdvancedSettings item set at the cluster level (currently valid for the ExtraArgs node custom parameter only)
     */
    public $InstanceAdvancedSettingsOverride;

    /**
     * @var array When the custom PodCIDR mode is enabled for the cluster, you can specify the maximum number of pods per node.
     */
    public $DesiredPodNumbers;

    /**
     * @param string $NodeRole Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
     * @param ExistedInstancesPara $ExistedInstancesPara Reinstallation parameter of existing instances
     * @param InstanceAdvancedSettings $InstanceAdvancedSettingsOverride Advanced node setting, which overrides the InstanceAdvancedSettings item set at the cluster level (currently valid for the ExtraArgs node custom parameter only)
     * @param array $DesiredPodNumbers When the custom PodCIDR mode is enabled for the cluster, you can specify the maximum number of pods per node.
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
        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("ExistedInstancesPara",$param) and $param["ExistedInstancesPara"] !== null) {
            $this->ExistedInstancesPara = new ExistedInstancesPara();
            $this->ExistedInstancesPara->deserialize($param["ExistedInstancesPara"]);
        }

        if (array_key_exists("InstanceAdvancedSettingsOverride",$param) and $param["InstanceAdvancedSettingsOverride"] !== null) {
            $this->InstanceAdvancedSettingsOverride = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettingsOverride->deserialize($param["InstanceAdvancedSettingsOverride"]);
        }

        if (array_key_exists("DesiredPodNumbers",$param) and $param["DesiredPodNumbers"] !== null) {
            $this->DesiredPodNumbers = $param["DesiredPodNumbers"];
        }
    }
}
