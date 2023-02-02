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
 * ModifyAlarmNotice request structure.
 *
 * @method string getModule() Obtain Module name. Enter "monitor" here
 * @method void setModule(string $Module) Set Module name. Enter "monitor" here
 * @method string getName() Obtain Alarm notification rule name, which can contain up to 60 characters
 * @method void setName(string $Name) Set Alarm notification rule name, which can contain up to 60 characters
 * @method string getNoticeType() Obtain Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
 * @method void setNoticeType(string $NoticeType) Set Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
 * @method string getNoticeLanguage() Obtain Notification language. Valid values: zh-CN (Chinese), en-US (English)
 * @method void setNoticeLanguage(string $NoticeLanguage) Set Notification language. Valid values: zh-CN (Chinese), en-US (English)
 * @method string getNoticeId() Obtain Alarm notification template ID
 * @method void setNoticeId(string $NoticeId) Set Alarm notification template ID
 * @method array getUserNotices() Obtain User notifications (up to 5)
 * @method void setUserNotices(array $UserNotices) Set User notifications (up to 5)
 * @method array getURLNotices() Obtain Callback notifications (up to 3)
 * @method void setURLNotices(array $URLNotices) Set Callback notifications (up to 3)
 * @method array getCLSNotices() Obtain The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
 * @method void setCLSNotices(array $CLSNotices) Set The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
 * @method array getPolicyIds() Obtain List of IDs of the alerting rules bound to an alarm notification template
 * @method void setPolicyIds(array $PolicyIds) Set List of IDs of the alerting rules bound to an alarm notification template
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Module name. Enter "monitor" here
     */
    public $Module;

    /**
     * @var string Alarm notification rule name, which can contain up to 60 characters
     */
    public $Name;

    /**
     * @var string Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
     */
    public $NoticeType;

    /**
     * @var string Notification language. Valid values: zh-CN (Chinese), en-US (English)
     */
    public $NoticeLanguage;

    /**
     * @var string Alarm notification template ID
     */
    public $NoticeId;

    /**
     * @var array User notifications (up to 5)
     */
    public $UserNotices;

    /**
     * @var array Callback notifications (up to 3)
     */
    public $URLNotices;

    /**
     * @var array The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
     */
    public $CLSNotices;

    /**
     * @var array List of IDs of the alerting rules bound to an alarm notification template
     */
    public $PolicyIds;

    /**
     * @param string $Module Module name. Enter "monitor" here
     * @param string $Name Alarm notification rule name, which can contain up to 60 characters
     * @param string $NoticeType Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
     * @param string $NoticeLanguage Notification language. Valid values: zh-CN (Chinese), en-US (English)
     * @param string $NoticeId Alarm notification template ID
     * @param array $UserNotices User notifications (up to 5)
     * @param array $URLNotices Callback notifications (up to 3)
     * @param array $CLSNotices The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
     * @param array $PolicyIds List of IDs of the alerting rules bound to an alarm notification template
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
        }

        if (array_key_exists("NoticeLanguage",$param) and $param["NoticeLanguage"] !== null) {
            $this->NoticeLanguage = $param["NoticeLanguage"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("UserNotices",$param) and $param["UserNotices"] !== null) {
            $this->UserNotices = [];
            foreach ($param["UserNotices"] as $key => $value){
                $obj = new UserNotice();
                $obj->deserialize($value);
                array_push($this->UserNotices, $obj);
            }
        }

        if (array_key_exists("URLNotices",$param) and $param["URLNotices"] !== null) {
            $this->URLNotices = [];
            foreach ($param["URLNotices"] as $key => $value){
                $obj = new URLNotice();
                $obj->deserialize($value);
                array_push($this->URLNotices, $obj);
            }
        }

        if (array_key_exists("CLSNotices",$param) and $param["CLSNotices"] !== null) {
            $this->CLSNotices = [];
            foreach ($param["CLSNotices"] as $key => $value){
                $obj = new CLSNotice();
                $obj->deserialize($value);
                array_push($this->CLSNotices, $obj);
            }
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}
