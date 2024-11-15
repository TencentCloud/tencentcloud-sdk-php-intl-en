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
 * ModifyRealtimeLogDeliveryTask request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getTaskId() Obtain The ID of the real-time log delivery task.
 * @method void setTaskId(string $TaskId) Set The ID of the real-time log delivery task.
 * @method string getTaskName() Obtain The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters. If this field is not filled in, the original configuration will be retained.
 * @method void setTaskName(string $TaskName) Set The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters. If this field is not filled in, the original configuration will be retained.
 * @method string getDeliveryStatus() Obtain The status of the real-time log delivery task. Valid values:
<li>enabled: Enabled;</li>
<li>disabled: Disabled.</li>If this field is not filled in, the original configuration will be retained.
 * @method void setDeliveryStatus(string $DeliveryStatus) Set The status of the real-time log delivery task. Valid values:
<li>enabled: Enabled;</li>
<li>disabled: Disabled.</li>If this field is not filled in, the original configuration will be retained.
 * @method array getEntityList() Obtain The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>If this field is not filled in, the original configuration will be retained.
 * @method void setEntityList(array $EntityList) Set The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>If this field is not filled in, the original configuration will be retained.
 * @method array getFields() Obtain The list of predefined fields for delivery. If this field is not filled in, the original configuration will be retained.
 * @method void setFields(array $Fields) Set The list of predefined fields for delivery. If this field is not filled in, the original configuration will be retained.
 * @method array getCustomFields() Obtain The list of custom fields for shipping, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. If this parameter is not filled in, the original configuration will be retained. The name of each custom field should be unique and the maximum number of fields is 200. Up to 5 custom fields of the request body type can be added for a single real-time log push task. Currently, adding custom fields is supported only for site acceleration logs (LogType=domain).
 * @method void setCustomFields(array $CustomFields) Set The list of custom fields for shipping, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. If this parameter is not filled in, the original configuration will be retained. The name of each custom field should be unique and the maximum number of fields is 200. Up to 5 custom fields of the request body type can be added for a single real-time log push task. Currently, adding custom fields is supported only for site acceleration logs (LogType=domain).
 * @method array getDeliveryConditions() Obtain Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
 * @method void setDeliveryConditions(array $DeliveryConditions) Set Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
 * @method integer getSample() Obtain The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the original configuration will be retained.
 * @method void setSample(integer $Sample) Set The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the original configuration will be retained.
 * @method LogFormat getLogFormat() Obtain Output format for log delivery. If this field is not specified, the original configuration will be retained. Specifically, when TaskType is cls, the value of LogFormat.FormatType can only be json, and other parameters in LogFormat will be ignored. It is recommended not to input LogFormat.
 * @method void setLogFormat(LogFormat $LogFormat) Set Output format for log delivery. If this field is not specified, the original configuration will be retained. Specifically, when TaskType is cls, the value of LogFormat.FormatType can only be json, and other parameters in LogFormat will be ignored. It is recommended not to input LogFormat.
 * @method CustomEndpoint getCustomEndpoint() Obtain The configuration information of the custom HTTP service. If this field is not filled in, the original configuration will be retained.
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set The configuration information of the custom HTTP service. If this field is not filled in, the original configuration will be retained.
 * @method S3 getS3() Obtain The configuration information of the AWS S3-compatible bucket. If this field is not filled in, the original configuration will be retained.
 * @method void setS3(S3 $S3) Set The configuration information of the AWS S3-compatible bucket. If this field is not filled in, the original configuration will be retained.
 */
class ModifyRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string The ID of the real-time log delivery task.
     */
    public $TaskId;

    /**
     * @var string The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters. If this field is not filled in, the original configuration will be retained.
     */
    public $TaskName;

    /**
     * @var string The status of the real-time log delivery task. Valid values:
<li>enabled: Enabled;</li>
<li>disabled: Disabled.</li>If this field is not filled in, the original configuration will be retained.
     */
    public $DeliveryStatus;

    /**
     * @var array The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>If this field is not filled in, the original configuration will be retained.
     */
    public $EntityList;

    /**
     * @var array The list of predefined fields for delivery. If this field is not filled in, the original configuration will be retained.
     */
    public $Fields;

    /**
     * @var array The list of custom fields for shipping, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. If this parameter is not filled in, the original configuration will be retained. The name of each custom field should be unique and the maximum number of fields is 200. Up to 5 custom fields of the request body type can be added for a single real-time log push task. Currently, adding custom fields is supported only for site acceleration logs (LogType=domain).
     */
    public $CustomFields;

    /**
     * @var array Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
     */
    public $DeliveryConditions;

    /**
     * @var integer The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the original configuration will be retained.
     */
    public $Sample;

    /**
     * @var LogFormat Output format for log delivery. If this field is not specified, the original configuration will be retained. Specifically, when TaskType is cls, the value of LogFormat.FormatType can only be json, and other parameters in LogFormat will be ignored. It is recommended not to input LogFormat.
     */
    public $LogFormat;

    /**
     * @var CustomEndpoint The configuration information of the custom HTTP service. If this field is not filled in, the original configuration will be retained.
     */
    public $CustomEndpoint;

    /**
     * @var S3 The configuration information of the AWS S3-compatible bucket. If this field is not filled in, the original configuration will be retained.
     */
    public $S3;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $TaskId The ID of the real-time log delivery task.
     * @param string $TaskName The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters. If this field is not filled in, the original configuration will be retained.
     * @param string $DeliveryStatus The status of the real-time log delivery task. Valid values:
<li>enabled: Enabled;</li>
<li>disabled: Disabled.</li>If this field is not filled in, the original configuration will be retained.
     * @param array $EntityList The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>If this field is not filled in, the original configuration will be retained.
     * @param array $Fields The list of predefined fields for delivery. If this field is not filled in, the original configuration will be retained.
     * @param array $CustomFields The list of custom fields for shipping, which supports extracting specified content from HTTP request headers, response headers, cookies, and request bodies. If this parameter is not filled in, the original configuration will be retained. The name of each custom field should be unique and the maximum number of fields is 200. Up to 5 custom fields of the request body type can be added for a single real-time log push task. Currently, adding custom fields is supported only for site acceleration logs (LogType=domain).
     * @param array $DeliveryConditions Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
     * @param integer $Sample The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the original configuration will be retained.
     * @param LogFormat $LogFormat Output format for log delivery. If this field is not specified, the original configuration will be retained. Specifically, when TaskType is cls, the value of LogFormat.FormatType can only be json, and other parameters in LogFormat will be ignored. It is recommended not to input LogFormat.
     * @param CustomEndpoint $CustomEndpoint The configuration information of the custom HTTP service. If this field is not filled in, the original configuration will be retained.
     * @param S3 $S3 The configuration information of the AWS S3-compatible bucket. If this field is not filled in, the original configuration will be retained.
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
    }
}
