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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GAAP instance details - Asynchronous associate cloud resources data structure
 *
 * @method array getInstanceList() Obtain Instance details
 * @method void setInstanceList(array $InstanceList) Set Instance details
 * @method integer getTotalCount() Obtain Total number.
 * @method void setTotalCount(integer $TotalCount) Set Total number.
 * @method string getError() Obtain Error message	
 * @method void setError(string $Error) Set Error message	
 */
class GAAPInstanceList extends AbstractModel
{
    /**
     * @var array Instance details
     */
    public $InstanceList;

    /**
     * @var integer Total number.
     */
    public $TotalCount;

    /**
     * @var string Error message	
     */
    public $Error;

    /**
     * @param array $InstanceList Instance details
     * @param integer $TotalCount Total number.
     * @param string $Error Error message	
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
                $obj = new GAAPInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
