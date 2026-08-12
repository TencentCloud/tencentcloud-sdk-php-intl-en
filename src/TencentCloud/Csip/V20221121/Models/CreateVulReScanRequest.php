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
 * CreateVulReScan request structure.
 *
 * @method array getVulId() Obtain <p>Vulnerability ID</p>
 * @method void setVulId(array $VulId) Set <p>Vulnerability ID</p>
 * @method array getKbNo() Obtain <p>Patch Number</p>
 * @method void setKbNo(array $KbNo) Set <p>Patch Number</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getAssetList() Obtain <p>Asset list</p>
 * @method void setAssetList(array $AssetList) Set <p>Asset list</p>
 */
class CreateVulReScanRequest extends AbstractModel
{
    /**
     * @var array <p>Vulnerability ID</p>
     */
    public $VulId;

    /**
     * @var array <p>Patch Number</p>
     */
    public $KbNo;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Asset list</p>
     */
    public $AssetList;

    /**
     * @param array $VulId <p>Vulnerability ID</p>
     * @param array $KbNo <p>Patch Number</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $AssetList <p>Asset list</p>
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }
    }
}
