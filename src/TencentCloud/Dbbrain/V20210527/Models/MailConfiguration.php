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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Email sending configuration
 *
 * @method integer getSendMail() Obtain Whether to enable email sending. Valid values: `0` (no), `1` (yes).
 * @method void setSendMail(integer $SendMail) Set Whether to enable email sending. Valid values: `0` (no), `1` (yes).
 * @method array getRegion() Obtain Region configuration, such as "ap-guangzhou" and "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region where the current subscribed instance resides.
 * @method void setRegion(array $Region) Set Region configuration, such as "ap-guangzhou" and "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region where the current subscribed instance resides.
 * @method array getHealthStatus() Obtain Sends a report with the specified health level, such as `HEALTH`, `SUB_HEALTH`, `RISK`, and `HIGH_RISK`.
 * @method void setHealthStatus(array $HealthStatus) Set Sends a report with the specified health level, such as `HEALTH`, `SUB_HEALTH`, `RISK`, and `HIGH_RISK`.
 * @method array getContactPerson() Obtain Recipient ID. Either `ContactPerson` or `ContactGroup` should be passed in.
 * @method void setContactPerson(array $ContactPerson) Set Recipient ID. Either `ContactPerson` or `ContactGroup` should be passed in.
 * @method array getContactGroup() Obtain Recipient group ID. Either `ContactPerson` or `ContactGroup` should be passed in.
 * @method void setContactGroup(array $ContactGroup) Set Recipient group ID. Either `ContactPerson` or `ContactGroup` should be passed in.
 */
class MailConfiguration extends AbstractModel
{
    /**
     * @var integer Whether to enable email sending. Valid values: `0` (no), `1` (yes).
     */
    public $SendMail;

    /**
     * @var array Region configuration, such as "ap-guangzhou" and "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region where the current subscribed instance resides.
     */
    public $Region;

    /**
     * @var array Sends a report with the specified health level, such as `HEALTH`, `SUB_HEALTH`, `RISK`, and `HIGH_RISK`.
     */
    public $HealthStatus;

    /**
     * @var array Recipient ID. Either `ContactPerson` or `ContactGroup` should be passed in.
     */
    public $ContactPerson;

    /**
     * @var array Recipient group ID. Either `ContactPerson` or `ContactGroup` should be passed in.
     */
    public $ContactGroup;

    /**
     * @param integer $SendMail Whether to enable email sending. Valid values: `0` (no), `1` (yes).
     * @param array $Region Region configuration, such as "ap-guangzhou" and "ap-shanghai". For the inspection email sending template, configure the region where you need to send the inspection email. For the subscription email sending template, configure the region where the current subscribed instance resides.
     * @param array $HealthStatus Sends a report with the specified health level, such as `HEALTH`, `SUB_HEALTH`, `RISK`, and `HIGH_RISK`.
     * @param array $ContactPerson Recipient ID. Either `ContactPerson` or `ContactGroup` should be passed in.
     * @param array $ContactGroup Recipient group ID. Either `ContactPerson` or `ContactGroup` should be passed in.
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
