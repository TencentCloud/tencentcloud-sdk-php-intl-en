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
 * @method array getHighLights() Obtain Keywords that meet search criteria are generally highlighted. Only key-value search is supported, not full-text search.	
 * @method void setHighLights(array $HighLights) Set Keywords that meet search criteria are generally highlighted. Only key-value search is supported, not full-text search.	
 * @method string getLogJson() Obtain JSON serialized string of the log content
 * @method void setLogJson(string $LogJson) Set JSON serialized string of the log content
 * @method string getHostName() Obtain Log source host name
 * @method void setHostName(string $HostName) Set Log source host name
 * @method string getRawLog() Obtain Raw log (only available when there is an error in creating the log index).
 * @method void setRawLog(string $RawLog) Set Raw log (only available when there is an error in creating the log index).
 * @method string getIndexStatus() Obtain Cause for log index creation exception. It has a value only when a log index creation exception occurs.
 * @method void setIndexStatus(string $IndexStatus) Set Cause for log index creation exception. It has a value only when a log index creation exception occurs.
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
     * @var array Keywords that meet search criteria are generally highlighted. Only key-value search is supported, not full-text search.	
     */
    public $HighLights;

    /**
     * @var string JSON serialized string of the log content
     */
    public $LogJson;

    /**
     * @var string Log source host name
     */
    public $HostName;

    /**
     * @var string Raw log (only available when there is an error in creating the log index).
     */
    public $RawLog;

    /**
     * @var string Cause for log index creation exception. It has a value only when a log index creation exception occurs.
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
     * @param array $HighLights Keywords that meet search criteria are generally highlighted. Only key-value search is supported, not full-text search.	
     * @param string $LogJson JSON serialized string of the log content
     * @param string $HostName Log source host name
     * @param string $RawLog Raw log (only available when there is an error in creating the log index).
     * @param string $IndexStatus Cause for log index creation exception. It has a value only when a log index creation exception occurs.
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

        if (array_key_exists("HighLights",$param) and $param["HighLights"] !== null) {
            $this->HighLights = [];
            foreach ($param["HighLights"] as $key => $value){
                $obj = new HighLightItem();
                $obj->deserialize($value);
                array_push($this->HighLights, $obj);
            }
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
