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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speed limit details of migration and sync tasks
 *
 * @method integer getCurrentDumpThread() Obtain The number of full export threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentDumpThread(integer $CurrentDumpThread) Set The number of full export threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefaultDumpThread() Obtain The default number of full export threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultDumpThread(integer $DefaultDumpThread) Set The default number of full export threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentDumpRps() Obtain The full export Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentDumpRps(integer $CurrentDumpRps) Set The full export Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefaultDumpRps() Obtain The default full export Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultDumpRps(integer $DefaultDumpRps) Set The default full export Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentLoadThread() Obtain The number of full import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentLoadThread(integer $CurrentLoadThread) Set The number of full import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefaultLoadThread() Obtain The default number of full import threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultLoadThread(integer $DefaultLoadThread) Set The default number of full import threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentLoadRps() Obtain The full import Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentLoadRps(integer $CurrentLoadRps) Set The full import Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefaultLoadRps() Obtain The default full import Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultLoadRps(integer $DefaultLoadRps) Set The default full import Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentSinkerThread() Obtain The number of incremental import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 128.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentSinkerThread(integer $CurrentSinkerThread) Set The number of incremental import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 128.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefaultSinkerThread() Obtain The default number of incremental import threads. This field is only meaningful in the output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultSinkerThread(integer $DefaultSinkerThread) Set The default number of incremental import threads. This field is only meaningful in the output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHasUserSetRateLimit() Obtain enum:"no"/"yes", no: the user has not set a speed limit; yes: a speed limit has been set. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasUserSetRateLimit(string $HasUserSetRateLimit) Set enum:"no"/"yes", no: the user has not set a speed limit; yes: a speed limit has been set. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 */
class RateLimitOption extends AbstractModel
{
    /**
     * @var integer The number of full export threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentDumpThread;

    /**
     * @var integer The default number of full export threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultDumpThread;

    /**
     * @var integer The full export Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentDumpRps;

    /**
     * @var integer The default full export Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultDumpRps;

    /**
     * @var integer The number of full import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentLoadThread;

    /**
     * @var integer The default number of full import threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultLoadThread;

    /**
     * @var integer The full import Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentLoadRps;

    /**
     * @var integer The default full import Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultLoadRps;

    /**
     * @var integer The number of incremental import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 128.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentSinkerThread;

    /**
     * @var integer The default number of incremental import threads. This field is only meaningful in the output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultSinkerThread;

    /**
     * @var string enum:"no"/"yes", no: the user has not set a speed limit; yes: a speed limit has been set. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasUserSetRateLimit;

    /**
     * @param integer $CurrentDumpThread The number of full export threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefaultDumpThread The default number of full export threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentDumpRps The full export Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefaultDumpRps The default full export Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentLoadThread The number of full import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 16.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefaultLoadThread The default number of full import threads. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentLoadRps The full import Rps currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 50,000,000.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefaultLoadRps The default full import Rps. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentSinkerThread The number of incremental import threads currently in effect. The value of this field can be adjusted when configuring the task. Note: If it is not set or set to 0, it means the current value is maintained. The maximum value is 128.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefaultSinkerThread The default number of incremental import threads. This field is only meaningful in the output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HasUserSetRateLimit enum:"no"/"yes", no: the user has not set a speed limit; yes: a speed limit has been set. This field is only meaningful in the output parameter.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CurrentDumpThread",$param) and $param["CurrentDumpThread"] !== null) {
            $this->CurrentDumpThread = $param["CurrentDumpThread"];
        }

        if (array_key_exists("DefaultDumpThread",$param) and $param["DefaultDumpThread"] !== null) {
            $this->DefaultDumpThread = $param["DefaultDumpThread"];
        }

        if (array_key_exists("CurrentDumpRps",$param) and $param["CurrentDumpRps"] !== null) {
            $this->CurrentDumpRps = $param["CurrentDumpRps"];
        }

        if (array_key_exists("DefaultDumpRps",$param) and $param["DefaultDumpRps"] !== null) {
            $this->DefaultDumpRps = $param["DefaultDumpRps"];
        }

        if (array_key_exists("CurrentLoadThread",$param) and $param["CurrentLoadThread"] !== null) {
            $this->CurrentLoadThread = $param["CurrentLoadThread"];
        }

        if (array_key_exists("DefaultLoadThread",$param) and $param["DefaultLoadThread"] !== null) {
            $this->DefaultLoadThread = $param["DefaultLoadThread"];
        }

        if (array_key_exists("CurrentLoadRps",$param) and $param["CurrentLoadRps"] !== null) {
            $this->CurrentLoadRps = $param["CurrentLoadRps"];
        }

        if (array_key_exists("DefaultLoadRps",$param) and $param["DefaultLoadRps"] !== null) {
            $this->DefaultLoadRps = $param["DefaultLoadRps"];
        }

        if (array_key_exists("CurrentSinkerThread",$param) and $param["CurrentSinkerThread"] !== null) {
            $this->CurrentSinkerThread = $param["CurrentSinkerThread"];
        }

        if (array_key_exists("DefaultSinkerThread",$param) and $param["DefaultSinkerThread"] !== null) {
            $this->DefaultSinkerThread = $param["DefaultSinkerThread"];
        }

        if (array_key_exists("HasUserSetRateLimit",$param) and $param["HasUserSetRateLimit"] !== null) {
            $this->HasUserSetRateLimit = $param["HasUserSetRateLimit"];
        }
    }
}
