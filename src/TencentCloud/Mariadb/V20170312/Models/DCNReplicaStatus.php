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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCN status information
 *
 * @method string getStatus() Obtain DCN running status. Valid values: `START` (running), `STOP` (pause).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set DCN running status. Valid values: `START` (running), `STOP` (pause).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDelay() Obtain The current delay, which takes the delay value of the replica instance.
 * @method void setDelay(integer $Delay) Set The current delay, which takes the delay value of the replica instance.
 */
class DCNReplicaStatus extends AbstractModel
{
    /**
     * @var string DCN running status. Valid values: `START` (running), `STOP` (pause).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer The current delay, which takes the delay value of the replica instance.
     */
    public $Delay;

    /**
     * @param string $Status DCN running status. Valid values: `START` (running), `STOP` (pause).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Delay The current delay, which takes the delay value of the replica instance.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Delay",$param) and $param["Delay"] !== null) {
            $this->Delay = $param["Delay"];
        }
    }
}
