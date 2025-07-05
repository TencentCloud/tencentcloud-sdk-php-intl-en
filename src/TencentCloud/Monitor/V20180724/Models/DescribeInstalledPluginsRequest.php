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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstalledPlugins request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-kleu3gt0”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-kleu3gt0”.
 * @method string getPluginId() Obtain Filter by plugin ID such as “grafana-piechart-panel”. You can view the IDs of installed plugins through the `DescribeInstalledPlugins` API.
 * @method void setPluginId(string $PluginId) Set Filter by plugin ID such as “grafana-piechart-panel”. You can view the IDs of installed plugins through the `DescribeInstalledPlugins` API.
 */
class DescribeInstalledPluginsRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-kleu3gt0”.
     */
    public $InstanceId;

    /**
     * @var string Filter by plugin ID such as “grafana-piechart-panel”. You can view the IDs of installed plugins through the `DescribeInstalledPlugins` API.
     */
    public $PluginId;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-kleu3gt0”.
     * @param string $PluginId Filter by plugin ID such as “grafana-piechart-panel”. You can view the IDs of installed plugins through the `DescribeInstalledPlugins` API.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }
    }
}
