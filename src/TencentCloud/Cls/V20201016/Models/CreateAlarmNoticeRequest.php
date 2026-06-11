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
 * CreateAlarmNotice request structure.
 *
 * @method string getName() Obtain Notification channel group name. Supports a maximum of 255 bytes. Does not support '|'.
 * @method void setName(string $Name) Set Notification channel group name. Supports a maximum of 255 bytes. Does not support '|'.
 * @method array getTags() Obtain Tag description list. By specifying this parameter, you can bind multiple tags to the corresponding notification channel group. A maximum of 50 tag key-value pairs are supported, and there should not be duplicate key-value pairs.
 * @method void setTags(array $Tags) Set Tag description list. By specifying this parameter, you can bind multiple tags to the corresponding notification channel group. A maximum of 50 tag key-value pairs are supported, and there should not be duplicate key-value pairs.
 * @method string getType() Obtain [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Alarm types that require sending notifications. Available values:
- Trigger - Alarm trigger
-Alarm Recovery
-All - Alarm trigger and alarm recovery
 * @method void setType(string $Type) Set [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Alarm types that require sending notifications. Available values:
- Trigger - Alarm trigger
-Alarm Recovery
-All - Alarm trigger and alarm recovery
 * @method array getNoticeReceivers() Obtain [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Notification recipients
 * @method void setNoticeReceivers(array $NoticeReceivers) Set [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Notification recipients
 * @method array getWebCallbacks() Obtain [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Interface callback information (including WeCom, DingTalk, Lark).
 * @method void setWebCallbacks(array $WebCallbacks) Set [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Interface callback information (including WeCom, DingTalk, Lark).
 * @method array getNoticeRules() Obtain [Advanced mode] (Choose between easy mode and alarm mode, and configure corresponding parameters)
Notification rules.
 * @method void setNoticeRules(array $NoticeRules) Set [Advanced mode] (Choose between easy mode and alarm mode, and configure corresponding parameters)
Notification rules.
 * @method string getJumpDomain() Obtain Query data link. It should start with http:// or https:// and should not end with /.
 * @method void setJumpDomain(string $JumpDomain) Set Query data link. It should start with http:// or https:// and should not end with /.
 * @method integer getDeliverStatus() Obtain Delivery log switch. Values are as follows:
1: Off (default value).
2: Enable 
When the delivery log switch is enabled, the DeliverConfig parameter is required.
 * @method void setDeliverStatus(integer $DeliverStatus) Set Delivery log switch. Values are as follows:
1: Off (default value).
2: Enable 
When the delivery log switch is enabled, the DeliverConfig parameter is required.
 * @method DeliverConfig getDeliverConfig() Obtain Log shipping configuration parameter. It is required when DeliverStatus is enabled.
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) Set Log shipping configuration parameter. It is required when DeliverStatus is enabled.
 * @method integer getAlarmShieldStatus() Obtain Login-free operation alarm switch. Values are as follows:
- 1: disabled.
-2: Enable (default value)
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) Set Login-free operation alarm switch. Values are as follows:
- 1: disabled.
-2: Enable (default value)
 * @method boolean getCallbackPrioritize() Obtain Unify the custom callback parameter settings.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) Set Unify the custom callback parameter settings.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
 */
class CreateAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Notification channel group name. Supports a maximum of 255 bytes. Does not support '|'.
     */
    public $Name;

    /**
     * @var array Tag description list. By specifying this parameter, you can bind multiple tags to the corresponding notification channel group. A maximum of 50 tag key-value pairs are supported, and there should not be duplicate key-value pairs.
     */
    public $Tags;

    /**
     * @var string [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Alarm types that require sending notifications. Available values:
- Trigger - Alarm trigger
-Alarm Recovery
-All - Alarm trigger and alarm recovery
     */
    public $Type;

    /**
     * @var array [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Notification recipients
     */
    public $NoticeReceivers;

    /**
     * @var array [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Interface callback information (including WeCom, DingTalk, Lark).
     */
    public $WebCallbacks;

    /**
     * @var array [Advanced mode] (Choose between easy mode and alarm mode, and configure corresponding parameters)
Notification rules.
     */
    public $NoticeRules;

    /**
     * @var string Query data link. It should start with http:// or https:// and should not end with /.
     */
    public $JumpDomain;

    /**
     * @var integer Delivery log switch. Values are as follows:
1: Off (default value).
2: Enable 
When the delivery log switch is enabled, the DeliverConfig parameter is required.
     */
    public $DeliverStatus;

    /**
     * @var DeliverConfig Log shipping configuration parameter. It is required when DeliverStatus is enabled.
     */
    public $DeliverConfig;

    /**
     * @var integer Login-free operation alarm switch. Values are as follows:
- 1: disabled.
-2: Enable (default value)
     */
    public $AlarmShieldStatus;

    /**
     * @var boolean Unify the custom callback parameter settings.
-true: Use the custom callback parameters in the notification content template to override the request header and request body separately configured in the alarm policy.
-false: Prioritize using the request header and request body separately configured in the alarm policy.
     */
    public $CallbackPrioritize;

    /**
     * @param string $Name Notification channel group name. Supports a maximum of 255 bytes. Does not support '|'.
     * @param array $Tags Tag description list. By specifying this parameter, you can bind multiple tags to the corresponding notification channel group. A maximum of 50 tag key-value pairs are supported, and there should not be duplicate key-value pairs.
     * @param string $Type [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Alarm types that require sending notifications. Available values:
- Trigger - Alarm trigger
-Alarm Recovery
-All - Alarm trigger and alarm recovery
     * @param array $NoticeReceivers [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Notification recipients
     * @param array $WebCallbacks [Easy mode] (Select either easy mode or alarm mode and configure corresponding parameters)
Interface callback information (including WeCom, DingTalk, Lark).
     * @param array $NoticeRules [Advanced mode] (Choose between easy mode and alarm mode, and configure corresponding parameters)
Notification rules.
     * @param string $JumpDomain Query data link. It should start with http:// or https:// and should not end with /.
     * @param integer $DeliverStatus Delivery log switch. Values are as follows:
1: Off (default value).
2: Enable 
When the delivery log switch is enabled, the DeliverConfig parameter is required.
     * @param DeliverConfig $DeliverConfig Log shipping configuration parameter. It is required when DeliverStatus is enabled.
     * @param integer $AlarmShieldStatus Login-free operation alarm switch. Values are as follows:
- 1: disabled.
-2: Enable (default value)
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
