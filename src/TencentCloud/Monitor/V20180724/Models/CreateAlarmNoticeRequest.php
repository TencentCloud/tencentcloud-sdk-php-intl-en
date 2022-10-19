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
 * CreateAlarmNotice request structure.
 *
 * @method string getModule() Obtain Module name. Enter "monitor" here
 * @method void setModule(string $Module) Set Module name. Enter "monitor" here
 * @method string getName() Obtain Notification template name, which can contain up to 60 characters
 * @method void setName(string $Name) Set Notification template name, which can contain up to 60 characters
 * @method string getNoticeType() Obtain Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
 * @method void setNoticeType(string $NoticeType) Set Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
 * @method string getNoticeLanguage() Obtain Notification language. Valid values: zh-CN (Chinese), en-US (English)
 * @method void setNoticeLanguage(string $NoticeLanguage) Set Notification language. Valid values: zh-CN (Chinese), en-US (English)
 * @method array getUserNotices() Obtain User notifications (up to 5)
 * @method void setUserNotices(array $UserNotices) Set User notifications (up to 5)
 * @method array getURLNotices() Obtain Callback notifications (up to 3)
 * @method void setURLNotices(array $URLNotices) Set Callback notifications (up to 3)
 * @method array getCLSNotices() Obtain The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
 * @method void setCLSNotices(array $CLSNotices) Set The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
 * @method array getTags() Obtain Tags bound to a template
 * @method void setTags(array $Tags) Set Tags bound to a template
 */
class CreateAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Module name. Enter "monitor" here
     */
    public $Module;

    /**
     * @var string Notification template name, which can contain up to 60 characters
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
     * @var array Tags bound to a template
     */
    public $Tags;

    /**
     * @param string $Module Module name. Enter "monitor" here
     * @param string $Name Notification template name, which can contain up to 60 characters
     * @param string $NoticeType Notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
     * @param string $NoticeLanguage Notification language. Valid values: zh-CN (Chinese), en-US (English)
     * @param array $UserNotices User notifications (up to 5)
     * @param array $URLNotices Callback notifications (up to 3)
     * @param array $CLSNotices The operation of pushing alarm notifications to CLS. Up to one CLS log topic can be configured.
     * @param array $Tags Tags bound to a template
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
