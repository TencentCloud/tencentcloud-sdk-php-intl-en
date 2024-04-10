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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmNotice request structure.
 *
 * @method string getAlarmNoticeId() Obtain Notification group ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification group ID
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
 * @method array getWebCallbacks() Obtain API callback information (including WeCom)
 * @method void setWebCallbacks(array $WebCallbacks) Set API callback information (including WeCom)
 * @method array getNoticeRules() Obtain Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
 * @method void setNoticeRules(array $NoticeRules) Set Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Notification group ID
     */
    public $AlarmNoticeId;

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
     * @var array API callback information (including WeCom)
     */
    public $WebCallbacks;

    /**
     * @var array Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
     */
    public $NoticeRules;

    /**
     * @param string $AlarmNoticeId Notification group ID
     * @param string $Name Notification group name
     * @param string $Type Notification type. Optional Values:
<li> Trigger - Alarm trigger</li>
<li> Recovery - Alarm recovery</li>
<li> All - Alarm triggered and alarm recovery</li>
     * @param array $NoticeReceivers Notification recipient
     * @param array $WebCallbacks API callback information (including WeCom)
     * @param array $NoticeRules Notification rulesNote: - Type, NoticeReceivers, and WebCallbacks are one set of configurations, while NoticeRules is another set of configurations. The two sets are mutually exclusive.- Submitting one set of data will nullify the other set.
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
    }
}
