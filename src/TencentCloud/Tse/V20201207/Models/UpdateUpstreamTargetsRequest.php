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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUpstreamTargets request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID
 * @method string getName() Obtain Service name or ID
 * @method void setName(string $Name) Set Service name or ID
 * @method array getTargets() Obtain Instance list
 * @method void setTargets(array $Targets) Set Instance list
 */
class UpdateUpstreamTargetsRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayId;

    /**
     * @var string Service name or ID
     */
    public $Name;

    /**
     * @var array Instance list
     */
    public $Targets;

    /**
     * @param string $GatewayId Gateway instance ID
     * @param string $Name Service name or ID
     * @param array $Targets Instance list
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new KongTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
