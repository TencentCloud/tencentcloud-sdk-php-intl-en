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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whether there are scheduling tasks in each AZ during proxy scheduling.
 *
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method boolean getNodePermWipeFlag() Obtain The value is true when there are scheduling tasks to be eliminated and no AZs for switchback; otherwise, it is false.
 * @method void setNodePermWipeFlag(boolean $NodePermWipeFlag) Set The value is true when there are scheduling tasks to be eliminated and no AZs for switchback; otherwise, it is false.
 */
class ZoneScheduledItem extends AbstractModel
{
    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var boolean The value is true when there are scheduling tasks to be eliminated and no AZs for switchback; otherwise, it is false.
     */
    public $NodePermWipeFlag;

    /**
     * @param string $ZoneId Availability zone ID.
     * @param boolean $NodePermWipeFlag The value is true when there are scheduling tasks to be eliminated and no AZs for switchback; otherwise, it is false.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NodePermWipeFlag",$param) and $param["NodePermWipeFlag"] !== null) {
            $this->NodePermWipeFlag = $param["NodePermWipeFlag"];
        }
    }
}
