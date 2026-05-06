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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service route list of kong
 *
 * @method array getRouteList() Obtain None.
 * @method void setRouteList(array $RouteList) Set None.
 * @method integer getTotalCount() Obtain Total number.
 * @method void setTotalCount(integer $TotalCount) Set Total number.
 */
class KongServiceRouteList extends AbstractModel
{
    /**
     * @var array None.
     */
    public $RouteList;

    /**
     * @var integer Total number.
     */
    public $TotalCount;

    /**
     * @param array $RouteList None.
     * @param integer $TotalCount Total number.
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
        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new KongRoutePreview();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
