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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration of alarm level threshold
 *
 * @method string getRemind() Obtain Threshold for the `Remind` level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemind(string $Remind) Set Threshold for the `Remind` level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWarn() Obtain Threshold for the `Warn` level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarn(string $Warn) Set Threshold for the `Warn` level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSerious() Obtain Threshold for the `Serious` level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSerious(string $Serious) Set Threshold for the `Serious` level
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmHierarchicalValue extends AbstractModel
{
    /**
     * @var string Threshold for the `Remind` level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remind;

    /**
     * @var string Threshold for the `Warn` level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Warn;

    /**
     * @var string Threshold for the `Serious` level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Serious;

    /**
     * @param string $Remind Threshold for the `Remind` level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Warn Threshold for the `Warn` level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Serious Threshold for the `Serious` level
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
        if (array_key_exists("Remind",$param) and $param["Remind"] !== null) {
            $this->Remind = $param["Remind"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Serious",$param) and $param["Serious"] !== null) {
            $this->Serious = $param["Serious"];
        }
    }
}
