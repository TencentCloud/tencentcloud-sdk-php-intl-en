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
 * ScanEDRTaskAgain request structure.
 *
 * @method integer getTaskId() Obtain <p>Original task ID.</p>
 * @method void setTaskId(integer $TaskId) Set <p>Original task ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getAssetId() Obtain <p>Host Quuid or ContainerID (passed for single asset rescan on the details page; if empty, a full rescan is performed)</p>
 * @method void setAssetId(string $AssetId) Set <p>Host Quuid or ContainerID (passed for single asset rescan on the details page; if empty, a full rescan is performed)</p>
 */
class ScanEDRTaskAgainRequest extends AbstractModel
{
    /**
     * @var integer <p>Original task ID.</p>
     */
    public $TaskId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Host Quuid or ContainerID (passed for single asset rescan on the details page; if empty, a full rescan is performed)</p>
     */
    public $AssetId;

    /**
     * @param integer $TaskId <p>Original task ID.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $AssetId <p>Host Quuid or ContainerID (passed for single asset rescan on the details page; if empty, a full rescan is performed)</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }
    }
}
