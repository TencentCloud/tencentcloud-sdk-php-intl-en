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
 * Grafana plugin
 *
 * @method string getPluginId() Obtain Grafana plugin ID
 * @method void setPluginId(string $PluginId) Set Grafana plugin ID
 * @method string getVersion() Obtain Grafana plugin version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Grafana plugin version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GrafanaPlugin extends AbstractModel
{
    /**
     * @var string Grafana plugin ID
     */
    public $PluginId;

    /**
     * @var string Grafana plugin version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @param string $PluginId Grafana plugin ID
     * @param string $Version Grafana plugin version
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
