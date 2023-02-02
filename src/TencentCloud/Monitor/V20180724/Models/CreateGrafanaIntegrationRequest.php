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
 * CreateGrafanaIntegration request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-abcdefgh”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-abcdefgh”.
 * @method string getKind() Obtain Integration type, such as “tencent-cloud-prometheus”. You can view it by going to the instance details page and clicking **Tencent Cloud Service Integration** > **Integration List**.
 * @method void setKind(string $Kind) Set Integration type, such as “tencent-cloud-prometheus”. You can view it by going to the instance details page and clicking **Tencent Cloud Service Integration** > **Integration List**.
 * @method string getContent() Obtain Integration configuration
 * @method void setContent(string $Content) Set Integration configuration
 */
class CreateGrafanaIntegrationRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-abcdefgh”.
     */
    public $InstanceId;

    /**
     * @var string Integration type, such as “tencent-cloud-prometheus”. You can view it by going to the instance details page and clicking **Tencent Cloud Service Integration** > **Integration List**.
     */
    public $Kind;

    /**
     * @var string Integration configuration
     */
    public $Content;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-abcdefgh”.
     * @param string $Kind Integration type, such as “tencent-cloud-prometheus”. You can view it by going to the instance details page and clicking **Tencent Cloud Service Integration** > **Integration List**.
     * @param string $Content Integration configuration
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
