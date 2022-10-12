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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Webhook trigger
 *
 * @method string getName() Obtain Trigger name
 * @method void setName(string $Name) Set Trigger name
 * @method array getTargets() Obtain Trigger target
 * @method void setTargets(array $Targets) Set Trigger target
 * @method array getEventTypes() Obtain Action to be triggered
 * @method void setEventTypes(array $EventTypes) Set Action to be triggered
 * @method string getCondition() Obtain Trigger rule
 * @method void setCondition(string $Condition) Set Trigger rule
 * @method boolean getEnabled() Obtain Whether to enable the trigger
 * @method void setEnabled(boolean $Enabled) Set Whether to enable the trigger
 * @method integer getId() Obtain Trigger ID
 * @method void setId(integer $Id) Set Trigger ID
 * @method string getDescription() Obtain Trigger description
 * @method void setDescription(string $Description) Set Trigger description
 * @method integer getNamespaceId() Obtain ID of the namespace of the trigger
 * @method void setNamespaceId(integer $NamespaceId) Set ID of the namespace of the trigger
 */
class WebhookTrigger extends AbstractModel
{
    /**
     * @var string Trigger name
     */
    public $Name;

    /**
     * @var array Trigger target
     */
    public $Targets;

    /**
     * @var array Action to be triggered
     */
    public $EventTypes;

    /**
     * @var string Trigger rule
     */
    public $Condition;

    /**
     * @var boolean Whether to enable the trigger
     */
    public $Enabled;

    /**
     * @var integer Trigger ID
     */
    public $Id;

    /**
     * @var string Trigger description
     */
    public $Description;

    /**
     * @var integer ID of the namespace of the trigger
     */
    public $NamespaceId;

    /**
     * @param string $Name Trigger name
     * @param array $Targets Trigger target
     * @param array $EventTypes Action to be triggered
     * @param string $Condition Trigger rule
     * @param boolean $Enabled Whether to enable the trigger
     * @param integer $Id Trigger ID
     * @param string $Description Trigger description
     * @param integer $NamespaceId ID of the namespace of the trigger
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new WebhookTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("EventTypes",$param) and $param["EventTypes"] !== null) {
            $this->EventTypes = $param["EventTypes"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }
    }
}
