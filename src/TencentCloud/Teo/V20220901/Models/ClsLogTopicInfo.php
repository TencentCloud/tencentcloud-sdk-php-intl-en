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
 * The log topic information
 *
 * @method string getTaskName() Obtain Name of the task.
 * @method void setTaskName(string $TaskName) Set Name of the task.
 * @method string getZoneName() Obtain Name of the site.
 * @method void setZoneName(string $ZoneName) Set Name of the site.
 * @method string getLogSetId() Obtain ID of the logset.
 * @method void setLogSetId(string $LogSetId) Set ID of the logset.
 * @method string getTopicId() Obtain ID of the log topic.
 * @method void setTopicId(string $TopicId) Set ID of the log topic.
 * @method string getEntityType() Obtain Type of the task.
 * @method void setEntityType(string $EntityType) Set Type of the task.
 * @method integer getPeriod() Obtain Retention period of the log topic.
 * @method void setPeriod(integer $Period) Set Retention period of the log topic.
 * @method boolean getEnabled() Obtain Whether the log topic is enabled.
 * @method void setEnabled(boolean $Enabled) Set Whether the log topic is enabled.
 * @method string getDeleted() Obtain Whether the log topic is deleted.
 * @method void setDeleted(string $Deleted) Set Whether the log topic is deleted.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getTarget() Obtain Target location. Values:
<li>`cls`: Ship logs to CLS;</li>
<li>`custom_enpoint`: Ship logs to a custom address.</li>
 * @method void setTarget(string $Target) Set Target location. Values:
<li>`cls`: Ship logs to CLS;</li>
<li>`custom_enpoint`: Ship logs to a custom address.</li>
 * @method string getLogSetRegion() Obtain Region of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogSetRegion(string $LogSetRegion) Set Region of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneId() Obtain ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArea() Obtain Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
 * @method string getLogSetType() Obtain 
 * @method void setLogSetType(string $LogSetType) Set 
 */
class ClsLogTopicInfo extends AbstractModel
{
    /**
     * @var string Name of the task.
     */
    public $TaskName;

    /**
     * @var string Name of the site.
     */
    public $ZoneName;

    /**
     * @var string ID of the logset.
     */
    public $LogSetId;

    /**
     * @var string ID of the log topic.
     */
    public $TopicId;

    /**
     * @var string Type of the task.
     */
    public $EntityType;

    /**
     * @var integer Retention period of the log topic.
     */
    public $Period;

    /**
     * @var boolean Whether the log topic is enabled.
     */
    public $Enabled;

    /**
     * @var string Whether the log topic is deleted.
     */
    public $Deleted;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Target location. Values:
<li>`cls`: Ship logs to CLS;</li>
<li>`custom_enpoint`: Ship logs to a custom address.</li>
     */
    public $Target;

    /**
     * @var string Region of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogSetRegion;

    /**
     * @var string ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var string 
     */
    public $LogSetType;

    /**
     * @param string $TaskName Name of the task.
     * @param string $ZoneName Name of the site.
     * @param string $LogSetId ID of the logset.
     * @param string $TopicId ID of the log topic.
     * @param string $EntityType Type of the task.
     * @param integer $Period Retention period of the log topic.
     * @param boolean $Enabled Whether the log topic is enabled.
     * @param string $Deleted Whether the log topic is deleted.
     * @param string $CreateTime Creation time.
     * @param string $Target Target location. Values:
<li>`cls`: Ship logs to CLS;</li>
<li>`custom_enpoint`: Ship logs to a custom address.</li>
     * @param string $LogSetRegion Region of the logset.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneId ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Area Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
     * @param string $LogSetType 
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogSetType",$param) and $param["LogSetType"] !== null) {
            $this->LogSetType = $param["LogSetType"];
        }
    }
}
