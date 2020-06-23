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
 * ModifyIPStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of the policy to be modified.
 * @method void setServiceId(string $ServiceId) Set Unique service ID of the policy to be modified.
 * @method string getStrategyId() Obtain Unique ID of the policy to be modified.
 * @method void setStrategyId(string $StrategyId) Set Unique ID of the policy to be modified.
 * @method string getStrategyData() Obtain Details of the policy to be modified.
 * @method void setStrategyData(string $StrategyData) Set Details of the policy to be modified.
 */
class ModifyIPStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of the policy to be modified.
     */
    public $ServiceId;

    /**
     * @var string Unique ID of the policy to be modified.
     */
    public $StrategyId;

    /**
     * @var string Details of the policy to be modified.
     */
    public $StrategyData;

    /**
     * @param string $ServiceId Unique service ID of the policy to be modified.
     * @param string $StrategyId Unique ID of the policy to be modified.
     * @param string $StrategyData Details of the policy to be modified.
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

        if (array_key_exists("StrategyData",$param) and $param["StrategyData"] !== null) {
            $this->StrategyData = $param["StrategyData"];
        }
    }
}
