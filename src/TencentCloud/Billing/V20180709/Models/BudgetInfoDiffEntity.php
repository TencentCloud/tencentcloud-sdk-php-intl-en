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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Record change information for budget project related fields
 *
 * @method string getProperty() Obtain Modify properties
 * @method void setProperty(string $Property) Set Modify properties
 * @method string getBefore() Obtain Content before modification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBefore(string $Before) Set Content before modification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAfter() Obtain Content after modification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAfter(string $After) Set Content after modification.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetInfoDiffEntity extends AbstractModel
{
    /**
     * @var string Modify properties
     */
    public $Property;

    /**
     * @var string Content before modification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Before;

    /**
     * @var string Content after modification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $After;

    /**
     * @param string $Property Modify properties
     * @param string $Before Content before modification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $After Content after modification.
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
        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("Before",$param) and $param["Before"] !== null) {
            $this->Before = $param["Before"];
        }

        if (array_key_exists("After",$param) and $param["After"] !== null) {
            $this->After = $param["After"];
        }
    }
}
