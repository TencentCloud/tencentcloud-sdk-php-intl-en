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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Span object.
 *
 * @method string getTraceID() Obtain Trace ID
 * @method void setTraceID(string $TraceID) Set Trace ID
 * @method array getLogs() Obtain Log.
 * @method void setLogs(array $Logs) Set Log.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method SpanProcess getProcess() Obtain Submit application service information.
 * @method void setProcess(SpanProcess $Process) Set Submit application service information.
 * @method integer getTimestamp() Obtain Generated timestamp (ms).
 * @method void setTimestamp(integer $Timestamp) Set Generated timestamp (ms).
 * @method string getOperationName() Obtain Span name.
 * @method void setOperationName(string $OperationName) Set Span name.
 * @method array getReferences() Obtain Association relationship.
 * @method void setReferences(array $References) Set Association relationship.
 * @method integer getStartTime() Obtain Generated timestamp (ms).
 * @method void setStartTime(integer $StartTime) Set Generated timestamp (ms).
 * @method integer getDuration() Obtain Duration (ms).
 * @method void setDuration(integer $Duration) Set Duration (ms).
 * @method string getSpanID() Obtain Span ID
 * @method void setSpanID(string $SpanID) Set Span ID
 * @method integer getStartTimeMillis() Obtain Generated timestamp (ms).
 * @method void setStartTimeMillis(integer $StartTimeMillis) Set Generated timestamp (ms).
 * @method string getParentSpanID() Obtain Parent Span ID
 * @method void setParentSpanID(string $ParentSpanID) Set Parent Span ID
 */
class Span extends AbstractModel
{
    /**
     * @var string Trace ID
     */
    public $TraceID;

    /**
     * @var array Log.
     */
    public $Logs;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var SpanProcess Submit application service information.
     */
    public $Process;

    /**
     * @var integer Generated timestamp (ms).
     */
    public $Timestamp;

    /**
     * @var string Span name.
     */
    public $OperationName;

    /**
     * @var array Association relationship.
     */
    public $References;

    /**
     * @var integer Generated timestamp (ms).
     */
    public $StartTime;

    /**
     * @var integer Duration (ms).
     */
    public $Duration;

    /**
     * @var string Span ID
     */
    public $SpanID;

    /**
     * @var integer Generated timestamp (ms).
     */
    public $StartTimeMillis;

    /**
     * @var string Parent Span ID
     */
    public $ParentSpanID;

    /**
     * @param string $TraceID Trace ID
     * @param array $Logs Log.
     * @param array $Tags Tag.
     * @param SpanProcess $Process Submit application service information.
     * @param integer $Timestamp Generated timestamp (ms).
     * @param string $OperationName Span name.
     * @param array $References Association relationship.
     * @param integer $StartTime Generated timestamp (ms).
     * @param integer $Duration Duration (ms).
     * @param string $SpanID Span ID
     * @param integer $StartTimeMillis Generated timestamp (ms).
     * @param string $ParentSpanID Parent Span ID
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
        if (array_key_exists("TraceID",$param) and $param["TraceID"] !== null) {
            $this->TraceID = $param["TraceID"];
        }

        if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
            $this->Logs = [];
            foreach ($param["Logs"] as $key => $value){
                $obj = new SpanLog();
                $obj->deserialize($value);
                array_push($this->Logs, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new SpanTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new SpanProcess();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new SpanReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SpanID",$param) and $param["SpanID"] !== null) {
            $this->SpanID = $param["SpanID"];
        }

        if (array_key_exists("StartTimeMillis",$param) and $param["StartTimeMillis"] !== null) {
            $this->StartTimeMillis = $param["StartTimeMillis"];
        }

        if (array_key_exists("ParentSpanID",$param) and $param["ParentSpanID"] !== null) {
            $this->ParentSpanID = $param["ParentSpanID"];
        }
    }
}
