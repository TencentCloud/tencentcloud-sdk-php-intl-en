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
 * Grayscale rule list.
 *
 * @method array getCanaryRuleList() Obtain Grayscale rule
 * @method void setCanaryRuleList(array $CanaryRuleList) Set Grayscale rule
 * @method integer getTotalCount() Obtain Total number.
 * @method void setTotalCount(integer $TotalCount) Set Total number.
 */
class CloudAPIGatewayCanaryRuleList extends AbstractModel
{
    /**
     * @var array Grayscale rule
     */
    public $CanaryRuleList;

    /**
     * @var integer Total number.
     */
    public $TotalCount;

    /**
     * @param array $CanaryRuleList Grayscale rule
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
        if (array_key_exists("CanaryRuleList",$param) and $param["CanaryRuleList"] !== null) {
            $this->CanaryRuleList = [];
            foreach ($param["CanaryRuleList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayCanaryRule();
                $obj->deserialize($value);
                array_push($this->CanaryRuleList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
