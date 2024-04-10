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
 * Notification rules
 *
 * @method array getNoticeReceivers() Obtain Alarms notification template recipient informationNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Alarms notification template recipient informationNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getWebCallbacks() Obtain Alarms notification template callback informationNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setWebCallbacks(array $WebCallbacks) Set Alarms notification template callback informationNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getRule() Obtain Matching rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRule(string $Rule) Set Matching rules.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NoticeRule extends AbstractModel
{
    /**
     * @var array Alarms notification template recipient informationNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeReceivers;

    /**
     * @var array Alarms notification template callback informationNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $WebCallbacks;

    /**
     * @var string Matching rules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rule;

    /**
     * @param array $NoticeReceivers Alarms notification template recipient informationNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $WebCallbacks Alarms notification template callback informationNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Rule Matching rules.
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

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
