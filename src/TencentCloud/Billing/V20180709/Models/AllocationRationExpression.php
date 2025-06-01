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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Expression for sharing proportion.
 *
 * @method integer getNodeId() Obtain Cost allocation unit ID that the sharing rule belongs to.
 * @method void setNodeId(integer $NodeId) Set Cost allocation unit ID that the sharing rule belongs to.
 * @method float getRatio() Obtain Sharing proportion occupied by allocation unit, pass 0 for allocation by proportion.
 * @method void setRatio(float $Ratio) Set Sharing proportion occupied by allocation unit, pass 0 for allocation by proportion.
 */
class AllocationRationExpression extends AbstractModel
{
    /**
     * @var integer Cost allocation unit ID that the sharing rule belongs to.
     */
    public $NodeId;

    /**
     * @var float Sharing proportion occupied by allocation unit, pass 0 for allocation by proportion.
     */
    public $Ratio;

    /**
     * @param integer $NodeId Cost allocation unit ID that the sharing rule belongs to.
     * @param float $Ratio Sharing proportion occupied by allocation unit, pass 0 for allocation by proportion.
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

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
