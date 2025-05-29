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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Release configuration items.
 *
 * @method string getConfigItem() Obtain Configuration item description.
 * @method void setConfigItem(string $ConfigItem) Set Configuration item description.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getAction() Obtain Status.
 * @method void setAction(integer $Action) Set Status.
 * @method string getValue() Obtain Content after modification.
 * @method void setValue(string $Value) Set Content after modification.
 * @method string getLastValue() Obtain Content before modification.
 * @method void setLastValue(string $LastValue) Set Content before modification.
 * @method string getContent() Obtain Modified content (display "content" with priority. If "content" is empty, take "value").
 * @method void setContent(string $Content) Set Modified content (display "content" with priority. If "content" is empty, take "value").
 * @method string getMessage() Obtain Reason for failure.
 * @method void setMessage(string $Message) Set Reason for failure.
 */
class ReleaseConfigs extends AbstractModel
{
    /**
     * @var string Configuration item description.
     */
    public $ConfigItem;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Status.
     */
    public $Action;

    /**
     * @var string Content after modification.
     */
    public $Value;

    /**
     * @var string Content before modification.
     */
    public $LastValue;

    /**
     * @var string Modified content (display "content" with priority. If "content" is empty, take "value").
     */
    public $Content;

    /**
     * @var string Reason for failure.
     */
    public $Message;

    /**
     * @param string $ConfigItem Configuration item description.
     * @param string $UpdateTime Update time.
     * @param integer $Action Status.
     * @param string $Value Content after modification.
     * @param string $LastValue Content before modification.
     * @param string $Content Modified content (display "content" with priority. If "content" is empty, take "value").
     * @param string $Message Reason for failure.
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
        if (array_key_exists("ConfigItem",$param) and $param["ConfigItem"] !== null) {
            $this->ConfigItem = $param["ConfigItem"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("LastValue",$param) and $param["LastValue"] !== null) {
            $this->LastValue = $param["LastValue"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
