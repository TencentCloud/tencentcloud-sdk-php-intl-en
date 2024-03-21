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
 * @method string getTaskName() Obtain The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters.
 * @method void setTaskName(string $TaskName) Set The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters.
 * @method string getTaskType() Obtain The type of the real-time log delivery task. Valid values:
<li>cls: Push to Tencent Cloud CLS;</li>
<li>custom_endpoint: Push to a user-defined HTTP(S) address;</li>
<li>s3: Push to an AWS S3-compatible bucket address.</li>
 * @method void setTaskType(string $TaskType) Set The type of the real-time log delivery task. Valid values:
<li>cls: Push to Tencent Cloud CLS;</li>
<li>custom_endpoint: Push to a user-defined HTTP(S) address;</li>
<li>s3: Push to an AWS S3-compatible bucket address.</li>
 * @method array getEntityList() Obtain The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
 * @method void setEntityList(array $EntityList) Set The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
 * @method string getLogType() Obtain The type of data delivery. Valid values:
<li>domain: Site acceleration log;</li>
<li>application: Layer 4 proxy log;</li>
<li>web-rateLiming: Rate limit and CC attack defense log;</li>
<li>web-attack: Managed rule log;</li>
<li>web-rule: Custom rule log;</li>
<li>web-bot: Bot management log.</li>
 * @method void setLogType(string $LogType) Set The type of data delivery. Valid values:
<li>domain: Site acceleration log;</li>
<li>application: Layer 4 proxy log;</li>
<li>web-rateLiming: Rate limit and CC attack defense log;</li>
<li>web-attack: Managed rule log;</li>
<li>web-rule: Custom rule log;</li>
<li>web-bot: Bot management log.</li>
 * @method string getArea() Obtain The data delivery area. Valid values:
<li>mainland: Within the Chinese mainland;</li>
<li>overseas: Global (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set The data delivery area. Valid values:
<li>mainland: Within the Chinese mainland;</li>
<li>overseas: Global (excluding the Chinese mainland).</li>
 * @method array getFields() Obtain The list of predefined fields for delivery.
 * @method void setFields(array $Fields) Set The list of predefined fields for delivery.
 * @method array getCustomFields() Obtain The list of custom fields for delivery, supporting extracting specified field values from HTTP request headers, response headers, and cookies. Each custom field name must be unique and the maximum number of fields is 200.
 * @method void setCustomFields(array $CustomFields) Set The list of custom fields for delivery, supporting extracting specified field values from HTTP request headers, response headers, and cookies. Each custom field name must be unique and the maximum number of fields is 200.
 * @method array getDeliveryConditions() Obtain Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
 * @method void setDeliveryConditions(array $DeliveryConditions) Set Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
 * @method integer getSample() Obtain The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the sampling ratio is 100%.
 * @method void setSample(integer $Sample) Set The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the sampling ratio is 100%.
 * @method CLSTopic getCLS() Obtain The configuration information of CLS. This parameter is required when TaskType is cls.
 * @method void setCLS(CLSTopic $CLS) Set The configuration information of CLS. This parameter is required when TaskType is cls.
 * @method CustomEndpoint getCustomEndpoint() Obtain The configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set The configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
 * @method S3 getS3() Obtain The configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
 * @method void setS3(S3 $S3) Set The configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
 */
class CreateRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters.
     */
    public $TaskName;

    /**
     * @var string The type of the real-time log delivery task. Valid values:
<li>cls: Push to Tencent Cloud CLS;</li>
<li>custom_endpoint: Push to a user-defined HTTP(S) address;</li>
<li>s3: Push to an AWS S3-compatible bucket address.</li>
     */
    public $TaskType;

    /**
     * @var array The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
     */
    public $EntityList;

    /**
     * @var string The type of data delivery. Valid values:
<li>domain: Site acceleration log;</li>
<li>application: Layer 4 proxy log;</li>
<li>web-rateLiming: Rate limit and CC attack defense log;</li>
<li>web-attack: Managed rule log;</li>
<li>web-rule: Custom rule log;</li>
<li>web-bot: Bot management log.</li>
     */
    public $LogType;

    /**
     * @var string The data delivery area. Valid values:
<li>mainland: Within the Chinese mainland;</li>
<li>overseas: Global (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var array The list of predefined fields for delivery.
     */
    public $Fields;

    /**
     * @var array The list of custom fields for delivery, supporting extracting specified field values from HTTP request headers, response headers, and cookies. Each custom field name must be unique and the maximum number of fields is 200.
     */
    public $CustomFields;

    /**
     * @var array Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
     */
    public $DeliveryConditions;

    /**
     * @var integer The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the sampling ratio is 100%.
     */
    public $Sample;

    /**
     * @var CLSTopic The configuration information of CLS. This parameter is required when TaskType is cls.
     */
    public $CLS;

    /**
     * @var CustomEndpoint The configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
     */
    public $CustomEndpoint;

    /**
     * @var S3 The configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
     */
    public $S3;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $TaskName The name of the real-time log delivery task, which is a combination of numbers, English letters, - and _, containing up to 200 characters.
     * @param string $TaskType The type of the real-time log delivery task. Valid values:
<li>cls: Push to Tencent Cloud CLS;</li>
<li>custom_endpoint: Push to a user-defined HTTP(S) address;</li>
<li>s3: Push to an AWS S3-compatible bucket address.</li>
     * @param array $EntityList The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:
<li>Layer 7 domain: domain.example.com;</li>
<li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
     * @param string $LogType The type of data delivery. Valid values:
<li>domain: Site acceleration log;</li>
<li>application: Layer 4 proxy log;</li>
<li>web-rateLiming: Rate limit and CC attack defense log;</li>
<li>web-attack: Managed rule log;</li>
<li>web-rule: Custom rule log;</li>
<li>web-bot: Bot management log.</li>
     * @param string $Area The data delivery area. Valid values:
<li>mainland: Within the Chinese mainland;</li>
<li>overseas: Global (excluding the Chinese mainland).</li>
     * @param array $Fields The list of predefined fields for delivery.
     * @param array $CustomFields The list of custom fields for delivery, supporting extracting specified field values from HTTP request headers, response headers, and cookies. Each custom field name must be unique and the maximum number of fields is 200.
     * @param array $DeliveryConditions Log delivery filter conditions. If this field is not filled in, all logs will be delivered.
     * @param integer $Sample The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%. If this field is not filled in, the sampling ratio is 100%.
     * @param CLSTopic $CLS The configuration information of CLS. This parameter is required when TaskType is cls.
     * @param CustomEndpoint $CustomEndpoint The configuration information of the custom HTTP service. This parameter is required when TaskType is custom_endpoint.
     * @param S3 $S3 The configuration information of the AWS S3-compatible bucket. This parameter is required when TaskType is s3.
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
