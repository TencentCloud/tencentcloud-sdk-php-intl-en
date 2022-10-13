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
 * @method integer getTemplateId() Obtain Template ID. At least one of `ParamList` and `TemplateId` must be passed in.
 * @method void setTemplateId(integer $TemplateId) Set Template ID. At least one of `ParamList` and `TemplateId` must be passed in.
 * @method integer getWaitSwitch() Obtain When to perform the parameter adjustment task. Default value: 0. Valid values: 0 - execute immediately, 1 - execute during window. When its value is 1, only one instance ID can be passed in (i.e., only one `InstanceIds` can be passed in).
 * @method void setWaitSwitch(integer $WaitSwitch) Set When to perform the parameter adjustment task. Default value: 0. Valid values: 0 - execute immediately, 1 - execute during window. When its value is 1, only one instance ID can be passed in (i.e., only one `InstanceIds` can be passed in).
 * @method boolean getNotSyncRo() Obtain Whether to sync the parameters to read-only instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
 * @method void setNotSyncRo(boolean $NotSyncRo) Set Whether to sync the parameters to read-only instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
 * @method boolean getNotSyncDr() Obtain Whether to sync the parameters to disaster recovery instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
 * @method void setNotSyncDr(boolean $NotSyncDr) Set Whether to sync the parameters to disaster recovery instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
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
     * @var integer Template ID. At least one of `ParamList` and `TemplateId` must be passed in.
     */
    public $TemplateId;

    /**
     * @var integer When to perform the parameter adjustment task. Default value: 0. Valid values: 0 - execute immediately, 1 - execute during window. When its value is 1, only one instance ID can be passed in (i.e., only one `InstanceIds` can be passed in).
     */
    public $WaitSwitch;

    /**
     * @var boolean Whether to sync the parameters to read-only instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
     */
    public $NotSyncRo;

    /**
     * @var boolean Whether to sync the parameters to disaster recovery instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
     */
    public $NotSyncDr;

    /**
     * @param array $InstanceIds List of short instance IDs.
     * @param array $ParamList List of parameters to be modified. Every element is a combination of `Name` (parameter name) and `CurrentValue` (new value).
     * @param integer $TemplateId Template ID. At least one of `ParamList` and `TemplateId` must be passed in.
     * @param integer $WaitSwitch When to perform the parameter adjustment task. Default value: 0. Valid values: 0 - execute immediately, 1 - execute during window. When its value is 1, only one instance ID can be passed in (i.e., only one `InstanceIds` can be passed in).
     * @param boolean $NotSyncRo Whether to sync the parameters to read-only instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
     * @param boolean $NotSyncDr Whether to sync the parameters to disaster recovery instance of the source instance. Valid values: `true` (not sync), `false` (sync). Default value: `false`.
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

        if (array_key_exists("NotSyncRo",$param) and $param["NotSyncRo"] !== null) {
            $this->NotSyncRo = $param["NotSyncRo"];
        }

        if (array_key_exists("NotSyncDr",$param) and $param["NotSyncDr"] !== null) {
            $this->NotSyncDr = $param["NotSyncDr"];
        }
    }
}
