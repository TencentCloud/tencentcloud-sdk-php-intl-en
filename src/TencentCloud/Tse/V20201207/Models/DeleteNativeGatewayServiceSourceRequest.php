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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNativeGatewayServiceSource request structure.
 *
 * @method string getGatewayID() Obtain Gateway instance ID
 * @method void setGatewayID(string $GatewayID) Set Gateway instance ID
 * @method string getSourceID() Obtain Service source instance ID
 * @method void setSourceID(string $SourceID) Set Service source instance ID
 */
class DeleteNativeGatewayServiceSourceRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayID;

    /**
     * @var string Service source instance ID
     */
    public $SourceID;

    /**
     * @param string $GatewayID Gateway instance ID
     * @param string $SourceID Service source instance ID
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
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }
    }
}
