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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event management - event entity.
 *
 * @method string getName() Obtain Event name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Event name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventType() Obtain Event type GENERAL, TIME_SERIES.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventType(string $EventType) Set Event type GENERAL, TIME_SERIES.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeToLive() Obtain Survival time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeToLive(integer $TimeToLive) Set Survival time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Lifetime unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Lifetime unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventSubType() Obtain Event segmentation type: SECOND, MIN, HOUR, DAY.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventSubType(string $EventSubType) Set Event segmentation type: SECOND, MIN, HOUR, DAY.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventBroadcastType() Obtain Event BROADCAST type: SINGLE, BROADCAST.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventBroadcastType(string $EventBroadcastType) Set Event BROADCAST type: SINGLE, BROADCAST.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDimensionFormat() Obtain Time format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDimensionFormat(string $DimensionFormat) Set Time format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreationTs() Obtain Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreationTs(string $CreationTs) Set Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwner() Obtain Event owner.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwner(string $Owner) Set Event owner.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProperties() Obtain Attribute.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProperties(string $Properties) Set Attribute.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getListeners() Obtain Event listener information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListeners(array $Listeners) Set Event listener information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class EventDsDto extends AbstractModel
{
    /**
     * @var string Event name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Event type GENERAL, TIME_SERIES.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventType;

    /**
     * @var integer Survival time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeToLive;

    /**
     * @var string Lifetime unit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @var string Event segmentation type: SECOND, MIN, HOUR, DAY.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventSubType;

    /**
     * @var string Event BROADCAST type: SINGLE, BROADCAST.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventBroadcastType;

    /**
     * @var string Time format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DimensionFormat;

    /**
     * @var string Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreationTs;

    /**
     * @var string Event owner.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Owner;

    /**
     * @var string Attribute.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Properties;

    /**
     * @var string Description information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var array Event listener information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Listeners;

    /**
     * @var string Project ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @param string $Name Event name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventType Event type GENERAL, TIME_SERIES.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeToLive Survival time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Lifetime unit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventSubType Event segmentation type: SECOND, MIN, HOUR, DAY.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventBroadcastType Event BROADCAST type: SINGLE, BROADCAST.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DimensionFormat Time format.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreationTs Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Owner Event owner.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Properties Attribute.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description information

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Listeners Event listener information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name.

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new EventListenerDTO();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
