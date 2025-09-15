<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Setting inspection task configurations.
 *
 * @method string getTaskType() Obtain Unique identifier for inspection tasks.
 * @method void setTaskType(string $TaskType) Set Unique identifier for inspection tasks.
 * @method string getGroup() Obtain Inspection task group name.
 * @method void setGroup(string $Group) Set Inspection task group name.
 * @method string getName() Obtain Inspection task name.
 * @method void setName(string $Name) Set Inspection task name.
 * @method array getTaskSettings() Obtain Inspection task parameter settings.
 * @method void setTaskSettings(array $TaskSettings) Set Inspection task parameter settings.
 * @method string getSelected() Obtain Whether it is selected, with the valid values of "true" and "false".
 * @method void setSelected(string $Selected) Set Whether it is selected, with the valid values of "true" and "false".
 * @method string getEnable() Obtain Whether monitoring is enabled.
 * @method void setEnable(string $Enable) Set Whether monitoring is enabled.
 * @method string getSettingsJson() Obtain Event JSON template.
 * @method void setSettingsJson(string $SettingsJson) Set Event JSON template.
 */
class InspectionTaskSettings extends AbstractModel
{
    /**
     * @var string Unique identifier for inspection tasks.
     */
    public $TaskType;

    /**
     * @var string Inspection task group name.
     */
    public $Group;

    /**
     * @var string Inspection task name.
     */
    public $Name;

    /**
     * @var array Inspection task parameter settings.
     */
    public $TaskSettings;

    /**
     * @var string Whether it is selected, with the valid values of "true" and "false".
     */
    public $Selected;

    /**
     * @var string Whether monitoring is enabled.
     */
    public $Enable;

    /**
     * @var string Event JSON template.
     */
    public $SettingsJson;

    /**
     * @param string $TaskType Unique identifier for inspection tasks.
     * @param string $Group Inspection task group name.
     * @param string $Name Inspection task name.
     * @param array $TaskSettings Inspection task parameter settings.
     * @param string $Selected Whether it is selected, with the valid values of "true" and "false".
     * @param string $Enable Whether monitoring is enabled.
     * @param string $SettingsJson Event JSON template.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskSettings",$param) and $param["TaskSettings"] !== null) {
            $this->TaskSettings = [];
            foreach ($param["TaskSettings"] as $key => $value){
                $obj = new TaskSettings();
                $obj->deserialize($value);
                array_push($this->TaskSettings, $obj);
            }
        }

        if (array_key_exists("Selected",$param) and $param["Selected"] !== null) {
            $this->Selected = $param["Selected"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("SettingsJson",$param) and $param["SettingsJson"] !== null) {
            $this->SettingsJson = $param["SettingsJson"];
        }
    }
}
