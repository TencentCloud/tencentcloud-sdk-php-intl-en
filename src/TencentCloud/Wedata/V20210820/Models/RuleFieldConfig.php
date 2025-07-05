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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule Variable Replacement
 *
 * @method array getWhereConfig() Obtain Where Variable
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWhereConfig(array $WhereConfig) Set Where Variable
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTableConfig() Obtain Database Table Variable
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableConfig(array $TableConfig) Set Database Table Variable
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleFieldConfig extends AbstractModel
{
    /**
     * @var array Where Variable
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WhereConfig;

    /**
     * @var array Database Table Variable
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableConfig;

    /**
     * @param array $WhereConfig Where Variable
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $TableConfig Database Table Variable
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("WhereConfig",$param) and $param["WhereConfig"] !== null) {
            $this->WhereConfig = [];
            foreach ($param["WhereConfig"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->WhereConfig, $obj);
            }
        }

        if (array_key_exists("TableConfig",$param) and $param["TableConfig"] !== null) {
            $this->TableConfig = [];
            foreach ($param["TableConfig"] as $key => $value){
                $obj = new TableConfig();
                $obj->deserialize($value);
                array_push($this->TableConfig, $obj);
            }
        }
    }
}
