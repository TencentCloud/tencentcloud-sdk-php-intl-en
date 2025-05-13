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
 * Event listener information.
 *
 * @method string getKey() Obtain Keyword, generally the task id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Keyword, generally the task id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain REST_API,KAFKA
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set REST_API,KAFKA
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreationTs() Obtain Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreationTs(string $CreationTs) Set Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPropertiesList() Obtain Configuration information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPropertiesList(array $PropertiesList) Set Configuration information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventName() Obtain Event name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventName(string $EventName) Set Event name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EventListenerTaskInfo getTaskInfo() Obtain Listener task information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskInfo(EventListenerTaskInfo $TaskInfo) Set Listener task information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventProjectId() Obtain Project id to which the event belongs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventProjectId(string $EventProjectId) Set Project id to which the event belongs.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EventListenerDTO extends AbstractModel
{
    /**
     * @var string Keyword, generally the task id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string REST_API,KAFKA
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreationTs;

    /**
     * @var array Configuration information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PropertiesList;

    /**
     * @var string Event name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventName;

    /**
     * @var EventListenerTaskInfo Listener task information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskInfo;

    /**
     * @var string Project id to which the event belongs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventProjectId;

    /**
     * @param string $Key Keyword, generally the task id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type REST_API,KAFKA
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreationTs Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PropertiesList Configuration information

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventName Event name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EventListenerTaskInfo $TaskInfo Listener task information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventProjectId Project id to which the event belongs.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("PropertiesList",$param) and $param["PropertiesList"] !== null) {
            $this->PropertiesList = [];
            foreach ($param["PropertiesList"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->PropertiesList, $obj);
            }
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new EventListenerTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("EventProjectId",$param) and $param["EventProjectId"] !== null) {
            $this->EventProjectId = $param["EventProjectId"];
        }
    }
}
