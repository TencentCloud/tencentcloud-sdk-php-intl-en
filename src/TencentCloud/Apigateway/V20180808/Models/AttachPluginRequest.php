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
 * AttachPlugin request structure.
 *
 * @method string getPluginId() Obtain ID of the bound API gateway plugin.
 * @method void setPluginId(string $PluginId) Set ID of the bound API gateway plugin.
 * @method string getServiceId() Obtain ID of the service to be operated.
 * @method void setServiceId(string $ServiceId) Set ID of the service to be operated.
 * @method string getEnvironmentName() Obtain Environment for operating the API.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment for operating the API.
 * @method array getApiIds() Obtain List of APIs to be bound.
 * @method void setApiIds(array $ApiIds) Set List of APIs to be bound.
 */
class AttachPluginRequest extends AbstractModel
{
    /**
     * @var string ID of the bound API gateway plugin.
     */
    public $PluginId;

    /**
     * @var string ID of the service to be operated.
     */
    public $ServiceId;

    /**
     * @var string Environment for operating the API.
     */
    public $EnvironmentName;

    /**
     * @var array List of APIs to be bound.
     */
    public $ApiIds;

    /**
     * @param string $PluginId ID of the bound API gateway plugin.
     * @param string $ServiceId ID of the service to be operated.
     * @param string $EnvironmentName Environment for operating the API.
     * @param array $ApiIds List of APIs to be bound.
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

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
