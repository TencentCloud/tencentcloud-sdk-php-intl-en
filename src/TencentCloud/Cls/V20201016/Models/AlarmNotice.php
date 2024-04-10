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
 * Alarm notification template type
 *
 * @method string getName() Obtain Alarm notification template name
 * @method void setName(string $Name) Set Alarm notification template name
 * @method string getType() Obtain Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
 * @method void setType(string $Type) Set Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
 * @method array getNoticeReceivers() Obtain Information of the recipient in alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Information of the recipient in alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getWebCallbacks() Obtain Callback information of alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWebCallbacks(array $WebCallbacks) Set Callback information of alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAlarmNoticeId() Obtain Alarm notification template ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Alarm notification template ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Last update time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getNoticeRules() Obtain Notification rules.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeRules(array $NoticeRules) Set Notification rules.Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string Alarm notification template name
     */
    public $Name;

    /**
     * @var string Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
     */
    public $Type;

    /**
     * @var array Information of the recipient in alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NoticeReceivers;

    /**
     * @var array Callback information of alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WebCallbacks;

    /**
     * @var string Alarm notification template ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlarmNoticeId;

    /**
     * @var string Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last update time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var array Notification rules.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeRules;

    /**
     * @param string $Name Alarm notification template name
     * @param string $Type Alarm template type. Optional values:<br><li> Trigger - Alarm Trigger </li><br><li> Recovery - Alarm Recovery </li><br><li> All - Alarm Trigger and Alarm Recovery </li>
     * @param array $NoticeReceivers Information of the recipient in alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $WebCallbacks Callback information of alarm notification template
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AlarmNoticeId Alarm notification template ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UpdateTime Last update time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $NoticeRules Notification rules.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
