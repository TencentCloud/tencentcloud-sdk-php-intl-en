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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationProxyRules request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getProxyId() Obtain Proxy ID
 * @method void setProxyId(string $ProxyId) Set Proxy ID
 * @method array getRule() Obtain Rule list
 * @method void setRule(array $Rule) Set Rule list
 */
class CreateApplicationProxyRulesRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Proxy ID
     */
    public $ProxyId;

    /**
     * @var array Rule list
     */
    public $Rule;

    /**
     * @param string $ZoneId Site ID
     * @param string $ProxyId Proxy ID
     * @param array $Rule Rule list
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }
    }
}
