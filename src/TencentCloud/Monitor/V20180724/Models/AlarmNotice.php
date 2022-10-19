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
 * Alarm notification template details
 *
 * @method string getId() Obtain Alarm notification template ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set Alarm notification template ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Alarm notification template name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Alarm notification template name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Last modified time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Last modified time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedBy() Obtain Last modified by
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedBy(string $UpdatedBy) Set Last modified by
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNoticeType() Obtain Alarm notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeType(string $NoticeType) Set Alarm notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserNotices() Obtain User notification list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserNotices(array $UserNotices) Set User notification list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getURLNotices() Obtain Callback notification list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setURLNotices(array $URLNotices) Set Callback notification list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsPreset() Obtain Whether it is the system default notification template. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsPreset(integer $IsPreset) Set Whether it is the system default notification template. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNoticeLanguage() Obtain Notification language. Valid values: zh-CN (Chinese), en-US (English)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeLanguage(string $NoticeLanguage) Set Notification language. Valid values: zh-CN (Chinese), en-US (English)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPolicyIds() Obtain List of IDs of the alarm policies bound to alarm notification template
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyIds(array $PolicyIds) Set List of IDs of the alarm policies bound to alarm notification template
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAMPConsumerId() Obtain Backend AMP consumer ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAMPConsumerId(string $AMPConsumerId) Set Backend AMP consumer ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCLSNotices() Obtain Channel to push alarm notifications to CLS.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCLSNotices(array $CLSNotices) Set Channel to push alarm notifications to CLS.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tags bound to a notification template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tags bound to a notification template
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string Alarm notification template ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Alarm notification template name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Last modified time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string Last modified by
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedBy;

    /**
     * @var string Alarm notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeType;

    /**
     * @var array User notification list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserNotices;

    /**
     * @var array Callback notification list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $URLNotices;

    /**
     * @var integer Whether it is the system default notification template. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsPreset;

    /**
     * @var string Notification language. Valid values: zh-CN (Chinese), en-US (English)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeLanguage;

    /**
     * @var array List of IDs of the alarm policies bound to alarm notification template
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyIds;

    /**
     * @var string Backend AMP consumer ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AMPConsumerId;

    /**
     * @var array Channel to push alarm notifications to CLS.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CLSNotices;

    /**
     * @var array Tags bound to a notification template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $Id Alarm notification template ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Name Alarm notification template name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Last modified time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedBy Last modified by
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NoticeType Alarm notification type. Valid values: ALARM (for unresolved alarms), OK (for resolved alarms), ALL (for all alarms)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserNotices User notification list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $URLNotices Callback notification list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsPreset Whether it is the system default notification template. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NoticeLanguage Notification language. Valid values: zh-CN (Chinese), en-US (English)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PolicyIds List of IDs of the alarm policies bound to alarm notification template
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AMPConsumerId Backend AMP consumer ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CLSNotices Channel to push alarm notifications to CLS.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Tags Tags bound to a notification template
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("UpdatedBy",$param) and $param["UpdatedBy"] !== null) {
            $this->UpdatedBy = $param["UpdatedBy"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
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

        if (array_key_exists("IsPreset",$param) and $param["IsPreset"] !== null) {
            $this->IsPreset = $param["IsPreset"];
        }

        if (array_key_exists("NoticeLanguage",$param) and $param["NoticeLanguage"] !== null) {
            $this->NoticeLanguage = $param["NoticeLanguage"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
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
