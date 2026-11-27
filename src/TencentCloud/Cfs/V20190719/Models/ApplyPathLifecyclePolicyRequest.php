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
 * @method string getLifecyclePolicyID() Obtain <p>Lifecycle management policy ID.</p>
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) Set <p>Lifecycle management policy ID.</p>
 * @method array getPaths() Obtain <p>List of directory paths associated with the lifecycle management policy. Each path must start with /cfs/, representing a logical path within the file storage instance, not a local mount point path.</p><p>Examples:</p><ul><li>If the CFS root directory / is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/subdir/test1/test2.</li></ul>
 * @method void setPaths(array $Paths) Set <p>List of directory paths associated with the lifecycle management policy. Each path must start with /cfs/, representing a logical path within the file storage instance, not a local mount point path.</p><p>Examples:</p><ul><li>If the CFS root directory / is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/subdir/test1/test2.</li></ul>
 */
class ApplyPathLifecyclePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>Lifecycle management policy ID.</p>
     */
    public $LifecyclePolicyID;

    /**
     * @var array <p>List of directory paths associated with the lifecycle management policy. Each path must start with /cfs/, representing a logical path within the file storage instance, not a local mount point path.</p><p>Examples:</p><ul><li>If the CFS root directory / is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/subdir/test1/test2.</li></ul>
     */
    public $Paths;

    /**
     * @param string $LifecyclePolicyID <p>Lifecycle management policy ID.</p>
     * @param array $Paths <p>List of directory paths associated with the lifecycle management policy. Each path must start with /cfs/, representing a logical path within the file storage instance, not a local mount point path.</p><p>Examples:</p><ul><li>If the CFS root directory / is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/test1/test2.</li><li>If the CFS subdirectory /subdir is mounted and you need to associate test1/test2 under the mount path, the input value is /cfs/subdir/test1/test2.</li></ul>
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
