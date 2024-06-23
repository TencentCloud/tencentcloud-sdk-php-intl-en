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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Quality Custom Rule's SQL Expression Resolved Object
 *
 * @method array getTableExpressions() Obtain SQL Expression Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableExpressions(array $TableExpressions) Set SQL Expression Table Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getParamExpressions() Obtain SQL Expression Column Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParamExpressions(array $ParamExpressions) Set SQL Expression Column Name
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SqlExpression extends AbstractModel
{
    /**
     * @var array SQL Expression Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableExpressions;

    /**
     * @var array SQL Expression Column Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParamExpressions;

    /**
     * @param array $TableExpressions SQL Expression Table Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ParamExpressions SQL Expression Column Name
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
        if (array_key_exists("TableExpressions",$param) and $param["TableExpressions"] !== null) {
            $this->TableExpressions = [];
            foreach ($param["TableExpressions"] as $key => $value){
                $obj = new SqlExpressionTable();
                $obj->deserialize($value);
                array_push($this->TableExpressions, $obj);
            }
        }

        if (array_key_exists("ParamExpressions",$param) and $param["ParamExpressions"] !== null) {
            $this->ParamExpressions = $param["ParamExpressions"];
        }
    }
}
