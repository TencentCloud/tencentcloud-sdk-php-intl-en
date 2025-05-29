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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task process debugging information.
 *
 * @method string getIntentName() Obtain Task flow name.
 * @method void setIntentName(string $IntentName) Set Task flow name.
 * @method array getUpdatedSlotValues() Obtain Entity list.
 * @method void setUpdatedSlotValues(array $UpdatedSlotValues) Set Entity list.
 * @method array getRunNodes() Obtain Node list.
 * @method void setRunNodes(array $RunNodes) Set Node list.
 * @method array getPurposes() Obtain Intent determination.
 * @method void setPurposes(array $Purposes) Set Intent determination.
 */
class TaskFlowSummary extends AbstractModel
{
    /**
     * @var string Task flow name.
     */
    public $IntentName;

    /**
     * @var array Entity list.
     */
    public $UpdatedSlotValues;

    /**
     * @var array Node list.
     */
    public $RunNodes;

    /**
     * @var array Intent determination.
     */
    public $Purposes;

    /**
     * @param string $IntentName Task flow name.
     * @param array $UpdatedSlotValues Entity list.
     * @param array $RunNodes Node list.
     * @param array $Purposes Intent determination.
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
        if (array_key_exists("IntentName",$param) and $param["IntentName"] !== null) {
            $this->IntentName = $param["IntentName"];
        }

        if (array_key_exists("UpdatedSlotValues",$param) and $param["UpdatedSlotValues"] !== null) {
            $this->UpdatedSlotValues = [];
            foreach ($param["UpdatedSlotValues"] as $key => $value){
                $obj = new ValueInfo();
                $obj->deserialize($value);
                array_push($this->UpdatedSlotValues, $obj);
            }
        }

        if (array_key_exists("RunNodes",$param) and $param["RunNodes"] !== null) {
            $this->RunNodes = [];
            foreach ($param["RunNodes"] as $key => $value){
                $obj = new RunNodeInfo();
                $obj->deserialize($value);
                array_push($this->RunNodes, $obj);
            }
        }

        if (array_key_exists("Purposes",$param) and $param["Purposes"] !== null) {
            $this->Purposes = $param["Purposes"];
        }
    }
}
