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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheusAlertRule request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method PrometheusAlertRuleDetail getAlertRule() Obtain Alarm configurations
 * @method void setAlertRule(PrometheusAlertRuleDetail $AlertRule) Set Alarm configurations
 */
class CreatePrometheusAlertRuleRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var PrometheusAlertRuleDetail Alarm configurations
     */
    public $AlertRule;

    /**
     * @param string $InstanceId Instance ID
     * @param PrometheusAlertRuleDetail $AlertRule Alarm configurations
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AlertRule",$param) and $param["AlertRule"] !== null) {
            $this->AlertRule = new PrometheusAlertRuleDetail();
            $this->AlertRule->deserialize($param["AlertRule"]);
        }
    }
}
