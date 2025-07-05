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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queries APIs bound with an upstream
 *
 * @method integer getTotalCount() Obtain Total number
 * @method void setTotalCount(integer $TotalCount) Set Total number
 * @method array getBindApiSet() Obtain Information of bound APIs
 * @method void setBindApiSet(array $BindApiSet) Set Information of bound APIs
 */
class DescribeUpstreamBindApis extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $TotalCount;

    /**
     * @var array Information of bound APIs
     */
    public $BindApiSet;

    /**
     * @param integer $TotalCount Total number
     * @param array $BindApiSet Information of bound APIs
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

        if (array_key_exists("BindApiSet",$param) and $param["BindApiSet"] !== null) {
            $this->BindApiSet = [];
            foreach ($param["BindApiSet"] as $key => $value){
                $obj = new BindApiInfo();
                $obj->deserialize($value);
                array_push($this->BindApiSet, $obj);
            }
        }
    }
}
