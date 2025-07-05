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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Executable operations for the instance
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getDeniedActions() Obtain Prohibited operations for the instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeniedActions(array $DeniedActions) Set Prohibited operations for the instance
Note: this field may return null, indicating that no valid values can be obtained.
 */
class InstanceOperator extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array Prohibited operations for the instance
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeniedActions;

    /**
     * @param string $InstanceId Instance ID
     * @param array $DeniedActions Prohibited operations for the instance
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DeniedActions",$param) and $param["DeniedActions"] !== null) {
            $this->DeniedActions = [];
            foreach ($param["DeniedActions"] as $key => $value){
                $obj = new OperatorAction();
                $obj->deserialize($value);
                array_push($this->DeniedActions, $obj);
            }
        }
    }
}
