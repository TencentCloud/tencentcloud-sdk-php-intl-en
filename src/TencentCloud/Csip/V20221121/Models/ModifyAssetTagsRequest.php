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
 * ModifyAssetTags request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method array getAssetRIDs() Obtain List of asset RIDs.
 * @method void setAssetRIDs(array $AssetRIDs) Set List of asset RIDs.
 * @method array getTagIDs() Obtain List of tag IDs
 * @method void setTagIDs(array $TagIDs) Set List of tag IDs
 * @method string getOperationType() Obtain Operation type.
 * @method void setOperationType(string $OperationType) Set Operation type.
 */
class ModifyAssetTagsRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var array List of asset RIDs.
     */
    public $AssetRIDs;

    /**
     * @var array List of tag IDs
     */
    public $TagIDs;

    /**
     * @var string Operation type.
     */
    public $OperationType;

    /**
     * @param array $MemberId <p>Group account member id.</p>
     * @param array $AssetRIDs List of asset RIDs.
     * @param array $TagIDs List of tag IDs
     * @param string $OperationType Operation type.
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetRIDs",$param) and $param["AssetRIDs"] !== null) {
            $this->AssetRIDs = $param["AssetRIDs"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
