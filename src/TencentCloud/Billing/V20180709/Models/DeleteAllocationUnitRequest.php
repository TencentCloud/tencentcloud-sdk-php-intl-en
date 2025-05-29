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
 * DeleteAllocationUnit request structure.
 *
 * @method integer getId() Obtain Specifies the deleted cost allocation unit ID.
 * @method void setId(integer $Id) Set Specifies the deleted cost allocation unit ID.
 * @method string getMonth() Obtain Month, which is the current month by default if not provided.
 * @method void setMonth(string $Month) Set Month, which is the current month by default if not provided.
 */
class DeleteAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer Specifies the deleted cost allocation unit ID.
     */
    public $Id;

    /**
     * @var string Month, which is the current month by default if not provided.
     */
    public $Month;

    /**
     * @param integer $Id Specifies the deleted cost allocation unit ID.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
