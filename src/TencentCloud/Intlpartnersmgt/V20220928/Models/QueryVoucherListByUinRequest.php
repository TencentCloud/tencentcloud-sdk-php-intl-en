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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryVoucherListByUin request structure.
 *
 * @method array getClientUins() Obtain Customer UIN list. Array length value: 1-20.
 * @method void setClientUins(array $ClientUins) Set Customer UIN list. Array length value: 1-20.
 * @method string getStatus() Obtain Voucher status. If this parameter is not passed in, all status will be queried by default. Valid values: `Unused`, `Used`, `Expired`.
 * @method void setStatus(string $Status) Set Voucher status. If this parameter is not passed in, all status will be queried by default. Valid values: `Unused`, `Used`, `Expired`.
 */
class QueryVoucherListByUinRequest extends AbstractModel
{
    /**
     * @var array Customer UIN list. Array length value: 1-20.
     */
    public $ClientUins;

    /**
     * @var string Voucher status. If this parameter is not passed in, all status will be queried by default. Valid values: `Unused`, `Used`, `Expired`.
     */
    public $Status;

    /**
     * @param array $ClientUins Customer UIN list. Array length value: 1-20.
     * @param string $Status Voucher status. If this parameter is not passed in, all status will be queried by default. Valid values: `Unused`, `Used`, `Expired`.
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
        if (array_key_exists("ClientUins",$param) and $param["ClientUins"] !== null) {
            $this->ClientUins = $param["ClientUins"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
