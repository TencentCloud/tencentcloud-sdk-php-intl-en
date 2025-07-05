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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelIgnoreVul request structure.
 *
 * @method string getEventIds() Obtain Vulnerability event ID string (multiple entries are separated by comma)
 * @method void setEventIds(string $EventIds) Set Vulnerability event ID string (multiple entries are separated by comma)
 */
class CancelIgnoreVulRequest extends AbstractModel
{
    /**
     * @var string Vulnerability event ID string (multiple entries are separated by comma)
     */
    public $EventIds;

    /**
     * @param string $EventIds Vulnerability event ID string (multiple entries are separated by comma)
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
        if (array_key_exists("EventIds",$param) and $param["EventIds"] !== null) {
            $this->EventIds = $param["EventIds"];
        }
    }
}
