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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosAuditBucketMonitorStatus request structure.
 *
 * @method array getBucketNameSet() Obtain Bucket collection
 * @method void setBucketNameSet(array $BucketNameSet) Set Bucket collection
 * @method integer getMonitorStatus() Obtain 0: disabled, 1: enabled.
 * @method void setMonitorStatus(integer $MonitorStatus) Set 0: disabled, 1: enabled.
 */
class ModifyCosAuditBucketMonitorStatusRequest extends AbstractModel
{
    /**
     * @var array Bucket collection
     */
    public $BucketNameSet;

    /**
     * @var integer 0: disabled, 1: enabled.
     */
    public $MonitorStatus;

    /**
     * @param array $BucketNameSet Bucket collection
     * @param integer $MonitorStatus 0: disabled, 1: enabled.
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
        if (array_key_exists("BucketNameSet",$param) and $param["BucketNameSet"] !== null) {
            $this->BucketNameSet = $param["BucketNameSet"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }
    }
}
