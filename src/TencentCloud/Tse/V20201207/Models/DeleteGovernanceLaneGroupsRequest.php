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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteGovernanceLaneGroups request structure.
 *
 * @method string getInstanceId() Obtain Engine Instance ID
 * @method void setInstanceId(string $InstanceId) Set Engine Instance ID
 * @method array getLaneGroups() Obtain Lane group rule list
 * @method void setLaneGroups(array $LaneGroups) Set Lane group rule list
 */
class DeleteGovernanceLaneGroupsRequest extends AbstractModel
{
    /**
     * @var string Engine Instance ID
     */
    public $InstanceId;

    /**
     * @var array Lane group rule list
     */
    public $LaneGroups;

    /**
     * @param string $InstanceId Engine Instance ID
     * @param array $LaneGroups Lane group rule list
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

        if (array_key_exists("LaneGroups",$param) and $param["LaneGroups"] !== null) {
            $this->LaneGroups = [];
            foreach ($param["LaneGroups"] as $key => $value){
                $obj = new DeleteGovernanceLaneGroup();
                $obj->deserialize($value);
                array_push($this->LaneGroups, $obj);
            }
        }
    }
}
