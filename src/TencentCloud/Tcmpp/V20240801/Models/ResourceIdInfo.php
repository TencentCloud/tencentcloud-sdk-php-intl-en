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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unified operation success ID - integer
 *
 * @method integer getResourceId() Obtain Resource ID
0: No trial version currently available
1: A trial version is currently available and uploaded by the current user
2: A trial version is currently available and uploaded by another user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(integer $ResourceId) Set Resource ID
0: No trial version currently available
1: A trial version is currently available and uploaded by the current user
2: A trial version is currently available and uploaded by another user
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceIdInfo extends AbstractModel
{
    /**
     * @var integer Resource ID
0: No trial version currently available
1: A trial version is currently available and uploaded by the current user
2: A trial version is currently available and uploaded by another user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @param integer $ResourceId Resource ID
0: No trial version currently available
1: A trial version is currently available and uploaded by the current user
2: A trial version is currently available and uploaded by another user
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
