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
 * Output parameters
 *
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getStatus() Obtain Status value
 * @method void setStatus(integer $Status) Set Status value
 * @method string getAction() Obtain Action
 * @method void setAction(string $Action) Set Action
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method array getStrategies() Obtain Match condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategies(array $Strategies) Set Match condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUri() Obtain Matched URL

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUri(string $Uri) Set Matched URL

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time

Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeAntiLeakageItem extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Status value
     */
    public $Status;

    /**
     * @var string Action
     */
    public $Action;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var array Match condition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Strategies;

    /**
     * @var string Matched URL

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uri;

    /**
     * @var string Modification time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @param integer $RuleId Rule ID
     * @param string $Name Name
     * @param integer $Status Status value
     * @param string $Action Action
     * @param string $CreateTime Creation time
     * @param array $Strategies Match condition
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uri Matched URL

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new DescribeAntiInfoLeakRulesStrategyItem();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
