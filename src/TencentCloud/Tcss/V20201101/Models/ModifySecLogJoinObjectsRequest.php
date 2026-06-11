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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecLogJoinObjects request structure.
 *
 * @method string getLogType() Obtain Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
 * @method void setLogType(string $LogType) Set Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
 * @method array getBindList() Obtain Bound list
 * @method void setBindList(array $BindList) Set Bound list
 * @method array getUnBindList() Obtain List of assets to be unbound. When the node scope involves all nodes, this parameter indicates the list of assets to be excluded.
 * @method void setUnBindList(array $UnBindList) Set List of assets to be unbound. When the node scope involves all nodes, this parameter indicates the list of assets to be excluded.
 * @method string getNodeType() Obtain Node type.
`NORMAL`: General node (default)
`SUPER`: Super node

 * @method void setNodeType(string $NodeType) Set Node type.
`NORMAL`: General node (default)
`SUPER`: Super node

 * @method integer getRangeType() Obtain Log node scope type. 0: specified; 1: all.
 * @method void setRangeType(integer $RangeType) Set Log node scope type. 0: specified; 1: all.
 * @method boolean getAutoJoin() Obtain Whether new assets are accessed automatically. This parameter is valid only when the node scope involves all nodes.
 * @method void setAutoJoin(boolean $AutoJoin) Set Whether new assets are accessed automatically. This parameter is valid only when the node scope involves all nodes.
 */
class ModifySecLogJoinObjectsRequest extends AbstractModel
{
    /**
     * @var string Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
     */
    public $LogType;

    /**
     * @var array Bound list
     */
    public $BindList;

    /**
     * @var array List of assets to be unbound. When the node scope involves all nodes, this parameter indicates the list of assets to be excluded.
     */
    public $UnBindList;

    /**
     * @var string Node type.
`NORMAL`: General node (default)
`SUPER`: Super node

     */
    public $NodeType;

    /**
     * @var integer Log node scope type. 0: specified; 1: all.
     */
    public $RangeType;

    /**
     * @var boolean Whether new assets are accessed automatically. This parameter is valid only when the node scope involves all nodes.
     */
    public $AutoJoin;

    /**
     * @param string $LogType Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
     * @param array $BindList Bound list
     * @param array $UnBindList List of assets to be unbound. When the node scope involves all nodes, this parameter indicates the list of assets to be excluded.
     * @param string $NodeType Node type.
`NORMAL`: General node (default)
`SUPER`: Super node

     * @param integer $RangeType Log node scope type. 0: specified; 1: all.
     * @param boolean $AutoJoin Whether new assets are accessed automatically. This parameter is valid only when the node scope involves all nodes.
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("BindList",$param) and $param["BindList"] !== null) {
            $this->BindList = $param["BindList"];
        }

        if (array_key_exists("UnBindList",$param) and $param["UnBindList"] !== null) {
            $this->UnBindList = $param["UnBindList"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("AutoJoin",$param) and $param["AutoJoin"] !== null) {
            $this->AutoJoin = $param["AutoJoin"];
        }
    }
}
