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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information for media transmission.
 *
 * @method array getRegions() Obtain List of region information for media direct transmission.
 * @method void setRegions(array $Regions) Set List of region information for media direct transmission.
 */
class StreamLinkRegionInfo extends AbstractModel
{
    /**
     * @var array List of region information for media direct transmission.
     */
    public $Regions;

    /**
     * @param array $Regions List of region information for media direct transmission.
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
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }
    }
}
