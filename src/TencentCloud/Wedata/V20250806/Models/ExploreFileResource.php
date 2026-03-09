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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data exploration file resources.
 *
 * @method string getResourceType() Obtain Resource type, can only be two types: folder, script.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type, can only be two types: folder, script.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceId() Obtain Resource ID: directory ID or script ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID: directory ID or script ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceIdForPath() Obtain Full path id for recursive authentication.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceIdForPath(string $ResourceIdForPath) Set Full path id for recursive authentication.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceCFSPath() Obtain cfs path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceCFSPath(string $ResourceCFSPath) Set cfs path.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExploreFileResource extends AbstractModel
{
    /**
     * @var string Resource type, can only be two types: folder, script.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Resource ID: directory ID or script ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Full path id for recursive authentication.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceIdForPath;

    /**
     * @var string cfs path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceCFSPath;

    /**
     * @param string $ResourceType Resource type, can only be two types: folder, script.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceId Resource ID: directory ID or script ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceIdForPath Full path id for recursive authentication.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceCFSPath cfs path.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceIdForPath",$param) and $param["ResourceIdForPath"] !== null) {
            $this->ResourceIdForPath = $param["ResourceIdForPath"];
        }

        if (array_key_exists("ResourceCFSPath",$param) and $param["ResourceCFSPath"] !== null) {
            $this->ResourceCFSPath = $param["ResourceCFSPath"];
        }
    }
}
