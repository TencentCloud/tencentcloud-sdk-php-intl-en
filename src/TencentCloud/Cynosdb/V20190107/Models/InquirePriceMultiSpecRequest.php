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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceMultiSpec request structure.
 *
 * @method string getZone() Obtain AZ. Best practice provided by each region
 * @method void setZone(string $Zone) Set AZ. Best practice provided by each region
 * @method string getInstancePayMode() Obtain Instance purchase type. Available values are: PREPAID, POSTPAID, SERVERLESS
 * @method void setInstancePayMode(string $InstancePayMode) Set Instance purchase type. Available values are: PREPAID, POSTPAID, SERVERLESS
 * @method string getStoragePayMode() Obtain Storage purchase type. Available values are: PREPAID, POSTPAID
 * @method void setStoragePayMode(string $StoragePayMode) Set Storage purchase type. Available values are: PREPAID, POSTPAID
 * @method array getGoodsSpecs() Obtain Product specification
 * @method void setGoodsSpecs(array $GoodsSpecs) Set Product specification
 */
class InquirePriceMultiSpecRequest extends AbstractModel
{
    /**
     * @var string AZ. Best practice provided by each region
     */
    public $Zone;

    /**
     * @var string Instance purchase type. Available values are: PREPAID, POSTPAID, SERVERLESS
     */
    public $InstancePayMode;

    /**
     * @var string Storage purchase type. Available values are: PREPAID, POSTPAID
     */
    public $StoragePayMode;

    /**
     * @var array Product specification
     */
    public $GoodsSpecs;

    /**
     * @param string $Zone AZ. Best practice provided by each region
     * @param string $InstancePayMode Instance purchase type. Available values are: PREPAID, POSTPAID, SERVERLESS
     * @param string $StoragePayMode Storage purchase type. Available values are: PREPAID, POSTPAID
     * @param array $GoodsSpecs Product specification
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("GoodsSpecs",$param) and $param["GoodsSpecs"] !== null) {
            $this->GoodsSpecs = [];
            foreach ($param["GoodsSpecs"] as $key => $value){
                $obj = new GoodsSpec();
                $obj->deserialize($value);
                array_push($this->GoodsSpecs, $obj);
            }
        }
    }
}
