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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRealtimeLogDeliveryTask request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getTaskName() Obtain Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).
 * @method void setTaskName(string $TaskName) Set Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).
 * @method string getTaskType() Obtain Type of a real-time log delivery task. Valid values:
<li>cls: push to Tencent Cloud CLS;</li>
<li>custom_endpoint: push to a custom HTTP(S) address;</li>
<li>s3: push to an AWS S3-compatible bucket address.</li>
 * @method void setTaskType(string $TaskType) Set Type of a real-time log delivery task. Valid values:
<li>cls: push to Tencent Cloud CLS;</li>
<li>custom_endpoint: push to a custom HTTP(S) address;</li>
<li>s3: push to an AWS S3-compatible bucket address.</li>
 * @method array getEntityList() Obtain List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log delivery task. Valid value examples:
<li>L7 domain name: domain.example.com;</li>
<li>L4 proxy instance: sid-2s69eb5wcms7.</li>
 * @method void setEntityList(array $EntityList) Set List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log delivery task. Valid value examples:
<li>L7 domain name: domain.example.com;</li>
<li>L4 proxy instance: sid-2s69eb5wcms7.</li>
 * @method string getLogType() Obtain Dataset type. Valid values:
<li>domain: site acceleration logs;</li>
<li>application: L4 proxy logs;</li>
<li>web-rateLiming: rate limit and CC attack defense logs;</li>
<li>web-attack: managed rule logs;</li>
<li>web-rule: custom rule logs;</li>
<li>web-bot: Bot management logs.</li>
 * @method void setLogType(string $LogType) Set Dataset type. Valid values:
<li>domain: site acceleration logs;</li>
<li>application: L4 proxy logs;</li>
<li>web-rateLiming: rate limit and CC attack defense logs;</li>
<li>web-attack: managed rule logs;</li>
<li>web-rule: custom rule logs;</li>
<li>web-bot: Bot management logs.</li>
 * @method string getArea() Obtain Data area. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Data area. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
 * @method array getFields() Obtain List of predefined fields for delivery.
 * @method void setFields(array $Fields) Set List of predefined fields for delivery.
 * @method array getCustomFields() Obtain The list of custom fields for log delivery, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. Custom field names must be unique. The number of custom fields cannot exceed a maximum of 200. A single real-time log delivery task can configure up to 5 custom fields of the request body type. Currently, only site acceleration logs (LogType=domain) support custom fields.
 * @method void setCustomFields(array $CustomFields) Set The list of custom fields for log delivery, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. Custom field names must be unique. The number of custom fields cannot exceed a maximum of 200. A single real-time log delivery task can configure up to 5 custom fields of the request body type. Currently, only site acceleration logs (LogType=domain) support custom fields.
 * @method array getDeliveryConditions() Obtain Filter criteria of log delivery. If this parameter is not specified, all logs will be shipped.
 * @method void setDeliveryConditions(array $DeliveryConditions) Set Filter criteria of log delivery. If this parameter is not specified, all logs will be shipped.
 * @method integer getSample() Obtain Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not specified, the sampling ratio is 100%.
 * @method void setSample(integer $Sample) Set Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not specified, the sampling ratio is 100%.
 * @method LogFormat getLogFormat() Obtain Output format for log delivery. If this field is not specified, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines;</li>Specifically, when TaskType is 'cls', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.
 * @method void setLogFormat(LogFormat $LogFormat) Set Output format for log delivery. If this field is not specified, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines;</li>Specifically, when TaskType is 'cls', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.
 * @method CLSTopic getCLS() Obtain Configuration information of CLS. This parameter is required when TaskType is cls.
 * @method void setCLS(CLSTopic $CLS) Set Configuration information of CLS. This parameter is required when TaskType is cls.
 * @method CustomEndpoint getCustomEndpoint() Obtain Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
 * @method S3 getS3() Obtain Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
 * @method void setS3(S3 $S3) Set Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
 */
class CreateRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).
     */
    public $TaskName;

    /**
     * @var string Type of a real-time log delivery task. Valid values:
<li>cls: push to Tencent Cloud CLS;</li>
<li>custom_endpoint: push to a custom HTTP(S) address;</li>
<li>s3: push to an AWS S3-compatible bucket address.</li>
     */
    public $TaskType;

    /**
     * @var array List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log delivery task. Valid value examples:
<li>L7 domain name: domain.example.com;</li>
<li>L4 proxy instance: sid-2s69eb5wcms7.</li>
     */
    public $EntityList;

    /**
     * @var string Dataset type. Valid values:
<li>domain: site acceleration logs;</li>
<li>application: L4 proxy logs;</li>
<li>web-rateLiming: rate limit and CC attack defense logs;</li>
<li>web-attack: managed rule logs;</li>
<li>web-rule: custom rule logs;</li>
<li>web-bot: Bot management logs.</li>
     */
    public $LogType;

    /**
     * @var string Data area. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var array List of predefined fields for delivery.
     */
    public $Fields;

    /**
     * @var array The list of custom fields for log delivery, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. Custom field names must be unique. The number of custom fields cannot exceed a maximum of 200. A single real-time log delivery task can configure up to 5 custom fields of the request body type. Currently, only site acceleration logs (LogType=domain) support custom fields.
     */
    public $CustomFields;

    /**
     * @var array Filter criteria of log delivery. If this parameter is not specified, all logs will be shipped.
     */
    public $DeliveryConditions;

    /**
     * @var integer Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not specified, the sampling ratio is 100%.
     */
    public $Sample;

    /**
     * @var LogFormat Output format for log delivery. If this field is not specified, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines;</li>Specifically, when TaskType is 'cls', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.
     */
    public $LogFormat;

    /**
     * @var CLSTopic Configuration information of CLS. This parameter is required when TaskType is cls.
     */
    public $CLS;

    /**
     * @var CustomEndpoint Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
     */
    public $CustomEndpoint;

    /**
     * @var S3 Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
     */
    public $S3;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $TaskName Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).
     * @param string $TaskType Type of a real-time log delivery task. Valid values:
<li>cls: push to Tencent Cloud CLS;</li>
<li>custom_endpoint: push to a custom HTTP(S) address;</li>
<li>s3: push to an AWS S3-compatible bucket address.</li>
     * @param array $EntityList List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log delivery task. Valid value examples:
<li>L7 domain name: domain.example.com;</li>
<li>L4 proxy instance: sid-2s69eb5wcms7.</li>
     * @param string $LogType Dataset type. Valid values:
<li>domain: site acceleration logs;</li>
<li>application: L4 proxy logs;</li>
<li>web-rateLiming: rate limit and CC attack defense logs;</li>
<li>web-attack: managed rule logs;</li>
<li>web-rule: custom rule logs;</li>
<li>web-bot: Bot management logs.</li>
     * @param string $Area Data area. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
     * @param array $Fields List of predefined fields for delivery.
     * @param array $CustomFields The list of custom fields for log delivery, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. Custom field names must be unique. The number of custom fields cannot exceed a maximum of 200. A single real-time log delivery task can configure up to 5 custom fields of the request body type. Currently, only site acceleration logs (LogType=domain) support custom fields.
     * @param array $DeliveryConditions Filter criteria of log delivery. If this parameter is not specified, all logs will be shipped.
     * @param integer $Sample Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not specified, the sampling ratio is 100%.
     * @param LogFormat $LogFormat Output format for log delivery. If this field is not specified, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines;</li>Specifically, when TaskType is 'cls', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.
     * @param CLSTopic $CLS Configuration information of CLS. This parameter is required when TaskType is cls.
     * @param CustomEndpoint $CustomEndpoint Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
     * @param S3 $S3 Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new CustomField();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("DeliveryConditions",$param) and $param["DeliveryConditions"] !== null) {
            $this->DeliveryConditions = [];
            foreach ($param["DeliveryConditions"] as $key => $value){
                $obj = new DeliveryCondition();
                $obj->deserialize($value);
                array_push($this->DeliveryConditions, $obj);
            }
        }

        if (array_key_exists("Sample",$param) and $param["Sample"] !== null) {
            $this->Sample = $param["Sample"];
        }

        if (array_key_exists("LogFormat",$param) and $param["LogFormat"] !== null) {
            $this->LogFormat = new LogFormat();
            $this->LogFormat->deserialize($param["LogFormat"]);
        }

        if (array_key_exists("CLS",$param) and $param["CLS"] !== null) {
            $this->CLS = new CLSTopic();
            $this->CLS->deserialize($param["CLS"]);
        }

        if (array_key_exists("CustomEndpoint",$param) and $param["CustomEndpoint"] !== null) {
            $this->CustomEndpoint = new CustomEndpoint();
            $this->CustomEndpoint->deserialize($param["CustomEndpoint"]);
        }

        if (array_key_exists("S3",$param) and $param["S3"] !== null) {
            $this->S3 = new S3();
            $this->S3->deserialize($param["S3"]);
        }
    }
}
