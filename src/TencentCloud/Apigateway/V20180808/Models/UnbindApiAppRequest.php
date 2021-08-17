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
 * UnbindApiApp request structure.
 *
 * @method string getApiAppId() Obtain Unique ID of the application to be bound.
 * @method void setApiAppId(string $ApiAppId) Set Unique ID of the application to be bound.
 * @method string getEnvironment() Obtain Environment to be bound.
 * @method void setEnvironment(string $Environment) Set Environment to be bound.
 * @method string getServiceId() Obtain Unique ID of the service to be bound.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be bound.
 * @method string getApiId() Obtain Unique ID of the API to be bound.
 * @method void setApiId(string $ApiId) Set Unique ID of the API to be bound.
 */
class UnbindApiAppRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the application to be bound.
     */
    public $ApiAppId;

    /**
     * @var string Environment to be bound.
     */
    public $Environment;

    /**
     * @var string Unique ID of the service to be bound.
     */
    public $ServiceId;

    /**
     * @var string Unique ID of the API to be bound.
     */
    public $ApiId;

    /**
     * @param string $ApiAppId Unique ID of the application to be bound.
     * @param string $Environment Environment to be bound.
     * @param string $ServiceId Unique ID of the service to be bound.
     * @param string $ApiId Unique ID of the API to be bound.
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
        if (array_key_exists("ApiAppId",$param) and $param["ApiAppId"] !== null) {
            $this->ApiAppId = $param["ApiAppId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }
    }
}
