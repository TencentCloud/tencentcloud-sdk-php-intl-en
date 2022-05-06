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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The returned result of upstream query
 *
 * @method integer getTotalCount() Obtain Total number of results
 * @method void setTotalCount(integer $TotalCount) Set Total number of results
 * @method array getUpstreamSet() Obtain List of query result
 * @method void setUpstreamSet(array $UpstreamSet) Set List of query result
 */
class DescribeUpstreamInfo extends AbstractModel
{
    /**
     * @var integer Total number of results
     */
    public $TotalCount;

    /**
     * @var array List of query result
     */
    public $UpstreamSet;

    /**
     * @param integer $TotalCount Total number of results
     * @param array $UpstreamSet List of query result
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

        if (array_key_exists("UpstreamSet",$param) and $param["UpstreamSet"] !== null) {
            $this->UpstreamSet = [];
            foreach ($param["UpstreamSet"] as $key => $value){
                $obj = new UpstreamInfo();
                $obj->deserialize($value);
                array_push($this->UpstreamSet, $obj);
            }
        }
    }
}
