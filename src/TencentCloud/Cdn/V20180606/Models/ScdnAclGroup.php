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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN precise access control configuration
 *
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method array getConfigure() Obtain Specific configurations
 * @method void setConfigure(array $Configure) Set Specific configurations
 * @method string getResult() Obtain Rule action, which is generally `refuse`.
 * @method void setResult(string $Result) Set Rule action, which is generally `refuse`.
 * @method string getStatus() Obtain Whether the rule is effective. Valid values: `active` and `inactive`.
 * @method void setStatus(string $Status) Set Whether the rule is effective. Valid values: `active` and `inactive`.
 */
class ScdnAclGroup extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var array Specific configurations
     */
    public $Configure;

    /**
     * @var string Rule action, which is generally `refuse`.
     */
    public $Result;

    /**
     * @var string Whether the rule is effective. Valid values: `active` and `inactive`.
     */
    public $Status;

    /**
     * @param string $RuleName Rule name
     * @param array $Configure Specific configurations
     * @param string $Result Rule action, which is generally `refuse`.
     * @param string $Status Whether the rule is effective. Valid values: `active` and `inactive`.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Configure",$param) and $param["Configure"] !== null) {
            $this->Configure = [];
            foreach ($param["Configure"] as $key => $value){
                $obj = new ScdnAclRule();
                $obj->deserialize($value);
                array_push($this->Configure, $obj);
            }
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
