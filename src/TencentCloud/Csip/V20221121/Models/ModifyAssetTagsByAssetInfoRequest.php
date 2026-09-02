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
 * ModifyAssetTagsByAssetInfo request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method array getAssets() Obtain <p>Asset list</p>
 * @method void setAssets(array $Assets) Set <p>Asset list</p>
 * @method array getTagIDs() Obtain <p>Tag ID list</p>
 * @method void setTagIDs(array $TagIDs) Set <p>Tag ID list</p>
 * @method string getOperationType() Obtain <p>Operation type</p>
 * @method void setOperationType(string $OperationType) Set <p>Operation type</p>
 */
class ModifyAssetTagsByAssetInfoRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var array <p>Asset list</p>
     */
    public $Assets;

    /**
     * @var array <p>Tag ID list</p>
     */
    public $TagIDs;

    /**
     * @var string <p>Operation type</p>
     */
    public $OperationType;

    /**
     * @param array $MemberId <p>Group account member id.</p>
     * @param array $Assets <p>Asset list</p>
     * @param array $TagIDs <p>Tag ID list</p>
     * @param string $OperationType <p>Operation type</p>
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

        if (array_key_exists("Assets",$param) and $param["Assets"] !== null) {
            $this->Assets = [];
            foreach ($param["Assets"] as $key => $value){
                $obj = new AssetTagModifyAssetItem();
                $obj->deserialize($value);
                array_push($this->Assets, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
