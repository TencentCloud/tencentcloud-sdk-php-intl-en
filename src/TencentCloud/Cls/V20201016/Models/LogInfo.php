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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log result information
 *
 * @method integer getTime() Obtain Log time in milliseconds
 * @method void setTime(integer $Time) Set Log time in milliseconds
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getSource() Obtain Log source IP
 * @method void setSource(string $Source) Set Log source IP
 * @method string getFileName() Obtain Log filename
 * @method void setFileName(string $FileName) Set Log filename
 * @method string getPkgId() Obtain ID of the request package for log reporting
 * @method void setPkgId(string $PkgId) Set ID of the request package for log reporting
 * @method string getPkgLogId() Obtain Log ID in request package
 * @method void setPkgLogId(string $PkgLogId) Set Log ID in request package
 * @method string getLogJson() Obtain Serialized JSON string of log content
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogJson(string $LogJson) Set Serialized JSON string of log content
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setHostName(string $HostName) Set Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRawLog() Obtain Raw log (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRawLog(string $RawLog) Set Raw log (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIndexStatus() Obtain The cause of index creation exception (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndexStatus(string $IndexStatus) Set The cause of index creation exception (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogInfo extends AbstractModel
{
    /**
     * @var integer Log time in milliseconds
     */
    public $Time;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var string Log source IP
     */
    public $Source;

    /**
     * @var string Log filename
     */
    public $FileName;

    /**
     * @var string ID of the request package for log reporting
     */
    public $PkgId;

    /**
     * @var string Log ID in request package
     */
    public $PkgLogId;

    /**
     * @var string Serialized JSON string of log content
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogJson;

    /**
     * @var string Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $HostName;

    /**
     * @var string Raw log (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RawLog;

    /**
     * @var string The cause of index creation exception (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndexStatus;

    /**
     * @param integer $Time Log time in milliseconds
     * @param string $TopicId Log topic ID
     * @param string $TopicName Log topic name
     * @param string $Source Log source IP
     * @param string $FileName Log filename
     * @param string $PkgId ID of the request package for log reporting
     * @param string $PkgLogId Log ID in request package
     * @param string $LogJson Serialized JSON string of log content
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $HostName Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RawLog Raw log (this parameter has a value only when an exception occurred while creating indexes for logs).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IndexStatus The cause of index creation exception (this parameter has a value only when an exception occurred while creating indexes for logs).
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("RawLog",$param) and $param["RawLog"] !== null) {
            $this->RawLog = $param["RawLog"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }
    }
}
