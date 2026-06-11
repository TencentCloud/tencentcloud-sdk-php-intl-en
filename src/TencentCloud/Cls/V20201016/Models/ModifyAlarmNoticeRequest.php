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
 * ModifyAlarmNotice request structure.
 *
 * @method string getAlarmNoticeId() Obtain Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
 * @method array getTags() Obtain Tag description list. Tags can be bound to corresponding notification channel groups at the same time by specifying this parameter. It supports up to 10 tag key-value pairs, which cannot be duplicate.
 * @method void setTags(array $Tags) Set Tag description list. Tags can be bound to corresponding notification channel groups at the same time by specifying this parameter. It supports up to 10 tag key-value pairs, which cannot be duplicate.
 * @method string getName() Obtain Notification group name
 * @method void setName(string $Name) Set Notification group name
 * @method string getType() Obtain Notification type. Optional Values:
<li> Trigger - Alarm trigger</li>
<li> Recovery - Alarm recovery</li>
<li> All - Alarm triggered and alarm recovery</li>
 * @method void setType(string $Type) Set Notification type. Optional Values:
<li> Trigger - Alarm trigger</li>
<li> Recovery - Alarm recovery</li>
<li> All - Alarm triggered and alarm recovery</li>
 * @method array getNoticeReceivers() Obtain Notification recipient
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Notification recipient
 * @method array getWebCallbacks() Obtain API callback information (including WeCom).
 * @method void setWebCallbacks(array $WebCallbacks) Set API callback information (including WeCom).
 * @method array getNoticeRules() Obtain Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
 * @method void setNoticeRules(array $NoticeRules) Set Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
 * @method string getJumpDomain() Obtain Call link domain name. It must start with http:// or https:// and must not end with /.
 * @method void setJumpDomain(string $JumpDomain) Set Call link domain name. It must start with http:// or https:// and must not end with /.
 * @method integer getDeliverStatus() Obtain Delivery log switch.

Parameter value:
1: disabled.

2: Enable 

 * @method void setDeliverStatus(integer $DeliverStatus) Set Delivery log switch.

Parameter value:
1: disabled.

2: Enable 

 * @method DeliverConfig getDeliverConfig() Obtain Log shipping configuration.
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) Set Log shipping configuration.
 * @method integer getAlarmShieldStatus() Obtain Login-free operation alarm switch.

Parameter value: 
1: disabled
2: Enable (enabled by default)
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) Set Login-free operation alarm switch.

Parameter value: 
1: disabled
2: Enable (enabled by default)
 * @method boolean getCallbackPrioritize() Obtain Unify the custom callback parameter settings.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) Set Unify the custom callback parameter settings.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
     */
    public $AlarmNoticeId;

    /**
     * @var array Tag description list. Tags can be bound to corresponding notification channel groups at the same time by specifying this parameter. It supports up to 10 tag key-value pairs, which cannot be duplicate.
     */
    public $Tags;

    /**
     * @var string Notification group name
     */
    public $Name;

    /**
     * @var string Notification type. Optional Values:
<li> Trigger - Alarm trigger</li>
<li> Recovery - Alarm recovery</li>
<li> All - Alarm triggered and alarm recovery</li>
     */
    public $Type;

    /**
     * @var array Notification recipient
     */
    public $NoticeReceivers;

    /**
     * @var array API callback information (including WeCom).
     */
    public $WebCallbacks;

    /**
     * @var array Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
     */
    public $NoticeRules;

    /**
     * @var string Call link domain name. It must start with http:// or https:// and must not end with /.
     */
    public $JumpDomain;

    /**
     * @var integer Delivery log switch.

Parameter value:
1: disabled.

2: Enable 

     */
    public $DeliverStatus;

    /**
     * @var DeliverConfig Log shipping configuration.
     */
    public $DeliverConfig;

    /**
     * @var integer Login-free operation alarm switch.

Parameter value: 
1: disabled
2: Enable (enabled by default)
     */
    public $AlarmShieldStatus;

    /**
     * @var boolean Unify the custom callback parameter settings.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
     */
    public $CallbackPrioritize;

    /**
     * @param string $AlarmNoticeId Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
     * @param array $Tags Tag description list. Tags can be bound to corresponding notification channel groups at the same time by specifying this parameter. It supports up to 10 tag key-value pairs, which cannot be duplicate.
     * @param string $Name Notification group name
     * @param string $Type Notification type. Optional Values:
<li> Trigger - Alarm trigger</li>
<li> Recovery - Alarm recovery</li>
<li> All - Alarm triggered and alarm recovery</li>
     * @param array $NoticeReceivers Notification recipient
     * @param array $WebCallbacks API callback information (including WeCom).
     * @param array $NoticeRules Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
     * @param string $JumpDomain Call link domain name. It must start with http:// or https:// and must not end with /.
     * @param integer $DeliverStatus Delivery log switch.

Parameter value:
1: disabled.

2: Enable 

     * @param DeliverConfig $DeliverConfig Log shipping configuration.
     * @param integer $AlarmShieldStatus Login-free operation alarm switch.

Parameter value: 
1: disabled
2: Enable (enabled by default)
     * @param boolean $CallbackPrioritize Unify the custom callback parameter settings.
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("NoticeRules",$param) and $param["NoticeRules"] !== null) {
            $this->NoticeRules = [];
            foreach ($param["NoticeRules"] as $key => $value){
                $obj = new NoticeRule();
                $obj->deserialize($value);
                array_push($this->NoticeRules, $obj);
            }
        }

        if (array_key_exists("JumpDomain",$param) and $param["JumpDomain"] !== null) {
            $this->JumpDomain = $param["JumpDomain"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverConfig",$param) and $param["DeliverConfig"] !== null) {
            $this->DeliverConfig = new DeliverConfig();
            $this->DeliverConfig->deserialize($param["DeliverConfig"]);
        }

        if (array_key_exists("AlarmShieldStatus",$param) and $param["AlarmShieldStatus"] !== null) {
            $this->AlarmShieldStatus = $param["AlarmShieldStatus"];
        }

        if (array_key_exists("CallbackPrioritize",$param) and $param["CallbackPrioritize"] !== null) {
            $this->CallbackPrioritize = $param["CallbackPrioritize"];
        }
    }
}
