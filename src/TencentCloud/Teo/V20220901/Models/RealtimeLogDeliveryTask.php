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
 * @method string getTaskId() Obtain The ID of the real-time log delivery task.
 * @method void setTaskId(string $TaskId) Set The ID of the real-time log delivery task.
 * @method string getTaskName() Obtain The name of the real-time log delivery task.
 * @method void setTaskName(string $TaskName) Set The name of the real-time log delivery task.
 * @method string getDeliveryStatus() Obtain The status of the real-time log delivery task. Valid values:<li>enabled: Enabled;</li><li>disabled: Disabled;</li><li>deleted: Abnormal deletion. Check whether the destination Tencent Cloud CLS log set/log topic has been deleted.</li>
 * @method void setDeliveryStatus(string $DeliveryStatus) Set The status of the real-time log delivery task. Valid values:<li>enabled: Enabled;</li><li>disabled: Disabled;</li><li>deleted: Abnormal deletion. Check whether the destination Tencent Cloud CLS log set/log topic has been deleted.</li>
 * @method string getTaskType() Obtain The type of the real-time log delivery task. Valid values:<li>cls: Push to Tencent Cloud CLS;</li><li>custom_endpoint: Push to a custom HTTP(S) address;</li><li>s3: Push to an AWS S3-compatible bucket address.</li>
 * @method void setTaskType(string $TaskType) Set The type of the real-time log delivery task. Valid values:<li>cls: Push to Tencent Cloud CLS;</li><li>custom_endpoint: Push to a custom HTTP(S) address;</li><li>s3: Push to an AWS S3-compatible bucket address.</li>
 * @method array getEntityList() Obtain The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:<li>Layer 7 domain: domain.example.com;</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
 * @method void setEntityList(array $EntityList) Set The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:<li>Layer 7 domain: domain.example.com;</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
 * @method string getLogType() Obtain The data delivery type. Valid values: <li>domain: Site acceleration log;</li><li>application: Layer 4 proxy log;</li><li>web-rateLiming: Rate limit and CC attack defense log;</li><li>web-attack: Managed rule log;</li><li>web-rule: Custom rule log;</li><li>web-bot: Bot management log.</li>
 * @method void setLogType(string $LogType) Set The data delivery type. Valid values: <li>domain: Site acceleration log;</li><li>application: Layer 4 proxy log;</li><li>web-rateLiming: Rate limit and CC attack defense log;</li><li>web-attack: Managed rule log;</li><li>web-rule: Custom rule log;</li><li>web-bot: Bot management log.</li>
 * @method string getArea() Obtain The data delivery area. Valid values:<li>mainland: Within the Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set The data delivery area. Valid values:<li>mainland: Within the Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland).</li>
 * @method array getFields() Obtain The list of predefined fields for delivery.
 * @method void setFields(array $Fields) Set The list of predefined fields for delivery.
 * @method array getCustomFields() Obtain The list of custom fields for delivery.
 * @method void setCustomFields(array $CustomFields) Set The list of custom fields for delivery.
 * @method array getDeliveryConditions() Obtain Log delivery filter conditions.
 * @method void setDeliveryConditions(array $DeliveryConditions) Set Log delivery filter conditions.
 * @method integer getSample() Obtain The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%.
 * @method void setSample(integer $Sample) Set The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%.
 * @method CLSTopic getCLS() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCLS(CLSTopic $CLS) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method CustomEndpoint getCustomEndpoint() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method S3 getS3() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setS3(S3 $S3) Set Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getUpdateTime() Obtain The update time.
 * @method void setUpdateTime(string $UpdateTime) Set The update time.
 */
class RealtimeLogDeliveryTask extends AbstractModel
{
    /**
     * @var string The ID of the real-time log delivery task.
     */
    public $TaskId;

    /**
     * @var string The name of the real-time log delivery task.
     */
    public $TaskName;

    /**
     * @var string The status of the real-time log delivery task. Valid values:<li>enabled: Enabled;</li><li>disabled: Disabled;</li><li>deleted: Abnormal deletion. Check whether the destination Tencent Cloud CLS log set/log topic has been deleted.</li>
     */
    public $DeliveryStatus;

    /**
     * @var string The type of the real-time log delivery task. Valid values:<li>cls: Push to Tencent Cloud CLS;</li><li>custom_endpoint: Push to a custom HTTP(S) address;</li><li>s3: Push to an AWS S3-compatible bucket address.</li>
     */
    public $TaskType;

    /**
     * @var array The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:<li>Layer 7 domain: domain.example.com;</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
     */
    public $EntityList;

    /**
     * @var string The data delivery type. Valid values: <li>domain: Site acceleration log;</li><li>application: Layer 4 proxy log;</li><li>web-rateLiming: Rate limit and CC attack defense log;</li><li>web-attack: Managed rule log;</li><li>web-rule: Custom rule log;</li><li>web-bot: Bot management log.</li>
     */
    public $LogType;

    /**
     * @var string The data delivery area. Valid values:<li>mainland: Within the Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var array The list of predefined fields for delivery.
     */
    public $Fields;

    /**
     * @var array The list of custom fields for delivery.
     */
    public $CustomFields;

    /**
     * @var array Log delivery filter conditions.
     */
    public $DeliveryConditions;

    /**
     * @var integer The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%.
     */
    public $Sample;

    /**
     * @var CLSTopic Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CLS;

    /**
     * @var CustomEndpoint Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomEndpoint;

    /**
     * @var S3 Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $S3;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The update time.
     */
    public $UpdateTime;

    /**
     * @param string $TaskId The ID of the real-time log delivery task.
     * @param string $TaskName The name of the real-time log delivery task.
     * @param string $DeliveryStatus The status of the real-time log delivery task. Valid values:<li>enabled: Enabled;</li><li>disabled: Disabled;</li><li>deleted: Abnormal deletion. Check whether the destination Tencent Cloud CLS log set/log topic has been deleted.</li>
     * @param string $TaskType The type of the real-time log delivery task. Valid values:<li>cls: Push to Tencent Cloud CLS;</li><li>custom_endpoint: Push to a custom HTTP(S) address;</li><li>s3: Push to an AWS S3-compatible bucket address.</li>
     * @param array $EntityList The list of entities (Layer 7 domains or Layer 4 proxy instances) corresponding to the real-time log delivery task. Valid value examples:<li>Layer 7 domain: domain.example.com;</li><li>Layer 4 proxy instance: sid-2s69eb5wcms7.</li>
     * @param string $LogType The data delivery type. Valid values: <li>domain: Site acceleration log;</li><li>application: Layer 4 proxy log;</li><li>web-rateLiming: Rate limit and CC attack defense log;</li><li>web-attack: Managed rule log;</li><li>web-rule: Custom rule log;</li><li>web-bot: Bot management log.</li>
     * @param string $Area The data delivery area. Valid values:<li>mainland: Within the Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland).</li>
     * @param array $Fields The list of predefined fields for delivery.
     * @param array $CustomFields The list of custom fields for delivery.
     * @param array $DeliveryConditions Log delivery filter conditions.
     * @param integer $Sample The sampling ratio in permille. Value range: 1 to 1000. For example, 605 represents a sampling ratio of 60.5%.
     * @param CLSTopic $CLS Note: This field may return null, indicating that no valid values can be obtained.
     * @param CustomEndpoint $CustomEndpoint Note: This field may return null, indicating that no valid values can be obtained.
     * @param S3 $S3 Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
     * @param string $UpdateTime The update time.
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
