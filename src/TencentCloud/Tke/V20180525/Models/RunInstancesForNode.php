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
 * Node configuration parameters of different roles
 *
 * @method string getNodeRole() Obtain Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
 * @method void setNodeRole(string $NodeRole) Set Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
 * @method array getRunInstancesPara() Obtain Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1). Pass any parameter other than common parameters. ImageId will be replaced with the image corresponding to the TKE cluster operating system.
 * @method void setRunInstancesPara(array $RunInstancesPara) Set Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1). Pass any parameter other than common parameters. ImageId will be replaced with the image corresponding to the TKE cluster operating system.
 * @method array getInstanceAdvancedSettingsOverrides() Obtain An advanced node setting. This parameter overrides the InstanceAdvancedSettings item set at the cluster level and corresponds to RunInstancesPara in a one-to-one sequential manner (currently valid for the ExtraArgs node custom parameter only).
 * @method void setInstanceAdvancedSettingsOverrides(array $InstanceAdvancedSettingsOverrides) Set An advanced node setting. This parameter overrides the InstanceAdvancedSettings item set at the cluster level and corresponds to RunInstancesPara in a one-to-one sequential manner (currently valid for the ExtraArgs node custom parameter only).
 */
class RunInstancesForNode extends AbstractModel
{
    /**
     * @var string Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
     */
    public $NodeRole;

    /**
     * @var array Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1). Pass any parameter other than common parameters. ImageId will be replaced with the image corresponding to the TKE cluster operating system.
     */
    public $RunInstancesPara;

    /**
     * @var array An advanced node setting. This parameter overrides the InstanceAdvancedSettings item set at the cluster level and corresponds to RunInstancesPara in a one-to-one sequential manner (currently valid for the ExtraArgs node custom parameter only).
     */
    public $InstanceAdvancedSettingsOverrides;

    /**
     * @param string $NodeRole Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
     * @param array $RunInstancesPara Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the API for [creating a CVM instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1). Pass any parameter other than common parameters. ImageId will be replaced with the image corresponding to the TKE cluster operating system.
     * @param array $InstanceAdvancedSettingsOverrides An advanced node setting. This parameter overrides the InstanceAdvancedSettings item set at the cluster level and corresponds to RunInstancesPara in a one-to-one sequential manner (currently valid for the ExtraArgs node custom parameter only).
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

        if (array_key_exists("RunInstancesPara",$param) and $param["RunInstancesPara"] !== null) {
            $this->RunInstancesPara = $param["RunInstancesPara"];
        }

        if (array_key_exists("InstanceAdvancedSettingsOverrides",$param) and $param["InstanceAdvancedSettingsOverrides"] !== null) {
            $this->InstanceAdvancedSettingsOverrides = [];
            foreach ($param["InstanceAdvancedSettingsOverrides"] as $key => $value){
                $obj = new InstanceAdvancedSettings();
                $obj->deserialize($value);
                array_push($this->InstanceAdvancedSettingsOverrides, $obj);
            }
        }
    }
}
