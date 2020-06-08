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
 * ModifyApiEnvironmentStrategy request structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method integer getStrategy() Obtain Throttling value.
 * @method void setStrategy(integer $Strategy) Set Throttling value.
 * @method string getEnvironmentName() Obtain Environment name.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name.
 * @method array getApiIds() Obtain API list.
 * @method void setApiIds(array $ApiIds) Set API list.
 */
class ModifyApiEnvironmentStrategyRequest extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var integer Throttling value.
     */
    public $Strategy;

    /**
     * @var string Environment name.
     */
    public $EnvironmentName;

    /**
     * @var array API list.
     */
    public $ApiIds;

    /**
     * @param string $ServiceId Unique service ID.
     * @param integer $Strategy Throttling value.
     * @param string $EnvironmentName Environment name.
     * @param array $ApiIds API list.
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

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
