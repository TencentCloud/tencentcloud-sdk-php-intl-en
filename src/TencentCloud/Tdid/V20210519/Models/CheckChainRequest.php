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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckChain request structure.
 *
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method string getAgencyName() Obtain The name of the DID organization.
 * @method void setAgencyName(string $AgencyName) Set The name of the DID organization.
 */
class CheckChainRequest extends AbstractModel
{
    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var string The name of the DID organization.
     */
    public $AgencyName;

    /**
     * @param integer $GroupId The group ID.
     * @param string $ClusterId The network ID.
     * @param string $AgencyName The name of the DID organization.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AgencyName",$param) and $param["AgencyName"] !== null) {
            $this->AgencyName = $param["AgencyName"];
        }
    }
}
