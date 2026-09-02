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
 * ModifyDspmAssetLogDeliverySwitch request structure.
 *
 * @method string getAssetId() Obtain Instance ID.
 * @method void setAssetId(string $AssetId) Set Instance ID.
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method integer getEnable() Obtain Switch. 1: On; 0: Off
 * @method void setEnable(integer $Enable) Set Switch. 1: On; 0: Off
 */
class ModifyDspmAssetLogDeliverySwitchRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $AssetId;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var integer Switch. 1: On; 0: Off
     */
    public $Enable;

    /**
     * @param string $AssetId Instance ID.
     * @param array $MemberId Group Account Member ID
     * @param integer $Enable Switch. 1: On; 0: Off
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
