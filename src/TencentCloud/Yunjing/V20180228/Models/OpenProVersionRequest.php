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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenProVersion request structure.
 *
 * @method string getMachineType() Obtain Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
 * @method void setMachineType(string $MachineType) Set Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
 * @method string getMachineRegion() Obtain Server region
Examples: ap-guangzhou, ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) Set Server region
Examples: ap-guangzhou, ap-shanghai
 * @method array getQuuids() Obtain Server `Uuid` array.
`InstanceId` for BM or `Uuid` for CVM
 * @method void setQuuids(array $Quuids) Set Server `Uuid` array.
`InstanceId` for BM or `Uuid` for CVM
 * @method integer getActivityId() Obtain Event ID.
 * @method void setActivityId(integer $ActivityId) Set Event ID.
 */
class OpenProVersionRequest extends AbstractModel
{
    /**
     * @var string Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
     */
    public $MachineType;

    /**
     * @var string Server region
Examples: ap-guangzhou, ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var array Server `Uuid` array.
`InstanceId` for BM or `Uuid` for CVM
     */
    public $Quuids;

    /**
     * @var integer Event ID.
     */
    public $ActivityId;

    /**
     * @param string $MachineType Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
     * @param string $MachineRegion Server region
Examples: ap-guangzhou, ap-shanghai
     * @param array $Quuids Server `Uuid` array.
`InstanceId` for BM or `Uuid` for CVM
     * @param integer $ActivityId Event ID.
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }
    }
}
