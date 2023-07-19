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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance node
 *
 * @method integer getId() Obtain Instance ID
 * @method void setId(integer $Id) Set Instance ID
 * @method array getInstanceClusterNode() Obtain Node details
 * @method void setInstanceClusterNode(array $InstanceClusterNode) Set Node details
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer Instance ID
     */
    public $Id;

    /**
     * @var array Node details
     */
    public $InstanceClusterNode;

    /**
     * @param integer $Id Instance ID
     * @param array $InstanceClusterNode Node details
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceClusterNode",$param) and $param["InstanceClusterNode"] !== null) {
            $this->InstanceClusterNode = [];
            foreach ($param["InstanceClusterNode"] as $key => $value){
                $obj = new InstanceClusterNode();
                $obj->deserialize($value);
                array_push($this->InstanceClusterNode, $obj);
            }
        }
    }
}
