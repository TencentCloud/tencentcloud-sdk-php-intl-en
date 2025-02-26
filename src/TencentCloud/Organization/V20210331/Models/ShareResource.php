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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared resources
 *
 * @method string getResourceId() Obtain Shared resource ID.
 * @method void setResourceId(string $ResourceId) Set Shared resource ID.
 * @method string getProductResourceId() Obtain Product resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductResourceId(string $ProductResourceId) Set Product resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ShareResource extends AbstractModel
{
    /**
     * @var string Shared resource ID.
     * @deprecated
     */
    public $ResourceId;

    /**
     * @var string Product resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductResourceId;

    /**
     * @param string $ResourceId Shared resource ID.
     * @param string $ProductResourceId Product resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }
    }
}
