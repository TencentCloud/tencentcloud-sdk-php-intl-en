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
 * UnBindIPStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique ID of the service to be unbound.
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service to be unbound.
 * @method string getStrategyId() Obtain Unique ID of the IP policy to be unbound.
 * @method void setStrategyId(string $StrategyId) Set Unique ID of the IP policy to be unbound.
 * @method string getEnvironmentName() Obtain Environment to be unbound.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment to be unbound.
 * @method array getUnBindApiIds() Obtain List of APIs to be unbound.
 * @method void setUnBindApiIds(array $UnBindApiIds) Set List of APIs to be unbound.
 */
class UnBindIPStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the service to be unbound.
     */
    public $ServiceId;

    /**
     * @var string Unique ID of the IP policy to be unbound.
     */
    public $StrategyId;

    /**
     * @var string Environment to be unbound.
     */
    public $EnvironmentName;

    /**
     * @var array List of APIs to be unbound.
     */
    public $UnBindApiIds;

    /**
     * @param string $ServiceId Unique ID of the service to be unbound.
     * @param string $StrategyId Unique ID of the IP policy to be unbound.
     * @param string $EnvironmentName Environment to be unbound.
     * @param array $UnBindApiIds List of APIs to be unbound.
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

        if (array_key_exists("UnBindApiIds",$param) and $param["UnBindApiIds"] !== null) {
            $this->UnBindApiIds = $param["UnBindApiIds"];
        }
    }
}
