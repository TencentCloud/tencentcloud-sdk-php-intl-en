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
 * CreateIPStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method string getStrategyName() Obtain Custom policy name.
 * @method void setStrategyName(string $StrategyName) Set Custom policy name.
 * @method string getStrategyType() Obtain Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
 * @method void setStrategyType(string $StrategyType) Set Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
 * @method string getStrategyData() Obtain Policy details. Multiple IPs are separated with \n.
 * @method void setStrategyData(string $StrategyData) Set Policy details. Multiple IPs are separated with \n.
 */
class CreateIPStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var string Custom policy name.
     */
    public $StrategyName;

    /**
     * @var string Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
     */
    public $StrategyType;

    /**
     * @var string Policy details. Multiple IPs are separated with \n.
     */
    public $StrategyData;

    /**
     * @param string $ServiceId Unique service ID.
     * @param string $StrategyName Custom policy name.
     * @param string $StrategyType Policy type. Valid values: WHITE (allowlist), BLACK (blocklist).
     * @param string $StrategyData Policy details. Multiple IPs are separated with \n.
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

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyData",$param) and $param["StrategyData"] !== null) {
            $this->StrategyData = $param["StrategyData"];
        }
    }
}
