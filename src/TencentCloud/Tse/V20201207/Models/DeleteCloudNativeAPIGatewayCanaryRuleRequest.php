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
 * DeleteCloudNativeAPIGatewayCanaryRule request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method array getPriorityList() Obtain Priority list. If configured, this parameter takes precedence and the Priority parameter is ignored.
 * @method void setPriorityList(array $PriorityList) Set Priority list. If configured, this parameter takes precedence and the Priority parameter is ignored.
 */
class DeleteCloudNativeAPIGatewayCanaryRuleRequest extends AbstractModel
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
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var array Priority list. If configured, this parameter takes precedence and the Priority parameter is ignored.
     */
    public $PriorityList;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $ServiceId Service ID
     * @param integer $Priority Priority
     * @param array $PriorityList Priority list. If configured, this parameter takes precedence and the Priority parameter is ignored.
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("PriorityList",$param) and $param["PriorityList"] !== null) {
            $this->PriorityList = $param["PriorityList"];
        }
    }
}
