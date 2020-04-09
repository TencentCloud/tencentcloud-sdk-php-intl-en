<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUsualLoginPlaces request structure.
 *
 * @method string getUuid() Obtain CWP agent `Uuid`
 * @method void setUuid(string $Uuid) Set CWP agent `Uuid`
 * @method array getCityIds() Obtain Added usual login city ID array
 * @method void setCityIds(array $CityIds) Set Added usual login city ID array
 */
class DeleteUsualLoginPlacesRequest extends AbstractModel
{
    /**
     * @var string CWP agent `Uuid`
     */
    public $Uuid;

    /**
     * @var array Added usual login city ID array
     */
    public $CityIds;

    /**
     * @param string $Uuid CWP agent `Uuid`
     * @param array $CityIds Added usual login city ID array
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("CityIds",$param) and $param["CityIds"] !== null) {
            $this->CityIds = $param["CityIds"];
        }
    }
}
