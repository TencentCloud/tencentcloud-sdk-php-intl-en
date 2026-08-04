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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log result information
 *
 * @method integer getTime() Obtain Log time, in milliseconds
 * @method void setTime(integer $Time) Set Log time, in milliseconds
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getSource() Obtain Log source IP address
 * @method void setSource(string $Source) Set Log source IP address
 * @method string getFileName() Obtain Log file name
 * @method void setFileName(string $FileName) Set Log file name
 * @method string getPkgId() Obtain ID of Log Upload Request Packet
 * @method void setPkgId(string $PkgId) Set ID of Log Upload Request Packet
 * @method string getPkgLogId() Obtain Log ID in Request Packet
 * @method void setPkgLogId(string $PkgLogId) Set Log ID in Request Packet
 * @method string getLogJson() Obtain JSON serialized string of the log content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogJson(string $LogJson) Set JSON serialized string of the log content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Log source host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Log source host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRawLog() Obtain Raw log (only available when there is an error in creating the log index).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRawLog(string $RawLog) Set Raw log (only available when there is an error in creating the log index).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIndexStatus() Obtain Cause for log index creation exception. It has a value only when a log index creation exception occurs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndexStatus(string $IndexStatus) Set Cause for log index creation exception. It has a value only when a log index creation exception occurs.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogInfo extends AbstractModel
{
    /**
     * @var integer Log time, in milliseconds
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
     * @var string Log source IP address
     */
    public $Source;

    /**
     * @var string Log file name
     */
    public $FileName;

    /**
     * @var string ID of Log Upload Request Packet
     */
    public $PkgId;

    /**
     * @var string Log ID in Request Packet
     */
    public $PkgLogId;

    /**
     * @var string JSON serialized string of the log content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogJson;

    /**
     * @var string Log source host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Raw log (only available when there is an error in creating the log index).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RawLog;

    /**
     * @var string Cause for log index creation exception. It has a value only when a log index creation exception occurs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IndexStatus;

    /**
     * @param integer $Time Log time, in milliseconds
     * @param string $TopicId Log topic ID
     * @param string $TopicName Log topic name
     * @param string $Source Log source IP address
     * @param string $FileName Log file name
     * @param string $PkgId ID of Log Upload Request Packet
     * @param string $PkgLogId Log ID in Request Packet
     * @param string $LogJson JSON serialized string of the log content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostName Log source host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RawLog Raw log (only available when there is an error in creating the log index).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IndexStatus Cause for log index creation exception. It has a value only when a log index creation exception occurs.
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
