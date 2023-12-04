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
 * @method array getBindList() Obtain List of QUuids of bound servers
 * @method void setBindList(array $BindList) Set List of QUuids of bound servers
 * @method array getUnBindList() Obtain List of QUuids of servers to be unbound
 * @method void setUnBindList(array $UnBindList) Set List of QUuids of servers to be unbound
 * @method string getNodeType() Obtain Node type.
`NORMAL`: General node (default)
`SUPER`: Super node

 * @method void setNodeType(string $NodeType) Set Node type.
`NORMAL`: General node (default)
`SUPER`: Super node
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
     * @var array List of QUuids of bound servers
     */
    public $BindList;

    /**
     * @var array List of QUuids of servers to be unbound
     */
    public $UnBindList;

    /**
     * @var string Node type.
`NORMAL`: General node (default)
`SUPER`: Super node

     */
    public $NodeType;

    /**
     * @param string $LogType Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
     * @param array $BindList List of QUuids of bound servers
     * @param array $UnBindList List of QUuids of servers to be unbound
     * @param string $NodeType Node type.
`NORMAL`: General node (default)
`SUPER`: Super node
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
    }
}
