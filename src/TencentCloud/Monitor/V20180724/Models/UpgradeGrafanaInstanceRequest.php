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
 * UpgradeGrafanaInstance request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-12345678”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-12345678”.
 * @method string getAlias() Obtain Version alias, such as v7.4.2.
 * @method void setAlias(string $Alias) Set Version alias, such as v7.4.2.
 */
class UpgradeGrafanaInstanceRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-12345678”.
     */
    public $InstanceId;

    /**
     * @var string Version alias, such as v7.4.2.
     */
    public $Alias;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-12345678”.
     * @param string $Alias Version alias, such as v7.4.2.
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
