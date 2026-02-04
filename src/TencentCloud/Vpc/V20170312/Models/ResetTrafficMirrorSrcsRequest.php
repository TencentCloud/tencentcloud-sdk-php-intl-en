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
 * ResetTrafficMirrorSrcs request structure.
 *
 * @method string getTrafficMirrorId() Obtain Traffic mirroring instance ID.
 * @method void setTrafficMirrorId(string $TrafficMirrorId) Set Traffic mirroring instance ID.
 * @method array getCollectorSrcs() Obtain Traffic mirroring collection object.
 * @method void setCollectorSrcs(array $CollectorSrcs) Set Traffic mirroring collection object.
 */
class ResetTrafficMirrorSrcsRequest extends AbstractModel
{
    /**
     * @var string Traffic mirroring instance ID.
     */
    public $TrafficMirrorId;

    /**
     * @var array Traffic mirroring collection object.
     */
    public $CollectorSrcs;

    /**
     * @param string $TrafficMirrorId Traffic mirroring instance ID.
     * @param array $CollectorSrcs Traffic mirroring collection object.
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

        if (array_key_exists("CollectorSrcs",$param) and $param["CollectorSrcs"] !== null) {
            $this->CollectorSrcs = $param["CollectorSrcs"];
        }
    }
}
