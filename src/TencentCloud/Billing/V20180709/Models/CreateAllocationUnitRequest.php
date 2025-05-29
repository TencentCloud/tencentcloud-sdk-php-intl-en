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
 * CreateAllocationUnit request structure.
 *
 * @method integer getParentId() Obtain New cost allocation unit parent node ID.
 * @method void setParentId(integer $ParentId) Set New cost allocation unit parent node ID.
 * @method string getName() Obtain Specifies the name of a newly-added cost allocation unit.
 * @method void setName(string $Name) Set Specifies the name of a newly-added cost allocation unit.
 * @method string getMonth() Obtain Month, which is the current month by default if not provided.
 * @method void setMonth(string $Month) Set Month, which is the current month by default if not provided.
 */
class CreateAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer New cost allocation unit parent node ID.
     */
    public $ParentId;

    /**
     * @var string Specifies the name of a newly-added cost allocation unit.
     */
    public $Name;

    /**
     * @var string Month, which is the current month by default if not provided.
     */
    public $Month;

    /**
     * @param integer $ParentId New cost allocation unit parent node ID.
     * @param string $Name Specifies the name of a newly-added cost allocation unit.
     * @param string $Month Month, which is the current month by default if not provided.
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
