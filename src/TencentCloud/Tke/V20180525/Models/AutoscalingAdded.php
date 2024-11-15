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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nodes for automatic scaling
 *
 * @method integer getJoining() Obtain Number of nodes that are being added
 * @method void setJoining(integer $Joining) Set Number of nodes that are being added
 * @method integer getInitializing() Obtain Number of nodes that are being initialized
 * @method void setInitializing(integer $Initializing) Set Number of nodes that are being initialized
 * @method integer getNormal() Obtain Number of normal nodes
 * @method void setNormal(integer $Normal) Set Number of normal nodes
 * @method integer getTotal() Obtain Total number of nodes
 * @method void setTotal(integer $Total) Set Total number of nodes
 */
class AutoscalingAdded extends AbstractModel
{
    /**
     * @var integer Number of nodes that are being added
     */
    public $Joining;

    /**
     * @var integer Number of nodes that are being initialized
     */
    public $Initializing;

    /**
     * @var integer Number of normal nodes
     */
    public $Normal;

    /**
     * @var integer Total number of nodes
     */
    public $Total;

    /**
     * @param integer $Joining Number of nodes that are being added
     * @param integer $Initializing Number of nodes that are being initialized
     * @param integer $Normal Number of normal nodes
     * @param integer $Total Total number of nodes
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
        if (array_key_exists("Joining",$param) and $param["Joining"] !== null) {
            $this->Joining = $param["Joining"];
        }

        if (array_key_exists("Initializing",$param) and $param["Initializing"] !== null) {
            $this->Initializing = $param["Initializing"];
        }

        if (array_key_exists("Normal",$param) and $param["Normal"] !== null) {
            $this->Normal = $param["Normal"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
