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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTrafficMirrorAttribute request structure.
 *
 * @method string getTrafficMirrorId() Obtain Traffic mirroring instance ID.
 * @method void setTrafficMirrorId(string $TrafficMirrorId) Set Traffic mirroring instance ID.
 * @method string getTrafficMirrorName() Obtain Traffic mirroring instance name.
 * @method void setTrafficMirrorName(string $TrafficMirrorName) Set Traffic mirroring instance name.
 * @method string getTrafficMirrorDescription() Obtain Traffic mirroring instance description information.
 * @method void setTrafficMirrorDescription(string $TrafficMirrorDescription) Set Traffic mirroring instance description information.
 */
class ModifyTrafficMirrorAttributeRequest extends AbstractModel
{
    /**
     * @var string Traffic mirroring instance ID.
     */
    public $TrafficMirrorId;

    /**
     * @var string Traffic mirroring instance name.
     */
    public $TrafficMirrorName;

    /**
     * @var string Traffic mirroring instance description information.
     */
    public $TrafficMirrorDescription;

    /**
     * @param string $TrafficMirrorId Traffic mirroring instance ID.
     * @param string $TrafficMirrorName Traffic mirroring instance name.
     * @param string $TrafficMirrorDescription Traffic mirroring instance description information.
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("TrafficMirrorName",$param) and $param["TrafficMirrorName"] !== null) {
            $this->TrafficMirrorName = $param["TrafficMirrorName"];
        }

        if (array_key_exists("TrafficMirrorDescription",$param) and $param["TrafficMirrorDescription"] !== null) {
            $this->TrafficMirrorDescription = $param["TrafficMirrorDescription"];
        }
    }
}
