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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateHourDCDBInstance request structure.
 *
 * @method array getInstanceIds() Obtain ID list of the instances to be upgraded  in the format of  `dcdbt-ow728lmc`, which can be obtained through the `DescribeDCDBInstances` API.
 * @method void setInstanceIds(array $InstanceIds) Set ID list of the instances to be upgraded  in the format of  `dcdbt-ow728lmc`, which can be obtained through the `DescribeDCDBInstances` API.
 */
class IsolateHourDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var array ID list of the instances to be upgraded  in the format of  `dcdbt-ow728lmc`, which can be obtained through the `DescribeDCDBInstances` API.
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds ID list of the instances to be upgraded  in the format of  `dcdbt-ow728lmc`, which can be obtained through the `DescribeDCDBInstances` API.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
