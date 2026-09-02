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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClusterOwner request structure.
 *
 * @method array getClusterCaMD5List() Obtain <p>List of cluster ClusterCaMD5</p>
 * @method void setClusterCaMD5List(array $ClusterCaMD5List) Set <p>List of cluster ClusterCaMD5</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getOwnerName() Obtain <p>Owner name</p>
 * @method void setOwnerName(string $OwnerName) Set <p>Owner name</p>
 */
class UpdateClusterOwnerRequest extends AbstractModel
{
    /**
     * @var array <p>List of cluster ClusterCaMD5</p>
     */
    public $ClusterCaMD5List;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Owner name</p>
     */
    public $OwnerName;

    /**
     * @param array $ClusterCaMD5List <p>List of cluster ClusterCaMD5</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $OwnerName <p>Owner name</p>
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
        if (array_key_exists("ClusterCaMD5List",$param) and $param["ClusterCaMD5List"] !== null) {
            $this->ClusterCaMD5List = $param["ClusterCaMD5List"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }
    }
}
