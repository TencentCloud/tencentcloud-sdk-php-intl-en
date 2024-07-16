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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return the configuration file content (key-value)
 *
 * @method string getKeyName() Obtain key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyName(string $KeyName) Set key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Notes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Notes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDisplay() Obtain 1 indicates read-only, 2 indicates editable but undeletable, and 3 indicates deletable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisplay(integer $Display) Set 1 indicates read-only, 2 indicates editable but undeletable, and 3 indicates deletable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSupportHotUpdate() Obtain 0 means not supported, and 1 means hot update is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportHotUpdate(integer $SupportHotUpdate) Set 0 means not supported, and 1 means hot update is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConfigKeyValue extends AbstractModel
{
    /**
     * @var string key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyName;

    /**
     * @var string Value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var string Notes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var integer 1 indicates read-only, 2 indicates editable but undeletable, and 3 indicates deletable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Display;

    /**
     * @var integer 0 means not supported, and 1 means hot update is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportHotUpdate;

    /**
     * @param string $KeyName key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Notes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Display 1 indicates read-only, 2 indicates editable but undeletable, and 3 indicates deletable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SupportHotUpdate 0 means not supported, and 1 means hot update is supported.
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }

        if (array_key_exists("SupportHotUpdate",$param) and $param["SupportHotUpdate"] !== null) {
            $this->SupportHotUpdate = $param["SupportHotUpdate"];
        }
    }
}
