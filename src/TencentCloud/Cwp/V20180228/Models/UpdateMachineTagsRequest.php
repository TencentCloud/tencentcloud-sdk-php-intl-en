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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateMachineTags request structure.
 *
 * @method string getQuuid() Obtain Machine QUUID
 * @method void setQuuid(string $Quuid) Set Machine QUUID
 * @method array getTagIds() Obtain Tag ID. This operation will overwrite the existing Tag list.
 * @method void setTagIds(array $TagIds) Set Tag ID. This operation will overwrite the existing Tag list.
 * @method string getMachineRegion() Obtain Server region. For example, ap-guangzhou.
 * @method void setMachineRegion(string $MachineRegion) Set Server region. For example, ap-guangzhou.
 * @method string getMachineArea() Obtain Server type (CVM|BM|ECM|LH|Other)
 * @method void setMachineArea(string $MachineArea) Set Server type (CVM|BM|ECM|LH|Other)
 */
class UpdateMachineTagsRequest extends AbstractModel
{
    /**
     * @var string Machine QUUID
     */
    public $Quuid;

    /**
     * @var array Tag ID. This operation will overwrite the existing Tag list.
     */
    public $TagIds;

    /**
     * @var string Server region. For example, ap-guangzhou.
     */
    public $MachineRegion;

    /**
     * @var string Server type (CVM|BM|ECM|LH|Other)
     */
    public $MachineArea;

    /**
     * @param string $Quuid Machine QUUID
     * @param array $TagIds Tag ID. This operation will overwrite the existing Tag list.
     * @param string $MachineRegion Server region. For example, ap-guangzhou.
     * @param string $MachineArea Server type (CVM|BM|ECM|LH|Other)
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("MachineArea",$param) and $param["MachineArea"] !== null) {
            $this->MachineArea = $param["MachineArea"];
        }
    }
}
