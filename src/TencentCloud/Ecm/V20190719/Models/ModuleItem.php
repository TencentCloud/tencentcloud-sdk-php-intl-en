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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Item information of the module list
 *
 * @method NodeInstanceNum getNodeInstanceNum() Obtain Instance statistics of the node
 * @method void setNodeInstanceNum(NodeInstanceNum $NodeInstanceNum) Set Instance statistics of the node
 * @method Module getModule() Obtain Module information
 * @method void setModule(Module $Module) Set Module information
 */
class ModuleItem extends AbstractModel
{
    /**
     * @var NodeInstanceNum Instance statistics of the node
     */
    public $NodeInstanceNum;

    /**
     * @var Module Module information
     */
    public $Module;

    /**
     * @param NodeInstanceNum $NodeInstanceNum Instance statistics of the node
     * @param Module $Module Module information
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
        if (array_key_exists("NodeInstanceNum",$param) and $param["NodeInstanceNum"] !== null) {
            $this->NodeInstanceNum = new NodeInstanceNum();
            $this->NodeInstanceNum->deserialize($param["NodeInstanceNum"]);
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = new Module();
            $this->Module->deserialize($param["Module"]);
        }
    }
}
