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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * sql expression parsing object for data quality custom rules.
 *
 * @method array getTableExpressions() Obtain sql expression table name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableExpressions(array $TableExpressions) Set sql expression table name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParamExpressions() Obtain sql expression field name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamExpressions(array $ParamExpressions) Set sql expression field name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSystemTemplateExpressions() Obtain Add model detection class system template sql placeholder collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSystemTemplateExpressions(array $SystemTemplateExpressions) Set Add model detection class system template sql placeholder collection.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QualitySqlExpression extends AbstractModel
{
    /**
     * @var array sql expression table name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableExpressions;

    /**
     * @var array sql expression field name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamExpressions;

    /**
     * @var array Add model detection class system template sql placeholder collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SystemTemplateExpressions;

    /**
     * @param array $TableExpressions sql expression table name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ParamExpressions sql expression field name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SystemTemplateExpressions Add model detection class system template sql placeholder collection.
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
        if (array_key_exists("TableExpressions",$param) and $param["TableExpressions"] !== null) {
            $this->TableExpressions = [];
            foreach ($param["TableExpressions"] as $key => $value){
                $obj = new QualitySqlExpressionTable();
                $obj->deserialize($value);
                array_push($this->TableExpressions, $obj);
            }
        }

        if (array_key_exists("ParamExpressions",$param) and $param["ParamExpressions"] !== null) {
            $this->ParamExpressions = $param["ParamExpressions"];
        }

        if (array_key_exists("SystemTemplateExpressions",$param) and $param["SystemTemplateExpressions"] !== null) {
            $this->SystemTemplateExpressions = $param["SystemTemplateExpressions"];
        }
    }
}
