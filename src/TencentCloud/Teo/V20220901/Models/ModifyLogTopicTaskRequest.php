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
 * ModifyLogTopicTask request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getLogSetRegion() Obtain Region of the logset.
 * @method void setLogSetRegion(string $LogSetRegion) Set Region of the logset.
 * @method string getLogSetId() Obtain ID of the logset.
 * @method void setLogSetId(string $LogSetId) Set ID of the logset.
 * @method string getTopicId() Obtain ID of the log topic.
 * @method void setTopicId(string $TopicId) Set ID of the log topic.
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
 * @method string getTaskName() Obtain Name of the shipping task.
 * @method void setTaskName(string $TaskName) Set Name of the shipping task.
 * @method string getTopicName() Obtain The new topic name. If you do not specify this field, no changes will be made.
 * @method void setTopicName(string $TopicName) Set The new topic name. If you do not specify this field, no changes will be made.
 * @method string getLogSetName() Obtain The new logset name.
 * @method void setLogSetName(string $LogSetName) Set The new logset name.
 * @method integer getPeriod() Obtain The retention period of the updated logset.
 * @method void setPeriod(integer $Period) Set The retention period of the updated logset.
 * @method array getDropEntityList() Obtain List of shipping entities to be deleted.
 * @method void setDropEntityList(array $DropEntityList) Set List of shipping entities to be deleted.
 * @method array getAddedEntityList() Obtain List of shipping entities to be added.
 * @method void setAddedEntityList(array $AddedEntityList) Set List of shipping entities to be added.
 */
class ModifyLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Region of the logset.
     */
    public $LogSetRegion;

    /**
     * @var string ID of the logset.
     */
    public $LogSetId;

    /**
     * @var string ID of the log topic.
     */
    public $TopicId;

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
     * @var string Name of the shipping task.
     */
    public $TaskName;

    /**
     * @var string The new topic name. If you do not specify this field, no changes will be made.
     */
    public $TopicName;

    /**
     * @var string The new logset name.
     */
    public $LogSetName;

    /**
     * @var integer The retention period of the updated logset.
     */
    public $Period;

    /**
     * @var array List of shipping entities to be deleted.
     */
    public $DropEntityList;

    /**
     * @var array List of shipping entities to be added.
     */
    public $AddedEntityList;

    /**
     * @param string $ZoneId ID of the site.
     * @param string $LogSetRegion Region of the logset.
     * @param string $LogSetId ID of the logset.
     * @param string $TopicId ID of the log topic.
     * @param string $EntityType Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
     * @param string $TaskName Name of the shipping task.
     * @param string $TopicName The new topic name. If you do not specify this field, no changes will be made.
     * @param string $LogSetName The new logset name.
     * @param integer $Period The retention period of the updated logset.
     * @param array $DropEntityList List of shipping entities to be deleted.
     * @param array $AddedEntityList List of shipping entities to be added.
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

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("DropEntityList",$param) and $param["DropEntityList"] !== null) {
            $this->DropEntityList = $param["DropEntityList"];
        }

        if (array_key_exists("AddedEntityList",$param) and $param["AddedEntityList"] !== null) {
            $this->AddedEntityList = $param["AddedEntityList"];
        }
    }
}
