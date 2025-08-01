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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mapping of cluster ID and process ID
 *
 * @method string getClusterId() Obtain Cluster IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFlowId() Obtain Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowId(integer $FlowId) Set Process ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClusterIDToFlowID extends AbstractModel
{
    /**
     * @var string Cluster IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var integer Process ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowId;

    /**
     * @param string $ClusterId Cluster IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FlowId Process ID
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
