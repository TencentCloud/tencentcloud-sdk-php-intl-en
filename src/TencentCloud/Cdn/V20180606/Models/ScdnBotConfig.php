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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot configuration
 *
 * @method string getSwitch() Obtain Whether to enable SCDN bot configuration. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable SCDN bot configuration. Values:
`on`: Enable
`off`: Disable
 * @method array getBotCookie() Obtain Bot cookie policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBotCookie(array $BotCookie) Set Bot cookie policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getBotJavaScript() Obtain Bot JS policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBotJavaScript(array $BotJavaScript) Set Bot JS policy
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ScdnBotConfig extends AbstractModel
{
    /**
     * @var string Whether to enable SCDN bot configuration. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array Bot cookie policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BotCookie;

    /**
     * @var array Bot JS policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BotJavaScript;

    /**
     * @param string $Switch Whether to enable SCDN bot configuration. Values:
`on`: Enable
`off`: Disable
     * @param array $BotCookie Bot cookie policy
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $BotJavaScript Bot JS policy
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BotCookie",$param) and $param["BotCookie"] !== null) {
            $this->BotCookie = [];
            foreach ($param["BotCookie"] as $key => $value){
                $obj = new BotCookie();
                $obj->deserialize($value);
                array_push($this->BotCookie, $obj);
            }
        }

        if (array_key_exists("BotJavaScript",$param) and $param["BotJavaScript"] !== null) {
            $this->BotJavaScript = [];
            foreach ($param["BotJavaScript"] as $key => $value){
                $obj = new BotJavaScript();
                $obj->deserialize($value);
                array_push($this->BotJavaScript, $obj);
            }
        }
    }
}
