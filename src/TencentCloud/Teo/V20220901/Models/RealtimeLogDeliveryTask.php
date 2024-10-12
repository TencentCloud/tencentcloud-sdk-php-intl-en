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
 * Real-time log delivery task
 *
 * @method string getTaskId() Obtain ID of a real-time log shipping task.
 * @method void setTaskId(string $TaskId) Set ID of a real-time log shipping task.
 * @method string getTaskName() Obtain Name of a real-time log shipping task.
 * @method void setTaskName(string $TaskName) Set Name of a real-time log shipping task.
 * @method string getDeliveryStatus() Obtain Status of a real-time log shipping task. Valid values: <li>enabled: enabled;</li><li>disabled: disabled;</li><li>deleted: deleted abnormally. Check whether the destination log set/log topic of Tencent Cloud CLS has been deleted.</li>
 * @method void setDeliveryStatus(string $DeliveryStatus) Set Status of a real-time log shipping task. Valid values: <li>enabled: enabled;</li><li>disabled: disabled;</li><li>deleted: deleted abnormally. Check whether the destination log set/log topic of Tencent Cloud CLS has been deleted.</li>
 * @method string getTaskType() Obtain Type of a real-time log shipping task. Valid values:<li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address.</li>
 * @method void setTaskType(string $TaskType) Set Type of a real-time log shipping task. Valid values:<li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address.</li>
 * @method array getEntityList() Obtain List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log shipping task. Valid value examples: <li>L7 domain name: domain.example.com;</li><li>L4 proxy instance: sid-2s69eb5wcms7.</li>	
 * @method void setEntityList(array $EntityList) Set List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log shipping task. Valid value examples: <li>L7 domain name: domain.example.com;</li><li>L4 proxy instance: sid-2s69eb5wcms7.</li>	
 * @method string getLogType() Obtain Data shipping type. Valid values: <li>domain: site acceleration logs;</li><li>application: L4 proxy logs;</li><li>web-rateLiming: rate limiting and CC attack defense logs;</li><li>web-attack: managed rule logs;</li><li>web-rule: custom rule logs;</li><li>web-bot: Bot management logs.</li>
 * @method void setLogType(string $LogType) Set Data shipping type. Valid values: <li>domain: site acceleration logs;</li><li>application: L4 proxy logs;</li><li>web-rateLiming: rate limiting and CC attack defense logs;</li><li>web-attack: managed rule logs;</li><li>web-rule: custom rule logs;</li><li>web-bot: Bot management logs.</li>
 * @method string getArea() Obtain Data shipping area. Valid values:<li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Data shipping area. Valid values:<li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li>
 * @method array getFields() Obtain List of predefined fields for shipping.
 * @method void setFields(array $Fields) Set List of predefined fields for shipping.
 * @method array getCustomFields() Obtain List of custom fields for shipping.
 * @method void setCustomFields(array $CustomFields) Set List of custom fields for shipping.
 * @method array getDeliveryConditions() Obtain Filter criteria of log shipping.
 * @method void setDeliveryConditions(array $DeliveryConditions) Set Filter criteria of log shipping.
 * @method integer getSample() Obtain Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.
 * @method void setSample(integer $Sample) Set Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.
 * @method LogFormat getLogFormat() Obtain Output format for log delivery. When the output parameter is null, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines. </li>
Note: This field may return 'null', which indicates a failure to obtain a valid value.
 * @method void setLogFormat(LogFormat $LogFormat) Set Output format for log delivery. When the output parameter is null, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines. </li>
Note: This field may return 'null', which indicates a failure to obtain a valid value.
 * @method CLSTopic getCLS() Obtain Configuration information of the CLS.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setCLS(CLSTopic $CLS) Set Configuration information of the CLS.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method CustomEndpoint getCustomEndpoint() Obtain Configuration information of the custom HTTP service.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set Configuration information of the custom HTTP service.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method S3 getS3() Obtain Configuration information of the AWS S3-compatible bucket.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setS3(S3 $S3) Set Configuration information of the AWS S3-compatible bucket.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class RealtimeLogDeliveryTask extends AbstractModel
{
    /**
     * @var string ID of a real-time log shipping task.
     */
    public $TaskId;

    /**
     * @var string Name of a real-time log shipping task.
     */
    public $TaskName;

    /**
     * @var string Status of a real-time log shipping task. Valid values: <li>enabled: enabled;</li><li>disabled: disabled;</li><li>deleted: deleted abnormally. Check whether the destination log set/log topic of Tencent Cloud CLS has been deleted.</li>
     */
    public $DeliveryStatus;

    /**
     * @var string Type of a real-time log shipping task. Valid values:<li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address.</li>
     */
    public $TaskType;

    /**
     * @var array List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log shipping task. Valid value examples: <li>L7 domain name: domain.example.com;</li><li>L4 proxy instance: sid-2s69eb5wcms7.</li>	
     */
    public $EntityList;

    /**
     * @var string Data shipping type. Valid values: <li>domain: site acceleration logs;</li><li>application: L4 proxy logs;</li><li>web-rateLiming: rate limiting and CC attack defense logs;</li><li>web-attack: managed rule logs;</li><li>web-rule: custom rule logs;</li><li>web-bot: Bot management logs.</li>
     */
    public $LogType;

    /**
     * @var string Data shipping area. Valid values:<li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var array List of predefined fields for shipping.
     */
    public $Fields;

    /**
     * @var array List of custom fields for shipping.
     */
    public $CustomFields;

    /**
     * @var array Filter criteria of log shipping.
     */
    public $DeliveryConditions;

    /**
     * @var integer Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.
     */
    public $Sample;

    /**
     * @var LogFormat Output format for log delivery. When the output parameter is null, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines. </li>
Note: This field may return 'null', which indicates a failure to obtain a valid value.
     */
    public $LogFormat;

    /**
     * @var CLSTopic Configuration information of the CLS.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $CLS;

    /**
     * @var CustomEndpoint Configuration information of the custom HTTP service.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $CustomEndpoint;

    /**
     * @var S3 Configuration information of the AWS S3-compatible bucket.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $S3;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param string $TaskId ID of a real-time log shipping task.
     * @param string $TaskName Name of a real-time log shipping task.
     * @param string $DeliveryStatus Status of a real-time log shipping task. Valid values: <li>enabled: enabled;</li><li>disabled: disabled;</li><li>deleted: deleted abnormally. Check whether the destination log set/log topic of Tencent Cloud CLS has been deleted.</li>
     * @param string $TaskType Type of a real-time log shipping task. Valid values:<li>cls: push to Tencent Cloud CLS;</li><li>custom_endpoint: push to a custom HTTP(S) address;</li><li>s3: push to an AWS S3-compatible bucket address.</li>
     * @param array $EntityList List of entities (L7 domain names or L4 proxy instances) corresponding to a real-time log shipping task. Valid value examples: <li>L7 domain name: domain.example.com;</li><li>L4 proxy instance: sid-2s69eb5wcms7.</li>	
     * @param string $LogType Data shipping type. Valid values: <li>domain: site acceleration logs;</li><li>application: L4 proxy logs;</li><li>web-rateLiming: rate limiting and CC attack defense logs;</li><li>web-attack: managed rule logs;</li><li>web-rule: custom rule logs;</li><li>web-bot: Bot management logs.</li>
     * @param string $Area Data shipping area. Valid values:<li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li>
     * @param array $Fields List of predefined fields for shipping.
     * @param array $CustomFields List of custom fields for shipping.
     * @param array $DeliveryConditions Filter criteria of log shipping.
     * @param integer $Sample Sampling ratio in permille. Value range: 1-1000. For example, 605 indicates a sampling ratio of 60.5%.
     * @param LogFormat $LogFormat Output format for log delivery. When the output parameter is null, the default format is used, which works as follows:
<li>When TaskType is 'custom_endpoint', the default format is an array of JSON objects, with each JSON object representing a log entry;</li>
<li>When TaskType is 's3', the default format is JSON Lines. </li>
Note: This field may return 'null', which indicates a failure to obtain a valid value.
     * @param CLSTopic $CLS Configuration information of the CLS.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param CustomEndpoint $CustomEndpoint Configuration information of the custom HTTP service.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param S3 $S3 Configuration information of the AWS S3-compatible bucket.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
