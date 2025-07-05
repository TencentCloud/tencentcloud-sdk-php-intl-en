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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance request structure.
 *
 * @method string getInstanceId() Obtain InstanceId.
 * @method void setInstanceId(string $InstanceId) Set InstanceId.
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method integer getScaleOutCount() Obtain Number of scale-out nodes.
 * @method void setScaleOutCount(integer $ScaleOutCount) Set Number of scale-out nodes.
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string InstanceId.
     */
    public $InstanceId;

    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var integer Number of scale-out nodes.
     */
    public $ScaleOutCount;

    /**
     * @param string $InstanceId InstanceId.
     * @param string $NodeType Node type.
     * @param integer $ScaleOutCount Number of scale-out nodes.
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

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ScaleOutCount",$param) and $param["ScaleOutCount"] !== null) {
            $this->ScaleOutCount = $param["ScaleOutCount"];
        }
    }
}
