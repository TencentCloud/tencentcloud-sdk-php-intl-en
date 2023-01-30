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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDefenceEventTendency response structure.
 *
 * @method array getDefendedList() Obtain Trend of exploit prevention events
 * @method void setDefendedList(array $DefendedList) Set Trend of exploit prevention events
 * @method array getAttackList() Obtain Trend of vulnerability attack events
 * @method void setAttackList(array $AttackList) Set Trend of vulnerability attack events
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulDefenceEventTendencyResponse extends AbstractModel
{
    /**
     * @var array Trend of exploit prevention events
     */
    public $DefendedList;

    /**
     * @var array Trend of vulnerability attack events
     */
    public $AttackList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DefendedList Trend of exploit prevention events
     * @param array $AttackList Trend of vulnerability attack events
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("DefendedList",$param) and $param["DefendedList"] !== null) {
            $this->DefendedList = [];
            foreach ($param["DefendedList"] as $key => $value){
                $obj = new VulDefenceEventTendency();
                $obj->deserialize($value);
                array_push($this->DefendedList, $obj);
            }
        }

        if (array_key_exists("AttackList",$param) and $param["AttackList"] !== null) {
            $this->AttackList = [];
            foreach ($param["AttackList"] as $key => $value){
                $obj = new VulDefenceEventTendency();
                $obj->deserialize($value);
                array_push($this->AttackList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
