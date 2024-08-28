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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckBashPolicyParams request structure.
 *
 * @method string getCheckField() Obtain Verify content Name or Rule. (Use a comma to separate them if both need to be verified.)
 * @method void setCheckField(string $CheckField) Set Verify content Name or Rule. (Use a comma to separate them if both need to be verified.)
 * @method integer getEventId() Obtain Event ID needs to be submitted when allowlisting an event in the event list.
 * @method void setEventId(integer $EventId) Set Event ID needs to be submitted when allowlisting an event in the event list.
 * @method string getName() Obtain Name of rule to be entered
 * @method void setName(string $Name) Set Name of rule to be entered
 * @method string getRule() Obtain The regular expression to be entered by the user: It must match command content corresponding to the submitted EventId.
 * @method void setRule(string $Rule) Set The regular expression to be entered by the user: It must match command content corresponding to the submitted EventId.
 * @method integer getId() Obtain Rule ID passed during editing
 * @method void setId(integer $Id) Set Rule ID passed during editing
 */
class CheckBashPolicyParamsRequest extends AbstractModel
{
    /**
     * @var string Verify content Name or Rule. (Use a comma to separate them if both need to be verified.)
     */
    public $CheckField;

    /**
     * @var integer Event ID needs to be submitted when allowlisting an event in the event list.
     */
    public $EventId;

    /**
     * @var string Name of rule to be entered
     */
    public $Name;

    /**
     * @var string The regular expression to be entered by the user: It must match command content corresponding to the submitted EventId.
     */
    public $Rule;

    /**
     * @var integer Rule ID passed during editing
     */
    public $Id;

    /**
     * @param string $CheckField Verify content Name or Rule. (Use a comma to separate them if both need to be verified.)
     * @param integer $EventId Event ID needs to be submitted when allowlisting an event in the event list.
     * @param string $Name Name of rule to be entered
     * @param string $Rule The regular expression to be entered by the user: It must match command content corresponding to the submitted EventId.
     * @param integer $Id Rule ID passed during editing
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
        if (array_key_exists("CheckField",$param) and $param["CheckField"] !== null) {
            $this->CheckField = $param["CheckField"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
