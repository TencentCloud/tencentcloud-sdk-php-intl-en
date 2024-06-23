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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-time Task Log Content
 *
 * @method integer getTime() Obtain Log Timestamp, in milliseconds
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTime(integer $Time) Set Log Timestamp, in milliseconds
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getPkgId() Obtain Log Package ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPkgId(string $PkgId) Set Log Package ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLog() Obtain Log content
 * @method void setLog(string $Log) Set Log content
 */
class LogContent extends AbstractModel
{
    /**
     * @var integer Log Timestamp, in milliseconds
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Time;

    /**
     * @var string Log Package ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PkgId;

    /**
     * @var string Log content
     */
    public $Log;

    /**
     * @param integer $Time Log Timestamp, in milliseconds
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $PkgId Log Package ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Log Log content
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }
    }
}
