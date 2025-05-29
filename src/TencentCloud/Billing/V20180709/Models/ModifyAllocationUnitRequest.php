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
 * ModifyAllocationUnit request structure.
 *
 * @method integer getId() Obtain ID of the modified cost allocation unit.
 * @method void setId(integer $Id) Set ID of the modified cost allocation unit.
 * @method string getName() Obtain Modified cost allocation unit name.
 * @method void setName(string $Name) Set Modified cost allocation unit name.
 * @method string getSourceName() Obtain Modified cost allocation unit source organization name.
 * @method void setSourceName(string $SourceName) Set Modified cost allocation unit source organization name.
 * @method string getSourceId() Obtain Modified allocation unit source organization ID.
 * @method void setSourceId(string $SourceId) Set Modified allocation unit source organization ID.
 * @method string getRemark() Obtain Cost allocation unit remark description.
 * @method void setRemark(string $Remark) Set Cost allocation unit remark description.
 * @method string getMonth() Obtain Month, the current month by default if not provided.
 * @method void setMonth(string $Month) Set Month, the current month by default if not provided.
 */
class ModifyAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer ID of the modified cost allocation unit.
     */
    public $Id;

    /**
     * @var string Modified cost allocation unit name.
     */
    public $Name;

    /**
     * @var string Modified cost allocation unit source organization name.
     */
    public $SourceName;

    /**
     * @var string Modified allocation unit source organization ID.
     */
    public $SourceId;

    /**
     * @var string Cost allocation unit remark description.
     */
    public $Remark;

    /**
     * @var string Month, the current month by default if not provided.
     */
    public $Month;

    /**
     * @param integer $Id ID of the modified cost allocation unit.
     * @param string $Name Modified cost allocation unit name.
     * @param string $SourceName Modified cost allocation unit source organization name.
     * @param string $SourceId Modified allocation unit source organization ID.
     * @param string $Remark Cost allocation unit remark description.
     * @param string $Month Month, the current month by default if not provided.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
