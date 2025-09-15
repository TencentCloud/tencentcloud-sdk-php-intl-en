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
 * Node tag information.
 *
 * @method string getNodeType() Obtain Node type: master, core, task, router.
 * @method void setNodeType(string $NodeType) Set Node type: master, core, task, router.
 * @method array getNodeNames() Obtain Node tag information: currently used only in the Terraform. It serves as an input parameter to differentiate information of nodes with the same type.
 * @method void setNodeNames(array $NodeNames) Set Node tag information: currently used only in the Terraform. It serves as an input parameter to differentiate information of nodes with the same type.
 * @method string getZone() Obtain Availability zone name.
 * @method void setZone(string $Zone) Set Availability zone name.
 */
class NodeMark extends AbstractModel
{
    /**
     * @var string Node type: master, core, task, router.
     */
    public $NodeType;

    /**
     * @var array Node tag information: currently used only in the Terraform. It serves as an input parameter to differentiate information of nodes with the same type.
     */
    public $NodeNames;

    /**
     * @var string Availability zone name.
     */
    public $Zone;

    /**
     * @param string $NodeType Node type: master, core, task, router.
     * @param array $NodeNames Node tag information: currently used only in the Terraform. It serves as an input parameter to differentiate information of nodes with the same type.
     * @param string $Zone Availability zone name.
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
