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
 * BindIPStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of the IP policy to be bound.
 * @method void setServiceId(string $ServiceId) Set Unique service ID of the IP policy to be bound.
 * @method string getStrategyId() Obtain Unique ID of the IP policy to be bound.
 * @method void setStrategyId(string $StrategyId) Set Unique ID of the IP policy to be bound.
 * @method string getEnvironmentName() Obtain Environment to be bound to IP policy.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment to be bound to IP policy.
 * @method array getBindApiIds() Obtain List of APIs to be bound to IP policy.
 * @method void setBindApiIds(array $BindApiIds) Set List of APIs to be bound to IP policy.
 */
class BindIPStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of the IP policy to be bound.
     */
    public $ServiceId;

    /**
     * @var string Unique ID of the IP policy to be bound.
     */
    public $StrategyId;

    /**
     * @var string Environment to be bound to IP policy.
     */
    public $EnvironmentName;

    /**
     * @var array List of APIs to be bound to IP policy.
     */
    public $BindApiIds;

    /**
     * @param string $ServiceId Unique service ID of the IP policy to be bound.
     * @param string $StrategyId Unique ID of the IP policy to be bound.
     * @param string $EnvironmentName Environment to be bound to IP policy.
     * @param array $BindApiIds List of APIs to be bound to IP policy.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("BindApiIds",$param) and $param["BindApiIds"] !== null) {
            $this->BindApiIds = $param["BindApiIds"];
        }
    }
}
