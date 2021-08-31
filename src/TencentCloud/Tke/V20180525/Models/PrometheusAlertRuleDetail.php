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
 * The alarm configuration
 *
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method array getRules() Obtain Rule list
 * @method void setRules(array $Rules) Set Rule list
 * @method string getUpdatedAt() Obtain Last modification time
 * @method void setUpdatedAt(string $UpdatedAt) Set Last modification time
 * @method PrometheusNotification getNotification() Obtain Alarm delivery methods
 * @method void setNotification(PrometheusNotification $Notification) Set Alarm delivery methods
 * @method string getId() Obtain Alarm rule ID
 * @method void setId(string $Id) Set Alarm rule ID
 * @method string getTemplateId() Obtain If the alarm is delivered via a template, the TemplateId is the template ID.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setTemplateId(string $TemplateId) Set If the alarm is delivered via a template, the TemplateId is the template ID.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getInterval() Obtain Alarm interval
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setInterval(string $Interval) Set Alarm interval
Note: this field may return `null`, indicating that no valid value can be obtained.
 */
class PrometheusAlertRuleDetail extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var array Rule list
     */
    public $Rules;

    /**
     * @var string Last modification time
     */
    public $UpdatedAt;

    /**
     * @var PrometheusNotification Alarm delivery methods
     */
    public $Notification;

    /**
     * @var string Alarm rule ID
     */
    public $Id;

    /**
     * @var string If the alarm is delivered via a template, the TemplateId is the template ID.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $TemplateId;

    /**
     * @var string Alarm interval
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Interval;

    /**
     * @param string $Name Rule name
     * @param array $Rules Rule list
     * @param string $UpdatedAt Last modification time
     * @param PrometheusNotification $Notification Alarm delivery methods
     * @param string $Id Alarm rule ID
     * @param string $TemplateId If the alarm is delivered via a template, the TemplateId is the template ID.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $Interval Alarm interval
Note: this field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = new PrometheusNotification();
            $this->Notification->deserialize($param["Notification"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
