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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterParam request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getParamList() Obtain List of parameters to modify. Each element is a combination of ParamName, CurrentValue, and OldValue. ParamName is the parameter name, CurrentValue is the current value, and OldValue is the old value and is not validated.
 * @method void setParamList(array $ParamList) Set List of parameters to modify. Each element is a combination of ParamName, CurrentValue, and OldValue. ParamName is the parameter name, CurrentValue is the current value, and OldValue is the old value and is not validated.
 * @method string getIsInMaintainPeriod() Obtain Execute during the maintenance period - yes, immediate execution - no
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Execute during the maintenance period - yes, immediate execution - no
 */
class ModifyClusterParamRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array List of parameters to modify. Each element is a combination of ParamName, CurrentValue, and OldValue. ParamName is the parameter name, CurrentValue is the current value, and OldValue is the old value and is not validated.
     */
    public $ParamList;

    /**
     * @var string Execute during the maintenance period - yes, immediate execution - no
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $ParamList List of parameters to modify. Each element is a combination of ParamName, CurrentValue, and OldValue. ParamName is the parameter name, CurrentValue is the current value, and OldValue is the old value and is not validated.
     * @param string $IsInMaintainPeriod Execute during the maintenance period - yes, immediate execution - no
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
