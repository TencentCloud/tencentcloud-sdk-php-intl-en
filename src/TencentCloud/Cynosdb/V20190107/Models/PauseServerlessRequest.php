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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PauseServerless request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getForcePause() Obtain Whether to pause forcibly and ignore the current user connections. Valid values: `0` (no), `1` (yes). Default value: `1`
 * @method void setForcePause(integer $ForcePause) Set Whether to pause forcibly and ignore the current user connections. Valid values: `0` (no), `1` (yes). Default value: `1`
 */
class PauseServerlessRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Whether to pause forcibly and ignore the current user connections. Valid values: `0` (no), `1` (yes). Default value: `1`
     */
    public $ForcePause;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $ForcePause Whether to pause forcibly and ignore the current user connections. Valid values: `0` (no), `1` (yes). Default value: `1`
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ForcePause",$param) and $param["ForcePause"] !== null) {
            $this->ForcePause = $param["ForcePause"];
        }
    }
}
