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
 * Traffic mirroring receiving traffic information, returned when the receiving target is ENI or CLB.
 *
 * @method string getTargetId() Obtain Resource ID belonging to the receiving target.
 * @method void setTargetId(string $TargetId) Set Resource ID belonging to the receiving target.
 * @method string getTargetName() Obtain Resource name belonging to the receiving target.
 * @method void setTargetName(string $TargetName) Set Resource name belonging to the receiving target.
 */
class TrafficMirrorTargetResourceInfo extends AbstractModel
{
    /**
     * @var string Resource ID belonging to the receiving target.
     */
    public $TargetId;

    /**
     * @var string Resource name belonging to the receiving target.
     */
    public $TargetName;

    /**
     * @param string $TargetId Resource ID belonging to the receiving target.
     * @param string $TargetName Resource name belonging to the receiving target.
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
