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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * View object
 *
 * @method string getViewName() Obtain View name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViewName(string $ViewName) Set View name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewViewName() Obtain View name after migration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewViewName(string $NewViewName) Set View name after migration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ViewItem extends AbstractModel
{
    /**
     * @var string View name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ViewName;

    /**
     * @var string View name after migration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewViewName;

    /**
     * @param string $ViewName View name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewViewName View name after migration
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
        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("NewViewName",$param) and $param["NewViewName"] !== null) {
            $this->NewViewName = $param["NewViewName"];
        }
    }
}
