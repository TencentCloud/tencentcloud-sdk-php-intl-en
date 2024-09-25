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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAntiInfoLeakRules request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method integer getActionType() Obtain Actions: 0 (alarm), 1 (replace), 2 (only display the first four digits), 3 (only display the last four digits), 4 (block)
 * @method void setActionType(integer $ActionType) Set Actions: 0 (alarm), 1 (replace), 2 (only display the first four digits), 3 (only display the last four digits), 4 (block)
 * @method array getStrategies() Obtain Policy details
 * @method void setStrategies(array $Strategies) Set Policy details
 * @method string getUri() Obtain URL
 * @method void setUri(string $Uri) Set URL
 */
class AddAntiInfoLeakRulesRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var integer Actions: 0 (alarm), 1 (replace), 2 (only display the first four digits), 3 (only display the last four digits), 4 (block)
     */
    public $ActionType;

    /**
     * @var array Policy details
     */
    public $Strategies;

    /**
     * @var string URL
     */
    public $Uri;

    /**
     * @param string $Domain Domain name
     * @param string $Name Rule name
     * @param integer $ActionType Actions: 0 (alarm), 1 (replace), 2 (only display the first four digits), 3 (only display the last four digits), 4 (block)
     * @param array $Strategies Policy details
     * @param string $Uri URL
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new StrategyForAntiInfoLeak();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }
    }
}
