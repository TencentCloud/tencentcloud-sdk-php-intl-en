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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load configuration for a single stage in concurrency mode
 *
 * @method integer getDurationSeconds() Obtain Duration time of this stage.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDurationSeconds(integer $DurationSeconds) Set Duration time of this stage.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getTargetVirtualUsers() Obtain Target number of virtual users.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTargetVirtualUsers(integer $TargetVirtualUsers) Set Target number of virtual users.

Note: This field may return null, indicating that no valid value is found.
 */
class Stage extends AbstractModel
{
    /**
     * @var integer Duration time of this stage.

Note: This field may return null, indicating that no valid value is found.
     */
    public $DurationSeconds;

    /**
     * @var integer Target number of virtual users.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TargetVirtualUsers;

    /**
     * @param integer $DurationSeconds Duration time of this stage.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $TargetVirtualUsers Target number of virtual users.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("TargetVirtualUsers",$param) and $param["TargetVirtualUsers"] !== null) {
            $this->TargetVirtualUsers = $param["TargetVirtualUsers"];
        }
    }
}
