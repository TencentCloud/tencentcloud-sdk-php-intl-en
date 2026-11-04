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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerWebhookConfig
 *
 * @method AppTriggerWebhookParamSchemaConfig getParamSchemaConfig() Obtain <p>Trigger webhook parameter configuration</p>
 * @method void setParamSchemaConfig(AppTriggerWebhookParamSchemaConfig $ParamSchemaConfig) Set <p>Trigger webhook parameter configuration</p>
 * @method string getWebhookKey() Obtain <p>key of the webhook</p>
 * @method void setWebhookKey(string $WebhookKey) Set <p>key of the webhook</p>
 * @method string getWebhookToken() Obtain <p>webhook key</p>
 * @method void setWebhookToken(string $WebhookToken) Set <p>webhook key</p>
 * @method string getWebhookUrl() Obtain <p>webhook domain name or IP address</p>
 * @method void setWebhookUrl(string $WebhookUrl) Set <p>webhook domain name or IP address</p>
 */
class AppTriggerWebhookConfig extends AbstractModel
{
    /**
     * @var AppTriggerWebhookParamSchemaConfig <p>Trigger webhook parameter configuration</p>
     */
    public $ParamSchemaConfig;

    /**
     * @var string <p>key of the webhook</p>
     */
    public $WebhookKey;

    /**
     * @var string <p>webhook key</p>
     */
    public $WebhookToken;

    /**
     * @var string <p>webhook domain name or IP address</p>
     */
    public $WebhookUrl;

    /**
     * @param AppTriggerWebhookParamSchemaConfig $ParamSchemaConfig <p>Trigger webhook parameter configuration</p>
     * @param string $WebhookKey <p>key of the webhook</p>
     * @param string $WebhookToken <p>webhook key</p>
     * @param string $WebhookUrl <p>webhook domain name or IP address</p>
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
        if (array_key_exists("ParamSchemaConfig",$param) and $param["ParamSchemaConfig"] !== null) {
            $this->ParamSchemaConfig = new AppTriggerWebhookParamSchemaConfig();
            $this->ParamSchemaConfig->deserialize($param["ParamSchemaConfig"]);
        }

        if (array_key_exists("WebhookKey",$param) and $param["WebhookKey"] !== null) {
            $this->WebhookKey = $param["WebhookKey"];
        }

        if (array_key_exists("WebhookToken",$param) and $param["WebhookToken"] !== null) {
            $this->WebhookToken = $param["WebhookToken"];
        }

        if (array_key_exists("WebhookUrl",$param) and $param["WebhookUrl"] !== null) {
            $this->WebhookUrl = $param["WebhookUrl"];
        }
    }
}
