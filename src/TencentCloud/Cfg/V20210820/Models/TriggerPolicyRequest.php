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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerPolicy request structure.
 *
 * @method integer getTaskId() Obtain Chaos engineering experiment ID
 * @method void setTaskId(integer $TaskId) Set Chaos engineering experiment ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getContent() Obtain Triggering content
 * @method void setContent(string $Content) Set Triggering content
 * @method integer getTriggerType() Obtain Triggering type. 0: trigger; 1: recovery.
 * @method void setTriggerType(integer $TriggerType) Set Triggering type. 0: trigger; 1: recovery.
 */
class TriggerPolicyRequest extends AbstractModel
{
    /**
     * @var integer Chaos engineering experiment ID
     */
    public $TaskId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Triggering content
     */
    public $Content;

    /**
     * @var integer Triggering type. 0: trigger; 1: recovery.
     */
    public $TriggerType;

    /**
     * @param integer $TaskId Chaos engineering experiment ID
     * @param string $Name Name
     * @param string $Content Triggering content
     * @param integer $TriggerType Triggering type. 0: trigger; 1: recovery.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }
    }
}
