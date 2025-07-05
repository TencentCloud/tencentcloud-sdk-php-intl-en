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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterTargetGroupInstances request structure.
 *
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method array getTargetGroupInstances() Obtain Server instance array
 * @method void setTargetGroupInstances(array $TargetGroupInstances) Set Server instance array
 */
class RegisterTargetGroupInstancesRequest extends AbstractModel
{
    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var array Server instance array
     */
    public $TargetGroupInstances;

    /**
     * @param string $TargetGroupId Target group ID
     * @param array $TargetGroupInstances Server instance array
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }
    }
}
