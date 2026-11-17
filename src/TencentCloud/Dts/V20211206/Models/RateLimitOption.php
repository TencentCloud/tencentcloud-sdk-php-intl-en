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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speed limit details of migration and sync tasks
 *
 * @method integer getCurrentDumpThread() Obtain Currently effective number of threads for full export. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
 * @method void setCurrentDumpThread(integer $CurrentDumpThread) Set Currently effective number of threads for full export. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
 * @method integer getDefaultDumpThread() Obtain The default number of threads for full export. This field is only meaningful in the output parameters.
 * @method void setDefaultDumpThread(integer $DefaultDumpThread) Set The default number of threads for full export. This field is only meaningful in the output parameters.
 * @method integer getCurrentDumpRps() Obtain The currently effective Rps for full export. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.
 * @method void setCurrentDumpRps(integer $CurrentDumpRps) Set The currently effective Rps for full export. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.
 * @method integer getDefaultDumpRps() Obtain The default Rps for full export. This field is only meaningful in the output parameters.
 * @method void setDefaultDumpRps(integer $DefaultDumpRps) Set The default Rps for full export. This field is only meaningful in the output parameters.
 * @method integer getCurrentLoadThread() Obtain Currently effective number of threads for full import. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
 * @method void setCurrentLoadThread(integer $CurrentLoadThread) Set Currently effective number of threads for full import. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
 * @method integer getDefaultLoadThread() Obtain The default number of threads for full import. This field is only meaningful in the output parameters.
 * @method void setDefaultLoadThread(integer $DefaultLoadThread) Set The default number of threads for full import. This field is only meaningful in the output parameters.
 * @method integer getCurrentLoadRps() Obtain The currently effective Rps for full import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.	
 * @method void setCurrentLoadRps(integer $CurrentLoadRps) Set The currently effective Rps for full import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.	
 * @method integer getDefaultLoadRps() Obtain Default full import Rps. This field is only meaningful in the output parameter.	
 * @method void setDefaultLoadRps(integer $DefaultLoadRps) Set Default full import Rps. This field is only meaningful in the output parameter.	
 * @method integer getCurrentSinkerThread() Obtain The currently effective number of threads for incremental import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 128.
 * @method void setCurrentSinkerThread(integer $CurrentSinkerThread) Set The currently effective number of threads for incremental import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 128.
 * @method integer getDefaultSinkerThread() Obtain The default number of threads for incremental import. This field is only meaningful in the output parameters.
 * @method void setDefaultSinkerThread(integer $DefaultSinkerThread) Set The default number of threads for incremental import. This field is only meaningful in the output parameters.
 * @method string getHasUserSetRateLimit() Obtain enum: "no"/"yes". no indicates that the user has not set a speed limit, while yes indicates that a speed limit has been set. This field is only meaningful in the output parameters.
 * @method void setHasUserSetRateLimit(string $HasUserSetRateLimit) Set enum: "no"/"yes". no indicates that the user has not set a speed limit, while yes indicates that a speed limit has been set. This field is only meaningful in the output parameters.
 * @method integer getDefaultDumpBps() Obtain Default full export BPS, currently supported only for MongoDB links.
 * @method void setDefaultDumpBps(integer $DefaultDumpBps) Set Default full export BPS, currently supported only for MongoDB links.
 * @method integer getCurrentSinkerRps() Obtain Incremental import RPS, currently supported only for MongoDB links.
 * @method void setCurrentSinkerRps(integer $CurrentSinkerRps) Set Incremental import RPS, currently supported only for MongoDB links.
 * @method integer getDefaultSinkerRps() Obtain Default incremental import RPS, currently supported only for MongoDB links.
 * @method void setDefaultSinkerRps(integer $DefaultSinkerRps) Set Default incremental import RPS, currently supported only for MongoDB links.
 * @method integer getCurrentLoadBps() Obtain Current import BPS. Currently, it is only used for Redis.
 * @method void setCurrentLoadBps(integer $CurrentLoadBps) Set Current import BPS. Currently, it is only used for Redis.
 * @method integer getCurrentDstShardCount() Obtain Number of shards in the target database. Currently, only used for Redis.
 * @method void setCurrentDstShardCount(integer $CurrentDstShardCount) Set Number of shards in the target database. Currently, only used for Redis.
 * @method integer getCurrentDumpBps() Obtain Full export BPS, currently supported only for MongoDB links.
 * @method void setCurrentDumpBps(integer $CurrentDumpBps) Set Full export BPS, currently supported only for MongoDB links.
 * @method integer getCurrentSinkerBps() Obtain Incremental import BPS, currently supported only for MongoDB links.
 * @method void setCurrentSinkerBps(integer $CurrentSinkerBps) Set Incremental import BPS, currently supported only for MongoDB links.
 * @method integer getDefaultSinkerBps() Obtain Default incremental import BPS, currently supported only for MongoDB links.
 * @method void setDefaultSinkerBps(integer $DefaultSinkerBps) Set Default incremental import BPS, currently supported only for MongoDB links.
 */
class RateLimitOption extends AbstractModel
{
    /**
     * @var integer Currently effective number of threads for full export. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
     */
    public $CurrentDumpThread;

    /**
     * @var integer The default number of threads for full export. This field is only meaningful in the output parameters.
     */
    public $DefaultDumpThread;

    /**
     * @var integer The currently effective Rps for full export. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.
     */
    public $CurrentDumpRps;

    /**
     * @var integer The default Rps for full export. This field is only meaningful in the output parameters.
     */
    public $DefaultDumpRps;

    /**
     * @var integer Currently effective number of threads for full import. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
     */
    public $CurrentLoadThread;

    /**
     * @var integer The default number of threads for full import. This field is only meaningful in the output parameters.
     */
    public $DefaultLoadThread;

    /**
     * @var integer The currently effective Rps for full import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.	
     */
    public $CurrentLoadRps;

    /**
     * @var integer Default full import Rps. This field is only meaningful in the output parameter.	
     */
    public $DefaultLoadRps;

    /**
     * @var integer The currently effective number of threads for incremental import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 128.
     */
    public $CurrentSinkerThread;

    /**
     * @var integer The default number of threads for incremental import. This field is only meaningful in the output parameters.
     */
    public $DefaultSinkerThread;

    /**
     * @var string enum: "no"/"yes". no indicates that the user has not set a speed limit, while yes indicates that a speed limit has been set. This field is only meaningful in the output parameters.
     */
    public $HasUserSetRateLimit;

    /**
     * @var integer Default full export BPS, currently supported only for MongoDB links.
     */
    public $DefaultDumpBps;

    /**
     * @var integer Incremental import RPS, currently supported only for MongoDB links.
     */
    public $CurrentSinkerRps;

    /**
     * @var integer Default incremental import RPS, currently supported only for MongoDB links.
     */
    public $DefaultSinkerRps;

    /**
     * @var integer Current import BPS. Currently, it is only used for Redis.
     */
    public $CurrentLoadBps;

    /**
     * @var integer Number of shards in the target database. Currently, only used for Redis.
     */
    public $CurrentDstShardCount;

    /**
     * @var integer Full export BPS, currently supported only for MongoDB links.
     */
    public $CurrentDumpBps;

    /**
     * @var integer Incremental import BPS, currently supported only for MongoDB links.
     */
    public $CurrentSinkerBps;

    /**
     * @var integer Default incremental import BPS, currently supported only for MongoDB links.
     */
    public $DefaultSinkerBps;

    /**
     * @param integer $CurrentDumpThread Currently effective number of threads for full export. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
     * @param integer $DefaultDumpThread The default number of threads for full export. This field is only meaningful in the output parameters.
     * @param integer $CurrentDumpRps The currently effective Rps for full export. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.
     * @param integer $DefaultDumpRps The default Rps for full export. This field is only meaningful in the output parameters.
     * @param integer $CurrentLoadThread Currently effective number of threads for full import. You can adjust this field value when the task is configured. Note: If it is not set or set to 0, the current value is kept. The maximum value is 16.
     * @param integer $DefaultLoadThread The default number of threads for full import. This field is only meaningful in the output parameters.
     * @param integer $CurrentLoadRps The currently effective Rps for full import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 50000000.	
     * @param integer $DefaultLoadRps Default full import Rps. This field is only meaningful in the output parameter.	
     * @param integer $CurrentSinkerThread The currently effective number of threads for incremental import. You can adjust this field value when configuring the task. Note: If not set or set to 0, it indicates to keep the current value. The maximum value is 128.
     * @param integer $DefaultSinkerThread The default number of threads for incremental import. This field is only meaningful in the output parameters.
     * @param string $HasUserSetRateLimit enum: "no"/"yes". no indicates that the user has not set a speed limit, while yes indicates that a speed limit has been set. This field is only meaningful in the output parameters.
     * @param integer $DefaultDumpBps Default full export BPS, currently supported only for MongoDB links.
     * @param integer $CurrentSinkerRps Incremental import RPS, currently supported only for MongoDB links.
     * @param integer $DefaultSinkerRps Default incremental import RPS, currently supported only for MongoDB links.
     * @param integer $CurrentLoadBps Current import BPS. Currently, it is only used for Redis.
     * @param integer $CurrentDstShardCount Number of shards in the target database. Currently, only used for Redis.
     * @param integer $CurrentDumpBps Full export BPS, currently supported only for MongoDB links.
     * @param integer $CurrentSinkerBps Incremental import BPS, currently supported only for MongoDB links.
     * @param integer $DefaultSinkerBps Default incremental import BPS, currently supported only for MongoDB links.
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

        if (array_key_exists("DefaultDumpBps",$param) and $param["DefaultDumpBps"] !== null) {
            $this->DefaultDumpBps = $param["DefaultDumpBps"];
        }

        if (array_key_exists("CurrentSinkerRps",$param) and $param["CurrentSinkerRps"] !== null) {
            $this->CurrentSinkerRps = $param["CurrentSinkerRps"];
        }

        if (array_key_exists("DefaultSinkerRps",$param) and $param["DefaultSinkerRps"] !== null) {
            $this->DefaultSinkerRps = $param["DefaultSinkerRps"];
        }

        if (array_key_exists("CurrentLoadBps",$param) and $param["CurrentLoadBps"] !== null) {
            $this->CurrentLoadBps = $param["CurrentLoadBps"];
        }

        if (array_key_exists("CurrentDstShardCount",$param) and $param["CurrentDstShardCount"] !== null) {
            $this->CurrentDstShardCount = $param["CurrentDstShardCount"];
        }

        if (array_key_exists("CurrentDumpBps",$param) and $param["CurrentDumpBps"] !== null) {
            $this->CurrentDumpBps = $param["CurrentDumpBps"];
        }

        if (array_key_exists("CurrentSinkerBps",$param) and $param["CurrentSinkerBps"] !== null) {
            $this->CurrentSinkerBps = $param["CurrentSinkerBps"];
        }

        if (array_key_exists("DefaultSinkerBps",$param) and $param["DefaultSinkerBps"] !== null) {
            $this->DefaultSinkerBps = $param["DefaultSinkerBps"];
        }
    }
}
