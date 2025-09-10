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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event details.
 *
 * @method array getStaffs() Obtain Specifies the agent data.
 * @method void setStaffs(array $Staffs) Set Specifies the agent data.
 */
class EventStaffDetail extends AbstractModel
{
    /**
     * @var array Specifies the agent data.
     */
    public $Staffs;

    /**
     * @param array $Staffs Specifies the agent data.
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
        if (array_key_exists("Staffs",$param) and $param["Staffs"] !== null) {
            $this->Staffs = [];
            foreach ($param["Staffs"] as $key => $value){
                $obj = new EventStaffElement();
                $obj->deserialize($value);
                array_push($this->Staffs, $obj);
            }
        }
    }
}
