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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachWorkGroupPolicy request structure.
 *
 * @method integer getWorkGroupId() Obtain Working group IDs
 * @method void setWorkGroupId(integer $WorkGroupId) Set Working group IDs
 * @method array getPolicySet() Obtain Collection of policies to be bound
 * @method void setPolicySet(array $PolicySet) Set Collection of policies to be bound
 */
class AttachWorkGroupPolicyRequest extends AbstractModel
{
    /**
     * @var integer Working group IDs
     */
    public $WorkGroupId;

    /**
     * @var array Collection of policies to be bound
     */
    public $PolicySet;

    /**
     * @param integer $WorkGroupId Working group IDs
     * @param array $PolicySet Collection of policies to be bound
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }
    }
}
