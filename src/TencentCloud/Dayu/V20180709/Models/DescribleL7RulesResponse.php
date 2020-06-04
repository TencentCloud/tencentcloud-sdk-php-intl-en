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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribleL7Rules response structure.
 *
 * @method array getRules() Obtain Forwarding rule list
 * @method void setRules(array $Rules) Set Forwarding rule list
 * @method integer getTotal() Obtain Total number of rules
 * @method void setTotal(integer $Total) Set Total number of rules
 * @method array getHealths() Obtain Health check configuration list
 * @method void setHealths(array $Healths) Set Health check configuration list
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribleL7RulesResponse extends AbstractModel
{
    /**
     * @var array Forwarding rule list
     */
    public $Rules;

    /**
     * @var integer Total number of rules
     */
    public $Total;

    /**
     * @var array Health check configuration list
     */
    public $Healths;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Rules Forwarding rule list
     * @param integer $Total Total number of rules
     * @param array $Healths Health check configuration list
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new L7RuleEntry();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Healths",$param) and $param["Healths"] !== null) {
            $this->Healths = [];
            foreach ($param["Healths"] as $key => $value){
                $obj = new L7RuleHealth();
                $obj->deserialize($value);
                array_push($this->Healths, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
