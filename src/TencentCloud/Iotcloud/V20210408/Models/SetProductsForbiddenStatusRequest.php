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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetProductsForbiddenStatus request structure.
 *
 * @method array getProductId() Obtain List of products to enable or disable
 * @method void setProductId(array $ProductId) Set List of products to enable or disable
 * @method integer getStatus() Obtain `0`: enable; `1`: disable
 * @method void setStatus(integer $Status) Set `0`: enable; `1`: disable
 */
class SetProductsForbiddenStatusRequest extends AbstractModel
{
    /**
     * @var array List of products to enable or disable
     */
    public $ProductId;

    /**
     * @var integer `0`: enable; `1`: disable
     */
    public $Status;

    /**
     * @param array $ProductId List of products to enable or disable
     * @param integer $Status `0`: enable; `1`: disable
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
