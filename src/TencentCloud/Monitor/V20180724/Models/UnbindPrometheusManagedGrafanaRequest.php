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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindPrometheusManagedGrafana request structure.
 *
 * @method string getInstanceId() Obtain Prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set Prometheus instance ID
 * @method string getGrafanaId() Obtain Grafana instance ID
 * @method void setGrafanaId(string $GrafanaId) Set Grafana instance ID
 */
class UnbindPrometheusManagedGrafanaRequest extends AbstractModel
{
    /**
     * @var string Prometheus instance ID
     */
    public $InstanceId;

    /**
     * @var string Grafana instance ID
     */
    public $GrafanaId;

    /**
     * @param string $InstanceId Prometheus instance ID
     * @param string $GrafanaId Grafana instance ID
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

        if (array_key_exists("GrafanaId",$param) and $param["GrafanaId"] !== null) {
            $this->GrafanaId = $param["GrafanaId"];
        }
    }
}
