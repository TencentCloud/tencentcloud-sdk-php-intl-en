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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image information of the target region.
 *
 * @method string getRegion() Obtain Target region.
 * @method void setRegion(string $Region) Set Target region.
 * @method string getBlueprintId() Obtain Target region image ID.
 * @method void setBlueprintId(string $BlueprintId) Set Target region image ID.
 */
class DestinationRegionBlueprint extends AbstractModel
{
    /**
     * @var string Target region.
     */
    public $Region;

    /**
     * @var string Target region image ID.
     */
    public $BlueprintId;

    /**
     * @param string $Region Target region.
     * @param string $BlueprintId Target region image ID.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }
    }
}
