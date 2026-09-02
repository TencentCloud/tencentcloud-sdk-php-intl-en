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
 * Risk information grouped by risk engine
 *
 * @method string getEngineType() Obtain <p>Risk engine</p>
 * @method void setEngineType(string $EngineType) Set <p>Risk engine</p>
 * @method array getRisks() Obtain <p>Risk distribution of a specific risk under the risk engine</p>
 * @method void setRisks(array $Risks) Set <p>Risk distribution of a specific risk under the risk engine</p>
 * @method string getAssetRID() Obtain <p>Asset ID.</p>
 * @method void setAssetRID(string $AssetRID) Set <p>Asset ID.</p>
 */
class AssetRiskContent extends AbstractModel
{
    /**
     * @var string <p>Risk engine</p>
     */
    public $EngineType;

    /**
     * @var array <p>Risk distribution of a specific risk under the risk engine</p>
     */
    public $Risks;

    /**
     * @var string <p>Asset ID.</p>
     */
    public $AssetRID;

    /**
     * @param string $EngineType <p>Risk engine</p>
     * @param array $Risks <p>Risk distribution of a specific risk under the risk engine</p>
     * @param string $AssetRID <p>Asset ID.</p>
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
        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Risks",$param) and $param["Risks"] !== null) {
            $this->Risks = [];
            foreach ($param["Risks"] as $key => $value){
                $obj = new AssetRiskInfo();
                $obj->deserialize($value);
                array_push($this->Risks, $obj);
            }
        }

        if (array_key_exists("AssetRID",$param) and $param["AssetRID"] !== null) {
            $this->AssetRID = $param["AssetRID"];
        }
    }
}
