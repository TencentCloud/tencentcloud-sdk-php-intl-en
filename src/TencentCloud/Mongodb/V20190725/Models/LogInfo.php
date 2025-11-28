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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log details.
 *
 * @method string getLogComponent() Obtain Log category.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogComponent(string $LogComponent) Set Log category.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogLevel() Obtain Log level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogLevel(string $LogLevel) Set Log level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogTime() Obtain Log generation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogTime(string $LogTime) Set Log generation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogDetail() Obtain Log details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogDetail(string $LogDetail) Set Log details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogConnection() Obtain Log connection information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogConnection(string $LogConnection) Set Log connection information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogId() Obtain Log ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogId(string $LogId) Set Log ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string Log category.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogComponent;

    /**
     * @var string Log level.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogLevel;

    /**
     * @var string Log generation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogTime;

    /**
     * @var string Log details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogDetail;

    /**
     * @var string Log connection information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogConnection;

    /**
     * @var string Log ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogId;

    /**
     * @param string $LogComponent Log category.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogLevel Log level.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogTime Log generation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogDetail Log details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogConnection Log connection information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogId Log ID.
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
        if (array_key_exists("LogComponent",$param) and $param["LogComponent"] !== null) {
            $this->LogComponent = $param["LogComponent"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("LogDetail",$param) and $param["LogDetail"] !== null) {
            $this->LogDetail = $param["LogDetail"];
        }

        if (array_key_exists("LogConnection",$param) and $param["LogConnection"] !== null) {
            $this->LogConnection = $param["LogConnection"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }
    }
}
