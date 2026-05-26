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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unified ID data returned on successful operation (Integer type).
 *
 * @method integer getResourceId() Obtain Resource ID returned by the operation. Valid values: 0: No preview exists; 1: Preview exists and was uploaded by the current user; 2: Preview exists and was uploaded by another user. Example value: 2940.
 * @method void setResourceId(integer $ResourceId) Set Resource ID returned by the operation. Valid values: 0: No preview exists; 1: Preview exists and was uploaded by the current user; 2: Preview exists and was uploaded by another user. Example value: 2940.
 */
class ResourceIdInfo extends AbstractModel
{
    /**
     * @var integer Resource ID returned by the operation. Valid values: 0: No preview exists; 1: Preview exists and was uploaded by the current user; 2: Preview exists and was uploaded by another user. Example value: 2940.
     */
    public $ResourceId;

    /**
     * @param integer $ResourceId Resource ID returned by the operation. Valid values: 0: No preview exists; 1: Preview exists and was uploaded by the current user; 2: Preview exists and was uploaded by another user. Example value: 2940.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
