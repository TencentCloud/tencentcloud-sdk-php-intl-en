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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionListResponseDeprecatingInfo
 *
 * @method boolean getHidden() Obtain Whether to hide
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHidden(boolean $Hidden) Set Whether to hide
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNewViewNames() Obtain Names of new views
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewViewNames(array $NewViewNames) Set Names of new views
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribePolicyConditionListResponseDeprecatingInfo extends AbstractModel
{
    /**
     * @var boolean Whether to hide
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hidden;

    /**
     * @var array Names of new views
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewViewNames;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param boolean $Hidden Whether to hide
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NewViewNames Names of new views
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
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
        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }

        if (array_key_exists("NewViewNames",$param) and $param["NewViewNames"] !== null) {
            $this->NewViewNames = $param["NewViewNames"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
