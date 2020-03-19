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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 * @method array getSpecItems() Obtain Purchasable specification information
 * @method void setSpecItems(array $SpecItems) Set Purchasable specification information
 */

/**
 *Instance specification information
 */
class SpecificationInfo extends AbstractModel
{
    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @var array Purchasable specification information
     */
    public $SpecItems;
    /**
     * @param string $Region Region information
     * @param string $Zone AZ information
     * @param array $SpecItems Purchasable specification information
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecItems",$param) and $param["SpecItems"] !== null) {
            $this->SpecItems = [];
            foreach ($param["SpecItems"] as $key => $value){
                $obj = new SpecItem();
                $obj->deserialize($value);
                array_push($this->SpecItems, $obj);
            }
        }
    }
}
