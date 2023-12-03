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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRollbackRangeTime request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getIsRemoteZone() Obtain Whether the clone instance and the source instance are in the same AZ. Valid values: `true` (yes), `false` (no).
 * @method void setIsRemoteZone(string $IsRemoteZone) Set Whether the clone instance and the source instance are in the same AZ. Valid values: `true` (yes), `false` (no).
 * @method string getBackupRegion() Obtain The region of the clone instance, such as `ap-guangzhou`.
 * @method void setBackupRegion(string $BackupRegion) Set The region of the clone instance, such as `ap-guangzhou`.
 */
class DescribeRollbackRangeTimeRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceIds;

    /**
     * @var string Whether the clone instance and the source instance are in the same AZ. Valid values: `true` (yes), `false` (no).
     */
    public $IsRemoteZone;

    /**
     * @var string The region of the clone instance, such as `ap-guangzhou`.
     */
    public $BackupRegion;

    /**
     * @param array $InstanceIds Instance ID list. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $IsRemoteZone Whether the clone instance and the source instance are in the same AZ. Valid values: `true` (yes), `false` (no).
     * @param string $BackupRegion The region of the clone instance, such as `ap-guangzhou`.
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

        if (array_key_exists("IsRemoteZone",$param) and $param["IsRemoteZone"] !== null) {
            $this->IsRemoteZone = $param["IsRemoteZone"];
        }

        if (array_key_exists("BackupRegion",$param) and $param["BackupRegion"] !== null) {
            $this->BackupRegion = $param["BackupRegion"];
        }
    }
}
