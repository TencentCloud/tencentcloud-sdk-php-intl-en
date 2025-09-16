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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rolling update policy.
 *
 * @method NumOrPercent getMaxUnavailable() Obtain Maximum unavailability for rolling updates.
 * @method void setMaxUnavailable(NumOrPercent $MaxUnavailable) Set Maximum unavailability for rolling updates.
 * @method NumOrPercent getMaxSurge() Obtain Maximum number of new instances during rolling updates. 
 * @method void setMaxSurge(NumOrPercent $MaxSurge) Set Maximum number of new instances during rolling updates. 
 */
class RollingUpdate extends AbstractModel
{
    /**
     * @var NumOrPercent Maximum unavailability for rolling updates.
     */
    public $MaxUnavailable;

    /**
     * @var NumOrPercent Maximum number of new instances during rolling updates. 
     */
    public $MaxSurge;

    /**
     * @param NumOrPercent $MaxUnavailable Maximum unavailability for rolling updates.
     * @param NumOrPercent $MaxSurge Maximum number of new instances during rolling updates. 
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
        if (array_key_exists("MaxUnavailable",$param) and $param["MaxUnavailable"] !== null) {
            $this->MaxUnavailable = new NumOrPercent();
            $this->MaxUnavailable->deserialize($param["MaxUnavailable"]);
        }

        if (array_key_exists("MaxSurge",$param) and $param["MaxSurge"] !== null) {
            $this->MaxSurge = new NumOrPercent();
            $this->MaxSurge->deserialize($param["MaxSurge"]);
        }
    }
}
