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
 * Product resources
 *
 * @method string getProductResourceId() Obtain Product resource ID.
 * @method void setProductResourceId(string $ProductResourceId) Set Product resource ID.
 * @method string getResourceGrantLast() Obtain The last section of the six-segment resource description.
 * @method void setResourceGrantLast(string $ResourceGrantLast) Set The last section of the six-segment resource description.
 */
class ProductResource extends AbstractModel
{
    /**
     * @var string Product resource ID.
     */
    public $ProductResourceId;

    /**
     * @var string The last section of the six-segment resource description.
     * @deprecated
     */
    public $ResourceGrantLast;

    /**
     * @param string $ProductResourceId Product resource ID.
     * @param string $ResourceGrantLast The last section of the six-segment resource description.
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
        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }

        if (array_key_exists("ResourceGrantLast",$param) and $param["ResourceGrantLast"] !== null) {
            $this->ResourceGrantLast = $param["ResourceGrantLast"];
        }
    }
}
