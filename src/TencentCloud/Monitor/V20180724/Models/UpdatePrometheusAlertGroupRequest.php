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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePrometheusAlertGroup request structure.
 *
 * @method string getInstanceId() Obtain prometheus instance ID.
 * @method void setInstanceId(string $InstanceId) Set prometheus instance ID.
 * @method string getGroupId() Obtain Alert group ID, such as alert-xxxx.
 * @method void setGroupId(string $GroupId) Set Alert group ID, such as alert-xxxx.
 * @method string getGroupName() Obtain Alert group name. not allowed to have the same name as other alert groups.
 * @method void setGroupName(string $GroupName) Set Alert group name. not allowed to have the same name as other alert groups.
 * @method integer getGroupState() Obtain Alert group status.
2 - enable.
3 - disabled.
Specifies the Alert rule status under the `Rules` field to be overwritten when not empty.
 * @method void setGroupState(integer $GroupState) Set Alert group status.
2 - enable.
3 - disabled.
Specifies the Alert rule status under the `Rules` field to be overwritten when not empty.
 * @method array getAMPReceivers() Obtain Alert notification template ID list of tencent cloud observability platform, such as Consumer-xxxx or notice-xxxx.
 * @method void setAMPReceivers(array $AMPReceivers) Set Alert notification template ID list of tencent cloud observability platform, such as Consumer-xxxx or notice-xxxx.
 * @method PrometheusAlertCustomReceiver getCustomReceiver() Obtain Specifies the custom Alert notification template.
 * @method void setCustomReceiver(PrometheusAlertCustomReceiver $CustomReceiver) Set Specifies the custom Alert notification template.
 * @method string getRepeatInterval() Obtain Alert notification cycle (convergence time). defaults to 1h if left empty.
 * @method void setRepeatInterval(string $RepeatInterval) Set Alert notification cycle (convergence time). defaults to 1h if left empty.
 * @method array getRules() Obtain Specifies the Alert rule list to be created.
 * @method void setRules(array $Rules) Set Specifies the Alert rule list to be created.
 */
class UpdatePrometheusAlertGroupRequest extends AbstractModel
{
    /**
     * @var string prometheus instance ID.
     */
    public $InstanceId;

    /**
     * @var string Alert group ID, such as alert-xxxx.
     */
    public $GroupId;

    /**
     * @var string Alert group name. not allowed to have the same name as other alert groups.
     */
    public $GroupName;

    /**
     * @var integer Alert group status.
2 - enable.
3 - disabled.
Specifies the Alert rule status under the `Rules` field to be overwritten when not empty.
     */
    public $GroupState;

    /**
     * @var array Alert notification template ID list of tencent cloud observability platform, such as Consumer-xxxx or notice-xxxx.
     */
    public $AMPReceivers;

    /**
     * @var PrometheusAlertCustomReceiver Specifies the custom Alert notification template.
     */
    public $CustomReceiver;

    /**
     * @var string Alert notification cycle (convergence time). defaults to 1h if left empty.
     */
    public $RepeatInterval;

    /**
     * @var array Specifies the Alert rule list to be created.
     */
    public $Rules;

    /**
     * @param string $InstanceId prometheus instance ID.
     * @param string $GroupId Alert group ID, such as alert-xxxx.
     * @param string $GroupName Alert group name. not allowed to have the same name as other alert groups.
     * @param integer $GroupState Alert group status.
2 - enable.
3 - disabled.
Specifies the Alert rule status under the `Rules` field to be overwritten when not empty.
     * @param array $AMPReceivers Alert notification template ID list of tencent cloud observability platform, such as Consumer-xxxx or notice-xxxx.
     * @param PrometheusAlertCustomReceiver $CustomReceiver Specifies the custom Alert notification template.
     * @param string $RepeatInterval Alert notification cycle (convergence time). defaults to 1h if left empty.
     * @param array $Rules Specifies the Alert rule list to be created.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupState",$param) and $param["GroupState"] !== null) {
            $this->GroupState = $param["GroupState"];
        }

        if (array_key_exists("AMPReceivers",$param) and $param["AMPReceivers"] !== null) {
            $this->AMPReceivers = $param["AMPReceivers"];
        }

        if (array_key_exists("CustomReceiver",$param) and $param["CustomReceiver"] !== null) {
            $this->CustomReceiver = new PrometheusAlertCustomReceiver();
            $this->CustomReceiver->deserialize($param["CustomReceiver"]);
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertGroupRuleSet();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
