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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Associated cloud resources
 *
 * @method string getResourceType() Obtain Supported types: CLB, CDN, WAF, LIVE, VOD, DDOS, TKE, APIGATEWAY, TCB, and TEO (EDGEONE).
 * @method void setResourceType(string $ResourceType) Set Supported types: CLB, CDN, WAF, LIVE, VOD, DDOS, TKE, APIGATEWAY, TCB, and TEO (EDGEONE).
 * @method array getBindResourceRegionResult() Obtain The region of associated cloud resources.
 * @method void setBindResourceRegionResult(array $BindResourceRegionResult) Set The region of associated cloud resources.
 */
class BindResourceResult extends AbstractModel
{
    /**
     * @var string Supported types: CLB, CDN, WAF, LIVE, VOD, DDOS, TKE, APIGATEWAY, TCB, and TEO (EDGEONE).
     */
    public $ResourceType;

    /**
     * @var array The region of associated cloud resources.
     */
    public $BindResourceRegionResult;

    /**
     * @param string $ResourceType Supported types: CLB, CDN, WAF, LIVE, VOD, DDOS, TKE, APIGATEWAY, TCB, and TEO (EDGEONE).
     * @param array $BindResourceRegionResult The region of associated cloud resources.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("BindResourceRegionResult",$param) and $param["BindResourceRegionResult"] !== null) {
            $this->BindResourceRegionResult = [];
            foreach ($param["BindResourceRegionResult"] as $key => $value){
                $obj = new BindResourceRegionResult();
                $obj->deserialize($value);
                array_push($this->BindResourceRegionResult, $obj);
            }
        }
    }
}
