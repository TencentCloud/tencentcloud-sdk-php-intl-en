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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDiskIds() Obtain The ID(s) of one or multiple cloud disks to be operated. The maximum number of cloud disks per request is 100.
 * @method void setDiskIds(array $DiskIds) Set The ID(s) of one or multiple cloud disks to be operated. The maximum number of cloud disks per request is 100.
 * @method DiskChargePrepaid getDiskChargePrepaid() Obtain 
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) Set 
 */

/**
 *ModifyDisksChargeType request structure.
 */
class ModifyDisksChargeTypeRequest extends AbstractModel
{
    /**
     * @var array The ID(s) of one or multiple cloud disks to be operated. The maximum number of cloud disks per request is 100.
     */
    public $DiskIds;

    /**
     * @var DiskChargePrepaid 
     */
    public $DiskChargePrepaid;
    /**
     * @param array $DiskIds The ID(s) of one or multiple cloud disks to be operated. The maximum number of cloud disks per request is 100.
     * @param DiskChargePrepaid $DiskChargePrepaid 
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }
    }
}
