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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Front-end rule description
 *
 * @method integer getID() Obtain ID sequence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set ID sequence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRule() Obtain Detailed rules
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRule(string $Rule) Set Detailed rules
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FrontEndRule extends AbstractModel
{
    /**
     * @var integer ID sequence
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Detailed rules
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rule;

    /**
     * @param integer $ID ID sequence
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Rule Detailed rules
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
