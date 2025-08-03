<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom error information object
 *
 * @method string getErrorTip() Obtain Error description field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorTip(string $ErrorTip) Set Error description field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Original exception message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Original exception message.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorLevel() Obtain Error level field.
ERROR
WARN
INFO
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorLevel(string $ErrorLevel) Set Error level field.
ERROR
WARN
INFO
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDocLink() Obtain Documentation link.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocLink(string $DocLink) Set Documentation link.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFAQ() Obtain Quick start guide.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFAQ(string $FAQ) Set Quick start guide.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReservedField() Obtain Reserved field 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReservedField(string $ReservedField) Set Reserved field 1.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ErrorInfo extends AbstractModel
{
    /**
     * @var string Error description field.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorTip;

    /**
     * @var string Original exception message.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var string Error level field.
ERROR
WARN
INFO
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorLevel;

    /**
     * @var string Documentation link.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocLink;

    /**
     * @var string Quick start guide.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FAQ;

    /**
     * @var string Reserved field 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReservedField;

    /**
     * @param string $ErrorTip Error description field.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Original exception message.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorLevel Error level field.
ERROR
WARN
INFO
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DocLink Documentation link.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FAQ Quick start guide.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReservedField Reserved field 1.
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
        if (array_key_exists("ErrorTip",$param) and $param["ErrorTip"] !== null) {
            $this->ErrorTip = $param["ErrorTip"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ErrorLevel",$param) and $param["ErrorLevel"] !== null) {
            $this->ErrorLevel = $param["ErrorLevel"];
        }

        if (array_key_exists("DocLink",$param) and $param["DocLink"] !== null) {
            $this->DocLink = $param["DocLink"];
        }

        if (array_key_exists("FAQ",$param) and $param["FAQ"] !== null) {
            $this->FAQ = $param["FAQ"];
        }

        if (array_key_exists("ReservedField",$param) and $param["ReservedField"] !== null) {
            $this->ReservedField = $param["ReservedField"];
        }
    }
}
