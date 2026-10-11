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
 * Scale-out node type and quantity.
 *
 * @method string getNodeFlag() Obtain Valid values for the scale-out node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method void setNodeFlag(string $NodeFlag) Set Valid values for the scale-out node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method integer getNodeCount() Obtain Number of scale-out nodes.
 * @method void setNodeCount(integer $NodeCount) Set Number of scale-out nodes.
 */
class ScaleOutNodeConfig extends AbstractModel
{
    /**
     * @var string Valid values for the scale-out node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     */
    public $NodeFlag;

    /**
     * @var integer Number of scale-out nodes.
     */
    public $NodeCount;

    /**
     * @param string $NodeFlag Valid values for the scale-out node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     * @param integer $NodeCount Number of scale-out nodes.
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
        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }
    }
}
