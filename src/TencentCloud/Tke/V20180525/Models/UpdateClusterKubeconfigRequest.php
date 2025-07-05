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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClusterKubeconfig request structure.
 *
 * @method string getClusterId() Obtain The cluster ID.
 * @method void setClusterId(string $ClusterId) Set The cluster ID.
 * @method array getSubAccounts() Obtain List of sub-account UINs. If it’s not specified, the SubUin used to invoke this API is used.
 * @method void setSubAccounts(array $SubAccounts) Set List of sub-account UINs. If it’s not specified, the SubUin used to invoke this API is used.
 */
class UpdateClusterKubeconfigRequest extends AbstractModel
{
    /**
     * @var string The cluster ID.
     */
    public $ClusterId;

    /**
     * @var array List of sub-account UINs. If it’s not specified, the SubUin used to invoke this API is used.
     */
    public $SubAccounts;

    /**
     * @param string $ClusterId The cluster ID.
     * @param array $SubAccounts List of sub-account UINs. If it’s not specified, the SubUin used to invoke this API is used.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SubAccounts",$param) and $param["SubAccounts"] !== null) {
            $this->SubAccounts = $param["SubAccounts"];
        }
    }
}
