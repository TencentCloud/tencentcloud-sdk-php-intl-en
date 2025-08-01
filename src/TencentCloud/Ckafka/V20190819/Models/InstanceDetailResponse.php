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
 * Returned result of instance details
 *
 * @method integer getTotalCount() Obtain Total number of eligible instances
 * @method void setTotalCount(integer $TotalCount) Set Total number of eligible instances
 * @method array getInstanceList() Obtain List of eligible instance details
 * @method void setInstanceList(array $InstanceList) Set List of eligible instance details
 */
class InstanceDetailResponse extends AbstractModel
{
    /**
     * @var integer Total number of eligible instances
     */
    public $TotalCount;

    /**
     * @var array List of eligible instance details
     */
    public $InstanceList;

    /**
     * @param integer $TotalCount Total number of eligible instances
     * @param array $InstanceList List of eligible instance details
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new InstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }
    }
}
