<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Third-party node pool information
 *
 * @method RuntimeConfig getRuntimeConfig() Obtain Third-party node runtime configuration
 * @method void setRuntimeConfig(RuntimeConfig $RuntimeConfig) Set Third-party node runtime configuration
 * @method integer getNodesNum() Obtain Number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodesNum(integer $NodesNum) Set Number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class ExternalNodePoolInfo extends AbstractModel
{
    /**
     * @var RuntimeConfig Third-party node runtime configuration
     */
    public $RuntimeConfig;

    /**
     * @var integer Number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodesNum;

    /**
     * @param RuntimeConfig $RuntimeConfig Third-party node runtime configuration
     * @param integer $NodesNum Number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new RuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
        }

        if (array_key_exists("NodesNum",$param) and $param["NodesNum"] !== null) {
            $this->NodesNum = $param["NodesNum"];
        }
    }
}
