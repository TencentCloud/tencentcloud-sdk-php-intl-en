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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregated returned result of instance status
 *
 * @method array getInstanceList() Obtain Specifies the list of instances meeting the conditions.
 * @method void setInstanceList(array $InstanceList) Set Specifies the list of instances meeting the conditions.
 * @method integer getTotalCount() Obtain Total results that meet the conditions.
 * @method void setTotalCount(integer $TotalCount) Set Total results that meet the conditions.
 */
class InstanceResponse extends AbstractModel
{
    /**
     * @var array Specifies the list of instances meeting the conditions.
     */
    public $InstanceList;

    /**
     * @var integer Total results that meet the conditions.
     */
    public $TotalCount;

    /**
     * @param array $InstanceList Specifies the list of instances meeting the conditions.
     * @param integer $TotalCount Total results that meet the conditions.
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
        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
