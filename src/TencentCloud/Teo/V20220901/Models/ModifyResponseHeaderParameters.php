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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modify HTTP node response header configuration parameters.
 *
 * @method array getHeaderActions() Obtain HTTP origin-pull header rules list.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHeaderActions(array $HeaderActions) Set HTTP origin-pull header rules list.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class ModifyResponseHeaderParameters extends AbstractModel
{
    /**
     * @var array HTTP origin-pull header rules list.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HeaderActions;

    /**
     * @param array $HeaderActions HTTP origin-pull header rules list.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("HeaderActions",$param) and $param["HeaderActions"] !== null) {
            $this->HeaderActions = [];
            foreach ($param["HeaderActions"] as $key => $value){
                $obj = new HeaderAction();
                $obj->deserialize($value);
                array_push($this->HeaderActions, $obj);
            }
        }
    }
}
