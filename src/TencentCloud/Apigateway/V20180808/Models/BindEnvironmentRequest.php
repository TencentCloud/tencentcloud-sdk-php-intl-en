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
 * BindEnvironment request structure.
 *
 * @method array getUsagePlanIds() Obtain List of unique IDs of the usage plans to be bound.
 * @method void setUsagePlanIds(array $UsagePlanIds) Set List of unique IDs of the usage plans to be bound.
 * @method string getBindType() Obtain Binding type. Valid values: API, SERVICE. Default value: SERVICE.
 * @method void setBindType(string $BindType) Set Binding type. Valid values: API, SERVICE. Default value: SERVICE.
 * @method string getEnvironment() Obtain Environment to be bound.
 * @method void setEnvironment(string $Environment) Set Environment to be bound.
 * @method string getServiceId() Obtain Unique ID of the service to be bound.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be bound.
 * @method array getApiIds() Obtain Unique API ID array, which is required if `bindType` is `API`.
 * @method void setApiIds(array $ApiIds) Set Unique API ID array, which is required if `bindType` is `API`.
 */
class BindEnvironmentRequest extends AbstractModel
{
    /**
     * @var array List of unique IDs of the usage plans to be bound.
     */
    public $UsagePlanIds;

    /**
     * @var string Binding type. Valid values: API, SERVICE. Default value: SERVICE.
     */
    public $BindType;

    /**
     * @var string Environment to be bound.
     */
    public $Environment;

    /**
     * @var string Unique ID of the service to be bound.
     */
    public $ServiceId;

    /**
     * @var array Unique API ID array, which is required if `bindType` is `API`.
     */
    public $ApiIds;

    /**
     * @param array $UsagePlanIds List of unique IDs of the usage plans to be bound.
     * @param string $BindType Binding type. Valid values: API, SERVICE. Default value: SERVICE.
     * @param string $Environment Environment to be bound.
     * @param string $ServiceId Unique ID of the service to be bound.
     * @param array $ApiIds Unique API ID array, which is required if `bindType` is `API`.
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
        if (array_key_exists("UsagePlanIds",$param) and $param["UsagePlanIds"] !== null) {
            $this->UsagePlanIds = $param["UsagePlanIds"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
