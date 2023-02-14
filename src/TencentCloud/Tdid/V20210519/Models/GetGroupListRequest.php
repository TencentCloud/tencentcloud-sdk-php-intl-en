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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetGroupList request structure.
 *
 * @method integer getStatus() Obtain `0`: Groups with no DID services; `1`: Groups with DID services.
 * @method void setStatus(integer $Status) Set `0`: Groups with no DID services; `1`: Groups with DID services.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 */
class GetGroupListRequest extends AbstractModel
{
    /**
     * @var integer `0`: Groups with no DID services; `1`: Groups with DID services.
     */
    public $Status;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @param integer $Status `0`: Groups with no DID services; `1`: Groups with DID services.
     * @param string $ClusterId The network ID.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
