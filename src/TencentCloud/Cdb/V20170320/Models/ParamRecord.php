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
 * Parameter modification records
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method string getOldValue() Obtain Parameter value before modification
 * @method void setOldValue(string $OldValue) Set Parameter value before modification
 * @method string getNewValue() Obtain Parameter value after modification
 * @method void setNewValue(string $NewValue) Set Parameter value after modification
 * @method boolean getIsSucess() Obtain Whether the parameter is modified successfully
 * @method void setIsSucess(boolean $IsSucess) Set Whether the parameter is modified successfully
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method boolean getIsSuccess() Obtain Indicates whether the parameter is modified successfully.
 * @method void setIsSuccess(boolean $IsSuccess) Set Indicates whether the parameter is modified successfully.
 */
class ParamRecord extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Parameter value before modification
     */
    public $OldValue;

    /**
     * @var string Parameter value after modification
     */
    public $NewValue;

    /**
     * @var boolean Whether the parameter is modified successfully
     * @deprecated
     */
    public $IsSucess;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var boolean Indicates whether the parameter is modified successfully.
     */
    public $IsSuccess;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ParamName Parameter name
     * @param string $OldValue Parameter value before modification
     * @param string $NewValue Parameter value after modification
     * @param boolean $IsSucess Whether the parameter is modified successfully
     * @param string $ModifyTime Modification time
     * @param boolean $IsSuccess Indicates whether the parameter is modified successfully.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("IsSucess",$param) and $param["IsSucess"] !== null) {
            $this->IsSucess = $param["IsSucess"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsSuccess",$param) and $param["IsSuccess"] !== null) {
            $this->IsSuccess = $param["IsSuccess"];
        }
    }
}
