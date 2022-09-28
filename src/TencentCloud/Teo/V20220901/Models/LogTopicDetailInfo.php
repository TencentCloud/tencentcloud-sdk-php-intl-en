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
 * Details of the shipping task
 *
 * @method string getTaskName() Obtain Name of the shipping task.
 * @method void setTaskName(string $TaskName) Set Name of the shipping task.
 * @method string getLogSetRegion() Obtain Region of the logset.
 * @method void setLogSetRegion(string $LogSetRegion) Set Region of the logset.
 * @method string getEntityType() Obtain Type of the shipping task.
 * @method void setEntityType(string $EntityType) Set Type of the shipping task.
 * @method array getEntityList() Obtain List of tasks.
 * @method void setEntityList(array $EntityList) Set List of tasks.
 * @method string getLogSetId() Obtain ID of the logset.
 * @method void setLogSetId(string $LogSetId) Set ID of the logset.
 * @method string getLogSetName() Obtain Name of the logset.
 * @method void setLogSetName(string $LogSetName) Set Name of the logset.
 * @method string getTopicId() Obtain Topic ID of the shipping task.
 * @method void setTopicId(string $TopicId) Set Topic ID of the shipping task.
 * @method string getTopicName() Obtain Topic name of the shipping task.
 * @method void setTopicName(string $TopicName) Set Topic name of the shipping task.
 * @method integer getPeriod() Obtain Retention period of the shipping task topic. Unit: day.
 * @method void setPeriod(integer $Period) Set Retention period of the shipping task topic. Unit: day.
 * @method boolean getEnabled() Obtain Whether the shipping task is enabled.
 * @method void setEnabled(boolean $Enabled) Set Whether the shipping task is enabled.
 * @method string getCreateTime() Obtain Creation time in the format of YYYY-mm-dd HH:MM:SS.
 * @method void setCreateTime(string $CreateTime) Set Creation time in the format of YYYY-mm-dd HH:MM:SS.
 * @method string getArea() Obtain Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
 * @method string getZoneId() Obtain ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneName() Obtain Name of the site.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneName(string $ZoneName) Set Name of the site.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeleted() Obtain Whether the shipping task is deleted. Values:
<li>`yes`: The shipping task is deleted;</li>
<li>`no`: The shipping task is not deleted.</li>
 * @method void setDeleted(string $Deleted) Set Whether the shipping task is deleted. Values:
<li>`yes`: The shipping task is deleted;</li>
<li>`no`: The shipping task is not deleted.</li>
 */
class LogTopicDetailInfo extends AbstractModel
{
    /**
     * @var string Name of the shipping task.
     */
    public $TaskName;

    /**
     * @var string Region of the logset.
     */
    public $LogSetRegion;

    /**
     * @var string Type of the shipping task.
     */
    public $EntityType;

    /**
     * @var array List of tasks.
     */
    public $EntityList;

    /**
     * @var string ID of the logset.
     */
    public $LogSetId;

    /**
     * @var string Name of the logset.
     */
    public $LogSetName;

    /**
     * @var string Topic ID of the shipping task.
     */
    public $TopicId;

    /**
     * @var string Topic name of the shipping task.
     */
    public $TopicName;

    /**
     * @var integer Retention period of the shipping task topic. Unit: day.
     */
    public $Period;

    /**
     * @var boolean Whether the shipping task is enabled.
     */
    public $Enabled;

    /**
     * @var string Creation time in the format of YYYY-mm-dd HH:MM:SS.
     */
    public $CreateTime;

    /**
     * @var string Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var string ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Name of the site.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneName;

    /**
     * @var string Whether the shipping task is deleted. Values:
<li>`yes`: The shipping task is deleted;</li>
<li>`no`: The shipping task is not deleted.</li>
     */
    public $Deleted;

    /**
     * @param string $TaskName Name of the shipping task.
     * @param string $LogSetRegion Region of the logset.
     * @param string $EntityType Type of the shipping task.
     * @param array $EntityList List of tasks.
     * @param string $LogSetId ID of the logset.
     * @param string $LogSetName Name of the logset.
     * @param string $TopicId Topic ID of the shipping task.
     * @param string $TopicName Topic name of the shipping task.
     * @param integer $Period Retention period of the shipping task topic. Unit: day.
     * @param boolean $Enabled Whether the shipping task is enabled.
     * @param string $CreateTime Creation time in the format of YYYY-mm-dd HH:MM:SS.
     * @param string $Area Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland).</li>
     * @param string $ZoneId ID of the site.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneName Name of the site.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Deleted Whether the shipping task is deleted. Values:
<li>`yes`: The shipping task is deleted;</li>
<li>`no`: The shipping task is not deleted.</li>
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

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
