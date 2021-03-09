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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Email sending configuration.
 *
 * @method integer getSendMail() Obtain Whether to enable email sending. Valid values: 0 (No), 1 (Yes).
 * @method void setSendMail(integer $SendMail) Set Whether to enable email sending. Valid values: 0 (No), 1 (Yes).
 * @method array getRegion() Obtain Region configuration, such as "ap-guangzhou", "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region to which the current subscribed instance belongs.
 * @method void setRegion(array $Region) Set Region configuration, such as "ap-guangzhou", "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region to which the current subscribed instance belongs.
 * @method array getHealthStatus() Obtain Sending a report with the specified health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
 * @method void setHealthStatus(array $HealthStatus) Set Sending a report with the specified health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
 * @method array getContactPerson() Obtain Contact ID. Either `ContactGroup` or `ContactID` should be passed in.
 * @method void setContactPerson(array $ContactPerson) Set Contact ID. Either `ContactGroup` or `ContactID` should be passed in.
 * @method array getContactGroup() Obtain Contact group ID. Either `ContactGroup` or `ContactID` should be passed in.
 * @method void setContactGroup(array $ContactGroup) Set Contact group ID. Either `ContactGroup` or `ContactID` should be passed in.
 */
class MailConfiguration extends AbstractModel
{
    /**
     * @var integer Whether to enable email sending. Valid values: 0 (No), 1 (Yes).
     */
    public $SendMail;

    /**
     * @var array Region configuration, such as "ap-guangzhou", "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region to which the current subscribed instance belongs.
     */
    public $Region;

    /**
     * @var array Sending a report with the specified health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
     */
    public $HealthStatus;

    /**
     * @var array Contact ID. Either `ContactGroup` or `ContactID` should be passed in.
     */
    public $ContactPerson;

    /**
     * @var array Contact group ID. Either `ContactGroup` or `ContactID` should be passed in.
     */
    public $ContactGroup;

    /**
     * @param integer $SendMail Whether to enable email sending. Valid values: 0 (No), 1 (Yes).
     * @param array $Region Region configuration, such as "ap-guangzhou", "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region to which the current subscribed instance belongs.
     * @param array $HealthStatus Sending a report with the specified health level, such as "HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK".
     * @param array $ContactPerson Contact ID. Either `ContactGroup` or `ContactID` should be passed in.
     * @param array $ContactGroup Contact group ID. Either `ContactGroup` or `ContactID` should be passed in.
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
        if (array_key_exists("SendMail",$param) and $param["SendMail"] !== null) {
            $this->SendMail = $param["SendMail"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ContactPerson",$param) and $param["ContactPerson"] !== null) {
            $this->ContactPerson = $param["ContactPerson"];
        }

        if (array_key_exists("ContactGroup",$param) and $param["ContactGroup"] !== null) {
            $this->ContactGroup = $param["ContactGroup"];
        }
    }
}
