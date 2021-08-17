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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachPlugin request structure.
 *
 * @method string getPluginId() Obtain ID of the plugin to be unbound
 * @method void setPluginId(string $PluginId) Set ID of the plugin to be unbound
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method string getEnvironmentName() Obtain API environment
 * @method void setEnvironmentName(string $EnvironmentName) Set API environment
 * @method string getApiId() Obtain ID of the API to unbind from the plugin
 * @method void setApiId(string $ApiId) Set ID of the API to unbind from the plugin
 */
class DetachPluginRequest extends AbstractModel
{
    /**
     * @var string ID of the plugin to be unbound
     */
    public $PluginId;

    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var string API environment
     */
    public $EnvironmentName;

    /**
     * @var string ID of the API to unbind from the plugin
     */
    public $ApiId;

    /**
     * @param string $PluginId ID of the plugin to be unbound
     * @param string $ServiceId Service ID
     * @param string $EnvironmentName API environment
     * @param string $ApiId ID of the API to unbind from the plugin
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }
    }
}
