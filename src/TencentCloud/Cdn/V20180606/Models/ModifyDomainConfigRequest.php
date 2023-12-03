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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainConfig request structure.
 *
 * @method string getDomain() Obtain The domain name.
 * @method void setDomain(string $Domain) Set The domain name.
 * @method string getRoute() Obtain Name of the configuration parameter.
 * @method void setRoute(string $Route) Set Name of the configuration parameter.
 * @method string getValue() Obtain Value of the configuration parameter. This field is serialized to a JSON string {key:value}, where **key** is fixed to `update`.
 * @method void setValue(string $Value) Set Value of the configuration parameter. This field is serialized to a JSON string {key:value}, where **key** is fixed to `update`.
 */
class ModifyDomainConfigRequest extends AbstractModel
{
    /**
     * @var string The domain name.
     */
    public $Domain;

    /**
     * @var string Name of the configuration parameter.
     */
    public $Route;

    /**
     * @var string Value of the configuration parameter. This field is serialized to a JSON string {key:value}, where **key** is fixed to `update`.
     */
    public $Value;

    /**
     * @param string $Domain The domain name.
     * @param string $Route Name of the configuration parameter.
     * @param string $Value Value of the configuration parameter. This field is serialized to a JSON string {key:value}, where **key** is fixed to `update`.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Route",$param) and $param["Route"] !== null) {
            $this->Route = $param["Route"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
