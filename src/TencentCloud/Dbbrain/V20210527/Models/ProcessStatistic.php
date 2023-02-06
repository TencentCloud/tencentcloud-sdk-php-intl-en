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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-time session statistics.
 *
 * @method array getItems() Obtain Array of session details
 * @method void setItems(array $Items) Set Array of session details
 * @method integer getAllConnSum() Obtain The total number of connections
 * @method void setAllConnSum(integer $AllConnSum) Set The total number of connections
 * @method integer getActiveConnSum() Obtain The total number of active connections
 * @method void setActiveConnSum(integer $ActiveConnSum) Set The total number of active connections
 */
class ProcessStatistic extends AbstractModel
{
    /**
     * @var array Array of session details
     */
    public $Items;

    /**
     * @var integer The total number of connections
     */
    public $AllConnSum;

    /**
     * @var integer The total number of active connections
     */
    public $ActiveConnSum;

    /**
     * @param array $Items Array of session details
     * @param integer $AllConnSum The total number of connections
     * @param integer $ActiveConnSum The total number of active connections
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new SessionItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("AllConnSum",$param) and $param["AllConnSum"] !== null) {
            $this->AllConnSum = $param["AllConnSum"];
        }

        if (array_key_exists("ActiveConnSum",$param) and $param["ActiveConnSum"] !== null) {
            $this->ActiveConnSum = $param["ActiveConnSum"];
        }
    }
}
