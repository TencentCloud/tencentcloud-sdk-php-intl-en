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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of instance operation limits.
 *
 * @method string getInstanceId() Obtain Instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDeniedActions() Obtain List of operation limits.
 * @method void setDeniedActions(array $DeniedActions) Set List of operation limits.
 */
class InstanceDeniedActions extends AbstractModel
{
    /**
     * @var string Instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var array List of operation limits.
     */
    public $DeniedActions;

    /**
     * @param string $InstanceId Instance ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DeniedActions List of operation limits.
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
                $obj = new DeniedAction();
                $obj->deserialize($value);
                array_push($this->DeniedActions, $obj);
            }
        }
    }
}
