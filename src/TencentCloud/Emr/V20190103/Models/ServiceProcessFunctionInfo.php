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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Process detection information
 *
 * @method string getDetectAlert() Obtain Detection alarm level.
 * @method void setDetectAlert(string $DetectAlert) Set Detection alarm level.
 * @method string getDetetcFunctionKey() Obtain Detection feature description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetetcFunctionKey(string $DetetcFunctionKey) Set Detection feature description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDetetcFunctionValue() Obtain Detection feature result

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetetcFunctionValue(string $DetetcFunctionValue) Set Detection feature result

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDetetcTime() Obtain Detection results.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetetcTime(string $DetetcTime) Set Detection results.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDetectFunctionKey() Obtain Detection feature description.
 * @method void setDetectFunctionKey(string $DetectFunctionKey) Set Detection feature description.
 * @method string getDetectFunctionValue() Obtain Detection feature result.
 * @method void setDetectFunctionValue(string $DetectFunctionValue) Set Detection feature result.
 * @method string getDetectTime() Obtain Detection result.
 * @method void setDetectTime(string $DetectTime) Set Detection result.
 */
class ServiceProcessFunctionInfo extends AbstractModel
{
    /**
     * @var string Detection alarm level.
     */
    public $DetectAlert;

    /**
     * @var string Detection feature description

Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DetetcFunctionKey;

    /**
     * @var string Detection feature result

Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DetetcFunctionValue;

    /**
     * @var string Detection results.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DetetcTime;

    /**
     * @var string Detection feature description.
     */
    public $DetectFunctionKey;

    /**
     * @var string Detection feature result.
     */
    public $DetectFunctionValue;

    /**
     * @var string Detection result.
     */
    public $DetectTime;

    /**
     * @param string $DetectAlert Detection alarm level.
     * @param string $DetetcFunctionKey Detection feature description

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DetetcFunctionValue Detection feature result

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DetetcTime Detection results.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DetectFunctionKey Detection feature description.
     * @param string $DetectFunctionValue Detection feature result.
     * @param string $DetectTime Detection result.
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
        if (array_key_exists("DetectAlert",$param) and $param["DetectAlert"] !== null) {
            $this->DetectAlert = $param["DetectAlert"];
        }

        if (array_key_exists("DetetcFunctionKey",$param) and $param["DetetcFunctionKey"] !== null) {
            $this->DetetcFunctionKey = $param["DetetcFunctionKey"];
        }

        if (array_key_exists("DetetcFunctionValue",$param) and $param["DetetcFunctionValue"] !== null) {
            $this->DetetcFunctionValue = $param["DetetcFunctionValue"];
        }

        if (array_key_exists("DetetcTime",$param) and $param["DetetcTime"] !== null) {
            $this->DetetcTime = $param["DetetcTime"];
        }

        if (array_key_exists("DetectFunctionKey",$param) and $param["DetectFunctionKey"] !== null) {
            $this->DetectFunctionKey = $param["DetectFunctionKey"];
        }

        if (array_key_exists("DetectFunctionValue",$param) and $param["DetectFunctionValue"] !== null) {
            $this->DetectFunctionValue = $param["DetectFunctionValue"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }
    }
}
