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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log information for log analysis
 *
 * @method integer getTimestamp() Obtain Log generation time point, using unix millisecond-level timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Log generation time point, using unix millisecond-level timestamp.
 * @method string getLogJson() Obtain Specific contents of the log, using JSON String Format.
 * @method void setLogJson(string $LogJson) Set Specific contents of the log, using JSON String Format.
 */
class LogItem extends AbstractModel
{
    /**
     * @var integer Log generation time point, using unix millisecond-level timestamp.
     */
    public $Timestamp;

    /**
     * @var string Specific contents of the log, using JSON String Format.
     */
    public $LogJson;

    /**
     * @param integer $Timestamp Log generation time point, using unix millisecond-level timestamp.
     * @param string $LogJson Specific contents of the log, using JSON String Format.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }
    }
}
