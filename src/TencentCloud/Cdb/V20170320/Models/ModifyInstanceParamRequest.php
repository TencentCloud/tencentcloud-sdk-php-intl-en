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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParam request structure.
 *
 * @method array getInstanceIds() Obtain List of short instance IDs.
 * @method void setInstanceIds(array $InstanceIds) Set List of short instance IDs.
 * @method array getParamList() Obtain List of parameters to be modified. Every element is a combination of `Name` (parameter name) and `CurrentValue` (new value).
 * @method void setParamList(array $ParamList) Set List of parameters to be modified. Every element is a combination of `Name` (parameter name) and `CurrentValue` (new value).
 * @method integer getTemplateId() Obtain 
 * @method void setTemplateId(integer $TemplateId) Set 
 * @method integer getWaitSwitch() Obtain 
 * @method void setWaitSwitch(integer $WaitSwitch) Set 
 */
class ModifyInstanceParamRequest extends AbstractModel
{
    /**
     * @var array List of short instance IDs.
     */
    public $InstanceIds;

    /**
     * @var array List of parameters to be modified. Every element is a combination of `Name` (parameter name) and `CurrentValue` (new value).
     */
    public $ParamList;

    /**
     * @var integer 
     */
    public $TemplateId;

    /**
     * @var integer 
     */
    public $WaitSwitch;

    /**
     * @param array $InstanceIds List of short instance IDs.
     * @param array $ParamList List of parameters to be modified. Every element is a combination of `Name` (parameter name) and `CurrentValue` (new value).
     * @param integer $TemplateId 
     * @param integer $WaitSwitch 
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }
    }
}
