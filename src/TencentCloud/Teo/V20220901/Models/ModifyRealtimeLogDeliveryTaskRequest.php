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
 * ModifyRealtimeLogDeliveryTask request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getTaskId() Obtain <p>ID of the real-time log delivery task.</p>
 * @method void setTaskId(string $TaskId) Set <p>ID of the real-time log delivery task.</p>
 * @method string getTaskName() Obtain <p>Name of the real-time log delivery task. It can contain digits, letters, hyphens (-), and underscores (_), with a maximum of 200 characters. If left empty, the original configuration applies.</p>
 * @method void setTaskName(string $TaskName) Set <p>Name of the real-time log delivery task. It can contain digits, letters, hyphens (-), and underscores (_), with a maximum of 200 characters. If left empty, the original configuration applies.</p>
 * @method string getDeliveryStatus() Obtain <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled.</li></ul>If left empty, the original configuration applies.
 * @method void setDeliveryStatus(string $DeliveryStatus) Set <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled.</li></ul>If left empty, the original configuration applies.
 * @method array getEntityList() Obtain <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>If left empty, the original configuration applies. For valid values, see <a href="https://www.tencentcloud.com/document/product/1145/59024">DescribeL4Proxy</a>.
 * @method void setEntityList(array $EntityList) Set <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>If left empty, the original configuration applies. For valid values, see <a href="https://www.tencentcloud.com/document/product/1145/59024">DescribeL4Proxy</a>.
 * @method array getFields() Obtain <p>List of preset fields to deliver. If left empty, the original configuration applies. For valid values, see `DescribeLogFields`.</p>
 * @method void setFields(array $Fields) Set <p>List of preset fields to deliver. If left empty, the original configuration applies. For valid values, see `DescribeLogFields`.</p>
 * @method array getCustomFields() Obtain <p>List of custom fields to deliver. You can extract specified content from HTTP request headers, response headers, cookies, and request bodies.</p><p>Custom field names must be unique. Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p>
 * @method void setCustomFields(array $CustomFields) Set <p>List of custom fields to deliver. You can extract specified content from HTTP request headers, response headers, cookies, and request bodies.</p><p>Custom field names must be unique. Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p>
 * @method array getCustomExpressionFields() Obtain <p>List of custom expression fields to deliver. By defining the field name and value expression for log delivery, you can deliver personalized real-time log content. For details, see <a href="https://www.tencentcloud.com/document/product/1145/61302">Custom Log Field Expressions</a>.</p><p>Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p><p><strong>Note</strong>: If a field in `CustomExpressionFields` has the same name as a field in `Fields` or `CustomFields`, the value in `CustomExpressionFields` takes precedence.</p>
 * @method void setCustomExpressionFields(array $CustomExpressionFields) Set <p>List of custom expression fields to deliver. By defining the field name and value expression for log delivery, you can deliver personalized real-time log content. For details, see <a href="https://www.tencentcloud.com/document/product/1145/61302">Custom Log Field Expressions</a>.</p><p>Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p><p><strong>Note</strong>: If a field in `CustomExpressionFields` has the same name as a field in `Fields` or `CustomFields`, the value in `CustomExpressionFields` takes precedence.</p>
 * @method array getDeliveryConditions() Obtain <p>Filter conditions for log delivery. If left empty, all logs are delivered.</p>
 * @method void setDeliveryConditions(array $DeliveryConditions) Set <p>Filter conditions for log delivery. If left empty, all logs are delivered.</p>
 * @method integer getSample() Obtain <p>Sampling ratio, in per mille. Value range: 1-1000. For example, 605 means a sampling ratio of 60.5%. If left empty, the original configuration applies.</p>
 * @method void setSample(integer $Sample) Set <p>Sampling ratio, in per mille. Value range: 1-1000. For example, 605 means a sampling ratio of 60.5%. If left empty, the original configuration applies.</p>
 * @method LogFormat getLogFormat() Obtain <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1145/64485">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines;</li></ul><p>Particularly, when `TaskType` is `cls` or `log_analysis`, the only allowed value for `LogFormat.FormatType` is `json`, and other parameters in `LogFormat` will be ignored. It is recommended not to transfer `LogFormat`.</p>
 * @method void setLogFormat(LogFormat $LogFormat) Set <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1145/64485">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines;</li></ul><p>Particularly, when `TaskType` is `cls` or `log_analysis`, the only allowed value for `LogFormat.FormatType` is `json`, and other parameters in `LogFormat` will be ignored. It is recommended not to transfer `LogFormat`.</p>
 * @method CustomEndpoint getCustomEndpoint() Obtain <p>Configuration of the custom HTTP service. If left empty, the original configuration applies.</p>
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set <p>Configuration of the custom HTTP service. If left empty, the original configuration applies.</p>
 * @method S3 getS3() Obtain <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage. If left empty, the original configuration applies.</p>
 * @method void setS3(S3 $S3) Set <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage. If left empty, the original configuration applies.</p>
 * @method AWSS3 getAWSS3() Obtain <p>Configuration of the AWS S3 object storage. If left empty, the original configuration applies.</p>
 * @method void setAWSS3(AWSS3 $AWSS3) Set <p>Configuration of the AWS S3 object storage. If left empty, the original configuration applies.</p>
 */
class ModifyRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>ID of the real-time log delivery task.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Name of the real-time log delivery task. It can contain digits, letters, hyphens (-), and underscores (_), with a maximum of 200 characters. If left empty, the original configuration applies.</p>
     */
    public $TaskName;

    /**
     * @var string <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled.</li></ul>If left empty, the original configuration applies.
     */
    public $DeliveryStatus;

    /**
     * @var array <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>If left empty, the original configuration applies. For valid values, see <a href="https://www.tencentcloud.com/document/product/1145/59024">DescribeL4Proxy</a>.
     */
    public $EntityList;

    /**
     * @var array <p>List of preset fields to deliver. If left empty, the original configuration applies. For valid values, see `DescribeLogFields`.</p>
     */
    public $Fields;

    /**
     * @var array <p>List of custom fields to deliver. You can extract specified content from HTTP request headers, response headers, cookies, and request bodies.</p><p>Custom field names must be unique. Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p>
     */
    public $CustomFields;

    /**
     * @var array <p>List of custom expression fields to deliver. By defining the field name and value expression for log delivery, you can deliver personalized real-time log content. For details, see <a href="https://www.tencentcloud.com/document/product/1145/61302">Custom Log Field Expressions</a>.</p><p>Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p><p><strong>Note</strong>: If a field in `CustomExpressionFields` has the same name as a field in `Fields` or `CustomFields`, the value in `CustomExpressionFields` takes precedence.</p>
     */
    public $CustomExpressionFields;

    /**
     * @var array <p>Filter conditions for log delivery. If left empty, all logs are delivered.</p>
     */
    public $DeliveryConditions;

    /**
     * @var integer <p>Sampling ratio, in per mille. Value range: 1-1000. For example, 605 means a sampling ratio of 60.5%. If left empty, the original configuration applies.</p>
     */
    public $Sample;

    /**
     * @var LogFormat <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1145/64485">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines;</li></ul><p>Particularly, when `TaskType` is `cls` or `log_analysis`, the only allowed value for `LogFormat.FormatType` is `json`, and other parameters in `LogFormat` will be ignored. It is recommended not to transfer `LogFormat`.</p>
     */
    public $LogFormat;

    /**
     * @var CustomEndpoint <p>Configuration of the custom HTTP service. If left empty, the original configuration applies.</p>
     */
    public $CustomEndpoint;

    /**
     * @var S3 <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage. If left empty, the original configuration applies.</p>
     */
    public $S3;

    /**
     * @var AWSS3 <p>Configuration of the AWS S3 object storage. If left empty, the original configuration applies.</p>
     */
    public $AWSS3;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $TaskId <p>ID of the real-time log delivery task.</p>
     * @param string $TaskName <p>Name of the real-time log delivery task. It can contain digits, letters, hyphens (-), and underscores (_), with a maximum of 200 characters. If left empty, the original configuration applies.</p>
     * @param string $DeliveryStatus <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled.</li></ul>If left empty, the original configuration applies.
     * @param array $EntityList <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>If left empty, the original configuration applies. For valid values, see <a href="https://www.tencentcloud.com/document/product/1145/59024">DescribeL4Proxy</a>.
     * @param array $Fields <p>List of preset fields to deliver. If left empty, the original configuration applies. For valid values, see `DescribeLogFields`.</p>
     * @param array $CustomFields <p>List of custom fields to deliver. You can extract specified content from HTTP request headers, response headers, cookies, and request bodies.</p><p>Custom field names must be unique. Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p>
     * @param array $CustomExpressionFields <p>List of custom expression fields to deliver. By defining the field name and value expression for log delivery, you can deliver personalized real-time log content. For details, see <a href="https://www.tencentcloud.com/document/product/1145/61302">Custom Log Field Expressions</a>.</p><p>Custom fields can be added only for Layer 7 access logs (`LogType` = `l7-access-logs` or `domain`).</p><p>The number of custom fields you can configure is subject to a quota. If the quota is insufficient, <a href="https://www.tencentcloud.com/contact-us">contact us</a>.</p><p><strong>Note</strong>: If a field in `CustomExpressionFields` has the same name as a field in `Fields` or `CustomFields`, the value in `CustomExpressionFields` takes precedence.</p>
     * @param array $DeliveryConditions <p>Filter conditions for log delivery. If left empty, all logs are delivered.</p>
     * @param integer $Sample <p>Sampling ratio, in per mille. Value range: 1-1000. For example, 605 means a sampling ratio of 60.5%. If left empty, the original configuration applies.</p>
     * @param LogFormat $LogFormat <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1145/64485">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines;</li></ul><p>Particularly, when `TaskType` is `cls` or `log_analysis`, the only allowed value for `LogFormat.FormatType` is `json`, and other parameters in `LogFormat` will be ignored. It is recommended not to transfer `LogFormat`.</p>
     * @param CustomEndpoint $CustomEndpoint <p>Configuration of the custom HTTP service. If left empty, the original configuration applies.</p>
     * @param S3 $S3 <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage. If left empty, the original configuration applies.</p>
     * @param AWSS3 $AWSS3 <p>Configuration of the AWS S3 object storage. If left empty, the original configuration applies.</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
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

        if (array_key_exists("CustomExpressionFields",$param) and $param["CustomExpressionFields"] !== null) {
            $this->CustomExpressionFields = [];
            foreach ($param["CustomExpressionFields"] as $key => $value){
                $obj = new CustomExpressionField();
                $obj->deserialize($value);
                array_push($this->CustomExpressionFields, $obj);
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

        if (array_key_exists("CustomEndpoint",$param) and $param["CustomEndpoint"] !== null) {
            $this->CustomEndpoint = new CustomEndpoint();
            $this->CustomEndpoint->deserialize($param["CustomEndpoint"]);
        }

        if (array_key_exists("S3",$param) and $param["S3"] !== null) {
            $this->S3 = new S3();
            $this->S3->deserialize($param["S3"]);
        }

        if (array_key_exists("AWSS3",$param) and $param["AWSS3"] !== null) {
            $this->AWSS3 = new AWSS3();
            $this->AWSS3->deserialize($param["AWSS3"]);
        }
    }
}
