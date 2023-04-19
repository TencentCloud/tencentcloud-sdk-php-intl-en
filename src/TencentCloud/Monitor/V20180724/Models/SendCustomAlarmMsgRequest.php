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
 * SendCustomAlarmMsg request structure.
 *
 * @method string getModule() Obtain API component name. The value for the current API is monitor.
 * @method void setModule(string $Module) Set API component name. The value for the current API is monitor.
 * @method string getPolicyId() Obtain Message policy ID, which is configured on the custom message page.
 * @method void setPolicyId(string $PolicyId) Set Message policy ID, which is configured on the custom message page.
 * @method string getMsg() Obtain Custom message content that a user wants to send.
 * @method void setMsg(string $Msg) Set Custom message content that a user wants to send.
 */
class SendCustomAlarmMsgRequest extends AbstractModel
{
    /**
     * @var string API component name. The value for the current API is monitor.
     */
    public $Module;

    /**
     * @var string Message policy ID, which is configured on the custom message page.
     */
    public $PolicyId;

    /**
     * @var string Custom message content that a user wants to send.
     */
    public $Msg;

    /**
     * @param string $Module API component name. The value for the current API is monitor.
     * @param string $PolicyId Message policy ID, which is configured on the custom message page.
     * @param string $Msg Custom message content that a user wants to send.
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }
    }
}
