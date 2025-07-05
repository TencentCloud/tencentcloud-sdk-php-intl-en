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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIPStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of the IP policy to be deleted.
 * @method void setServiceId(string $ServiceId) Set Unique service ID of the IP policy to be deleted.
 * @method string getStrategyId() Obtain Unique ID of the IP policy to be deleted.
 * @method void setStrategyId(string $StrategyId) Set Unique ID of the IP policy to be deleted.
 */
class DeleteIPStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of the IP policy to be deleted.
     */
    public $ServiceId;

    /**
     * @var string Unique ID of the IP policy to be deleted.
     */
    public $StrategyId;

    /**
     * @param string $ServiceId Unique service ID of the IP policy to be deleted.
     * @param string $StrategyId Unique ID of the IP policy to be deleted.
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
    }
}
