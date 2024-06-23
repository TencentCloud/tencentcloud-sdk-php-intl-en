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
 * Batch Run Integration Task Configuration
 *
 * @method string getEvent() Obtain Batch task type, for example, START, TIMESTAMP, RESTORE, RESUME, etc.\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEvent(string $Event) Set Batch task type, for example, START, TIMESTAMP, RESTORE, RESUME, etc.\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getTaskIds() Obtain Task Id list\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskIds(array $TaskIds) Set Task Id list\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getConfig() Obtain Batch task configuration, currently only used for real-time integration based on time point startup. For time point startup, a RecordField configuration with name=timestamp, value=specific timestamp needs to be set\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setConfig(array $Config) Set Batch task configuration, currently only used for real-time integration based on time point startup. For time point startup, a RecordField configuration with name=timestamp, value=specific timestamp needs to be set\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Operation TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Operation TypeNote: This field may return null, indicating that no valid value can be obtained.
 */
class StartTaskInfo extends AbstractModel
{
    /**
     * @var string Batch task type, for example, START, TIMESTAMP, RESTORE, RESUME, etc.\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Event;

    /**
     * @var array Task Id list\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskIds;

    /**
     * @var array Batch task configuration, currently only used for real-time integration based on time point startup. For time point startup, a RecordField configuration with name=timestamp, value=specific timestamp needs to be set\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Config;

    /**
     * @var string Operation TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @param string $Event Batch task type, for example, START, TIMESTAMP, RESTORE, RESUME, etc.\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $TaskIds Task Id list\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Config Batch task configuration, currently only used for real-time integration based on time point startup. For time point startup, a RecordField configuration with name=timestamp, value=specific timestamp needs to be set\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Operation TypeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
