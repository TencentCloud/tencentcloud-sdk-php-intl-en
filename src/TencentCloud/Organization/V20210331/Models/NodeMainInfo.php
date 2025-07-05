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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Main department information.
 *
 * @method integer getNodeId() Obtain Department ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeId(integer $NodeId) Set Department ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeName() Obtain Department name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeName(string $NodeName) Set Department name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeMainInfo extends AbstractModel
{
    /**
     * @var integer Department ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeId;

    /**
     * @var string Department name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeName;

    /**
     * @param integer $NodeId Department ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeName Department name.
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
