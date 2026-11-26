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
 * Real-time log delivery task.
 *
 * @method string getTaskId() Obtain <p>ID of the real-time log delivery task.</p>
 * @method void setTaskId(string $TaskId) Set <p>ID of the real-time log delivery task.</p>
 * @method string getTaskName() Obtain <p>Name of the real-time log delivery task.</p>
 * @method void setTaskName(string $TaskName) Set <p>Name of the real-time log delivery task.</p>
 * @method string getDeliveryStatus() Obtain <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled;</li><li>`deleted`: abnormally deleted. Check whether the destination Tencent Cloud CLS log set or log topic has been deleted.</li></ul>
 * @method void setDeliveryStatus(string $DeliveryStatus) Set <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled;</li><li>`deleted`: abnormally deleted. Check whether the destination Tencent Cloud CLS log set or log topic has been deleted.</li></ul>
 * @method string getTaskType() Obtain <p>Type of the real-time log delivery task. Valid values:</p><ul><li>`cls`: deliver to Tencent Cloud CLS;</li><li>`custom_endpoint`: deliver to a custom HTTP(S) endpoint;</li><li>`s3`: deliver to an S3-compatible (SigV4 authentication algorithm compatible) object storage endpoint;</li><li>`aws_s3`: deliver to an AWS S3 bucket;</li><li>`log_analysis`: deliver to EdgeOne Log Analysis.</li></ul>
 * @method void setTaskType(string $TaskType) Set <p>Type of the real-time log delivery task. Valid values:</p><ul><li>`cls`: deliver to Tencent Cloud CLS;</li><li>`custom_endpoint`: deliver to a custom HTTP(S) endpoint;</li><li>`s3`: deliver to an S3-compatible (SigV4 authentication algorithm compatible) object storage endpoint;</li><li>`aws_s3`: deliver to an AWS S3 bucket;</li><li>`log_analysis`: deliver to EdgeOne Log Analysis.</li></ul>
 * @method array getEntityList() Obtain <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>
 * @method void setEntityList(array $EntityList) Set <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>
 * @method string getLogType() Obtain <p>Data delivery type. Valid values:</p><ul><li>`l7-access-logs`: Layer 7 access logs;</li><li>`application`: Layer 4 proxy logs;</li><li>`function`: Edge Function execution logs;</li><li>`web-attack`: managed rule logs;</li><li>`domain`: site acceleration logs;</li><li>`web-rateLiming`: rate limiting and CC attack defense logs;</li><li>`web-rule`: custom rule logs;</li><li>`web-bot`: Bot management logs.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Data delivery type. Valid values:</p><ul><li>`l7-access-logs`: Layer 7 access logs;</li><li>`application`: Layer 4 proxy logs;</li><li>`function`: Edge Function execution logs;</li><li>`web-attack`: managed rule logs;</li><li>`domain`: site acceleration logs;</li><li>`web-rateLiming`: rate limiting and CC attack defense logs;</li><li>`web-rule`: custom rule logs;</li><li>`web-bot`: Bot management logs.</li></ul>
 * @method string getArea() Obtain <p>Data delivery area. Valid values:</p><ul><li>`mainland`: Chinese mainland;</li><li>`overseas`: Global (excluding the Chinese mainland).</li></ul>
 * @method void setArea(string $Area) Set <p>Data delivery area. Valid values:</p><ul><li>`mainland`: Chinese mainland;</li><li>`overseas`: Global (excluding the Chinese mainland).</li></ul>
 * @method array getFields() Obtain <p>List of preset fields to deliver.</p>
 * @method void setFields(array $Fields) Set <p>List of preset fields to deliver.</p>
 * @method array getCustomFields() Obtain <p>List of custom fields to deliver.</p>
 * @method void setCustomFields(array $CustomFields) Set <p>List of custom fields to deliver.</p>
 * @method array getCustomExpressionFields() Obtain <p>List of custom expression fields to deliver.</p>
 * @method void setCustomExpressionFields(array $CustomExpressionFields) Set <p>List of custom expression fields to deliver.</p>
 * @method array getDeliveryConditions() Obtain <p>Filter conditions for log delivery.</p>
 * @method void setDeliveryConditions(array $DeliveryConditions) Set <p>Filter conditions for log delivery.</p>
 * @method integer getSample() Obtain <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.</p>
 * @method void setSample(integer $Sample) Set <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.</p>
 * @method LogFormat getLogFormat() Obtain <p>Output format for log delivery. A null value indicates the default format. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines.</li></ul>
 * @method void setLogFormat(LogFormat $LogFormat) Set <p>Output format for log delivery. A null value indicates the default format. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines.</li></ul>
 * @method CLSTopic getCLS() Obtain <p>Configuration of CLS.</p>
 * @method void setCLS(CLSTopic $CLS) Set <p>Configuration of CLS.</p>
 * @method CustomEndpoint getCustomEndpoint() Obtain <p>Configuration of the custom HTTP service.</p>
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set <p>Configuration of the custom HTTP service.</p>
 * @method S3 getS3() Obtain <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage.</p>
 * @method void setS3(S3 $S3) Set <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage.</p>
 * @method AWSS3 getAWSS3() Obtain <p>Configuration of the AWS S3 object storage. It uses IAM role authorization, requires no long-term key, and applies only to AWS native S3.</p>
 * @method void setAWSS3(AWSS3 $AWSS3) Set <p>Configuration of the AWS S3 object storage. It uses IAM role authorization, requires no long-term key, and applies only to AWS native S3.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 */
class RealtimeLogDeliveryTask extends AbstractModel
{
    /**
     * @var string <p>ID of the real-time log delivery task.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Name of the real-time log delivery task.</p>
     */
    public $TaskName;

    /**
     * @var string <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled;</li><li>`deleted`: abnormally deleted. Check whether the destination Tencent Cloud CLS log set or log topic has been deleted.</li></ul>
     */
    public $DeliveryStatus;

    /**
     * @var string <p>Type of the real-time log delivery task. Valid values:</p><ul><li>`cls`: deliver to Tencent Cloud CLS;</li><li>`custom_endpoint`: deliver to a custom HTTP(S) endpoint;</li><li>`s3`: deliver to an S3-compatible (SigV4 authentication algorithm compatible) object storage endpoint;</li><li>`aws_s3`: deliver to an AWS S3 bucket;</li><li>`log_analysis`: deliver to EdgeOne Log Analysis.</li></ul>
     */
    public $TaskType;

    /**
     * @var array <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>
     */
    public $EntityList;

    /**
     * @var string <p>Data delivery type. Valid values:</p><ul><li>`l7-access-logs`: Layer 7 access logs;</li><li>`application`: Layer 4 proxy logs;</li><li>`function`: Edge Function execution logs;</li><li>`web-attack`: managed rule logs;</li><li>`domain`: site acceleration logs;</li><li>`web-rateLiming`: rate limiting and CC attack defense logs;</li><li>`web-rule`: custom rule logs;</li><li>`web-bot`: Bot management logs.</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>Data delivery area. Valid values:</p><ul><li>`mainland`: Chinese mainland;</li><li>`overseas`: Global (excluding the Chinese mainland).</li></ul>
     */
    public $Area;

    /**
     * @var array <p>List of preset fields to deliver.</p>
     */
    public $Fields;

    /**
     * @var array <p>List of custom fields to deliver.</p>
     */
    public $CustomFields;

    /**
     * @var array <p>List of custom expression fields to deliver.</p>
     */
    public $CustomExpressionFields;

    /**
     * @var array <p>Filter conditions for log delivery.</p>
     */
    public $DeliveryConditions;

    /**
     * @var integer <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.</p>
     */
    public $Sample;

    /**
     * @var LogFormat <p>Output format for log delivery. A null value indicates the default format. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines.</li></ul>
     */
    public $LogFormat;

    /**
     * @var CLSTopic <p>Configuration of CLS.</p>
     */
    public $CLS;

    /**
     * @var CustomEndpoint <p>Configuration of the custom HTTP service.</p>
     */
    public $CustomEndpoint;

    /**
     * @var S3 <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage.</p>
     */
    public $S3;

    /**
     * @var AWSS3 <p>Configuration of the AWS S3 object storage. It uses IAM role authorization, requires no long-term key, and applies only to AWS native S3.</p>
     */
    public $AWSS3;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @param string $TaskId <p>ID of the real-time log delivery task.</p>
     * @param string $TaskName <p>Name of the real-time log delivery task.</p>
     * @param string $DeliveryStatus <p>Status of the real-time log delivery task. Valid values:</p><ul><li>`enabled`: enabled;</li><li>`disabled`: disabled;</li><li>`deleted`: abnormally deleted. Check whether the destination Tencent Cloud CLS log set or log topic has been deleted.</li></ul>
     * @param string $TaskType <p>Type of the real-time log delivery task. Valid values:</p><ul><li>`cls`: deliver to Tencent Cloud CLS;</li><li>`custom_endpoint`: deliver to a custom HTTP(S) endpoint;</li><li>`s3`: deliver to an S3-compatible (SigV4 authentication algorithm compatible) object storage endpoint;</li><li>`aws_s3`: deliver to an AWS S3 bucket;</li><li>`log_analysis`: deliver to EdgeOne Log Analysis.</li></ul>
     * @param array $EntityList <p>List of entities that the real-time log delivery task applies to (Layer 7 domain names or Layer 4 proxy instances). Examples:</p><ul><li>Layer 7 domain name: `domain.example.com`;</li><li>Layer 4 proxy instance: `sid-2s69eb5wcms7`.</li></ul>
     * @param string $LogType <p>Data delivery type. Valid values:</p><ul><li>`l7-access-logs`: Layer 7 access logs;</li><li>`application`: Layer 4 proxy logs;</li><li>`function`: Edge Function execution logs;</li><li>`web-attack`: managed rule logs;</li><li>`domain`: site acceleration logs;</li><li>`web-rateLiming`: rate limiting and CC attack defense logs;</li><li>`web-rule`: custom rule logs;</li><li>`web-bot`: Bot management logs.</li></ul>
     * @param string $Area <p>Data delivery area. Valid values:</p><ul><li>`mainland`: Chinese mainland;</li><li>`overseas`: Global (excluding the Chinese mainland).</li></ul>
     * @param array $Fields <p>List of preset fields to deliver.</p>
     * @param array $CustomFields <p>List of custom fields to deliver.</p>
     * @param array $CustomExpressionFields <p>List of custom expression fields to deliver.</p>
     * @param array $DeliveryConditions <p>Filter conditions for log delivery.</p>
     * @param integer $Sample <p>Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.</p>
     * @param LogFormat $LogFormat <p>Output format for log delivery. A null value indicates the default format. The default format logic is as follows:</p><ul><li>When `TaskType` is `custom_endpoint`, the default format is an array of JSON objects, each JSON object represents a log entry;</li><li>When `TaskType` is `s3`, the default format is JSON Lines.</li></ul>
     * @param CLSTopic $CLS <p>Configuration of CLS.</p>
     * @param CustomEndpoint $CustomEndpoint <p>Configuration of the custom HTTP service.</p>
     * @param S3 $S3 <p>Configuration of the S3-compatible (SigV4 authentication algorithm compatible) object storage.</p>
     * @param AWSS3 $AWSS3 <p>Configuration of the AWS S3 object storage. It uses IAM role authorization, requires no long-term key, and applies only to AWS native S3.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
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

        if (array_key_exists("AWSS3",$param) and $param["AWSS3"] !== null) {
            $this->AWSS3 = new AWSS3();
            $this->AWSS3->deserialize($param["AWSS3"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
