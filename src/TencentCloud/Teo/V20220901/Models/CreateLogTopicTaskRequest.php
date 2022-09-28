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
 * CreateLogTopicTask request structure.
 *
 * @method string getLogSetId() Obtain ID of the logset.
 * @method void setLogSetId(string $LogSetId) Set ID of the logset.
 * @method string getLogSetRegion() Obtain Region of the logset.
 * @method void setLogSetRegion(string $LogSetRegion) Set Region of the logset.
 * @method string getTopicName() Obtain Topic name of the logset.
 * @method void setTopicName(string $TopicName) Set Topic name of the logset.
 * @method string getTaskName() Obtain Name of the shipping task.
 * @method void setTaskName(string $TaskName) Set Name of the shipping task.
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getZoneName() Obtain Name of the site.
 * @method void setZoneName(string $ZoneName) Set Name of the site.
 * @method string getEntityType() Obtain Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
 * @method void setEntityType(string $EntityType) Set Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
 * @method integer getPeriod() Obtain Retention period of the log topic. Value range: 1–366 (in days).
 * @method void setPeriod(integer $Period) Set Retention period of the log topic. Value range: 1–366 (in days).
 * @method array getEntityList() Obtain List of shipping entities.
 * @method void setEntityList(array $EntityList) Set List of shipping entities.
 * @method string getArea() Obtain Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland).</li> If this field is not specified, the acceleration region will be determined based on the user’s region.
 * @method void setArea(string $Area) Set Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland).</li> If this field is not specified, the acceleration region will be determined based on the user’s region.
 */
class CreateLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string ID of the logset.
     */
    public $LogSetId;

    /**
     * @var string Region of the logset.
     */
    public $LogSetRegion;

    /**
     * @var string Topic name of the logset.
     */
    public $TopicName;

    /**
     * @var string Name of the shipping task.
     */
    public $TaskName;

    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Name of the site.
     */
    public $ZoneName;

    /**
     * @var string Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
     */
    public $EntityType;

    /**
     * @var integer Retention period of the log topic. Value range: 1–366 (in days).
     */
    public $Period;

    /**
     * @var array List of shipping entities.
     */
    public $EntityList;

    /**
     * @var string Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland).</li> If this field is not specified, the acceleration region will be determined based on the user’s region.
     */
    public $Area;

    /**
     * @param string $LogSetId ID of the logset.
     * @param string $LogSetRegion Region of the logset.
     * @param string $TopicName Topic name of the logset.
     * @param string $TaskName Name of the shipping task.
     * @param string $ZoneId ID of the site.
     * @param string $ZoneName Name of the site.
     * @param string $EntityType Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
     * @param integer $Period Retention period of the log topic. Value range: 1–366 (in days).
     * @param array $EntityList List of shipping entities.
     * @param string $Area Acceleration region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Global (outside the Chinese mainland).</li> If this field is not specified, the acceleration region will be determined based on the user’s region.
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
