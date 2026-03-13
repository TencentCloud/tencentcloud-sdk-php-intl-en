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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyPathLifecyclePolicy request structure.
 *
 * @method string getLifecyclePolicyID() Obtain Lifecycle management policy ID.
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) Set Lifecycle management policy ID.
 * @method array getPaths() Obtain List of absolute paths for directories associated with the lifecycle management policy.
 * @method void setPaths(array $Paths) Set List of absolute paths for directories associated with the lifecycle management policy.
 */
class ApplyPathLifecyclePolicyRequest extends AbstractModel
{
    /**
     * @var string Lifecycle management policy ID.
     */
    public $LifecyclePolicyID;

    /**
     * @var array List of absolute paths for directories associated with the lifecycle management policy.
     */
    public $Paths;

    /**
     * @param string $LifecyclePolicyID Lifecycle management policy ID.
     * @param array $Paths List of absolute paths for directories associated with the lifecycle management policy.
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
        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = [];
            foreach ($param["Paths"] as $key => $value){
                $obj = new PathInfo();
                $obj->deserialize($value);
                array_push($this->Paths, $obj);
            }
        }
    }
}
