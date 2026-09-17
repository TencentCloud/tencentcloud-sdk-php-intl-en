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
 * CreateRealtimeLogDeliveryTask request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getArea() Obtain <p>Data shipping area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
 * @method void setArea(string $Area) Set <p>Data shipping area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
 * @method string getLogType() Obtain <p>Data delivery type. Available values:</p><ul><li>l7-access-logs: Layer 7 Access Logs;</li><li>application: Layer 4 Proxy Logs;</li><li>function: Function Logs;</li><li>web-attack: Managed Rule Logs.</li></ul><p>The following types of logs are merged into l7-access-logs and no longer support adding:</p><ul><li>domain: Site Acceleration Logs;</li><li>web-rateLiming: Rate Limit and CC Attack Defense Logs;</li><li>web-rule: Custom Rule Logs;</li><li>web-bot: Bot Management Logs.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Data delivery type. Available values:</p><ul><li>l7-access-logs: Layer 7 Access Logs;</li><li>application: Layer 4 Proxy Logs;</li><li>function: Function Logs;</li><li>web-attack: Managed Rule Logs.</li></ul><p>The following types of logs are merged into l7-access-logs and no longer support adding:</p><ul><li>domain: Site Acceleration Logs;</li><li>web-rateLiming: Rate Limit and CC Attack Defense Logs;</li><li>web-rule: Custom Rule Logs;</li><li>web-bot: Bot Management Logs.</li></ul>
 * @method string getTaskName() Obtain <p>Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).</p>
 * @method void setTaskName(string $TaskName) Set <p>Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).</p>
 * @method string getTaskType() Obtain <p>Type of a real-time log shipping task. Valid values:<ul><li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address;</li><li>log_analysis: push to EdgeOne log analytics. This is supported only when LogType = l7-access-logs or web-attack.</li></ul></p>
 * @method void setTaskType(string $TaskType) Set <p>Type of a real-time log shipping task. Valid values:<ul><li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address;</li><li>log_analysis: push to EdgeOne log analytics. This is supported only when LogType = l7-access-logs or web-attack.</li></ul></p>
 * @method array getEntityList() Obtain <p>List of entities corresponding to real-time log delivery tasks. Example values:</p><ul><li>Layer 7 domain: domain.example.com</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7</li><li>Edge function instance: test-zone-2mxigizoh9l9-1257626257</li></ul><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1">DescribeL4Proxy</a></p>
 * @method void setEntityList(array $EntityList) Set <p>List of entities corresponding to real-time log delivery tasks. Example values:</p><ul><li>Layer 7 domain: domain.example.com</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7</li><li>Edge function instance: test-zone-2mxigizoh9l9-1257626257</li></ul><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1">DescribeL4Proxy</a></p>
 * @method array getFields() Obtain <p>Predefined fields for delivery. For reference: <ul><li><a href="https://www.tencentcloud.com/document/product/1552/105791?from_cn_redirect=1">Layer 7 Access Logs (site acceleration log)</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/105792?from_cn_redirect=1">four-layer proxy logs</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/115585?from_cn_redirect=1">edge function logs</a></li></ul></p><p>For reference: DescribeLogFields</p>
 * @method void setFields(array $Fields) Set <p>Predefined fields for delivery. For reference: <ul><li><a href="https://www.tencentcloud.com/document/product/1552/105791?from_cn_redirect=1">Layer 7 Access Logs (site acceleration log)</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/105792?from_cn_redirect=1">four-layer proxy logs</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/115585?from_cn_redirect=1">edge function logs</a></li></ul></p><p>For reference: DescribeLogFields</p>
 * @method array getCustomFields() Obtain <p>Custom fields for delivery support extracting specified content from HTTP request headers, response headers, cookies, and request bodies.<br>Custom field name must be unique. Only Layer 7 access logs (LogType= l7-access-logs or domain) support adding custom fields.<br>The count of custom fields allowed to be configured has a quota limit. If the quota is insufficient, please contact us (https://www.tencentcloud.com/contact-us).</p>
 * @method void setCustomFields(array $CustomFields) Set <p>Custom fields for delivery support extracting specified content from HTTP request headers, response headers, cookies, and request bodies.<br>Custom field name must be unique. Only Layer 7 access logs (LogType= l7-access-logs or domain) support adding custom fields.<br>The count of custom fields allowed to be configured has a quota limit. If the quota is insufficient, please contact us (https://www.tencentcloud.com/contact-us).</p>
 * @method array getCustomExpressionFields() Obtain <p>The list of custom expression fields for submission can be used to implement personalized real-time log content push through custom log push field names and value expressions. For usage details, refer to [Custom Log Field Expressions]().<br>Only Layer 7 Access Logs (LogType= l7-access-logs or domain) support  adding custom fields.<br>There is a quota limit on the count of custom fields that can be configured. If the quota is insufficient, please [contact us](https://www.tencentcloud.com/contact-us).<br>**Note**: If a field named in CustomExpressionFields has the same name as a field in Fields and CustomFields, the value in CustomExpressionFields takes precedence.</p>
 * @method void setCustomExpressionFields(array $CustomExpressionFields) Set <p>The list of custom expression fields for submission can be used to implement personalized real-time log content push through custom log push field names and value expressions. For usage details, refer to [Custom Log Field Expressions]().<br>Only Layer 7 Access Logs (LogType= l7-access-logs or domain) support  adding custom fields.<br>There is a quota limit on the count of custom fields that can be configured. If the quota is insufficient, please [contact us](https://www.tencentcloud.com/contact-us).<br>**Note**: If a field named in CustomExpressionFields has the same name as a field in Fields and CustomFields, the value in CustomExpressionFields takes precedence.</p>
 * @method array getDeliveryConditions() Obtain <p>Filter criteria of log shipping. If this parameter is not input, all logs will be shipped.</p>
 * @method void setDeliveryConditions(array $DeliveryConditions) Set <p>Filter criteria of log shipping. If this parameter is not input, all logs will be shipped.</p>
 * @method integer getSample() Obtain <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not input, the sampling ratio is 100%.</p>
 * @method void setSample(integer $Sample) Set <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not input, the sampling ratio is 100%.</p>
 * @method LogFormat getLogFormat() Obtain <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1552/110448?from_cn_redirect=1">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:<ul><li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When TaskType is 's3', the default format is JSON Lines;</li></ul>Particularly, when TaskType is 'cls' or 'log_analysis', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.</p>
 * @method void setLogFormat(LogFormat $LogFormat) Set <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1552/110448?from_cn_redirect=1">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:<ul><li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When TaskType is 's3', the default format is JSON Lines;</li></ul>Particularly, when TaskType is 'cls' or 'log_analysis', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.</p>
 * @method CLSTopic getCLS() Obtain <p>Configuration information of CLS. This parameter is required when TaskType is cls.</p>
 * @method void setCLS(CLSTopic $CLS) Set <p>Configuration information of CLS. This parameter is required when TaskType is cls.</p>
 * @method CustomEndpoint getCustomEndpoint() Obtain <p>Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.</p>
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set <p>Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.</p>
 * @method S3 getS3() Obtain <p>Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.</p>
 * @method void setS3(S3 $S3) Set <p>Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.</p>
 */
class CreateRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Data shipping area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
     */
    public $Area;

    /**
     * @var string <p>Data delivery type. Available values:</p><ul><li>l7-access-logs: Layer 7 Access Logs;</li><li>application: Layer 4 Proxy Logs;</li><li>function: Function Logs;</li><li>web-attack: Managed Rule Logs.</li></ul><p>The following types of logs are merged into l7-access-logs and no longer support adding:</p><ul><li>domain: Site Acceleration Logs;</li><li>web-rateLiming: Rate Limit and CC Attack Defense Logs;</li><li>web-rule: Custom Rule Logs;</li><li>web-bot: Bot Management Logs.</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).</p>
     */
    public $TaskName;

    /**
     * @var string <p>Type of a real-time log shipping task. Valid values:<ul><li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address;</li><li>log_analysis: push to EdgeOne log analytics. This is supported only when LogType = l7-access-logs or web-attack.</li></ul></p>
     */
    public $TaskType;

    /**
     * @var array <p>List of entities corresponding to real-time log delivery tasks. Example values:</p><ul><li>Layer 7 domain: domain.example.com</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7</li><li>Edge function instance: test-zone-2mxigizoh9l9-1257626257</li></ul><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1">DescribeL4Proxy</a></p>
     */
    public $EntityList;

    /**
     * @var array <p>Predefined fields for delivery. For reference: <ul><li><a href="https://www.tencentcloud.com/document/product/1552/105791?from_cn_redirect=1">Layer 7 Access Logs (site acceleration log)</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/105792?from_cn_redirect=1">four-layer proxy logs</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/115585?from_cn_redirect=1">edge function logs</a></li></ul></p><p>For reference: DescribeLogFields</p>
     */
    public $Fields;

    /**
     * @var array <p>Custom fields for delivery support extracting specified content from HTTP request headers, response headers, cookies, and request bodies.<br>Custom field name must be unique. Only Layer 7 access logs (LogType= l7-access-logs or domain) support adding custom fields.<br>The count of custom fields allowed to be configured has a quota limit. If the quota is insufficient, please contact us (https://www.tencentcloud.com/contact-us).</p>
     */
    public $CustomFields;

    /**
     * @var array <p>The list of custom expression fields for submission can be used to implement personalized real-time log content push through custom log push field names and value expressions. For usage details, refer to [Custom Log Field Expressions]().<br>Only Layer 7 Access Logs (LogType= l7-access-logs or domain) support  adding custom fields.<br>There is a quota limit on the count of custom fields that can be configured. If the quota is insufficient, please [contact us](https://www.tencentcloud.com/contact-us).<br>**Note**: If a field named in CustomExpressionFields has the same name as a field in Fields and CustomFields, the value in CustomExpressionFields takes precedence.</p>
     */
    public $CustomExpressionFields;

    /**
     * @var array <p>Filter criteria of log shipping. If this parameter is not input, all logs will be shipped.</p>
     */
    public $DeliveryConditions;

    /**
     * @var integer <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not input, the sampling ratio is 100%.</p>
     */
    public $Sample;

    /**
     * @var LogFormat <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1552/110448?from_cn_redirect=1">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:<ul><li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When TaskType is 's3', the default format is JSON Lines;</li></ul>Particularly, when TaskType is 'cls' or 'log_analysis', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.</p>
     */
    public $LogFormat;

    /**
     * @var CLSTopic <p>Configuration information of CLS. This parameter is required when TaskType is cls.</p>
     */
    public $CLS;

    /**
     * @var CustomEndpoint <p>Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.</p>
     */
    public $CustomEndpoint;

    /**
     * @var S3 <p>Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.</p>
     */
    public $S3;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Area <p>Data shipping area. Available values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
     * @param string $LogType <p>Data delivery type. Available values:</p><ul><li>l7-access-logs: Layer 7 Access Logs;</li><li>application: Layer 4 Proxy Logs;</li><li>function: Function Logs;</li><li>web-attack: Managed Rule Logs.</li></ul><p>The following types of logs are merged into l7-access-logs and no longer support adding:</p><ul><li>domain: Site Acceleration Logs;</li><li>web-rateLiming: Rate Limit and CC Attack Defense Logs;</li><li>web-rule: Custom Rule Logs;</li><li>web-bot: Bot Management Logs.</li></ul>
     * @param string $TaskName <p>Name of a real-time log delivery task, which can contain up to 200 characters, including digits, English letters, hyphens (-) and underscores (_).</p>
     * @param string $TaskType <p>Type of a real-time log shipping task. Valid values:<ul><li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address;</li><li>log_analysis: push to EdgeOne log analytics. This is supported only when LogType = l7-access-logs or web-attack.</li></ul></p>
     * @param array $EntityList <p>List of entities corresponding to real-time log delivery tasks. Example values:</p><ul><li>Layer 7 domain: domain.example.com</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7</li><li>Edge function instance: test-zone-2mxigizoh9l9-1257626257</li></ul><p>For reference: <a href="https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1">DescribeL4Proxy</a></p>
     * @param array $Fields <p>Predefined fields for delivery. For reference: <ul><li><a href="https://www.tencentcloud.com/document/product/1552/105791?from_cn_redirect=1">Layer 7 Access Logs (site acceleration log)</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/105792?from_cn_redirect=1">four-layer proxy logs</a></li><li><a href="https://www.tencentcloud.com/document/product/1552/115585?from_cn_redirect=1">edge function logs</a></li></ul></p><p>For reference: DescribeLogFields</p>
     * @param array $CustomFields <p>Custom fields for delivery support extracting specified content from HTTP request headers, response headers, cookies, and request bodies.<br>Custom field name must be unique. Only Layer 7 access logs (LogType= l7-access-logs or domain) support adding custom fields.<br>The count of custom fields allowed to be configured has a quota limit. If the quota is insufficient, please contact us (https://www.tencentcloud.com/contact-us).</p>
     * @param array $CustomExpressionFields <p>The list of custom expression fields for submission can be used to implement personalized real-time log content push through custom log push field names and value expressions. For usage details, refer to [Custom Log Field Expressions]().<br>Only Layer 7 Access Logs (LogType= l7-access-logs or domain) support  adding custom fields.<br>There is a quota limit on the count of custom fields that can be configured. If the quota is insufficient, please [contact us](https://www.tencentcloud.com/contact-us).<br>**Note**: If a field named in CustomExpressionFields has the same name as a field in Fields and CustomFields, the value in CustomExpressionFields takes precedence.</p>
     * @param array $DeliveryConditions <p>Filter criteria of log shipping. If this parameter is not input, all logs will be shipped.</p>
     * @param integer $Sample <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%. If this parameter is not input, the sampling ratio is 100%.</p>
     * @param LogFormat $LogFormat <p>Output format for log delivery. For usage details, see <a href="https://www.tencentcloud.com/document/product/1552/110448?from_cn_redirect=1">Custom Log Output Format</a>. If left blank, the default format applies. The default format logic is as follows:<ul><li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When TaskType is 's3', the default format is JSON Lines;</li></ul>Particularly, when TaskType is 'cls' or 'log_analysis', the only allowed value for LogFormat.FormatType is 'json', and other parameters in LogFormat will be ignored. It is recommended not to transfer LogFormat.</p>
     * @param CLSTopic $CLS <p>Configuration information of CLS. This parameter is required when TaskType is cls.</p>
     * @param CustomEndpoint $CustomEndpoint <p>Configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.</p>
     * @param S3 $S3 <p>Configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.</p>
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
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
