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
 * Lifecycle management policy information.
 *
 * @method string getCreateTime() Obtain <P>The time when the lifecycle management policy was created</p>.
 * @method void setCreateTime(string $CreateTime) Set <P>The time when the lifecycle management policy was created</p>.
 * @method string getLifecyclePolicyID() Obtain <p>Lifecycle management policy ID.</p>.
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) Set <p>Lifecycle management policy ID.</p>.
 * @method string getLifecyclePolicyName() Obtain <P>Lifecycle management policy name</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifecyclePolicyName(string $LifecyclePolicyName) Set <P>Lifecycle management policy name</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLifecycleRules() Obtain <P>List of management rules associated with the lifecycle management policy.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifecycleRules(array $LifecycleRules) Set <P>List of management rules associated with the lifecycle management policy.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPaths() Obtain <P>List of absolute paths for directories associated with the lifecycle management policy</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPaths(array $Paths) Set <P>List of absolute paths for directories associated with the lifecycle management policy</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LifecyclePolicy extends AbstractModel
{
    /**
     * @var string <P>The time when the lifecycle management policy was created</p>.
     */
    public $CreateTime;

    /**
     * @var string <p>Lifecycle management policy ID.</p>.
     */
    public $LifecyclePolicyID;

    /**
     * @var string <P>Lifecycle management policy name</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifecyclePolicyName;

    /**
     * @var array <P>List of management rules associated with the lifecycle management policy.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifecycleRules;

    /**
     * @var array <P>List of absolute paths for directories associated with the lifecycle management policy</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paths;

    /**
     * @param string $CreateTime <P>The time when the lifecycle management policy was created</p>.
     * @param string $LifecyclePolicyID <p>Lifecycle management policy ID.</p>.
     * @param string $LifecyclePolicyName <P>Lifecycle management policy name</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LifecycleRules <P>List of management rules associated with the lifecycle management policy.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Paths <P>List of absolute paths for directories associated with the lifecycle management policy</p>.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }

        if (array_key_exists("LifecyclePolicyName",$param) and $param["LifecyclePolicyName"] !== null) {
            $this->LifecyclePolicyName = $param["LifecyclePolicyName"];
        }

        if (array_key_exists("LifecycleRules",$param) and $param["LifecycleRules"] !== null) {
            $this->LifecycleRules = [];
            foreach ($param["LifecycleRules"] as $key => $value){
                $obj = new LifecycleRule();
                $obj->deserialize($value);
                array_push($this->LifecycleRules, $obj);
            }
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
