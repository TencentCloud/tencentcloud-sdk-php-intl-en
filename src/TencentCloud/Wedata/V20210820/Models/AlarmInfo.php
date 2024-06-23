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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task Alert Information
 *
 * @method string getTaskIds() Obtain Associated Task ID
 * @method void setTaskIds(string $TaskIds) Set Associated Task ID
 * @method string getAlarmType() Obtain Alert Categories; 'failure' indicates failure alert; 'overtime' indicates timeout alert
 * @method void setAlarmType(string $AlarmType) Set Alert Categories; 'failure' indicates failure alert; 'overtime' indicates timeout alert
 * @method string getAlarmWay() Obtain Alert Method; 'SMS' indicates SMS; 'Email' indicates email; 'HTTP' indicates an interface method; 'Wechat' indicates WeChat method
 * @method void setAlarmWay(string $AlarmWay) Set Alert Method; 'SMS' indicates SMS; 'Email' indicates email; 'HTTP' indicates an interface method; 'Wechat' indicates WeChat method
 * @method string getAlarmRecipient() Obtain Alert Recipient, multiple recipients separated by ;
 * @method void setAlarmRecipient(string $AlarmRecipient) Set Alert Recipient, multiple recipients separated by ;
 * @method string getAlarmRecipientId() Obtain Alert Recipient ID, multiple recipient IDs separated by ;
 * @method void setAlarmRecipientId(string $AlarmRecipientId) Set Alert Recipient ID, multiple recipient IDs separated by ;
 * @method integer getHours() Obtain Estimated Running Hours, value range 0-23
 * @method void setHours(integer $Hours) Set Estimated Running Hours, value range 0-23
 * @method integer getMinutes() Obtain Estimated Running Minutes, value range 0-59
 * @method void setMinutes(integer $Minutes) Set Estimated Running Minutes, value range 0-59
 * @method integer getTriggerType() Obtain Alert Trigger Moment; '1' means first run failure; '2' means failure after all retries;
 * @method void setTriggerType(integer $TriggerType) Set Alert Trigger Moment; '1' means first run failure; '2' means failure after all retries;
 * @method string getAlarmId() Obtain Alert Information ID
 * @method void setAlarmId(string $AlarmId) Set Alert Information ID
 * @method integer getStatus() Obtain Alert Status Setting; '1' indicates available; '0' indicates unavailable, default is available
 * @method void setStatus(integer $Status) Set Alert Status Setting; '1' indicates available; '0' indicates unavailable, default is available
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string Associated Task ID
     */
    public $TaskIds;

    /**
     * @var string Alert Categories; 'failure' indicates failure alert; 'overtime' indicates timeout alert
     */
    public $AlarmType;

    /**
     * @var string Alert Method; 'SMS' indicates SMS; 'Email' indicates email; 'HTTP' indicates an interface method; 'Wechat' indicates WeChat method
     */
    public $AlarmWay;

    /**
     * @var string Alert Recipient, multiple recipients separated by ;
     */
    public $AlarmRecipient;

    /**
     * @var string Alert Recipient ID, multiple recipient IDs separated by ;
     */
    public $AlarmRecipientId;

    /**
     * @var integer Estimated Running Hours, value range 0-23
     */
    public $Hours;

    /**
     * @var integer Estimated Running Minutes, value range 0-59
     */
    public $Minutes;

    /**
     * @var integer Alert Trigger Moment; '1' means first run failure; '2' means failure after all retries;
     */
    public $TriggerType;

    /**
     * @var string Alert Information ID
     */
    public $AlarmId;

    /**
     * @var integer Alert Status Setting; '1' indicates available; '0' indicates unavailable, default is available
     */
    public $Status;

    /**
     * @param string $TaskIds Associated Task ID
     * @param string $AlarmType Alert Categories; 'failure' indicates failure alert; 'overtime' indicates timeout alert
     * @param string $AlarmWay Alert Method; 'SMS' indicates SMS; 'Email' indicates email; 'HTTP' indicates an interface method; 'Wechat' indicates WeChat method
     * @param string $AlarmRecipient Alert Recipient, multiple recipients separated by ;
     * @param string $AlarmRecipientId Alert Recipient ID, multiple recipient IDs separated by ;
     * @param integer $Hours Estimated Running Hours, value range 0-23
     * @param integer $Minutes Estimated Running Minutes, value range 0-59
     * @param integer $TriggerType Alert Trigger Moment; '1' means first run failure; '2' means failure after all retries;
     * @param string $AlarmId Alert Information ID
     * @param integer $Status Alert Status Setting; '1' indicates available; '0' indicates unavailable, default is available
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("AlarmRecipient",$param) and $param["AlarmRecipient"] !== null) {
            $this->AlarmRecipient = $param["AlarmRecipient"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("Hours",$param) and $param["Hours"] !== null) {
            $this->Hours = $param["Hours"];
        }

        if (array_key_exists("Minutes",$param) and $param["Minutes"] !== null) {
            $this->Minutes = $param["Minutes"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
