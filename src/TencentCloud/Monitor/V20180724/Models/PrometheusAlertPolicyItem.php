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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TMP alerting rule instance
 *
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method array getRules() Obtain List of rules
 * @method void setRules(array $Rules) Set List of rules
 * @method string getId() Obtain Alerting rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set Alerting rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTemplateId() Obtain If the alert comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateId(string $TemplateId) Set If the alert comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PrometheusNotificationItem getNotification() Obtain Alert channel, which may be returned as null if used in a template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotification(PrometheusNotificationItem $Notification) Set Alert channel, which may be returned as null if used in a template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain If the alerting rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set If the alerting rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertPolicyItem extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var array List of rules
     */
    public $Rules;

    /**
     * @var string Alerting rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string If the alert comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateId;

    /**
     * @var PrometheusNotificationItem Alert channel, which may be returned as null if used in a template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Notification;

    /**
     * @var string Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string If the alerting rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @param string $Name Rule name
     * @param array $Rules List of rules
     * @param string $Id Alerting rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TemplateId If the alert comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PrometheusNotificationItem $Notification Alert channel, which may be returned as null if used in a template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId If the alerting rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = new PrometheusNotificationItem();
            $this->Notification->deserialize($param["Notification"]);
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
