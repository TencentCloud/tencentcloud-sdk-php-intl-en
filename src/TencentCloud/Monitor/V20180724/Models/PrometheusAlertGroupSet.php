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
 * Prometheus alert rule groups information.
 *
 * @method string getGroupId() Obtain Alert group ID. must match the regular expression `alert-[a-z0-9]{8}`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set Alert group ID. must match the regular expression `alert-[a-z0-9]{8}`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupName() Obtain Alert group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set Alert group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAMPReceivers() Obtain Alert template ID of tencent cloud observability platform (tcop). returns the converted notice ID of the Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAMPReceivers(array $AMPReceivers) Set Alert template ID of tencent cloud observability platform (tcop). returns the converted notice ID of the Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PrometheusAlertCustomReceiver getCustomReceiver() Obtain Custom Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomReceiver(PrometheusAlertCustomReceiver $CustomReceiver) Set Custom Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRepeatInterval() Obtain Alert notification interval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepeatInterval(string $RepeatInterval) Set Alert notification interval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTemplateId() Obtain If the Alert group is created via template, returns the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateId(string $TemplateId) Set If the Alert group is created via template, returns the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRules() Obtain Alert rule details within the group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Alert rule details within the group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Group creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Group creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Group update time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Group update time

Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertGroupSet extends AbstractModel
{
    /**
     * @var string Alert group ID. must match the regular expression `alert-[a-z0-9]{8}`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var string Alert group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var array Alert template ID of tencent cloud observability platform (tcop). returns the converted notice ID of the Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AMPReceivers;

    /**
     * @var PrometheusAlertCustomReceiver Custom Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomReceiver;

    /**
     * @var string Alert notification interval.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RepeatInterval;

    /**
     * @var string If the Alert group is created via template, returns the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateId;

    /**
     * @var array Alert rule details within the group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var string Group creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Group update time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @param string $GroupId Alert group ID. must match the regular expression `alert-[a-z0-9]{8}`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupName Alert group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AMPReceivers Alert template ID of tencent cloud observability platform (tcop). returns the converted notice ID of the Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PrometheusAlertCustomReceiver $CustomReceiver Custom Alert template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RepeatInterval Alert notification interval.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TemplateId If the Alert group is created via template, returns the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Rules Alert rule details within the group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Group creation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Group update time

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertGroupRuleSet();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
