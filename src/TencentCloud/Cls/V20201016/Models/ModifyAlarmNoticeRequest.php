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
 * @method string getAlarmNoticeId() Obtain Alarm notification template ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Alarm notification template ID
 * @method string getName() Obtain Alarm template name
 * @method void setName(string $Name) Set Alarm template name
 * @method string getType() Obtain Alarm template type. Valid values:
<br><li> `Trigger`: alarm triggered
<br><li> `Recovery`: alarm cleared
<br><li> `All`: alarm triggered and alarm cleared
 * @method void setType(string $Type) Set Alarm template type. Valid values:
<br><li> `Trigger`: alarm triggered
<br><li> `Recovery`: alarm cleared
<br><li> `All`: alarm triggered and alarm cleared
 * @method array getNoticeReceivers() Obtain Information of the recipient in alarm template
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Information of the recipient in alarm template
 * @method array getWebCallbacks() Obtain Alarm template callback information
 * @method void setWebCallbacks(array $WebCallbacks) Set Alarm template callback information
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Alarm notification template ID
     */
    public $AlarmNoticeId;

    /**
     * @var string Alarm template name
     */
    public $Name;

    /**
     * @var string Alarm template type. Valid values:
<br><li> `Trigger`: alarm triggered
<br><li> `Recovery`: alarm cleared
<br><li> `All`: alarm triggered and alarm cleared
     */
    public $Type;

    /**
     * @var array Information of the recipient in alarm template
     */
    public $NoticeReceivers;

    /**
     * @var array Alarm template callback information
     */
    public $WebCallbacks;

    /**
     * @param string $AlarmNoticeId Alarm notification template ID
     * @param string $Name Alarm template name
     * @param string $Type Alarm template type. Valid values:
<br><li> `Trigger`: alarm triggered
<br><li> `Recovery`: alarm cleared
<br><li> `All`: alarm triggered and alarm cleared
     * @param array $NoticeReceivers Information of the recipient in alarm template
     * @param array $WebCallbacks Alarm template callback information
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
    }
}
