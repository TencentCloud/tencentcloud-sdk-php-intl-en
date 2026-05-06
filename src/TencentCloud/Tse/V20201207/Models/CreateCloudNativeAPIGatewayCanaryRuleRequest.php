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
 * CreateCloudNativeAPIGatewayCanaryRule request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method CloudNativeAPIGatewayCanaryRule getCanaryRule() Obtain Grayscale rule configuration
 * @method void setCanaryRule(CloudNativeAPIGatewayCanaryRule $CanaryRule) Set Grayscale rule configuration
 * @method array getCanaryRuleList() Obtain Grayscale rule configuration list. If configured, this parameter takes precedence and the CanaryRule parameter is ignored.
 * @method void setCanaryRuleList(array $CanaryRuleList) Set Grayscale rule configuration list. If configured, this parameter takes precedence and the CanaryRule parameter is ignored.
 */
class CreateCloudNativeAPIGatewayCanaryRuleRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var CloudNativeAPIGatewayCanaryRule Grayscale rule configuration
     */
    public $CanaryRule;

    /**
     * @var array Grayscale rule configuration list. If configured, this parameter takes precedence and the CanaryRule parameter is ignored.
     */
    public $CanaryRuleList;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $ServiceId Service ID
     * @param CloudNativeAPIGatewayCanaryRule $CanaryRule Grayscale rule configuration
     * @param array $CanaryRuleList Grayscale rule configuration list. If configured, this parameter takes precedence and the CanaryRule parameter is ignored.
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("CanaryRule",$param) and $param["CanaryRule"] !== null) {
            $this->CanaryRule = new CloudNativeAPIGatewayCanaryRule();
            $this->CanaryRule->deserialize($param["CanaryRule"]);
        }

        if (array_key_exists("CanaryRuleList",$param) and $param["CanaryRuleList"] !== null) {
            $this->CanaryRuleList = [];
            foreach ($param["CanaryRuleList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayCanaryRule();
                $obj->deserialize($value);
                array_push($this->CanaryRuleList, $obj);
            }
        }
    }
}
