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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm notification channel group detailed setting
 *
 * @method string getName() Obtain Alarm notification channel group name.
 * @method void setName(string $Name) Set Alarm notification channel group name.
 * @method array getTags() Obtain Tag information bound to the alarm notification channel group.
 * @method void setTags(array $Tags) Set Tag information bound to the alarm notification channel group.
 * @method string getType() Obtain Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
 * @method void setType(string $Type) Set Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
 * @method array getNoticeReceivers() Obtain Alarm notification template recipient information.
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Alarm notification template recipient information.
 * @method array getWebCallbacks() Obtain Callback information of alarm notification template.
 * @method void setWebCallbacks(array $WebCallbacks) Set Callback information of alarm notification template.
 * @method string getAlarmNoticeId() Obtain Alarm notification template ID.
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Alarm notification template ID.
 * @method array getNoticeRules() Obtain Notification rules.
 * @method void setNoticeRules(array $NoticeRules) Set Notification rules.
 * @method integer getAlarmShieldStatus() Obtain Login-free operation alarm switch.
Parameter value: 1: Turn off 2: Turn on (enabled by default)
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) Set Login-free operation alarm switch.
Parameter value: 1: Turn off 2: Turn on (enabled by default)
 * @method string getJumpDomain() Obtain Call link domain name. It must start with http:// or https:// and must not end with /.
 * @method void setJumpDomain(string $JumpDomain) Set Call link domain name. It must start with http:// or https:// and must not end with /.
 * @method AlarmNoticeDeliverConfig getAlarmNoticeDeliverConfig() Obtain Shipping-related information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmNoticeDeliverConfig(AlarmNoticeDeliverConfig $AlarmNoticeDeliverConfig) Set Shipping-related information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time. Format: YYYY-MM-DD HH:MM:SS
 * @method void setCreateTime(string $CreateTime) Set Creation time. Format: YYYY-MM-DD HH:MM:SS
 * @method string getUpdateTime() Obtain Latest update time. Format: YYYY-MM-DD HH:MM:SS
 * @method void setUpdateTime(string $UpdateTime) Set Latest update time. Format: YYYY-MM-DD HH:MM:SS
 * @method integer getDeliverStatus() Obtain Delivery log switch.

Parameter value:

1: Disabled

2: enable 

 * @method void setDeliverStatus(integer $DeliverStatus) Set Delivery log switch.

Parameter value:

1: Disabled

2: enable 

 * @method integer getDeliverFlag() Obtain Delivery log flag.

Parameter value:

1: Disabled

2: Enabled

3: Delivery exception
 * @method void setDeliverFlag(integer $DeliverFlag) Set Delivery log flag.

Parameter value:

1: Disabled

2: Enabled

3: Delivery exception
 * @method AlarmShieldCount getAlarmShieldCount() Obtain Alarm silence status quantity information configured for a notification channel group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmShieldCount(AlarmShieldCount $AlarmShieldCount) Set Alarm silence status quantity information configured for a notification channel group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCallbackPrioritize() Obtain Unify the setting of custom callback parameters.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) Set Unify the setting of custom callback parameters.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string Alarm notification channel group name.
     */
    public $Name;

    /**
     * @var array Tag information bound to the alarm notification channel group.
     */
    public $Tags;

    /**
     * @var string Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
     */
    public $Type;

    /**
     * @var array Alarm notification template recipient information.
     */
    public $NoticeReceivers;

    /**
     * @var array Callback information of alarm notification template.
     */
    public $WebCallbacks;

    /**
     * @var string Alarm notification template ID.
     */
    public $AlarmNoticeId;

    /**
     * @var array Notification rules.
     */
    public $NoticeRules;

    /**
     * @var integer Login-free operation alarm switch.
Parameter value: 1: Turn off 2: Turn on (enabled by default)
     */
    public $AlarmShieldStatus;

    /**
     * @var string Call link domain name. It must start with http:// or https:// and must not end with /.
     */
    public $JumpDomain;

    /**
     * @var AlarmNoticeDeliverConfig Shipping-related information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmNoticeDeliverConfig;

    /**
     * @var string Creation time. Format: YYYY-MM-DD HH:MM:SS
     */
    public $CreateTime;

    /**
     * @var string Latest update time. Format: YYYY-MM-DD HH:MM:SS
     */
    public $UpdateTime;

    /**
     * @var integer Delivery log switch.

Parameter value:

1: Disabled

2: enable 

     */
    public $DeliverStatus;

    /**
     * @var integer Delivery log flag.

Parameter value:

1: Disabled

2: Enabled

3: Delivery exception
     */
    public $DeliverFlag;

    /**
     * @var AlarmShieldCount Alarm silence status quantity information configured for a notification channel group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmShieldCount;

    /**
     * @var boolean Unify the setting of custom callback parameters.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
     */
    public $CallbackPrioritize;

    /**
     * @param string $Name Alarm notification channel group name.
     * @param array $Tags Tag information bound to the alarm notification channel group.
     * @param string $Type Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
     * @param array $NoticeReceivers Alarm notification template recipient information.
     * @param array $WebCallbacks Callback information of alarm notification template.
     * @param string $AlarmNoticeId Alarm notification template ID.
     * @param array $NoticeRules Notification rules.
     * @param integer $AlarmShieldStatus Login-free operation alarm switch.
Parameter value: 1: Turn off 2: Turn on (enabled by default)
     * @param string $JumpDomain Call link domain name. It must start with http:// or https:// and must not end with /.
     * @param AlarmNoticeDeliverConfig $AlarmNoticeDeliverConfig Shipping-related information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time. Format: YYYY-MM-DD HH:MM:SS
     * @param string $UpdateTime Latest update time. Format: YYYY-MM-DD HH:MM:SS
     * @param integer $DeliverStatus Delivery log switch.

Parameter value:

1: Disabled

2: enable 

     * @param integer $DeliverFlag Delivery log flag.

Parameter value:

1: Disabled

2: Enabled

3: Delivery exception
     * @param AlarmShieldCount $AlarmShieldCount Alarm silence status quantity information configured for a notification channel group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CallbackPrioritize Unify the setting of custom callback parameters.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("NoticeRules",$param) and $param["NoticeRules"] !== null) {
            $this->NoticeRules = [];
            foreach ($param["NoticeRules"] as $key => $value){
                $obj = new NoticeRule();
                $obj->deserialize($value);
                array_push($this->NoticeRules, $obj);
            }
        }

        if (array_key_exists("AlarmShieldStatus",$param) and $param["AlarmShieldStatus"] !== null) {
            $this->AlarmShieldStatus = $param["AlarmShieldStatus"];
        }

        if (array_key_exists("JumpDomain",$param) and $param["JumpDomain"] !== null) {
            $this->JumpDomain = $param["JumpDomain"];
        }

        if (array_key_exists("AlarmNoticeDeliverConfig",$param) and $param["AlarmNoticeDeliverConfig"] !== null) {
            $this->AlarmNoticeDeliverConfig = new AlarmNoticeDeliverConfig();
            $this->AlarmNoticeDeliverConfig->deserialize($param["AlarmNoticeDeliverConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverFlag",$param) and $param["DeliverFlag"] !== null) {
            $this->DeliverFlag = $param["DeliverFlag"];
        }

        if (array_key_exists("AlarmShieldCount",$param) and $param["AlarmShieldCount"] !== null) {
            $this->AlarmShieldCount = new AlarmShieldCount();
            $this->AlarmShieldCount->deserialize($param["AlarmShieldCount"]);
        }

        if (array_key_exists("CallbackPrioritize",$param) and $param["CallbackPrioritize"] !== null) {
            $this->CallbackPrioritize = $param["CallbackPrioritize"];
        }
    }
}
